@extends('layouts.master', [

	'title' => 'Teamtrackr | Login'

])


@section('content')

	<div id="loginView" class="container-fluid">
		<div class="text-center">
			{{ Form::open(['route' => 'login']) }}
				<h2 class="title">Login</h2>
				
				<label for="email">Email</label>
				{{ Form::text('email') }}
				
				<label for="password">Password</label>
				{{ Form::password('password') }}
				
				{{ Form::submit('Login') }}
			{{ Form::close() }}
		</div>
	</div>

@stop