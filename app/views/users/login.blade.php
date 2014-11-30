@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h1>Sign In</h1>
			<p class="text-muted">Qucikly fillout these fields to sign yourself in.</p>
			@include('forms.login')
		</div>
	</div>
@stop
