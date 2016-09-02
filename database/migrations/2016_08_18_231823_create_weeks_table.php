<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function(Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->index('name');
           $table->integer('season_id')->unsigned();
           $table->foreign('season_id')->references('id')->on('seasons');
           $table->dateTime('startDate');
           $table->dateTime('endDate');
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
        Schema::drop('weeks');
    }
}
