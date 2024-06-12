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
        Schema::create('customers_orders', function (Blueprint $table) {
            $table->integer('order_id')->primary();
            $table->Integer('customer_id');
            $table->Integer('customer_payment_method_id');
            $table->string('order_status_code', 50);
            $table->date('date_order_placed');
            $table->date('date_order_paid');
            $table->integer('date_order_price');
            $table->string('date_order_details', 200);
            $table->string('category', 200);
            $table->timestamps();

            $table->foreign('customer_id')->references('customer_id')->on('eco_customers');
            $table->foreign('customer_payment_method_id')->references('customer_payment_method_id')->on('customer_payment');
            $table->foreign('order_status_code')->references('order_status_code')->on('order_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_orders');
    }
};
