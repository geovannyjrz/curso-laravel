@extends('layouts.master')

@section('content')
<h1>Ultimos posts</h1>

<div class="collection">
	@foreach($posts as $post)

	<a href="/posts/{{$post->id}}" class="collection-item"><span class="badge">{{$post->id}}</span>{{$post->title}}</a>

	@endforeach
</div>

@endsection