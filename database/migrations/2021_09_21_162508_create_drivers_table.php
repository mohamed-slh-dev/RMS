<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('license', 100)->nullable();
            $table->string('password', 100)->nullable();

            $table->string('profile_img', 255)->nullable();
            $table->string('license_img', 255)->nullable();


            // foreign keys
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');



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
        Schema::dropIfExists('drivers');
    }
}
