<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

	<title>Laravel</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('dist/app.css') }}">
	@yield('css')
</head>
<body>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><span>
						<strong>{{ !empty($userCurrent)?$userCurrent->password:'' }}</strong>
					</span>
				</li>
				<li><a href="{{ route('auth_destroy_path') }}">Logout</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="{{ route('auth_destroy_path') }}">Logout</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div class="main">
		@yield('content')
	</div>

	<footer class="page-footer orange">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Company Bio</h5>
					<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Settings</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Contacto</h5>
					<ul>
						<li><a class="white-text" href="#!">facebook</a></li>
						<li><a class="white-text" href="#!">twitter</a></li>
						<li><a class="white-text" href="#!">youtube</a></li>
						<li><a class="white-text" href="#!">google+</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="{{ asset('dist/app.js') }}"></script>
	@yield('js')
</body>
</html>