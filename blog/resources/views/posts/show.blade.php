@extends('layouts.master')

@section('content')
<h1>{{$post->title}}</h1>
<hr>
<p>{{$post->created_at->toFormattedDateString()}}</p>
<p>{{$post->body}}</p>
<hr>

<br>
<br>

@if(Auth::check())
<form id="frmComment">
	{{ csrf_field() }}
	<input type="hidden" id="id" name="id" value="{{ $post->id }}">
	
	<div class="input-field">
		<textarea name="txt-comment" id="txt-comment" class="materialize-textarea"></textarea>
		<label for="txt-comment">Agregar comentario</label>
	</div>

	<button class="btn waves-effect waves-light" type="submit">
		Comentar <i class="material-icons right">send</i>
	</button>
</form>
@endif
<br><br>
<hr>
<h4>Comentarios</h4>

<div id="listComments">
	@foreach($post->comments as $comment)
	<ul class="collection">
		<li class="collection-item avatar">
			<i class="material-icons circle green">insert_chart</i>
			<span class="title"><strong>{{ $comment->user->name }}</strong></span>
			<p>{{ $comment->body}}<br>{{ $comment->created_at->diffForHumans() }}</p>
			<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
		</li>
	</ul>
	@endforeach
</div>

@endsection