<?php

namespace Database\Seeders;

use App\Models\PlanFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan_features = array(
            array('id' => '1','title' => 'User Limit','title_key' => 'user_limit','features_type' => 'limit','status' => '1','created_at' => '2024-06-01 16:37:46','updated_at' => '2024-06-01 16:43:53'),
            array('id' => '2','title' => 'Sales List','title_key' => 'sales_list','features_type' => 'limit','status' => '1','created_at' => '2024-06-01 16:38:31','updated_at' => '2024-06-01 16:43:57'),
            array('id' => '3','title' => 'Purchase','title_key' => 'purchase','features_type' => 'limit','status' => '1','created_at' => '2024-06-01 16:38:49','updated_at' => '2024-06-01 16:43:52'),
            array('id' => '4','title' => 'Party','title_key' => 'party','features_type' => 'limit','status' => '1','created_at' => '2024-06-01 16:39:30','updated_at' => '2024-06-01 16:43:51'),
            array('id' => '5','title' => 'Product','title_key' => 'product','features_type' => 'limit','status' => '1','created_at' => '2024-06-01 16:39:46','updated_at' => '2024-06-01 16:43:50'),
            array('id' => '6','title' => 'Party Credit Limit','title_key' => 'party_credit_limit','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:42:17','updated_at' => '2024-06-01 16:43:49'),
            array('id' => '7','title' => 'Party Reference','title_key' => 'party_reference','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:42:43','updated_at' => '2024-06-01 16:43:48'),
            array('id' => '8','title' => 'Bulk Upload','title_key' => 'bulk_upload','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:43:07','updated_at' => '2024-06-01 16:43:48'),
            array('id' => '9','title' => 'Product Serial','title_key' => 'product_serial','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:44:35','updated_at' => '2024-06-01 16:44:35'),
            array('id' => '10','title' => 'Low stock alert','title_key' => 'low_stock_alert','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:45:13','updated_at' => '2024-06-01 16:45:13'),
            array('id' => '11','title' => 'Wholesale Price','title_key' => 'wholesale_price','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:45:41','updated_at' => '2024-06-01 16:45:41'),
            array('id' => '12','title' => 'Dealer Price','title_key' => 'dealer_price','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:46:07','updated_at' => '2024-06-01 16:46:07'),
            array('id' => '13','title' => 'Stock Report','title_key' => 'stock_report','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:46:37','updated_at' => '2024-06-01 16:46:44'),
            array('id' => '14','title' => 'Loss Profit','title_key' => 'loss_profit','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:47:26','updated_at' => '2024-06-01 16:47:26'),
            array('id' => '15','title' => 'Ledger','title_key' => 'ledger','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:47:45','updated_at' => '2024-06-01 16:47:45'),
            array('id' => '16','title' => 'Reports','title_key' => 'reports','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:48:26','updated_at' => '2024-06-01 16:48:26'),
            array('id' => '17','title' => 'Income','title_key' => 'income','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:48:50','updated_at' => '2024-06-01 16:48:50'),
            array('id' => '18','title' => 'Expense','title_key' => 'expense','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:49:09','updated_at' => '2024-06-01 16:49:09'),
            array('id' => '19','title' => 'Invoice Prefix','title_key' => 'invoice_prefix','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:50:30','updated_at' => '2024-06-01 16:50:30'),
            array('id' => '20','title' => 'Dashboard','title_key' => 'dashboard','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:50:54','updated_at' => '2024-06-01 16:50:54'),
            array('id' => '21','title' => 'Online Store','title_key' => 'online_store','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:51:29','updated_at' => '2024-06-01 16:51:29'),
            array('id' => '22','title' => 'Loan','title_key' => 'loan','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:51:38','updated_at' => '2024-06-01 16:51:38'),
            array('id' => '23','title' => 'Development By','title_key' => 'development_by','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 16:52:09','updated_at' => '2024-06-01 16:52:09'),
            array('id' => '24','title' => 'Supplier due','title_key' => 'supplier_due','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:07:28','updated_at' => '2024-06-01 17:07:28'),
            array('id' => '25','title' => 'Party statement Report','title_key' => 'party_statement_report','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:07:53','updated_at' => '2024-06-01 17:07:53'),
            array('id' => '26','title' => 'Invoice share','title_key' => 'invoice_share','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:08:49','updated_at' => '2024-06-01 17:08:49'),
            array('id' => '27','title' => 'Party feature','title_key' => 'party_feature','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:10:32','updated_at' => '2024-06-01 17:10:32'),
            array('id' => '28','title' => 'Stock','title_key' => 'stock','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:24:44','updated_at' => '2024-06-01 17:24:44'),
            array('id' => '29','title' => 'Warehouse','title_key' => 'warehouse','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:25:09','updated_at' => '2024-06-01 17:28:38'),
            array('id' => '30','title' => 'Due List','title_key' => 'due_list','features_type' => 'permission','status' => '1','created_at' => '2024-06-01 17:26:14','updated_at' => '2024-06-01 17:26:14')
          );
          PlanFeature::insert($plan_features);
    }
}
