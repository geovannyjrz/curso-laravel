@extends('layouts.master')

@section('content')

<h1>Mi perfil</h1>
<hr>
<p>Nombre: {{ auth()->user()->name }}</p>
<p>Correo: {{ auth()->user()->email }}</p>

<br>
<br>
<br>

<h4>Mis publicaciones</h4>

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
		<tr class="post-{{ $post->id }}">
			<td>{{ $post->title }}</td>
			<td>
			<a href="/posts/{{ $post->id }}">Ver más</a> | Editar |
			<a href="" class="btnDelete" data-id="{{ $post->id }}" data-token="{{ csrf_token() }}">Eliminar</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<div class="right-align">
	<a class="waves-effect waves-teal btn-flat" href="/users/{{ auth()->user()->id }}">Eliminar mi cuenta</a>
</div>


@endsection