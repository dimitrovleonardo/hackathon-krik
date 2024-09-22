<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('paypal_donations', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2)->nullable(); // To store preset or custom amount
            $table->string('payment_method')->nullable(); // To store the payment method (Card or PayPal)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paypal_donations');
    }
};
