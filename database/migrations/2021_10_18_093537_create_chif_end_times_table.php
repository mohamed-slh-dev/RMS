<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChifEndTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chif_end_times', function (Blueprint $table) {
            $table->id();

            $table->time('end_time')->nullable();
            $table->date('date')->nullable();

            $table->bigInteger('chif_id')->unsigned()->nullable();
            $table->foreign('chif_id')->references('id')->on('chifs');


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
        Schema::dropIfExists('chif_end_times');
    }
}
