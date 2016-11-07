<?php namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Request  as Request2;
use Illuminate\Support\Facades\Request  as Request88;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request as Request3;;
use DB;
use Auth;

use Session;

use Illuminate\Support\Facades\Request as Request1;

use App\Models\Question;
use App\Models\History;
use Request as Request4;
use Input;

class UserController extends Controller {

	/**
	 * The UserRepository instance.
	 *
	 * @var App\Repositories\UserRepository
	 */
	protected $user_gestion;

	/**
	 * The RoleRepository instance.
	 *
	 * @var App\Repositories\RoleRepository
	 */	
	protected $role_gestion;

	/**
	 * Create a new UserController instance.
	 *
	 * @param  App\Repositories\UserRepository $user_gestion
	 * @param  App\Repositories\RoleRepository $role_gestion
	 * @return void
	 */
	public function __construct(
		UserRepository $user_gestion,
		RoleRepository $role_gestion)
	{
		$this->user_gestion = $user_gestion;
		$this->role_gestion = $role_gestion;

		// $this->middleware('admin');
		$this->middleware('ajax', ['only' => 'updateSeen']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->indexSort('total');
	}


public function profile($username)
{


    $user = User::where('username', $username)->first();

    if($user === null){
    	return 'user dosent exist';
    }

    else{
    	    $user = User::where('username', $username)->first();

if (Auth::check()){
    	if($user->id == Auth::User()->id)
    	{
    		return view('front.EI.profile',compact('user'));
    	}
    	else{
    		return 'Not me';
    	}	
}
else{
	return $user->username ;
}

    }
}

	/**
	 * Display a listing of the resource.
	 *
     * @param  string  $role
	 * @return Response
	 */



public function dashboard($username){
		    $user = User::where('username', $username)->first();
			$id_user = Auth::user()->id;
				//return $id;


		$messages = DB::table('contacts')->where('user_id','=',$id_user)
										 
										 ->orderBy('updated_at', 'desc')->get();


	return view::make('front.dashboard',array('user'=>$user,'id_user'=>$id_user,'messages'=>$messages),compact('user'));

}
	public function indexSort($role)
	{
		$counts = $this->user_gestion->counts();
		$users = $this->user_gestion->index(4, $role); 
		$links = $users->render();
		$roles = $this->role_gestion->all();

		return view('back.users.index', compact('users', 'links', 'counts', 'roles'));		
	}
public function updateAccount(Request1 $request , Request3 $request3)
{
$user = Auth::user();

$id_user = Auth::user()->id ;
	    $user2 = User::where('id', $id_user)->first();
$username_user = User::where('id',$id_user)->value('username');
$userxx ='/@' . $username_user;
  $user->title_user = Request1::input('title_user');
  $user->first_name = Request1::input('firstname');
  $user->last_name = Request1::input('lastname');
  $user->middle_name = Request1::input('middlename');
  //$user->date_birth = Request1::input('date');
  $user->seen_other_names = Request1::input('previsouly');
  $user->yes_state = Request1::input('state');
  $user->country_born = Request1::input('born');
  $user->how_long_resident = Request1::input('resident');



  $user->house_name = Request1::input('housename');
  $user->street_road_name = Request1::input('street');
  $user->house_flat_number = Request1::input('flatNumber');
  $user->adress2 = Request1::input('adress2');
  $user->town = Request1::input('town');
  $user->city = Request1::input('city');
  $user->country = Request1::input('country');
  $user->post_code = Request1::input('postcode');



  $user->matrials_status = Request1::input('MatrialStatus');
  $user->current_employement_status = Request1::input('currentStatus');
  $user->occupation = Request1::input('occupation');
  $user->long_worked_employer = Request1::input('worked');
  $user->supporting_statment = Request1::input('bio');


  $user->date_day = Request1::input('date_day');
  $user->date_month = Request1::input('date_month');
  $user->date_year = Request1::input('date_year');



 $user->refer = Request1::input('cmc');
  $user->cmc_name = Request1::input('cmcname');
  $user->street_road_name2 = Request1::input('street2');
  $user->adress2_2 = Request1::input('adress22');
  $user->town2 = Request1::input('town2');
  $user->city2 = Request1::input('city2');
  $user->country2 = Request1::input('country2');
  $user->post_code2 = Request1::input('postcode2');

  $user->auth_number = Request1::input('authnumber');
  $user->under_formal_contract = Request1::input('under_formal');

  
  $user->hm_prospects1 = Request1::input('hm_prospects1');
  $user->hm_prospects2 = Request1::input('hm_prospects2');
  $user->hm_prospects3 = Request1::input('hm_prospects3');


  $user->home_number = Request1::input('home_number');
  $user->mobile_number = Request1::input('mobile_number');



  //$user->supporting_statment = Request1::input('start_periode');






  $user->save();




  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  //dd($validator);


  // getting all of the post data
  $file2 = array('image2' => Input::file('image2'));
  // setting up rules
  $rules2 = array('image2' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator2 = Validator::make($file, $rules);
  //dd($validator);
  if (($validator2->fails()) || ($validator->fails()) ) {

return redirect($userxx);
//return view('front.EI.profile',array('user'=>$user2));

  }

     if ($request3->hasFile('image')) {

      $destinationPath = 'images'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension;
            $user->path_CIN = $fileName ;
       $user->save();

       // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
    }
    else
    {
    	dd('ERROR 1');
    }




  if ($request3->hasFile('image2')) {

    
      $destinationPath = 'images'; // upload path
      $extension = Input::file('image2')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension;
            $user->path_passeport = $fileName ;
       $user->save();

       // renameing image
      Input::file('image2')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
    }
        else {
      // sending back with error message.
    	dd('ERROR 2');
    }




      Session::flash('flash_message', 'User successfully updated!');

return redirect($userxx);


}

public function uploadfileprofile(Request1 $request , Request3 $request3)
{
	$user = Auth::user();

  // getting all of the post data
  $file = array('files' => Input::file('files'));
  // setting up rules
  $rules = array('files' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  //dd($validator);
  if ($validator->fails()) {

    dd('you should add thumbnail IMG 1');
  }

    
    else{
        if (Input::file('files')->isValid()) {
      $destinationPath = 'images'; // upload path
      $extension = Input::file('files')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension;
            $user->path_picture = $fileName ;
       $user->save();

       // renameing image
      Input::file('files')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
    }
        else {
      // sending back with error message.
    dd('you should add thumbnail IMG 2');
    }
}
  return redirect()->back();

}

public function setQuestion(Request1 $request){
        $data = Input::all();
	$idquestion =  Request1::input('idquestion');

if(Request2::ajax())
        {
	$newvar =  Request1::input('idquestion');
	
	$user = Auth::user();
	$history = new History();
	$user_id = Auth::user()->id;
	$history->user_id = $user_id;
	  $history->question_id = $idquestion;

	$history->user_resulat = 'Romdhankom mabrouk';

  $history->save();
        }
        else{
        	dd('I am not ajax request');
        }




}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */




public function protest($username){
	    $user = User::where('username', $username)->first();

	return view::make('front.EI.Complete_profile',compact('user'));
}


	public function create()
	{
		return view('back.users.create', $this->role_gestion->getAllSelect());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\requests\UserCreateRequest $request
	 *
	 * @return Response
	 */
	public function store(
		UserCreateRequest $request)
	{
		$this->user_gestion->store($request->all());

		return redirect('user')->with('ok', trans('back/users.created'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  App\Models\User
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('back.users.show',  compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  App\Models\User
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('back.users.edit', array_merge(compact('user'), $this->role_gestion->getAllSelect()));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  App\requests\UserUpdateRequest $request
	 * @param  App\Models\User
	 * @return Response
	 */
	public function update(
		UserUpdateRequest $request,
		User $user)
	{
		$this->user_gestion->update($request->all(), $user);

		return redirect('user')->with('ok', trans('back/users.updated'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Illuminate\Http\Request $request
	 * @param  App\Models\User $user
	 * @return Response
	 */
	public function updateSeen(
		Request $request, 
		User $user)
	{
		$this->user_gestion->update($request->all(), $user);

		return response()->json();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  App\Models\user $user
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$this->user_gestion->destroyUser($user);

		return redirect('user')->with('ok', trans('back/users.destroyed'));
	}

	/**
	 * Display the roles form
	 *
	 * @return Response
	 */
	public function getRoles()
	{
		$roles = $this->role_gestion->all();

		return view('back.users.roles', compact('roles'));
	}

	/**
	 * Update roles
	 *
	 * @param  App\requests\RoleRequest $request
	 * @return Response
	 */
	public function postRoles(RoleRequest $request)
	{
		$this->role_gestion->update($request->except('_token'));
		
		return redirect('user/roles')->with('ok', trans('back/roles.ok'));
	}

}
