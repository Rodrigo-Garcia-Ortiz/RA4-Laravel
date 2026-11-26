<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideojuegoRGO extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'plataforma',
        'precio',
    ];

    protected $casts = [
        'id' => 'integer',
        'precio' => 'float',
    ];

    public static function obtenerVideojuegos()
    {

        $videojuego1 = new self([
                'id' => 1,
                'nombre' => 'The Witcher 3: Wild Hunt',
                'plataforma' => 'PC',
                'precio' => 29.99
            ]);

        $videojuego2 = new self([
                'id' => 2,
                'nombre' => 'God of War Ragnarök',
                'plataforma' => 'PlayStation',
                'precio' => 59.99
            ]);

        $videojuego3 = new self([
                'id' => 3,
                'nombre' => 'Halo Infinite',
                'plataforma' => 'Xbox',
                'precio' => 39.99
            ]);

        $videojuego4 = new self([
            'id' => 4,
            'nombre' => 'The Legend of Zelda: Tears of the Kingdom',
            'plataforma' => 'Nintendo Switch',
            'precio' => 59.99
            ]);

        $videojuego5 = new self([
            'id' => 5,
            'nombre' => 'Cyberpunk 2077',
            'plataforma' => 'PC',
            'precio' => 34.99
            ]);

        $videojuego6 = new self([
            'id' => 6,
            'nombre' => 'Spider-Man 2',
            'plataforma' => 'PlayStation',
            'precio' => 69.99
            ]);

        $videojuego7 = new self([
            'id' => 7,
            'nombre' => 'Forza Horizon 5',
            'plataforma' => 'Xbox',
            'precio' => 49.99
            ]);

        $videojuego8 = new self([
            'id' => 8,
            'nombre' => 'Mario Kart 8 Deluxe',
            'plataforma' => 'Nintendo Switch',
            'precio' => 44.99
            ]);

        $videojuego9 = new self([
            'id' => 9,
            'nombre' => 'Minecraft',
            'plataforma' => 'PC',
            'precio' => 19.99
            ]);

        $videojuego10 = new self([
            'id' => 10,
            'nombre' => 'The Last of Us Part II',
            'plataforma' => 'PlayStation',
            'precio' => 39.99
            ]);

        return [$videojuego1, $videojuego2, $videojuego3, $videojuego4, $videojuego5, $videojuego6, $videojuego7, $videojuego8, $videojuego9, $videojuego10];
    }
}
