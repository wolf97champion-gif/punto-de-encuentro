<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de Encuentro - La web de la comunidad xeneize</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-boca-blue { background-color: #002366; }
        .bg-boca-darkblue { background-color: #00153b; }
        .bg-boca-yellow { background-color: #f7b32b; }
        .text-boca-yellow { color: #f7b32b; }
        .border-boca-yellow { border-color: #f7b32b; }
    </style>
</head>
<body class="bg-boca-darkblue text-gray-100 font-sans min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="bg-boca-blue border-b-4 border-boca-yellow shadow-2xl w-full sticky top-0 z-50">
        <div class="max-w-[1700px] mx-auto px-8 py-5 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3.5 group">
                <div class="w-12 h-12 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-2xl text-2xl shadow-md group-hover:scale-105 transition">PE</div>
                <div>
                    <h1 class="text-2xl font-extrabold tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></h1>
                    <p class="text-xs text-gray-200 font-medium">La web de la comunidad xeneize</p>
                </div>
            </a>
            <nav class="space-x-10 hidden md:flex font-semibold text-sm uppercase tracking-wider">
                <a href="/" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Inicio / Live</a>
                <a href="/goleadores" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="/podio" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
                <a href="/quien-soy" class="hover:text-boca-yellow transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal del Home -->
    <main class="flex-grow max-w-[1700px] w-full mx-auto px-8 py-10 space-y-10">
        
        <!-- Banner de Bienvenida y Aviso Importante -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 border-l-8 border-boca-yellow p-8 rounded-2xl shadow-2xl flex flex-col justify-center">
                <span class="bg-boca-yellow text-blue-950 text-xs font-black px-3 py-1 rounded-md uppercase tracking-widest w-max mb-3">👋 Bienvenidos al sitio oficial del canal</span>
                <h2 class="text-4xl font-black text-white mb-3">El espacio creado por y para la gente de Boca Juniors.</h2>
                <p class="text-gray-200 text-base leading-relaxed">
                    Un sitio independiente donde transmitimos en directo, analizamos el día a día xeneize, repasamos la historia y calificamos a los jugadores.
                </p>
            </div>

            <div class="bg-boca-blue border-2 border-blue-800 p-8 rounded-2xl shadow-2xl flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 text-boca-yellow font-bold text-sm uppercase tracking-wider mb-3">
                        <span>⚠️</span> Aviso Importante
                    </div>
                    <p class="text-xs text-gray-200 leading-relaxed">
                        Esta plataforma es la web oficial de los canales de YouTube y TikTok de Punto de Encuentro.<br><br>
                        No representa ni tiene vínculo institucional oficial con el Club Atlético Boca Juniors.
                    </p>
                </div>
            </div>
        </div>

        <!-- Secciones Centrales: YouTube & TikTok / Próximo Encuentro -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <!-- Columna Izquierda: YouTube Stream -->
            <div class="lg:col-span-2 bg-boca-blue border-2 border-blue-800 rounded-2xl shadow-2xl overflow-hidden flex flex-col">
                <div class="bg-blue-950 px-8 py-5 border-b border-blue-800 flex justify-between items-center">
                    <span class="text-xs font-black tracking-widest text-red-400 uppercase flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded-full bg-red-600 animate-ping"></span> YouTube / Stream en Vivo
                    </span>
                    <a href="https://www.youtube.com/@PuntoDeEncuentroYT" target="_blank" class="text-xs text-gray-300 hover:text-boca-yellow font-mono transition">@PuntoDeEncuentroYT ↗</a>
                </div>

                <div class="p-8 flex-grow flex flex-col justify-center">
                    <div class="w-full aspect-video bg-black rounded-xl overflow-hidden relative shadow-2xl border border-blue-900 flex items-center justify-center group">
                        <img src="https://img.youtube.com/vi/It-xG6qLVmM/maxresdefault.jpg" alt="Stream en Vivo" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition duration-500">
                        <a href="https://www.youtube.com/watch?v=It-xG6qLVmM&t=1s" target="_blank" class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center text-white text-3xl shadow-2xl group-hover:scale-110 transition">
                                ▶
                            </div>
                        </a>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-blue-900 flex flex-col sm:flex-row justify-between items-center gap-6">
                        <div>
                            <span class="text-[10px] bg-red-950 text-red-400 border border-red-800 px-2.5 py-1 rounded font-bold uppercase tracking-wider">Último programa</span>
                            <h3 class="text-base text-white font-extrabold mt-2">ANALISIS POST PARTIDO - PREVIA DE SUDAMERICANA</h3>
                        </div>
                        <a href="https://www.youtube.com/watch?v=It-xG6qLVmM&t=1s" target="_blank" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl shadow-lg transition flex items-center gap-2 whitespace-nowrap">
                            🔴 Ir al Stream en Vivo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: TikTok & Próximo Encuentro -->
            <div class="space-y-8 flex flex-col">
                
                <!-- Widget TikTok -->
                <div class="bg-boca-blue border-2 border-blue-800 rounded-2xl shadow-2xl p-8 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-black tracking-widest text-pink-400 uppercase flex items-center gap-2">
                                🎵 TikTok Live & Videos
                            </span>
                            <span class="text-xs text-gray-300 font-mono">@michaelnovoa16</span>
                        </div>
                        <p class="text-xs text-gray-200 leading-relaxed mb-6">
                            ¿Preferís seguir el vivo o enterarte de las novedades en clips cortos de 1 minuto? ¡Seguinos en TikTok para recibir las notificaciones al instante!
                        </p>
                        <div class="bg-blue-950 p-4 rounded-xl border border-blue-800 mb-6">
                            <p class="text-xs font-bold text-boca-yellow mb-1.5">🔔 Notificación de Transmisión</p>
                            <p class="text-xs text-gray-300 leading-relaxed">Hacé clic abajo para abrir la app de TikTok, activar la campanita y sumarte al directo o ver los últimos videos subidos.</p>
                        </div>
                    </div>
                    <a href="https://tiktok.com" target="_blank" class="w-full bg-blue-950 hover:bg-blue-900 border border-blue-700 text-white text-xs font-bold uppercase tracking-wider py-3.5 rounded-xl text-center transition shadow">
                        Ir a TikTok / Ver en Vivo ↗
                    </a>
                </div>

                <!-- Widget Próximo Encuentro -->
                <div class="bg-boca-blue border-2 border-blue-800 rounded-2xl shadow-2xl p-8">
                    <div class="flex justify-between items-center mb-6 border-b border-blue-900 pb-4">
                        <span class="text-xs font-black tracking-widest text-boca-yellow uppercase">Próximo Encuentro</span>
                        <span class="text-[10px] bg-blue-950 text-boca-yellow font-bold px-2.5 py-1 rounded-md border border-blue-800">Copa Sudamericana</span>
                    </div>

                    <div class="flex justify-between items-center my-6 text-center">
                        <div class="w-1/3 flex flex-col items-center">
                            <span class="text-sm font-black text-white">São Paulo</span>
                            <span class="text-[10px] text-gray-300 mt-1">LOCAL</span>
                        </div>
                        <div class="w-1/3">
                            <span class="text-xs font-extrabold text-boca-yellow bg-blue-950 px-4 py-2 rounded-full border border-blue-800">VS</span>
                        </div>
                        <div class="w-1/3 flex flex-col items-center">
                            <span class="text-sm font-black text-white">Boca Jrs.</span>
                            <span class="text-[10px] text-gray-300 mt-1">VISITANTE</span>
                        </div>
                    </div>

                    <div class="text-xs text-gray-200 space-y-2.5 pt-4 border-t border-blue-900 font-medium">
                        <p class="flex items-center gap-2.5">📍 <span>Morumbi, São Paulo</span></p>
                        <p class="flex items-center gap-2.5">📅 <span>Martes 15/09 — 21:30 hs</span></p>
                        <p class="flex items-center gap-2.5">⚖️ <span class="text-gray-300">Árbitro: Gustavo Tejera (URU)</span></p>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-boca-blue text-gray-300 text-center py-8 text-xs border-t-2 border-blue-800 w-full mt-auto">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>