@extends('layout')
@section('title')
JobFind - List of Employers
@stop
@section('content')
	<h2>All Employers</h2>
	<ul>
		@foreach ($users as $user)
			<li>{{ link_to_route('user.show', $user->name, array($user->id)) }}</li>
		@endforeach
	</ul>
@stop