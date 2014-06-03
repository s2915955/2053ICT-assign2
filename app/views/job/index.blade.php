@extends('layout')
@section('title')
JobFind - List all Jobs
@stop
@section('subheading')
List of All Jobs
@stop
@section('content')
	Below are all active jobs by the latest one's posted. You can also search by job title, description, industry, location or minimum salary.<br><br>
	<ul>
		@foreach ($jobs as $job)
			<li>{{ link_to_route('job.show', $job->title, array($job->id)) }}</li>
		@endforeach
	</ul>
	{{ $jobs->links() }}
@stop