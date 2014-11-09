@extends('layouts.master', [

	'title' => 'Teamtrackr'

])


@section('content')

	<div id="landingView" class="container-fluid">
		<div id="splash" class="container-fluid">
			<div class="center-block">
				<h1 class="title">Track your teams progress</h1>
				<p class="col-lg-6 description">Teamtrackr is a tool built for professors and event organizers to track progress of small project based groups. Teamtrackr is the best tool for training your project estimation skills of budget and time while watching visual progress of your team as the course of the class or event happens.</p>
				<a href="{{ route('showRegister') }}" class="nostyle"><button class="fancy">Sign Up</button></a>
				<a href="{{ route('showLogin') }}" style="padding-top:10px">or log in</a>
			</div>
		</div>
	</div>

@stop