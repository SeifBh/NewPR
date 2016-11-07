<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('messages', function($table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('subject');
            $table->longText('content');
            $table->string('from');

            $table->boolean('status')->default(false);




            $table->string('path_file_1');
            $table->string('path_file_2');
            $table->string('path_file_3');
            $table->string('path_file_4');
            $table->string('path_file_5');
            
            $table->string('path_file_6');
            $table->string('path_file_7');
            $table->string('path_file_8');
            $table->string('path_file_9');
            $table->string('path_file_10');

        $table->timestamps();

        });

        Schema::table('messages', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::drop('messages');*/
    }
}
