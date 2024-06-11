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
        Schema::create('products_and_services', function (Blueprint $table) {
            $table->integer('service_code')->primary();
            $table->integer('merchent_id');
            $table->foreign('merchent_id')->references('merchent_id')->on('merchents');
            $table->timestamps(); // If you want to add created_at and updated_at columns
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_and_services');
    }
};
