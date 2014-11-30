@extends('layouts.default')

@section('content')
	<div class="row">

		<div class="col-md-6">
			<h2>{{ $user->username }}</h2>
			<h4>({{ $user->email }})</h4>
			<a href="/follow/{{ $user->id }}" class="btn btn-primary">Follow {{ $user->username }}</a>
		</div>

	</div>
@stop
