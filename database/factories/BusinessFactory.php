<?php

namespace Database\Factories;

use App\Models\BusinessCategory;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::get()->random()->id,
            'business_category_id' => BusinessCategory::get()->random()->id,
            'plan_id' => Plan::where('sales_price',0)->get()->random()->id,
            'name' => fake()->company(),
            'status' => 1
        ];
    }
}
