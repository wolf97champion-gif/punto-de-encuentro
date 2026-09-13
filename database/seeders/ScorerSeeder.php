<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scorers', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->integer('matches');
            $table->integer('goals');
            $table->string('years');
            $table->timestamps();
        });

        // Carga automática de datos iniciales
        DB::table('scorers')->insert([
            ['position' => 1, 'name' => 'Martín Palermo', 'nickname' => 'El Titán', 'matches' => 404, 'goals' => 236, 'years' => '1997-2011'],
            ['position' => 2, 'name' => 'Roberto Cherro', 'nickname' => 'Cabecita de Oro', 'matches' => 300, 'goals' => 218, 'years' => '1926-1938'],
            ['position' => 3, 'name' => 'Francisco Varallo', 'nickname' => 'Pancho', 'matches' => 222, 'goals' => 194, 'years' => '1931-1939'],
            ['position' => 4, 'name' => 'Domingo Tarasconi', 'nickname' => 'Tarasca', 'matches' => 236, 'goals' => 192, 'years' => '1922-1932'],
            ['position' => 5, 'name' => 'Jaime Sarlanga', 'nickname' => 'Piraña', 'matches' => 220, 'goals' => 129, 'years' => '1940-1948'],
            ['position' => 6, 'name' => 'Carlos Tevez', 'nickname' => 'El Apache', 'matches' => 279, 'goals' => 94, 'years' => '2001-2021'],
            ['position' => 7, 'name' => 'Juan Román Riquelme', 'nickname' => 'El Último 10', 'matches' => 388, 'goals' => 92, 'years' => '1996-2014'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('scorers');
    }
};