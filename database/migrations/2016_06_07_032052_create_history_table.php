<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('history', function($table)
        {
          $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->integer('survey_id')->unsigned();
        $table->string('q1_r');
        $table->string('q2_r');
        $table->string('q3_r');
        $table->string('q4_r');
        $table->string('q5_r');
        $table->string('q6_r');
        $table->string('q7_r');
        $table->string('q8_r');
        $table->string('q9_r');
        $table->string('q10_r');


        $table->string('totalPoints');
        $table->string('space2');
        $table->string('space3');
        $table->string('space4');
        $table->string('space5');



        $table->timestamps();

        });

   Schema::table('history', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history');
    }
}
