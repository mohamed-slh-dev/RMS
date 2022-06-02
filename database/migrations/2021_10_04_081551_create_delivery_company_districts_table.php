<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryCompanyDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_company_districts', function (Blueprint $table) {
            $table->id();

             // foreign keys
             $table->bigInteger('delivery_company_id')->unsigned();
             $table->foreign('delivery_company_id')->references('id')->on('delivery_companies');
 
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
        Schema::dropIfExists('delivery_company_districts');
    }
}
