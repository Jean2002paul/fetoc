<!DOCTYPE html>
{{--
    On ajoute la classe 'dark' à la balise <html> si 'isDarkMode' est vrai.
    C'est ce qui active le mode sombre de Tailwind.
--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="layout()" :class="{ 'dark': isDarkMode }">
<head>
    <meta charset="utf--8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome (pour les icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts et Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .sidebar-link-active {
            background-color: #10B981; /* var(--color-primary) */
            color: white;
        }
        .sidebar-link-active:hover {
            background-color: #059669; /* var(--color-secondary) */
        }
        .sidebar-link-active i {
            color: white;
        }
    </style>
</head>
<body class="font-sans antialiased">
    
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900">
        
        <!-- Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 z-30 flex flex-col w-64 px-4 py-8 overflow-y-auto bg-white border-r dark:bg-gray-800 dark:border-gray-700 transform md:relative md:translate-x-0 transition-transform duration-300 ease-in-out"
            :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}"
        >
            <!-- Logo et nom de l'app -->
            <div class="flex items-center justify-between shrink-0 mb-10">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                    {{-- LOGO PERSONNALISÉ --}}
                    <img src="{{ asset('assets/logo_fetoc.png') }}" alt="Logo FETOC" class="h-9 w-auto" />
                    <span class="text-xl font-semibold text-gray-800 dark:text-gray-200">FETOC Admin</span>
                </a>
                
<<<<<<< HEAD
                                 <!-- Menu déroulant -->
                 <li class="relative group" x-data="{ federationMenuOpen: false, federationMenuTimeout: null }" 
                     @mouseenter="clearTimeout(federationMenuTimeout); federationMenuOpen = true" 
                     @mouseleave="federationMenuTimeout = setTimeout(() => federationMenuOpen = false, 150)">
                     <button class="flex items-center gap-2 hover:text-primary focus:outline-none transition-colors duration-300 hover:scale-105 transform">
                         La Fédération
                         <i class="fas fa-chevron-down text-sm transition-transform duration-300" 
                            :class="{ 'rotate-180': federationMenuOpen }"></i>
                     </button>
                     
                     <div x-show="federationMenuOpen"
                          @mouseenter="clearTimeout(federationMenuTimeout)"
                          @mouseleave="federationMenuTimeout = setTimeout(() => federationMenuOpen = false, 150)"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform -translate-y-4 scale-95"
                          x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
                          x-transition:leave="transition ease-in duration-200"
                          x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
                          x-transition:leave-end="opacity-0 transform -translate-y-4 scale-95"
                          class="absolute bg-white mt-3 shadow-2xl rounded-xl z-50 border border-gray-200 min-w-48 overflow-hidden backdrop-blur-sm bg-white/95">
                        
                        <div class="py-2">
                            <a href="/federation#mission" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-bullseye mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Mission</span>
                            </a>
                            
                            <a href="/federation#bureau" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-users mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Le Bureau</span>
                            </a>
                            
                            <a href="/federation#disciplines" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-water mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Disciplines associées</span>
                            </a>
                            
                            <a href="/federation#clubs" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-trophy mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Clubs affiliés</span>
                            </a>
                        </div>
                    </div>
                </li>


                <li><a href="/actualites" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Actualités</a></li>
                <li><a href="/galerie" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Galerie</a></li>
                <li><a href="/contact" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Contact</a></li>
            </ul>
=======
                {{-- Bouton pour fermer la sidebar sur mobile --}}
                <button @click="sidebarOpen = false" class="md:hidden text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-times fa-lg"></i>
                </button>
            </div>

            <!-- Liens de navigation (avec scroll si nécessaire) -->
            <nav class="flex-1 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('dashboard') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-tachometer-alt w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="{{ route('admin.articles.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('articles.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-newspaper w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Articles</span>
                </a>
>>>>>>> 4e1a408 (CRUD)

                <a href="{{ route('admin.clubs.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('admin.clubs.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-shield-alt w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Clubs Affiliés</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('users.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-users w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Utilisateurs</span>
                </a>

<<<<<<< HEAD
        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 px-4 space-y-3">
            <a href="/" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Accueil</a>
            <details class="group">
                <summary class="cursor-pointer py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium flex items-center justify-between">
                    <span>La Fédération</span>
                    <i class="fas fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                </summary>
                <div class="pl-4 space-y-2 mt-2 bg-gray-50 rounded-lg p-3">
                                         <a href="/federation#mission" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-bullseye mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Mission</span>
                     </a>
                     <a href="/federation#bureau" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-users mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Le Bureau</span>
                     </a>
                     <a href="/federation#disciplines" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-water mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Disciplines associées</span>
                     </a>
                     <a href="/federation#clubs" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-trophy mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Clubs affiliés</span>
                     </a>
                </div>
            </details>
            <a href="/actualites" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Actualités</a>
            <a href="/galerie" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Galerie</a>
            <a href="/contact" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Contact</a>
        </div>
    </header>

    <!-- Contenu -->
    <main class="@if(request()->is('/')) p-0 @else py-10 px-4 container mx-auto @endif">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-16 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="container mx-auto px-6 py-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Contact -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Contact</h4>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <p class="text-gray-300 hover:text-white transition-colors duration-300">Siège social: Agbodrafo, Togo</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <a href="mailto:fetoc228@gmail.com" class="text-gray-300 hover:text-white transition-colors duration-300">fetoc228@gmail.com</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary"></i>
                            <a href="tel:+22890202712" class="text-gray-300 hover:text-white transition-colors duration-300">(+228) 90 20 27 12</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary"></i>
                            <a href="tel:+22890292829" class="text-gray-300 hover:text-white transition-colors duration-300">(+228) 90 29 28 29</a>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-clock text-primary mt-1"></i>
                            <div class="text-gray-300">
                                <p class="hover:text-white transition-colors duration-300">Lun-Ven: 8h00-17h00</p>
                                <p class="hover:text-white transition-colors duration-300">Sam: 9h00-12h00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-sitemap text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Navigation</h4>
                    </div>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Accueil</span></a></li>
                                                 <li><a href="/federation#mission" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>La Fédération</span></a></li>
                         <li><a href="/federation#clubs" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Clubs affiliés</span></a></li>
                        <li><a href="/actualites" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Actualités</span></a></li>
                        <li><a href="/galerie" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Galerie</span></a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Contact</span></a></li>
                    </ul>
                </div>

                <!-- Disciplines -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-water text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Disciplines</h4>
                    </div>
                    <ul class="space-y-3">
                                                 <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Canoë</span></a></li>
                         <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Kayak</span></a></li>
                         <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Disciplines associées</span></a></li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-share-alt text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Suivez-nous</h4>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-blue-500/50">
                            <i class="fab fa-facebook-f text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Facebook</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-500 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-pink-500/50">
                            <i class="fab fa-instagram text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Instagram</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-red-500/50">
                            <i class="fab fa-youtube text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">YouTube</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-400 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-blue-400/50">
                            <i class="fab fa-twitter text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Twitter</span>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h5 class="text-sm font-semibold text-gray-400 mb-3">Newsletter</h5>
                        <div class="flex space-x-2">
                            <input type="email" placeholder="Votre email" class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
                            <button class="px-4 py-2 bg-primary hover:bg-secondary text-white rounded-lg transition-colors duration-300 transform hover:scale-105">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
=======
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('profile.edit') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-user-cog w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Mon Profil</span>
                </a>
            </nav>

            <!-- Section utilisateur en bas de la sidebar -->
            <div class="shrink-0">
                <div class="flex items-center justify-between p-3 bg-gray-100 dark:bg-gray-700/50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=10B981&color=fff" alt="Avatar">
                        <span class="font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</span>
>>>>>>> 4e1a408 (CRUD)
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" title="Se déconnecter" class="text-gray-500 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-colors duration-200">
                            <i class="fas fa-sign-out-alt fa-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Fond semi-transparent pour mobile -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-black/50 transition-opacity md:hidden"></div>

        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header du contenu principal (STICKY) -->
            <header class="sticky top-0 z-20 flex items-center justify-between p-4 bg-white/80 dark:bg-gray-800/80 border-b dark:border-gray-700 backdrop-blur-sm">
                <!-- Bouton hamburger pour mobile -->
                <button @click.stop="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 dark:text-gray-300 focus:outline-none">
                    <i class="fas fa-bars fa-lg"></i>
                </button>

                <!-- Titre de la page (slot $header) -->
                <div class="hidden md:block text-xl font-semibold text-gray-800 dark:text-gray-200">
                    @if (isset($header))
                        {{ $header }}
                    @endif
                </div>

                <!-- Dark Mode Toggle -->
                <div class="flex items-center space-x-4 ml-auto">
                    <x-dark-mode-toggle />
                </div>
            </header>

            <!-- Contenu de la page (avec scroll) -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>