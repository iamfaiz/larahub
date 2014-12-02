<?php

class StatusController extends \BaseController {

	/**
	 * Display a listing of statuses.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statuses = Status::ofUser(Auth::user()->id);
		foreach(User::getFollows(Auth::user()->id) as $followedUser)
		{
			if (sizeof(Status::ofUser($followedUser->followedId)) !== 0)
			{
				$statuses[] = Status::ofUser($followedUser->followedId)[0];
			}
		}
		return View::make('statuses.index')->with('statuses', $statuses);
	}

	/**
	 * Creates a new status
	 * @return Redirect to GET /statuses
	 */
	public function create()
	{
		// Get the authenticated user's id
		$userId = Auth::user()->id;
		// Create a new instance of status model
		$status = new Status();
		// Get the body input and set it equals to status' body
		$status->body = Input::get('body');
		// Set the status' user_id to the authenticated user's id
		$status->user_id = $userId;
		// Save the status to the database
		$status->save();
		// Redirect the user to their dashboard
		return Redirect::route('statuses');
	}

}
