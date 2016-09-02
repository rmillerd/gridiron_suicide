<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function(Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->index('name');
           $table->boolean('open');
           $table->integer('league_id')->unsigned();
           $table->foreign('league_id')->references('id')->on('leagues');
           $table->date('startDate');
           $table->date('endDate');
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
        Schema::drop('seasons');
    }
}
