<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadFollowupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_followups', function (Blueprint $table) {
            $table->id();

            $table->date('date')->nullable();
            $table->date('next_follow_up')->nullable();
            $table->text('note')->nullable();

            // foregins
            $table->bigInteger('lead_id')->unsigned();
            $table->foreign('lead_id')->references('id')->on('leads');
            

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
        Schema::dropIfExists('lead_followups');
    }
}
