@extends('layouts.master')

@section('content')

<h1>Editar publicación</h1>

<div class="row">
	<form class="col s12" action="/posts/{{ $post->id }}/update" method="POST">
	{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Ingresa título" id="txt-title" name="txt-title" type="text" class="validate" value="{{ $post->title}}" required>
				<label for="txt-title">Título</label>
			</div>
			<div class="input-field col s12">
				<textarea id="txt-body" class="materialize-textarea" name="txt-body" required>{{ $post->body }}</textarea>
				<label for="txt-body">Contenido</label>
			</div>
		</div>
		<button class="btn waves-effect waves-light" type="submit" >Guardar
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>

@include('layouts.errors')

@endsection