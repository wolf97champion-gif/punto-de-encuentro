<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de Encuentro - La comunidad xeneize</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        boca: {
                            blue: '#002366',
                            dark: '#001333',
                            light: '#003399',
                            yellow: '#F3C300',
                            gold: '#FFD700'
                        },
                        tiktok: {
                            cyan: '#69C4F5',
                            red: '#FE2C55',
                            dark: '#010101'
                        }
                    },
                    keyframes: {
                        floatBounce: {
                            '0%, 100%': { transform: 'translateY(0) scale(1)' },
                            '50%': { transform: 'translateY(-4px) scale(1.05)' },
                        }
                    },
                    animation: {
                        'float-bounce': 'floatBounce 2.5s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-boca-dark text-gray-100 font-sans min-h-screen flex flex-col justify-between antialiased selection:bg-boca-yellow selection:text-boca-dark">

    <!-- Navbar Superior Moderno y Flotante -->
    <header class="sticky top-4 z-50 px-6 lg:px-12 max-w-[1600px] mx-auto w-full">
        <div class="bg-boca-blue/80 backdrop-blur-md border border-blue-600/40 shadow-2xl rounded-2xl px-6 py-3.5 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-xl text-lg shadow-md group-hover:scale-105 transition duration-300">PE</div>
                <div>
                    <span class="text-base lg:text-lg font-black tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></span>
                    <span class="block text-[9px] text-gray-300 tracking-wider font-semibold uppercase">Comunidad Xeneize</span>
                </div>
            </a>

            <!-- Navegación Estilo Cápsula -->
            <nav class="hidden md:flex items-center space-x-2 text-xs font-bold uppercase tracking-wider">
                <a href="/" class="bg-boca-yellow text-boca-dark px-4 py-2 rounded-xl shadow-md transition">Inicio / Live</a>
                <a href="/tablas" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Tablas</a>
                <a href="/goleadores" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Goleadores</a>
                <a href="/podio" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Podio</a>
                <a href="/quien-soy" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Quiénes Somos</a>
            </nav>

        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow max-w-[1600px] w-full mx-auto px-6 lg:px-12 py-8 space-y-8">
        
        <!-- Fila Superior: Bienvenida y Aviso -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-gradient-to-br from-blue-900 via-boca-blue to-boca-dark border-l-8 border-boca-yellow p-8 lg:p-10 rounded-3xl shadow-2xl flex flex-col justify-center relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-boca-yellow/5 rounded-full blur-3xl pointer-events-none"></div>
                <span class="bg-boca-yellow text-boca-dark text-[11px] font-black px-3.5 py-1.5 rounded-lg uppercase tracking-widest w-max mb-4 shadow-md">
                    👋 Bienvenidos al sitio oficial del canal
                </span>
                <h1 class="text-3xl lg:text-4xl font-black text-white mb-4 tracking-tight leading-tight">
                    El espacio creado por y para la gente de <span class="text-boca-yellow underline decoration-boca-yellow/40">Boca Juniors</span>.
                </h1>
                <p class="text-gray-300 text-sm lg:text-base leading-relaxed max-w-3xl">
                    Un sitio independiente donde transmitimos en directo, analizamos el día a día xeneize, repasamos la historia y calificamos a los jugadores fecha a fecha.
                </p>
            </div>

            <div class="bg-boca-blue/80 backdrop-blur-md border border-blue-700/50 p-8 rounded-3xl shadow-2xl flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 text-boca-yellow font-extrabold text-xs uppercase tracking-widest mb-4">
                        <span class="text-base">⚠️</span> Aviso Importante
                    </div>
                    <p class="text-xs text-gray-300 leading-relaxed">
                        Esta plataforma es la web oficial de los canales de YouTube y TikTok de <strong>Punto de Encuentro</strong>.
                    </p>
                    <p class="text-xs text-gray-400 mt-4 leading-relaxed">
                        No representa ni tiene vínculo institucional oficial con el Club Atlético Boca Juniors.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-blue-800/60 text-[10px] text-gray-400 font-mono">
                    Actualizado para la temporada 2026
                </div>
            </div>
        </section>

        <!-- Fila Central: Streaming y Widgets Laterales -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <!-- Reproductor de YouTube -->
            <div class="lg:col-span-2 bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl overflow-hidden flex flex-col">
                <div class="bg-boca-dark/60 px-8 py-5 border-b border-blue-800/60 flex flex-wrap justify-between items-center gap-4">
                    <span class="text-xs font-black tracking-widest text-red-400 uppercase flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded-full bg-red-600 animate-pulse"></span> YouTube / Stream en Vivo
                    </span>
                    <a href="https://www.youtube.com/@PuntoDeEncuentroYT" target="_blank" class="text-xs text-gray-300 hover:text-boca-yellow font-mono transition bg-blue-900/40 px-3 py-1 rounded-lg border border-blue-700">
                        @PuntoDeEncuentroYT ↗
                    </a>
                </div>

                <div class="p-6 lg:p-8 flex flex-col">
                    <div class="w-full aspect-video bg-black rounded-2xl overflow-hidden relative shadow-2xl border border-blue-900">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/It-xG6qLVmM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-blue-800/60 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <span class="text-[10px] bg-red-950 text-red-400 border border-red-800/60 px-2.5 py-1 rounded-md font-bold uppercase tracking-wider">Último programa</span>
                            <h2 class="text-sm lg:text-base text-white font-black mt-2 tracking-wide">ANALISIS POST PARTIDO - PREVIA DE SUDAMERICANA</h2>
                        </div>
                        <a href="https://www.youtube.com/watch?v=It-xG6qLVmM" target="_blank" class="bg-red-600 hover:bg-red-500 text-white text-xs font-extrabold uppercase tracking-widest px-6 py-3.5 rounded-xl shadow-lg transition duration-300 flex items-center gap-2 whitespace-nowrap">
                            🔴 Ver en YouTube
                        </a>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: TikTok y Próximo Partido -->
            <div class="space-y-8 flex flex-col">
                
                <!-- Tarjeta TikTok Estilo Oficial -->
                <div class="bg-gradient-to-br from-gray-950 via-boca-blue to-boca-dark border-2 border-cyan-500/30 rounded-3xl shadow-2xl p-8 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-40 h-40 bg-cyan-500/10 rounded-full blur-2xl pointer-events-none"></div>

                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-black tracking-widest text-cyan-400 uppercase flex items-center gap-2">
                                🎵 TIKTOK LIVE & CLIPS
                            </span>
                            <span class="text-xs font-mono font-black text-white bg-gray-900 px-3.5 py-1.5 rounded-full border border-cyan-400/60 shadow-lg inline-block animate-float-bounce">
                                @michaelnovoa16
                            </span>
                        </div>
                        
                        <p class="text-xs text-gray-200 leading-relaxed mb-6 font-medium">
                            ¿Preferís enterarte de las novedades en clips cortos de 1 minuto? ¡Seguinos en TikTok para enterarte al instante!
                        </p>

                        <div class="bg-boca-dark/70 p-4 rounded-2xl border border-cyan-500/20 mb-6 shadow-inner">
                            <p class="text-xs font-extrabold text-boca-yellow mb-1 flex items-center gap-1.5">
                                <span>🔔</span> Notificación de Transmisión
                            </p>
                            <p class="text-[11px] text-gray-300 leading-relaxed">Activá la campanita en nuestro perfil para sumarte a los directos exclusivos.</p>
                        </div>
                    </div>

                    <a href="https://www.tiktok.com/@michaelnovoa16" target="_blank" class="w-full bg-gradient-to-r from-gray-900 to-black hover:from-gray-800 hover:to-gray-900 border border-cyan-500/50 text-cyan-300 hover:text-white text-xs font-black uppercase tracking-wider py-4 rounded-xl text-center transition shadow-lg block">
                        Ir a TikTok / Ver en Vivo ↗
                    </a>
                </div>

                <!-- Tarjeta Próximo Encuentro -->
                <div class="bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-8">
                    <div class="flex justify-between items-center mb-6 border-b border-blue-800/60 pb-4">
                        <span class="text-xs font-black tracking-widest text-boca-yellow uppercase">Próximo Encuentro</span>
                        <span class="text-[10px] bg-boca-dark text-boca-yellow font-bold px-2.5 py-1 rounded-lg border border-blue-800">Copa Sudamericana</span>
                    </div>

                    <div class="flex justify-between items-center my-6 text-center">
                        <div class="w-1/3 flex flex-col items-center">
                            <span class="text-sm font-black text-white">São Paulo</span>
                            <span class="text-[10px] text-gray-400 mt-1 font-bold">LOCAL</span>
                        </div>
                        <div class="w-1/3">
                            <span class="text-xs font-black text-boca-yellow bg-boca-dark px-4 py-2 rounded-full border border-blue-800 shadow-inner">VS</span>
                        </div>
                        <div class="w-1/3 flex flex-col items-center">
                            <span class="text-sm font-black text-white">Boca Jrs.</span>
                            <span class="text-[10px] text-gray-400 mt-1 font-bold">VISITANTE</span>
                        </div>
                    </div>

                    <div class="text-xs text-gray-300 space-y-2.5 pt-4 border-t border-blue-800/60 font-medium">
                        <p class="flex items-center gap-2.5">📍 <span class="text-gray-200">Morumbi, São Paulo</span></p>
                        <p class="flex items-center gap-2.5">📅 <span class="text-gray-200">Mañana — 21:30 hs</span></p>
                        <p class="flex items-center gap-2.5">⚖️ <span class="text-gray-300">Árbitro: Gustavo Tejera (URU)</span></p>
                    </div>
                </div>

            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-boca-blue text-gray-300 text-center py-6 text-xs border-t-2 border-blue-800 w-full mt-auto">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>