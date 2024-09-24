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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->cascadeOnDelete();
            $table->foreignId('plan_id')->constrained()->cascadeOnDelete();
            $table->string('name',150)->nullable();
            $table->double('subtitle',150)->nullable();
            $table->double('price')->default(0);
            $table->double('sale_price')->default(0);
            $table->double('discount')->default(0);
            $table->integer('duration')->nullable();
            $table->integer('free_month')->nullable();
            $table->string('duration_type')->nullable();
            $table->text('feature_plan_title')->nullable();
            $table->text('features')->nullable();
            $table->dateTime('started_at')->nullable();
            $table->dateTime('ended_at')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
