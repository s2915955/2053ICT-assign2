@extends('layout')
@section('title')
JobFind - {{{ $job->title }}}
@stop
@section('subheading')
{{{ $job->title }}}
@stop
@section('content')
	<p>{{{ $job->description }}}</p>
	<p>Job location: {{{ $job->location }}}</p>
	<p>Salary per anum: {{{ $job->salary }}}</p>
	<p>Application opening: {{{ $job->start_date }}}</p>
	<p>Application deadline: {{{ $job->end_date }}}</p>
	<p>{{ link_to_route('job.edit', 'Edit', array($job->id)) }}</p>
	{{ Form::open(array('method' => 'DELETE', 'route' => array('job.destroy', $job->id))) }}
	{{ Form::submit('Delete Job', array('class' => 'btn btn-danger')) }}
	{{ Form::close() }}
@stop