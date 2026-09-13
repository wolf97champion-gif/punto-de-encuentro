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
                        ⚽ Máximos Goleadores Históricos
                    </h2>
                    <p class="text-sm text-gray-400 mt-1">Top leyendas que más goles convirtieron con la camiseta de Boca Juniors.</p>
                </div>
                <span class="bg-boca-yellow text-boca-blue font-extrabold px-4 py-2 rounded-full text-xs uppercase shadow">
                    Historia Xeneize
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-300">
                    <thead class="bg-boca-blue text-boca-yellow uppercase text-xs font-bold border-b border-boca-yellow">
                        <tr>
                            <th class="py-4 px-4 text-center">#</th>
                            <th class="py-4 px-4">Jugador</th>
                            <th class="py-4 px-4">Apodo</th>
                            <th class="py-4 px-4 text-center">Partidos</th>
                            <th class="py-4 px-4 text-center">Goles</th>
                            <th class="py-4 px-4 text-center">Promedio</th>
                            <th class="py-4 px-4 text-center">Años</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700/60">
                        @foreach($scorers as $index => $scorer)
                            <tr class="hover:bg-gray-700/50 transition duration-150">
                                <td class="py-3.5 px-4 font-black text-center text-boca-yellow text-base">{{ $index + 1 }}</td>
                                <td class="py-3.5 px-4 font-bold text-white text-base">{{ $scorer->name }}</td>
                                <td class="py-3.5 px-4 italic text-gray-400 text-sm">{{ $scorer->nickname ?? '-' }}</td>
                                <td class="py-3.5 px-4 text-center text-gray-300 font-medium">{{ $scorer->matches }}</td>
                                <td class="py-3.5 px-4 text-center font-black text-boca-yellow text-lg">{{ $scorer->goals }}</td>
                                <td class="py-3.5 px-4 text-center font-semibold text-gray-200">
                                    {{ number_format($scorer->goals / $scorer->matches, 2) }}
                                </td>
                                <td class="py-3.5 px-4 text-center text-xs text-gray-400 font-mono">{{ $scorer->years }}</td>
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