@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">

			<h1 class="grey-text darken-2 center-align">Editando un post</h1>

			@include('partials.form_errors')

			<form class="col s12" action="{{ route('post_update_path',$post->id) }}" method="post">
				<input type="hidden" name="_method" value="put">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s12">
						<input id="title" name="title" type="text" class="validate" value="{{ $post->title }}">
						<label for="title">Título</label>
					</div>
					<div class="input-field col s12" title="El slug sirve para formar una url amigable">
						<input id="slug" name="slug" type="text" class="validate" value="{{ $post->slug }}">
						<label for="slug">slug</label>
					</div>
				</div>

				<div class="input-field col s12">
					<textarea id="body" name="body" class="materialize-textarea">{{ $post->body }}</textarea>
					<label for="body">Contenido</label>
				</div>

				<button class="btn waves-effect waves-light right" type="submit" name="action">Actualizar
					<i class="material-icons right">send</i>
				</button>

			</form>
		</div>
	</div>
@endsection
