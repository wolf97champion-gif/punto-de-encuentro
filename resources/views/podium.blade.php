<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Podio del Partido - Punto de Encuentro</title>
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
                <a href="/podio" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-10">
        <section class="bg-gray-800 p-8 rounded-2xl border border-gray-700 shadow-2xl">
            <div class="mb-8 border-b border-gray-700 pb-6">
                <h2 class="text-3xl font-black text-white uppercase tracking-wide flex items-center gap-3">
                    ⭐ El Podio del Hincha
                </h2>
                <p class="text-sm text-gray-400 mt-1">Puntaje promedio asignado por los espectadores de la comunidad en la última fecha.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Podio #1 -->
                <div class="bg-gradient-to-b from-yellow-500/20 to-gray-900 border-2 border-boca-yellow p-6 rounded-2xl text-center relative shadow-xl">
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-boca-yellow text-boca-blue font-black px-4 py-1 rounded-full text-xs uppercase shadow">Figura del Partido</span>
                    <div class="text-4xl my-3">🥇</div>
                    <h3 class="text-xl font-black text-white">Leandro Brey</h3>
                    <p class="text-xs text-gray-400 uppercase font-semibold">Arquero</p>
                    <div class="mt-4 text-3xl font-black text-boca-yellow">8.5</div>
                </div>

                <!-- Podio #2 -->
                <div class="bg-gray-900 border border-gray-700 p-6 rounded-2xl text-center relative shadow-xl">
                    <div class="text-4xl my-3">🥈</div>
                    <h3 class="text-xl font-black text-white">Edinson Cavani</h3>
                    <p class="text-xs text-gray-400 uppercase font-semibold">Delantero</p>
                    <div class="mt-4 text-3xl font-black text-gray-300">8.0</div>
                </div>

                <!-- Podio #3 -->
                <div class="bg-gray-900 border border-gray-700 p-6 rounded-2xl text-center relative shadow-xl">
                    <div class="text-4xl my-3">🥉</div>
                    <h3 class="text-xl font-black text-white">Kevin Zenón</h3>
                    <p class="text-xs text-gray-400 uppercase font-semibold">Mediocampista</p>
                    <div class="mt-4 text-3xl font-black text-amber-600">7.5</div>
                </div>
            </div>

            <div class="text-center pt-4">
                <button class="bg-boca-yellow hover:bg-yellow-500 text-boca-blue font-black px-8 py-3.5 rounded-xl transition text-base shadow-xl tracking-wide uppercase">
                    Votar Jugadores del Último Partido
                </button>
            </div>
        </section>
    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>
</body>
</html>