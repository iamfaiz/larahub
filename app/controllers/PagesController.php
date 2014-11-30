<?php

class PagesController extends \BaseController {
	/**
	 * Show the home page
	 * @return response
	 */
	public function home()
	{
		if (Auth::check())
		{
			return Redirect::route('statuses');
		}
		return View::make('pages.home');
	}
}
