<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoControllerRGO;
use App\Http\Controllers\EstadisticasControllerRGO;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('videojuegos')->group(function (){

Route::get('/', [VideojuegoControllerRGO::class, 'index'])
    ->name('videojuegos.index');

Route::get('/show/{id}', [VideojuegoControllerRGO::class, 'show'])
    ->name('videojuegos.show');

Route::get('/buscar', [VideojuegoControllerRGO::class, 'buscar'])
    ->name('videojuegos.buscar');

Route::post('/plataformas', [VideojuegoControllerRGO::class, 'plataformas'])
    ->name('videojuegos.plataformas');


});

Route::get('/login', function(){
    return 'página de inicio de sesión';
})->name('login');

Route::get('/Estadisticas', EstadisticasControllerRGO::class)->name('estadisticas')
->middleware('auth');
