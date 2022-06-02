<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_companies', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 255)->nullable();

            $table->string('password', 255)->nullable();

            $table->string('attachment', 255)->nullable();

            $table->time('pickuptime_start')->nullable();
            $table->time('pickuptime_end')->nullable();


            // foreign keys
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->integer('dubai_charge')->nullable()->default(0);
            $table->integer('abudhabi_charge')->nullable()->default(0);
            $table->integer('sharjah_charge')->nullable()->default(0);
            $table->integer('ajman_charge')->nullable()->default(0);
            $table->integer('ummalquwain_charge')->nullable()->default(0);
            $table->integer('alain_charge')->nullable()->default(0);
            $table->integer('rak_charge')->nullable()->default(0);

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
        Schema::dropIfExists('delivery_companies');
    }
}
