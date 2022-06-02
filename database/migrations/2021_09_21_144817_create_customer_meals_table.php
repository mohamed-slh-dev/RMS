<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_meals', function (Blueprint $table) {

            $table->id();

            // foreign keys
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');


            $table->bigInteger('meal_type_id')->unsigned()->nullable();
            $table->foreign('meal_type_id')->references('id')->on('meal_types');


            $table->bigInteger('package_plan_meal_id')->unsigned()->nullable();
            $table->foreign('package_plan_meal_id')->references('id')->on('package_plan_meals');

            $table->bigInteger('chif_id')->unsigned()->nullable();
            $table->foreign('chif_id')->references('id')->on('chifs');
            
            $table->string('date', 100)->nullable();
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
        Schema::dropIfExists('customer_meals');
    }
}
