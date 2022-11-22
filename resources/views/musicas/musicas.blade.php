@extends('layouts.app')

@section('content')
<main>
    <style>
        .container{
            background:black;
            color:black;
            width: 100rem;
            height: 20rem;
            border: 5px ;
            font-size: x-large;
            font-size: 250%;
        }
        h1{
            font-size: 200%;
            text-align:center;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        body{
            background-image: url(https://i.cbc.ca/1.5690116.1629294584!/fileImage/httpImage/canadian-music-class-challenge-2021-prizes.jpg);
            background-size: cover;
            background-repeat:repeat;
        }
        #color{
            color: pink;
        }
        #tamaño{
            font-size: 1.125rem;
        }
    </style>
    <div class="album py-4">
        <div class="container">
            <form action="{{ route('subirMusica') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <h1><label for="staticEmail2" class="text-info"><b>Subir Musica</b></label></h1>
                <div class="mb-3">
                    <label id="color" for="exampleFormControlInput1" class="form-label"><b>Nombre de la canción</b></label>
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
                        <img height="300" src="mostrarImagen/{{$musica->ruta}}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">
                                <b id="tamaño">
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