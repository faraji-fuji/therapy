<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            // paymeny results
            $table->string('merchantRequestID');
            $table->string('checkoutRequestID');
            $table->string('resultCode');
            $table->string('resultDescription');
            $table->string('amount');
            $table->string('mpesaReceiptNumber');
            $table->string('transactionDate');
            $table->string('phoneNumber');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_results');
    }
};
