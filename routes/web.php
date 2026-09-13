<?php

use Illuminate\Support\Facades\Route;

// Home / Stream
Route::get('/', function () {
    return view('welcome');
});

// Página de Goleadores (Renderiza la vista con el Top 25 completo)
Route::get('/goleadores', function () {
    return view('scorers');
});

// Página de Podio del Partido
Route::get('/podio', function () {
    return view('podium');
});

// Página de Tablas y Posiciones
Route::get('/tablas', function () {
    return view('tables');
});