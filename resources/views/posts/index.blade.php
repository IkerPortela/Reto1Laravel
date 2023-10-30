<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
    @extends('layouts.app')
    @section('content')
    <h1 style="text-align: center">INCIDENCIAS</h1>
    <ul style="list-style: none;">
{{--esto es un comentario: recorremos el listado de posts--}}
@foreach ($posts as $post)
{{-- visualizamos los atributos del objeto --}}
<li class="pt-1">
<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="list-group">
    <a href="{{route('posts.show',$post)}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true"> {{$post->titulo}}</a>
    <p class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">Escrito el {{$post->created_at}}</p>
    <div class="d-flex flex-row">
    @auth
        <a class="list-group-item list-group-item-action d-flex gap-3 py-3 btn btn-warning btn-sm" href="{{route('posts.edit',$post)}}"
        role="button">Editar Incidencia</a>
        <form action="{{route('posts.destroy',$post)}}" method="POST"
        enctype="multipart/form-data">
    @csrf
    @method('DELETE')
        <button style="background-color:#9c1111"class="list-group-item d-flex gap-3 py-3 btn btn-sm btn-danger" type="submit"
        onclick="return confirm('¿Estas seguro?')">Borrar
        </button>
    </form>
    </div>
 
</li>
        @endauth
@endforeach
        @auth
        <a class="btn btn-primary" href="{{route('posts.create')}}"
    role="button">Crear una nueva incidendia</a>
        @endauth
        </ul>
        @endsection
    </body>
</html>
