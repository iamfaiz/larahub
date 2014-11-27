@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-6">
			@if (Session::has('messages'))
				<div class="alert alert-danger">
					<ul>
						@foreach (Session::get('messages')->all() as $message)
							<li>{{ $message }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			{{ Form::open([ 'route' => 'register_path' ]) }}
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" class="form-control" value="" required="required">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" class="form-control" value="" required="required">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" class="form-control" value="" required="required">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Sign Up</button>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
