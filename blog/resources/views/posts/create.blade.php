@extends('layouts.master')

@section('content')

<h1>Nueva publicación</h1>

<div class="row">
	<form class="col s12" action="/posts" method="POST">
	{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Ingresa título" id="txt-title" name="txt-title" type="text" class="validate" required>
				<label for="txt-title">Título</label>
			</div>
			<div class="input-field col s12">
				<textarea id="txt-body" class="materialize-textarea" name="txt-body" required></textarea>
				<label for="textarea1">Textarea</label>
			</div>
		</div>
		<button class="btn waves-effect waves-light" type="submit" >Guardar
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>

@include('layouts.errors')

@endsection