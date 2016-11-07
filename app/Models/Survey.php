<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $table = 'surveys';
    protected $fillable = ['id','title_survey',
    						'question1','q1_answer1','q1_answer2','q1_answer3','q1_answer4','q1_answer5',
    						'question2','q2_answer1','q2_answer2','q2_answer3','q2_answer4','q2_answer5',
    						'question3','q3_answer1','q3_answer2','q3_answer3','q3_answer4','q3_answer5',
    						'question4','q4_answer1','q4_answer2','q4_answer3','q4_answer4','q4_answer5',
    						'question5','q5_answer1','q5_answer2','q5_answer3','q5_answer4','q5_answer5',
    						'question6','q6_answer1','q6_answer2','q6_answer3','q6_answer4','q6_answer5',
    						'question7','q7_answer1','q7_answer2','q7_answer3','q7_answer4','q7_answer5',
    						'question8','q8_answer1','q8_answer2','q8_answer3','q8_answer4','q8_answer5',
    						'question9','q9_answer1','q9_answer2','q9_answer3','q9_answer4','q9_answer5',
                            'question10','q10_answer1','q10_answer2','q10_answer3','q10_answer4','q10_answer5',
                            'q1_correct','q2_correct','q3_correct','q4_correct','q5_correct','q6_correct',
                            'q7_correct','q8_correct','q9_correct','q10_correct','details','status'
    					];

      public static $rules = array(
    'title_survey' => 'required|min:5',
  );


}
