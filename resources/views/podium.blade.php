<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podio del Partido - Punto de Encuentro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-boca-blue { background-color: #001f54; }
        .bg-boca-yellow { background-color: #f7b32b; }
        .text-boca-yellow { color: #f7b32b; }
        .border-boca-yellow { border-color: #f7b32b; }
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
                <a href="/podio" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-[1200px] w-full mx-auto px-6 py-12 flex flex-col justify-center">
        
        <section class="bg-gray-800/90 p-8 rounded-2xl border border-gray-700 shadow-2xl space-y-8 relative overflow-hidden">
            
            <!-- Header Sección -->
            <div class="border-b border-gray-700/80 pb-6">
                <h2 class="text-3xl font-black text-white uppercase tracking-wide flex items-center gap-3">
                    <span class="text-boca-yellow">⭐</span> EL PODIO DEL HINCHA
                </h2>
                <p class="text-sm text-gray-400 mt-1">Puntaje promedio asignado por los espectadores de la comunidad en la última fecha.</p>
            </div>

            <!-- Cards del Podio -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

                <!-- 1° Puesto: FIGURA (Destacado) -->
                <div class="bg-gray-900/90 rounded-2xl border-2 border-boca-yellow p-6 text-center space-y-3 relative shadow-xl transform md:-translate-y-2">
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-boca-yellow text-boca-blue text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-wider shadow">
                        FIGURA DEL PARTIDO
                    </span>
                    
                    <div class="w-10 h-10 bg-boca-yellow/20 text-boca-yellow border border-boca-yellow rounded-full flex items-center justify-center font-black mx-auto text-sm mt-2">
                        🥇 1
                    </div>

                    <div>
                        <h3 class="text-2xl font-black text-white">Leandro Brey</h3>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mt-0.5">ARQUERO</p>
                    </div>

                    <div class="text-4xl font-black text-boca-yellow pt-2">
                        8.5
                    </div>
                </div>

                <!-- 2° Puesto -->
                <div class="bg-gray-900/60 rounded-2xl border border-gray-700 p-6 text-center space-y-3 shadow-lg">
                    <div class="w-10 h-10 bg-blue-500/20 text-blue-400 border border-blue-500/40 rounded-full flex items-center justify-center font-black mx-auto text-sm">
                        🥈 2
                    </div>

                    <div>
                        <h3 class="text-xl font-black text-white">Edinson Cavani</h3>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mt-0.5">DELANTERO</p>
                    </div>

                    <div class="text-3xl font-black text-boca-yellow pt-2">
                        8.0
                    </div>
                </div>

                <!-- 3° Puesto -->
                <div class="bg-gray-900/60 rounded-2xl border border-gray-700 p-6 text-center space-y-3 shadow-lg">
                    <div class="w-10 h-10 bg-orange-500/20 text-orange-400 border border-orange-500/40 rounded-full flex items-center justify-center font-black mx-auto text-sm">
                        🥉 3
                    </div>

                    <div>
                        <h3 class="text-xl font-black text-white">Kevin Zenón</h3>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mt-0.5">MEDIOCAMPISTA</p>
                    </div>

                    <div class="text-3xl font-black text-boca-yellow pt-2">
                        7.5
                    </div>
                </div>

            </div>

            <!-- Botón de Votación -->
            <div class="text-center pt-4">
                <a href="https://www.youtube.com/@PuntoDeEncuentroYT" target="_blank" rel="noopener noreferrer" class="inline-block bg-boca-yellow hover:bg-yellow-400 text-boca-blue font-black py-3.5 px-8 rounded-xl transition text-sm uppercase tracking-wide shadow-lg transform hover:scale-105">
                    VOTAR JUGADORES DEL ÚLTIMO PARTIDO
                </a>
            </div>

        </section>

    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>