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
        Schema::create('customer_payment', function (Blueprint $table) {
            $table->integer('customer_payment_method_id')->primary(); // Using bigIncrements for auto-incrementing primary key
            $table->Integer('customer_id'); // Assuming customer_id references 'customers' table

            // Define foreign key constraint
            $table->foreign('customer_id')
                  ->references('customer_id')
                  ->on('eco_customers');

            $table->timestamps(); // Adding created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payment');
    }
};
