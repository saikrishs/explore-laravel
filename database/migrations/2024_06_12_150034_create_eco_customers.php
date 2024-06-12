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
        Schema::create('eco_customers', function (Blueprint $table) {
            $table->integer('customer_id')->primary();
            $table->string('customer_name', 100);
            $table->BigInteger('customer_phone');
            $table->string('customer_email', 100);
            $table->string('other_customer_details', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_customers');
    }
};
