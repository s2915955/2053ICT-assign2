@extends('layout')
@section('title')
JobFind - Search Results
@stop
@section('content')
	<h2>Search Results</h2>
	<ul>
		@foreach ($jobs as $job)
			<li>{{ link_to_route('job.show') }}</li>
		@endforeach
	</ul>
@stop