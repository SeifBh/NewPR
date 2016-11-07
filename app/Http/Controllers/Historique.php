<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use View;
use App\Models\Question;
use App\Models\History;



class Historique2 extends Controller
{
    public function index(Request $request)
    {
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
        History::destroy($id);

    }

}
