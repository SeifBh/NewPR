<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('surveys', function($table)
        {
          $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('title_survey');

        $table->longText('question1');
            $table->string('q1_answer1');
            $table->string('q1_answer2');
            $table->string('q1_answer3');
            $table->string('q1_answer4');
            $table->string('q1_answer5');
            $table->string('q1_answer6');
            $table->string('q1_answer7');
            $table->string('q1_type');
            $table->longText('q1_correct');

        $table->longText('question2');
            $table->string('q2_answer1');
            $table->string('q2_answer2');
            $table->string('q2_answer3');
            $table->string('q2_answer4');
            $table->string('q2_answer5');
            $table->string('q2_answer6');
            $table->string('q2_answer7');
            $table->string('q2_type');
            $table->longText('q2_correct');

        $table->longText('question3');
            $table->string('q3_answer1');
            $table->string('q3_answer2');
            $table->string('q3_answer3');
            $table->string('q3_answer4');
            $table->string('q3_answer5');
            $table->string('q3_answer6');
            $table->string('q3_answer7');
            $table->string('q3_type');
            $table->longText('q3_correct');

        $table->longText('question4');
            $table->string('q4_answer1');
            $table->string('q4_answer2');
            $table->string('q4_answer3');
            $table->string('q4_answer4');
            $table->string('q4_answer5');
            $table->string('q4_answer6');
            $table->string('q4_answer7');
            $table->string('q4_type');
            $table->longText('q4_correct');

        $table->longText('question5');
            $table->string('q5_answer1');
            $table->string('q5_answer2');
            $table->string('q5_answer3');
            $table->string('q5_answer4');
            $table->string('q5_answer5');
            $table->string('q5_answer6');
            $table->string('q5_answer7');
            $table->string('q5_type');
            $table->longText('q5_correct');

        $table->longText('question6');
            $table->string('q6_answer1');
            $table->string('q6_answer2');
            $table->string('q6_answer3');
            $table->string('q6_answer4');
            $table->string('q6_answer5');
            $table->string('q6_answer6');
            $table->string('q6_answer7');
            $table->string('q6_type');
            $table->longText('q6_correct');

        $table->longText('question7');
            $table->string('q7_answer1');
            $table->string('q7_answer2');
            $table->string('q7_answer3');
            $table->string('q7_answer4');
            $table->string('q7_answer5');
            $table->string('q7_answer6');
            $table->string('q7_answer7');
            $table->string('q7_type');
            $table->longText('q7_correct');

        $table->longText('question8');
            $table->string('q8_answer1');
            $table->string('q8_answer2');
            $table->string('q8_answer3');
            $table->string('q8_answer4');
            $table->string('q8_answer5');
            $table->string('q8_answer6');
            $table->string('q8_answer7');
            $table->string('q8_type');
            $table->longText('q8_correct');

        $table->longText('question9');
            $table->string('q9_answer1');
            $table->string('q9_answer2');
            $table->string('q9_answer3');
            $table->string('q9_answer4');
            $table->string('q9_answer5');
            $table->string('q9_answer6');
            $table->string('q9_answer7');
            $table->string('q9_type');
            $table->longText('q9_correct');

        $table->longText('question10');
            $table->string('q10_answer1');
            $table->string('q10_answer2');
            $table->string('q10_answer3');
            $table->string('q10_answer4');
            $table->string('q10_answer5');
            $table->string('q10_answer6');
            $table->string('q10_answer7');
            $table->string('q10_type');
            $table->longText('q10_correct');



//General Details
        $table->string('details');
        $table->string('res1');
        $table->string('status');

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

       Schema::drop('surveys');





    }
}
