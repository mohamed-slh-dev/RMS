<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePlanMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_plan_meals', function (Blueprint $table) {
            $table->id();

            // foregin
            $table->bigInteger('package_plan_id')->unsigned();
            $table->foreign('package_plan_id')->references('id')->on('package_plans')->onDelete('cascade');

            $table->bigInteger('package_meal_id')->unsigned();
            $table->foreign('package_meal_id')->references('id')->on('package_meals')->onDelete('cascade');

            $table->bigInteger('meal_type_id')->unsigned();
            $table->foreign('meal_type_id')->references('id')->on('meal_types')->onDelete('cascade');


            $table->string('default', 100)->nullable()->default('false');


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
        Schema::dropIfExists('package_plan_meals');
    }
}
