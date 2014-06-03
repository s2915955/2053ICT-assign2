<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		if (!Auth::check()) return Redirect::route('job.index');
		return View::make('application.create');
	}


	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store()
	{
		if (!Auth::check()) return Redirect::route('job.index');
		$id = Auth::user()->id;
		$date = new dateTime('now');
		$input = Input::all();
		$v = Validator::make($input, Application::$rules);
		if ($v->passes())
		{
			$application = new Application();
			$application->user_id = $id;
			$application->job_id = '1';	//Could not fix
			$application->letter = $input['letter'];
			$application->application_date = $date;
			$application->save();
			return Redirect::route('job.index');
    } else {
			return Redirect::action('ApplicationController@create')->withErrors($v);
		}
  }


	/**
	 * Display the specified resource.
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}