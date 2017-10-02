@extends('layouts.master')

@section('content')

<h4 class="center-align">Mi perfil</h4>
<hr>
<div class="row">
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<img src="/img/users/{{ auth()->user()->image }}">
				<a class="btn-floating halfway-fab waves-effect waves-light red" href="/users/image"><i class="material-icons">image</i></a>
			</div>
			<div class="card-content">
				<span class="card-title">{{ auth()->user()->name }}</span>
				<p>{{ auth()->user()->email }}</p>
			</div>
			<div class="card-action">
				<a href="/users/{{ auth()->user()->id }}/edit">Editar perfil</a>
			</div>
		</div>
	</div>
	<div class="col s12 m9">
		<h5 class="center-align">Mis publicaciones</h5>
		<br>
		<table class="striped responsive-table">
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
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col m12">
			<a href="/users/{{ auth()->user()->id }}">Eliminar mi cuenta</a>
		</div>
	</div>

	@endsection