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
           $table->string('Name');
           $table->integer('idSeason')->unsigned();
           $table->foreign('idSeason')->references('id')->on('seasons');
           $table->dateTime('startdate');
           $table->dateTime('enddate');
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
