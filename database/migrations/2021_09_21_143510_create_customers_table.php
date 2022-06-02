<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->id();

            $table->string('fname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->date('birthdate')->nullable();

            $table->double('height', 15, 8)->nullable();
            $table->double('weight', 15, 8)->nullable();

            $table->string('activity', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('password', 255)->nullable();


    
            $table->string('address', 255)->nullable();
            $table->string('block_number', 100)->nullable();
            $table->string('floor', 100)->nullable();
            $table->string('flat_number', 100)->nullable();

            $table->string('meals', 100)->nullable();
            $table->string('note', 255)->nullable();
            $table->string('from_date', 100)->nullable();
            $table->string('to_date', 100)->nullable();

            $table->string('cutlery', 100)->nullable();
            $table->string('bag', 100)->nullable();

            $table->double('cash_collection', 15, 8)->nullable();


            $table->string('delivery_days', 150)->nullable();
            $table->string('delivery_instructions', 255)->nullable();


            // foreign keys
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->bigInteger('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->bigInteger('package_id')->unsigned();
            $table->foreign('package_id')->references('id')->on('packages');

            $table->bigInteger('delivery_time_id')->unsigned();
            $table->foreign('delivery_time_id')->references('id')->on('delivery_times');

            $table->bigInteger('linked_customer')->unsigned()->nullable();
            $table->foreign('linked_customer')->references('id')->on('customers');

            $table->bigInteger('manager_id')->unsigned()->nullable();
            $table->foreign('manager_id')->references('id')->on('users');



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
        Schema::dropIfExists('customers');
    }
}
