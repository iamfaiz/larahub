<?php namespace Larahub\Validations;

/**
* User Related Stuff here
*/
class RegisterValidation
{

	public function validate(array $data)
	{
		$validator = \Validator::make([
			'username' => $data['username'],
			'password' => $data['password'],
			'email'    => $data['email']
		], [
			"username" => 'required|min:5|unique:users',
			"email"    => 'required|email|min:5|unique:users',
			"password" => 'required|min:5',
		]);
		return $validator;
	}

}
