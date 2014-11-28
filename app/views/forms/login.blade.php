{{ Form::open([ 'route' => 'login_path' ]) }}
<div class="form-group">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" class="form-control" value="" required="required">
</div>
<div class="form-group">
	<label for="password">Password:</label>
	<input type="password" id="password" name="password" class="form-control" value="" required="required">
</div>
<div class="form-group">
	<button class="btn btn-primary">Sign In</button>
</div>
{{ Form::close() }}
