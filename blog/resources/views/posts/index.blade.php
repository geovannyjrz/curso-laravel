@extends('layouts.master')

@section('content')

<h1>Últimas publicaciones</h1>

<div class="row">
	@foreach($posts as $post)
	
	<div class="col s12 m6">
		<div class="card grey lighten-4">
			<div class="card-content">
				<span class="card-title">{{$post->title}}</span>
				<p>{{str_limit($post->body, 50)}}</p>
				</div>
				<div class="card-action">
					<a href="/posts/{{$post->id}}">Leer más...</a>
				</div>
			</div>
		</div>

		@endforeach
	</div>

	@endsection