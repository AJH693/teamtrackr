@extends('layouts.master', [

	'title' => 'Teamtrackr | Register'

])


@section('content')

	<div id="registerView" class="container-fluid">
		<div class="text-center">
			{{ Form::open(['route' => 'register']) }}
				<h2 class="title">Register</h2>

				<label for="name">Name</label>
				{{ Form::text('name') }}
				
				<label for="email">Email</label>
				{{ Form::text('email') }}
				
				<label for="password">Password</label>
				{{ Form::password('password') }}
				
				{{ Form::submit('Register') }}
			{{ Form::close() }}
		</div>
	</div>

@stop