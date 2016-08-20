<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchups', function(Blueprint $table){
           $table->increments('id');
           $table->integer('idSeason')->unsigned();
           $table->foreign('idSeason')->references('id')->on('seasons');
           $table->integer('idWeek')->unsigned();
           $table->foreign('idWeek')->references('id')->on('weeks');
           $table->integer('idTeamHome')->unsigned();
           $table->foreign('idTeamHome')->references('id')->on('teams');
           $table->integer('idTeamVisitor')->unsigned();
           $table->foreign('idTeamVisitor')->references('id')->on('teams');
           $table->string('modifiedBy');
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
       Schema::drop('matchups');
    }
}
