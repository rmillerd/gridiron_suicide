<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function(Blueprint $table){
           $table->increments('id');
           $table->integer('season_id')->unsigned();
           $table->foreign('season_id')->references('id')->on('seasons');
           $table->integer('week_id')->unsigned();
           $table->foreign('week_id')->references('id')->on('weeks');
           $table->integer('hometeam_id')->unsigned();
           $table->foreign('hometeam_id')->references('id')->on('teams');
           $table->integer('visitteam_id')->unsigned();
           $table->foreign('visitteam_id')->references('id')->on('teams');
           $table->datetime('gameTime');
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
       Schema::drop('games');
    }
}
