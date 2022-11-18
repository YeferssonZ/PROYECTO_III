<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/musicas', [App\Http\Controllers\MusicaController::class, 'index'])->name('musicas');
Route::get('/musica/{ruta}', [App\Http\Controllers\MusicaController::class, 'mostrarMusica']);
Route::post('/subirMusica', [App\Http\Controllers\MusicaController::class, 'subirMusica'])->name('subirMusica');
Route::post('/eliminarMusica', [App\Http\Controllers\MusicaController::class, 'eliminarMusica'])->name('eliminarMusica');
Route::get('/mostrarCancion/{nombre}', [App\Http\Controllers\MusicaController::class, 'mostrarCancion'])->name('mostrarCancion');
Route::get('/mostrarImagen/{nombre}', [App\Http\Controllers\MusicaController::class, 'mostrarImagen'])->name('mostrarImagen');
Route::post('/subirComentario', [App\Http\Controllers\MusicaController::class, 'subirComentario'])->name('subirComentario');
Route::post('/crearReaccion', [App\Http\Controllers\MusicaController::class, 'crearReaccion'])->name('crearReaccion');

