<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podio del Partido - Punto de Encuentro</title>
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
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(0, 19, 51, 0.6);
            border-radius: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(243, 195, 0, 0.3);
            border-radius: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(243, 195, 0, 0.6);
        }
    </style>
</head>
<body class="bg-boca-dark text-gray-100 font-sans min-h-screen flex flex-col justify-between antialiased selection:bg-boca-yellow selection:text-boca-dark">

    <!-- Navbar Superior -->
    <header class="sticky top-4 z-50 px-6 lg:px-12 max-w-[1600px] mx-auto w-full">
        <div class="bg-boca-blue/85 backdrop-blur-md border border-blue-600/40 shadow-2xl rounded-2xl px-6 py-3.5 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-boca-yellow text-boca-blue font-black flex items-center justify-center rounded-xl text-lg shadow-md group-hover:scale-105 transition duration-300">PE</div>
                <div>
                    <span class="text-base lg:text-lg font-black tracking-wider text-white">PUNTO DE <span class="text-boca-yellow">ENCUENTRO</span></span>
                    <span class="block text-[9px] text-gray-300 tracking-wider font-semibold uppercase">La web de la comunidad xeneize</span>
                </div>
            </a>
            <nav class="hidden md:flex items-center space-x-2 text-xs font-bold uppercase tracking-wider">
                <a href="/" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Inicio / Live</a>
                <a href="/goleadores" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Goleadores</a>
                <a href="/podio" class="bg-boca-yellow text-boca-dark px-4 py-2 rounded-xl shadow-md transition">Podio del Partido</a>
                <a href="/tablas" class="text-gray-300 hover:text-white hover:bg-blue-900/60 px-4 py-2 rounded-xl transition">Tablas & Posiciones</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow max-w-[1600px] w-full mx-auto px-6 lg:px-12 py-8 space-y-8">
        
        <!-- Banner Superior -->
        <div class="bg-gradient-to-r from-boca-blue/60 via-blue-900/70 to-boca-blue/60 border border-blue-600/40 rounded-3xl p-6 lg:p-8 shadow-xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-boca-yellow/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="space-y-1 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2">
                    <span class="text-xl">⭐</span>
                    <h1 class="text-xl lg:text-2xl font-black text-white tracking-tight uppercase">ARMÁ TU PODIO DEL PARTIDO</h1>
                </div>
                <p class="text-xs text-gray-300">Hacé clic en 3 jugadores del plantel actual para armar tu podio oficial de la fecha.</p>
            </div>
            <div class="bg-boca-dark/80 border border-blue-800/80 px-4 py-2 rounded-2xl text-xs font-mono text-boca-yellow tracking-wider shadow-inner">
                FECHA 9 • TORNEO 2026
            </div>
        </div>

        <!-- Grilla Principal -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Columna Izquierda: Plantel Completo por Secciones -->
            <div class="lg:col-span-7 bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 flex flex-col h-[680px]">
                
                <div class="flex items-center justify-between pb-4 mb-4 border-b border-blue-800/60">
                    <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">
                        📋 PLANTEL PROFESIONAL
                    </span>
                    <span class="text-[11px] font-mono text-gray-400 bg-boca-dark/60 px-3 py-1 rounded-xl border border-blue-900">
                        DT: <strong class="text-white">Rodolfo Arruabarrena</strong>
                    </span>
                </div>

                <!-- Lista con Scroll Personalizado -->
                <div class="overflow-y-auto pr-2 space-y-4 custom-scrollbar flex-grow">
                    
                    <!-- ARQUEROS -->
                    <div>
                        <div class="text-[10px] font-black text-boca-yellow tracking-widest uppercase mb-2 px-1">Arqueros</div>
                        <div class="space-y-2">
                            <button onclick="seleccionarJugador(1, 'Agustín Marchesín', 'ARQUERO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#1</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Agustín Marchesín</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Arquero</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(1, 'Alvaro Montero', 'ARQUERO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#1</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Alvaro Montero</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Arquero</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(12, 'Leandro Brey', 'ARQUERO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#12</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Leandro Brey</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Arquero</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(30, 'Javier García', 'ARQUERO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#30</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Javier García</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Arquero</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                        </div>
                    </div>

                    <!-- DEFENSORES -->
                    <div>
                        <div class="text-[10px] font-black text-boca-yellow tracking-widest uppercase mb-2 px-1">Defensores</div>
                        <div class="space-y-2">
                            <button onclick="seleccionarJugador(2, 'Lautaro Di Lollo', 'DEFENSA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#2</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Lautaro Di Lollo</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Defensa Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(3, 'Lautaro Blanco', 'LATERAL IZQUIERDO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#3</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Lautaro Blanco</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Lateral Izquierdo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(4, 'Nicolás Figal', 'DEFENSA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#4</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Nicolás Figal</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Defensa Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(17, 'Leandro Lozano', 'LATERAL DERECHO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#17</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Leandro Lozano</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Lateral Derecho</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(24, 'Dylan Gorosito', 'LATERAL DERECHO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#24</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Dylan Gorosito</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Lateral Derecho</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(26, 'Marco Pellegrino', 'DEFENSA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#26</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Marco Pellegrino</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Defensa Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(27, 'Malcom Braida', 'LATERAL IZQUIERDO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#27</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Malcom Braida</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Lateral Izquierdo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(32, 'Ayrton Costa', 'DEFENSA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#32</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Ayrton Costa</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Defensa Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(42, 'Facundo Herrera', 'DEFENSA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#42</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Facundo Herrera</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Defensa Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                        </div>
                    </div>

                    <!-- MEDIOCAMPISTAS -->
                    <div>
                        <div class="text-[10px] font-black text-boca-yellow tracking-widest uppercase mb-2 px-1">Mediocampistas</div>
                        <div class="space-y-2">
                            <button onclick="seleccionarJugador(0, 'Juan Ramírez', 'MEDIOCAMPISTA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#--</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Juan Ramírez</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Mediocampista Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(5, 'Leandro Paredes', 'CENTROCAMPISTA DEFENSIVO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#5</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Leandro Paredes</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Centrocampista Defensivo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(6, 'Rodrigo Battaglia', 'CENTROCAMPISTA DEFENSIVO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#6</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Rodrigo Battaglia</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Centrocampista Defensivo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(7, 'Carlos Palacios', 'MEDIOCAMPISTA OFENSIVO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#7</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Carlos Palacios</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Mediocampista Ofensivo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(10, 'Tomás Aranda', 'MEDIOCAMPISTA OFENSIVO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#10</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Tomás Aranda</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Mediocampista Ofensivo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(15, 'Williams Alarcón', 'MEDIOCAMPISTA CENTRAL')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#15</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Williams Alarcón</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Mediocampista Central</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(18, 'Milton Delgado', 'CENTROCAMPISTA DEFENSIVO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#18</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Milton Delgado</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Centrocampista Defensivo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                        </div>
                    </div>

                    <!-- DELANTEROS -->
                    <div>
                        <div class="text-[10px] font-black text-boca-yellow tracking-widest uppercase mb-2 px-1">Delanteros</div>
                        <div class="space-y-2">
                            <button onclick="seleccionarJugador(9, 'Edinson Cavani', 'DELANTERO CENTRO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#9</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Edinson Cavani</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Delantero Centro</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(16, 'Miguel Merentiel', 'DELANTERO CENTRO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#16</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Miguel Merentiel</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Delantero Centro</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                            <button onclick="seleccionarJugador(41, 'Exequiel Zeballos', 'EXTREMO')" class="w-full text-left bg-blue-950/40 hover:bg-blue-900/60 border border-blue-800/50 hover:border-boca-yellow/60 p-3.5 rounded-2xl transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                <div class="flex items-center space-x-3">
                                    <span class="w-8 h-8 rounded-xl bg-boca-yellow/10 text-boca-yellow font-black text-xs flex items-center justify-center border border-boca-yellow/20 group-hover:bg-boca-yellow group-hover:text-boca-dark transition">#41</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-white group-hover:text-boca-yellow transition">Exequiel Zeballos</h4>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Extremo</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-semibold text-gray-500 group-hover:text-boca-yellow uppercase tracking-widest bg-boca-dark/40 px-2.5 py-1 rounded-lg">Seleccionar +</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Columna Derecha: Tu Podio Seleccionado -->
            <div class="lg:col-span-5 bg-boca-blue border border-blue-700/50 rounded-3xl shadow-2xl p-6 flex flex-col justify-between h-[680px]">
                <div>
                    <div class="flex items-center justify-between pb-4 mb-6 border-b border-blue-800/60">
                        <span class="text-xs font-black tracking-widest text-boca-yellow uppercase flex items-center gap-2">
                            🏆 TU PODIO ELEGIDO
                        </span>
                        <span id="contador-podio" class="text-[11px] font-mono text-gray-400 bg-boca-dark/60 px-3 py-1 rounded-xl border border-blue-900">
                            0 / 3 Seleccionados
                        </span>
                    </div>

                    <!-- Espacios del Podio -->
                    <div id="slots-podio" class="space-y-4">
                        <!-- Slot 1 (Oro) -->
                        <div class="bg-boca-dark/60 border border-blue-800/70 rounded-2xl p-4 flex items-center justify-between relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-yellow-400"></div>
                            <div class="flex items-center space-x-3 pl-2">
                                <div class="w-10 h-10 rounded-xl bg-yellow-400/10 text-yellow-400 font-black text-sm flex items-center justify-center border border-yellow-400/20">1°</div>
                                <div>
                                    <h4 id="podio-1-nombre" class="text-xs font-bold text-gray-400 italic">Seleccioná el 1° puesto</h4>
                                    <span id="podio-1-pos" class="text-[10px] text-gray-500 uppercase tracking-wider">Mejor jugador del partido</span>
                                </div>
                            </div>
                            <span class="text-lg">🥇</span>
                        </div>

                        <!-- Slot 2 (Plata) -->
                        <div class="bg-boca-dark/60 border border-blue-800/70 rounded-2xl p-4 flex items-center justify-between relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-gray-300"></div>
                            <div class="flex items-center space-x-3 pl-2">
                                <div class="w-10 h-10 rounded-xl bg-gray-300/10 text-gray-300 font-black text-sm flex items-center justify-center border border-gray-300/20">2°</div>
                                <div>
                                    <h4 id="podio-2-nombre" class="text-xs font-bold text-gray-400 italic">Seleccioná el 2° puesto</h4>
                                    <span id="podio-2-pos" class="text-[10px] text-gray-500 uppercase tracking-wider">Segundo destacado</span>
                                </div>
                            </div>
                            <span class="text-lg">🥈</span>
                        </div>

                        <!-- Slot 3 (Bronce) -->
                        <div class="bg-boca-dark/60 border border-blue-800/70 rounded-2xl p-4 flex items-center justify-between relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-amber-600"></div>
                            <div class="flex items-center space-x-3 pl-2">
                                <div class="w-10 h-10 rounded-xl bg-amber-600/10 text-amber-600 font-black text-sm flex items-center justify-center border border-amber-600/20">3°</div>
                                <div>
                                    <h4 id="podio-3-nombre" class="text-xs font-bold text-gray-400 italic">Seleccioná el 3° puesto</h4>
                                    <span id="podio-3-pos" class="text-[10px] text-gray-500 uppercase tracking-wider">Tercer destacado</span>
                                </div>
                            </div>
                            <span class="text-lg">🥉</span>
                        </div>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="space-y-3 pt-4 border-t border-blue-800/60">
                    <button id="btn-enviar" onclick="enviarPodio()" disabled class="w-full bg-gray-700 text-gray-400 font-bold py-3.5 rounded-2xl text-xs uppercase tracking-wider cursor-not-allowed transition shadow-md">
                        Enviar mi Podio Oficial
                    </button>
                    <button onclick="reiniciarPodio()" class="w-full bg-blue-950/60 hover:bg-blue-900/80 text-gray-300 hover:text-white border border-blue-800/50 font-bold py-2.5 rounded-2xl text-[11px] uppercase tracking-wider transition">
                        Reiniciar Selección
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="max-w-[1600px] w-full mx-auto px-6 lg:px-12 py-6 text-center text-xs text-gray-500 border-t border-blue-900/40">
        Punto de Encuentro &bull; La comunidad xeneize &copy; 2026
    </footer>

    <!-- Script de Interactividad del Podio -->
    <script>
        let podioSeleccionado = [];

        function seleccionarJugador(dorsal, nombre, posicion) {
            // Evitar duplicados
            if (podioSeleccionado.some(j => j.nombre === nombre)) {
                alert("Ya seleccionaste a este jugador.");
                return;
            }

            if (podioSeleccionado.length >= 3) {
                alert("Ya completaste los 3 puestos del podio. Podés reiniciar si querés cambiarlo.");
                return;
            }

            podioSeleccionado.push({ dorsal, nombre, posicion });
            actualizarVistaPodio();
        }

        function actualizarVistaPodio() {
            for (let i = 0; i < 3; i++) {
                const nombreEl = document.getElementById(`podio-${i + 1}-nombre`);
                const posEl = document.getElementById(`podio-${i + 1}-pos`);

                if (podioSeleccionado[i]) {
                    nombreEl.textContent = `#${podioSeleccionado[i].dorsal} - ${podioSeleccionado[i].nombre}`;
                    nombreEl.className = "text-xs font-bold text-white";
                    posEl.textContent = podioSeleccionado[i].posicion;
                } else {
                    nombreEl.textContent = `Seleccioná el ${i + 1}° puesto`;
                    nombreEl.className = "text-xs font-bold text-gray-400 italic";
                    posEl.textContent = i === 0 ? "Mejor jugador del partido" : (i === 1 ? "Segundo destacado" : "Tercer destacado");
                }
            }

            const contador = document.getElementById('contador-podio');
            contador.textContent = `${podioSeleccionado.length} / 3 Seleccionados`;

            const btnEnviar = document.getElementById('btn-enviar');
            if (podioSeleccionado.length === 3) {
                btnEnviar.disabled = false;
                btnEnviar.className = "w-full bg-boca-yellow hover:bg-yellow-400 text-boca-dark font-black py-3.5 rounded-2xl text-xs uppercase tracking-wider cursor-pointer transition shadow-lg shadow-yellow-500/10";
            } else {
                btnEnviar.disabled = true;
                btnEnviar.className = "w-full bg-gray-700 text-gray-400 font-bold py-3.5 rounded-2xl text-xs uppercase tracking-wider cursor-not-allowed transition shadow-md";
            }
        }

        function reiniciarPodio() {
            podioSeleccionado = [];
            actualizarVistaPodio();
        }

        function enviarPodio() {
            alert("¡Podio enviado con éxito! Gracias por participar en Punto de Encuentro.");
            reiniciarPodio();
        }
    </script>
</body>
</html>