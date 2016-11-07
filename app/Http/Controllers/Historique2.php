<?php

namespace App\Http\Controllers;


use App\Http\Requests;


use Request;

use View;
use App\Models\Question;
use App\Models\History;
use Auth;


class Historique2 extends Controller
{
    public function index(Request $request)
    {
        $connected_id = Auth::user()->id;
    	   $historiques = History::all();
           return $historiques;

    }

    public function show($id)
    {
           $historiques = History::all();
           return $historiques;
    }



    public function store(Request $request)
    {
        $historique = History::create(Request::all());
        return $historique;
    }


    public function update(Request $request, $id)
    {
        $historique = History::find($id);
        $historique->user = Request::input('title');
        $historique->save();
 
        return $historique;

    }






    public function destroy(Request $request, $id)
    {
        Historique::destroy($id);

    }

}
