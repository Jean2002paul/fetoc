<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="layout()" :class="{ 'dark': isDarkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('logo_fetoc.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/logo_fetoc.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo_fetoc.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo_fetoc.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts et Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .sidebar-link-active {
            background-color: #10B981; /* var(--color-primary) */
            color: white;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
        .sidebar-link-active:hover {
            background-color: #059669; /* var(--color-secondary) */
        }
        .sidebar-link-active i {
            color: white;
        }

        /* Animations customisées */
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.5s ease-out forwards;
        }
        /* Appliquer un décalage d'animation pour chaque enfant */
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
        .stagger-6 { animation-delay: 0.6s; }
        .stagger-7 { animation-delay: 0.7s; }
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
            <div class="flex items-center justify-between shrink-0 mb-10 opacity-0 animate-fade-in-up">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/logo_fetoc.png') }}" alt="Logo FETOC" class="h-9 w-auto" />
                    <span class="text-xl font-semibold text-gray-800 dark:text-gray-200">FETOC Admin</span>
                </a>
                <button @click="sidebarOpen = false" class="md:hidden text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-times fa-lg"></i>
                </button>
            </div>

            <!-- Liens de navigation -->
            <nav class="flex-1 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-1 {{ request()->routeIs('dashboard') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-tachometer-alt w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Tableau de bord</span></a>

                <a href="{{ route('admin.messages.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-2 {{ request()->routeIs('admin.messages.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-envelope-open-text w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Messages</span></a>

                <a href="{{ route('admin.articles.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-3 {{ request()->routeIs('admin.articles.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-newspaper w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Actualités</span></a>

                <a href="{{ route('admin.clubs.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-4 {{ request()->routeIs('admin.clubs.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-shield-alt w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Clubs Affiliés</span></a>

                <a href="{{ route('admin.albums.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-5 {{ request()->routeIs('admin.albums.*') || request()->routeIs('admin.photos.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-images w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Galerie</span></a>

                <a href="{{ route('admin.bureau.members.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-6 {{ request()->routeIs('admin.bureau.members.*') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-users-cog w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Membres du Bureau</span></a>
                
                <hr class="my-4 border-gray-200 dark:border-gray-700 opacity-0 animate-fade-in-up stagger-7">

                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 hover:translate-x-1 opacity-0 animate-fade-in-up stagger-7 {{ request()->routeIs('profile.edit') ? 'sidebar-link-active' : '' }}">
                    <i class="fas fa-user-cog w-5 h-5 mr-3 text-gray-500 dark:text-gray-400"></i><span>Mon Profil</span></a>
            </nav>

            <!-- Section utilisateur en bas de la sidebar -->
            <div class="shrink-0 opacity-0 animate-fade-in-up" style="animation-delay: 0.8s;">
                <div class="flex items-center justify-between p-3 bg-gray-100 dark:bg-gray-700/50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=10B981&color=fff" alt="Avatar">
                            <span class="absolute bottom-0 right-0 block h-2 w-2 rounded-full bg-green-500 ring-2 ring-white dark:ring-gray-700/50"></span>
                        </div>
                        <span class="font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" title="Se déconnecter" class="text-gray-500 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-colors duration-200">
                            <i class="fas fa-sign-out-alt fa-lg"></i></button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Fond semi-transparent pour mobile -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-black/50 transition-opacity md:hidden"></div>

        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header du contenu principal (STICKY) -->
            <header class="sticky top-0 z-20 flex items-center justify-between p-4 bg-white/80 dark:bg-gray-800/80 border-b dark:border-gray-700 backdrop-blur-sm transition-colors duration-300">
                <button @click.stop="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 dark:text-gray-300 focus:outline-none"><i class="fas fa-bars fa-lg"></i></button>
                <div class="hidden md:block text-xl font-semibold text-gray-800 dark:text-gray-200">
                    @if (isset($header)) {{ $header }} @endif
                </div>
                <div class="flex items-center space-x-4 ml-auto"><x-dark-mode-toggle /></div>
            </header>

            <!-- Contenu de la page (avec scroll) -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 transition-opacity duration-500">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>