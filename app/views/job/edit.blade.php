@extends('layout')
@section('title')
JobFind - Edit Job Advertisment
@stop
@section('subheading')
Edit Job Advertisment
@stop
@section('content')
	{{ Form::model($job, array('method'=>'PATCH', 'route' => array('job.update', $job->id))) }}
	{{ Form::label('title', 'Job Title: ') }}
	{{ Form::text('title') }}
	<br><br>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
	<br>
	{{ Form::label('location', 'Location: ') }}
	{{ Form::text('location') }}
	<br>
	{{ Form::label('salary', 'Salary per Anum: ') }}
	{{ Form::text('salary') }}
	<br>
	{{ Form::label('start_date', 'Application opening: ') }}
	{{ Form::text('start_date') }}
	<br>
	{{ Form::label('end_date', 'Application deadline: ') }}
	{{ Form::text('end_date') }}
	<br><br>
	{{ Form::submit('Update') }}
	{{ Form::close() }}

@stop