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
        Schema::create('cash_loan_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adviser_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->string('loan_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_loan_products');
    }
};
