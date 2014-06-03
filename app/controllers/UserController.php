<?php

class UserController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		$id = Auth::user()->id;
		$jobs = DB::table('jobs')->where('user_id', '=', $id)->get();
		return View::make('user.index', compact('jobs')); //alt: return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, User::$rules);
		if ($v->passes())
		{
			$user = new User();
			$user->email = $input['email'];
			$encrypted = Hash::make($input['password']);
			$user->password = $encrypted;
			$user->name = $input['name'];
			$user->category = $input['category'];
			$user->phone = $input['phone'];
			$user->photo = 1;	//Could not fix
			$user->industry = $input['industry'];
			$user->description = $input['description'];
			$user->remember_token = "default";
			$user->save();
			return Redirect::route('user.show', $user->id);
    } else {
			return Redirect::action('UserController@create')->withErrors($v);
		}
	}


	/**
	 * Display the specified resource.
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('user.show', compact('user')); //alt: return View::make('user.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 * @return Response
	 */
	public function edit($id)
	{
		if (!Auth::check()) return Redirect::route('job.index');
		$user = User::find($id);
    return View::make('user.edit', compact('user')); //alt: return View::make('user.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 * @return Response
	 */
	public function update($id)
	{
    if (!Auth::check()) return Redirect::route('job.index');
		$user = User::find($id);
    $input = Input::all();
		$v = Validator::make($input, User::$rules);
		if ($v->passes())
		{
			$user->email = $input['email'];
			$user->phone = $input['phone'];
			$user->photo = $input['photo'];
			$user->industry = $input['industry'];
			$user->description = $input['description'];
			$user->save();
			return Redirect::route('user.show', $user->id);
    } else {
			return Redirect::action('UserController@update')->withErrors($v);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Attempt to log in.
	 * @return Response
	 */
	public function login()
	{
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		);
		if (Auth::attempt($userdata))
		{
			return Redirect::action('UserController@index');
    } else {
			return Redirect::to(URL::previous())->withInput();
		}
	}


	/**
	 * Log out.
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::action('home');
	}

	function authenticate($email, $password)
	{
		return Auth::attempt(compact('email', 'password'));	//return Auth::attempt(array('email' => $email, 'password' => $password));
	}
}