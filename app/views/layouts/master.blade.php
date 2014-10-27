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
</body>
</html>