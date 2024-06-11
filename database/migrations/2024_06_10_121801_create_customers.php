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
          Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id')->primary();
            $table->string('customer_type_code', 50);
            $table->timestamps();
            
            $table->foreign('customer_type_code')
                  ->references('customer_type_code')
                  ->on('ref_customer_types')
                  ->onDelete('cascade'); // Adjust the onDelete behavior as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
