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

    <main class="flex-grow max-w-[1400px] w-full mx-auto px-6 py-8 space-y-8">

        <!-- Header Interactivo -->
        <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h2 class="text-2xl font-black text-white uppercase tracking-wide">
                    ⭐ Armá tu <span class="text-boca-yellow">Podio del Partido</span>
                </h2>
                <p class="text-xs text-gray-400 mt-1">Hacé clic en 3 convocados para definir tu Top 3 de las figuras del encuentro.</p>
            </div>
            <button id="reset-btn" onclick="resetPodium()" class="hidden bg-red-600/80 hover:bg-red-600 text-white font-bold px-4 py-2 rounded-xl text-xs uppercase tracking-wider transition">
                🔄 Reiniciar Voto
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- Lista de Convocados (7 de 12 col) -->
            <section class="lg:col-span-7 bg-gray-800/80 p-6 rounded-2xl border border-gray-700 shadow-xl space-y-4">
                <h3 class="text-sm font-black text-boca-yellow uppercase tracking-widest border-b border-gray-700 pb-3">
                    📋 Convocados Oficiales (Selecciona 3)
                </h3>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 max-h-[500px] overflow-y-auto pr-2" id="players-list">
                    <!-- Javascript cargará los jugadores aquí -->
                </div>
            </section>

            <!-- Armador / Dashboard de Podio (5 de 12 col) -->
            <section class="lg:col-span-5 bg-gradient-to-b from-gray-800 to-gray-900 p-6 rounded-2xl border-2 border-boca-yellow/50 shadow-2xl flex flex-col justify-between space-y-6">
                <div>
                    <h3 class="text-sm font-black text-white uppercase tracking-widest border-b border-gray-700 pb-3 flex justify-between items-center">
                        <span>🏆 Tu Dashboard de Podio</span>
                        <span id="counter-badge" class="bg-boca-yellow text-boca-blue text-[10px] font-black px-2.5 py-0.5 rounded-full">0/3</span>
                    </h3>

                    <!-- Podio Vivo -->
                    <div class="space-y-3 mt-4">
                        
                        <!-- 1° Lugar -->
                        <div id="slot-1" class="bg-gray-900/90 border border-boca-yellow/40 rounded-xl p-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="text-xl">🥇</span>
                                <div>
                                    <div class="text-[10px] text-boca-yellow font-black uppercase">1° Puesto — Figura</div>
                                    <div class="text-base font-black text-white placeholder-text">Seleccionar jugador...</div>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500 font-mono">#1</span>
                        </div>

                        <!-- 2° Lugar -->
                        <div id="slot-2" class="bg-gray-900/90 border border-gray-700 rounded-xl p-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="text-xl">🥈</span>
                                <div>
                                    <div class="text-[10px] text-blue-400 font-black uppercase">2° Puesto</div>
                                    <div class="text-base font-black text-white placeholder-text">Seleccionar jugador...</div>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500 font-mono">#2</span>
                        </div>

                        <!-- 3° Lugar -->
                        <div id="slot-3" class="bg-gray-900/90 border border-gray-700 rounded-xl p-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="text-xl">🥉</span>
                                <div>
                                    <div class="text-[10px] text-orange-400 font-black uppercase">3° Puesto</div>
                                    <div class="text-base font-black text-white placeholder-text">Seleccionar jugador...</div>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500 font-mono">#3</span>
                        </div>

                    </div>
                </div>

                <!-- Botón de Confirmar / Confirmación -->
                <div id="action-container">
                    <button id="submit-btn" disabled onclick="confirmPodium()" class="w-full bg-gray-700 text-gray-400 cursor-not-allowed font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow">
                        Completá los 3 puestos para votar
                    </button>
                </div>

            </section>

        </div>

    </main>

    <footer class="bg-gray-950 text-gray-500 text-center py-6 text-xs border-t border-gray-800 w-full">
        <p>© 2026 Punto de Encuentro — Sitio web de la comunidad del canal de YouTube y TikTok.</p>
    </footer>

    <!-- Script Interactivo -->
    <script>
        const squad = [
            { id: 12, name: 'Brey', pos: 'ARQ' },
            { id: 30, name: 'García', pos: 'ARQ' },
            { id: 17, name: 'Lozano', pos: 'DEF' },
            { id: 24, name: 'Gorosito', pos: 'DEF' },
            { id: 2, name: 'Di Lollo', pos: 'DEF' },
            { id: 4, name: 'Figal', pos: 'DEF' },
            { id: 26, name: 'Pellegrino', pos: 'DEF' },
            { id: 42, name: 'Herrera', pos: 'DEF' },
            { id: 46, name: 'Satas', pos: 'DEF' },
            { id: 3, name: 'Blanco', pos: 'DEF' },
            { id: 5, name: 'Paredes', pos: 'MED' },
            { id: 33, name: 'Mendieta', pos: 'MED' },
            { id: 25, name: 'Ascacibar', pos: 'MED' },
            { id: 8, name: 'Belmonte', pos: 'MED' },
            { id: 15, name: 'Alarcón', pos: 'MED' },
            { id: 7, name: 'Palacios', pos: 'MED' },
            { id: 20, name: 'Velasco', pos: 'DEL' },
            { id: 22, name: 'Villa', pos: 'DEL' },
            { id: 19, name: 'Flores', pos: 'DEL' },
            { id: 16, name: 'Merentiel', pos: 'DEL' },
            { id: 11, name: 'Romero', pos: 'DEL' },
            { id: 9, name: 'Giménez', pos: 'DEL' },
            { id: 44, name: 'Bacidalupe', pos: 'DEL' },
            { id: 13, name: 'Valencia', pos: 'DEL' }
        ];

        let selected = [];
        let isConfirmed = false;

        function renderPlayers() {
            const container = document.getElementById('players-list');
            container.innerHTML = '';

            squad.forEach(player => {
                const isSelected = selected.some(p => p.id === player.id);
                const btn = document.createElement('button');
                btn.disabled = isConfirmed || (selected.length >= 3 && !isSelected);
                btn.className = `p-3 rounded-xl border text-left flex justify-between items-center transition ${
                    isSelected 
                        ? 'bg-boca-yellow text-boca-blue border-boca-yellow font-black shadow-lg scale-95' 
                        : 'bg-gray-900/90 text-gray-200 border-gray-700 hover:border-boca-yellow/60 hover:bg-gray-800'
                } ${btn.disabled && !isSelected ? 'opacity-40 cursor-not-allowed' : ''}`;

                btn.onclick = () => togglePlayer(player);
                btn.innerHTML = `
                    <div>
                        <div class="text-xs font-bold">${player.id}. ${player.name}</div>
                        <div class="text-[9px] opacity-75 uppercase font-semibold">${player.pos}</div>
                    </div>
                    ${isSelected ? '<span class="text-xs">✓</span>' : ''}
                `;
                container.appendChild(btn);
            });
        }

        function togglePlayer(player) {
            if (isConfirmed) return;

            const index = selected.findIndex(p => p.id === player.id);
            if (index > -1) {
                selected.splice(index, 1);
            } else if (selected.length < 3) {
                selected.push(player);
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
                    textElem.innerText = `${player.id}. ${player.name} (${player.pos})`;
                    textElem.classList.remove('text-gray-500', 'italic');
                    slot.classList.add('border-boca-yellow');
                } else {
                    textElem.innerText = 'Seleccionar jugador...';
                    textElem.classList.add('text-gray-500', 'italic');
                    slot.classList.remove('border-boca-yellow');
                }
            }

            const submitBtn = document.getElementById('submit-btn');
            if (selected.length === 3) {
                submitBtn.disabled = false;
                submitBtn.className = 'w-full bg-boca-yellow hover:bg-yellow-400 text-boca-blue cursor-pointer font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow-lg animate-pulse';
                submitBtn.innerText = 'CONFIRMAR Y REGISTRAR PODIO';
            } else {
                submitBtn.disabled = true;
                submitBtn.className = 'w-full bg-gray-700 text-gray-400 cursor-not-allowed font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow';
                submitBtn.innerText = `Elegí ${3 - selected.length} jugador(es) más`;
            }
        }

        function confirmPodium() {
            if (selected.length !== 3) return;
            isConfirmed = true;

            const actionContainer = document.getElementById('action-container');
            actionContainer.innerHTML = `
                <div class="bg-green-500/20 border border-green-500/50 p-4 rounded-xl text-center space-y-2">
                    <div class="text-green-400 font-black text-sm uppercase">¡Podio Registrado Exitosamente! 🎉</div>
                    <p class="text-xs text-gray-300">Tus votos fueron enviados para el conteo global del programa.</p>
                </div>
            `;
            renderPlayers();
        }

        function resetPodium() {
            selected = [];
            isConfirmed = false;
            document.getElementById('action-container').innerHTML = `
                <button id="submit-btn" disabled onclick="confirmPodium()" class="w-full bg-gray-700 text-gray-400 cursor-not-allowed font-black py-3.5 px-4 rounded-xl text-xs uppercase tracking-wide transition shadow">
                    Completá los 3 puestos para votar
                </button>
            `;
            updateDashboard();
            renderPlayers();
        }

        // Carga inicial
        renderPlayers();
    </script>
</body>
</html>