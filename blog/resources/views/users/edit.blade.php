@extends('layouts.master')

@section('content')

<h4 class="center-align">Editar perfil</h4>

<div class="row">
	<form class="col m4 offset-m4" action="/users/{{ auth()->user()->id }}/update" method="POST">
		{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Geovanny Juarez" id="txt-name" name="txt-name" type="text" class="validate" value="{{ auth()->user()->name }}" required>
				<label for="txt-title">Nombre</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="username@example.com" id="txt-mail" name="txt-mail" type="email" class="validate" value="{{ auth()->user()->email }}" required>
				<label for="txt-mail">Correo electrónico</label>
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