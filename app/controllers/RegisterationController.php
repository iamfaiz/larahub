<?php

class RegisterationController extends \BaseController {

	/**
	 * Show the registeration form.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registeration.create');
	}

	/**
	 * Stores a new user
	 * @return Redirect::to
	 */
	public function store()
	{
		$validator = Validator::make(Input::only('username', 'email', 'password'), [
			"username" => 'required|min:5|unique:users',
			"email"    => 'required|email|min:5|unique:users',
			"password" => 'required|min:5',
		]);

		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::route('Register')->with('messages', $messages);
		} else {
			User::create([
				'username' => Input::get('username'),
				'password' => Hash::make(Input::get('password')),
				'email'    => Input::get('email')
			]);
			return Redirect::home();
		}
	}

}
