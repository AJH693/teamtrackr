<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>

	{{ HTML::style('styles/reset.css') }}
	{{ HTML::style('styles/landing.css') }}
	{{ HTML::style('styles/project/all.css') }}
	{{ HTML::style('styles/project/my.css') }}
	{{ HTML::style('styles/project/show.css') }}
	{{ HTML::style('styles/admin/approval.css') }}
</head>
<body>
	@yield('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script href="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>