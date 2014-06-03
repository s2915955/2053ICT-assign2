@extends('layout')
@section('title')
JobFind - Create an Account
@stop
@section('subheading')
Create an Account
@stop
@section('content')
	{{ Form::open(array('action' => 'UserController@store')) }}
	{{ Form::label('category', 'Account Type: ') }}
	{{ Form::select('category', array('0' => 'Job Seeker', '1' => 'Employer')) }}
	<p>
	{{ Form::label('email', 'Email Address: ') }}
	{{ Form::email('email') }}
	<p>
	{{ Form::label('password', 'Password: ') }}
	{{ Form::password('password') }}
	<p>
	{{ Form::label('name', 'Full Name: ') }}
	{{ Form::text('name') }}
	<p>
	{{ Form::label('phone', 'Phone Number: ') }}
	{{ Form::text('phone') }}
	<p>
	{{ Form::label('photo', 'Photo: ') }}
	{{ Form::file('photo') }}
	<p>
	{{ Form::label('industry', 'Industry: ') }}
	{{ Form::text('industry') }}
	<p>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
	<br>
	<div id="error">{{ $errors->first('email') }}</div>
	<div id="error">{{ $errors->first('password') }}</div>
	<div id="error">{{ $errors->first('name') }}</div>
	<div id="error">{{ $errors->first('phone') }}</div>
	<div id="error">{{ $errors->first('photo') }}</div>
	<div id="error">{{ $errors->first('description') }}</div>
	<br>
	{{ Form::submit('Create Account') }}
	{{ Form::close() }}
@stop