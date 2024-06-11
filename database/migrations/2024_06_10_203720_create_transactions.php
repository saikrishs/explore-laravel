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
        Schema::create('transactions', function (Blueprint $table) {
            $table->Integer('transaction_id'); // Using bigIncrements for auto-incrementing primary key
            $table->Integer('account_id');
            $table->Integer('purchase_id');
            $table->Integer('related_transaction_id');
            $table->string('transaction_type_code', 50);

            $table->primary('transaction_id');
            $table->foreign('related_transaction_id')->references('transaction_id')->on('transactions')->onDelete('cascade');
            $table->foreign('account_id')->references('account_id')->on('accounts')->onDelete('cascade');
            $table->foreign('purchase_id')->references('purchase_id')->on('customer_purchase')->onDelete('cascade');
            $table->foreign('transaction_type_code')->references('transaction_type_code')->on('ref_transactions_types')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
