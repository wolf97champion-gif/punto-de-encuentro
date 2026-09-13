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
        .border-boca-yellow { border-color: #f7b32b; }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-boca-blue border-b-4 border-boca-yellow shadow-lg w-full sticky top-0 z-50">
        <div class="max-w-[1600px] mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-full text-xl shadow">PE</div>
                <div>
                    <h1 class="text-2xl font-extrabold tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></h1>
                    <p class="text-[10px] text-gray-300 font-medium">La web de la comunidad xeneize</p>
                </div>
            </a>
            <nav class="space-x-8 hidden md:flex font-semibold text-sm uppercase tracking-wide">
                <a href="/" class="hover:text-boca-yellow transition">Inicio / Live</a>
                <a href="/goleadores" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="/podio" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="/tablas" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Tablas & Posiciones</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-[1200px] w-full mx-auto px-4 py-8 space-y-8">
        
        <!-- Header de Sección -->
        <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 shadow-xl flex justify-between items-center flex-wrap gap-4">
            <div>
                <h2 class="text-3xl font-black text-white uppercase tracking-wide flex items-center gap-3">
                    🏆 Tablas de Posiciones Oficiales
                </h2>
                <p class="text-sm text-gray-400 mt-1">Seguimiento detallado de Clausura, Apertura, Tabla Anual y Promedios.</p>
            </div>
            <!-- Botones de Navegación de Tablas -->
            <div class="flex gap-2 bg-gray-900 p-1.5 rounded-xl border border-gray-700">
                <button onclick="switchTab('clausura')" id="btn-clausura" class="px-4 py-2 text-xs font-bold uppercase rounded-lg bg-boca-yellow text-boca-blue transition shadow">Clausura</button>
                <button onclick="switchTab('anual')" id="btn-anual" class="px-4 py-2 text-xs font-bold uppercase rounded-lg text-gray-300 hover:text-white transition">Tabla Anual</button>
            </div>
        </div>

        <!-- CONTENEDOR CLAUSURA (Grupos A y B) -->
        <div id="tab-clausura" class="space-y-6">
            <h3 class="text-xl font-black text-white uppercase tracking-wider text-center border-b border-gray-700 pb-2">Torneo Clausura</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- GRUPO A -->
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden shadow-2xl">
                    <div class="bg-gray-950 px-4 py-3 border-b border-gray-700 flex justify-between items-center">
                        <span class="font-black text-sm uppercase tracking-wide text-boca-yellow">Grupo A</span>
                        <span class="bg-red-900/60 text-red-300 text-[10px] font-bold px-2 py-0.5 rounded border border-red-700">🔴 VIVO</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-gray-900/80 text-gray-400 uppercase text-[10px] border-b border-gray-700">
                                    <th class="py-2.5 px-3 text-center w-10">#</th>
                                    <th class="py-2.5 px-3">Equipos</th>
                                    <th class="py-2.5 px-2 text-center">PTS</th>
                                    <th class="py-2.5 px-2 text-center">J</th>
                                    <th class="py-2.5 px-2 text-center">Gol</th>
                                    <th class="py-2.5 px-2 text-center">+/-</th>
                                    <th class="py-2.5 px-2 text-center">Últimas</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700/50">
                                @foreach($clausuraA as $team)
                                    @php $isBoca = str_contains(strtolower($team['name']), 'boca'); @endphp
                                    <tr class="{{ $isBoca ? 'bg-boca-blue/60 font-bold border-l-4 border-l-boca-yellow' : 'hover:bg-gray-700/30' }}">
                                        <td class="py-2.5 px-3 text-center font-black {{ $team['pos'] <= 8 ? 'text-cyan-400' : 'text-gray-400' }}">{{ $team['pos'] }}</td>
                                        <td class="py-2.5 px-3 font-bold {{ $isBoca ? 'text-white text-sm' : 'text-gray-200' }}">
                                            {{ $team['name'] }} {!! $isBoca ? '⭐' : '' !!}
                                        </td>
                                        <td class="py-2.5 px-2 text-center font-black text-white">{{ $team['pts'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['pj'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['gol'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['dif'] }}</td>
                                        <td class="py-2.5 px-2 text-center">
                                            <div class="flex justify-center gap-0.5">
                                                @foreach($team['ult'] as $res)
                                                    @php
                                                        $bgRes = $res == 'V' ? 'bg-green-600 text-white' : ($res == 'E' ? 'bg-yellow-500 text-gray-950' : 'bg-red-600 text-white');
                                                    @endphp
                                                    <span class="w-4 h-4 rounded-[3px] text-[9px] font-black flex items-center justify-center {{ $bgRes }}">{{ $res }}</span>
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-gray-900 px-3 py-2 text-[11px] text-cyan-400 flex items-center gap-2 border-t border-gray-700">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 inline-block"><span></span> Octavos de Final
                    </div>
                </div>

                <!-- GRUPO B (Estructura similar) -->
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden shadow-2xl">
                    <div class="bg-gray-950 px-4 py-3 border-b border-gray-700 flex justify-between items-center">
                        <span class="font-black text-sm uppercase tracking-wide text-boca-yellow">Grupo B</span>
                        <span class="bg-red-900/60 text-red-300 text-[10px] font-bold px-2 py-0.5 rounded border border-red-700">🔴 VIVO</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-gray-900/80 text-gray-400 uppercase text-[10px] border-b border-gray-700">
                                    <th class="py-2.5 px-3 text-center w-10">#</th>
                                    <th class="py-2.5 px-3">Equipos</th>
                                    <th class="py-2.5 px-2 text-center">PTS</th>
                                    <th class="py-2.5 px-2 text-center">J</th>
                                    <th class="py-2.5 px-2 text-center">Gol</th>
                                    <th class="py-2.5 px-2 text-center">+/-</th>
                                    <th class="py-2.5 px-2 text-center">Últimas</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700/50">
                                @foreach($clausuraB as $team)
                                    <tr class="hover:bg-gray-700/30">
                                        <td class="py-2.5 px-3 text-center font-black text-cyan-400">{{ $team['pos'] }}</td>
                                        <td class="py-2.5 px-3 font-bold text-gray-200">{{ $team['name'] }}</td>
                                        <td class="py-2.5 px-2 text-center font-black text-white">{{ $team['pts'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['pj'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['gol'] }}</td>
                                        <td class="py-2.5 px-2 text-center text-gray-300">{{ $team['dif'] }}</td>
                                        <td class="py-2.5 px-2 text-center">
                                            <div class="flex justify-center gap-0.5">
                                                @foreach($team['ult'] as $res)
                                                    @php
                                                        $bgRes = $res == 'V' ? 'bg-green-600 text-white' : ($res == 'E' ? 'bg-yellow-500 text-gray-950' : 'bg-red-600 text-white');
                                                    @endphp
                                                    <span class="w-4 h-4 rounded-[3px] text-[9px] font-black flex items-center justify-center {{ $bgRes }}">{{ $res }}</span>
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-gray-900 px-3 py-2 text-[11px] text-cyan-400 flex items-center gap-2 border-t border-gray-700">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 inline-block"></span> Octavos de Final
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENEDOR TABLA ANUAL -->
        <div id="tab-anual" class="space-y-6 hidden">
            <h3 class="text-xl font-black text-white uppercase tracking-wider text-center border-b border-gray-700 pb-2">Tabla Anual General</h3>
            
            <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden shadow-2xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-gray-950 text-gray-400 uppercase text-[10px] border-b border-gray-700">
                                <th class="py-3 px-4 text-center w-12">#</th>
                                <th class="py-3 px-4">Equipos</th>
                                <th class="py-3 px-2 text-center">PTS</th>
                                <th class="py-3 px-2 text-center">J</th>
                                <th class="py-3 px-2 text-center">Gol</th>
                                <th class="py-3 px-2 text-center">+/-</th>
                                <th class="py-3 px-2 text-center">G</th>
                                <th class="py-3 px-2 text-center">E</th>
                                <th class="py-3 px-2 text-center">P</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/50">
                            @foreach($tablaAnual as $team)
                                @php $isBoca = str_contains(strtolower($team['name']), 'boca'); @endphp
                                <tr class="{{ $isBoca ? 'bg-boca-blue/60 font-bold border-l-4 border-l-boca-yellow' : 'hover:bg-gray-700/30' }}">
                                    <td class="py-3 px-4 text-center font-black {{ $team['pos'] == 1 ? 'bg-green-600 text-white' : ($team['pos'] <= 3 ? 'bg-yellow-500 text-gray-950' : 'text-gray-300') }}">{{ $team['pos'] }}</td>
                                    <td class="py-3 px-4 font-bold {{ $isBoca ? 'text-white text-sm' : 'text-gray-200' }}">{{ $team['name'] }} {!! $isBoca ? '⭐' : '' !!}</td>
                                    <td class="py-3 px-2 text-center font-black text-white text-sm">{{ $team['pts'] }}</td>
                                    <td class="py-3 px-2 text-center text-gray-300">{{ $team['pj'] }}</td>
                                    <td class="py-3 px-2 text-center text-gray-300">{{ $team['gol'] }}</td>
                                    <td class="py-3 px-2 text-center text-gray-300">{{ $team['dif'] }}</td>
                                    <td class="py-3 px-2 text-center text-green-400 font-semibold">{{ $team['g'] }}</td>
                                    <td class="py-3 px-2 text-center text-yellow-400 font-semibold">{{ $team['e'] }}</td>
                                    <td class="py-3 px-2 text-center text-red-400 font-semibold">{{ $team['p'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- Script para cambiar entre pestañas -->
    <script>
        function tab(tabName) {
            document.getElementById('tab-clausura').classList.add('hidden');
            document.getElementById('tab-anual').classList.add('hidden');
            
            document.getElementById('btn-clausura').className = "px-4 py-2 text-xs font-bold uppercase rounded-lg text-gray-300 hover:text-white transition";
            document.getElementById('btn-anual').className = "px-4 py-2 text-xs font-bold uppercase rounded-lg text-gray-300 hover:text-white transition";

            if(tabName === 'clausura') {
                document.getElementById('tab-clausura').classList.remove('hidden');
                document.getElementById('btn-clausura').className = "px-4 py-2 text-xs font-bold uppercase rounded-lg bg-boca-yellow text-boca-blue transition shadow";
            } else {
                document.getElementById('tab-anual').classList.remove('hidden');
                document.getElementById('btn-anual').className = "px-4 py-2 text-xs font-bold uppercase rounded-lg bg-boca-yellow text-boca-blue transition shadow";
            }
        }
        window.switchTab = tab;
    </script>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full mt-10">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>
</body>
</html>