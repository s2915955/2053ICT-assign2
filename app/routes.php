<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('user', 'UserController');
Route::resource('job', 'JobController');
Route::resource('application', 'ApplicationController');
/*Route::get('/', function()
{
//	$jobs = Job::all();
//	$job = Job::find(1);
	$jobs = Job::where('salary', '>=', 45000)->get();

	foreach ($jobs as $job)
		var_dump($job->title);
//	print_r($job);
	exit();
});*/