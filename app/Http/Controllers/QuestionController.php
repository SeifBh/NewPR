<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Question;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class QuestionController extends Controller
{

    public function index(Request $request)
    {
           $questions = Question::all();
            return View::make('back.Questions.index', compact('questions'));

    }


    public function create(Request $request)
    {
        return View::make('back.Questions.create');


    }



    public function show($id)
    {
           $questions = Question::all();
           return $questions;
    }



    public function store(Request $request)
    {


        $input = Input::all();
        $validation = Validator::make($input, Question::$rules);

        if ($validation->passes())
        {
            Question::create($input);

            return Redirect::route('questions.index');
        }

        return Redirect::route('questions.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }


    public function update(Request $request, $id)
    {
       $input = Input::all();
        $validation = Validator::make($input, Question::$rules);
        if ($validation->passes())
        {
            $question = Question::find($id);
            $question->update($input);
            return Redirect::route('questions.index', $id);
        }
return Redirect::route('questions.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');


    }



    public function edit(Request $request, $id)
    {
        $question = Question::find($id);
        if (is_null($question))
        {
            return Redirect::route('questions.index');
        }
        return View::make('back.Questions.edit', compact('question'));

    }




    public function destroy(Request $request, $id)
    {
        Question::find($id)->delete();
        return Redirect::route('questions.index');
    }

}
