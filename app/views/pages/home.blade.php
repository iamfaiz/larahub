@extends('layouts.default')

@section('content')
	@if(Session::has('registerationSuccess'))
		<div class="alert alert-success">
			{{ Session::get('registerationSuccess') }}
		</div>
	@endif
	<div class="jumbotron">
		<div class="container">
			<h1>Welcome to Larahub</h1>
			<p>An awesome social networking application built for humans.</p>
			<p>
				{{ link_to_route('Register', 'Sign Up!', null, ['class' => 'btn btn-primary btn-lg']) }}
			</p>
		</div>
	</div>
@stop
