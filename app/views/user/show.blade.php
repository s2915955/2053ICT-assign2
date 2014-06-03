@extends('layout')
@section('title')
JobFind - Manage Account
@stop
@section('subheading')
Manage Account
@stop
@section('content')
	<p><div id="label">Name: </div>{{{ $user->name }}}
	<p><div id="label">Email Address: </div>{{{ $user->email }}}
	<p><div id="label">Phone Number: </div>{{{ $user->phone }}}
	<p><div id="label">Photo: </div>{{{ $user->photo }}}
	<p><div id="label">Industry: </div>{{{ $user->industry }}}
	<p><div id="label">Description: </div>{{{ $user->description }}}
	<p>{{ link_to_route('user.edit', 'Edit Account', array($user->id)) }}
	{{ Form::close() }}
@stop