@extends('layouts.default')

	@section('content')
		<div class="container">
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
						<a href="" class="secondary-content">
							<i class="material-icons">grade</i>
						</a>
					</li>
				@endforeach
			</ul>
		</div>
	@endsection()