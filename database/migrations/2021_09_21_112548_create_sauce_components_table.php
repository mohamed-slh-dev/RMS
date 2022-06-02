<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauceComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauce_components', function (Blueprint $table) {
            $table->id();

            // foregin keys
            $table->bigInteger('sauce_id')->unsigned();
            $table->foreign('sauce_id')->references('id')->on('sauces')->onDelete('cascade');

            $table->bigInteger('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');

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
        Schema::dropIfExists('sauce_components');
    }
}
