<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Punto de Encuentro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-boca-blue { background-color: #001f54; }
        .bg-boca-yellow { background-color: #f7b32b; }
        .text-boca-yellow { color: #f7b32b; }
        .border-boca-yellow { border-color: #f7b32b; }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Header Navbar -->
    <header class="bg-boca-blue border-b-4 border-boca-yellow shadow-lg w-full sticky top-0 z-50">
        <div class="max-w-[1600px] mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-full text-xl shadow">PE</div>
                <div>
                    <h1 class="text-2xl font-extrabold tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></h1>
                    <p class="text-[10px] text-gray-300 font-medium">Panel Admin / Control de Votos</p>
                </div>
            </a>
            <div class="flex items-center gap-3">
                <span class="bg-red-600/30 text-red-400 border border-red-500/50 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider animate-pulse">
                    ● Control En Vivo
                </span>
                <a href="/" class="bg-gray-800 hover:bg-gray-700 text-white text-xs font-bold px-4 py-2 rounded-xl border border-gray-700 transition">
                    Ver Sitio Web
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-8 space-y-8">

        <!-- Encabezado del Dashboard -->
        <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 shadow-xl">
            <div>
                <h2 class="text-2xl font-black text-white uppercase tracking-wide flex items-center gap-2">
                    📊 Dashboard de Votaciones <span class="text-boca-yellow">(Comunidad)</span>
                </h2>
                <p class="text-xs text-gray-400 mt-1">Resumen general y métricas acumuladas de la votación de la hinchada.</p>
            </div>
            
            <div class="flex items-center gap-3">
                <button onclick="location.reload()" class="bg-boca-yellow hover:bg-yellow-400 text-boca-blue font-black px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition shadow">
                    🔄 Actualizar
                </button>
                <form action="/admin/reset" method="POST" onsubmit="return confirm('¿Estás seguro de reiniciar todos los votos del partido?');">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-black px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition shadow">
                        🗑️ Reiniciar Votación
                    </button>
                </form>
            </div>
        </div>

        <!-- Tarjetas de Métricas Rápidas -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-gray-800/90 border border-gray-700 p-6 rounded-2xl shadow-lg">
                <div class="text-xs text-gray-400 font-bold uppercase tracking-wider">Total Hinchas Votantes</div>
                <div class="text-3xl font-black text-white mt-2">{{ floor($totalSubmissions) }}</div>
            </div>
            <div class="bg-gray-800/90 border border-boca-yellow/50 p-6 rounded-2xl shadow-lg">
                <div class="text-xs text-boca-yellow font-bold uppercase tracking-wider">Jugador Más Votado (MVP)</div>
                <div class="text-2xl font-black text-white mt-2">
                    {{ $results->first()->player_name ?? 'Sin votos' }}
                </div>
                <div class="text-[11px] text-gray-400">
                    {{ $results->first()->points ?? 0 }} puntos acumulados
                </div>
            </div>
            <div class="bg-gray-800/90 border border-gray-700 p-6 rounded-2xl shadow-lg">
                <div class="text-xs text-gray-400 font-bold uppercase tracking-wider">Estado del Conteo</div>
                <div class="text-3xl font-black text-green-400 mt-2">ACTIVO</div>
                <div class="text-[11px] text-gray-400">Recibiendo respuestas</div>
            </div>
        </div>

        <!-- Podio Oficial Elección General -->
        <section class="bg-gradient-to-b from-gray-800 to-gray-900 border-2 border-boca-yellow/60 rounded-3xl p-8 shadow-2xl space-y-6">
            <h3 class="text-base font-black text-boca-yellow uppercase tracking-widest text-center">
                🏆 PODIO GENERAL DE LA AUDIENCIA (EN TIEMPO REAL)
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- 1° Puesto -->
                <div class="bg-gray-900/90 border-2 border-boca-yellow p-6 rounded-2xl text-center space-y-2 relative shadow-xl md:-translate-y-2">
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-boca-yellow text-boca-blue text-[10px] font-black px-3 py-0.5 rounded-full uppercase">1.º Puesto Global</span>
                    <div class="text-3xl mt-2">🥇</div>
                    <div class="text-xl font-black text-white">{{ $results[0]->player_name ?? '-' }}</div>
                    <div class="bg-gray-800 py-1.5 px-3 rounded-lg text-xs font-mono text-gray-300 border border-gray-700 mt-2">
                        {{ $results[0]->points ?? 0 }} Puntos Totales
                    </div>
                </div>

                <!-- 2° Puesto -->
                <div class="bg-gray-900/80 border border-blue-400/50 p-6 rounded-2xl text-center space-y-2 shadow-lg">
                    <span class="text-xs text-blue-400 font-black uppercase">2.º Puesto Global</span>
                    <div class="text-3xl">🥈</div>
                    <div class="text-lg font-black text-white">{{ $results[1]->player_name ?? '-' }}</div>
                    <div class="bg-gray-800 py-1.5 px-3 rounded-lg text-xs font-mono text-gray-300 border border-gray-700 mt-2">
                        {{ $results[1]->points ?? 0 }} Puntos Totales
                    </div>
                </div>

                <!-- 3° Puesto -->
                <div class="bg-gray-900/80 border border-orange-400/50 p-6 rounded-2xl text-center space-y-2 shadow-lg">
                    <span class="text-xs text-orange-400 font-black uppercase">3.º Puesto Global</span>
                    <div class="text-3xl">🥉</div>
                    <div class="text-lg font-black text-white">{{ $results[2]->player_name ?? '-' }}</div>
                    <div class="bg-gray-800 py-1.5 px-3 rounded-lg text-xs font-mono text-gray-300 border border-gray-700 mt-2">
                        {{ $results[2]->points ?? 0 }} Puntos Totales
                    </div>
                </div>
            </div>
        </section>

        <!-- Tabla Desglosada de Resultados -->
        <section class="bg-gray-800/90 rounded-2xl border border-gray-700 p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-black text-white uppercase tracking-wider border-b border-gray-700 pb-3">
                📋 Detalle de Votos por Jugador
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-gray-900 text-boca-yellow uppercase font-black border-b border-gray-700">
                        <tr>
                            <th class="p-3">Jugador</th>
                            <th class="p-3 text-center">Votos 1° (🥇)</th>
                            <th class="p-3 text-center">Votos 2° (🥈)</th>
                            <th class="p-3 text-center">Votos 3° (🥉)</th>
                            <th class="p-3 text-right">Puntaje Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700/60 font-medium text-gray-200">
                        @forelse($results as $row)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="p-3 font-bold text-white">{{ $row->player_name }}</td>
                            <td class="p-3 text-center font-bold text-boca-yellow">{{ $row->v1 }}</td>
                            <td class="p-3 text-center text-blue-400">{{ $row->v2 }}</td>
                            <td class="p-3 text-center text-orange-400">{{ $row->v3 }}</td>
                            <td class="p-3 text-right font-black text-boca-yellow text-sm">{{ $row->points }} pts</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-4 text-center text-gray-500">No hay votos registrados todavía.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Panel Privado de Administración</p>
    </footer>

    <script>
        // Actualización automática cada 10 segundos
        setInterval(() => {
            location.reload();
        }, 10000);
    </script>
</body>
</html>