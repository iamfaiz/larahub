@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h1>Register</h1>
			<p class="text-muted">Qucikly fillout these fields to sign yourself up.</p>
			@include('forms.registeration')
		</div>
	</div>
@stop
