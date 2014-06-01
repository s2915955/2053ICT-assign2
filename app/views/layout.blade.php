<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
    
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- CSS stylesheet -->
		<link media="all" type="text/css" rel="stylesheet" href="styles/bootstrap.css">
		{{ HTML::style('styles/bootstrap.css') }}
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Plugins -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
	</head>
  
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home') }}">JobFind</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::check())
							Logged in as {{ Auth::user()->name }} {{ link_to_route('user.logout', " (sign out)") }}
						@else
							{{ Form::open(array('route' => 'user.login', 'class'=>'form')) }}
							{{ Form::label('email', 'Email Address: ') }}
							{{ Form::text('email') }}
							{{ $errors->first('email') }}
							{{ Form::label('password', 'Password: ') }}
							{{ Form::password('password') }}
							{{ $errors->first('password') }}
							{{ Form::submit('Sign in') }}
							{{ Form::close() }}
						@endif
            <!--<li><a href="#">Sign in</a></li>-->
					</ul>
				</div>
			</div>
		</div>
		<div id ="main-body" class='container'>
			<div class='row'>
				<div class='col-sm-3'>
					<div class='list-group'>
						<a class='list-group-item' href="{{ route('home') }}">Home</a>
						<a class='list-group-item' href="#">Search for Jobs</a>
						<a class='list-group-item' href="{{ route('job.index') }}">List all Jobs</a>
						<a class='list-group-item' href="{{ route('user.index') }}">List all Employers</a>
						@if (Auth::check())
							<a class='list-group-item' href="{{ route('job.create') }}">Advertise a Job</a>
							<a class='list-group-item' href="#">Update Account Information</a>
						@endif
					</div>
				</div>
				<div class='col-sm-9'>
        	<h1>@yield('page_title')</h1>
        	<h2>@yield('subheading')</h2>
					@yield('content')
				</div>
			</div>
		</div>
	</body>
	<footer>
		Developed by Eddie Benavides (s2915955) - {{ link_to_route('home', " About this application") }}
	<footer>
</html>