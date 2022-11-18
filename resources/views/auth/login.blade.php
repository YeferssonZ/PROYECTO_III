@extends('layouts.app')

@section('content')

<div class="container" style="background-color: white;border-radius: 20px ">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-5 m-5 ">
                <div class="">
                    <!-- style=" background-color: #1D1D1D" -->
                    <div class="m-3"> <i class="fa-brands fa-spotify"></i>
                        <h2>
                            <div class="btn-group">
                                <p> <i class="bi bi-vinyl-fill"></i>
                                    <button class="btn" type="button">
                                        <x-bi-music-note-list style="color: #744BF5;" />
                                    </button>
                                </p>
                            </div>
                            <b>{{ __('Musgrove') }}</b>
                        </h2>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center m-3">
                                <small><b>Para continuar, inicia sesion en Musgrove</b></small>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="mx-4 col-form-label text-md"><b>{{ __('Email') }}</b></label>

                                <div class="col-md-9">
                                    <input id="email" type="email" placeholder="Email" class=" mx-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class=" mx-4 col-form-label text-md"><b>{{ __('Contraseña') }}</b></label>

                                <div class="col-md-9">
                                    <input id="password" type="password" placeholder="********" class=" mx-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-10 mx-4">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>

                                        <div class="">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn m-3" style="background-color:#744BF5; color:aliceblue;">
                                            <small>
                                                <b>
                                                    {{ __('INICIAR SESION') }}
                                                </b>
                                            </small>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-5 m-2">
                <div class="text-center">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/ef/72/66/ef726607c53690882ed174465da791b1.jpg" class="d-block" alt="OliviaR" height="570" width="95%">
                            </div>
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/58/41/4e/58414e85ba55d651cb430fec359a37c5.jpg" class="d-block" alt="Chlorine" height="570" width="95%">
                            </div>
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/18/7d/45/187d45cc84a776fb63b1027a3bf90dce.jpg" class="d-block" alt="Weeknd" height="570" width="95%">
                            </div>
                            <div class="carousel-item">
                                <img style="border-radius:10px ;" src="https://i.pinimg.com/564x/bf/c2/bc/bfc2bcfb1063f74fd2266e02dc63388c.jpg" class="d-block" alt="Coldplay" height="570" width="95%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection