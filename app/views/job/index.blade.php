@extends('layout')
@section('title')
JobFind - Home
@stop
@section('page_title')
Welcome to JobFind
@stop
@section('content')
	<p>JobFind is Australia's premiere application for job seekers and employers alike. Job seekers can search for jobs by job title, industry, description, location, or minimum salary. Employers are able to add, edit, and delete job postings.</p>
	<h2>Recent Job Postings</h2>
	<ul>
		@foreach ($jobs as $job)
			<li>{{ link_to_route('job.show', $job->title, array($job->id)) }}</li>
		@endforeach
	</ul>
@stop