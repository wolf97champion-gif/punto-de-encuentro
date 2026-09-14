<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jugador;

class JugadoresSeeder extends Seeder
{
    public function run(): void
    {
        // Borramos para evitar duplicados si lo corremos de nuevo
        Jugador::truncate();

        // Plantel cargado con fechas reales para que el sistema los detecte automáticamente
        $jugadores = [
            ['nombre' => 'Edinson Cavani', 'posicion' => 'Delantero', 'fecha_nacimiento' => '1987-02-14'],
            ['nombre' => 'Miguel Merentiel', 'posicion' => 'Delantero', 'fecha_nacimiento' => '1996-02-24'],
            ['nombre' => 'Leandro Paredes', 'posicion' => 'Mediocampista', 'fecha_nacimiento' => '1994-06-29'],
            ['nombre' => 'Kevin Zenón', 'posicion' => 'Mediocampista', 'fecha_nacimiento' => '2001-07-30'],
            ['nombre' => 'Leandro Brey', 'posicion' => 'Arquero', 'fecha_nacimiento' => '2002-09-21'],
            ['nombre' => 'Marcos Rojo', 'posicion' => 'Defensor', 'fecha_nacimiento' => '1990-03-20'],
            ['nombre' => 'Sergio Romero', 'posicion' => 'Arquero', 'fecha_nacimiento' => '1987-02-22'],
            ['nombre' => 'Luis Advíncula', 'posicion' => 'Defensor', 'fecha_nacimiento' => '1990-03-02'],
        ];

        foreach ($jugadores as $j) {
            Jugador::create($j);
        }
    }
}