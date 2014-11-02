@extends('layouts.master', [

	'title' => 'Teamtrackr'

])


@section('content')

	<div id="landingView" class="container-fluid">
		<div id="splash" class="container-fluid">
			<div class="center-block">
				<h1 class="title">Track your teams progress</h1>
				<p class="col-lg-6 description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas molestie turpis eu auctor. Vivamus suscipit consectetur odio, sit amet porta nulla lobortis ac. Aliquam erat volutpat. Duis non suscipit est, at rhoncus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam nec velit velit. Proin efficitur ultricies nisl eget volutpat.</p>
				<a href="{{ route('showRegister') }}" class="nostyle"><button class="fancy">Sign Up</button></a>
				<a href="{{ route('showLogin') }}">or log in</a>
			</div>
		</div>
	</div>

@stop