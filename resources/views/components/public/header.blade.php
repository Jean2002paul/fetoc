{{-- resources/views/components/public/header.blade.php --}}

{{-- On utilise Alpine.js pour gérer l'état du header (scrolled) et du menu mobile (mobileMenuOpen) --}}
<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/90 backdrop-blur-md shadow-md': scrolled, 'bg-white': !scrolled }"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 h-16 md:h-20 flex items-center"
>
    <nav class="container mx-auto px-4 flex justify-between items-center">
        {{-- LOGO --}}
        <a href="/" class="flex items-center space-x-2 sm:space-x-3">
            <img src="{{ asset('assets/vrai_logo_fetoc.png') }}" alt="Logo FETOC" class="h-16 sm:h-20 w-auto object-contain" />
            <span class="hidden sm:inline text-lg sm:text-xl font-bold text-gray-900">
                Féderation Togolaise de Canoë-Kayak
            </span>
        </a>

        
        {{-- MENU DESKTOP --}}
        <ul class="hidden lg:flex items-center space-x-8 text-base font-semibold text-gray-700">
            @php
                function navLink($routeName, $text) {
                    $isActive = request()->routeIs($routeName) || (request()->is('/') && $routeName === 'home');
                    $classes = $isActive
                        ? 'text-[#555] font-bold relative after:absolute after:bottom-[-8px] after:left-0 after:w-full after:h-1 after:bg-black after:scale-x-100 after:transition-transform after:duration-300 after:origin-left'
                        : 'relative text-[#555] hover:text-[#555] transition-colors duration-300 after:absolute after:bottom-[-8px] after:left-0 after:w-full after:h-1 after:bg-black after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left';
                    return "<a href='" . ($routeName === 'home' ? url('/') : route($routeName)) . "' class='{$classes}'>{$text}</a>";
                }
            @endphp
                       
            <li>{!! navLink('home', 'Accueil') !!}</li>

            {{-- MENU DÉROULANT --}}
            <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="flex items-center gap-2 focus:outline-none relative hover:text-primary transition-colors duration-300 after:content-[''] after:absolute after:bottom-[-8px] after:left-0 after:w-full after:h-1 after:bg-transparent after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left">
                    La Fédération
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                </button>
                <div x-show="open"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute mt-3 bg-white shadow-2xl rounded-xl z-50 border border-gray-100 min-w-[220px] overflow-hidden"
                     style="display: none;">
                    {{-- On ajoute un "padding" au conteneur pour un meilleur espacement --}}
                    <div class="p-2">
                        <a href="{{ route('about') }}" class="flex items-center w-full px-4 py-3 text-sm rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            <i class="fas fa-info-circle w-5 mr-3 text-primary"></i>
                            <span>À Propos</span>
                        </a>
                        <a href="{{ route('mission') }}" class="flex items-center w-full px-4 py-3 text-sm rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            <i class="fas fa-bullseye w-5 mr-3 text-primary"></i>
                            <span>Mission</span>
                        </a>
                        <a href="{{ route('bureau.index') }}" class="flex items-center w-full px-4 py-3 text-sm rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            <i class="fas fa-users w-5 mr-3 text-primary"></i>
                            <span>Le Bureau</span>
                        </a>
                        <a href="{{ route('disciplines') }}" class="flex items-center w-full px-4 py-3 text-sm rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            <i class="fas fa-water w-5 mr-3 text-primary"></i>
                            <span>Disciplines</span>
                        </a>
                        <a href="{{ route('clubs.index') }}" class="flex items-center w-full px-4 py-3 text-sm rounded-lg {{ request()->routeIs('clubs.index') ? 'bg-gray-100' : '' }} hover:bg-gray-100 transition-colors duration-200">
                            <i class="fas fa-trophy w-5 mr-3 text-primary"></i>
                            <span>Clubs affiliés</span>
                        </a>
                    </div>
                </div>
            </li>
            
            <li>{!! navLink('articles.index', 'Actualités') !!}</li>
            <li>{!! navLink('gallery.index', 'Galerie') !!}</li>
        </ul>

        {{-- ACTIONS DESKTOP ET HAMBURGER MOBILE --}}
        <div class="flex items-center space-x-3 sm:space-x-4">
            <a href="{{ route('contact.show') }}" class="hidden lg:inline-block px-4 sm:px-5 py-1.5 sm:py-2 bg-primary text-white text-sm sm:text-base font-semibold rounded-full shadow-md hover:bg-secondary transition-all duration-300 transform hover:scale-105 whitespace-nowrap">
                Contact
            </a>
            <button @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="lg:hidden flex flex-col justify-center items-center w-10 h-10 relative focus:outline-none group"
                    :aria-expanded="mobileMenuOpen"
                    aria-label="Menu de navigation">
                <!-- Lignes du menu hamburger avec animations -->
                <span :class="{'rotate-45 translate-y-2': mobileMenuOpen, 'mb-2': !mobileMenuOpen}" 
                      class="block w-6 h-0.5 bg-gray-800 transition-all duration-300 transform"></span>
                <span :class="{'opacity-0': mobileMenuOpen}" 
                      class="block w-6 h-0.5 bg-gray-800 transition-opacity duration-300"></span>
                <span :class="{'-rotate-45 -translate-y-2': mobileMenuOpen, 'mt-2': !mobileMenuOpen}" 
                      class="block w-6 h-0.5 bg-gray-800 transition-all duration-300 transform"></span>
                
                <!-- Effet de fond circulaire au survol -->
                <span class="absolute inset-0 rounded-full bg-gray-100 opacity-0 group-hover:opacity-100 transition-opacity duration-200"></span>
            </button>
        </div>
    </nav>

    {{-- MENU MOBILE --}}
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-y-4"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         @keydown.escape.window="mobileMenuOpen = false"
         @click.away="mobileMenuOpen = false"
         x-cloak
         class="lg:hidden fixed inset-0 z-40 bg-white p-4 pt-20 overflow-y-auto" style="display: none;">
        
        <ul class="space-y-1 text-base">
            <li>
                <a href="/" 
                   @click="mobileMenuOpen = false"
                   class="flex items-center px-4 py-3 rounded-lg transition-colors duration-200 {{ request()->is('/') ? 'bg-gray-50 text-primary' : 'hover:bg-gray-50' }}">
                    <i class="fas fa-home w-5 mr-3 text-gray-400"></i>
                    <span>Accueil</span>
                </a>
            </li>
            
            <li x-data="{ open: false }" class="border-b border-gray-100 pb-1">
                <button @click="open = !open" 
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <div class="flex items-center">
                        <i class="fas fa-landmark w-5 mr-3 text-gray-400"></i>
                        <span>La Fédération</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200" :class="{ 'transform rotate-180': open }"></i>
                </button>
                <div x-show="open" 
                     x-collapse
                     class="pl-8 space-y-1 mt-1">
                    <a href="{{ route('about') }}" 
                       @click="mobileMenuOpen = false"
                       class="block py-2.5 px-4 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        À propos
                    </a>
                    <a href="{{ route('mission') }}" 
                       @click="mobileMenuOpen = false"
                       class="block py-2.5 px-4 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        Mission
                    </a>
                    <a href="{{ route('bureau.index') }}" 
                       @click="mobileMenuOpen = false"
                       class="block py-2.5 px-4 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        Le Bureau
                    </a>
                    <a href="{{ route('disciplines') }}" 
                       @click="mobileMenuOpen = false"
                       class="block py-2.5 px-4 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        Disciplines
                    </a>
                    <a href="{{ route('clubs.index') }}" 
                       @click="mobileMenuOpen = false"
                       class="block py-2.5 px-4 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        Clubs affiliés
                    </a>
                </div>
            </li>
            
            <li class="border-b border-gray-100">
                <a href="{{ route('articles.index') }}" 
                   @click="mobileMenuOpen = false"
                   class="flex items-center px-4 py-3 rounded-lg transition-colors duration-200 {{ request()->routeIs('articles.*') ? 'bg-gray-50 text-primary' : 'hover:bg-gray-50' }}">
                    <i class="far fa-newspaper w-5 mr-3 text-gray-400"></i>
                    <span>Actualités</span>
                </a>
            </li>
            
            <li class="border-b border-gray-100">
                <a href="{{ route('gallery.index') }}" 
                   @click="mobileMenuOpen = false"
                   class="flex items-center px-4 py-3 rounded-lg transition-colors duration-200 {{ request()->routeIs('gallery.*') ? 'bg-gray-50 text-primary' : 'hover:bg-gray-50' }}">
                    <i class="far fa-images w-5 mr-3 text-gray-400"></i>
                    <span>Galerie</span>
                </a>
            </li>
            
            <li class="mt-6">
                <a href="{{ route('contact.show') }}" 
                   @click="mobileMenuOpen = false"
                   class="block w-full text-center px-6 py-3 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-secondary transition-colors duration-300">
                    Contactez-nous
                </a>
            </li>
        </ul>
    </div>
</header>