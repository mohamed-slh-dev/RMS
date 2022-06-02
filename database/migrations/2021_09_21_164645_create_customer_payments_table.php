<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();

            // foregins
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->string('card_number', 100)->nullable();
            $table->string('security_code', 100)->nullable();
            $table->string('expiration', 100)->nullable();
            $table->string('paypal_email', 255)->nullable();
            $table->string('cash_on_delivery', 100)->nullable();
            $table->string('bank_transfer', 100)->nullable();

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
        Schema::dropIfExists('customer_payments');
    }
}
