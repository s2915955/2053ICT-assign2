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
	{{ $errors->first('title') }}
	<p>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
	{{ $errors->first('description') }}
	<p>
	{{ Form::label('location', 'Location: ') }}
	{{ Form::text('location') }}
	{{ $errors->first('location') }}
	<p>
	{{ Form::label('salary', 'Salary per Anum: ') }}
	{{ Form::text('salary') }}
	{{ $errors->first('salary') }}
	<p>
	{{ Form::label('start_date', 'Application opening: ') }}
	{{ Form::text('start_date') }}
	{{ $errors->first('start_date') }}
	<p>
	{{ Form::label('end_date', 'Application deadline: ') }}
	{{ Form::text('end_date') }}
	{{ $errors->first('end_date') }}
	<p>
	{{ Form::submit('Submit Job') }}
	{{ Form::close() }}
@stop