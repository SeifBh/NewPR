<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use Auth;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Question;

class HomeController extends Controller
{

    public function indextest()

    {
    	$data = array();
    	$data = Auth::user();
		return view('front.add_questions',array('data'=>$data));

    }



    public function saveTest(Request $request){

if (Auth::check()){
      $data = Auth::user();

      $user_id = Auth::user()->id;

        $gender = $request->input('gender');

      $histo = new History();
      $histo->user_resulat = $gender;
      $histo->user_id = $user_id;
      $histo->question_id = '1';
      $histo->save();
      dd('Well, you are here !');
}
else{
  dd('offline');
}


    }


	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function test()
	{
		 $i = 0;
		$questions = Question::all();
		return view('pages.test',compact('questions'),array('i'=>$i));
	}

	public function profile()
	{
		return view('front.complete_profiles');
	}


	public function index()
	{
		return view('front.index');
	}

	public function workwithTAG()
	{

		return view('pages.workwithtag');
	}

	public function TheRules()
	{

		return view('pages.compliance');
	}

	public function FAQ()
	{

		return view('pages.faq');
	}
	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);

		return redirect()->back();
	}

}
