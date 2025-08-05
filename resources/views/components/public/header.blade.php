{{-- resources/views/components/public/header.blade.php --}}

<header class="bg-white shadow-md py-4 relative z-10">
    <nav class="container mx-auto px-4 flex justify-between items-center">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('assets/logo_fetoc.png') }}" alt="Logo FETOC" class="h-10 w-20 object-cover" />
            <span class="hidden md:inline text-xl font-bold text-gray-900">Fédération Togolaise de Canoë-Kayak</span>
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 text-base font-semibold">
            <li><a href="/" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Accueil</a></li>
            
            <!-- ▼▼▼ MENU DÉROULANT CORRIGÉ AVEC <details> et <summary> ▼▼▼ -->
            <li class="relative group">
                <details class="relative">
                    {{-- La partie cliquable. `list-none` cache le triangle par défaut. --}}
                    <summary class="flex items-center gap-2 hover:text-primary focus:outline-none transition-colors duration-300 hover:scale-105 transform cursor-pointer list-none">
                        La Fédération 
                        {{-- L'icône qui va tourner grâce au CSS ci-dessous --}}
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </summary>
                    
                    {{-- Le menu qui s'affiche --}}
                    <div class="absolute bg-white mt-3 shadow-2xl rounded-xl z-50 border border-gray-200 min-w-48 overflow-hidden">
                        <div class="py-2">
                            <a href="/federation/mission" class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-bullseye mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Mission</span>
                            </a>
                            <a href="/federation/bureau" class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-users mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Le Bureau</span>
                            </a>
                            <a href="/disciplines" class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-water mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Disciplines associées</span>
                            </a>
                            <a href="{{ route('clubs.index') }}" class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-trophy mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Clubs affiliés</span>
                            </a>
                        </div>
                    </div>
                </details>
            </li>
            {{-- ▲▲▲ FIN DU MENU DÉROULANT CORRIGÉ ▲▲▲ --}}

            <li><a href="{{ route('articles.index') }}" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Actualités</a></li>
            <li><a href="/galerie" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Galerie</a></li>
            <li><a href="/contact" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Contact</a></li>
        </ul>

        <!-- Mobile Hamburger -->
        <button id="mobile-menu-button" class="md:hidden text-xl">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- Menu mobile (il utilisait déjà <details>, donc il fonctionne bien) -->
    <div id="mobile-menu" class="hidden md:hidden mt-4 px-4 space-y-3">
        ...
    </div>
</header>

{{-- On ajoute le CSS nécessaire ici, dans le composant --}}
<style>
    /* Pour la rotation de la flèche du menu desktop */
    details[open] > summary i {
        transform: rotate(180deg);
    }
    /* Pour cacher le marqueur par défaut sur les navigateurs Webkit/Blink (Chrome, Safari) */
    summary::-webkit-details-marker {
        display: none;
    }
</style>

<script>
    document.getElementById('mobile-menu-button')?.addEventListener('click', () => {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
</script>