<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_components', function (Blueprint $table) {
            $table->id();
              // foregin keys
              $table->bigInteger('supplier_id')->unsigned();
              $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
           
              // foregin keys
            $table->bigInteger('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');

            $table->string('price', 100)->nullable();

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
        Schema::dropIfExists('supplier_components');
    }
}
