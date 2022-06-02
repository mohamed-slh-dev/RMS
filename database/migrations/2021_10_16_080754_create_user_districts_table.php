<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_districts', function (Blueprint $table) {
            $table->id();

             // foreign keys
             $table->bigInteger('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users');
 
             $table->bigInteger('district_id')->unsigned();
             $table->foreign('district_id')->references('id')->on('districts');

             
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
        Schema::dropIfExists('user_districts');
    }
}
