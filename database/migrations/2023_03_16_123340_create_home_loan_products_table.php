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
        Schema::create('home_loan_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adviser_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->string('down_payment_amount');
            $table->string('property_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_loan_products');
    }
};
