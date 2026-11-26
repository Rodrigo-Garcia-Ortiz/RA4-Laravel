<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideojuegoRGO;

class VideojuegoControllerRGO extends Controller
{

    public function index()
    {
        $videojuegos = VideojuegoRGO::obtenerVideojuegos();
        return view('videojuegos.index', 
            compact('videojuegos'));
    }

        public function show($id)
    {
        $videojuegos = VideojuegoRGO::obtenerVideojuegos();

        if (!isset($videojuegos[$id - 1])) {
            abort(404);
        }

        $videojuego = $videojuegos[$id - 1];

        return view('videojuegos.show', [
            'videojuego' => $videojuego
        ]);
    }

    public function buscar()
    {
        return view('videojuegos.buscar');
    }

    public function plataformas(Request $request)
    {
        $plataforma = $request->input('plataforma');

        $videojuegos = VideojuegoRGO::obtenerVideojuegos();

        $videojuegosPlataforma = [];

    foreach ($videojuegos as $videojuego) { 
        if (strtolower($videojuego['plataforma']) == strtolower($plataforma)) { 
            $videojuegosPlataforma[] = $videojuego; 
        } 
    } 

        return view('videojuegos.plataformas', 
            compact('videojuegosPlataforma'));
    }
}
