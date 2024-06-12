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
        Schema::create('order_status', function (Blueprint $table) {
            $table->Integer('customer_payment_method_id');
            $table->string('order_status_code', 50)->primary();
            $table->timestamps();

            // Adding foreign key constraint
            $table->foreign('customer_payment_method_id')
                  ->references('customer_payment_method_id')
                  ->on('customer_payment')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_status');
    }
};
