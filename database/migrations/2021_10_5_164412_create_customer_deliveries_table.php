<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_deliveries', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->bigInteger('driver_id')->unsigned()->nullable();
            $table->foreign('driver_id')->references('id')->on('drivers');

            $table->bigInteger('delivery_company_id')->unsigned()->nullable();
            $table->foreign('delivery_company_id')->references('id')->on('delivery_companies');

            $table->bigInteger('delivery_company_driver_id')->unsigned()->nullable();
            $table->foreign('delivery_company_driver_id')->references('id')->on('delivery_company_drivers');

            $table->date('date')->nullable();
            $table->string('status', 100)->nullable();
            
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
        Schema::dropIfExists('customer_deliveries');
    }
}
