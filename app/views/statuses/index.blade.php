@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-9">
			@include('forms.status')
			@foreach($statuses as $status)
				<h3>{{ $status->user->username }} <small>({{ $status->created_at->diffForHumans() }})</small></h3>
				<hr>
				<p>{{ $status->body }}</p>
			@endforeach
		</div>

		<div class="col-md-3">
			<h1>Friends</h1>
			<p>You currently have no friends :(</p>
		</div>
	</div>
@stop
