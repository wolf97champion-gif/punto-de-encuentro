<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goleadores Históricos - Punto de Encuentro</title>
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
                <a href="/goleadores" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Goleadores</a>
                <a href="/podio" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-10">
        <section class="bg-gray-800 p-8 rounded-2xl border border-boca-yellow shadow-2xl">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8 border-b border-gray-700 pb-6 gap-4">
                <div>
                    <h2 class="text-3xl font-black text-boca-yellow uppercase tracking-wide flex items-center gap-3">
                        ⚽ Top 25 Máximos Goleadores Históricos
                    </h2>
                    <p class="text-sm text-gray-400 mt-1">Ranking con los 25 principales artilleros que vistieron la azul y oro.</p>
                </div>
                <span class="bg-boca-yellow text-boca-blue font-extrabold px-4 py-2 rounded-full text-xs uppercase shadow">
                    Mundo Boca Data
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-300">
                    <thead class="bg-boca-blue text-boca-yellow uppercase text-xs font-bold border-b border-boca-yellow">
                        <tr>
                            <th class="py-4 px-4 text-center">#</th>
                            <th class="py-4 px-4">Jugador</th>
                            <th class="py-4 px-4 text-center">Goles</th>
                            <th class="py-4 px-4 text-center">Partidos</th>
                            <th class="py-4 px-4 text-center">Promedio</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700/60">
                        @php
                            $top25 = [
                                ['pos' => 1, 'name' => 'Martín Palermo', 'goals' => 236, 'matches' => 404],
                                ['pos' => 2, 'name' => 'Roberto Eugenio Cherro', 'goals' => 223, 'matches' => 305],
                                ['pos' => 3, 'name' => 'Francisco Antonio Varallo', 'goals' => 194, 'matches' => 222],
                                ['pos' => 4, 'name' => 'Domingo Alberto Tarasconi', 'goals' => 192, 'matches' => 236],
                                ['pos' => 5, 'name' => 'Jaime Sarlanga', 'goals' => 129, 'matches' => 220],
                                ['pos' => 6, 'name' => 'Mario Emilio Heriberto Boyé', 'goals' => 123, 'matches' => 228],
                                ['pos' => 7, 'name' => 'Delfín Benítez Cáceres', 'goals' => 114, 'matches' => 176],
                                ['pos' => 8, 'name' => 'Bleo Pedro Fournol Calomino', 'goals' => 99, 'matches' => 226],
                                ['pos' => 9, 'name' => 'Pío Sixto Corcuera', 'goals' => 97, 'matches' => 187],
                                ['pos' => 10, 'name' => 'Carlos Alberto Tévez', 'goals' => 94, 'matches' => 279],
                                ['pos' => 11, 'name' => 'Juan Román Riquelme', 'goals' => 92, 'matches' => 388],
                                ['pos' => 12, 'name' => 'Sergio Daniel Martínez', 'goals' => 86, 'matches' => 167],
                                ['pos' => 13, 'name' => 'Guillermo Barros Schelotto', 'goals' => 86, 'matches' => 300],
                                ['pos' => 14, 'name' => 'Alfredo Oscar Graciani', 'goals' => 83, 'matches' => 250],
                                ['pos' => 15, 'name' => 'Rodrigo Sebastián Palacio', 'goals' => 82, 'matches' => 185],
                                ['pos' => 16, 'name' => 'Osvaldo Rubén Potente', 'goals' => 81, 'matches' => 195],
                                ['pos' => 17, 'name' => 'Angel Clemente Rojas', 'goals' => 79, 'matches' => 222],
                                ['pos' => 18, 'name' => 'Diego Fernando Latorre', 'goals' => 77, 'matches' => 242],
                                ['pos' => 19, 'name' => 'Paulo Angelo Valentim', 'goals' => 71, 'matches' => 111],
                                ['pos' => 20, 'name' => 'Darío Ismael Benedetto', 'goals' => 71, 'matches' => 172],
                                ['pos' => 21, 'name' => 'Hugo Alberto Curioni', 'goals' => 68, 'matches' => 135],
                                ['pos' => 22, 'name' => 'Ricardo Alberto Gareca', 'goals' => 64, 'matches' => 133],
                                ['pos' => 23, 'name' => 'Jorge Alberto Comas', 'goals' => 63, 'matches' => 126],
                                ['pos' => 24, 'name' => 'Miguel Angel Merentiel', 'goals' => 61, 'matches' => 178, 'active' => true],
                                ['pos' => 25, 'name' => 'Alfredo Hugo Rojas', 'goals' => 56, 'matches' => 124],
                            ];
                        @endphp

                        @foreach($top25 as $player)
                            <tr class="hover:bg-gray-700/50 transition duration-150 {{ isset($player['active']) ? 'bg-boca-yellow/20 font-bold' : '' }}">
                                <td class="py-3 px-4 font-black text-center text-boca-yellow text-base">{{ $player['pos'] }}°</td>
                                <td class="py-3 px-4 font-bold text-white text-base">
                                    {{ $player['name'] }}
                                    @if(isset($player['active']))
                                        <span class="ml-2 text-[10px] bg-boca-yellow text-boca-blue px-2 py-0.5 rounded uppercase font-black">Actualmente en el club</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 text-center font-black text-boca-yellow text-lg">{{ $player['goals'] }}</td>
                                <td class="py-3 px-4 text-center text-gray-300 font-medium">{{ $player['matches'] }}</td>
                                <td class="py-3 px-4 text-center font-semibold text-gray-200">
                                    {{ number_format($player['goals'] / $player['matches'], 2) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>
</body>
</html>