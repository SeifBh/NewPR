<?php

namespace App\Repositories;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

use App\Models\User, App\Models\Role;

class UserRepository extends BaseRepository
{

	/**
	 * The Role instance.
	 *
	 * @var App\Models\Role
	 */	
	protected $role;

	/**
	 * Create a new UserRepository instance.
	 *
   	 * @param  App\Models\User $user
	 * @param  App\Models\Role $role
	 * @return void
	 */
	public function __construct(
		User $user, 
		Role $role)
	{
		$this->model = $user;
		$this->role = $role;
	}

	/**
	 * Save the User.
	 *
	 * @param  App\Models\User $user
	 * @param  Array  $inputs
	 * @return void
	 */
  	private function save($user, $inputs)
	{		
		if(isset($inputs['seen'])) 
		{
			$user->seen = $inputs['seen'] == 'true';		
		} else {




			$first1 = $inputs['first_name'];
			$last1 = $inputs['last_name'];

			$newusername = $first1 .'.'. $last1 ;

$remove[] = "'";
$remove[] = "*";
$remove[] = " ";
$remove[] = '"';
$remove[] = "-"; // just as another example

$newusername = str_replace( $remove, "", $newusername );



if (User::where('username', '=', $newusername)->exists()) {
	$varend = rand(0, 20);
	$finalusername = $newusername . $varend;
	$user->username = $finalusername ;
}
else{
	$user->username = $newusername ;
}
			$user->title_user = $inputs['title_user'];
			$user->email = $inputs['email'];
			$user->app_ID = $inputs['app_ID'];
			$user->first_name = $inputs['first_name'];
			$user->last_name = $inputs['last_name'];

			if(isset($inputs['role'])) {
				$user->role_id = $inputs['role'];	
			} else {
				$role_user = $this->role->where('slug', 'user')->first();
				$user->role_id = $role_user->id;
			}
		}

		$user->save();


		$contact = new Contact();
		$contact->user_id = $user->id;
		$contact->admin_id = '1';
		$contact->role = 'admin';
		$contact->subject = 'Welcome to workwithTAG';
		$contact->content = ' <p>Welcome to workwithTAG. Thanks for downloading our UK 1st of it\'s kind Mobile App. </p> <p>In order to ensure you have a good basic knowledge of the rules, please complete the Questionnaire which can be located on the left hand navigation panel.</p> <p>Once you have updated your profile and completed the questionnaire, your application will be reviewed within 24 hours.</p> <p>Any questions, please don\'t hesitate to ask. </p>';
		$contact->seen = '0';
		$contact->save();


	Mail::send('emails.register',['name'=>'ADMIN'],function($message)
{
$message->to('belhadjali.seif@gmail.com' , '')->subject(trans('front/verify.new-user'));
//$message->to('alan@rbcbanksmart.co.uk' , '')->subject(trans('front/verify.new-user'));
});


	}

	/**
	 * Get users collection paginate.
	 *
	 * @param  int  $n
	 * @param  string  $role
	 * @return Illuminate\Support\Collection
	 */
	public function index($n, $role)
	{
		if($role != 'total')
		{
			return $this->model
			->with('role')
			->whereHas('role', function($q) use($role) {
				$q->whereSlug($role);
			})		
			->oldest('seen')
			->latest()
			->paginate($n);			
		}

		return $this->model
		->with('role')		
		->oldest('seen')
		->latest()
		->paginate($n);
	}

	/**
	 * Count the users.
	 *
	 * @param  string  $role
	 * @return int
	 */
	public function count($role = null)
	{
		if($role)
		{
			return $this->model
			->whereHas('role', function($q) use($role) {
				$q->whereSlug($role);
			})->count();			
		}

		return $this->model->count();
	}

	/**
	 * Count the users.
	 *
	 * @param  string  $role
	 * @return int
	 */
	public function counts()
	{
		$counts = [
			'admin' => $this->count('admin'),
			'redac' => $this->count('redac'),
			'user' => $this->count('user')
		];

		$counts['total'] = array_sum($counts);

		return $counts;
	}

	/**
	 * Create a user.
	 *
	 * @param  array  $inputs
	 * @param  int    $confirmation_code
	 * @return App\Models\User 
	 */
	public function store($inputs, $confirmation_code = null)
	{
		$user = new $this->model;

		$user->password = bcrypt($inputs['password']);

		if($confirmation_code) {
			$user->confirmation_code = $confirmation_code;
		} else {
			$user->confirmed = true;
		}

		$this->save($user, $inputs);

		return $user;
	}

	/**
	 * Update a user.
	 *
	 * @param  array  $inputs
	 * @param  App\Models\User $user
	 * @return void
	 */
	public function update($inputs, $user)
	{		
		$user->confirmed = isset($inputs['confirmed']);

		$this->save($user, $inputs);
	}

	/**
	 * Get statut of authenticated user.
	 *
	 * @return string
	 */
	public function getStatut()
	{
		return session('statut');
	}

	/**
	 * Valid user.
	 *
     * @param  bool  $valid
     * @param  int   $id
	 * @return void
	 */
	public function valid($valid, $id)
	{
		$user = $this->getById($id);

		$user->valid = $valid == 'true';

		$user->save();
	}

	/**
	 * Destroy a user.
	 *
	 * @param  App\Models\User $user
	 * @return void
	 */
	public function destroyUser(User $user)
	{
		$user->comments()->delete();
		
		$user->delete();
	}

	/**
	 * Confirm a user.
	 *
	 * @param  string  $confirmation_code
	 * @return App\Models\User
	 */
	public function confirm($confirmation_code)
	{
		$user = $this->model->whereConfirmationCode($confirmation_code)->firstOrFail();

		$user->confirmed = true;
		$user->confirmation_code = null;
		$user->save();
	}

}
