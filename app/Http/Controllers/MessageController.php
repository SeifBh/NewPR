<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\User;
use App\Models\Reply;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Request as Request1;
use Session;
use Auth;

use App\Models\Message;

class MessageController extends Controller
{
    //

    public function index(Request $request)
    {


    	$users = User::all();
    	return View::make('back.messageme.index',compact('users'));
    	/*
    	  $messages = Message::all();
          return View::make('back.messageme.index', compact('messages'));*/

    }

    public function create(Request $request,$user_id)
    {
    			$username = DB::table('users')->where('id','=',$user_id)->value('username');
				$url = config('medias.url') . '?langCode=' . config('app.locale');

    	//$user_id =  Request1::input('user_id');
        return View::make('back.messageme.create',array('url'=>$url,'user_id'=>$user_id,'username'=>$username));

    }

    public function showMessagewithReplyInbox(Request1 $request)
    {
        //si il existe un $reply avec un msg_id exist dans le tableau msg afficher le message et les reponse su message dans inbox

        //
    }


    public function inbox(Request $request,$username,$id){
				$id_user = Auth::user()->id;
				//return $id;
		$user = User::where('username', $username)->first();
        $id_message = DB::table('messages')->where('id','=',$id)->where('user_id','=',$id_user)->value('id');
        $subject = DB::table('messages')->where('id','=',$id)->where('user_id','=',$id_user)->value('subject');
		$content = DB::table('messages')->where('id','=',$id)->where('user_id','=',$id_user)->value('content');
		$status = DB::table('messages')->where('id','=',$id)->where('user_id','=',$id_user)->value('status');
		$created_at = DB::table('messages')->where('id','=',$id)->where('user_id','=',$id_user)->value('created_at');



  $replys = DB::table('reply')->where('msg_id','=',$id_message)->where('user_id','=',$id_user)->get();



//dd($messages);
		return view('front.inbox',array('replys'=>$replys,'id_message'=>$id_message,'subject'=>$subject,'content'=>$content,'status'=>$status,'created_at'=>$created_at),compact('user'));


    }




    public function show(Request $request)
    {
           $messages = Message::all();
           return $messages;

    }
    public function store(Request $request)
    {
      //  $input = Input::all();
        	 $subject = Request1::input('subject');
        	 $content = Request1::input('content');
        	 $user_id = Request1::input('user_id');
        	 $message = new Message();
        	 $message->subject = $subject;
        	 $message->content = $content;
        	 $message->user_id = $user_id ;
        	 $message->save();
		return redirect()->back();

    }

    public function update(Request $request,$id)
    {
    	       $input = Input::all();
       $messages = Message::all();

            $messages = Message::find($id);
            $messages->update($input);
		return redirect()->back();
   



    }

    public function destroy(Request $request,$id)
    {
    	        Message::find($id)->delete();
		return redirect()->back();
    }

    public function reply(Request $request){

        $id_user = Auth::user()->id;
             $id_message = Request1::input('id_message');
             $id_admin = Request1::input('id_admin');
             $content_reply = Request1::input('content_reply');

$xtt = DB::table('reply')->where('user_id','=',$id_user)->where('s1','=','admin')->where('msg_id','=',$id_message)->count() > 0;

    if($xtt == false){
       // dd('dosent exist');

    }
    else{
      //  dd('Exist');
    }
            $reply = new Reply();
            $reply->user_id = $id_user;
            $reply->msg_id = $id_message;
            $reply->content = $content_reply;
            $reply->from = $id_user;
            $reply->to = '1';
            $reply->save();

            return redirect()->back();
         }

public function sent(Request1 $request){
            $id_user = Auth::user()->id;
        
        $messages = DB::table('messages')->get();
        //dd($messages);
        $user = User::where('id', $id_user)->first();

        //$contacts =  Contact::all()->where('user_id','=',$id_user);
        //dd($contacts);
        return view('back.sent',array('id_user'=>$id_user,'messages'=>$messages),compact('user'));
}

public function showsent (Request1 $request,$user_id,$id){

        $id_user = Auth::user()->id;
        $subject = Message::where('id', $id)->value('subject');
        $content = Message::where('id', $id)->value('content');
        $created_at = Message::where('id', $id)->value('created_at');
  $replys = DB::table('reply')->where('msg_id','=',$id)->get();

        return view('back.show_sent_messages',array('user_id'=>$user_id,'id_message'=>$id,'replys'=>$replys,'subject'=>$subject,'content'=>$content,'created_at'=>$created_at));
}

}
