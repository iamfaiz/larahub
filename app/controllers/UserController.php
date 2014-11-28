<?php

class UserController extends \BaseController {
	public function getLogin()
	{
		return View::make('user.login');
	}
	public function postLogin()
	{
		if (Auth::attempt(Input::only('username', 'password')))
		{
			return Redirect::route('statuses');
		} else {
			return 'Authentication failed!';
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::home();
	}
}
