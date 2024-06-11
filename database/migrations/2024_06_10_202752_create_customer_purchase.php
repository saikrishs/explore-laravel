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
        Schema::create('customer_purchase', function (Blueprint $table) {
            $table->integer('purchase_id')->primary();
            $table->integer('customer_id');
            $table->integer('service_code');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('service_code')->references('service_code')->on('products_and_services');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_purchase');
    }
};
