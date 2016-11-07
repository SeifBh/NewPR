<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    
    Schema::create('questions', function($table) {
        $table->increments('id');
        $table->string('content');
        $table->string('a1');
        $table->string('a2');
        $table->string('a3');
        $table->string('a4');
        $table->string('a5');
        $table->string('a6');
        $table->string('a7');
        $table->string('a8');
        $table->string('a9');
        $table->string('a10');
        $table->string('a11');
        $table->string('a12');
        $table->string('a13');
        $table->string('a14');
        $table->string('a15');
        $table->string('type');
        $table->string('reserve1');
        $table->string('reserve2');
        $table->string('reserve3');
        $table->string('reserve4');
        $table->string('reserve5');

        $table->timestamps('timecreated');
    });


}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
      Schema::drop('questions');

    }
}
