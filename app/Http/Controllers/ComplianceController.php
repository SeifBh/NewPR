<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request as Request1;

use App\Http\Requests;
use View;

use App\Models\User;
use App\Models\Question;
use App\Models\History;
use Auth;
class ComplianceController extends Controller
{
    //

    public function indextest()
    {
    	return view::make('front.add_questions');
    }
    public function addQS(Request1 $request){




    	$question = new Question();
$content = $request->input('content');
$answers = $request->input('answers');

  $question->content = $content;
  $question->answers = $answers;
  $question->save();
dd('save');



    }

    public function saveTest(){
dd(Auth::user()->id);
if (Auth::check()){
      $data = Auth::user();

      $user_id = Auth::user()->id;

      $gender = $request->input('gender');

      $histo = new History();
      $histo->user_result = $gender;
      $histo->user_id = $user_id;
      $histo->save();
      dd('Well, you are here !');
}
else{
  dd('offline');
}


    }
}
