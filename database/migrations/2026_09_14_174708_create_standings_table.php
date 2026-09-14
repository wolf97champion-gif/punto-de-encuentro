<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->string('grupo'); // Obligatorio para separar Grupo A y B
            $table->string('equipo');
            $table->integer('puntos')->default(0);
            $table->integer('jugados')->default(0);
            $table->integer('ganados')->default(0);
            $table->integer('empatados')->default(0);
            $table->integer('perdidos')->default(0);
            $table->integer('goles_a_favor')->default(0);
            $table->integer('goles_en_contra')->default(0);
            $table->string('ultimas')->nullable(); // Obligatorio para los circulitos de racha
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('standings');
    }
};