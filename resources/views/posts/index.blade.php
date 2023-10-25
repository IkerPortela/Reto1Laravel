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
    <ul>
{{--esto es un comentario: recorremos el listado de posts--}}
@foreach ($posts as $post)
{{-- visualizamos los atributos del objeto --}}
<li class="pt-1">
    <div class="d-flex flex-row">
    <a href="{{route('posts.show',$post)}}"> {{$post->titulo}}</a>.
    Escrito el {{$post->created_at}}
    <a class="btn btn-warning btn-sm" href="{{route('posts.edit',$post)}}"
    role="button">Editar</a>
        <form action="{{route('posts.destroy',$post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" type="submit"
            onclick="return confirm('Are you sure?')">Delete
            </button>
        </form>
    </div>
</li>
@endforeach
        </ul>
        @endsection
    </body>
</html>
