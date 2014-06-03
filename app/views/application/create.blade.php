@extends('layout')
@section('title')
JobFind - Apply for Job
@stop
@section('subheading')
Apply for Job
@stop
@section('content')
	{{ Form::open(array('action' => 'ApplicationController@store')) }}
	{{ Form::label('letter', 'Application letter: ') }}
	{{ Form::textarea('letter') }}
	<br>
	<div id="error">{{ $errors->first('letter') }}</div>
	<br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop