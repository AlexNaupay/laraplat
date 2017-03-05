@extends('layouts.default')

@section('content')
	<div class="container">

	@if(Session::has('no_permission'))
				<div class="card-panel red accent-2">{{Session::get('no_permission')}}</div>
	@endif

		<div style="margin-top:15px;">

			<div><span class="deep-orange badge">{{ $posts->count() }}</span></div>

			<a class="btn btn-danger right" href="{{ route('post_create_path') }}">
				<i class="material-icons">playlist_add</i> Nuevo post
			</a>
		</div>
		<div class="clearfix">&nbsp;</div>


		<ul class="collection">
			@foreach($posts as $post)
				<li class="collection-item avatar">
					<img src="{{ asset('img/chrissy-image.jpg') }}" alt="" class="circle">
					<a href="{{ route('post_show_path',[$post->slug]) }}">
						<span class="title">{{ $post->title }}</span>
					</a>
					<p>by {{ $post->author->name }} <br>
						Second Line
					</p>
						<span class="secondary-content">
							<a href="{{ route('post_edit_path',$post->id) }}" class="" title="Editar">
								<i class="material-icons">system_update_alt</i>
							</a>
							<a href="{{ route('post_remove_path',$post->id) }}" class="" title="Eliminar">
								<i class="material-icons">delete</i>
							</a>
						</span>
				</li>
			@endforeach
		</ul>

		{!! $posts->links() !!}

	</div>
@endsection()