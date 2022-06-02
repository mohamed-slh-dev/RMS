<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_custom_packages', function (Blueprint $table) {
            $table->id();

            // foreign keys
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->double('cals')->nullable();
            $table->double('proteins')->nullable();
            $table->double('carbs')->nullable();
            $table->double('fats')->nullable();

            $table->string('marcos_divide', 100)->nullable();

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
        Schema::dropIfExists('customer_custom_packages');
    }
}
