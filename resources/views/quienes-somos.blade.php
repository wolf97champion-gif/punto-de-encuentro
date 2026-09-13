<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quién Soy - Punto de Encuentro</title>
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
            <nav class="space-x-6 hidden md:flex font-semibold text-sm uppercase tracking-wide">
                <a href="/" class="hover:text-boca-yellow transition">Inicio / Live</a>
                <a href="/goleadores" class="hover:text-boca-yellow transition">Goleadores</a>
                <a href="/podio" class="hover:text-boca-yellow transition">Podio del Partido</a>
                <a href="/tablas" class="hover:text-boca-yellow transition">Tablas & Posiciones</a>
                <a href="/quien-soy" class="text-boca-yellow font-bold border-b-2 border-boca-yellow pb-1">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-4xl w-full mx-auto px-6 py-12 space-y-8">
        
        <div class="text-center space-y-3">
            <span class="bg-yellow-500/20 text-boca-yellow text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-yellow-500/30 inline-block">
                💙💛💙 DETRÁS DEL STREAM 💛💙💛
            </span>
            <h2 class="text-3xl md:text-5xl font-black text-white">¿Quién está detrás de Punto de Encuentro?</h2>
        </div>

        <div class="bg-gray-800 border border-gray-700 rounded-3xl p-8 shadow-2xl space-y-6 relative overflow-hidden">
            <div class="absolute -right-16 -bottom-16 w-48 h-48 bg-boca-yellow/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Avatar / Foto placeholder -->
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-2xl bg-boca-blue border-4 border-boca-yellow flex items-center justify-center text-5xl shadow-xl shrink-0">
                    🎙️
                </div>

                <div class="space-y-4 text-center md:text-left">
                    <h3 class="text-2xl font-black text-boca-yellow">¡Hola a todos los Bosteros y Bosteras!</h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                        Soy el creador de este espacio independiente pensado puramente para hablar de lo que más nos apasiona: <strong class="text-white">Boca Juniors</strong>. Acá no hay filtros institucionales, solo la locura de vivir el día a día del club, hacer las previas, los streams y compartir la pasión con toda la comunidad.
                    </p>
                </div>
            </div>

            <hr class="border-gray-700">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="bg-gray-900/80 p-5 rounded-2xl border border-gray-700 space-y-2">
                    <h4 class="font-black text-boca-yellow flex items-center gap-2">
                        <span>📺</span> El Canal de YouTube
                    </h4>
                    <p class="text-xs text-gray-400 leading-relaxed">
                        El lugar donde nos juntamos en vivo a hacer la previa, reaccionar a los partidos, analizar el rendimiento del equipo y debatir mano a mano en el chat con toda la banda.
                    </p>
                </div>

                <div class="bg-gray-900/80 p-5 rounded-2xl border border-gray-700 space-y-2">
                    <h4 class="font-black text-cyan-400 flex items-center gap-2">
                        <span>🎵</span> La comunidad en TikTok
                    </h4>
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Donde subimos los recortes, los momentos más picantes, los análisis exprés y toda la actualidad xeneize resumida en clips cortos para ver al instante.
                    </p>
                </div>
            </div>

            <div class="text-center pt-4">
                <p class="text-xs text-gray-400 italic">
                    Gracias por sumarte a la web, dejar tu voto en los podios y hacer crecer este proyecto día a día. ¡Aguante Boca! 💙💛💙
                </p>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>