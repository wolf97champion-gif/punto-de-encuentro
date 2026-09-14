<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas y Posiciones - Punto de Encuentro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-boca-blue { background-color: #001f54; }
        .bg-boca-yellow { background-color: #f7b32b; }
        .text-boca-yellow { color: #f7b32b; }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Header / Navbar -->
    <header class="bg-boca-blue border-b-4 border-boca-yellow shadow-lg w-full sticky top-0 z-50">
        <div class="max-w-[1600px] mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-full text-xl shadow">PE</div>
                <div>
                    <h1 class="text-2xl font-extrabold tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></h1>
                    <p class="text-[10px] text-gray-300 font-medium">La web de la comunidad xeneize</p>
                </div>
            </a>
            <nav class="space-x-8 hidden md:flex font-semibold text-sm uppercase tracking-wide">
                <a href="{{ url('/') }}" class="hover:text-boca-yellow transition">Inicio / Live</a>
                <a href="{{ url('/goleadores') }}" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="{{ url('/podio') }}" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="{{ url('/tablas') }}" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Tablas & Posiciones</a>
                <a href="{{ url('/quien-soy') }}" class="hover:text-boca-yellow transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow max-w-[1550px] w-full mx-auto px-6 py-8">
        
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-black text-white uppercase tracking-wider bg-emerald-900/60 py-2.5 px-6 rounded-xl border border-emerald-700 inline-block shadow-lg">
                🏆 TABLAS DE POSICIONES OFICIALES
            </h2>
            <p class="text-xs text-gray-400 mt-2 font-medium">Datos actualizados directamente desde la base de datos del torneo.</p>
        </div>

        <!-- Grilla de 2 columnas para Grupo A y Grupo B -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
            
            <!-- GRUPO A -->
            <div class="bg-gray-950 rounded-xl shadow-2xl border border-emerald-800/60 overflow-hidden flex flex-col">
                <div class="bg-emerald-900/80 px-5 py-3.5 border-b border-emerald-800 flex items-center justify-between">
                    <h3 class="text-lg font-black text-white uppercase tracking-wider">📁 GRUPO A</h3>
                </div>
                
                <div class="overflow-x-auto flex-grow">
                    <table class="w-full text-left text-sm text-gray-300">
                        <thead class="bg-gray-900 text-gray-400 uppercase text-xs border-b border-gray-800">
                            <tr>
                                <th class="py-2.5 px-3 w-10 text-center">#</th>
                                <th class="py-2.5 px-3">Equipos</th>
                                <th class="py-2.5 px-2 text-center font-bold text-white">PTS</th>
                                <th class="py-2.5 px-2 text-center">J</th>
                                <th class="py-2.5 px-2 text-center">GOL</th>
                                <th class="py-2.5 px-2 text-center">+/-</th>
                                <th class="py-2.5 px-3 text-center">ÚLTIMAS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-900">
                            @foreach($grupoA as $index => $row)
                                <tr class="{{ $row->equipo == 'Boca Jrs.' ? 'bg-blue-900/50 font-bold text-white' : 'hover:bg-gray-900/40' }}">
                                    <td class="py-2.5 px-3 text-center font-semibold text-gray-400">#{{ $index + 1 }}</td>
                                    <td class="py-2.5 px-3 flex items-center gap-2">
                                        <span>{{ $row->equipo }}</span> @if($row->equipo == 'Boca Jrs.') ⭐ @endif
                                    </td>
                                    <td class="py-2.5 px-2 text-center text-white font-black bg-gray-900/50">{{ $row->puntos }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->jugados }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ ($row->goles_a_favor - $row->goles_en_contra) > 0 ? '+'.($row->goles_a_favor - $row->goles_en_contra) : ($row->goles_a_favor - $row->goles_en_contra) }}</td>
                                    <td class="py-2.5 px-3 text-center">
                                        <div class="flex justify-center gap-1">
                                            @foreach(explode(',', $row->ultimas) as $letra)
                                                <span class="w-5 h-5 text-[10px] font-black rounded flex items-center justify-center 
                                                    {{ trim($letra) == 'V' ? 'bg-emerald-600 text-white' : (trim($letra) == 'E' ? 'bg-amber-500 text-black' : 'bg-red-600 text-white') }}">
                                                    {{ trim($letra) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="bg-gray-900 px-4 py-3 border-t border-gray-800 flex items-center gap-2 text-xs">
                    <span class="w-3 h-3 rounded-full bg-cyan-500 inline-block"></span>
                    <span class="text-gray-300 font-medium">Clasificación a Octavos de Final</span>
                </div>
            </div>

            <!-- GRUPO B -->
            <div class="bg-gray-950 rounded-xl shadow-2xl border border-emerald-800/60 overflow-hidden flex flex-col">
                <div class="bg-emerald-900/80 px-5 py-3.5 border-b border-emerald-800 flex items-center justify-between">
                    <h3 class="text-lg font-black text-white uppercase tracking-wider">📁 GRUPO B</h3>
                </div>
                
                <div class="overflow-x-auto flex-grow">
                    <table class="w-full text-left text-sm text-gray-300">
                        <thead class="bg-gray-900 text-gray-400 uppercase text-xs border-b border-gray-800">
                            <tr>
                                <th class="py-2.5 px-3 w-10 text-center">#</th>
                                <th class="py-2.5 px-3">Equipos</th>
                                <th class="py-2.5 px-2 text-center font-bold text-white">PTS</th>
                                <th class="py-2.5 px-2 text-center">J</th>
                                <th class="py-2.5 px-2 text-center">GOL</th>
                                <th class="py-2.5 px-2 text-center">+/-</th>
                                <th class="py-2.5 px-3 text-center">ÚLTIMAS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-900">
                            @foreach($grupoB as $index => $row)
                                <tr class="hover:bg-gray-900/40">
                                    <td class="py-2.5 px-3 text-center font-semibold text-gray-400">#{{ $index + 1 }}</td>
                                    <td class="py-2.5 px-3">{{ $row->equipo }}</td>
                                    <td class="py-2.5 px-2 text-center text-white font-black bg-gray-900/50">{{ $row->puntos }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->jugados }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    <td class="py-2.5 px-2 text-center text-gray-400">{{ ($row->goles_a_favor - $row->goles_en_contra) > 0 ? '+'.($row->goles_a_favor - $row->goles_en_contra) : ($row->goles_a_favor - $row->goles_en_contra) }}</td>
                                    <td class="py-2.5 px-3 text-center">
                                        <div class="flex justify-center gap-1">
                                            @foreach(explode(',', $row->ultimas) as $letra)
                                                <span class="w-5 h-5 text-[10px] font-black rounded flex items-center justify-center 
                                                    {{ trim($letra) == 'V' ? 'bg-emerald-600 text-white' : (trim($letra) == 'E' ? 'bg-amber-500 text-black' : 'bg-red-600 text-white') }}">
                                                    {{ trim($letra) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="bg-gray-900 px-4 py-3 border-t border-gray-800 flex items-center gap-2 text-xs">
                    <span class="w-3 h-3 rounded-full bg-cyan-500 inline-block"></span>
                    <span class="text-gray-300 font-medium">Clasificación a Octavos de Final</span>
                </div>
            </div>

        </div>
        
    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full mt-10">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>