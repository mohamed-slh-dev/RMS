<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMealPlanMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_meal_plan_meals', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('restaurant_meal_plan_id')->unsigned();
            $table->foreign('restaurant_meal_plan_id')->references('id')->on('restaurant_meal_plans');

            $table->bigInteger('meal_type_id')->unsigned()->nullable();
            $table->foreign('meal_type_id')->references('id')->on('meal_types');
            

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
        Schema::dropIfExists('restaurant_meal_plan_meals');
    }
}
