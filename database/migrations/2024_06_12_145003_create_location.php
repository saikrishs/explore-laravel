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
        Schema::create('location', function (Blueprint $table) {
            $table->integer('address_id')->primary();
            $table->integer('line_1_number_building');
            $table->integer('line_2_number_street');
            $table->integer('line_3_number_locality');
            $table->string('city', 50);
            $table->integer('zip_postcode');
            $table->string('state_province_county', 50);
            $table->string('iso_coutry_code', 50);
            $table->string('other_address_details', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
