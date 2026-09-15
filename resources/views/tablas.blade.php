<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Posiciones - Punto de Encuentro</title>
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
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-boca-dark text-gray-100 font-sans min-h-screen flex flex-col justify-between antialiased selection:bg-boca-yellow selection:text-boca-dark">

    <!-- Navbar Superior Moderno y Flotante -->
    <header class="sticky top-4 z-50 px-6 lg:px-12 max-w-[1600px] mx-auto w-full">
        <div class="bg-boca-blue/85 backdrop-blur-md border border-blue-600/40 shadow-2xl rounded-2xl px-6 py-3.5 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-xl text-lg shadow-md group-hover:scale-105 transition duration-300">PE</div>
                <div>
                    <span class="text-base lg:text-lg font-black tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></span>
                    <span class="block text-[9px] text-gray-300 tracking-wider font-semibold uppercase">Comunidad Xeneize</span>
                </div>
            </a>
            <nav class="hidden md:flex items-center space-x-2 text-xs font-bold uppercase tracking-wider">
                <a href="/" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Inicio / Live</a>
                <a href="/goleadores" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Goleadores</a>
                <a href="/podio" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Podio</a>
                <a href="/tablas" class="bg-boca-yellow text-boca-dark px-4 py-2 rounded-xl shadow-md transition">Tablas & Posiciones</a>
                <a href="/quien-soy" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Quién Soy</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow max-w-[1600px] w-full mx-auto px-6 lg:px-12 py-8 space-y-10">
        
        <!-- Encabezado de Sección Estilo TV -->
        <div class="text-center bg-gradient-to-r from-boca-blue/40 via-blue-900/50 to-boca-blue/40 border border-blue-700/40 p-8 rounded-3xl shadow-xl relative overflow-hidden">
            <div class="absolute inset-0 bg-boca-yellow/5 blur-2xl pointer-events-none"></div>
            <span class="bg-boca-yellow text-boca-dark text-xs font-black px-4 py-1.5 rounded-full uppercase tracking-widest shadow-md">
                🏆 TORNEO 2026
            </span>
            <h1 class="text-2xl lg:text-3xl font-black text-white mt-3 tracking-tight">TABLAS DE POSICIONES OFICIALES</h1>
            <p class="text-xs text-gray-300 mt-2">Seguimiento en tiempo real de Zonas, Tabla Anual y Promedios del fútbol argentino.</p>
        </div>

        <!-- 1. GRUPOS A y B (Zonas) -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Grupo A -->
            <div class="bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 lg:p-8">
                <div class="flex items-center justify-between mb-6 border-b border-blue-800/60 pb-4">
                    <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">📁 GRUPO A</span>
                    <span class="text-[10px] bg-boca-dark text-cyan-400 px-3 py-1 rounded-lg border border-cyan-500/30 font-mono">Fase de Zonas</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-gray-400 border-b border-blue-800/60 font-mono text-[11px]">
                                <th class="pb-3 px-2">#</th>
                                <th class="pb-3 px-2">EQUIPOS</th>
                                <th class="pb-3 px-2 text-center">PTS</th>
                                <th class="pb-3 px-2 text-center">J</th>
                                <th class="pb-3 px-2 text-center">GOL</th>
                                <th class="pb-3 px-2 text-center">+/-</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-blue-900/40 font-medium">
                            <tr class="bg-blue-900/80 text-boca-yellow font-bold border-l-4 border-boca-yellow">
                                <td class="py-3 px-2">#5</td>
                                <td class="py-3 px-2 flex items-center gap-1.5">Boca Jrs. <span class="text-sm">⭐</span></td>
                                <td class="py-3 px-2 text-center font-black">14</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">12:11</td>
                                <td class="py-3 px-2 text-center">+1</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#1</td>
                                <td class="py-3 px-2">Vélez</td>
                                <td class="py-3 px-2 text-center font-black">17</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">12:7</td>
                                <td class="py-3 px-2 text-center">+5</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#2</td>
                                <td class="py-3 px-2">Defensa</td>
                                <td class="py-3 px-2 text-center font-black">17</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">11:9</td>
                                <td class="py-3 px-2 text-center">+2</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#3</td>
                                <td class="py-3 px-2">Gimnasia (M)</td>
                                <td class="py-3 px-2 text-center font-black">16</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">14:9</td>
                                <td class="py-3 px-2 text-center">+5</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#4</td>
                                <td class="py-3 px-2">Instituto</td>
                                <td class="py-3 px-2 text-center font-black">16</td>
                                <td class="py-3 px-2 text-center">8</td>
                                <td class="py-3 px-2 text-center">8:5</td>
                                <td class="py-3 px-2 text-center">+3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Grupo B -->
            <div class="bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 lg:p-8">
                <div class="flex items-center justify-between mb-6 border-b border-blue-800/60 pb-4">
                    <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">📁 GRUPO B</span>
                    <span class="text-[10px] bg-boca-dark text-cyan-400 px-3 py-1 rounded-lg border border-cyan-500/30 font-mono">Fase de Zonas</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-gray-400 border-b border-blue-800/60 font-mono text-[11px]">
                                <th class="pb-3 px-2">#</th>
                                <th class="pb-3 px-2">EQUIPOS</th>
                                <th class="pb-3 px-2 text-center">PTS</th>
                                <th class="pb-3 px-2 text-center">J</th>
                                <th class="pb-3 px-2 text-center">GOL</th>
                                <th class="pb-3 px-2 text-center">+/-</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-blue-900/40 font-medium">
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#1</td>
                                <td class="py-3 px-2">Argentinos</td>
                                <td class="py-3 px-2 text-center font-black">18</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">13:8</td>
                                <td class="py-3 px-2 text-center">+5</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#2</td>
                                <td class="py-3 px-2">Sarmiento</td>
                                <td class="py-3 px-2 text-center font-black">16</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">16:13</td>
                                <td class="py-3 px-2 text-center">+3</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#3</td>
                                <td class="py-3 px-2">Gimnasia</td>
                                <td class="py-3 px-2 text-center font-black">16</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">13:13</td>
                                <td class="py-3 px-2 text-center">0</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#4</td>
                                <td class="py-3 px-2">Central</td>
                                <td class="py-3 px-2 text-center font-black">15</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">10:8</td>
                                <td class="py-3 px-2 text-center">+2</td>
                            </tr>
                            <tr class="text-gray-200 border-l-4 border-transparent">
                                <td class="py-3 px-2">#5</td>
                                <td class="py-3 px-2">Independiente Riv.</td>
                                <td class="py-3 px-2 text-center font-black">14</td>
                                <td class="py-3 px-2 text-center">9</td>
                                <td class="py-3 px-2 text-center">13:13</td>
                                <td class="py-3 px-2 text-center">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <!-- 2. TABLA ANUAL -->
        <section class="bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 lg:p-8">
            <div class="flex items-center justify-between mb-6 border-b border-blue-800/60 pb-4">
                <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">📊 TABLA ANUAL ACUMULADA</span>
                <span class="text-[10px] bg-boca-dark text-boca-yellow px-3 py-1 rounded-lg border border-boca-yellow/30 font-mono">Clasificación a Copas</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="text-gray-400 border-b border-blue-800/60 font-mono text-[11px]">
                            <th class="pb-3 px-3">#</th>
                            <th class="pb-3 px-3">EQUIPO</th>
                            <th class="pb-3 px-3 text-center">PTS</th>
                            <th class="pb-3 px-3 text-center">J</th>
                            <th class="pb-3 px-3 text-center">GOL</th>
                            <th class="pb-3 px-3 text-center">+/-</th>
                            <th class="pb-3 px-3 text-center">G</th>
                            <th class="pb-3 px-3 text-center">E</th>
                            <th class="pb-3 px-3 text-center">P</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-900/40 font-medium">
                        <tr class="text-gray-200 border-l-4 border-emerald-500">
                            <td class="py-3 px-3">1</td>
                            <td class="py-3 px-3 font-bold">Independiente Riv.</td>
                            <td class="py-3 px-3 text-center font-black text-white">48</td>
                            <td class="py-3 px-3 text-center">25</td>
                            <td class="py-3 px-3 text-center">42:28</td>
                            <td class="py-3 px-3 text-center">+14</td>
                            <td class="py-3 px-3 text-center">14</td>
                            <td class="py-3 px-3 text-center">6</td>
                            <td class="py-3 px-3 text-center">5</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-boca-yellow">
                            <td class="py-3 px-3">2</td>
                            <td class="py-3 px-3 font-bold">Argentinos</td>
                            <td class="py-3 px-3 text-center font-black text-white">47</td>
                            <td class="py-3 px-3 text-center">25</td>
                            <td class="py-3 px-3 text-center">30:21</td>
                            <td class="py-3 px-3 text-center">+9</td>
                            <td class="py-3 px-3 text-center">13</td>
                            <td class="py-3 px-3 text-center">8</td>
                            <td class="py-3 px-3 text-center">4</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-boca-yellow">
                            <td class="py-3 px-3">3</td>
                            <td class="py-3 px-3 font-bold">Vélez</td>
                            <td class="py-3 px-3 text-center font-black text-white">45</td>
                            <td class="py-3 px-3 text-center">25</td>
                            <td class="py-3 px-3 text-center">30:19</td>
                            <td class="py-3 px-3 text-center">+11</td>
                            <td class="py-3 px-3 text-center">11</td>
                            <td class="py-3 px-3 text-center">12</td>
                            <td class="py-3 px-3 text-center">2</td>
                        </tr>
                        <tr class="bg-blue-900/80 text-boca-yellow font-bold border-l-4 border-cyan-400">
                            <td class="py-3 px-3">4</td>
                            <td class="py-3 px-3 flex items-center gap-1.5">Boca Jrs. <span class="text-sm">⭐</span></td>
                            <td class="py-3 px-3 text-center font-black text-boca-yellow">44</td>
                            <td class="py-3 px-3 text-center">25</td>
                            <td class="py-3 px-3 text-center">34:20</td>
                            <td class="py-3 px-3 text-center">+14</td>
                            <td class="py-3 px-3 text-center">11</td>
                            <td class="py-3 px-3 text-center">11</td>
                            <td class="py-3 px-3 text-center">3</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-cyan-400">
                            <td class="py-3 px-3">5</td>
                            <td class="py-3 px-3 font-bold">Central</td>
                            <td class="py-3 px-3 text-center font-black text-white">43</td>
                            <td class="py-3 px-3 text-center">25</td>
                            <td class="py-3 px-3 text-center">30:24</td>
                            <td class="py-3 px-3 text-center">+6</td>
                            <td class="py-3 px-3 text-center">12</td>
                            <td class="py-3 px-3 text-center">7</td>
                            <td class="py-3 px-3 text-center">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Referencias de Copas -->
            <div class="mt-6 pt-4 border-t border-blue-800/60 flex flex-wrap gap-4 text-[11px] text-gray-300 font-medium">
                <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span> Campeón / Libertadores</span>
                <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-boca-yellow inline-block"></span> CONMEBOL Libertadores</span>
                <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-cyan-400 inline-block"></span> CONMEBOL Sudamericana</span>
            </div>
        </section>

        <!-- 3. PROMEDIOS (RELEGATION) -->
        <section class="bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 lg:p-8">
            <div class="flex items-center justify-between mb-6 border-b border-blue-800/60 pb-4">
                <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">📉 TABLA DE PROMEDIOS (DESCENSO)</span>
                <span class="text-[10px] bg-boca-dark text-gray-300 px-3 py-1 rounded-lg border border-blue-800 font-mono">Temporadas 24, 25 y 26</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="text-gray-400 border-b border-blue-800/60 font-mono text-[11px]">
                            <th class="pb-3 px-3">#</th>
                            <th class="pb-3 px-3">EQUIPOS</th>
                            <th class="pb-3 px-3 text-center">PROM</th>
                            <th class="pb-3 px-3 text-center">PTS</th>
                            <th class="pb-3 px-3 text-center">PJ</th>
                            <th class="pb-3 px-3 text-center">24</th>
                            <th class="pb-3 px-3 text-center">25</th>
                            <th class="pb-3 px-3 text-center">26</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-900/40 font-medium">
                        <tr class="bg-blue-900/80 text-boca-yellow font-bold border-l-4 border-boca-yellow">
                            <td class="py-3 px-3">1</td>
                            <td class="py-3 px-3 flex items-center gap-1.5">Boca Jrs. <span class="text-sm">⭐</span></td>
                            <td class="py-3 px-3 text-center font-black text-boca-yellow">1.765</td>
                            <td class="py-3 px-3 text-center">173</td>
                            <td class="py-3 px-3 text-center">98</td>
                            <td class="py-3 px-3 text-center">67</td>
                            <td class="py-3 px-3 text-center">62</td>
                            <td class="py-3 px-3 text-center">44</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-transparent">
                            <td class="py-3 px-3">2</td>
                            <td class="py-3 px-3">River</td>
                            <td class="py-3 px-3 text-center font-black">1.684</td>
                            <td class="py-3 px-3 text-center">165</td>
                            <td class="py-3 px-3 text-center">98</td>
                            <td class="py-3 px-3 text-center">70</td>
                            <td class="py-3 px-3 text-center">53</td>
                            <td class="py-3 px-3 text-center">42</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-transparent">
                            <td class="py-3 px-3">3</td>
                            <td class="py-3 px-3">Vélez</td>
                            <td class="py-3 px-3 text-center font-black">1.643</td>
                            <td class="py-3 px-3 text-center">161</td>
                            <td class="py-3 px-3 text-center">98</td>
                            <td class="py-3 px-3 text-center">76</td>
                            <td class="py-3 px-3 text-center">40</td>
                            <td class="py-3 px-3 text-center">45</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-transparent">
                            <td class="py-3 px-3">4</td>
                            <td class="py-3 px-3">Argentinos</td>
                            <td class="py-3 px-3 text-center font-black">1.633</td>
                            <td class="py-3 px-3 text-center">160</td>
                            <td class="py-3 px-3 text-center">98</td>
                            <td class="py-3 px-3 text-center">56</td>
                            <td class="py-3 px-3 text-center">57</td>
                            <td class="py-3 px-3 text-center">47</td>
                        </tr>
                        <tr class="text-gray-200 border-l-4 border-transparent">
                            <td class="py-3 px-3">5</td>
                            <td class="py-3 px-3">Central</td>
                            <td class="py-3 px-3 text-center font-black">1.592</td>
                            <td class="py-3 px-3 text-center">156</td>
                            <td class="py-3 px-3 text-center">98</td>
                            <td class="py-3 px-3 text-center">47</td>
                            <td class="py-3 px-3 text-center">66</td>
                            <td class="py-3 px-3 text-center">43</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Referencia de Descenso -->
            <div class="mt-6 pt-4 border-t border-blue-800/60 flex items-center gap-2 text-[11px] text-gray-300 font-medium">
                <span class="w-3 h-3 rounded-full bg-red-600 inline-block"></span> Zona de Descenso (Últimos puestos)
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-boca-blue text-gray-300 text-center py-6 text-xs border-t-2 border-blue-800 w-full mt-auto">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

</body>
</html>