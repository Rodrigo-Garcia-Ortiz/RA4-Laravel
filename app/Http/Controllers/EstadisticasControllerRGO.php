<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideojuegoRGO;

class EstadisticasControllerRGO extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $videojuegos = VideojuegoRGO::obtenerVideojuegos();
        $todosVideojuegos = array_column($videojuegos, 'id');
        $totalVideojuegos = count($todosVideojuegos);

        $todasPlataformas = array_column($videojuegos, 'plataforma');
        $totalPlataformas = count(array_unique($todasPlataformas));

        $todosPrecios = array_column($videojuegos, 'precio');
        $totalPrecios = count($todosPrecios);
        $sumaPrecios = array_sum($todosPrecios);
        $mediaPrecios = $sumaPrecios/$totalPrecios;

        return response()->json([
            'total_videojuegos' => $totalVideojuegos,
            'total_plataformas' => $totalPlataformas,
            'media_precios'  => $mediaPrecios,
        ]);
    }
}
