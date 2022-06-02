<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseComponentQuantitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_components', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('purchase_id')->unsigned();
            $table->foreign('purchase_id')->references('id')->on('purchases');

            
            $table->bigInteger('supplier_component_id')->unsigned();
            $table->foreign('supplier_component_id')->references('id')->on('supplier_components');
 
            $table->double('quantity')->nullable();
            $table->double('price', 8, 2)->nullable()->default();

             
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
        Schema::dropIfExists('purchase_components');
    }
}
