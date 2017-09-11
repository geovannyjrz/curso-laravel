@extends('layouts.master')

@section('content')

<h1 class="center-align">Registro</h1>

<div class="row">
	<form class="col m4 offset-m4" action="/users" method="POST">
		{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Geovanny Juarez" id="txt-name" name="txt-name" type="text" class="validate" required>
				<label for="txt-title">Nombre</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="username@example.com" id="txt-mail" name="txt-mail" type="email" class="validate" required>
				<label for="txt-mail">Correo electrónico</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="password" id="password" name="password" type="password" class="validate" required>
				<label for="password">Contraseña</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="password" id="txt-pass2" name="password_confirmation" type="password" class="validate" required>
				<label for="password_confirmation">Repite la contraseña</label>
			</div>
		</div>
		<div class="center-align">
			<button class="btn waves-effect waves-light" type="submit" >Registrarme
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>
</div>

@include('layouts.errors')

@endsection