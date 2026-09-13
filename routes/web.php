<?php

use Illuminate\Support\Facades\Route;
use App\Models\Scorer;

// Home / Stream
Route::get('/', function () {
    return view('welcome');
});

// Página de Goleadores (Con respaldo automático si la BD no responde)
Route::get('/goleadores', function () {
    try {
        $scorers = Scorer::orderBy('goals', 'desc')->get();
    } catch (\Exception $e) {
        $scorers = collect();
    }

    if ($scorers->isEmpty()) {
        $scorers = collect([
            (object)['position' => 1, 'name' => 'Martín Palermo', 'nickname' => 'El Titán', 'matches' => 404, 'goals' => 236, 'years' => '1997-2011'],
            (object)['position' => 2, 'name' => 'Roberto Cherro', 'nickname' => 'Cabecita de Oro', 'matches' => 300, 'goals' => 218, 'years' => '1926-1938'],
            (object)['position' => 3, 'name' => 'Francisco Varallo', 'nickname' => 'Pancho', 'matches' => 222, 'goals' => 194, 'years' => '1931-1939'],
            (object)['position' => 4, 'name' => 'Domingo Tarasconi', 'nickname' => 'Tarasca', 'matches' => 236, 'goals' => 192, 'years' => '1922-1932'],
            (object)['position' => 5, 'name' => 'Jaime Sarlanga', 'nickname' => 'Piraña', 'matches' => 220, 'goals' => 129, 'years' => '1940-1948'],
            (object)['position' => 6, 'name' => 'Carlos Tevez', 'nickname' => 'El Apache', 'matches' => 279, 'goals' => 94, 'years' => '2001-2021'],
            (object)['position' => 7, 'name' => 'Juan Román Riquelme', 'nickname' => 'El Último 10', 'matches' => 388, 'goals' => 92, 'years' => '1996-2014'],
        ]);
    }

    return view('scorers', compact('scorers'));
});

// Página de Podio del Partido
Route::get('/podio', function () {
    return view('podium');
});

// Página de Tablas y Posiciones
Route::get('/tablas', function () {
    return view('tables');
});