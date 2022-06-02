<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

           // foreign keys
           $table->bigInteger('supplier_id')->unsigned();
           $table->foreign('supplier_id')->references('id')->on('suppliers');

            $table->date('expected_date')->nullable();
            $table->date('received_date')->nullable();

            $table->string('reference', 100)->nullable();

            $table->integer('po')->nullable();

            $table->text('note')->nullable();
            $table->text('action_note')->nullable();

            $table->double('price', 8, 2)->nullable()->default();
            $table->string('status', 100)->nullable()->default('pending');



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
        Schema::dropIfExists('purchases');
    }
}
