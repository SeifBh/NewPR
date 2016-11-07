<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CalEv;
use App\EventModel;
use DB;
use Carbon\Carbon;
use Auth;
use Input;
use Illuminate\Support\Facades\Request as Request1;
use Illuminate\Support\Facades\Redirect;

class CalendarController extends Controller {


public function saveme()
{

$id_user = Auth::user()->id;





    $calev = new CalEv();
     $calev->start = Request1::input('startev');


 $calev->end = Request1::input('endev');


 $calev->title = Request1::input('nameEv');

    $calev->user_id =$id_user;
    $calev->fullday = false;

    $calev->save();

    return redirect()->back();
}


public function index(){

$id_user = Auth::user()->id;
$res = DB::table('event_models')->where('user_id',$id_user)->get();

$i=0;
$events = [];
foreach ($res as $p) {
$i++;




$events[] = \Calendar::event(
    $p->title, //event title
    true, //full day event?
    $p->start, //start time (you can also use Carbon instead of DateTime)
    $p->end, //end time (you can also use Carbon instead of DateTime)
    1 //optionally, you can specify an event ID
);


}







$eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

$calendar = \Calendar::addEvents($events) //add an array with addEvents
->setOptions([ //set fullcalendar options
        'firstDay' => 1
    ]); 

return view('pages.calendar',array('res'=>$res), compact('calendar'));


}


    public function destroy(Request1 $request, $id)
    {
        CalEv::find($id)->delete();
    return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $calev = CalEv::find($id);
        if (is_null($calev))
        {
                return redirect()->back();

        }
                return redirect()->back();

    }



}