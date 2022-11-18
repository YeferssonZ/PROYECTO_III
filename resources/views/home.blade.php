@extends('layouts.app')

@section('content')
<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        body{
            background-image: url(https://hiraoka.com.pe/media/mageplaza/blog/post/t/i/tipos-de-audifonos.jpg);
            background-size: cover;
            background-repeat:no-repeat;
        }
    </style>

    <div class="album py-5">

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($musicas as $musica)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="300" src="mostrarImagen/{{$musica->ruta}}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">
                                <b>
                                    <center>{{$musica->nombre_musica}}</center>
                                </b>
                            </p>
                            <center><audio controls="" style="vertical-align: middle" src="mostrarCancion/{{$musica->ruta_mp3}}" type="audio/mp3" controlslist="nodownload">
                                </audio></center>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p> <i class="bi bi-chat-dots"></i>
                                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$musica->id}}" aria-expanded="false" aria-controls="collapseExample">
                                            <x-bi-chat class="text-primary" /> {{count($musica->comentario)}}
                                        </button>
                                    </p>
                                    <form method="POST" action="{{ route('crearReaccion') }}">
                                        @csrf
                                        <input type="hidden" name="id_musica" value="{{$musica->id}}">
                                        <p> <i class="bi bi-heart_fill"></i>
                                            <button class="btn " type="submit" data-bs-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample">
                                                <x-bi-heart-fill class="text-danger" /> {{count($musica->reaction)}}
                                            </button>
                                        </p>
                                    </form>
                                </div>
                                <small class="text-muted">{{$musica->User->name}}</small>
                            </div>
                            <div class="collapse" id="collapseExample{{$musica->id}}">
                                @foreach($musica->comentario as $comentario)
                                <div class="card card-body">
                                    {{$comentario->comentario}}
                                </div>
                                <small class="text-muted">{{$comentario->User->name}}</small>
                                @endforeach
                                <form method="POST" action="{{ route('subirComentario') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mt-2 row g-3">
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="comentario" aria-describedby="emailHelp" placeholder="Ingrese su comentario">
                                            </div>
                                            <div class="col-2">
                                                <input type="hidden" name="id_musica" value="{{$musica->id}}">
                                                <button type="submit" class="btn btn-primary">
                                                    <x-bi-send />
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection