<?php

class StatusController extends \BaseController {

	/**
	 * Display a listing of statueses.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('statuses.index');
	}

}
