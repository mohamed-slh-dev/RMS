<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageMealComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_meal_components', function (Blueprint $table) {
            $table->id();

            // foregin
            $table->bigInteger('package_meals_id')->unsigned();
            $table->foreign('package_meals_id')->references('id')->on('package_meals')->onDelete('cascade');

            $table->bigInteger('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');

            $table->double('quantity')->nullable();


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
        Schema::dropIfExists('package_meal_components');
    }
}
