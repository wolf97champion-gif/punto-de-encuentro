<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class StandingsController extends Controller
{
    public function index()
    {
        // Datos de ejemplo estructurados con los grupos y tablas reales de la temporada
        $clausuraA = [
            ['pos' => '1', 'name' => 'Vélez', 'pts' => '17', 'pj' => '9', 'gol' => '12:7', 'dif' => '5', 'g' => '4', 'e' => '5', 'p' => '0', 'ult' => ['E', 'V', 'E', 'E', 'E']],
            ['pos' => '2', 'name' => 'Defensa', 'pts' => '17', 'pj' => '9', 'gol' => '11:9', 'dif' => '2', 'g' => '5', 'e' => '2', 'p' => '2', 'ult' => ['V', 'D', 'V', 'V', 'E']],
            ['pos' => '3', 'name' => 'Gimnasia (M)', 'pts' => '16', 'pj' => '9', 'gol' => '14:9', 'dif' => '5', 'g' => '5', 'e' => '1', 'p' => '3', 'ult' => ['D', 'E', 'V', 'V', 'V']],
            ['pos' => '4', 'name' => 'Instituto', 'pts' => '16', 'pj' => '8', 'gol' => '8:5', 'dif' => '3', 'g' => '5', 'e' => '1', 'p' => '2', 'ult' => ['D', 'V', 'E', 'V', 'V']],
            ['pos' => '5', 'name' => 'Boca Jrs.', 'pts' => '14', 'pj' => '9', 'gol' => '12:11', 'dif' => '1', 'g' => '3', 'e' => '5', 'p' => '1', 'ult' => ['V', 'E', 'V', 'E', 'E']],
            ['pos' => '6', 'name' => 'Unión', 'pts' => '13', 'pj' => '9', 'gol' => '16:14', 'dif' => '2', 'g' => '4', 'e' => '1', 'p' => '4', 'ult' => ['D', 'V', 'V', 'V', 'D']],
            ['pos' => '7', 'name' => "Newell's", 'pts' => '13', 'pj' => '9', 'gol' => '10:8', 'dif' => '2', 'g' => '3', 'e' => '4', 'p' => '2', 'ult' => ['E', 'E', 'E', 'V', 'V']],
            ['pos' => '8', 'name' => 'Independiente', 'pts' => '13', 'pj' => '8', 'gol' => '7:6', 'dif' => '1', 'g' => '4', 'e' => '1', 'p' => '3', 'ult' => ['V', 'D', 'E', 'V', 'D']],
        ];

        $clausuraB = [
            ['pos' => '1', 'name' => 'Gimnasia', 'pts' => '18', 'pj' => '9', 'gol' => '13:12', 'dif' => '1', 'g' => '6', 'e' => '0', 'p' => '3', 'ult' => ['V', 'V', 'D', 'D', 'V']],
            ['pos' => '2', 'name' => 'Argentinos', 'pts' => '17', 'pj' => '9', 'gol' => '12:8', 'dif' => '4', 'g' => '5', 'e' => '2', 'p' => '2', 'ult' => ['E', 'V', 'E', 'D', 'V']],
            ['pos' => '3', 'name' => 'Sarmiento', 'pts' => '16', 'pj' => '9', 'gol' => '16:13', 'dif' => '3', 'g' => '5', 'e' => '1', 'p' => '3', 'ult' => ['E', 'V', 'D', 'V', 'V']],
            ['pos' => '4', 'name' => 'Central', 'pts' => '15', 'pj' => '9', 'gol' => '10:8', 'dif' => '2', 'g' => '4', 'e' => '3', 'p' => '2', 'ult' => ['V', 'E', 'D', 'E', 'V']],
            ['pos' => '5', 'name' => 'Independiente Riv.', 'pts' => '14', 'pj' => '9', 'gol' => '13:13', 'dif' => '0', 'g' => '4', 'e' => '2', 'p' => '3', 'ult' => ['V', 'D', 'V', 'E', 'D']],
            ['pos' => '6', 'name' => 'Belgrano', 'pts' => '13', 'pj' => '9', 'gol' => '9:6', 'dif' => '3', 'g' => '3', 'e' => '4', 'p' => '2', 'ult' => ['E', 'E', 'E', 'D', 'V']],
            ['pos' => '7', 'name' => 'River', 'pts' => '13', 'pj' => '9', 'gol' => '12:10', 'dif' => '2', 'g' => '4', 'e' => '1', 'p' => '4', 'ult' => ['V', 'V', 'V', 'E', 'V']],
        ];

        $tablaAnual = [
            ['pos' => '1', 'name' => 'Independiente Riv.', 'pts' => '48', 'pj' => '25', 'gol' => '42:28', 'dif' => '14', 'g' => '14', 'e' => '6', 'p' => '5'],
            ['pos' => '2', 'name' => 'Argentinos', 'pts' => '46', 'pj' => '25', 'gol' => '29:21', 'dif' => '8', 'g' => '13', 'e' => '7', 'p' => '5'],
            ['pos' => '3', 'name' => 'Vélez', 'pts' => '45', 'pj' => '25', 'gol' => '30:19', 'dif' => '11', 'g' => '11', 'e' => '12', 'p' => '2'],
            ['pos' => '4', 'name' => 'Boca Jrs.', 'pts' => '44', 'pj' => '25', 'gol' => '34:20', 'dif' => '14', 'g' => '11', 'e' => '11', 'p' => '3'],
            ['pos' => '5', 'name' => 'Gimnasia', 'pts' => '44', 'pj' => '25', 'gol' => '32:31', 'dif' => '1', 'g' => '14', 'e' => '2', 'p' => '9'],
        ];

        return view('tablas', compact('clausuraA', 'clausuraB', 'tablaAnual'));
    }
}