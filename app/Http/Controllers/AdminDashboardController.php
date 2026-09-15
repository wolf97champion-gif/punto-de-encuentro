<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class AdminDashboardController extends Controller
{
    // 0. Cargar la vista del Panel de Administración con datos reales
    public function index()
    {
        $totalRegistros = DB::table('votes')->count();
        $totalVotantes = floor($totalRegistros / 3);

        $ranking = DB::table('votes')
            ->select('jugador_nombre', DB::raw('SUM(puntos) as total_puntos'))
            ->groupBy('jugador_nombre')
            ->orderBy('total_puntos', 'DESC')
            ->get();

        return view('admin', [
            'totalVotantes' => $totalVotantes,
            'mvp' => $ranking->first() ?? (object)['jugador_nombre' => 'Sin votos', 'total_puntos' => 0],
            'ranking' => $ranking
        ]);
    }

    // 1. Recibir y guardar el voto desde la página de podio
    public function registrarVoto(Request $request)
    {
        $votos = $request->input('votos');

        if (!$votos || !is_array($votos) || count($votos) !== 3) {
            return response()->json([
                'status' => 'error', 
                'message' => 'Debes seleccionar exactamente 3 jugadores para el podio.'
            ], 400);
        }

        try {
            DB::transaction(function () use ($votos) {
                foreach ($votos as $index => $jugador) {
                    $puesto = $index + 1;
                    $puntos = (4 - $puesto); // 1°=3pts, 2°=2pts, 3°=1pt

                    DB::table('votes')->insert([
                        'jugador_nombre' => $jugador['nombre'] ?? 'Desconocido',
                        'puesto'         => $puesto,
                        'puntos'         => $puntos,
                        'created_at'     => now(),
                        'updated_at'     => now(),
                    ]);
                }
            });

            return response()->json([
                'status' => 'success', 
                'message' => '¡Podio registrado con éxito!'
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'error', 
                'message' => 'Hubo un error al guardar el podio en la base de datos.'
            ], 500);
        }
    }

    // 2. Traer los datos en JSON (por si usás fetch desde el front)
    public function obtenerEstadisticas()
    {
        $totalRegistros = DB::table('votes')->count();
        $totalVotantes = floor($totalRegistros / 3);

        $ranking = DB::table('votes')
            ->select('jugador_nombre', DB::raw('SUM(puntos) as total_puntos'))
            ->groupBy('jugador_nombre')
            ->orderBy('total_puntos', 'DESC')
            ->get();

        return response()->json([
            'total_votantes' => $totalVotantes,
            'mvp' => $ranking->first() ?? ['jugador_nombre' => 'Sin votos', 'total_puntos' => 0],
            'podio_global' => [
                $ranking->get(0) ?? ['jugador_nombre' => '-', 'total_puntos' => 0],
                $ranking->get(1) ?? ['jugador_nombre' => '-', 'total_puntos' => 0],
                $ranking->get(2) ?? ['jugador_nombre' => '-', 'total_puntos' => 0],
            ]
        ]);
    }
}