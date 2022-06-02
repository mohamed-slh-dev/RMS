<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomPackageMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_custom_package_meals', function (Blueprint $table) {

            $table->id();

            // foreign keys
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->bigInteger('meal_type_id')->unsigned();
            $table->foreign('meal_type_id')->references('id')->on('meal_types');


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
        Schema::dropIfExists('customer_custom_package_meals');
    }
}
