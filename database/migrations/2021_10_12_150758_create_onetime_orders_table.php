<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnetimeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onetime_orders', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name', 255)->nullable();
            $table->string('customer_phone', 255)->nullable();
            $table->string('customer_address', 255)->nullable();
            $table->string('note', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('status', 100)->nullable()->default('pending');


            // foreign keys
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts');


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
        Schema::dropIfExists('onetime_orders');
    }
}
