<?php namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			/*'username' => 'required|max:30|unique:users',*/
			'first_name' => 'required|max:30',
			'last_name' => 'required|max:30',
			'title_user' => 'required',
			'app_ID' => 'required|max:60',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:8|confirmed',
						'g-recaptcha-response' => 'required',

		];
	}

}
