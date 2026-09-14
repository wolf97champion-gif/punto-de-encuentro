<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standing;
use Exception;

class StandingSeeder extends Seeder
{
    public function run(): void
    {
        try {
            Standing::truncate();

            $equipos = [
                // GRUPO A (15 equipos)
                ['grupo' => 'A', 'equipo' => 'Vélez', 'puntos' => 17, 'jugados' => 9, 'ganados' => 4, 'empatados' => 5, 'perdidos' => 0, 'goles_a_favor' => 12, 'goles_en_contra' => 7, 'ultimas' => 'E,V,E,E,E'],
                ['grupo' => 'A', 'equipo' => 'Defensa', 'puntos' => 17, 'jugados' => 9, 'ganados' => 5, 'empatados' => 2, 'perdidos' => 2, 'goles_a_favor' => 11, 'goles_en_contra' => 9, 'ultimas' => 'V,D,V,V,E'],
                ['grupo' => 'A', 'equipo' => 'Gimnasia (M)', 'puntos' => 16, 'jugados' => 9, 'ganados' => 5, 'empatados' => 1, 'perdidos' => 3, 'goles_a_favor' => 14, 'goles_en_contra' => 9, 'ultimas' => 'D,E,V,V,V'],
                ['grupo' => 'A', 'equipo' => 'Instituto', 'puntos' => 16, 'jugados' => 8, 'ganados' => 5, 'empatados' => 1, 'perdidos' => 2, 'goles_a_favor' => 8, 'goles_en_contra' => 5, 'ultimas' => 'D,V,E,V,V'],
                ['grupo' => 'A', 'equipo' => 'Boca Jrs.', 'puntos' => 14, 'jugados' => 9, 'ganados' => 3, 'empatados' => 5, 'perdidos' => 1, 'goles_a_favor' => 12, 'goles_en_contra' => 11, 'ultimas' => 'V,E,V,E,E'],
                ['grupo' => 'A', 'equipo' => 'Independiente', 'puntos' => 14, 'jugados' => 9, 'ganados' => 4, 'empatados' => 2, 'perdidos' => 3, 'goles_a_favor' => 8, 'goles_en_contra' => 7, 'ultimas' => 'E,V,D,E,V'],
                ['grupo' => 'A', 'equipo' => 'Unión', 'puntos' => 13, 'jugados' => 9, 'ganados' => 4, 'empatados' => 1, 'perdidos' => 4, 'goles_a_favor' => 16, 'goles_en_contra' => 14, 'ultimas' => 'D,V,V,V,D'],
                ['grupo' => 'A', 'equipo' => "Newell's", 'puntos' => 13, 'jugados' => 9, 'ganados' => 3, 'empatados' => 4, 'perdidos' => 2, 'goles_a_favor' => 10, 'goles_en_contra' => 8, 'ultimas' => 'E,E,E,V,V'],
                ['grupo' => 'A', 'equipo' => 'San Lorenzo', 'puntos' => 11, 'jugados' => 9, 'ganados' => 3, 'empatados' => 2, 'perdidos' => 4, 'goles_a_favor' => 4, 'goles_en_contra' => 6, 'ultimas' => 'E,V,D,E,V'],
                ['grupo' => 'A', 'equipo' => 'Estudiantes', 'puntos' => 10, 'jugados' => 9, 'ganados' => 3, 'empatados' => 1, 'perdidos' => 5, 'goles_a_favor' => 9, 'goles_en_contra' => 9, 'ultimas' => 'V,D,E,D,V'],
                ['grupo' => 'A', 'equipo' => 'Lanús', 'puntos' => 10, 'jugados' => 8, 'ganados' => 3, 'empatados' => 1, 'perdidos' => 4, 'goles_a_favor' => 8, 'goles_en_contra' => 8, 'ultimas' => 'V,D,E,D,V'],
                ['grupo' => 'A', 'equipo' => 'Riestra', 'puntos' => 9, 'jugados' => 8, 'ganados' => 2, 'empatados' => 3, 'perdidos' => 3, 'goles_a_favor' => 8, 'goles_en_contra' => 7, 'ultimas' => 'E,E,E,D,V'],
                ['grupo' => 'A', 'equipo' => 'Platense', 'puntos' => 9, 'jugados' => 9, 'ganados' => 2, 'empatados' => 3, 'perdidos' => 4, 'goles_a_favor' => 9, 'goles_en_contra' => 14, 'ultimas' => 'D,E,D,V,E'],
                ['grupo' => 'A', 'equipo' => 'Talleres', 'puntos' => 8, 'jugados' => 9, 'ganados' => 2, 'empatados' => 2, 'perdidos' => 5, 'goles_a_favor' => 10, 'goles_en_contra' => 14, 'ultimas' => 'V,D,E,E,D'],
                ['grupo' => 'A', 'equipo' => 'Central Córdoba', 'puntos' => 7, 'jugados' => 9, 'ganados' => 2, 'empatados' => 1, 'perdidos' => 6, 'goles_a_favor' => 5, 'goles_en_contra' => 11, 'ultimas' => 'D,D,E,D,D'],

                // GRUPO B (15 equipos)
                ['grupo' => 'B', 'equipo' => 'Argentinos', 'puntos' => 18, 'jugados' => 9, 'ganados' => 5, 'empatados' => 3, 'perdidos' => 1, 'goles_a_favor' => 13, 'goles_en_contra' => 8, 'ultimas' => 'E,E,V,E,D'],
                ['grupo' => 'B', 'equipo' => 'Sarmiento', 'puntos' => 16, 'jugados' => 9, 'ganados' => 5, 'empatados' => 1, 'perdidos' => 3, 'goles_a_favor' => 16, 'goles_en_contra' => 13, 'ultimas' => 'E,V,D,V,V'],
                ['grupo' => 'B', 'equipo' => 'Gimnasia', 'puntos' => 16, 'jugados' => 9, 'ganados' => 5, 'empatados' => 1, 'perdidos' => 3, 'goles_a_favor' => 13, 'goles_en_contra' => 13, 'ultimas' => 'E,V,V,D,D'],
                ['grupo' => 'B', 'equipo' => 'Central', 'puntos' => 15, 'jugados' => 9, 'ganados' => 4, 'empatados' => 3, 'perdidos' => 2, 'goles_a_favor' => 10, 'goles_en_contra' => 8, 'ultimas' => 'V,E,D,E,V'],
                ['grupo' => 'B', 'equipo' => 'Independiente Riv.', 'puntos' => 14, 'jugados' => 9, 'ganados' => 4, 'empatados' => 2, 'perdidos' => 3, 'goles_a_favor' => 13, 'goles_en_contra' => 13, 'ultimas' => 'V,D,V,E,D'],
                ['grupo' => 'B', 'equipo' => 'Belgrano', 'puntos' => 13, 'jugados' => 9, 'ganados' => 3, 'empatados' => 4, 'perdidos' => 2, 'goles_a_favor' => 9, 'goles_en_contra' => 6, 'ultimas' => 'E,E,E,D,V'],
                ['grupo' => 'B', 'equipo' => 'River', 'puntos' => 13, 'jugados' => 9, 'ganados' => 4, 'empatados' => 1, 'perdidos' => 4, 'goles_a_favor' => 12, 'goles_en_contra' => 10, 'ultimas' => 'V,V,V,E,V'],
                ['grupo' => 'B', 'equipo' => 'Atl. Tucumán', 'puntos' => 13, 'jugados' => 9, 'ganados' => 2, 'empatados' => 3, 'perdidos' => 4, 'goles_a_favor' => 7, 'goles_en_contra' => 5, 'ultimas' => 'D,V,E,E,V'],
                ['grupo' => 'B', 'equipo' => 'Huracán', 'puntos' => 13, 'jugados' => 9, 'ganados' => 1, 'empatados' => 3, 'perdidos' => 4, 'goles_a_favor' => 8, 'goles_en_contra' => 7, 'ultimas' => 'V,E,E,E,D'],
                ['grupo' => 'B', 'equipo' => 'Tigre', 'puntos' => 12, 'jugados' => 9, 'ganados' => 1, 'empatados' => 3, 'perdidos' => 3, 'goles_a_favor' => 7, 'goles_en_contra' => 6, 'ultimas' => 'D,D,E,V,E'],
                ['grupo' => 'B', 'equipo' => 'Barracas', 'puntos' => 11, 'jugados' => 8, 'ganados' => 3, 'empatados' => 2, 'perdidos' => 3, 'goles_a_favor' => 4, 'goles_en_contra' => 5, 'ultimas' => 'E,E,D,D,D'],
                ['grupo' => 'B', 'equipo' => 'Banfield', 'puntos' => 7, 'jugados' => 8, 'ganados' => 2, 'empatados' => 1, 'perdidos' => 5, 'goles_a_favor' => 8, 'goles_en_contra' => 13, 'ultimas' => 'D,D,D,V,D'],
                ['grupo' => 'B', 'equipo' => 'Estudiantes RC', 'puntos' => 6, 'jugados' => 8, 'ganados' => 1, 'empatados' => 3, 'perdidos' => 4, 'goles_a_favor' => 3, 'goles_en_contra' => 9, 'ultimas' => 'D,E,E,D,D'],
                ['grupo' => 'B', 'equipo' => 'Aldosivi', 'puntos' => 5, 'jugados' => 9, 'ganados' => 1, 'empatados' => 2, 'perdidos' => 6, 'goles_a_favor' => 11, 'goles_en_contra' => 16, 'ultimas' => 'D,V,D,D,E'],
                ['grupo' => 'B', 'equipo' => 'Racing', 'puntos' => 5, 'jugados' => 9, 'ganados' => 1, 'empatados' => 2, 'perdidos' => 6, 'goles_a_favor' => 8, 'goles_en_contra' => 15, 'ultimas' => 'D,D,D,E,D'],
            ];

            foreach ($equipos as $eq) {
                Standing::create($eq);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}