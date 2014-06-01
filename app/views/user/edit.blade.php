@extends('layout')
@section('title')
JobFind - Update Account Information - {{{ $user->name }}}
@stop
@section('subheading')
Update Account Information - {{{ $user->name }}}
@stop
@section('content')
	{{ Form::model($user, array('method'=>'PATCH', 'route' => array('user.update', $user->id))) }}
	{{ Form::label('name', 'Name: ') }}
	{{ Form::text('name') }}
	<br/>
	{{ Form::label('password', 'Password: ') }}
	{{ Form::text('password') }}
	<br/>
	{{ Form::label('email', 'Email Address: ') }}
	{{ Form::text('email') }}
	<br/>
	{{ Form::label('number', 'Phone Number: ') }}
	{{ Form::text('number') }}
	<br/>
	{{ Form::label('photo', ' Photo: ') }}
	{{ Form::text('nphotoame') }}
	<br/>
	{{ Form::label('industry', ' Industry: ') }}
	{{ Form::text('industry') }}
	<br/>
	{{ Form::label('description', ' Description: ') }}
	{{ Form::text('description') }}
	<br/>
	{{ Form::submit('Update') }}
	{{ Form::close() }}
@stop