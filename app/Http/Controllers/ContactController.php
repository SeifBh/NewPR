<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;
use App\Models\User;
use App\Models\Reply;
use App\Models\Contact;
use Session;
use Auth;
use Illuminate\Support\Facades\Request as Request1;
use Illuminate\Support\Facades\Mail;

use DB;
class ContactController extends Controller {

	/**
	 * Create a new ContactController instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('admin', ['except' => ['create', 'store']]);
		$this->middleware('ajax', ['only' => 'update']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param  ContactRepository $contact_gestion
	 * @return Response
	 */


public function  nameme(){

}
	public function getContactMessageContentWithoutReply(Request $request,$user_id,$msg_id){

				$contact = Contact::find($msg_id);
		//dd($msg_id);
		$contact->seen ='1';
		$contact->save();

		    $username = DB::table('users')->where('id','=',$user_id)->value('username');
  			$replys = DB::table('reply')->where('msg_id','=',$msg_id)->where('user_id','=',$user_id)->get();

  			$user_check = DB::table('contacts')->where('id','=',$msg_id)->value('path_file3');

		    $subject = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('subject');
		    $content = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('content');
		    $created_at = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('created_at');
		   
		   return view('back.messages.content_without_reply',array('user_check'=>$user_check,'username'=>$username,'replys'=>$replys,'msg_id'=>$msg_id,'user_id'=>$user_id,'subject'=>$subject,'content'=>$content,'created_at'=>$created_at));

	}

	public function getContactMessageContent(Request $request,$user_id,$msg_id,$id_last_reply)
	{
		//user_id
		//msg_id

		$contact = Contact::find($msg_id);
		//dd($msg_id);
		$contact->seen ='1';
		$contact->save();

		$reply = Reply::find($id_last_reply);
		//dd($id_last_reply);
		$reply->seen = '1';

		$reply->save();

  			$replys = DB::table('reply')->where('msg_id','=',$msg_id)->where('user_id','=',$user_id)->get();

		$last_reply = DB::table('reply')->where('user_id','=',$user_id)
										->where('msg_id','=',$msg_id)
										->where('status','=','admin')
										->orderBy('created_at','desc')

										->value('seen');
  			
		    $username = DB::table('users')->where('id','=',$user_id)->value('username');

		    $subject = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('subject');
		    $content = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('content');
		    $created_at = DB::table('contacts')->where('user_id','=',$user_id)->where('id','=',$msg_id)->value('created_at');
		    return view('back.messages.content',array('username'=>$username,'replys'=>$replys,'msg_id'=>$msg_id,'user_id'=>$user_id,'subject'=>$subject,'content'=>$content,'created_at'=>$created_at));
	}



	public function ReplyAdminToUser(Request1 $request)
	{

		    $msg_id = Request1::input('msg_id');
        	$user_id = Request1::input('user_id');
        	$id_admin = Request1::input('id_admin');
        	$content_reply = Request1::input('content_reply');


    		$contact = Contact::findOrFail($msg_id);
    		//dd($id_message);
    		$contact->updated_at = \Carbon\Carbon::now();
    		$contact->save();


            $reply = new Reply();
            $reply->user_id = $user_id;
            $reply->admin_id = '1' ;
            $reply->msg_id = $msg_id;
            $reply->content = $content_reply;
            $reply->status = 'admin';

           // $reply->s1 = 'admin';
            $reply->save();
         	 //return 'you are here 2';


        	 return redirect()->back();


	}


	
public function indexMultipleMessage(Request1 $request)
{
	$users = DB::table('users')->where('role_id','=','3')->get();



	return view('back.messageme.multiple',array('users'=>$users));
}








public function multiplemsg(Request1 $request)
{
	$users = DB::table('users')->where('role_id','=','3')->get();

	foreach ($users as $user)
	{
		$subject_message = Request1::input('subject_message');
        $content_message = Request1::input('content_message');



		$sqlInsert = array('user_id'=>$user->id,'admin_id'=>'1', 'subject'=>$subject_message, 'content'=>$content_message ,'role'=>'admin','created_at'=>  \Carbon\Carbon::now() , 'updated_at'=>  \Carbon\Carbon::now() 
);
		DB::table('contacts')->insert($sqlInsert);


        	Mail::send('emails.message',['name'=>'SAFEmed'],function($message) use($user)
{




$message->to($user->email , '')->subject(trans('front/verify.new-messsage'));
});



		}



	return view('back.messageme.multiple',array('users'=>$users));
}


    public function ReplyUserToAdmin(Request $request){
        $id_user = Auth::user()->id;
        $id_message = Request1::input('id_message');
        $id_admin = Request1::input('id_admin');
        $content_reply = Request1::input('content_reply');

//$xtt = DB::table('reply')->where('user_id','=',$id_user)->where('s1','=','admin')->where('msg_id','=',$id_message)->count() > 0;

  /*  if($xtt == false){
       // dd('dosent exist');

    }
    else{
      //  dd('Exist');
    }*/


    		$contact = Contact::findOrFail($id_message);
    		//dd($id_message);
    		$contact->updated_at = \Carbon\Carbon::now();
    		$contact->save();


            $reply = new Reply();
            $reply->user_id = $id_user;
            $reply->admin_id = '1';
            $reply->msg_id = $id_message;
            $reply->content = $content_reply;
            $reply->from = $id_user;
            $reply->to = '1';
            $reply->status = 'EI';

            $reply->save();

        	Mail::send('emails.message',['name'=>'SAFEmed'],function($message)
{

$message->to('belhadjali.seif@gmail.com' , '')->subject(trans('front/verify.new-reply'));
});


            return redirect()->back();
         }

 public function archive_index(Request $request)
{	
			$messages = DB::table('contacts')->where('path_file4','=','archived')->get();
		return view('back.messages.archiveadmin', compact('messages'));

}


 public function Archive_to_publish_admin(Request $request , $msg_idx2)
{	
    				$con1 = Contact::find($msg_idx2);
    				$con1->path_file4 ='';
    				$con1->save();
    				return redirect()->back();

}



	public function index(Request $request, ContactRepository $contact_gestion)
	{
		


		//dd($id_last_reply);
/*
All users where user-message-content == vide;



*/


				//$udms = DB::table('contacts')->where('content','!=','')->orderBy('created_at', 'desc')->get();

		$messages = DB::table('contacts')->where('path_file4','!=','archived')->orderBy('updated_at', 'desc')->get();

		return view('back.messages.index', compact('messages'));
	}


public function getAllUser_Contact(Request1 $request)
{
	    	$users = User::all();
    	return view('back.messageme.index',compact('users'));

}

    public function create_message(Request $request,$user_id)
    {
    			$username = DB::table('users')->where('id','=',$user_id)->value('username');
				$url = config('medias.url') . '?langCode=' . config('app.locale');

    	//$user_id =  Request1::input('user_id');
        return view('back.messageme.create',array('url'=>$url,'user_id'=>$user_id,'username'=>$username));

    }

    public function store_message(Request $request)
    {
        $user_id2 = Request1::input('user_id');
        $content = Request1::input('content');
        $subject = Request1::input('subject');
        $messages = new Contact();
        $messages->user_id = $user_id2;
        $messages->admin_id = '1';
        $messages->content = $content;
        $messages->role = 'admin';
        $messages->subject = $subject;

        $messages->save();


        	Mail::send('emails.test',['name'=>'SAFEmed'],function($message)
{

        $user_id2 = Request1::input('user_id');

			$user_email = DB::table('users')->where('id','=',$user_id2)->value('email');


$message->to($user_email , '')->subject(trans('front/verify.email-title'));
});


				//$url = config('medias.url') . '?langCode=' . config('app.locale');
		return redirect()->back();
    	//$user_id =  Request1::input('user_id');
       // return view('back.messageme.create',array('url'=>$url,'user_id'=>$user_id,'username'=>$username));

    }


public function IndexArchived (Request $request,$username)
{
		$id_user = Auth::user()->id;
		$url = config('medias.url') . '?langCode=' . config('app.locale');
		$user = User::where('username', $username)->first();


				$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 ->where('status','=','archived')
										 ->orderBy('updated_at', 'desc')->get();


			return view('front.messages.archive',compact('user'),array('username'=>$username,'id_user'=>$id_user,'messages'=>$messages,'url'=>$url), compact('url'));
}










	public function IndexFrontMessageLOAD(Request $request,$username){
		$id_user = Auth::user()->id;
		$url = config('medias.url') . '?langCode=' . config('app.locale');
		$user = User::where('username', $username)->first();


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 ->where('status','<>','archived')
										 ->orderBy('updated_at', 'desc')->get();



//last reply


		return view('front.messages.CMM',compact('user'),array('user'=>$user,'username'=>$username,'id_user'=>$id_user,'messages'=>$messages,'url'=>$url), compact('url'));
		//let you see all message received from the administrator


/*
		$replys = DB::table('reply')->where('user_id','=',$id_user)
										 ->where('s1','=','admin')
										 ->orderBy('created_at', 'desc')->get();
*/

/*
$xtt = DB::table('reply')->where('user_id','=',$id_user)
																		->where('s1','=','admin')
																		->where('msg_id','=',$contact->id)
																		->count() > 0

*/


	}







	public function IndexFrontMessage(Request $request,$username){
		$id_user = Auth::user()->id;
		$url = config('medias.url') . '?langCode=' . config('app.locale');
		$user = User::where('username', $username)->first();


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 ->where('status','<>','archived')
										 ->orderBy('updated_at', 'desc')->get();



//last reply


		return view('front.messages.index',compact('user'),array('user'=>$user,'username'=>$username,'id_user'=>$id_user,'messages'=>$messages,'url'=>$url), compact('url'));
		//let you see all message received from the administrator


/*
		$replys = DB::table('reply')->where('user_id','=',$id_user)
										 ->where('s1','=','admin')
										 ->orderBy('created_at', 'desc')->get();
*/

/*
$xtt = DB::table('reply')->where('user_id','=',$id_user)
																		->where('s1','=','admin')
																		->where('msg_id','=',$contact->id)
																		->count() > 0

*/


	}

public function archive_user(Request1 $request )
{
	
                $id_message = Request1::input('id_messageme');
              $message = Contact::find($id_message);
              $message->status = "archived";
              $message->save();
			return redirect()->back();


        
}

public function hamham(Request1 $request)
{
	                $id_message = Request1::input('id_messageme');

return $id_message;


        
}


public function publish_user(Request1 $request )
{
	
                $id_message = Request1::input('id_messageme');
              $message = Contact::find($id_message);
              $message->status = "";
              $message->save();
			return redirect()->back();


        
}


public function Archive_admin(Request $request,$msg_idx)
{
    				$con1 = Contact::find($msg_idx);
    				$con1->path_file4 ='archived';
    				$con1->save();
    				return redirect()->back();



}

public function InboxWithoutReply(Request $request ,$username, $id)

{


			$id_user = Auth::user()->id;
				//return $id;


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 
										 ->orderBy('updated_at', 'desc')->get();





				$url = config('medias.url') . '?langCode=' . config('app.locale');



		$user = User::where('username', $username)->first();
		   // return $last_reply;
        $id_message = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('id');

    	$contact = Contact::findOrFail($id_message);
    		//dd($id_message);
    	$contact->seen = '1';
    	//$contact->updated_at = \Carbon\Carbon::now();
    	$contact->save();


        $subject = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('subject');
		$content = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('content');
		$status = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('status');
		$created_at = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('created_at');

  $replys = DB::table('reply')->where('msg_id','=',$id_message)->where('user_id','=',$id_user)->get();


		return view('front.messages.inbox',array('id_user'=>$id_user,'messages'=>$messages,'url'=>$url,'replys'=>$replys,'id_message'=>$id_message,'subject'=>$subject,'content'=>$content,'status'=>$status,'created_at'=>$created_at),compact('user'));



}

public function testthisfun(Request $request,$username,$id){

			$id_user = Auth::user()->id;
				//return $id;

				$url = config('medias.url') . '?langCode=' . config('app.locale');


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 
										 ->orderBy('updated_at', 'desc')->get();





		$user = User::where('username', $username)->first();
        $id_message = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('id');

/*    		$contact = Contact::findOrFail($id_message);
    		//dd($id_message);
    		$contact->updated_at = \Carbon\Carbon::now();
    		$contact->save();

*/
        $subject = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('subject');
		$content = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('content');
		$status = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('status');
		$created_at = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('created_at');





	        $ldme = DB::table('reply')->where('user_id','=',$id_user)
                                        ->where('msg_id','=',$id_message)
                                        ->where('status','=','admin')
                                        ->orderBy('id','desc')
                                        ->value('id');

	        $newvarme = DB::table('reply')->where('user_id','=',$id_user)
                                        ->where('msg_id','=',$id_message)
                                        ->where('status','=','admin')
                                        ->orderBy('id','desc')
                                        ->value('id');
                                          $replys = DB::table('reply')->where('msg_id','=',$id_message)->where('user_id','=',$id_user)->get();

DB::table('reply')
            ->where('msg_id', $id_message)
            ->update(['seen' => 1]);

		return view('front.messages.RRC',array('ldme'=>$ldme,'id_user'=>$id_user,'messages'=>$messages,'url'=>$url,'replys'=>$replys,'id_message'=>$id_message,'subject'=>$subject,'content'=>$content,'status'=>$status,'created_at'=>$created_at),compact('user'));

}
    public function Inbox_LoadReply(Request $request,$username,$id,$last_reply){
		$id_user = Auth::user()->id;
				//return $id;

				$url = config('medias.url') . '?langCode=' . config('app.locale');


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 
										 ->orderBy('updated_at', 'desc')->get();



    				$reply = Reply::find($last_reply);
		//dd($last_reply);
		$reply->seen = '1';

		$reply->save();

		$user = User::where('username', $username)->first();
		   // return $last_reply;
        $id_message = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('id');

    	/*	$contact = Contact::findOrFail($id_message);
    		//dd($id_message);
    		$contact->updated_at = \Carbon\Carbon::now();
    		$contact->save();

*/
        $subject = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('subject');
		$content = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('content');
		$status = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('status');
		$created_at = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('created_at');







	        $ldme = DB::table('reply')->where('user_id','=',$id_user)
                                        ->where('msg_id','=',$id_message)
                                        ->where('status','=','admin')
                                        ->orderBy('id','desc')
                                        ->value('id');


  $replys = DB::table('reply')->where('msg_id','=',$id_message)->where('user_id','=',$id_user)->get();


DB::table('reply')
            ->where('msg_id', $id_message)
            ->update(['seen' => 1]);



//dd($messages);
		return view('front.messages.RRC',array('ldme'=>$ldme,'id_user'=>$id_user,'messages'=>$messages,'url'=>$url,'replys'=>$replys,'id_message'=>$id_message,'subject'=>$subject,'content'=>$content,'status'=>$status,'created_at'=>$created_at),compact('user'));



    }



    public function Inbox(Request $request,$username,$id,$last_reply){
		$id_user = Auth::user()->id;
				//return $id;

				$url = config('medias.url') . '?langCode=' . config('app.locale');


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 
										 ->orderBy('updated_at', 'desc')->get();




    				$reply = Reply::find($last_reply);
		//dd($last_reply);
		$reply->seen = '1';

		$reply->save();

		$user = User::where('username', $username)->first();
		   // return $last_reply;
        $id_message = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('id');

  /*  		$contact = Contact::findOrFail($id_message);
    		//dd($id_message);
    		dd('hello worlds');
    		$contact->path_file4 = \Carbon\Carbon::now();
    		$contact->save();

*/
        $subject = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('subject');
		$content = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('content');
		$status = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('status');
		$created_at = DB::table('contacts')->where('id','=',$id)->where('user_id','=',$id_user)->value('created_at');

  $replys = DB::table('reply')->where('msg_id','=',$id_message)->where('user_id','=',$id_user)->get();






//dd($messages);
		return view('front.messages.inbox',array('id_user'=>$id_user,'messages'=>$messages,'url'=>$url,'replys'=>$replys,'id_message'=>$id_message,'subject'=>$subject,'content'=>$content,'status'=>$status,'created_at'=>$created_at),compact('user'));


    }







	public function IndexSentMessages(Request $request,$username){
		$id_user = Auth::user()->id;
		$user = User::where('username', $username)->first();
        $contacts = DB::table('contacts')->where('user_id','=',$id_user)

        								 ->where('role','=','EI')->get();
				$url = config('medias.url') . '?langCode=' . config('app.locale');

		//$contacts =  Contact::all()->where('user_id','=',$id_user);
		//dd($contacts);
		return view('front.messages.sent.index',array('url'=>$url,'id_user'=>$id_user,'contacts'=>$contacts),compact('user'));
	}

	public function ShowsentMessages(Request $request,$username,$id)
	{
				$id_user = Auth::user()->id;
				$url = config('medias.url') . '?langCode=' . config('app.locale');

		$user = User::where('username', $username)->first();

		$subject = Contact::where('id', $id)->value('subject');
		$content = Contact::where('id', $id)->value('content');
		$created_at = Contact::where('id', $id)->value('created_at');


		  			$replys = DB::table('reply')->where('msg_id','=',$id)->where('user_id','=',$id_user)->get();



		return view('front.messages.sent.show_sent_messages',array('url'=>$url,'id_message'=>$id,'replys'=>$replys,'subject'=>$subject,'content'=>$content,'created_at'=>$created_at),compact('user'));

		//return $id;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}



	public function GuestContact()
	{
		return view('front.contact');
	}


	public function GuestContact_Execution(Request1 $request)
	{
				    $subject = Request1::input('subject');
				    $name = Request1::input('name');
				    $landline_number = Request1::input('landline_number');
				    $mobile_number = Request1::input('mobile_number');
				    $email_adr = Request1::input('email_adr');
				    $msg_content = Request1::input('msg_content');

				    $con = new Contact();
				    $con->user_id="1";
				    $con->admin_id="1";
				    $con->subject = $subject;
				    $con->seen = 0;
				    $con->user_full_name = $name;
				    $con->avaible_number = $landline_number;
				    $con->path_file2 = $mobile_number;
				    $con->path_file3 = 'not';
				    $con->text = $email_adr;
				    $con->content = $msg_content;
				    $con->save();
				    	Session::flash('contact_anno', 'Message guest sent succefully!');

			return redirect()->back();

	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  ContactRequest $request
	 * @return Response
	 */
	public function store(
		ContactRepository $contact_gestion,
		ContactRequest $request)
	{
		//dd('hello');
			//	dd('contact');

		$contact_gestion->store($request->all());
		//dd('after store');
	Session::flash('message_sent', 'Successfully sent!');
			return redirect()->back();

		       // return Redirect::route('/contact');
		 //return redirect('/')->back();

		//return redirect('/')->with('ok', trans('front/contact.ok'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  Illuminate\Http\Request $request
	 * @param  int  $id
	 * @return Response
	 */
	/*
	public function update(
		ContactRepository $contact_gestion,
		Request $request, 		 
		$id)
	{
		$contact_gestion->update($request->input('seen'), $id);

		return response()->json(['statut' => 'ok']);
	}
*/
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(
		ContactRepository $contact_gestion, 
		$id)
	{
		$contact_gestion->destroy($id);
		
		return redirect('contact');
	}

}
