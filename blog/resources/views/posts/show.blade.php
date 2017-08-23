@extends('layouts.master')

@section('content')
<h1>{{$post->title}}</h1>
<h2>{{$post->body}}</h2>
<a href="/">Regresar</a>
@endsection