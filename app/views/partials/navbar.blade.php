<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		{{ link_to_route('home', 'Larahub', null, ["class" => "navbar-brand"]) }}
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li>{{ link_to_route('Users', 'Browse Users') }}</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>{{ link_to_route('logout_path', 'Logout') }}</li>
					</ul>
				</li>
			@else
				<li>{{ link_to_route('Login', 'Login') }}</li>
			@endif

		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
