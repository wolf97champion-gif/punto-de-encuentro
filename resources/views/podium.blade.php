<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación del Podio - Punto de Encuentro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-boca-blue { background-color: #001f54; }
        .bg-boca-yellow { background-color: #f7b32b; }
        .text-boca-yellow { color: #f7b32b; }
        .border-boca-yellow { border-color: #f7b32b; }
        @keyframes popIn {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .animate-pop { animation: popIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; }
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

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-8">

        <!-- MODO SELECCIÓN DE PODIO -->
        <div id="selection-screen" class="space-y-8">
            <!-- Header Interactivo -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 shadow-lg">
                <div>
                    <h2 class="text-2xl font-black text-white uppercase tracking-wide">
                        ⭐ Armá tu <span class="text-boca-yellow">Podio del Partido</span>
                    </h2>
                    <p class="text-xs text-gray-400 mt-1">Hacé clic en 3 jugadores del plantel actual para formar tu podio oficial.</p>
                </div>
                <button id="reset-btn" onclick="resetPodium()" class="hidden bg-red-600/80 hover:bg-red-600 text-white font-bold px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition">
                    🔄 Reiniciar
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- Lista de Jugadores (Plantel Actual) -->
                <section class="lg:col-span-7 bg-gray-800/80 p-6 rounded-2xl border border-gray-700 shadow-xl space-y-4">
                    <h3 class="text-sm font-black text-boca-yellow uppercase tracking-widest border-b border-gray-700 pb-3 flex justify-between items-center">
                        <span>📋 Plantel Profesional</span>
                        <span class="text-[11px] text-gray-400">DT: Rodolfo Arruabarrena</span>
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 max-h-[550px] overflow-y-auto pr-2" id="players-list">
                        <!-- Carga dinámica vía JS -->
                    </div>
                </section>

                <!-- Panel Lateral / Selección -->
                <section class="lg:col-span-5 bg-gradient-to-b from-gray-800 to-gray-900 p-6 rounded-2xl border-2 border-boca-yellow/50 shadow-2xl flex flex-col justify-between space-y-6">
                    <div>
                        <h3 class="text-sm font-black text-white uppercase tracking-widest border-b border-gray-700 pb-3 flex justify-between items-center">
                            <span>🏆 Selección Actual</span>
                            <span id="counter-badge" class="bg-boca-yellow text-boca-blue text-[10px] font-black px-2.5 py-0.5 rounded-full">0/3</span>
                        </h3>

                        <div class="space-y-3 mt-4">
                            <!-- 1° Puesto -->
                            <div id="slot-1" class="bg-gray-900/90 border border-boca-yellow/40 rounded-xl p-4 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">🥇</span>
                                    <div>
                                        <div class="text-[10px] text-boca-yellow font-black uppercase">1° Puesto — Figura</div>
                                        <div class="text-sm font-black text-white placeholder-text">Elegí el 1° lugar...</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2° Puesto -->
                            <div id="slot-2" class="bg-gray-900/90 border border-gray-700 rounded-xl p-4 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">🥈</span>
                                    <div>
                                        <div class="text-[10px] text-blue-400 font-black uppercase">2° Puesto</div>
                                        <div class="text-sm font-black text-white placeholder-text">Elegí el 2° lugar...</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3° Puesto -->
                            <div id="slot-3" class="bg-gray-900/90 border border-gray-700 rounded-xl p-4 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">🥉</span>
                                    <div>
                                        <div class="text-[10px] text-orange-400 font-black uppercase">3° Puesto</div>
                                        <div class="text-sm font-black text-white placeholder-text">Elegí el 3° lugar...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button id="submit-btn" disabled onclick="confirmPodium()" class="w-full bg-gray-700 text-gray-400 cursor-not-allowed font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow">
                            Elegí 3 jugadores para confirmar
                        </button>
                    </div>
                </section>

            </div>
        </div>


        <!-- DASHBOARD MODO FESTEJO (Oculto al inicio) -->
        <div id="celebration-dashboard" class="hidden space-y-8 animate-pop">
            
            <!-- Banner Festejo -->
            <div class="bg-gradient-to-r from-boca-blue via-blue-900 to-boca-blue p-8 rounded-3xl border-2 border-boca-yellow shadow-2xl text-center space-y-3 relative overflow-hidden">
                <span class="bg-boca-yellow text-boca-blue text-xs font-black px-4 py-1.5 rounded-full uppercase tracking-widest inline-block shadow">
                    🎉 Voto Confirmado Exitosamente
                </span>
                <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-wider">
                    ¡ESTE ES TU <span class="text-boca-yellow">PODIO DE LA FECHA</span>!
                </h2>
                <p class="text-sm text-gray-300 max-w-xl mx-auto">
                    Tu votación ya se sumó al conteo general de la comunidad de Punto de Encuentro.
                </p>
            </div>

            <!-- Podio Festejo Estilo Tarjetas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                
                <!-- 1° Puesto (Destacado) -->
                <div class="bg-gray-800/90 rounded-2xl border-2 border-boca-yellow p-6 text-center space-y-3 relative shadow-2xl transform md:-translate-y-2">
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-boca-yellow text-boca-blue text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-wider shadow">
                        FIGURA DEL PARTIDO
                    </span>
                    <div class="w-12 h-12 bg-boca-yellow/20 text-boca-yellow border-2 border-boca-yellow rounded-full flex items-center justify-center font-black mx-auto text-xl mt-2">
                        🥇
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-white" id="fest-name-1">-</h3>
                        <p class="text-xs text-boca-yellow font-bold uppercase tracking-widest mt-0.5" id="fest-pos-1">-</p>
                    </div>
                </div>

                <!-- 2° Puesto -->
                <div class="bg-gray-800/80 rounded-2xl border border-blue-400/50 p-6 text-center space-y-3 shadow-xl">
                    <div class="w-12 h-12 bg-blue-500/20 text-blue-400 border-2 border-blue-400 rounded-full flex items-center justify-center font-black mx-auto text-xl">
                        🥈
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-white" id="fest-name-2">-</h3>
                        <p class="text-xs text-blue-400 font-bold uppercase tracking-widest mt-0.5" id="fest-pos-2">-</p>
                    </div>
                </div>

                <!-- 3° Puesto -->
                <div class="bg-gray-800/80 rounded-2xl border border-orange-400/50 p-6 text-center space-y-3 shadow-xl">
                    <div class="w-12 h-12 bg-orange-500/20 text-orange-400 border-2 border-orange-400 rounded-full flex items-center justify-center font-black mx-auto text-xl">
                        🥉
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-white" id="fest-name-3">-</h3>
                        <p class="text-xs text-orange-400 font-bold uppercase tracking-widest mt-0.5" id="fest-pos-3">-</p>
                    </div>
                </div>

            </div>

            <!-- Botones Festejo -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 pt-4">
                <button onclick="resetPodium()" class="w-full sm:w-auto bg-boca-yellow hover:bg-yellow-400 text-boca-blue font-black py-3.5 px-8 rounded-xl text-xs uppercase tracking-wide transition shadow-lg">
                    ✏️ Modificar o Volver a Votar
                </button>
                <a href="/" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 text-white font-bold py-3.5 px-8 rounded-xl text-xs uppercase tracking-wide border border-gray-700 transition text-center">
                    🏠 Volver al Inicio / Live
                </a>
            </div>

        </div>

    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

    <!-- Lógica JavaScript del Plantel -->
    <script>
        const squad = [
            // ARQUEROS
            { id: 1, name: 'Agustín Marchesín', pos: 'Arquero', cat: 'ARQ' },
            { id: 1, name: 'Alvaro Montero', pos: 'Arquero', cat: 'ARQ' },
            { id: 12, name: 'Leandro Brey', pos: 'Arquero', cat: 'ARQ' },
            { id: 30, name: 'Javier García', pos: 'Arquero', cat: 'ARQ' },

            // DEFENSAS
            { id: 2, name: 'Lautaro Di Lollo', pos: 'Defensa Central', cat: 'DEF' },
            { id: 3, name: 'Lautaro Blanco', pos: 'Lateral Izquierdo', cat: 'DEF' },
            { id: 4, name: 'Nicolás Figal', pos: 'Defensa Central', cat: 'DEF' },
            { id: 17, name: 'Leandro Lozano', pos: 'Lateral Derecho', cat: 'DEF' },
            { id: 24, name: 'Dylan Gorosito', pos: 'Lateral Derecho', cat: 'DEF' },
            { id: 26, name: 'Marco Pellegrino', pos: 'Defensa Central', cat: 'DEF' },
            { id: 27, name: 'Malcom Braida', pos: 'Lateral Izquierdo', cat: 'DEF' },
            { id: 32, name: 'Ayrton Costa', pos: 'Defensa Central', cat: 'DEF' },
            { id: 42, name: 'Facundo Herrera', pos: 'Defensa Central', cat: 'DEF' },

            // MEDIOCAMPISTAS
            { id: 0, name: 'Juan Ramírez', pos: 'Mediocampista Central', cat: 'MED' },
            { id: 5, name: 'Leandro Paredes', pos: 'Centrocampista Defensivo', cat: 'MED' },
            { id: 6, name: 'Rodrigo Battaglia', pos: 'Centrocampista Defensivo', cat: 'MED' },
            { id: 7, name: 'Carlos Palacios', pos: 'Mediocampista Ofensivo', cat: 'MED' },
            { id: 10, name: 'Tomás Aranda', pos: 'Mediocampista Ofensivo', cat: 'MED' },
            { id: 15, name: 'Williams Alarcón', pos: 'Mediocampista Central', cat: 'MED' },
            { id: 18, name: 'Milton Delgado', pos: 'Centrocampista Defensivo', cat: 'MED' },
            { id: 23, name: 'Camilo Rey Domenech', pos: 'Centrocampista Defensivo', cat: 'MED' },
            { id: 25, name: 'Santiago Ascacibar', pos: 'Centrocampista Defensivo', cat: 'MED' },
            { id: 30, name: 'Tomás Belmonte', pos: 'Centrocampista Defensivo', cat: 'MED' },

            // DELANTEROS
            { id: 9, name: 'Milton Giménez', pos: 'Centro Delantero', cat: 'DEL' },
            { id: 11, name: 'Ángel Romero', pos: 'Delantero Derecho', cat: 'DEL' },
            { id: 13, name: 'Enner Valencia', pos: 'Centro Delantero', cat: 'DEL' },
            { id: 16, name: 'Miguel Merentiel', pos: 'Centro Delantero', cat: 'DEL' },
            { id: 19, name: 'Leonel Flores', pos: 'Delantero Derecho', cat: 'DEL' },
            { id: 20, name: 'Alan Velasco', pos: 'Delantero Izquierdo', cat: 'DEL' },
            { id: 22, name: 'Sebastián Villa', pos: 'Delantero Izquierdo', cat: 'DEL' },
            { id: 28, name: 'Adam Bareiro', pos: 'Centro Delantero', cat: 'DEL' }
        ];

        let selected = [];

        function renderPlayers() {
            const container = document.getElementById('players-list');
            container.innerHTML = '';

            squad.forEach((player, idx) => {
                const isSelected = selected.some(p => p.uniqueId === idx);
                const btn = document.createElement('button');
                btn.disabled = selected.length >= 3 && !isSelected;
                
                btn.className = `p-3 rounded-xl border text-left flex justify-between items-center transition ${
                    isSelected 
                        ? 'bg-boca-yellow text-boca-blue border-boca-yellow font-black shadow-lg' 
                        : 'bg-gray-900/90 text-gray-200 border-gray-700 hover:border-boca-yellow/60 hover:bg-gray-800'
                } ${btn.disabled && !isSelected ? 'opacity-30 cursor-not-allowed' : ''}`;

                btn.onclick = () => togglePlayer(player, idx);
                btn.innerHTML = `
                    <div>
                        <div class="text-xs font-bold">${player.id ? '#' + player.id + ' ' : ''}${player.name}</div>
                        <div class="text-[9px] opacity-75 uppercase font-semibold">${player.pos}</div>
                    </div>
                    ${isSelected ? '<span class="text-xs bg-boca-blue text-boca-yellow px-1.5 py-0.5 rounded font-black">✓</span>' : ''}
                `;
                container.appendChild(btn);
            });
        }

        function togglePlayer(player, uniqueId) {
            const index = selected.findIndex(p => p.uniqueId === uniqueId);
            if (index > -1) {
                selected.splice(index, 1);
            } else if (selected.length < 3) {
                selected.push({ ...player, uniqueId });
            }
            updateDashboard();
            renderPlayers();
        }

        function updateDashboard() {
            document.getElementById('counter-badge').innerText = `${selected.length}/3`;
            document.getElementById('reset-btn').classList.toggle('hidden', selected.length === 0);

            for (let i = 1; i <= 3; i++) {
                const slot = document.getElementById(`slot-${i}`);
                const player = selected[i - 1];
                const textElem = slot.querySelector('.placeholder-text');

                if (player) {
                    textElem.innerText = `${player.name} (${player.cat})`;
                    textElem.classList.remove('text-gray-500', 'italic');
                    slot.classList.add('border-boca-yellow');
                } else {
                    textElem.innerText = `Elegí el ${i}° lugar...`;
                    textElem.classList.add('text-gray-500', 'italic');
                    slot.classList.remove('border-boca-yellow');
                }
            }

            const submitBtn = document.getElementById('submit-btn');
            if (selected.length === 3) {
                submitBtn.disabled = false;
                submitBtn.className = 'w-full bg-boca-yellow hover:bg-yellow-400 text-boca-blue cursor-pointer font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow-lg transform hover:scale-102';
                submitBtn.innerText = '✨ CONFIRMAR MI PODIO';
            } else {
                submitBtn.disabled = true;
                submitBtn.className = 'w-full bg-gray-700 text-gray-400 cursor-not-allowed font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow';
                submitBtn.innerText = `Selecciona ${3 - selected.length} jugador(es) más`;
            }
        }

        function confirmPodium() {
            if (selected.length !== 3) return;

            // Cargar datos en el Dashboard Festejo
            for (let i = 1; i <= 3; i++) {
                document.getElementById(`fest-name-${i}`).innerText = selected[i-1].name;
                document.getElementById(`fest-pos-${i}`).innerText = selected[i-1].pos;
            }

            // Ocultar selección y mostrar Dashboard Festejo
            document.getElementById('selection-screen').classList.add('hidden');
            document.getElementById('celebration-dashboard').classList.remove('hidden');
        }

        function resetPodium() {
            selected = [];
            document.getElementById('celebration-dashboard').classList.add('hidden');
            document.getElementById('selection-screen').classList.remove('hidden');
            updateDashboard();
            renderPlayers();
        }

        // Carga inicial
        renderPlayers();
    </script>
</body>
</html>