<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {

            $table->id();

            $table->string('name', 100)->nullable();
            $table->string('img', 255)->nullable();
            $table->string('desc', 255)->nullable();
            $table->double('price')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
