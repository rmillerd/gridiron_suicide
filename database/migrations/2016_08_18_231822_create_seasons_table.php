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
           $table->boolean('open');
           $table->integer('idUserOwner')->unsigned();
           $table->foreign('idUserOwner')->references('id')->on('users');
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
