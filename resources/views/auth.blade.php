@extends('layouts.default')

@section('content')
	<div id="login-page" class="row">
		<div class="col s12 m8 offset-m2  l6 offset-l3 z-depth-3 card-panel ">
			<form class="login-form" id="login-form" action="{{ route('auth_store_path') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s12 center">
						<img src="{{ asset('img/chrissy.jpg') }}">
						{{--<p class="center login-form-text">Login</p>--}}
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="username" name='username' type="text" value="{{ old('username') }}">
						<label for="username" class="center-align">usuario o email</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">mode_edit</i>
						<input id="password" name="password" type="password">
						<label for="password" class="">clave</label>

						@include('partials.form_errors')

					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<button type="submit" class="btn col s12 waves-effect deep-orange"
						        value="Iniciar Sesión">Iniciar Sesión</button>
					</div>
				</div>

				{{--<div class="row hide">
					<div class="input-field col s6 m6 l6">
						<p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
					</div>
					<div class="input-field col s6 m6 l6">
						<p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
					</div>
				</div>--}}

			</form>
		</div>
	</div>
@endsection