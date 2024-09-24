<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = array(
            array('id' => '2', 'user_id' => '1', 'name' => 'Always Free', 'subtitle' => 'Web + Mobile', 'role' => NULL, 'price' => '0', 'sales_price' => '0', 'discount' => '0', 'duration' => '11', 'duration_type' => 'monthly', 'features' => '{"user_limit_limit":"2","user_limit_unlimited":0,"user_limit_details":"Only two device is allowed.","sales_list_limit":"100","sales_list_unlimited":0,"sales_list_details":"Only 100 sales.","purchase_limit":"50","purchase_unlimited":0,"purchase_details":"Only fifty person can get access this.","party_limit":null,"party_unlimited":1,"party_details":"Enjoy unlimited party.","product_limit":null,"product_unlimited":1,"product_details":"Unlimited product","party_credit_limit_status":1,"party_credit_limit_details":"Party credit limit is here","party_reference_status":1,"party_reference_details":"Party Reference","bulk_upload_status":1,"bulk_upload_details":"Bulk Upload","product_serial_status":1,"product_serial_details":"There is product serial","low_stock_alert_status":0,"low_stock_alert_details":"You can get low stock alert","wholesale_price_status":1,"wholesale_price_details":"wholesale price is available","dealer_price_status":0,"dealer_price_details":"Dealer price is here","stock_report_status":1,"stock_report_details":"You can see stock report","loss_profit_status":0,"loss_profit_details":"Loss Profit is shown","ledger_status":1,"ledger_details":"Ledger","reports_status":1,"reports_details":"Reports available","income_status":0,"income_details":"Income is 5000","expense_status":0,"expense_details":"Expense is good","invoice_prefix_status":1,"invoice_prefix_details":"Invoice Prefix access","dashboard_status":0,"dashboard_details":"Dashboard access","online_store_status":0,"online_store_details":"Online store permit","loan_status":1,"loan_details":"Get Loan","development_by_status":0,"development_by_details":"Baari Team","supplier_due_status":0,"supplier_due_details":"This is supplier due","party_statement_report_status":1,"party_statement_report_details":"This is party statement report","invoice_share_status":0,"invoice_share_details":"this is invoice share","party_feature_status":0,"party_feature_details":"this is party feature","stock_status":0,"stock_details":"this is stock feature","warehouse_status":0,"warehouse_details":"warehose access","due_list_status":1,"due_list_details":"See due list"}', 'free_month' => '6', 'feature_plan_title' => 'Everything In Free', 'status' => 1, 'created_at' => '2024-06-01 17:57:52', 'updated_at' => '2024-06-01 17:57:52')
        );
        Plan::insert($plans);
    }
}
