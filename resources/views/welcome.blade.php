<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de Encuentro - La Web de la Comunidad Xeneize</title>
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
                <a href="/" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Inicio / Live</a>
                <a href="/goleadores" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="/podio" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
                <a href="/quien-soy" class="hover:text-boca-yellow transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Banner Presentación + Disclaimer -->
    <section class="bg-gradient-to-r from-boca-blue via-blue-950 to-gray-900 border-b border-gray-800 py-10 px-6">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
            <div class="md:col-span-2 space-y-3">
                <span class="bg-yellow-500/20 text-boca-yellow text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-yellow-500/30 inline-block">
                    📢 BIENVENIDOS AL SITIO OFICIAL DEL CANAL
                </span>
                <h2 class="text-3xl md:text-4xl font-black text-white leading-tight">
                    El espacio creado por y para la gente de <span class="text-boca-yellow">Boca Juniors</span>.
                </h2>
                <p class="text-gray-300 text-sm md:text-base max-w-3xl leading-relaxed">
                    Un sitio independiente donde transmitimos en directo, analizamos el día a día xeneize, repasamos la historia y calificamos a los jugadores.
                </p>
            </div>

            <div class="bg-gray-800/80 p-4 rounded-xl border border-yellow-500/40 text-xs text-gray-300 space-y-2 shadow-lg">
                <div class="flex items-center gap-2 text-boca-yellow font-bold uppercase text-xs">AVISO IMPORTANTE</div>
                <p>Esta plataforma es la web oficial de los canales de <strong class="text-white">YouTube y TikTok de Punto de Encuentro</strong>.</p>
                <p class="text-gray-400 italic">No representa ni tiene vínculo institucional oficial con el Club Atlético Boca Juniors.</p>
            </div>
        </div>
    </section>

    <!-- Main Section: YouTube (Izquierda) + TikTok & Info (Derecha) -->
    <main class="flex-grow max-w-[1600px] w-full mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Stream Principal de YouTube (7 de 12 columnas) -->
        <div class="lg:col-span-7 space-y-6">
            <section class="bg-gray-800 p-5 rounded-2xl shadow-xl border border-gray-700">
                <div class="flex justify-between items-center mb-4">
                    <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider animate-pulse flex items-center gap-1.5">
                        ● YOUTUBE / STREAM
                    </span>
                    <span class="text-sm text-gray-400 font-medium">@PuntoDeEncuentroYT</span>
                </div>
                
                <!-- Reproductor seguro: Reemplaza "src="https://www.youtube.com/embed/AbCdEf12345"" por el código de tu último video o directo -->
                <div class="aspect-video w-full bg-black rounded-xl overflow-hidden relative shadow-inner">
                    <iframe class="w-full h-full" 
                            src="https://www.youtube.com/embed/AbCdEf12345" 
                            title="Punto de Encuentro - Último Video o Stream" 
                            frameborder="0" 
                            allowfullscreen>
                    </iframe>
                </div>

                <!-- Botón de respaldo rápido para entrar al directo actual -->
                <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-3 bg-gray-900/90 p-3.5 rounded-xl border border-gray-700">
                    <span class="text-xs text-gray-300 text-center sm:text-left">¿Estamos en vivo ahora mismo y querés participar del chat?</span>
                    <a href="https://www.youtube.com/@PuntoDeEncuentroYT/live" target="_blank" rel="noopener noreferrer" class="bg-red-600 hover:bg-red-500 text-white text-xs font-bold px-4 py-2 rounded-lg transition uppercase tracking-wider flex items-center gap-1.5 shrink-0 shadow-md">
                        <span>🔴 Ir al Stream en Vivo</span>
                    </a>
                </div>

                <div class="mt-4">
                    <h2 class="text-xl font-black text-white">Previa & Análisis del Partido</h2>
                    <p class="text-gray-400 text-xs mt-1">Mirá el contenido más reciente del canal o sumate a las transmisiones en directo.</p>
                </div>
            </section>
        </div>

        <!-- Módulo de TikTok Live + Redes (5 de 12 columnas) -->
        <aside class="lg:col-span-5 space-y-6">

            <!-- Card Especial TikTok Live / Publicaciones -->
            <div class="bg-gradient-to-b from-gray-950 via-gray-900 to-gray-800 p-6 rounded-2xl border-2 border-cyan-500/50 shadow-2xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-cyan-500/10 rounded-full blur-2xl"></div>
                
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center gap-2">
                        <span class="text-xl">🎵</span>
                        <h3 class="text-lg font-black text-white uppercase tracking-wide">TikTok Live & Videos</h3>
                    </div>
                    <span class="text-pink-600 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-widest animate-bounce">
                        @michaelnovoa16
                    </span>
                </div>

                <p class="text-xs text-gray-300 leading-relaxed mb-5">
                    ¿Preferís seguir el vivo o enterarte de las novedades en clips cortos de 1 minuto? ¡Seguinos en TikTok para recibir las notificaciones al instante!
                </p>

                <!-- Box de Notificación/Aviso -->
                <div class="bg-gray-900/90 p-4 rounded-xl border border-gray-700 mb-5 space-y-2">
                    <div class="flex items-center gap-2 text-cyan-400 font-bold text-xs">
                        🔔 Notificación de Transmisión
                    </div>
                    <p class="text-xs text-gray-300">
                        Hacé clic abajo para abrir la app de TikTok, activar la campanita y sumarte al directo o ver los últimos videos subidos.
                    </p>
                </div>

                <a href="https://www.tiktok.com/@michaelnovoa16" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-cyan-500 to-pink-500 hover:from-cyan-400 hover:to-pink-400 text-black font-black py-3.5 px-4 rounded-xl transition text-sm uppercase tracking-wide shadow-lg">
                    <span>Ir a TikTok / Ver en Vivo</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/></svg>
                </a>
            </div>

            <!-- Próximo Partido Dinámico -->
            <div class="bg-gray-800 p-5 rounded-2xl border border-gray-700 shadow-xl text-center space-y-3 relative overflow-hidden">
                <div class="flex justify-between items-center border-b border-gray-700/60 pb-2">
                    <span class="text-boca-yellow font-black uppercase text-xs tracking-widest">Próximo Encuentro</span>
                    <span class="text-[9px] bg-red-950 text-red-300 px-2 py-0.5 rounded border border-red-800 font-bold">
                        {{ $proximoPartido['competencia'] ?? 'Copa Libertadores' }}
                    </span>
                </div>

                <div class="grid grid-cols-7 items-center my-3">
                    <div class="col-span-3 flex flex-col items-center">
                        <div class="text-2xl mb-1">🔴⚫</div>
                        <div class="text-sm font-black text-white">{{ $proximoPartido['local'] ?? 'São Paulo' }}</div>
                        <span class="text-[9px] text-gray-400 uppercase font-semibold">Local</span>
                    </div>
                    
                    <div class="col-span-1 flex flex-col items-center justify-center">
                        <div class="text-boca-yellow font-black text-xs px-2 py-1 bg-gray-900 rounded-lg border border-gray-700">VS</div>
                        <span class="text-[8px] text-boca-yellow font-extrabold mt-0.5">VUELTA</span>
                    </div>

                    <div class="col-span-3 flex flex-col items-center">
                        <div class="text-2xl mb-1">⭐</div>
                        <div class="text-sm font-black text-boca-yellow">{{ $proximoPartido['visitante'] ?? 'Boca Juniors' }}</div>
                        <span class="text-[9px] text-gray-400 uppercase font-semibold">Visitante</span>
                    </div>
                </div>

                <div class="space-y-1.5 pt-1">
                    <div class="text-xs text-gray-200 bg-gray-900/80 py-2 px-3 rounded-xl border border-gray-700/70 font-medium">
                        🏟️ {{ $proximoPartido['estadio'] ?? 'Estadio Morumbí' }} • <span class="text-boca-yellow font-bold">{{ $proximoPartido['fecha_hora'] ?? 'A confirmar' }}</span>
                    </div>
                    <div class="text-[10px] text-gray-400 bg-gray-900/40 py-1 px-2 rounded-lg border border-gray-800">
                        ⚖️ Árbitro: <strong class="text-gray-200">{{ $proximoPartido['arbitro'] ?? 'A confirmar' }}</strong>
                    </div>
                </div>
            </div>

        </aside>

    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>