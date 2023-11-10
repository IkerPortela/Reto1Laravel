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
    <h1 style="text-align: center">CATEGORIAS</h1>
    <ul style="list-style: none;">
@foreach ($categories as $category)
<li class="pt-1">
<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="list-group">
    <p class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">{{$category->name}}</p>
    <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true"> Ver Incidencias</a>

    <div class="d-flex flex-row">
    @auth
        <a class="list-group-item list-group-item-action d-flex gap-3 py-3 btn btn-warning btn-sm" href="{{route('categories.edit',$category)}}"
        role="button">Editar Categoria</a>
        <form action="{{route('categories.destroy',$category)}}" method="POST"
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
        <a class="btn btn-primary" href="{{route('categories.create')}}"
    role="button">Crear un nuevo departamento</a>
        @endauth
        </ul>
        @endsection
    </body>
</html>