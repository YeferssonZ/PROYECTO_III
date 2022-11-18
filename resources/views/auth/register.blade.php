@extends('layouts.app')

@section('content')

<div class="container" style="background-color: white;border-radius: 20px ">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-5 m-3">
                <div class="text-center">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/eb/a5/56/eba556cae64b32ed24efcf140078f1ba.jpg" class="d-block" alt="Harry" height="580" width="440">
                            </div>
                            <div class="carousel-item active">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/8b/a2/d4/8ba2d473f224c7d8f7ee652cc214555f.jpg" class="d-block" alt="Billie" height="580" width="440">
                            </div>
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/73/87/c3/7387c3f585e183568aecbb532ce26fa6.jpg" class="d-block" alt="KevinK" height="580" width="440">
                            </div>
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/5c/54/5c/5c545c47b218dee53c2c1aeee2e5b60d.jpg" class="d-block" alt="ShawnM" height="580" width="440">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 m-5 ">
                <div class="">
                    <div class="">
                        <h2>
                            <div class="btn-group">
                                <p> <i class="bi bi-vinyl-fill"></i>
                                    <button class="btn" type="button">
                                        <x-bi-music-note-list style="color: #744BF5;" />
                                    </button>
                                </p>
                            </div>
                            <b>
                                {{ __('Musgrove') }}
                            </b>
                        </h2>
                    </div>
                    <div class="">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <h3 class="text-center m-3"><b> Registrate gratis para escuchar</b></h3>
                            </div>
                            <div class="row mb-2">
                                <label for="name" class="col-form-label text-md"><b>{{ __('Nombre') }}</b></label>

                                <div class="col-md-11">
                                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="email" class=" col-form-label text-md"><b>{{ __('Email') }}</b></label>

                                <div class="col-md-11">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="password" class="col-form-label text-md"><b>{{ __('Contraseña') }}</b></label>

                                <div class="col-md-11">
                                    <input id="password" type="password" placeholder="********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="password-confirm" class="col-form-label text-md"><b>{{ __('Confirmar Contraseña') }}</b></label>

                                <div class="col-md-11">
                                    <input id="password-confirm" type="password" placeholder="********" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 text-center m-4">
                                    <button type="submit" class="btn" style="background-color:#744BF5; color:aliceblue;">
                                        <small>
                                            <b>
                                                {{ __('REGISTRARTE') }}
                                            </b>
                                        </small>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>

@endsection