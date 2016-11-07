<?php namespace App\Http\Requests;

class UserCreateRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|max:30|unique:users',
			'app_ID' => 'required|max:60',
			'middle_name' => 'required|max:60',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed|min:8'
		];
	}

}