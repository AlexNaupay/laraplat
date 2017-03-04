@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">

			<h1 class="grey-text darken-2 center-align">Escribiendo un nuevo post</h1>

			@include('partials.form_errors')

			<form class="col s12" action="{{ route('post_store_path') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s12">
						<input id="title" name="title" type="text" class="validate" value="{{ old('title') }}">
						<label for="title">Título</label>
					</div>
					<div class="input-field col s12" title="El slug sirve para formar una url amigable">
						<input id="slug" name="slug" type="text" class="validate" value="{{ old('slug') }}">
						<label for="slug">slug</label>
					</div>
				</div>

				<div class="input-field col s12">
					<textarea id="body" name="body" class="materialize-textarea">{{ old('body') }}</textarea>
					<label for="body">Contenido</label>
				</div>

				<button class="btn waves-effect waves-light right" type="submit" name="action">Crear
					<i class="material-icons right">send</i>
				</button>

			</form>
		</div>
	</div>
@endsection
