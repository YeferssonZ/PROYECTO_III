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
    </style>
    <div class="album py-5 bg-light">
        <div class="container">
            <form action="{{ route('subirMusica') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <h1><label for="staticEmail2" class="text-info"><b>Subir Musica</b></label></h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nombre de la canción</b></label>
                    <input type="text" class="form-control" name="nombre_musica" placeholder="Agregue nombre de la canción">
                </div>
                <div class="col-auto">
                    <input class="form-control" type="file" name="musica">
                </div>
                <div class="col-auto">
                    <input class="form-control" type="file" name="imagen" accept="image/jpeg">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Subir</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($musicas as $musica)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="240" src="mostrarImagen/{{$musica->ruta}}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">
                                <b>
                                    <center>{{$musica->nombre_musica}}</center>
                                </b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('eliminarMusica') }}">
                                    @csrf
                                    <div class="btn-group">
                                        <audio controls="" style="vertical-align: middle" src="mostrarCancion/{{$musica->ruta_mp3}}" type="audio/mp3" controlslist="nodownload"></audio>
                                        <div>
                                            <input type="hidden" name="id_musica" value="{{$musica->id}}">
                                            <button type="submit" class="btn text-danger my-2">
                                                <x-bi-trash />
                                            </button>
                                        </div>
                                        <!-- <button class="m-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-danger" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </button> -->
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
    <script>

    </script>
</main>
@endsection