@extends('layouts.master')

@section('content')

<h1 class="center-align">Iniciar sesión</h1>

<div class="row">
	<form class="col m4 offset-m4" action="/posts" method="POST">
		{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="username@example.com" id="txt-user" name="txt-user" type="text" class="validate" required>
				<label for="txt-title">Nombre de usuario / Correo electrónico</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="password" id="txt-user" name="txt-user" type="password" class="validate" required>
				<label for="txt-title">Contraseña</label>
			</div>
		</div>
		<div class="center-align">
			<button class="btn waves-effect waves-light" type="submit" >Entrar
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>
</div>
<div class="row">

	<p class="right"><a href="/register">Registrarme</a> | <a href="#">Olvidé la contraseña</a></p>
	
</div>

@include('layouts.errors')

@endsection