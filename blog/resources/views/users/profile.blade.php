@extends('layouts.master')

@section('content')

<h1>Mi perfil</h1>
<hr>
<p>Nombre: {{ Auth::user()->name}}</p>
<p>Nombre: {{ auth()->user()->email }}</p>

<h2>Mis publicaciones</h2>

<hr>
<table>
	<thead>
		<tr>
			<th>Título</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach(Auth::user()->posts as $post)
		<tr>
			<td>{{ $post->title }}</td>
			<td><a href="/posts/{{ $post->id }}">ver más</a> | Editar | Eliminar</td>
		</tr>
		@endforeach
	</tbody>
</table>

<!--Solo pruebas AJAX-->
<a id="btnAjax" class="waves-effect waves-light btn">AJAX</a>

<div id="notas">
	
</div>


@endsection