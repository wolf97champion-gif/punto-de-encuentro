<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScorerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('scorers')->insert([
            ['name' => 'Martín Palermo', 'nickname' => 'El Titán', 'goals' => 236, 'matches' => 404, 'years' => '1997-2011'],
            ['name' => 'Roberto Cherro', 'nickname' => 'Cabecita de Oro', 'goals' => 223, 'matches' => 305, 'years' => '1926-1938'],
            ['name' => 'Francisco Varallo', 'nickname' => 'Pancho', 'goals' => 194, 'matches' => 222, 'years' => '1931-1939'],
            ['name' => 'Domingo Tarasconi', 'nickname' => 'Tarasca', 'goals' => 192, 'matches' => 236, 'years' => '1922-1932'],
            ['name' => 'Jaime Sarlanga', 'nickname' => 'Pila', 'goals' => 129, 'matches' => 220, 'years' => '1940-1948'],
            ['name' => 'Mario Boyé', 'nickname' => 'El Atómico', 'goals' => 124, 'matches' => 228, 'years' => '1941-1955'],
            ['name' => 'Delfín Benítez Cáceres', 'nickname' => 'Machetero', 'goals' => 114, 'matches' => 176, 'years' => '1932-1938'],
            ['name' => 'Carlos Tévez', 'nickname' => 'El Apache', 'goals' => 94, 'matches' => 279, 'years' => '2001-2021'],
            ['name' => 'Juan Román Riquelme', 'nickname' => 'El Último 10', 'goals' => 92, 'matches' => 388, 'years' => '1996-2014'],
            ['name' => 'Pio Corcuera', 'nickname' => 'Pio', 'goals' => 90, 'matches' => 187, 'years' => '1941-1948'],
        ]);
    }
}