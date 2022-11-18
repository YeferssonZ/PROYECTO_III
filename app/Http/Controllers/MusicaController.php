<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;
use App\Models\Comentario;
use App\Models\Reaction;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class MusicaController extends Controller
{
    //
    public function index()
    {
        $id = auth()->user()->id;
        $musicas = Musica::where('user_id', $id)->get();
        return view('musicas.musicas', compact('musicas'));
    }

    public function mostrarMusica(string $ruta, $ruta_mp3)
    {
        $file = Storage::disk('musicas')->get($ruta, $ruta_mp3);
        return Image::make($file)->response();
    }

    public function subirMusica(Request $request)
    {
        if ($request->hasFile('musica')) {
            $id = auth()->user()->id;
            $archivo_musica     = $request->file('musica');
            $fileName_musica   = time() . '.' . $archivo_musica->getClientOriginalExtension();
            Storage::disk('musicas')->put('/' . $fileName_musica, file_get_contents($archivo_musica));

            $archivo_imagen     = $request->file('imagen');
            $fileName_imagen   = time() . '.' . $archivo_imagen->getClientOriginalExtension();
            Storage::disk('fotos')->put('/' . $fileName_imagen, file_get_contents($archivo_imagen));


            $musica = new Musica;
            $musica->user_id = $id;
            $musica->nombre_musica = $request->nombre_musica;
            $musica->ruta_mp3 = $fileName_musica;
            $musica->ruta = $fileName_imagen;
            $musica->save();
            return redirect('/musicas');
        }
    }
    public function eliminarMusica(Request $request)
    {
        if ($request->id_musica) {
            $musica = Musica::find($request->id_musica);
            $musica->delete();

            Storage::disk('musicas')->delete($musica->ruta);
            Storage::disk('musicas')->delete($musica->ruta_mp3);
            return redirect('/musicas');
        }
    }
    public function subirComentario(Request $request)
    {
        if ($request->comentario) {
            $id = auth()->user()->id;
            $comentario = new Comentario;
            $comentario->user_id = $id;
            $comentario->musica_id = $request->id_musica;
            $comentario->comentario = $request->comentario;
            $comentario->estado = 1;
            $comentario->save();
            return redirect('/home');
        }
    }
    public function mostrarCancion(string $nombre)
    {

        //$file = Storage::disk('musicas')->get($nombre);
        $file = storage_path() . '/app/musicas/' . $nombre;


        return response()->file($file);
    }
    public function mostrarImagen(string $nombre)
    {

        $file = Storage::disk('fotos')->get($nombre);
        return Image::make($file)->response();
    }

    public function crearReaccion(Request $request)
    {
        $id = auth()->user()->id;
        $reaction = new Reaction;
        $reaction->user_id = $id;
        $reaction->musica_id = $request->id_musica;
        $reaction->save();
        return redirect('/home');
    }
}
