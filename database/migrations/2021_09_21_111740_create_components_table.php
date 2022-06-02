<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {

            $table->id();

            $table->string('name', 100)->nullable();
            $table->string('brand', 100)->nullable();
            $table->string('measuringunit', 100)->nullable();
            $table->string('img', 255)->nullable();
            $table->double('wastage')->nullable()->default(0);
            $table->double('cals')->nullable();
            $table->double('proteins')->nullable();
            $table->double('carbs')->nullable();
            $table->double('fats')->nullable();
            $table->double('price')->nullable();
            $table->double('quantity')->nullable();
            $table->double('min_quantity')->nullable();
            $table->double('increase')->nullable()->default(0);


            // foregin keys
            $table->bigInteger('component_category_id')->unsigned();
            $table->foreign('component_category_id')->references('id')->on('component_categories')->onDelete('cascade');


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
        Schema::dropIfExists('components');
    }
}
