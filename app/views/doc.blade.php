@extends('layout')
@section('title')
JobFind - About this Application
@stop
@section('content')
	<h1>About this Application</h1>
	<b>Created by:</b>		Eddie Benavides<br>
	<b>Student ID:</b>		s2915955<br>
	<b>Date Created:</b>	2014-05-28<br>
	<h2>Database Design</h2>
	<h3>Users Table</h3>
	Schema::create('users', function($table)<br>
	{<br>
		$table->increments('id');<br>
		$table->string('email')->unique();<br>
		$table->string('password')->index();<br>
		$table->string('remember_token');<br>
		$table->string('name');<br>
		$table->integer('category');<br>
		$table->string('phone');<br>
		$table->binary('photo');<br>
		$table->string('industry');<br>
		$table->string('description');<br>
		$table->timestamps();<br>
	});<br>
	<h3>Jobs Table</h3>
	Schema::create('jobs', function($table)<br>
	{<br>
		$table->increments('id');<br>
		$table->string('title');<br>
		$table->text('description');<br>
		$table->string('location');<br>
		$table->integer('salary');<br>
		$table->date('start_date');<br>
		$table->date('end_date');<br>
		$table->integer('user_id');<br>
		$table->foreign('user_id')->references('id')->on('users');<br>
		$table->timestamps();<br>
	});<br>
	<h3>Applications Table</h3>
	Schema::create('applications', function($table)<br>
	{<br>
		$table->increments('id');<br>
		$table->integer('user_id');<br>
		$table->foreign('user_id')->references('id')->on('users');<br>
		$table->integer('job_id');<br>
		$table->foreign('job_id')->references('id')->on('jobs');<br>
		$table->text('letter');<br>
		$table->date('application_date');<br>
		$table->timestamps();<br>
	});<br>
	<h2>Application Use</h2>
	<b>User home page link:</b>				 public/<br>
	<b>Employer home page link:</b>		 public/user
	<h2>Application Issues</h2>
	<ul>
    <li>Job search is broken.</li>
    <li>Any date related functionality is not working (ie. showing time left to apply or hiding expired jobs).</li>
    <li>Could not get image support to function. Newly created users have a default value passed to the photo field.</li>
    <li>Could not pass the $job->id to the job application form. As a result, the job application functionality is not working.</li>
	</ul>
@stop