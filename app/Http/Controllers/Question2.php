<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Question;

use App\Http\Requests;

class Question2 extends Controller
{

    public function index(Request $request)
    {
    	   $questions = Question::all();
           return $questions;

    }

    public function show($id)
    {
           $questions = Question::all();
           return $questions;
    }



    public function store(Request $request)
    {
        $question = Question::create(Request::all());
        return $question;
    }


    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->user = Request::input('title');
        $question->save();
 
        return $question;

    }






    public function destroy(Request $request, $id)
    {
        Question::destroy($id);

    }

}
