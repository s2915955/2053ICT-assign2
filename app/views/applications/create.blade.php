@extends('layout')
@section('title')
JobFind - Apply for Job
@stop
@section('subheading')
Apply for Job
@stop
@section('content')
	{{ Form::open(array('action' => 'ApplicationController@store')) }}
	{{ Form::label('title', 'Job Title: ') }}
	{{ Form::text('title') }}
	<p>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
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
	<br>
	<div id="error">{{ $errors->first('title') }}</div>
	<div id="error">{{ $errors->first('description') }}</div>
	<div id="error">{{ $errors->first('location') }}</div>
	<div id="error">{{ $errors->first('salary') }}</div>
	<div id="error">{{ $errors->first('start_date') }}</div>
	<div id="error">{{ $errors->first('end_date') }}</div>
	<br>
	{{ Form::submit('Submit Job') }}
	{{ Form::close() }}
@stop