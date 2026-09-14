<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use Illuminate\Http\Request;

class StandingsController extends Controller
{
    public function index()
    {
        $grupoA = Standing::where('grupo', 'A')->orderBy('puntos', 'desc')->get();
        $grupoB = Standing::where('grupo', 'B')->orderBy('puntos', 'desc')->get();

        return view('welcome', compact('grupoA', 'grupoB'));
    }
}