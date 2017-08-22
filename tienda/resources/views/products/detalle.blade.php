@extends('layouts.master')

@section('content')
<h1>{{$product->descripcion}}</h1>
<h2>${{$product->precio}}</h2>
<a href="/">Regresar</a>
@endsection