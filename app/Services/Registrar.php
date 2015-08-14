<?php namespace App\Services;

use App\User;
use Validator;
use Mail;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:50',
			'lastname' => 'required|max:50',
			'email' => 'required|email|max:50|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$confirmation_code = str_random(30);

		$data = array_add($data, 'conf',$confirmation_code);

//		Flash::message('Welcome ' .$data["name"]. '. Thanks for registering. We have sent you a validation link in your e-mail address!');
		Mail::send('emails.verify', $data, function($message) use ($data) {
			$message->to($data['email'], $data['name'])
				->subject('Verify your email address');
		});
		return User::create([
			'name' => $data['name'],
			'lastname' => $data['lastname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'confirmation_code' => $confirmation_code
		]);
	}

}
