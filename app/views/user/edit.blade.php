@extends('layout')
@section('title')
JobFind - Edit {{{ $user->name }}}
@stop
@section('subheading')
Edit {{{ $user->name }}}
@stop
@section('content')
	{{ Form::model($user, array('method'=>'PATCH', 'route' => array('user.update', $user->id))) }}
	{{ Form::label('name', 'Full Name: ') }}
	{{ Form::text('name') }}
	<br/>
	{{ Form::label('description', 'Description: ') }}
	{{ Form::textarea('description') }}
	<br/>
	{{ Form::label('location', 'Location: ') }}
	{{ Form::text('location') }}
	<br/>
	{{ Form::label('salary', 'Salary per Anum: ') }}
	{{ Form::text('salary') }}
	<br/>
	{{ Form::label('start_date', 'Application opening: ') }}
	{{ Form::text('start_date') }}
	<br/>
	{{ Form::label('end_date', 'Application deadline: ') }}
	{{ Form::text('end_date') }}
	<br/>
	{{ Form::submit('Update') }}
	{{ Form::close() }}
@stop