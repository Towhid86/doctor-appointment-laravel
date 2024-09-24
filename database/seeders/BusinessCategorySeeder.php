<?php

namespace Database\Seeders;

use App\Models\BusinessCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'=>'Grocery','description'=>'Grocery','status'=>1
            ],
            [
                'name'=>'Fashion','description'=>'Fashion','status'=>1
            ],
            [
                'name'=>'Fruits','description'=>'Fruits','status'=>1
            ],
            [
                'name'=>'Medical Store','description'=>'Medical Store','status'=>1
            ]
        ];
        BusinessCategory::insert($categories);
    }
}
