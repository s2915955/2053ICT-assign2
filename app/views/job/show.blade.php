@extends('layout')
@section('title')
JobFind - {{{ $job->title }}}
@stop
@section('subheading')
{{{ $job->title }}}
@stop
@section('content')
	@if (!Auth::check())
		<div id="heading">Employer:</div>
		<p>EMPLOYER NAME</p>
		<div id="heading">Description:</div>
		<p>{{{ $job->description }}}</p>
		<div id="heading">Job location:</div>
		<p>{{{ $job->location }}}</p>
		<div id="heading">Salary per anum:</div>
		<p>${{{ $job->salary }}}</p>
		<div id="heading">Application opening:</div>
		<p>{{{ $job->start_date }}}</p>
		<div id="heading">Application deadline:</div>
		<p>{{{ $job->end_date }}}</p>
		<div id="error">You must be logged in to Apply.</div>Don't have an account? Create one <a href="{{ route('user.create') }}">here</a>.
		{{ Form::close() }}
	@else
		<p>{{{ $job->description }}}</p>
		<p>Job location: {{{ $job->location }}}</p>
		<p>Salary per anum: {{{ $job->salary }}}</p>
		<p>Application opening: {{{ $job->start_date }}}</p>
		<p>Application deadline: {{{ $job->end_date }}}</p>
		<p>{{ link_to_route('job.edit', 'Edit', array($job->id)) }}</p>
		{{ Form::open(array('method' => 'DELETE', 'route' => array('job.destroy', $job->id))) }}
		{{ Form::submit('Remove Job', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	@endif
@stop