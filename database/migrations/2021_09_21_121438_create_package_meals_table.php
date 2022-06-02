<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_meals', function (Blueprint $table) {
            $table->id();


            // foregin
            $table->bigInteger('package_id')->unsigned();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');

            $table->bigInteger('meal_id')->unsigned();
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');

            $table->bigInteger('meal_type_id')->unsigned();
            $table->foreign('meal_type_id')->references('id')->on('meal_types')->onDelete('cascade');

        


            $table->double('price')->nullable();
            $table->double('cals')->nullable();
            $table->double('proteins')->nullable();
            $table->double('carbs')->nullable();
            $table->double('fats')->nullable();


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
        Schema::dropIfExists('package_meals');
    }
}
