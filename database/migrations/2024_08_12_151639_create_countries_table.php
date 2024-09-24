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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('nick_name', 100)->nullable();
            $table->string('iso_code', 100)->nullable();
            $table->string('alpha2_code', 100)->nullable();
            $table->string('alpha3_code', 100)->nullable();
            $table->integer('num_code')->nullable();
            $table->integer('phone_code')->nullable();
            $table->string('flag', 100)->nullable();
            $table->string('currency', 100)->nullable();
            $table->integer('default')->default(0);
            $table->string('urrency_iso_code',100)->nullable();
            $table->string('symbol',100)->nullable();
            $table->string('full_unit_name',100)->nullable();
            $table->string('sub_unit_name',100)->nullable();
            $table->integer('currency_default')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
