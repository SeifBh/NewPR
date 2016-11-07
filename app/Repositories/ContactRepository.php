<?php namespace App\Repositories;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use Auth;
use App\Models\User;
use DB;
class ContactRepository extends BaseRepository {

	/**
	 * Create a new ContactRepository instance.
	 *
	 * @param  App\Models\Contact $contact
	 * @return void
	 */
	public function __construct(Contact $contact)
	{
		//dd('repository');
		$this->model = $contact;
	}

	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function index()
	{
		return $this->model
		//->oldest('seen')
		->orderBy('updated_at','desc')
		->get();
	}

	/**
	 * Store a contact.
	 *
	 * @param  array $inputs
	 * @return void
	 */
	public function store($inputs)
	{
		//dd('hello me');
		$contact = new $this->model;
		$id_user = Auth::user()->id;
		$contact->user_id = $id_user;
		$contact->admin_id = '1';
		$contact->role = 'EI';
		$contact->subject = $inputs['subject'];
		//dd($inputs['subject']);
		//$contact->avaible_number = $inputs['avaible_number'];
		$contact->content = $inputs['content'];

		//dd('before save');
		$contact->save();
	}

	/**
	 * Update a contact.
	 *
	 * @param  bool  $vu
	 * @param  int   $id
	 * @return void
	 */
	public function update($seen, $id)
	{
		$contact = $this->getById($id);

		$contact->seen = $seen == 'true';

		$contact->save();
	}

}