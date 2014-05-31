@extends('layout')
@section('title')
JobFind - Advertise a Job
@stop
@section('subheading')
Advertise a Job
@stop
@section('content')
	{{ Form::open(array('action' => 'JobController@store')) }}
	{{ Form::label('title', 'Job Title: ') }}
	{{ Form::text('title') }}
	<p>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::text('description') }}
	<p>
	{{ Form::label('location', 'Location: ') }}
	{{ Form::text('location') }}
	<p>
	{{ Form::label('salary', 'Salary per Anum: ') }}
	{{ Form::text('salary') }}
	<p>
	{{ Form::label('start_date', 'Application opening: ') }}
	{{ Form::text('start_date') }}
	<p>
	{{ Form::label('end_date', 'Application deadline: ') }}
	{{ Form::text('end_date') }}
	<p>
	{{ Form::submit('Submit Job') }}
	{{ Form::close() }}

@stop