@extends('layouts.master')

@section('content')

<h1 class="center-align">Iniciar sesión</h1>

<div class="row">
	<form class="col m4 offset-m4" action="/login" method="POST">
		{{ csrf_field()}}
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="username@example.com" id="email" name="email" type="text" class="validate">
				<label for="txt-title">Correo electrónico</label>
			</div>
			<div class="input-field col s12">
				<input placeholder="password" id="password" name="password" type="password" class="validate">
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