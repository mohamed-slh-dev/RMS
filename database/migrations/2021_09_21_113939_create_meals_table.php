<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {

            $table->id();

            
            $table->string('name', 255)->nullable();
            $table->string('department', 100)->nullable();
            $table->string('img', 255)->nullable();

            $table->string('gluten', 100)->nullable();
            $table->string('dairy', 100)->nullable();
            $table->string('instructions', 255)->nullable();
            $table->string('meal_type', 255)->nullable();


            // foregin keys
            $table->bigInteger('meal_category_id')->unsigned()->nullable();
            $table->foreign('meal_category_id')->references('id')->on('meal_categories');
            
            $table->bigInteger('cuisine_id')->unsigned()->nullable();
            $table->foreign('cuisine_id')->references('id')->on('cuisines');

            $table->bigInteger('sauce_id')->unsigned()->nullable();
            $table->foreign('sauce_id')->references('id')->on('sauces');
            


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
        Schema::dropIfExists('meals');
    }
}
