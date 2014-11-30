@extends('layouts.default')

@section('content')
	<div class="row">

		@foreach($users as $user)
			<div class="col-md-4">
				<h2><a href="/user/{{ $user->id }}">{{ $user->username }}</a></h2>
				<h4>{{ $user->email }}</h4>
			</div>
		@endforeach

	</div>
@stop
