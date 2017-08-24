@extends('layouts.master')

@section('content')
<h1>{{$post->title}}</h1>
<hr>
<p>{{$post->created_at}}</p>
<p>{{$post->body}}</p>
<a href="/">Regresar</a>
@endsection