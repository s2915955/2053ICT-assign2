<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = Job::all();
		return View::make('user.index', compact('users')); //alt: return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, User::$rules);
		if ($v->passes())
		{
			$input = Input::all();
			$encrypted = Hash::make($input['password']);
			$user = new User();
			$user->email = $input['email'];
			$user->password = $encrypted;
			$user->name = $input['name'];
			$user->category = "employer";	//temporary
			$user->phone = $input['phone'];
			$user->photo = 1;	//temporary
			$user->industry = $input['industry'];
			$user->description = $input['description'];
			$user->remember_token = "default";
			$user->save();
			return Redirect::action('JobController@index');
    } else {
			return Redirect::action('UserController@create')->withErrors($v);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if ( Auth::check()) return Redirect::route('user.index');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if ( Auth::check()) return Redirect::route('user.index');
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
  
	public function login()
	{
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		);
		if (Auth::attempt($userdata))
		{
			return Redirect::to(URL::previous());
    } else {
			return Redirect::to(URL::previous())->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('JobController@index');
	}

	function authenticate($email, $password)
	{
		return Auth::attempt(array('email' => $email, 'password' => $password));
	}

}