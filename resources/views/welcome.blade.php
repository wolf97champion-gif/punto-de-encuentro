<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de Encuentro - La web de la comunidad xeneize</title>
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
                <a href="{{ url('/') }}" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Inicio / Live</a>
                <a href="{{ url('/goleadores') }}" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="{{ url('/podio') }}" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="{{ url('/tablas') }}" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
                <a href="{{ url('/quien-soy') }}" class="hover:text-boca-yellow transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow max-w-[1550px] w-full mx-auto px-6 py-8">
        
        <!-- Banner de Próximo Partido -->
        @if(isset($proximoPartido))
        <div class="bg-gradient-to-r from-blue-950 via-blue-900 to-gray-950 border border-blue-700/50 rounded-2xl p-6 mb-8 shadow-2xl flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <span class="bg-boca-yellow text-blue-950 font-black text-xs px-3 py-1 rounded-full uppercase tracking-widest shadow">🔴 EN VIVO / PRÓXIMO PARTIDO</span>
                <h2 class="text-2xl md:text-3xl font-black text-white mt-3">{{ $proximoPartido['local'] }} vs {{ $proximoPartido['visitante'] }}</h2>
                <p class="text-gray-300 text-sm mt-1">🏟️ {{ $proximoPartido['estadio'] }} | 📅 {{ $proximoPartido['fecha_hora'] }}</p>
                <p class="text-xs text-boca-yellow font-semibold mt-1">🏆 {{ $proximoPartido['competencia'] }}</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ url('/podio') }}" class="bg-boca-yellow text-blue-950 font-black px-5 py-2.5 rounded-xl text-sm shadow hover:bg-yellow-400 transition">
                    ⭐ Votar Podio
                </a>
                <a href="{{ url('/tablas') }}" class="bg-gray-800 text-white font-bold px-5 py-2.5 rounded-xl text-sm border border-gray-700 hover:bg-gray-700 transition">
                    Ver Tablas Completas
                </a>
            </div>
        </div>
        @endif

        <!-- Sección de Cumpleañeros (Si hay) -->
        @if(isset($cumpleañeros) && $cumpleañeros->count() > 0)
        <div class="bg-amber-950/40 border border-amber-600/50 rounded-xl p-4 mb-8 text-center shadow-lg">
            <h3 class="text-amber-400 font-extrabold text-sm uppercase tracking-wide">🎂 ¡Hoy cumple años!</h3>
            <div class="flex justify-center gap-4 mt-2 flex-wrap">
                @foreach($cumpleañeros as $c)
                    <span class="bg-amber-900/60 text-white px-3 py-1 rounded-lg text-xs font-bold border border-amber-500/40">
                        🎉 {{ $c->nombre ?? $c->player_name ?? 'Jugador' }}
                    </span>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Grilla de Tablas resumidas en el Home -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
            
            <!-- GRUPO A -->
            <div class="bg-gray-950 rounded-xl shadow-2xl border border-blue-900/60 overflow-hidden flex flex-col">
                <div class="bg-blue-950 px-5 py-3.5 border-b border-blue-900 flex items-center justify-between">
                    <h3 class="text-lg font-black text-white uppercase tracking-wider">📁 GRUPO A</h3>
                    <a href="{{ url('/tablas') }}" class="text-xs text-boca-yellow hover:underline font-bold">Ver completa →</a>
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
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-900">
                            @if(isset($grupoA))
                                @foreach($grupoA->take(5) as $index => $row)
                                    <tr class="{{ $row->equipo == 'Boca Jrs.' ? 'bg-blue-900/50 font-bold text-white' : 'hover:bg-gray-900/40' }}">
                                        <td class="py-2.5 px-3 text-center font-semibold text-gray-400">#{{ $index + 1 }}</td>
                                        <td class="py-2.5 px-3"><span>{{ $row->equipo }}</span> @if($row->equipo == 'Boca Jrs.') ⭐ @endif</td>
                                        <td class="py-2.5 px-2 text-center text-white font-black bg-gray-900/50">{{ $row->puntos }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->jugados }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- GRUPO B -->
            <div class="bg-gray-950 rounded-xl shadow-2xl border border-blue-900/60 overflow-hidden flex flex-col">
                <div class="bg-blue-950 px-5 py-3.5 border-b border-blue-900 flex items-center justify-between">
                    <h3 class="text-lg font-black text-white uppercase tracking-wider">📁 GRUPO B</h3>
                    <a href="{{ url('/tablas') }}" class="text-xs text-boca-yellow hover:underline font-bold">Ver completa →</a>
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
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-900">
                            @if(isset($grupoB))
                                @foreach($grupoB->take(5) as $index => $row)
                                    <tr class="hover:bg-gray-900/40">
                                        <td class="py-2.5 px-3 text-center font-semibold text-gray-400">#{{ $index + 1 }}</td>
                                        <td class="py-2.5 px-3">{{ $row->equipo }}</td>
                                        <td class="py-2.5 px-2 text-center text-white font-black bg-gray-900/50">{{ $row->puntos }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->jugados }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-400">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full mt-10">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>