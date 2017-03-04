@extends('layouts.default')

	@section('content')
		<div class="container">
			<h1>{{ $post->title }}</h1>
			<p>by {{ $post->author->name }}</p>
			<p>{{ $post->body }}</p>
		</div>
	@endsection