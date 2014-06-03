<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$jobs = DB::table('jobs')->orderBy('created_at', 'DESC')->paginate(10);
		return View::make('index', compact('jobs')); //alt: return View::make('index')->with('jobs', $jobs);
	}

	public function doc()
	{
		return View::make('doc');
	}
}
