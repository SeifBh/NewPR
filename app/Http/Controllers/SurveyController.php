<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Survey;
use App\Models\User;
use App\Models\History;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Request as Request1;
use Session;
use Auth;


class SurveyController extends Controller
{

	public $j;




    public function index(Request $request)
    {
          $surveys = Survey::all();
          return View::make('back.Surveys.index', compact('surveys'));


    }

 public function create(Request $request)
    {
        return View::make('back.Surveys.create');


    }



    public function show($id)
    {
           $surveys = Survey::all();
           return $surveys;
    }



    public function store(Request $request)
    {


        $input = Input::all();
        $validation = Validator::make($input, Survey::$rules);

        if ($validation->passes())
        {
            Survey::create($input);

            return Redirect::route('surveys.index');
        }

        return Redirect::route('surveys.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }


    public function update(Request $request, $id)
    {
    	
       $input = Input::all();
       $survey = Survey::all();
        $validation = Validator::make($input, Survey::$rules);
        if ($validation->passes())
        {
            $survey = Survey::find($id);
            $survey->update($input);
            return Redirect::route('surveys.index', $id);
        }
return Redirect::route('Surveys.edit',$id,compact('survey'))
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');


    }



    public function edit(Request $request, $id)
    {
        $survey = Survey::find($id);
        if (is_null($survey))
        {
            return Redirect::route('Surveys.index');
        }
        return View::make('back.Surveys.edit', compact('survey'));

    }




    public function destroy(Request $request, $id)
    {
        Survey::find($id)->delete();
        return Redirect::route('surveys.index');
    }


	public function getQuestionnaire(Request $request ,$username){
		$user = Auth::user();
		//dd($user->username);
		$id_user = Auth::user()->id;
			    $user2 = User::where('username', $username)->first();

		/*
		$q1_r = DB::table('history')->where('user_id','=', $id_user)
									->where('survey_id',$id)
									->value('q1_r');

		return $q1_r;
		$q1_answer1 = DB::table('surveys')->where('id', $id)->value('q1_answer1');

		*/
		$last_survey_id =  DB::table('surveys')->orderBy('created_at', 'desc')->value('id');
		//return $last_survey_id;
		/*
		$titles = DB::table('surveys')->lists('id');

		foreach ($titles as $title) {
		    echo $title;
		}
		*/
		for ($i=1; $i <= $last_survey_id  ; $i++) { 

		/*$exists_id = Survey::where('id', '=', $i)->first();

		if ($exists_id === null) {
		   // user doesn't exist
			echo $i . "Dosen t exist <br>";
		}

		*/
		$q1_r = DB::table('history')->where('user_id','=', $id_user)
										->where('survey_id','=', $i)
										->value('q3_r');
			//echo 'select q3_r from history where user_id = ' .$id_user.'and survey_id='.$i;
			//echo $q1_r . "<br>" ;
		}
		$history = History::all();
		$is = 0 ;
		$last_survey_id =  DB::table('surveys')->orderBy('created_at', 'desc')->value('id');
		//return $last_survey_id;
		$is++;
		$q3_r = DB::table('history')->where('user_id','=', $id_user)
								->where('survey_id','=', $is)
							->value('q3_r');
		$q3_rx = DB::table('history')->where('user_id','=', $id_user)
								->where('survey_id','=', $is)
							->value('q3_r');
		$newVar = DB::table('history')->where('user_id','=',$id_user)
							  ->where('survey_id','=',1)	
							  ->value('totalPoints');
		$intnewVar = (int)$newVar;
		$intnewVar = $intnewVar * 10;
        $surveys=Survey::all();
        return view::make('front.questionnaires',array('user'=>$user,'i'=>$i,'intnewVar'=>$intnewVar,'id_user'=>$id_user),compact('surveys'));

	}

    public function home(){
        $user = Auth::user();
		$id_user = Auth::user()->id;
		/*
		$q1_r = DB::table('history')->where('user_id','=', $id_user)
									->where('survey_id',$id)
									->value('q1_r');

		return $q1_r;
		$q1_answer1 = DB::table('surveys')->where('id', $id)->value('q1_answer1');

		*/
		$last_survey_id =  DB::table('surveys')->orderBy('created_at', 'desc')->value('id');
		//return $last_survey_id;
		/*
		$titles = DB::table('surveys')->lists('id');

		foreach ($titles as $title) {
		    echo $title;
		}
		*/
		for ($i=1; $i <= $last_survey_id  ; $i++) { 

		/*$exists_id = Survey::where('id', '=', $i)->first();

		if ($exists_id === null) {
		   // user doesn't exist
			echo $i . "Dosen t exist <br>";
		}

		*/
		$q1_r = DB::table('history')->where('user_id','=', $id_user)
										->where('survey_id','=', $i)
										->value('q3_r');
			//echo 'select q3_r from history where user_id = ' .$id_user.'and survey_id='.$i;
			//echo $q1_r . "<br>" ;
		}
		$history = History::all();
		$is = 0 ;
		$last_survey_id =  DB::table('surveys')->orderBy('created_at', 'desc')->value('id');
		//return $last_survey_id;
		$is++;
		$q3_r = DB::table('history')->where('user_id','=', $id_user)
								->where('survey_id','=', $is)
							->value('q3_r');
		$q3_rx = DB::table('history')->where('user_id','=', $id_user)
								->where('survey_id','=', $is)
							->value('q3_r');
		$newVar = DB::table('history')->where('user_id','=',$id_user)
							  ->where('survey_id','=',1)	
							  ->value('totalPoints');
		$intnewVar = (int)$newVar;
		$intnewVar = $intnewVar * 10;
        $surveys=Survey::all();
        return view::make('front.Survey.home',array('i'=>$i,'intnewVar'=>$intnewVar,'id_user'=>$id_user),compact('surveys'));
    }



        public function questionnaires_list(Request $request, $username,$id)
    {

$id_user = Auth::user()->id;

			    $user = User::where('username', $username)->first();

$q1_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q1_r');

$q2_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q2_r');

$q3_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q3_r');

$q4_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q4_r');


$q5_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q5_r');


$q6_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q6_r');


$q7_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q7_r');

$q8_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q8_r');


$q9_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q9_r');

$q10_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q10_r');

$sr = DB::table('surveys')->get();
$surveys = Survey::orderByRaw("RAND()")->get();

$houni = DB::table('surveys')->where('id','=', $id)->pluck('id');

//dd($houni);

$survey_id = DB::table('surveys')->where('id', $id)->value('id');
$title = DB::table('surveys')->where('id', $id)->value('title_survey');

	$details = DB::table('surveys')->where('id', $id)->value('details');



$question1 = DB::table('surveys')->where('id', $id)->value('question1');
//dd($question1);
$q1_answer1 = DB::table('surveys')->where('id', $id)->value('q1_answer1');
$q1_answer2 = DB::table('surveys')->where('id', $id)->value('q1_answer2');
$q1_answer3 = DB::table('surveys')->where('id', $id)->value('q1_answer3');
$q1_answer4 = DB::table('surveys')->where('id', $id)->value('q1_answer4');
$q1_answer5 = DB::table('surveys')->where('id', $id)->value('q1_answer5');
$q1_answer6 = DB::table('surveys')->where('id', $id)->value('q1_answer6');
$q1_answer7 = DB::table('surveys')->where('id', $id)->value('q1_answer7');

$question2 = DB::table('surveys')->where('id', $id)->value('question2');
$q2_answer1 = DB::table('surveys')->where('id', $id)->value('q2_answer1');
$q2_answer2 = DB::table('surveys')->where('id', $id)->value('q2_answer2');
$q2_answer3 = DB::table('surveys')->where('id', $id)->value('q2_answer3');
$q2_answer4 = DB::table('surveys')->where('id', $id)->value('q2_answer4');
$q2_answer5 = DB::table('surveys')->where('id', $id)->value('q2_answer5');
$q2_answer6 = DB::table('surveys')->where('id', $id)->value('q2_answer6');
$q2_answer7 = DB::table('surveys')->where('id', $id)->value('q2_answer7');

$question3 = DB::table('surveys')->where('id', $id)->value('question3');
$q3_answer1 = DB::table('surveys')->where('id', $id)->value('q3_answer1');
$q3_answer2 = DB::table('surveys')->where('id', $id)->value('q3_answer2');
$q3_answer3 = DB::table('surveys')->where('id', $id)->value('q3_answer3');
$q3_answer4 = DB::table('surveys')->where('id', $id)->value('q3_answer4');
$q3_answer5 = DB::table('surveys')->where('id', $id)->value('q3_answer5');
$q3_answer6 = DB::table('surveys')->where('id', $id)->value('q3_answer6');
$q3_answer7 = DB::table('surveys')->where('id', $id)->value('q3_answer7');

$question4 = DB::table('surveys')->where('id', $id)->value('question4');
$q4_answer1 = DB::table('surveys')->where('id', $id)->value('q4_answer1');
$q4_answer2 = DB::table('surveys')->where('id', $id)->value('q4_answer2');
$q4_answer3 = DB::table('surveys')->where('id', $id)->value('q4_answer3');
$q4_answer4 = DB::table('surveys')->where('id', $id)->value('q4_answer4');
$q4_answer5 = DB::table('surveys')->where('id', $id)->value('q4_answer5');
$q4_answer6 = DB::table('surveys')->where('id', $id)->value('q4_answer6');
$q4_answer7 = DB::table('surveys')->where('id', $id)->value('q4_answer7');

$question5 = DB::table('surveys')->where('id', $id)->value('question5');
$q5_answer1 = DB::table('surveys')->where('id', $id)->value('q5_answer1');
$q5_answer2 = DB::table('surveys')->where('id', $id)->value('q5_answer2');
$q5_answer3 = DB::table('surveys')->where('id', $id)->value('q5_answer3');
$q5_answer4 = DB::table('surveys')->where('id', $id)->value('q5_answer4');
$q5_answer5 = DB::table('surveys')->where('id', $id)->value('q5_answer5');
$q5_answer6 = DB::table('surveys')->where('id', $id)->value('q5_answer6');
$q5_answer7 = DB::table('surveys')->where('id', $id)->value('q5_answer7');
$question6 = DB::table('surveys')->where('id', $id)->value('question6');
$q6_answer1 = DB::table('surveys')->where('id', $id)->value('q6_answer1');
$q6_answer2 = DB::table('surveys')->where('id', $id)->value('q6_answer2');
$q6_answer3 = DB::table('surveys')->where('id', $id)->value('q6_answer3');
$q6_answer4 = DB::table('surveys')->where('id', $id)->value('q6_answer4');
$q6_answer5 = DB::table('surveys')->where('id', $id)->value('q6_answer5');
$q6_answer6 = DB::table('surveys')->where('id', $id)->value('q6_answer6');
$q6_answer7 = DB::table('surveys')->where('id', $id)->value('q6_answer7');
$question7 = DB::table('surveys')->where('id', $id)->value('question7');
$q7_answer1 = DB::table('surveys')->where('id', $id)->value('q7_answer1');
$q7_answer2 = DB::table('surveys')->where('id', $id)->value('q7_answer2');
$q7_answer3 = DB::table('surveys')->where('id', $id)->value('q7_answer3');
$q7_answer4 = DB::table('surveys')->where('id', $id)->value('q7_answer4');
$q7_answer5 = DB::table('surveys')->where('id', $id)->value('q7_answer5');
$q7_answer6 = DB::table('surveys')->where('id', $id)->value('q7_answer6');
$q7_answer7 = DB::table('surveys')->where('id', $id)->value('q7_answer7');
$question8 = DB::table('surveys')->where('id', $id)->value('question8');
$q8_answer1 = DB::table('surveys')->where('id', $id)->value('q8_answer1');
$q8_answer2 = DB::table('surveys')->where('id', $id)->value('q8_answer2');
$q8_answer3 = DB::table('surveys')->where('id', $id)->value('q8_answer3');
$q8_answer4 = DB::table('surveys')->where('id', $id)->value('q8_answer4');
$q8_answer5 = DB::table('surveys')->where('id', $id)->value('q8_answer5');
$q8_answer6 = DB::table('surveys')->where('id', $id)->value('q8_answer6');
$q8_answer7 = DB::table('surveys')->where('id', $id)->value('q8_answer7');
$question9 = DB::table('surveys')->where('id', $id)->value('question9');
$q9_answer1 = DB::table('surveys')->where('id', $id)->value('q9_answer1');
$q9_answer2 = DB::table('surveys')->where('id', $id)->value('q9_answer2');
$q9_answer3 = DB::table('surveys')->where('id', $id)->value('q9_answer3');
$q9_answer4 = DB::table('surveys')->where('id', $id)->value('q9_answer4');
$q9_answer5 = DB::table('surveys')->where('id', $id)->value('q9_answer5');
$q9_answer6 = DB::table('surveys')->where('id', $id)->value('q9_answer6');
$q9_answer7 = DB::table('surveys')->where('id', $id)->value('q9_answer7');
$question10 = DB::table('surveys')->where('id', $id)->value('question10');
$q10_answer1 = DB::table('surveys')->where('id', $id)->value('q10_answer1');
$q10_answer2 = DB::table('surveys')->where('id', $id)->value('q10_answer2');
$q10_answer3 = DB::table('surveys')->where('id', $id)->value('q10_answer3');
$q10_answer4 = DB::table('surveys')->where('id', $id)->value('q10_answer4');
$q10_answer5 = DB::table('surveys')->where('id', $id)->value('q10_answer5');
$q10_answer6 = DB::table('surveys')->where('id', $id)->value('q10_answer6');
$q10_answer7 = DB::table('surveys')->where('id', $id)->value('q10_answer7');


$q1_correct = DB::table('surveys')->where('id', $id)->value('q1_correct');
$q2_correct = DB::table('surveys')->where('id', $id)->value('q2_correct');
$q3_correct = DB::table('surveys')->where('id', $id)->value('q3_correct');
$q4_correct = DB::table('surveys')->where('id', $id)->value('q4_correct');
$q5_correct = DB::table('surveys')->where('id', $id)->value('q5_correct');

$q6_correct = DB::table('surveys')->where('id', $id)->value('q6_correct');
$q7_correct = DB::table('surveys')->where('id', $id)->value('q7_correct');
$q8_correct = DB::table('surveys')->where('id', $id)->value('q8_correct');
$q9_correct = DB::table('surveys')->where('id', $id)->value('q9_correct');
$q10_correct = DB::table('surveys')->where('id', $id)->value('q10_correct');


$xy1 = "";
$xy2 = "";
$xy3 = "";
$xy4 = "";
$xy5 = "";
$xy6 = "";
$xy7 = "";
$xy8 = "";
$xy9 = "";
$xy10 = "";


$x1 = "";
$x2 = "";
$x3 = "";
$x4 = "";
$x5 = "";
$x6 = "";
$x7 = "";
$x8 = "";
$x9 = "";
$x10 = "";



if ($q1_correct == 'q1_answer1'){
	$x1 = $q1_answer1;
}
elseif($q1_correct == 'q1_answer2'){
	$x1 = $q1_answer2;

}
elseif($q1_correct == 'q1_answer3'){
	$x1 = $q1_answer3;

}

elseif($q1_correct == 'q1_answer4'){
	$x1 = $q1_answer4;

}

elseif($q1_correct == 'q1_answer5'){
	$x1 = $q1_answer5;

}

elseif($q1_correct == 'q1_answer6'){
	$x1 = $q1_answer6;

}

elseif($q1_correct == 'q1_answer7'){
	$x1 = $q1_answer7;

}

//********************************



$j = 0 ;
if ($x1 == $q1_r)
{
	$xy1 = "1";

		$j++;

}
else{
	$xy1 = "0";
}


if ($q2_correct == 'q2_answer1'){
	$x2 = $q2_answer1;
}
elseif($q2_correct == 'q2_answer2'){
	$x2 = $q2_answer2;

}
elseif($q2_correct == 'q2_answer3'){
	$x2 = $q2_answer3;

}

elseif($q2_correct == 'q2_answer4'){
	$x2 = $q2_answer4;

}

elseif($q2_correct == 'q2_answer5'){
	$x2 = $q2_answer5;

}

elseif($q2_correct == 'q2_answer6'){
	$x2 = $q2_answer6;

}

elseif($q2_correct == 'q2_answer7'){
	$x2 = $q2_answer7;

}




if ($x2 == $q2_r)
{
	$xy2 = "1";
		$j++;
}
else{

	$xy2 = "0";
}





//******************************************
if ($q3_correct == 'q3_answer1'){
	$x3 = $q3_answer1;
}
elseif($q3_correct == 'q3_answer2'){
	$x3 = $q3_answer2;

}
elseif($q3_correct == 'q3_answer3'){
	$x3 = $q3_answer3;

}

elseif($q3_correct == 'q3_answer4'){
	$x3 = $q3_answer4;

}

elseif($q3_correct == 'q3_answer5'){
	$x3 = $q3_answer5;

}

elseif($q3_correct == 'q3_answer6'){
	$x3 = $q3_answer6;

}

elseif($q3_correct == 'q3_answer7'){
	$x3 = $q3_answer7;

}



if ($x3 == $q3_r)
{
	$xy3 = "1";
		$j++;

}
else{
	$xy3 = "0";

}



//******************************************
if ($q4_correct == 'q4_answer1'){
	$x4 = $q4_answer1;
}
elseif($q4_correct == 'q4_answer2'){
	$x4 = $q4_answer2;

}
elseif($q4_correct == 'q4_answer3'){
	$x4 = $q4_answer3;

}

elseif($q4_correct == 'q4_answer4'){
	$x4 = $q4_answer4;

}

elseif($q4_correct == 'q4_answer5'){
	$x4 = $q4_answer5;

}

elseif($q4_correct == 'q4_answer6'){
	$x4 = $q4_answer6;

}

elseif($q4_correct == 'q4_answer7'){
	$x4 = $q4_answer7;

}



if ($x4 == $q4_r)
{
	$xy4 = "1";
		$j++;

}
else{
		$xy4 = "0";

}
//****************QUESTION - 4 - ***************



//******************************************
if ($q5_correct == 'q5_answer1'){
	$x5 = $q5_answer1;
}
elseif($q5_correct == 'q5_answer2'){
	$x5 = $q5_answer2;

}
elseif($q5_correct == 'q5_answer3'){
	$x5 = $q5_answer3;

}

elseif($q5_correct == 'q5_answer4'){
	$x5 = $q5_answer4;

}

elseif($q5_correct == 'q5_answer5'){
	$x5 = $q5_answer5;

}

elseif($q5_correct == 'q5_answer6'){
	$x5 = $q5_answer6;

}

elseif($q5_correct == 'q5_answer7'){
	$x5 = $q5_answer7;

}



if ($x5 == $q5_r)
{
	$xy5 = "1";
		$j++;

}
else{
	$xy5 = "0";

}
//*********************Question  -  5  -*****************************



//*********************Question  -  6  -*****************************
if ($q6_correct == 'q6_answer1'){
	$x6 = $q6_answer1;
}
elseif($q6_correct == 'q6_answer2'){
	$x6 = $q6_answer2;

}
elseif($q6_correct == 'q6_answer3'){
	$x6 = $q6_answer3;

}

elseif($q6_correct == 'q6_answer4'){
	$x6 = $q6_answer4;

}

elseif($q6_correct == 'q6_answer5'){
	$x6 = $q6_answer5;

}

elseif($q6_correct == 'q6_answer6'){
	$x6 = $q6_answer6;

}

elseif($q6_correct == 'q6_answer7'){
	$x6 = $q6_answer7;

}



if ($x6 == $q6_r)
{
	$xy6 = "1";
		$j++;

}
else{
	$xy6 = "0";

}
//*********************Question  -  6  -*****************************




//*********************Question  -  7  -*****************************
if ($q7_correct == 'q7_answer1'){
	$x7 = $q7_answer1;
}
elseif($q7_correct == 'q7_answer2'){
	$x7 = $q7_answer2;

}
elseif($q7_correct == 'q7_answer3'){
	$x7 = $q7_answer3;

}

elseif($q7_correct == 'q7_answer4'){
	$x7 = $q7_answer4;

}

elseif($q7_correct == 'q7_answer5'){
	$x7 = $q7_answer5;

}

elseif($q7_correct == 'q7_answer6'){
	$x7 = $q7_answer6;

}

elseif($q7_correct == 'q7_answer7'){
	$x7 = $q7_answer7;

}



if ($x7 == $q7_r)
{
	$xy7 = "1";
		$j++;

}
else{
	$xy7 = "0";

}
//*********************Question  -  7  -*****************************



//*********************Question  -  8  -*****************************
if ($q8_correct == 'q8_answer1'){
	$x8 = $q8_answer1;
}
elseif($q8_correct == 'q8_answer2'){
	$x8 = $q8_answer2;

}
elseif($q8_correct == 'q8_answer3'){
	$x8 = $q8_answer3;

}

elseif($q8_correct == 'q8_answer4'){
	$x8 = $q8_answer4;

}

elseif($q8_correct == 'q8_answer5'){
	$x8 = $q8_answer5;

}

elseif($q8_correct == 'q8_answer6'){
	$x8 = $q8_answer6;

}

elseif($q8_correct == 'q8_answer7'){
	$x8 = $q8_answer7;

}



if ($x8 == $q8_r)
{
	$xy8 = "1";
		$j++;

}
else{
		$xy8 = "0";

}
//*********************Question  -  8  -*****************************



//*********************Question  -  9  -*****************************
if ($q9_correct == 'q9_answer1'){
	$x9 = $q9_answer1;
}
elseif($q9_correct == 'q9_answer2'){
	$x9 = $q9_answer2;

}
elseif($q9_correct == 'q9_answer3'){
	$x9 = $q9_answer3;

}

elseif($q9_correct == 'q9_answer4'){
	$x9 = $q9_answer4;

}

elseif($q9_correct == 'q9_answer5'){
	$x9 = $q9_answer5;

}

elseif($q9_correct == 'q9_answer6'){
	$x9 = $q9_answer6;

}

elseif($q9_correct == 'q9_answer7'){
	$x9 = $q9_answer7;

}



if ($x9 == $q9_r)
{
	$xy9 = "1";
		$j++;

}
else{
	$xy9 = "0";

}
//*********************Question  -  9  -*****************************



//*********************Question  -  10  -*****************************
if ($q10_correct == 'q10_answer1'){
	$x10 = $q10_answer1;
}
elseif($q10_correct == 'q10_answer2'){
	$x10 = $q10_answer2;

}
elseif($q10_correct == 'q10_answer3'){
	$x10 = $q10_answer3;

}

elseif($q10_correct == 'q10_answer4'){
	$x10 = $q10_answer4;

}

elseif($q10_correct == 'q10_answer5'){
	$x10 = $q10_answer5;

}

elseif($q10_correct == 'q10_answer6'){
	$x10 = $q10_answer6;

}

elseif($q10_correct == 'q10_answer7'){
	$x10 = $q10_answer7;

}



if ($x10 == $q10_r)
{
	$xy10 = "1";
		$j++;

}
else{
	$xy10 = "0";

}


//return $res;

return View::make('front.questionnaires_content',array('user'=>$user,'surveys'=>$surveys,'x10'=> $x10 ,'x9'=> $x9 ,'x8'=> $x8 ,'x7'=> $x7 , 'x6'=> $x6 ,'x5'=> $x5 ,
											'x4'=> $x4 ,'x3'=> $x3 ,'x2'=> $x2 ,'x1'=> $x1 ,
	'xy10'=> $xy10 ,'xy9'=> $xy9 ,'xy8'=> $xy8 ,'xy7'=> $xy7 , 'xy6'=> $xy6 ,'xy5'=> $xy5 ,
											'xy4'=> $xy4 ,'xy3'=> $xy3 ,'xy2'=> $xy2 ,'xy1'=> $xy1 ,
	'j'=>$j,'q1_r'=>$q1_r,'q2_r'=>$q2_r,'q3_r'=>$q3_r,'q4_r'=>$q4_r,'q5_r'=>$q5_r,'q6_r'=>$q6_r,
												'q7_r'=>$q7_r,'q8_r'=>$q8_r,'q9_r'=>$q9_r,'q10_r'=>$q10_r,
												'survey_id'=>$survey_id,'id_user'=>$id_user,
												'title'=>$title,'question1'=>$question1,
												'question2'=>$question2,'question3'=>$question3,
												'question4'=>$question4,'question5'=>$question5,
												'question6'=>$question6,'question7'=>$question7,
												'question8'=>$question8,'question9'=>$question9,
												'question10'=>$question10,
	'q1_answer1'=>$q1_answer1,'q1_answer2'=>$q1_answer2,'q1_answer3'=>$q1_answer3,'q1_answer4'=>$q1_answer4,'q1_answer5'=>$q1_answer5,'q1_answer6'=>$q1_answer6,'q1_answer7'=>$q1_answer7,
'q2_answer1'=>$q2_answer1,'q2_answer2'=>$q2_answer2,'q2_answer3'=>$q2_answer3,'q2_answer4'=>$q2_answer4,'q2_answer5'=>$q2_answer5,'q2_answer6'=>$q2_answer6,'q2_answer7'=>$q2_answer7,
'q3_answer1'=>$q3_answer1,'q3_answer2'=>$q3_answer2,'q3_answer3'=>$q3_answer3,'q3_answer4'=>$q3_answer4,'q3_answer5'=>$q3_answer5,'q3_answer6'=>$q3_answer6,'q3_answer7'=>$q3_answer7,
'q4_answer1'=>$q4_answer1,'q4_answer2'=>$q4_answer2,'q4_answer3'=>$q4_answer3,'q4_answer4'=>$q4_answer4,'q4_answer5'=>$q4_answer5,'q4_answer6'=>$q4_answer6,'q4_answer7'=>$q4_answer7,
'q5_answer1'=>$q5_answer1,'q5_answer2'=>$q5_answer2,'q5_answer3'=>$q5_answer3,'q5_answer4'=>$q5_answer4,'q5_answer5'=>$q5_answer5,'q5_answer6'=>$q5_answer6,'q5_answer7'=>$q5_answer7,
'q6_answer1'=>$q6_answer1,'q6_answer2'=>$q6_answer2,'q6_answer3'=>$q6_answer3,'q6_answer4'=>$q6_answer4,'q6_answer5'=>$q6_answer5,'q6_answer6'=>$q6_answer6,'q6_answer7'=>$q6_answer7,
'q7_answer1'=>$q7_answer1,'q7_answer2'=>$q7_answer2,'q7_answer3'=>$q7_answer3,'q7_answer4'=>$q7_answer4,'q7_answer5'=>$q7_answer5,'q7_answer6'=>$q7_answer6,'q7_answer7'=>$q7_answer7,
'q8_answer1'=>$q8_answer1,'q8_answer2'=>$q8_answer2,'q8_answer3'=>$q8_answer3,'q8_answer4'=>$q8_answer4,'q8_answer5'=>$q8_answer5,'q8_answer6'=>$q8_answer6,'q8_answer7'=>$q8_answer7,
'q9_answer1'=>$q9_answer1,'q9_answer2'=>$q9_answer2,'q9_answer3'=>$q9_answer3,'q9_answer4'=>$q9_answer4,'q9_answer5'=>$q9_answer5,'q9_answer6'=>$q9_answer6,'q9_answer7'=>$q9_answer7,
'q10_answer1'=>$q10_answer1,'q10_answer2'=>$q10_answer2,'q10_answer3'=>$q10_answer3,'q10_answer4'=>$q10_answer4,'q10_answer5'=>$q10_answer5,'q10_answer6'=>$q10_answer6,'q10_answer7'=>$q10_answer7,'details'=>$details,'q1_correct'=>$q1_correct,'q2_correct'=>$q2_correct,'q3_correct'=>$q3_correct,'q4_correct'=>$q4_correct,'q5_correct'=>$q5_correct,'q6_correct'=>$q6_correct,'q7_correct'=>$q7_correct,'q8_correct'=>$q8_correct,'q9_correct'=>$q9_correct,'q10_correct'=>$q10_correct,
	));

    }








































































































        public function SurveyContent(Request $request, $id)
    {

$id_user = Auth::user()->id;



$q1_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q1_r');

$q2_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q2_r');

$q3_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q3_r');

$q4_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q4_r');


$q5_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q5_r');


$q6_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q6_r');


$q7_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q7_r');

$q8_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q8_r');


$q9_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q9_r');

$q10_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$id)
							->value('q10_r');

$sr = DB::table('surveys')->get();
$surveys = Survey::orderByRaw("RAND()")->get();

$houni = DB::table('surveys')->where('id','=', $id)->pluck('id');



$survey_id = DB::table('surveys')->where('id', $id)->value('id');
$title = DB::table('surveys')->where('id', $id)->value('title_survey');

	$details = DB::table('surveys')->where('id', $id)->value('details');



$question1 = DB::table('surveys')->where('id', $id)->value('question1');
$q1_answer1 = DB::table('surveys')->where('id', $id)->value('q1_answer1');
$q1_answer2 = DB::table('surveys')->where('id', $id)->value('q1_answer2');
$q1_answer3 = DB::table('surveys')->where('id', $id)->value('q1_answer3');
$q1_answer4 = DB::table('surveys')->where('id', $id)->value('q1_answer4');
$q1_answer5 = DB::table('surveys')->where('id', $id)->value('q1_answer5');
$q1_answer6 = DB::table('surveys')->where('id', $id)->value('q1_answer6');
$q1_answer7 = DB::table('surveys')->where('id', $id)->value('q1_answer7');

$question2 = DB::table('surveys')->where('id', $id)->value('question2');
$q2_answer1 = DB::table('surveys')->where('id', $id)->value('q2_answer1');
$q2_answer2 = DB::table('surveys')->where('id', $id)->value('q2_answer2');
$q2_answer3 = DB::table('surveys')->where('id', $id)->value('q2_answer3');
$q2_answer4 = DB::table('surveys')->where('id', $id)->value('q2_answer4');
$q2_answer5 = DB::table('surveys')->where('id', $id)->value('q2_answer5');
$q2_answer6 = DB::table('surveys')->where('id', $id)->value('q2_answer6');
$q2_answer7 = DB::table('surveys')->where('id', $id)->value('q2_answer7');

$question3 = DB::table('surveys')->where('id', $id)->value('question3');
$q3_answer1 = DB::table('surveys')->where('id', $id)->value('q3_answer1');
$q3_answer2 = DB::table('surveys')->where('id', $id)->value('q3_answer2');
$q3_answer3 = DB::table('surveys')->where('id', $id)->value('q3_answer3');
$q3_answer4 = DB::table('surveys')->where('id', $id)->value('q3_answer4');
$q3_answer5 = DB::table('surveys')->where('id', $id)->value('q3_answer5');
$q3_answer6 = DB::table('surveys')->where('id', $id)->value('q3_answer6');
$q3_answer7 = DB::table('surveys')->where('id', $id)->value('q3_answer7');

$question4 = DB::table('surveys')->where('id', $id)->value('question4');
$q4_answer1 = DB::table('surveys')->where('id', $id)->value('q4_answer1');
$q4_answer2 = DB::table('surveys')->where('id', $id)->value('q4_answer2');
$q4_answer3 = DB::table('surveys')->where('id', $id)->value('q4_answer3');
$q4_answer4 = DB::table('surveys')->where('id', $id)->value('q4_answer4');
$q4_answer5 = DB::table('surveys')->where('id', $id)->value('q4_answer5');
$q4_answer6 = DB::table('surveys')->where('id', $id)->value('q4_answer6');
$q4_answer7 = DB::table('surveys')->where('id', $id)->value('q4_answer7');

$question5 = DB::table('surveys')->where('id', $id)->value('question5');
$q5_answer1 = DB::table('surveys')->where('id', $id)->value('q5_answer1');
$q5_answer2 = DB::table('surveys')->where('id', $id)->value('q5_answer2');
$q5_answer3 = DB::table('surveys')->where('id', $id)->value('q5_answer3');
$q5_answer4 = DB::table('surveys')->where('id', $id)->value('q5_answer4');
$q5_answer5 = DB::table('surveys')->where('id', $id)->value('q5_answer5');
$q5_answer6 = DB::table('surveys')->where('id', $id)->value('q5_answer6');
$q5_answer7 = DB::table('surveys')->where('id', $id)->value('q5_answer7');
$question6 = DB::table('surveys')->where('id', $id)->value('question6');
$q6_answer1 = DB::table('surveys')->where('id', $id)->value('q6_answer1');
$q6_answer2 = DB::table('surveys')->where('id', $id)->value('q6_answer2');
$q6_answer3 = DB::table('surveys')->where('id', $id)->value('q6_answer3');
$q6_answer4 = DB::table('surveys')->where('id', $id)->value('q6_answer4');
$q6_answer5 = DB::table('surveys')->where('id', $id)->value('q6_answer5');
$q6_answer6 = DB::table('surveys')->where('id', $id)->value('q6_answer6');
$q6_answer7 = DB::table('surveys')->where('id', $id)->value('q6_answer7');
$question7 = DB::table('surveys')->where('id', $id)->value('question7');
$q7_answer1 = DB::table('surveys')->where('id', $id)->value('q7_answer1');
$q7_answer2 = DB::table('surveys')->where('id', $id)->value('q7_answer2');
$q7_answer3 = DB::table('surveys')->where('id', $id)->value('q7_answer3');
$q7_answer4 = DB::table('surveys')->where('id', $id)->value('q7_answer4');
$q7_answer5 = DB::table('surveys')->where('id', $id)->value('q7_answer5');
$q7_answer6 = DB::table('surveys')->where('id', $id)->value('q7_answer6');
$q7_answer7 = DB::table('surveys')->where('id', $id)->value('q7_answer7');
$question8 = DB::table('surveys')->where('id', $id)->value('question8');
$q8_answer1 = DB::table('surveys')->where('id', $id)->value('q8_answer1');
$q8_answer2 = DB::table('surveys')->where('id', $id)->value('q8_answer2');
$q8_answer3 = DB::table('surveys')->where('id', $id)->value('q8_answer3');
$q8_answer4 = DB::table('surveys')->where('id', $id)->value('q8_answer4');
$q8_answer5 = DB::table('surveys')->where('id', $id)->value('q8_answer5');
$q8_answer6 = DB::table('surveys')->where('id', $id)->value('q8_answer6');
$q8_answer7 = DB::table('surveys')->where('id', $id)->value('q8_answer7');
$question9 = DB::table('surveys')->where('id', $id)->value('question9');
$q9_answer1 = DB::table('surveys')->where('id', $id)->value('q9_answer1');
$q9_answer2 = DB::table('surveys')->where('id', $id)->value('q9_answer2');
$q9_answer3 = DB::table('surveys')->where('id', $id)->value('q9_answer3');
$q9_answer4 = DB::table('surveys')->where('id', $id)->value('q9_answer4');
$q9_answer5 = DB::table('surveys')->where('id', $id)->value('q9_answer5');
$q9_answer6 = DB::table('surveys')->where('id', $id)->value('q9_answer6');
$q9_answer7 = DB::table('surveys')->where('id', $id)->value('q9_answer7');
$question10 = DB::table('surveys')->where('id', $id)->value('question10');
$q10_answer1 = DB::table('surveys')->where('id', $id)->value('q10_answer1');
$q10_answer2 = DB::table('surveys')->where('id', $id)->value('q10_answer2');
$q10_answer3 = DB::table('surveys')->where('id', $id)->value('q10_answer3');
$q10_answer4 = DB::table('surveys')->where('id', $id)->value('q10_answer4');
$q10_answer5 = DB::table('surveys')->where('id', $id)->value('q10_answer5');
$q10_answer6 = DB::table('surveys')->where('id', $id)->value('q10_answer6');
$q10_answer7 = DB::table('surveys')->where('id', $id)->value('q10_answer7');


$q1_correct = DB::table('surveys')->where('id', $id)->value('q1_correct');
$q2_correct = DB::table('surveys')->where('id', $id)->value('q2_correct');
$q3_correct = DB::table('surveys')->where('id', $id)->value('q3_correct');
$q4_correct = DB::table('surveys')->where('id', $id)->value('q4_correct');
$q5_correct = DB::table('surveys')->where('id', $id)->value('q5_correct');

$q6_correct = DB::table('surveys')->where('id', $id)->value('q6_correct');
$q7_correct = DB::table('surveys')->where('id', $id)->value('q7_correct');
$q8_correct = DB::table('surveys')->where('id', $id)->value('q8_correct');
$q9_correct = DB::table('surveys')->where('id', $id)->value('q9_correct');
$q10_correct = DB::table('surveys')->where('id', $id)->value('q10_correct');


$xy1 = "";
$xy2 = "";
$xy3 = "";
$xy4 = "";
$xy5 = "";
$xy6 = "";
$xy7 = "";
$xy8 = "";
$xy9 = "";
$xy10 = "";


$x1 = "";
$x2 = "";
$x3 = "";
$x4 = "";
$x5 = "";
$x6 = "";
$x7 = "";
$x8 = "";
$x9 = "";
$x10 = "";



if ($q1_correct == 'q1_answer1'){
	$x1 = $q1_answer1;
}
elseif($q1_correct == 'q1_answer2'){
	$x1 = $q1_answer2;

}
elseif($q1_correct == 'q1_answer3'){
	$x1 = $q1_answer3;

}

elseif($q1_correct == 'q1_answer4'){
	$x1 = $q1_answer4;

}

elseif($q1_correct == 'q1_answer5'){
	$x1 = $q1_answer5;

}

elseif($q1_correct == 'q1_answer6'){
	$x1 = $q1_answer6;

}

elseif($q1_correct == 'q1_answer7'){
	$x1 = $q1_answer7;

}

//********************************



$j = 0 ;
if ($x1 == $q1_r)
{
	$xy1 = "1";

		$j++;

}
else{
	$xy1 = "0";
}


if ($q2_correct == 'q2_answer1'){
	$x2 = $q2_answer1;
}
elseif($q2_correct == 'q2_answer2'){
	$x2 = $q2_answer2;

}
elseif($q2_correct == 'q2_answer3'){
	$x2 = $q2_answer3;

}

elseif($q2_correct == 'q2_answer4'){
	$x2 = $q2_answer4;

}

elseif($q2_correct == 'q2_answer5'){
	$x2 = $q2_answer5;

}

elseif($q2_correct == 'q2_answer6'){
	$x2 = $q2_answer6;

}

elseif($q2_correct == 'q2_answer7'){
	$x2 = $q2_answer7;

}




if ($x2 == $q2_r)
{
	$xy2 = "1";
		$j++;
}
else{

	$xy2 = "0";
}





//******************************************
if ($q3_correct == 'q3_answer1'){
	$x3 = $q3_answer1;
}
elseif($q3_correct == 'q3_answer2'){
	$x3 = $q3_answer2;

}
elseif($q3_correct == 'q3_answer3'){
	$x3 = $q3_answer3;

}

elseif($q3_correct == 'q3_answer4'){
	$x3 = $q3_answer4;

}

elseif($q3_correct == 'q3_answer5'){
	$x3 = $q3_answer5;

}

elseif($q3_correct == 'q3_answer6'){
	$x3 = $q3_answer6;

}

elseif($q3_correct == 'q3_answer7'){
	$x3 = $q3_answer7;

}



if ($x3 == $q3_r)
{
	$xy3 = "1";
		$j++;

}
else{
	$xy3 = "0";

}



//******************************************
if ($q4_correct == 'q4_answer1'){
	$x4 = $q4_answer1;
}
elseif($q4_correct == 'q4_answer2'){
	$x4 = $q4_answer2;

}
elseif($q4_correct == 'q4_answer3'){
	$x4 = $q4_answer3;

}

elseif($q4_correct == 'q4_answer4'){
	$x4 = $q4_answer4;

}

elseif($q4_correct == 'q4_answer5'){
	$x4 = $q4_answer5;

}

elseif($q4_correct == 'q4_answer6'){
	$x4 = $q4_answer6;

}

elseif($q4_correct == 'q4_answer7'){
	$x4 = $q4_answer7;

}



if ($x4 == $q4_r)
{
	$xy4 = "1";
		$j++;

}
else{
		$xy4 = "0";

}
//****************QUESTION - 4 - ***************



//******************************************
if ($q5_correct == 'q5_answer1'){
	$x5 = $q5_answer1;
}
elseif($q5_correct == 'q5_answer2'){
	$x5 = $q5_answer2;

}
elseif($q5_correct == 'q5_answer3'){
	$x5 = $q5_answer3;

}

elseif($q5_correct == 'q5_answer4'){
	$x5 = $q5_answer4;

}

elseif($q5_correct == 'q5_answer5'){
	$x5 = $q5_answer5;

}

elseif($q5_correct == 'q5_answer6'){
	$x5 = $q5_answer6;

}

elseif($q5_correct == 'q5_answer7'){
	$x5 = $q5_answer7;

}



if ($x5 == $q5_r)
{
	$xy5 = "1";
		$j++;

}
else{
	$xy5 = "0";

}
//*********************Question  -  5  -*****************************



//*********************Question  -  6  -*****************************
if ($q6_correct == 'q6_answer1'){
	$x6 = $q6_answer1;
}
elseif($q6_correct == 'q6_answer2'){
	$x6 = $q6_answer2;

}
elseif($q6_correct == 'q6_answer3'){
	$x6 = $q6_answer3;

}

elseif($q6_correct == 'q6_answer4'){
	$x6 = $q6_answer4;

}

elseif($q6_correct == 'q6_answer5'){
	$x6 = $q6_answer5;

}

elseif($q6_correct == 'q6_answer6'){
	$x6 = $q6_answer6;

}

elseif($q6_correct == 'q6_answer7'){
	$x6 = $q6_answer7;

}



if ($x6 == $q6_r)
{
	$xy6 = "1";
		$j++;

}
else{
	$xy6 = "0";

}
//*********************Question  -  6  -*****************************




//*********************Question  -  7  -*****************************
if ($q7_correct == 'q7_answer1'){
	$x7 = $q7_answer1;
}
elseif($q7_correct == 'q7_answer2'){
	$x7 = $q7_answer2;

}
elseif($q7_correct == 'q7_answer3'){
	$x7 = $q7_answer3;

}

elseif($q7_correct == 'q7_answer4'){
	$x7 = $q7_answer4;

}

elseif($q7_correct == 'q7_answer5'){
	$x7 = $q7_answer5;

}

elseif($q7_correct == 'q7_answer6'){
	$x7 = $q7_answer6;

}

elseif($q7_correct == 'q7_answer7'){
	$x7 = $q7_answer7;

}



if ($x7 == $q7_r)
{
	$xy7 = "1";
		$j++;

}
else{
	$xy7 = "0";

}
//*********************Question  -  7  -*****************************



//*********************Question  -  8  -*****************************
if ($q8_correct == 'q8_answer1'){
	$x8 = $q8_answer1;
}
elseif($q8_correct == 'q8_answer2'){
	$x8 = $q8_answer2;

}
elseif($q8_correct == 'q8_answer3'){
	$x8 = $q8_answer3;

}

elseif($q8_correct == 'q8_answer4'){
	$x8 = $q8_answer4;

}

elseif($q8_correct == 'q8_answer5'){
	$x8 = $q8_answer5;

}

elseif($q8_correct == 'q8_answer6'){
	$x8 = $q8_answer6;

}

elseif($q8_correct == 'q8_answer7'){
	$x8 = $q8_answer7;

}



if ($x8 == $q8_r)
{
	$xy8 = "1";
		$j++;

}
else{
		$xy8 = "0";

}
//*********************Question  -  8  -*****************************



//*********************Question  -  9  -*****************************
if ($q9_correct == 'q9_answer1'){
	$x9 = $q9_answer1;
}
elseif($q9_correct == 'q9_answer2'){
	$x9 = $q9_answer2;

}
elseif($q9_correct == 'q9_answer3'){
	$x9 = $q9_answer3;

}

elseif($q9_correct == 'q9_answer4'){
	$x9 = $q9_answer4;

}

elseif($q9_correct == 'q9_answer5'){
	$x9 = $q9_answer5;

}

elseif($q9_correct == 'q9_answer6'){
	$x9 = $q9_answer6;

}

elseif($q9_correct == 'q9_answer7'){
	$x9 = $q9_answer7;

}



if ($x9 == $q9_r)
{
	$xy9 = "1";
		$j++;

}
else{
	$xy9 = "0";

}
//*********************Question  -  9  -*****************************



//*********************Question  -  10  -*****************************
if ($q10_correct == 'q10_answer1'){
	$x10 = $q10_answer1;
}
elseif($q10_correct == 'q10_answer2'){
	$x10 = $q10_answer2;

}
elseif($q10_correct == 'q10_answer3'){
	$x10 = $q10_answer3;

}

elseif($q10_correct == 'q10_answer4'){
	$x10 = $q10_answer4;

}

elseif($q10_correct == 'q10_answer5'){
	$x10 = $q10_answer5;

}

elseif($q10_correct == 'q10_answer6'){
	$x10 = $q10_answer6;

}

elseif($q10_correct == 'q10_answer7'){
	$x10 = $q10_answer7;

}



if ($x10 == $q10_r)
{
	$xy10 = "1";
		$j++;

}
else{
	$xy10 = "0";

}


//return $res;

return View::make('front.Survey.content',array('x10'=> $x10 ,'x9'=> $x9 ,'x8'=> $x8 ,'x7'=> $x7 , 'x6'=> $x6 ,'x5'=> $x5 ,
											'x4'=> $x4 ,'x3'=> $x3 ,'x2'=> $x2 ,'x1'=> $x1 ,
	'xy10'=> $xy10 ,'xy9'=> $xy9 ,'xy8'=> $xy8 ,'xy7'=> $xy7 , 'xy6'=> $xy6 ,'xy5'=> $xy5 ,
											'xy4'=> $xy4 ,'xy3'=> $xy3 ,'xy2'=> $xy2 ,'xy1'=> $xy1 ,
	'j'=>$j,'q1_r'=>$q1_r,'q2_r'=>$q2_r,'q3_r'=>$q3_r,'q4_r'=>$q4_r,'q5_r'=>$q5_r,'q6_r'=>$q6_r,
												'q7_r'=>$q7_r,'q8_r'=>$q8_r,'q9_r'=>$q9_r,'q10_r'=>$q10_r,
												'survey_id'=>$survey_id,'id_user'=>$id_user,
												'title'=>$title,'question1'=>$question1,
												'question2'=>$question2,'question3'=>$question3,
												'question4'=>$question4,'question5'=>$question5,
												'question6'=>$question6,'question7'=>$question7,
												'question8'=>$question8,'question9'=>$question9,
												'question10'=>$question10,
	'q1_answer1'=>$q1_answer1,'q1_answer2'=>$q1_answer2,'q1_answer3'=>$q1_answer3,'q1_answer4'=>$q1_answer4,'q1_answer5'=>$q1_answer5,'q1_answer6'=>$q1_answer6,'q1_answer7'=>$q1_answer7,
'q2_answer1'=>$q2_answer1,'q2_answer2'=>$q2_answer2,'q2_answer3'=>$q2_answer3,'q2_answer4'=>$q2_answer4,'q2_answer5'=>$q2_answer5,'q2_answer6'=>$q2_answer6,'q2_answer7'=>$q2_answer7,
'q3_answer1'=>$q3_answer1,'q3_answer2'=>$q3_answer2,'q3_answer3'=>$q3_answer3,'q3_answer4'=>$q3_answer4,'q3_answer5'=>$q3_answer5,'q3_answer6'=>$q3_answer6,'q3_answer7'=>$q3_answer7,
'q4_answer1'=>$q4_answer1,'q4_answer2'=>$q4_answer2,'q4_answer3'=>$q4_answer3,'q4_answer4'=>$q4_answer4,'q4_answer5'=>$q4_answer5,'q4_answer6'=>$q4_answer6,'q4_answer7'=>$q4_answer7,
'q5_answer1'=>$q5_answer1,'q5_answer2'=>$q5_answer2,'q5_answer3'=>$q5_answer3,'q5_answer4'=>$q5_answer4,'q5_answer5'=>$q5_answer5,'q5_answer6'=>$q5_answer6,'q5_answer7'=>$q5_answer7,
'q6_answer1'=>$q6_answer1,'q6_answer2'=>$q6_answer2,'q6_answer3'=>$q6_answer3,'q6_answer4'=>$q6_answer4,'q6_answer5'=>$q6_answer5,'q6_answer6'=>$q6_answer6,'q6_answer7'=>$q6_answer7,
'q7_answer1'=>$q7_answer1,'q7_answer2'=>$q7_answer2,'q7_answer3'=>$q7_answer3,'q7_answer4'=>$q7_answer4,'q7_answer5'=>$q7_answer5,'q7_answer6'=>$q7_answer6,'q7_answer7'=>$q7_answer7,
'q8_answer1'=>$q8_answer1,'q8_answer2'=>$q8_answer2,'q8_answer3'=>$q8_answer3,'q8_answer4'=>$q8_answer4,'q8_answer5'=>$q8_answer5,'q8_answer6'=>$q8_answer6,'q8_answer7'=>$q8_answer7,
'q9_answer1'=>$q9_answer1,'q9_answer2'=>$q9_answer2,'q9_answer3'=>$q9_answer3,'q9_answer4'=>$q9_answer4,'q9_answer5'=>$q9_answer5,'q9_answer6'=>$q9_answer6,'q9_answer7'=>$q9_answer7,
'q10_answer1'=>$q10_answer1,'q10_answer2'=>$q10_answer2,'q10_answer3'=>$q10_answer3,'q10_answer4'=>$q10_answer4,'q10_answer5'=>$q10_answer5,'q10_answer6'=>$q10_answer6,'q10_answer7'=>$q10_answer7,'details'=>$details,'q1_correct'=>$q1_correct,'q2_correct'=>$q2_correct,'q3_correct'=>$q3_correct,'q4_correct'=>$q4_correct,'q5_correct'=>$q5_correct,'q6_correct'=>$q6_correct,'q7_correct'=>$q7_correct,'q8_correct'=>$q8_correct,'q9_correct'=>$q9_correct,'q10_correct'=>$q10_correct,
	));

    }

public function savetoHistory(Request1 $request ){






	 $tot = Request1::input('totalPoints');
	 $space2 = Request1::input('space2');


$id_user = Auth::user()->id;
$survey_id = Request1::input('survey_id');

//Question1
$question1 = DB::table('surveys')->where('id', $survey_id)->value('question1');
$q1_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer1');
$q1_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer2');
$q1_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer3');
$q1_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer4');
$q1_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer5');
$q1_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer6');
$q1_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q1_answer7');
//Question2
$question2 = DB::table('surveys')->where('id', $survey_id)->value('question2');
$q2_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer1');
$q2_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer2');
$q2_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer3');
$q2_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer4');
$q2_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer5');
$q2_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer6');
$q2_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q2_answer7');
//Question3
$question3  = DB::table('surveys')->where('id', $survey_id)->value('question3');
$q3_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer1');
$q3_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer2');
$q3_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer3');
$q3_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer4');
$q3_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer5');
$q3_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer6');
$q3_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q3_answer7');
//Question4
$question4 = DB::table('surveys')->where('id', $survey_id)->value('question4');
$q4_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer1');
$q4_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer2');
$q4_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer3');
$q4_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer4');
$q4_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer5');
$q4_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer6');
$q4_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q4_answer7');
//Question5
$question5 = DB::table('surveys')->where('id', $survey_id)->value('question5');
$q5_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer1');
$q5_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer2');
$q5_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer3');
$q5_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer4');
$q5_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer5');
$q5_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer6');
$q5_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q5_answer7');
//Question6
$question6 = DB::table('surveys')->where('id', $survey_id)->value('question6');
$q6_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer1');
$q6_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer2');
$q6_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer3');
$q6_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer4');
$q6_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer5');
$q6_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer6');
$q6_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q6_answer7');
//Question7
$question7 = DB::table('surveys')->where('id', $survey_id)->value('question7');
$q7_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer1');
$q7_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer2');
$q7_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer3');
$q7_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer4');
$q7_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer5');
$q7_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer6');
$q7_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q7_answer7');
//Question8
$question8 = DB::table('surveys')->where('id', $survey_id)->value('question8');
$q8_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer1');
$q8_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer2');
$q8_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer3');
$q8_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer4');
$q8_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer5');
$q8_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer6');
$q8_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q8_answer7');
//Question9
$question9 = DB::table('surveys')->where('id', $survey_id)->value('question9');
$q9_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer1');
$q9_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer2');
$q9_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer3');
$q9_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer4');
$q9_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer5');
$q9_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer6');
$q9_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q9_answer7');
//Question10
$question10 = DB::table('surveys')->where('id', $survey_id)->value('question10');
$q10_answer1 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer1');
$q10_answer2 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer2');
$q10_answer3 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer3');
$q10_answer4 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer4');
$q10_answer5 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer5');
$q10_answer6 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer6');
$q10_answer7 = DB::table('surveys')->where('id', $survey_id)->value('q10_answer7');

$q1_correct = DB::table('surveys')->where('id', $survey_id)->value('q1_correct');
$q2_correct = DB::table('surveys')->where('id', $survey_id)->value('q2_correct');
$q3_correct = DB::table('surveys')->where('id', $survey_id)->value('q3_correct');
$q4_correct = DB::table('surveys')->where('id', $survey_id)->value('q4_correct');
$q5_correct = DB::table('surveys')->where('id', $survey_id)->value('q5_correct');
$q6_correct = DB::table('surveys')->where('id', $survey_id)->value('q6_correct');
$q7_correct = DB::table('surveys')->where('id', $survey_id)->value('q7_correct');
$q8_correct = DB::table('surveys')->where('id', $survey_id)->value('q8_correct');
$q9_correct = DB::table('surveys')->where('id', $survey_id)->value('q9_correct');
$q10_correct = DB::table('surveys')->where('id', $survey_id)->value('q10_correct');


//Réponse de question 1 par l'utilisateur authentifié
$q1_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q1_r');

//Réponse de question 2 par l'utilisateur authentifié
$q2_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q2_r');

//Réponse de question 3 par l'utilisateur authentifié
$q3_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q3_r');

//Réponse de question 4 par l'utilisateur authentifié
$q4_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q4_r');

//Réponse de question 5 par l'utilisateur authentifié
$q5_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q5_r');


//Réponse de question 6 par l'utilisateur authentifié
$q6_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q6_r');


//Réponse de question 7 par l'utilisateur authentifié
$q7_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q7_r');

//Réponse de question 8 par l'utilisateur authentifié
$q8_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q8_r');

//Réponse de question 9 par l'utilisateur authentifié
$q9_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q9_r');

//Réponse de question 10 par l'utilisateur authentifié
$q10_r = DB::table('history')->where('user_id','=', $id_user)
							->where('survey_id',$survey_id)
							->value('q10_r');


//query = te5edh ligne eli feha user_id w survey_id m table historique
$query = DB::table('history')->where('survey_id','=',$survey_id)->where('user_id','=',$id_user)->value('id');


//dd($query);

//return $query;



//chnouwa réponse eli 5tartha
	 $r1 = Request1::input('question1');
	 $r2 = Request1::input('question2');
	 $r3 = Request1::input('question3');
	 $r4 = Request1::input('question4');
	 $r5 = Request1::input('question5');
	 $r6 = Request1::input('question6');
	 $r7 = Request1::input('question7');
	 $r8 = Request1::input('question8');
	 $r9 = Request1::input('question9');
	 $r10 = Request1::input('question10');

$q1_correct = DB::table('surveys')->where('id', $survey_id)->value('q1_correct');
$q2_correct = DB::table('surveys')->where('id', $survey_id)->value('q2_correct');
$q3_correct = DB::table('surveys')->where('id', $survey_id)->value('q3_correct');
$q4_correct = DB::table('surveys')->where('id', $survey_id)->value('q4_correct');
$q5_correct = DB::table('surveys')->where('id', $survey_id)->value('q5_correct');

$q6_correct = DB::table('surveys')->where('id', $survey_id)->value('q6_correct');
$q7_correct = DB::table('surveys')->where('id', $survey_id)->value('q7_correct');
$q8_correct = DB::table('surveys')->where('id', $survey_id)->value('q8_correct');
$q9_correct = DB::table('surveys')->where('id', $survey_id)->value('q9_correct');
$q10_correct = DB::table('surveys')->where('id', $survey_id)->value('q10_correct');


$question1xx = Request1::input('question1');
$question2xx = Request1::input('question2');
$question3xx = Request1::input('question3');
$question4xx = Request1::input('question4');
$question5xx = Request1::input('question5');




$question6xx = Request1::input('question6');
$question7xx = Request1::input('question7');
$question8xx = Request1::input('question8');
$question9xx = Request1::input('question9');
$question10xx = Request1::input('question10');


$xy1 = "";
$xy2 = "";
$xy3 = "";
$xy4 = "";
$xy5 = "";
$xy6 = "";
$xy7 = "";
$xy8 = "";
$xy9 = "";
$xy10 = "";

$x1 = "";
$x2 = "";
$x3 = "";
$x4 = "";
$x5 = "";
$x6 = "";
$x7 = "";
$x8 = "";
$x9 = "";
$x10 = "";


if ($q1_correct == 'q1_answer1'){
	$x1 = $q1_answer1;
}
elseif($q1_correct == 'q1_answer2'){
	$x1 = $q1_answer2;

}
elseif($q1_correct == 'q1_answer3'){
	$x1 = $q1_answer3;

}

elseif($q1_correct == 'q1_answer4'){
	$x1 = $q1_answer4;

}

elseif($q1_correct == 'q1_answer5'){
	$x1 = $q1_answer5;

}

elseif($q1_correct == 'q1_answer6'){
	$x1 = $q1_answer6;

}

elseif($q1_correct == 'q1_answer7'){
	$x1 = $q1_answer7;

}

//********************************



$j = 0 ;
if ($x1 == $question1xx)
{
	$xy1 = "1";

		$j++;

}
else{
	$xy1 = "0";
}


if ($q2_correct == 'q2_answer1'){
	$x2 = $q2_answer1;
}
elseif($q2_correct == 'q2_answer2'){
	$x2 = $q2_answer2;

}
elseif($q2_correct == 'q2_answer3'){
	$x2 = $q2_answer3;

}

elseif($q2_correct == 'q2_answer4'){
	$x2 = $q2_answer4;

}

elseif($q2_correct == 'q2_answer5'){
	$x2 = $q2_answer5;

}

elseif($q2_correct == 'q2_answer6'){
	$x2 = $q2_answer6;

}

elseif($q2_correct == 'q2_answer7'){
	$x2 = $q2_answer7;

}




if ($x2 == $question2xx)
{
	$xy2 = "1";
		$j++;
}
else{

	$xy2 = "0";
}





//******************************************
if ($q3_correct == 'q3_answer1'){
	$x3 = $q3_answer1;
}
elseif($q3_correct == 'q3_answer2'){
	$x3 = $q3_answer2;

}
elseif($q3_correct == 'q3_answer3'){
	$x3 = $q3_answer3;

}

elseif($q3_correct == 'q3_answer4'){
	$x3 = $q3_answer4;

}

elseif($q3_correct == 'q3_answer5'){
	$x3 = $q3_answer5;

}

elseif($q3_correct == 'q3_answer6'){
	$x3 = $q3_answer6;

}

elseif($q3_correct == 'q3_answer7'){
	$x3 = $q3_answer7;

}



if ($x3 == $question3xx)
{
	$xy3 = "1";
		$j++;

}
else{
	$xy3 = "0";

}



//******************************************
if ($q4_correct == 'q4_answer1'){
	$x4 = $q4_answer1;
}
elseif($q4_correct == 'q4_answer2'){
	$x4 = $q4_answer2;

}
elseif($q4_correct == 'q4_answer3'){
	$x4 = $q4_answer3;

}

elseif($q4_correct == 'q4_answer4'){
	$x4 = $q4_answer4;

}

elseif($q4_correct == 'q4_answer5'){
	$x4 = $q4_answer5;

}

elseif($q4_correct == 'q4_answer6'){
	$x4 = $q4_answer6;

}

elseif($q4_correct == 'q4_answer7'){
	$x4 = $q4_answer7;

}



if ($x4 == $question4xx)
{
	$xy4 = "1";
		$j++;

}
else{
		$xy4 = "0";

}
//****************QUESTION - 4 - ***************



//******************************************
if ($q5_correct == 'q5_answer1'){
	$x5 = $q5_answer1;
}
elseif($q5_correct == 'q5_answer2'){
	$x5 = $q5_answer2;

}
elseif($q5_correct == 'q5_answer3'){
	$x5 = $q5_answer3;

}

elseif($q5_correct == 'q5_answer4'){
	$x5 = $q5_answer4;

}

elseif($q5_correct == 'q5_answer5'){
	$x5 = $q5_answer5;

}

elseif($q5_correct == 'q5_answer6'){
	$x5 = $q5_answer6;

}

elseif($q5_correct == 'q5_answer7'){
	$x5 = $q5_answer7;

}



if ($x5 == $question5xx)
{
	$xy5 = "1";
		$j++;

}
else{
	$xy5 = "0";

}
//*********************Question  -  5  -*****************************



//*********************Question  -  6  -*****************************
if ($q6_correct == 'q6_answer1'){
	$x6 = $q6_answer1;
}
elseif($q6_correct == 'q6_answer2'){
	$x6 = $q6_answer2;

}
elseif($q6_correct == 'q6_answer3'){
	$x6 = $q6_answer3;

}

elseif($q6_correct == 'q6_answer4'){
	$x6 = $q6_answer4;

}

elseif($q6_correct == 'q6_answer5'){
	$x6 = $q6_answer5;

}

elseif($q6_correct == 'q6_answer6'){
	$x6 = $q6_answer6;

}

elseif($q6_correct == 'q6_answer7'){
	$x6 = $q6_answer7;

}



if ($x6 == $question6xx)
{
	$xy6 = "1";
		$j++;

}
else{
	$xy6 = "0";

}
//*********************Question  -  6  -*****************************




//*********************Question  -  7  -*****************************
if ($q7_correct == 'q7_answer1'){
	$x7 = $q7_answer1;
}
elseif($q7_correct == 'q7_answer2'){
	$x7 = $q7_answer2;

}
elseif($q7_correct == 'q7_answer3'){
	$x7 = $q7_answer3;

}

elseif($q7_correct == 'q7_answer4'){
	$x7 = $q7_answer4;

}

elseif($q7_correct == 'q7_answer5'){
	$x7 = $q7_answer5;

}

elseif($q7_correct == 'q7_answer6'){
	$x7 = $q7_answer6;

}

elseif($q7_correct == 'q7_answer7'){
	$x7 = $q7_answer7;

}



if ($x7 == $question7xx)
{
	$xy7 = "1";
		$j++;

}
else{
	$xy7 = "0";

}
//*********************Question  -  7  -*****************************



//*********************Question  -  8  -*****************************
if ($q8_correct == 'q8_answer1'){
	$x8 = $q8_answer1;
}
elseif($q8_correct == 'q8_answer2'){
	$x8 = $q8_answer2;

}
elseif($q8_correct == 'q8_answer3'){
	$x8 = $q8_answer3;

}

elseif($q8_correct == 'q8_answer4'){
	$x8 = $q8_answer4;

}

elseif($q8_correct == 'q8_answer5'){
	$x8 = $q8_answer5;

}

elseif($q8_correct == 'q8_answer6'){
	$x8 = $q8_answer6;

}

elseif($q8_correct == 'q8_answer7'){
	$x8 = $q8_answer7;

}



if ($x8 == $question8xx)
{
	$xy8 = "1";
		$j++;

}
else{
		$xy8 = "0";

}
//*********************Question  -  8  -*****************************



//*********************Question  -  9  -*****************************
if ($q9_correct == 'q9_answer1'){
	$x9 = $q9_answer1;
}
elseif($q9_correct == 'q9_answer2'){
	$x9 = $q9_answer2;

}
elseif($q9_correct == 'q9_answer3'){
	$x9 = $q9_answer3;

}

elseif($q9_correct == 'q9_answer4'){
	$x9 = $q9_answer4;

}

elseif($q9_correct == 'q9_answer5'){
	$x9 = $q9_answer5;

}

elseif($q9_correct == 'q9_answer6'){
	$x9 = $q9_answer6;

}

elseif($q9_correct == 'q9_answer7'){
	$x9 = $q9_answer7;

}



if ($x9 == $question9xx)
{
	$xy9 = "1";
		$j++;

}
else{
	$xy9 = "0";

}
//*********************Question  -  9  -*****************************



//*********************Question  -  10  -*****************************
if ($q10_correct == 'q10_answer1'){
	$x10 = $q10_answer1;
}
elseif($q10_correct == 'q10_answer2'){
	$x10 = $q10_answer2;

}
elseif($q10_correct == 'q10_answer3'){
	$x10 = $q10_answer3;

}

elseif($q10_correct == 'q10_answer4'){
	$x10 = $q10_answer4;

}

elseif($q10_correct == 'q10_answer5'){
	$x10 = $q10_answer5;

}

elseif($q10_correct == 'q10_answer6'){
	$x10 = $q10_answer6;

}

elseif($q10_correct == 'q10_answer7'){
	$x10 = $q10_answer7;

}



if ($x10 == $question10xx)
{
	$xy10 = "1";
		$j++;

}
else{
	$xy10 = "0";

}
//*********************Question  -  10 -*****************************


//si existance mte3 user_id w usrvey id fel historique
$xtt = DB::table('history')->where('user_id','=',$id_user)->where('survey_id','=',$survey_id)->count() > 0;

if ($xtt == false) {
	

//return 'insert';


		$history = new History();

		$history->user_id = $id_user;
		$history->survey_id = $survey_id;
		if($r1 != ''){
		$history->q1_r = $r1;		
		}
		if($r2 != ''){
		$history->q2_r = $r2;		
		}
		if($r3 != ''){
		$history->q3_r = $r3;		
		}

		if($r4 != ''){
		$history->q4_r = $r4;		
		}

		if($r5 != ''){
		$history->q5_r = $r5;		
		}
		if($r6 != ''){
		$history->q6_r = $r6;		
		}
		if($r7 != ''){
		$history->q7_r = $r7;		
		}

		if($r8 != ''){
		$history->q8_r = $r8;		
		}
		if($r9 != ''){
		$history->q9_r = $r9;		
		}

		if($r10 != ''){
		$history->q10_r = $r10;		
		}


		$history->totalPoints = $j;

		//return $tot;
		//$history->space2 = $xz;


		$history->save();

	      Session::flash('flash_message', 'Successfully inserted!');

  return redirect()->back();



}
else{

//return 'update';
//return 'this is for update';
$query = DB::table('history')->where('survey_id','=',$survey_id)->where('user_id','=',$id_user)->value('id');

//return $query;
$history = History::find($query);
//dd($history);
/*
		$history->user_id = $user_id;
		$history->survey_id = $survey_id;
*/

		$history->user_id =$id_user;
		$history->survey_id= $survey_id;

		if($r1 != ''){
		$history->q1_r = $r1;		
		}

		if($r2 != ''){
		$history->q2_r = $r2;		
		}
		if($r3 != ''){
		$history->q3_r = $r3;		
		}

		if($r4 != ''){
		$history->q4_r = $r4;		
		}

		if($r5 != ''){
		$history->q5_r = $r5;		
		}
		if($r6 != ''){
		$history->q6_r = $r6;		
		}
		if($r7 != ''){
			//return $r7;
		$history->q7_r = $r7;		
		}

		if($r8 != ''){
		$history->q8_r = $r8;		
		}
		if($r9 != ''){
		$history->q9_r = $r9;		
		}
		
		if($r10 != ''){
		$history->q10_r = $r10;		
		}

		$history->totalPoints = $j;

		//return $tot;
		//$history->space2 = $xz;
		$history->save();

	      Session::flash('flash_message', 'Successfully updated!');
  return redirect()->back();

	
}


}

}