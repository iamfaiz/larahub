<?php

class FollowsController extends \BaseController {

	/**
	 * Store a follow record
	 *
	 * @return Redirect
	 */
	public function store($userId)
	{
		if (User::find($userId))
		{
			Follow::followIfNotFollowed($userId);
			return Redirect::route('statuses');
		} else {
			return Redirect::route('statuses');
		}
	}

}
