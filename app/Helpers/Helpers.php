<?php

use App\Models\Business;
use App\Models\Product;
use App\Models\User;
use App\Models\Party;
use App\Models\Sale;
use  App\Models\BusinessSetting;
use App\Models\Option;
use App\Notifications\SendNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Notification;

function productQuantitySerial($product_id,$quantity=0,$free_quantity=0 ,$status_text=null)
{
    $productInfo = Product::find($product_id);
    if ($productInfo){
        $data = [
            'quantity' => ($status_text === "Increment") ? $productInfo->quantity + $quantity : $productInfo->quantity - $quantity,
            'free_quantity' => ($status_text === "Increment") ? $productInfo->free_quantity + $free_quantity : $productInfo->free_quantity - $free_quantity,

        ];
        $productInfo->update($data);
        return true;
    }else{
        return false;
    }
}

//old
function cache_remember(string $key, callable $callback, int $ttl = 1800): mixed {
    return cache()->remember($key, env('CACHE_LIFETIME', $ttl), $callback);
}

function get_option($key) {
    return cache_remember($key, function () use ($key) {
        return Option::where('key', $key)->first()->value ?? [];
    });
}

function formatted_date(string $date = null, string $format = 'd M, Y'): ?string
{
    return !empty($date) ? Date::parse($date)->format($format) : null;
}

function formatted_time(string $time = null, string $format = 'g:i A'): ?string
{
    return !empty($time) ? \Carbon\Carbon::parse($time)->format($format) : null;
}

function sendNotification($id, $url, $message, $user = null) {
    $notify = [
        'id' => $id,
        'url' => $url,
        'user' => $user,
        'message' => $message,
    ];

    $notify_user = User::where('role', 'superadmin')->first();
    Notification::send($notify_user, new SendNotification($notify));
}
function diffrDays($date=null)
{
    $days = !empty($date) ? (now()->gt(Carbon::parse($date)) && Carbon::parse($date)->diffInDays(now()) > 0 ? '-' . Carbon::parse($date)->diffInDays(now()) : Carbon::parse($date)->diffInDays(now())) : null;
    return $days;
}
function salePrefix()
{
    $business_settings = BusinessSetting::where('business_id',auth()->user()->business_id)->where('key','business settings')->first();
    $data['sale_prefix'] =  $business_settings->value['prefix']['sale_prefix'];
    $data['sale_invoice_prefix'] =  $business_settings->value['prefix']['sale_invoice_prefix'];
    return $data;
}
function purchasePrefix()
{
    $business_settings = BusinessSetting::where('business_id',auth()->user()->business_id)->where('key','business settings')->first();
    $data['purchase_prefix'] =  $business_settings->value['prefix']['purchase_prefix'];
    $data['purchase_invoice_prefix'] =  $business_settings->value['prefix']['purchase_invoice_prefix'];
    return $data;
}
function prefixAll()
{
    $business_settings = BusinessSetting::where('business_id',auth()->user()->business_id)->where('key','business settings')->first();
    $prefix =  $business_settings->value['prefix'];

    return $prefix;
}
function businessSettings($business_id)
{
    $filePath = storage_path('app/business_settings.json');
    $jsonData = json_decode(file_get_contents($filePath));
    BusinessSetting::updateOrCreate(
        ['business_id'=>$business_id,'key'=>'business settings'],
        ['value'=>$jsonData]
    );
}
function partyCurrentDue($party_id)
{
    $patyBalance = Party::where('id',$party_id)->value('balance');
    $sale_due = Sale::where('party_id',$party_id)->sum('payable_due_amount');
    $due = ($patyBalance<0)? abs($sale_due)+abs($patyBalance):abs($sale_due);
    return  $due;
}
function shopCount()
{

    $latestSubscriptions = DB::table('subscriptions')
        ->select('subscriptions.*')
        ->whereIn('subscriptions.id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('subscriptions')
                ->groupBy('business_id');
        });

    $countResult = DB::table('businesses')
        ->leftJoinSub($latestSubscriptions, 'latest_subscriptions', function ($join) {
            $join->on('businesses.id', '=', 'latest_subscriptions.business_id');
        })
        ->select(
            DB::raw("SUM(CASE WHEN businesses.deleted_at IS NULL AND businesses.status = 1 AND (latest_subscriptions.ended_at > NOW() OR latest_subscriptions.ended_at IS NULL) THEN 1 ELSE 0 END) as active_shop_count"),
            DB::raw("SUM(CASE WHEN businesses.deleted_at IS NULL AND businesses.status = 1 AND latest_subscriptions.ended_at < NOW() AND latest_subscriptions.ended_at IS NOT NULL THEN 1 ELSE 0 END) as expire_shop_count"),
            DB::raw("SUM(CASE WHEN businesses.deleted_at IS NULL AND businesses.status = 0 THEN 1 ELSE 0 END) as inactive_shop_count"),
            DB::raw("SUM(CASE WHEN businesses.deleted_at IS NOT NULL THEN 1 ELSE 0 END) as deleted_shop_count")
        )
        ->first();

    return$countResult;
}
function customPagination($items, $perPage, $page, $baseUrl) {
    $page = intval($page);
    $perPage = intval($perPage);

    if ($perPage <= 0) {
        $perPage = 1; // Default value or set it to any desired default
    }

    $totalItems = count($items);
    $lastPage = ceil($totalItems / $perPage);
    $offset = ($page - 1) * $perPage;
    $paginatedData = array_slice($items, $offset, $perPage);

    $from = $totalItems > 0 ? $offset + 1 : 0;
    $to = min($offset + $perPage, $totalItems);

    $links = [];

    // Previous Page Link
    if ($page == 1) {
        $links[] = [
            'url' => null,
            'label' => '&laquo; Previous',
            'active' => false,
        ];
    } else {
        $links[] = [
            'url' => $baseUrl . '?page=' . ($page - 1),
            'label' => '&laquo; Previous',
            'active' => false,
        ];
    }

    // Page Links
    for ($i = 1; $i <= $lastPage; $i++) {
        $links[] = [
            'url' => $baseUrl . '?page=' . $i,
            'label' => (string) $i,
            'active' => $i == $page,
        ];
    }

    // Next Page Link
    if ($page < $lastPage) {
        $links[] = [
            'url' => $baseUrl . '?page=' . ($page + 1),
            'label' => 'Next &raquo;',
            'active' => false,
        ];
    } else {
        $links[] = [
            'url' => null,
            'label' => 'Next &raquo;',
            'active' => false,
        ];
    }

    return [
        'data' => $paginatedData,
        'pagination' => [
            'total' => $totalItems,
            'per_page' => $perPage,
            'current_page' => $page,
            'last_page' => $lastPage,
            'next_page_url' => ($page < $lastPage) ? $baseUrl . '?page=' . ($page + 1) : null,
            'prev_page_url' => ($page > 1) ? $baseUrl . '?page=' . ($page - 1) : null,
            'from' => $from,
            'to' => $to,
            'links' => $links,
        ],
    ];
}
function businessSettingsJsonCreate($business_setting){

    $data = [
        'product' => [
            'item_info' => [
                'warehouse' => true,
                'sku_code' => true,
                'brand' => true,
                'model' => false,
                'shipping_service_charge' => false,
                'image' => true,
                'warranty' => false,
                'description' => false
            ],
            'price' => [
                'wholesale_price' => false,
                'dealer_price' => false,
                'product_discount' => false,
            ],
            'variation' => [
                'variation_menu' => true,
                'size' => false,
                'color' => false,
                'weight' => false,
                'type' => false,
                'capacity' => false,
            ],
            'item_stock' => [
                'free_quantity' => false,
                'low_quantity' => false,
                'serial_no' => true,
                'unit' => false,
                'expire_date' => false,
                'manufacturer' => false,
                'manufacturer_date' => false,
            ],
            'bulk_product' => [
                'download_form' => false,
                'upload_form' => true,
            ],
            'invoice_prefix'=> [
                'sale_prefix'=> '8989',
                'purchase_prefix'=> '8989',
                'sale_invoice_prefix'=> false,
                'purchase_invoice_prefix'=> false
            ],
            'application' => [
                'online_sale'=> false,
                'currency'=>'USD',
                'backup'=> true,
                'backup_duration'=>'7 Days',
                'tin_number'=>false
            ],
            'scanner_settings' => [
                'barcode_scanner'=> false
            ]
        ],
        'sale_settings' => [
            'transaction_header' => [
                'time' => false,
                'sales_by' => true,
                'description' => true,
                'image' => true,
                "due_date"=>true
            ],
            'taxes_discount_total' => [
                'discount' => true,
                'tax' => true
            ],
            'loan' => [
                'interest' => true,
                'Number_of_installment' => true,
                'amount_of_installment' => true,
                'collect' => true,
                'installment_start_date' => true
            ],
            'sms' =>[
                'sale_sms'=>false,
                'sale_due_sms'=>false,
                'sale_loan_sms'=>false

            ]
        ],
        'purchase_settings' => [
            'transaction_header' => [
                'time' => false,
                'sales_by' => true,
                'description' => true,
                'image' => true
            ],
            'taxes_discount_total' => [
                'discount' => true,
                'tax' => true
            ],
            'sms' =>[
                'purchase_sms'=>false,
                'purchase_due_sms'=>false,
            ]
        ],
        'party_settings' => [
            'party_section' => [
                'phone_number' => true,
                'Email' => false
            ],
            'balance' => [
                'credit_limit' => true,
                'date' => false
            ],
            'address' => [
                'address' => true,
                'email' => true,
                'nid_passport' => true
            ],
            'reference' => [
                'email' => true,
                'address' => true,
                'nid_passport' => true
            ]
        ],
        'invoice_print_settings' => [
            'printer_settings' => [
                'normal_printer' => [
                    'paper_size'=> 'A4',
                    'text_size'=> 'MEDIUM'
                ],
                'thermal_printer'=> [
                    'paper_size'=> '2 INCH'
                ]
            ],
            'company_info' => [
                'logo' => false,
                'mobile' => true,
                'address' => true,
                'email' => true
            ],
            'invoice_item' => [
                'warranty' => true,
                'discount' => true,
                'vat' => true,
            ],
            'action' => [
                'print' => true,
                'pos_print' => true,
                'share' => true
            ]
        ],
        'sms_settings' => [
            'use_sms_systems' => [
                'pos_system' => true,
                'personal_use' => false,
                'other_business' => false
            ],
            'menu' => [
                'send_sms' => true,
                'group' => true,
                'schedule' => true,
                'sms_camping' => true,
                'template' => true,
                'report' => true
            ],
            'input_content' => [
                'select_sender_id' => true,
                'select_sms_type' => true,
                'enter_sms_content' => true,
                'insert_sms_template' => true,
                'schedule_sms' => true
            ]
        ],
        'online_store_settings' => [
            'accept_online_orders' => true,
            'delivery_charges' => true,
            'tax' => true,
            'item_discount' => false,
            'in_stock' => false
        ]
    ];

    // Path to the storage directory
    $storagePath = storage_path('app');

    // Content to be written to the JSON file
    $jsonData = json_encode($business_setting);

    // File name (change this to your JSON file's name)
    $fileName = 'business_settings.json';

    // Full path to the JSON file
    $filePath = $storagePath . '/' . $fileName;

    // Save JSON data to the file
    file_put_contents($filePath, $jsonData);
    return ;
}
