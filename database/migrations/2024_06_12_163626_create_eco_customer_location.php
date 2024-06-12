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
        Schema::create('eco_customer_location', function (Blueprint $table) {
            $table->integer('customer_id');
            $table->Integer('address_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('address_type_code', 50);
            $table->primary('date_from');
            $table->foreign('customer_id')->references('customer_id')->on('eco_customers');
            $table->foreign('address_id')->references('address_id')->on('location');
            $table->foreign('address_type_code')->references('address_type_code')->on('ref_location_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_customer_location');
    }
};
