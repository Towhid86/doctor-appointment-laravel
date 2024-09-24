<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('subtitle');
            $table->string('role')->nullable();
            $table->double('price')->default(0.00);
            $table->double('sales_price')->default(0.00);
            $table->double('discount')->default(0);
            $table->integer('duration')->nullable();
            $table->string('duration_type')->nullable(); // monthly, yearly, lifetime
            $table->text('features')->nullable(); // name, details, status
            $table->integer('free_month')->default(0);
            $table->string('feature_plan_title',255)->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
