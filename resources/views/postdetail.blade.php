@extends('layouts.default')

	@section('content')
		<h1>{{ $post->title }}</h1>
		<p>by {{ $post->author->name }}</p>
		<p>{{ $post->body }}</p>
	@endsection