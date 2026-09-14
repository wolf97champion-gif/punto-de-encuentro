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
                <a href="/quien-soy" class="hover:text-boca-yellow transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal: Tablas Dinámicas -->
    <main class="flex-grow max-w-[1600px] w-full mx-auto px-6 py-8">
        
        <div class="text-center mb-8">
            <h2 class="text-3xl font-black text-white">🏆 TABLAS DE POSICIONES OFICIALES</h2>
            <p class="text-gray-400 text-sm mt-1">Datos actualizados directamente desde la base de datos del torneo.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- GRUPO A -->
            <div class="bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-700">
                <h3 class="text-xl font-bold text-yellow-400 mb-4 flex items-center gap-2">
                    📁 GRUPO A
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-300">
                        <thead class="bg-blue-950 text-yellow-400 uppercase text-xs">
                            <tr>
                                <th class="py-3 px-2">Equipos</th>
                                <th class="py-3 px-2 text-center">Pts</th>
                                <th class="py-3 px-2 text-center">J</th>
                                <th class="py-3 px-2 text-center">Gol</th>
                                <th class="py-3 px-2 text-center">+/-</th>
                                <th class="py-3 px-2 text-center">Últimas</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($grupoA as $index => $row)
                                <tr class="{{ $row->equipo == 'Boca Jrs.' ? 'bg-blue-900/60 font-bold text-white border-l-4 border-yellow-400' : 'hover:bg-gray-700/40' }}">
                                    <td class="py-3 px-2 flex items-center gap-2">
                                        <span class="text-xs text-gray-400">#{{ $index + 1 }}</span>
                                        {{ $row->equipo }} @if($row->equipo == 'Boca Jrs.') ⭐ @endif
                                    </td>
                                    <td class="py-3 px-2 text-center text-yellow-400 font-bold">{{ $row->puntos }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->jugados }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->goles_a_favor - $row->goles_en_contra }}</td>
                                    <td class="py-3 px-2 text-center tracking-widest text-xs">{{ $row->ultimas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- GRUPO B -->
            <div class="bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-700">
                <h3 class="text-xl font-bold text-yellow-400 mb-4 flex items-center gap-2">
                    📁 GRUPO B
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-300">
                        <thead class="bg-blue-950 text-yellow-400 uppercase text-xs">
                            <tr>
                                <th class="py-3 px-2">Equipos</th>
                                <th class="py-3 px-2 text-center">Pts</th>
                                <th class="py-3 px-2 text-center">J</th>
                                <th class="py-3 px-2 text-center">Gol</th>
                                <th class="py-3 px-2 text-center">+/-</th>
                                <th class="py-3 px-2 text-center">Últimas</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($grupoB as $index => $row)
                                <tr class="hover:bg-gray-700/40">
                                    <td class="py-3 px-2 flex items-center gap-2">
                                        <span class="text-xs text-gray-400">#{{ $index + 1 }}</span>
                                        {{ $row->equipo }}
                                    </td>
                                    <td class="py-3 px-2 text-center text-yellow-400 font-bold">{{ $row->puntos }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->jugados }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->goles_a_favor }}:{{ $row->goles_en_contra }}</td>
                                    <td class="py-3 px-2 text-center">{{ $row->goles_a_favor - $row->goles_en_contra }}</td>
                                    <td class="py-3 px-2 text-center tracking-widest text-xs">{{ $row->ultimas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>