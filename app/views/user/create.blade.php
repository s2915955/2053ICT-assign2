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
	{{ Form::select('category', array('J' => 'Job Seeker', 'E' => 'Employer')) }}
	<p>
	{{ Form::label('email', 'Email Address: ') }}
	{{ Form::email('email') }}
	{{ $errors->first('email') }}
	<p>
	{{ Form::label('password', 'Password: ') }}
	{{ Form::password('password') }}
	{{ $errors->first('password') }}
	<p>
	{{ Form::label('name', 'Full Name: ') }}
	{{ Form::text('name') }}
	{{ $errors->first('name') }}
	<p>
	{{ Form::label('phone', 'Phone Number: ') }}
	{{ Form::text('phone') }}
	{{ $errors->first('phone') }}
	<p>
	{{ Form::label('industry', 'Industry: ') }}
	{{ Form::text('industry', 'For Employers only') }}
	{{ $errors->first('industry') }}
	<p>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
	{{ $errors->first('description') }}
	<p>
	{{ Form::submit('Create Account') }}
	{{ Form::close() }}
@stop