<?php

class PagesController extends \BaseController {
	/**
	 * Show the home page
	 * @return response
	 */
	public function home()
	{
		return View::make('pages.home');
	}
}
