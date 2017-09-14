@extends('layouts.master')

@section('content')

<h4>Mi perfil</h4>
<p>Nombre: {{ auth()->user()->name }}</p>
<p>Correo: {{ auth()->user()->email }}</p>

<br>
<br>

<div class="row">
	<div class="col m12 right-align">
		<a class="waves-effect waves-light btn" href="/users/{{ auth()->user()->id }}/edit">Editar Perfil</a>
	</div>
</div>
<div class="row">
	<div class="col m12">
		<a href="/users/{{ auth()->user()->id }}">Eliminar mi cuenta</a>
	</div>
</div>
<hr>
<h5>Mis publicaciones</h5>
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
				<a href="/posts/{{ $post->id }}">Ver más</a> | 
				<a href="/posts/{{ $post->id }}/edit">Editar</a> |
				<a href="" class="btnDelete" data-id="{{ $post->id }}" data-token="{{ csrf_token() }}">Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection