@extends('layout')
@section('title')
JobFind - Home
@stop
@section('heading')
Welcome to JobFind
@stop
@section('subheading')
Recent Job Postings
@stop
@section('content')
	<ul>
		@foreach ($jobs as $job)
			<li>{{ link_to_route('job.show', $job->title, array($job->id)) }}</li>
		@endforeach
	</ul>
@stop