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

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-10">
        <section class="bg-gray-800 p-8 rounded-2xl border border-gray-700 shadow-2xl space-y-6">
            <div class="border-b border-gray-700 pb-4">
                <h2 class="text-3xl font-black text-white uppercase tracking-wide flex items-center gap-3">
                    📊 Torneo Local & Tabla Anual
                </h2>
                <p class="text-sm text-gray-400 mt-1">Seguimiento de posiciones de la Liga Profesional y clasificación a Copas Internacionales.</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl border border-gray-700 text-center py-12">
                <span class="text-4xl">📈</span>
                <h3 class="text-xl font-bold text-white mt-3">Módulo de Tablas en Actualización</h3>
                <p class="text-xs text-gray-400 mt-2 max-w-md mx-auto">
                    Próximamente estaremos integrando la tabla de posiciones en tiempo real conectada a la API del fútbol argentino.
                </p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>
</body>
</html>