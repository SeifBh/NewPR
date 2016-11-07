<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_models', function (Blueprint $table) {
            $table->increments('id');
                        $table->integer('user_id')->unsigned();

            $table->string('title'); 
            $table->string('content'); 


            $table->string('r1'); 


            $table->string('r2'); 



            $table->string('r3'); 


            $table->boolean('fullday'); 
            $table->dateTime('start'); 
            $table->dateTime('end'); 
            $table->timestamps();
        });

                Schema::table('event_models', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

 
        Schema::drop('event_models');

    }
}
