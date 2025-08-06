{{-- resources/views/components/public/header.blade.php --}}

{{-- On utilise Alpine.js pour gérer l'état du header (scrolled) et du menu mobile (mobileMenuOpen) --}}
<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/80 backdrop-blur-lg shadow-lg': scrolled, 'bg-white': !scrolled }"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 h-20 flex items-center"
>
    <nav class="container mx-auto px-4 flex justify-between items-center">
        {{-- LOGO --}}
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('assets/logo_fetoc.png') }}" alt="Logo FETOC" class="h-12 w-auto object-contain" />
            <span class="hidden md:inline text-xl font-bold text-gray-900">
                FETOC
            </span>
        </a>

        {{-- MENU DESKTOP --}}
        <ul class="hidden lg:flex items-center space-x-8 text-base font-semibold text-gray-700">
            {{--
                Helper pour créer les liens avec la gestion de l'état "actif"
                La condition est : la route actuelle correspond-elle au nom de la route du lien ?
            --}}
            @php
                function navLink($routeName, $text) {
                    $isActive = request()->routeIs($routeName) || (request()->is('/') && $routeName === 'home');
                    $classes = $isActive
                        ? 'text-primary font-bold relative after:absolute after:bottom-[-8px] after:left-0 after:w-full after:h-1 after:bg-primary'
                        : 'hover:text-primary transition-colors duration-300';
                    return "<a href='" . ($routeName === 'home' ? url('/') : route($routeName)) . "' class='{$classes}'>{$text}</a>";
                }
            @endphp
            
            <li>{!! navLink('home', 'Accueil') !!}</li>

            {{-- MENU DÉROULANT --}}
            <li class="relative" x-data="{ open: false }" @click.away="open = false">
                <button @click="open = !open" class="flex items-center gap-2 focus:outline-none {{ request()->routeIs('clubs.index') ? 'text-primary font-bold' : 'hover:text-primary' }} transition-colors duration-300">
                    La Fédération
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                </button>
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 scale-95" 
                     x-transition:leave="transition ease-in duration-150" 
                     x-transition:leave-end="opacity-0 scale-95" 
                     class="absolute mt-3 bg-white shadow-2xl rounded-xl z-50 border border-gray-100 min-w-[220px] overflow-hidden" style="display: none;">
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
        <div class="flex items-center space-x-4">
            <a href="{{ route('contact.show') }}" class="hidden lg:inline-block px-5 py-2 bg-primary text-white font-semibold rounded-full shadow-md hover:bg-secondary transition-all duration-300 transform hover:scale-105">
                Contact
            </a>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-2xl text-gray-800">
                <i x-show="!mobileMenuOpen" class="fas fa-bars"></i>
                <i x-show="mobileMenuOpen" class="fas fa-times"></i>
            </button>
        </div>
    </nav>

    {{-- MENU MOBILE --}}
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-x-full"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-end="opacity-0 transform -translate-x-full"
         class="lg:hidden fixed inset-0 z-40 bg-white p-6 space-y-4" style="display: none;">
        
        <ul class="space-y-4 text-lg font-semibold mt-16">
            <li><a href="/" class="block py-2">Accueil</a></li>
            <details class="group">
                <summary class="cursor-pointer py-2 flex items-center justify-between list-none">
                    <span>La Fédération</span>
                    <i class="fas fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                </summary>
                <div class="pl-4 space-y-2 mt-2 pt-2 border-l-2 border-primary/50">
                    <a href="{{ route('about') }}" class="block py-2 text-base text-gray-600">À propos
                    <a href="{{ route('mission') }}" class="block py-2 text-base text-gray-600">Mission</a>
                    <a href="{{ route('bureau.index') }}" class="block py-2 text-base text-gray-600">Le Bureau</a>
                    <a href="{{ route('disciplines') }}" class="block py-2 text-base text-gray-600">Disciplines</a>
                    <a href="{{ route('clubs.index') }}" class="block py-2 text-base text-gray-600">Clubs affiliés</a>
                </div>
            </details>
            <li><a href="{{ route('articles.index') }}" class="block py-2">Actualités</a></li>
            <li><a href="{{ route('gallery.index') }}" class="block py-2">Galerie</a></li>
        </ul>
        <a href="{{ route('contact.show') }}" class="mt-8 w-full block text-center px-6 py-3 bg-primary text-white font-semibold rounded-full shadow-md">
            Contactez-nous
        </a>
    </div>
</header>