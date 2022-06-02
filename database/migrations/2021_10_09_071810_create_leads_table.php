<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();


            $table->string('name', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 255)->nullable();

            $table->string('address', 255)->nullable();
            $table->date('follow_up')->nullable();

            $table->string('status', 255)->nullable();

            $table->double('revenue')->nullable()->default(0);
            

            // foreign keys
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');


            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->bigInteger('source_id')->unsigned()->nullable();
            $table->foreign('source_id')->references('id')->on('lead_sources');

            $table->bigInteger('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('id')->on('packages');

            
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
        Schema::dropIfExists('leads');
    }
}
