@extends('layouts.master')

@section('content')
<h1>Lista de productos</h1>
<ul>
	@foreach($products as $product)
	<li>
		<a href="/detalle/{{$product->id}}">{{$product->descripcion}}</a>
	</li>
	@endforeach
</ul>
@endsection