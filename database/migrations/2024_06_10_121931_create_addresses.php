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
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('address_id')->primary();
            $table->string('address_type_code', 100);
            // Add other necessary columns here

            // Set foreign key constraint
            $table->foreign('address_type_code')
                  ->references('address_type_code')
                  ->on('ref_address_type')
                  ->onDelete('cascade'); // Adjust the onDelete action as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
