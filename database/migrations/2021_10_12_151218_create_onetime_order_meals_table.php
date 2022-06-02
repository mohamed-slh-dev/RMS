<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnetimeOrderMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onetime_order_meals', function (Blueprint $table) {
            $table->id();

            // foregins
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('onetime_orders');

            $table->bigInteger('meal_id')->unsigned();
            $table->foreign('meal_id')->references('id')->on('package_meals');

            $table->bigInteger('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('id')->on('packages');


            $table->double('price', 8, 2)->nullable();
            $table->double('selling_price', 8, 2)->nullable();
            

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
        Schema::dropIfExists('onetime_order_meals');
    }
}
