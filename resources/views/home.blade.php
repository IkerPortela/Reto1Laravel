@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @auth
            <div class="card">
                <div class="card-header">{{ __('Mensaje') }}</div>               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('¡Has iniciado sesion!') }}
                    @endauth
                    
                </div>
            </div>
        </div>
    </div>
</div>

<h1 style="text-align:center">Bienvenido</h1>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Lista de links
  </a>
  <a href="{{route('posts.index')}}" class="list-group-item list-group-item-action">Acceder a las departamento</a>
  <a href="#" class="list-group-item list-group-item-action">Acceder a las categorias</a>
  <a class="list-group-item list-group-item-action disabled" aria-disabled="true">Acceder a las incidencias</a>
</div>
@endsection
