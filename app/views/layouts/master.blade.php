<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

	<!-- Jquery -->
	<script href="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	
	<!--Highcharts-->
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-more.js"></script>
	<script src="http://code.highcharts.com/modules/solid-gauge.js"></script>

	{{ HTML::style('styles/reset/reset.css') }}
	{{ HTML::style('styles/reset/typography.css') }}
	{{ HTML::style('styles/reset/button.css') }}
	{{ HTML::style('styles/reset/forms.css') }}
	{{ HTML::style('styles/layouts/header.css') }}
	{{ HTML::style('styles/landing.css') }}
	{{ HTML::style('styles/project/all.css') }}
	{{ HTML::style('styles/project/my.css') }}
	{{ HTML::style('styles/project/show.css') }}
	{{ HTML::style('styles/admin/approval.css') }}
</head>
<body>
	<header class="container-fluid">
		<a href="{{ route('landing') }}" class="nostyle title text-center"><h6 class="title">teamtrackr</h6></a>
		@if(Auth::check())
		<nav>
			<a href="{{ route('logout') }}" class="nostyle nav"><h5>logout</h5></a>	
		</nav>
		@endif
	</header>

	@if(Session::has('message'))
        <div class="notification message show">{{{ Session::get('message') }}}</div>
    @endif

    @if(Session::has('error'))
        <div class="notification error show">{{{ Session::get('error') }}}</div>
    @endif

	<main class="container-fluid">
		@yield('content')
	</main>
</body>
</html>
