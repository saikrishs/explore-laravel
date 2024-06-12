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
        Schema::create('product_types', function (Blueprint $table) {
            $table->integer('product_type_id'); // Changed to bigIncrements for auto-incrementing primary key
            $table->integer('supplier_id'); // Changed to unsignedBigInteger for foreign key
            $table->string('product_type_code', 50)->primary(); // Defining product_type_code as VARCHAR(50)

            // Foreign key constraint
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
