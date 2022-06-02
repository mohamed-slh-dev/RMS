<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('margins', function (Blueprint $table) {
            $table->id();

            $table->double('operation', 8, 2)->nullable()->default(0);
            $table->double('margin', 8, 2)->nullable()->default(0);
            $table->double('packing', 8, 2)->nullable()->default(0);
            $table->double('cold_drink', 8, 2)->nullable()->default(0);
            $table->double('hot_drink', 8, 2)->nullable()->default(0);

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
        Schema::dropIfExists('margins');
    }
}
