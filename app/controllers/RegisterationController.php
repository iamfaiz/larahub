<?php
use Larahub\Users\UserRepository;
use Larahub\Validations\RegisterValidation;
class RegisterationController extends \BaseController {

	/**
	 * User Repository instance
	 * @var Object
	 */
	protected $userRepository;

	public function __construct(UserRepository $userRepository, RegisterValidation $registerValidation)
	{
		$this->userRepository 		= $userRepository;
		$this->registerValidation 	= $registerValidation;
	}

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
		$validator = $this->registerValidation->validate(Input::only('username', 'email', 'password'));
		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::route('Register')->with('messages', $messages);
		} else {
			$this->userRepository->register(Input::only('username', 'email', 'password'));
			return Redirect::home();
		}
	}

}
