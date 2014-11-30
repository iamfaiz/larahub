<?php

class UserController extends \BaseController {

	public function index()
	{
		$users = User::orderBy('id', 'desc')->get();
		return View::make('users.index')->with('users', $users);
	}

	public function show($id)
	{
		if (User::find($id))
		{
			$user = User::find($id);
			return View::make('users.show')->with('user', $user);
		} else {
			return Redirect::route('Users');
		}
	}

	public function getLogin()
	{
		return View::make('users.login');
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
