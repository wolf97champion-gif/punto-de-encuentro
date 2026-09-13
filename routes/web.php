<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StandingsController;

// Home / Stream
Route::get('/', function () {
    $proximoPartido = [
        'local' => 'São Paulo',
        'visitante' => 'Boca Jrs.',
        'condicion' => 'VISITANTE (Vuelta)',
        'estadio' => 'Morumbi, São Paulo',
        'fecha_hora' => 'Martes 15/09 — 21:30 hs',
        'competencia' => 'CONMEBOL Sudamericana — 4tos de Final',
        'arbitro' => 'Gustavo Tejera (URU)'
    ];

    return view('welcome', compact('proximoPartido'));
});

// Página de Goleadores
Route::get('/goleadores', function () {
    $scorers = collect([
        (object)['position' => 1, 'name' => 'Martín Palermo', 'nickname' => 'El Titán', 'matches' => 404, 'goals' => 236, 'years' => '1997-2011'],
        (object)['position' => 2, 'name' => 'Roberto Cherro', 'nickname' => 'Cabecita de Oro', 'matches' => 305, 'goals' => 223, 'years' => '1926-1938'],
        (object)['position' => 3, 'name' => 'Francisco Varallo', 'nickname' => 'Pancho', 'matches' => 222, 'goals' => 194, 'years' => '1931-1939'],
        (object)['position' => 4, 'name' => 'Domingo Tarasconi', 'nickname' => 'Tarasca', 'matches' => 236, 'goals' => 192, 'years' => '1922-1932'],
        (object)['position' => 5, 'name' => 'Jaime Sarlanga', 'nickname' => 'Piraña', 'matches' => 220, 'goals' => 129, 'years' => '1940-1948'],
        (object)['position' => 6, 'name' => 'Mario Boyé', 'nickname' => 'El Atómico', 'matches' => 228, 'goals' => 123, 'years' => '1941-1955'],
        (object)['position' => 7, 'name' => 'Delfín Benítez Cáceres', 'nickname' => 'El Machetero', 'matches' => 176, 'goals' => 114, 'years' => '1932-1938'],
        (object)['position' => 8, 'name' => 'Pedro Calomino', 'nickname' => 'Calum', 'matches' => 226, 'goals' => 99, 'years' => '1911-1924'],
        (object)['position' => 9, 'name' => 'Pío Corcuera', 'nickname' => '-', 'matches' => 187, 'goals' => 97, 'years' => '1941-1948'],
        (object)['position' => 10, 'name' => 'Carlos Tévez', 'nickname' => 'El Apache', 'matches' => 279, 'goals' => 94, 'years' => '2001-2021'],
        (object)['position' => 11, 'name' => 'Juan Román Riquelme', 'nickname' => 'El Último 10', 'matches' => 388, 'goals' => 92, 'years' => '1996-2014'],
        (object)['position' => 12, 'name' => 'Sergio Martínez', 'nickname' => 'Manteca', 'matches' => 167, 'goals' => 86, 'years' => '1992-1997'],
        (object)['position' => 13, 'name' => 'Guillermo Barros Schelotto', 'nickname' => 'El Melli', 'matches' => 300, 'goals' => 86, 'years' => '1997-2007'],
        (object)['position' => 14, 'name' => 'Alfredo Graciani', 'nickname' => 'El Murciélago', 'matches' => 250, 'goals' => 83, 'years' => '1985-1991'],
        (object)['position' => 15, 'name' => 'Rodrigo Palacio', 'nickname' => 'La Joya', 'matches' => 185, 'goals' => 82, 'years' => '2005-2009'],
        (object)['position' => 16, 'name' => 'Osvaldo Potente', 'nickname' => 'Patota', 'matches' => 195, 'goals' => 81, 'years' => '1971-1980'],
        (object)['position' => 17, 'name' => 'Ángel Clemente Rojas', 'nickname' => 'Rojitas', 'matches' => 222, 'goals' => 79, 'years' => '1963-1971'],
        (object)['position' => 18, 'name' => 'Diego Latorre', 'nickname' => 'Gambetita', 'matches' => 242, 'goals' => 77, 'years' => '1987-1998'],
        (object)['position' => 19, 'name' => 'Paulo Valentim', 'nickname' => '-', 'matches' => 111, 'goals' => 71, 'years' => '1960-1964'],
        (object)['position' => 20, 'name' => 'Darío Benedetto', 'nickname' => 'Pipa', 'matches' => 172, 'goals' => 71, 'years' => '2016-2024'],
        (object)['position' => 21, 'name' => 'Hugo Curioni', 'nickname' => 'Toti', 'matches' => 135, 'goals' => 68, 'years' => '1970-1973'],
        (object)['position' => 22, 'name' => 'Ricardo Gareca', 'nickname' => 'El Tigre', 'matches' => 133, 'goals' => 64, 'years' => '1978-1984'],
        (object)['position' => 23, 'name' => 'Jorge Comas', 'nickname' => 'Comitas', 'matches' => 126, 'goals' => 63, 'years' => '1986-1989'],
        (object)['position' => 24, 'name' => 'Miguel Merentiel', 'nickname' => 'La Bestia', 'matches' => 178, 'goals' => 61, 'years' => '2023-Act.'],
        (object)['position' => 25, 'name' => 'Alfredo Rojas', 'nickname' => 'El Tanque', 'matches' => 124, 'goals' => 56, 'years' => '1965-1968'],
    ]);

    return view('scorers', compact('scorers'));
});

// Página de Podio del Partido
Route::get('/podio', function () {
    return view('podium');
});

// Guardar los 3 votos seleccionados
Route::post('/podio/votar', function (Request $request) {
    $votes = $request->input('votes');
    
    if (is_array($votes)) {
        foreach ($votes as $vote) {
            Vote::create([
                'player_name' => $vote['name'],
                'position' => $vote['position']
            ]);
        }
    }

    return response()->json(['status' => 'success']);
});

// Página de Tablas y Posiciones (Consumiendo el Web Scraper)
Route::get('/tablas', [StandingsController::class, 'index']);

// Panel Admin Dinámico
Route::get('/admin', function () {
    $results = Vote::select('player_name',
        DB::raw('SUM(CASE WHEN position = 1 THEN 1 ELSE 0 END) as v1'),
        DB::raw('SUM(CASE WHEN position = 2 THEN 1 ELSE 0 END) as v2'),
        DB::raw('SUM(CASE WHEN position = 3 THEN 1 ELSE 0 END) as v3'),
        DB::raw('SUM(CASE WHEN position = 1 THEN 3 WHEN position = 2 THEN 2 WHEN position = 3 THEN 1 ELSE 0 END) as points')
    )
    ->groupBy('player_name')
    ->orderByDesc('points')
    ->get();

    $totalSubmissions = Vote::count() / 3;

    return view('admin', compact('results', 'totalSubmissions'));
});

// Reiniciar la Votación Completa
Route::post('/admin/reset', function () {
    Vote::truncate();
    return redirect('/admin');
});

// Página Quién Soy / Sobre Mí (Agregada sin romper nada)
Route::get('/quien-soy', function () {
    return view('quienes-somos');
});