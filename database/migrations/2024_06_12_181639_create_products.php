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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('product_type_code', 50);
            $table->integer('supplier_id');
            $table->integer('product_price');
            $table->string('other_product_details', 50);
            $table->timestamps();

            $table->foreign('product_type_code')->references('product_type_code')->on('product_types');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
