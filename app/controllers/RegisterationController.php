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
		User::create(
			Input::only('username', 'email', 'password')
		);
		return Redirect::home();
	}

}
