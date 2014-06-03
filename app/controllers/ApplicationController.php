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
		$input = Input::all();
		$v = Validator::make($input, Job::$rules);
		if ($v->passes())
		{
			$job = new Job();
			$job->title = $input['title'];
			$job->description = $input['description'];
			$job->location = $input['location'];
			$job->salary = $input['salary'];
			$job->start_date = $input['start_date'];
			$job->end_date = $input['end_date'];
			$job->user_id = 1;	//temporary
			$job->save();
			return Redirect::route('job.show', $job->id);
    } else {
			return Redirect::action('JobController@create')->withErrors($v);
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