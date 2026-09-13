<?php

use Illuminate\Support\Facades\Route;
use App\Models\Scorer;

// Home / Stream
Route::get('/', function () {
    return view('welcome');
});

// Página de Goleadores (Consume el modelo Scorer de la BD)
Route::get('/goleadores', function () {
    $scorers = Scorer::orderBy('goals', 'desc')->get();
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