@extends('layouts.master')

@section('content')
<h1>{{$post->title}}</h1>
<hr>
<p>{{$post->created_at->toFormattedDateString()}}</p>
<p>{{$post->body}}</p>
<hr>
<h3>Comentarios</h3>

@foreach($post->comments as $comment)

<ul class="collection">
	<li class="collection-item avatar">
		<i class="material-icons circle green">insert_chart</i>
		<span class="title"><strong>{{ $comment->body}}</strong></span>
		<p>{{ $comment->body}} <br>
			{{ $comment->created_at->diffForHumans() }}
		</p>
		<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
	</li>
</ul>


@endforeach



@endsection