<?php

class JobController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		$jobs = DB::table('jobs')->orderBy('created_at', 'DESC')->paginate(5);
		return View::make('job.index', compact('jobs')); //alt: return View::make('jobs.index')->with('jobs', $jobs);
	}


	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		if (!Auth::check())return Redirect::route('job.index');
		return View::make('job.create');
	}


	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store()
	{
		if (!Auth::check()) return Redirect::route('job.index');
		$id = Auth::user()->id;
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
			$job->user_id = $id;
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
		$job = Job::find($id);
		return View::make('job.show', compact('job', 'user')); //alt: return View::make('job.show')->with('job', $job);
	}


	/**
	 * Show the form for editing the specified resource.
	 * @return Response
	 */
	public function edit($id)
	{
		if (!Auth::check()) return Redirect::route('job.index');
		$job = Job::find($id);
    return View::make('job.edit', compact('job')); //alt: return View::make('job.edit')->with('job', $job);
	}


	/**
	 * Update the specified resource in storage.
	 * @return Response
	 */
	public function update($id)
	{

		if (!Auth::check()) return Redirect::route('job.index');
		$job = Job::find($id);
		$input = Input::all();
		$v = Validator::make($input, Job::$rules);
		if ($v->passes())
		{
			$job->title = $input['title'];
			$job->description = $input['description'];
			$job->location = $input['location'];
			$job->salary = $input['salary'];
			$job->start_date = $input['start_date'];
			$job->end_date = $input['end_date'];
			$job->save();
			return Redirect::route('job.show', $job->id);
    } else {
			return Redirect::action('JobController@edit')->withErrors($v);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 * @return Response
	 */
	public function destroy($id)
	{
		if (!Auth::check()) return Redirect::route('job.index');
		$job = Job::find($id);
    $job->delete();
    return Redirect::route('job.index');
	}


	/**
	 * Display the specified resource.
	 * @return Response
	 */
	public function search()
	{
		$input= Input::all();
		$search_terms = explode(' ', implode($input));
		$jobs = DB::table('jobs');
		foreach($search_terms as $search)
		{
			$jobs->where('title', 'LIKE', '%' . $search . '%');
		}
		$results = $jobs->get();
//		$results = DB::table('jobs')->join('users', 'user_id', '=', 'users.id')->select('title', 'jobs.description', 'location')->get($input);
//    if(isset($results-$jobs))
    return View::make('job.search', compact('jobs'));
	}
}