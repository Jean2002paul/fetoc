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

                <a href="{{ route('admin.messages.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 relative {{ request()->routeIs('admin.messages.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-envelope-open-text w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Messages</span>
                    
                    {{-- On verra comment ajouter ce compteur de messages non lus plus tard --}}
                    {{-- <span class="absolute top-1/2 right-4 transform -translate-y-1/2 px-2 py-0.5 bg-red-500 text-white text-xs font-bold rounded-full">3</span> --}}
                </a>

                <a href="{{ route('admin.articles.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('articles.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-newspaper w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Articles</span>
                </a>

                <a href="{{ route('admin.clubs.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('admin.clubs.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-shield-alt w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Clubs Affiliés</span>
                </a>

                <a href="{{ route('admin.albums.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('admin.albums.*') || request()->routeIs('admin.photos.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-images w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Galerie</span>
                </a>

                <a href="{{ route('admin.bureau.members.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 {{ request()->routeIs('admin.bureau.members.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-users w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i>
                    <span>Membres du Bureau</span>
                </a>

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