@extends('layout')
@section('title')
JobFind - View Account Information
@stop
@section('subheading')
Update Account Information
@stop
@section('content')
	<p>Name: {{{ $user->name }}}</p>
	<p>Email Address: {{{ $user->email }}}</p>
	<p>Phone Number: {{{ $user->phone }}}</p>
	<p>Photo: {{{ $user->photo }}}</p>
	<p>Industry: {{{ $user->industry }}}</p>
	<p>Description: {{{ $user->description }}}</p>
	<p>{{ link_to_route('user.edit', 'Edit Account', array($user->id)) }}</p>
	{{ Form::close() }}
@stop