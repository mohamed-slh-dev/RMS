<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomPackageMealComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_custom_package_meal_components', function (Blueprint $table) {
            $table->id();

            // foreign keys
            $table->bigInteger('cp_meals_id')->unsigned();
            $table->foreign('cp_meals_id')->references('id')->on('customer_custom_package_meals');

            $table->bigInteger('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components');

            $table->integer('quantity')->unsigned()->nullable();

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
        Schema::dropIfExists('customer_custom_package_meal_components');
    }
}
