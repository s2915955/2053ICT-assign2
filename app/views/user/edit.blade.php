@extends('layout')
@section('title')
JobFind - Update Account Information
@stop
@section('subheading')
Update Account Information
@stop
@section('content')
	{{ Form::model($user, array('method'=>'PATCH', 'route' => array('user.update', $user->id))) }}
	{{ Form::label('email', 'Email Address: ') }}
	{{ Form::text('email') }}
	<p>
	{{ Form::label('phone', 'Phone Number: ') }}
	{{ Form::text('phone') }}
	<p>
	{{ Form::label('photo', ' Photo: ') }}
	{{ Form::text('photo') }}
	<p>
	{{ Form::label('industry', ' Industry: ') }}
	{{ Form::text('industry') }}
	<p>
	{{ Form::label('description', ' Description: ') }}
	{{ Form::textarea('description') }}
	<br>
	{{ Form::submit('Update') }}
	{{ Form::close() }}
@stop