@extends('layouts.default')

@section('content')
	<div class="row">

		<div class="col-md-6">
			<h2>{{ $user->username }}</h2>
			<h4>({{ $user->email }})</h4>
			@if ($currentUserHadFollowed)
				<button class="btn btn-primary" disabled="true">You are following {{ $user->username }}</button>
			@elseif (Auth::user()->id !== $user->id)
				<a href="/follow/{{ $user->id }}" class="btn btn-primary">Follow {{ $user->username }}</a>
			@endif
		</div>

	</div>
@stop
