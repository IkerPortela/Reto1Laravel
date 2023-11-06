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
<div class="container">
<h1>{{$post->id}}</h1>
<p>Creado el {{$post->created_at}}</p>
<p>{{$post->texto}}</p>
</div>

<div class="container">
    @foreach ($comments as $commentary)
    <p>{{$commentary->text}}</p>
    @endforeach
</div>
@endsection

    </body>
</html>

