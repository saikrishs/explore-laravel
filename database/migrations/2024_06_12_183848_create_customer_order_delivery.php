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
        Schema::create('customer_order_delivery', function (Blueprint $table) {
            $table->Integer('order_id'); // Assuming order_id is the primary key

            // Foreign key reference
            $table->foreign('order_id')->references('order_id')->on('Customers_orders')->onDelete('cascade'); // Assuming cascade delete on Customers_orders table

            $table->date('date_reported');
            $table->integer('delivery_status_code');

            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_order_delivery');
    }
};
