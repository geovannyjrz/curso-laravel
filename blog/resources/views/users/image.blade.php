@extends('layouts.master')

@section('content')

<h4 class="center-align">Imagen de perfil</h4>

<div class="row">
	<form class="col m4 offset-m4" enctype="multipart/form-data" action="/users/{{ auth()->user()->id }}/image" method="POST">
		{{ csrf_field()}}

		<div class="file-field input-field">
			<div class="btn">
				<span>Imagen</span>
				<input type="file" name="image">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>

		<div class="center-align">
			<button class="btn waves-effect waves-light" type="submit" >Actualizar
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>
</div>

@include('layouts.errors')

@endsection