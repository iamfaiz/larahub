<?php namespace Larahub\Users;

/**
* User Related Stuff here
*/
class UserRepository
{

	public function register(array $data)
	{
		\User::create([
			'username' => $data['username'],
			'password' => \Hash::make($data['password']),
			'email'    => $data['email']
		]);
	}

}
