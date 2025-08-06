<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Message de bienvenue --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold">Bonjour, {{ Auth::user()->name }} !</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Bienvenue sur le panneau d'administration de la FETOC.</p>
                </div>
            </div>

            {{-- GRILLE DE STATISTIQUES --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Carte Actualités -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <div class="bg-blue-500/20 text-blue-600 dark:text-blue-300 rounded-full p-3">
                        <i class="fas fa-newspaper fa-2x"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Actualités</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['articles'] }}</p>
                    </div>
                </div>

                <!-- Carte Clubs -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <div class="bg-green-500/20 text-green-600 dark:text-green-300 rounded-full p-3">
                        <i class="fas fa-shield-alt fa-2x"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Clubs Affiliés</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['clubs'] }}</p>
                    </div>
                </div>

                <!-- Carte Albums -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <div class="bg-purple-500/20 text-purple-600 dark:text-purple-300 rounded-full p-3">
                        <i class="fas fa-images fa-2x"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Albums Photo</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['albums'] }}</p>
                    </div>
                </div>
                
                <!-- Carte Messages non lus -->
                <a href="{{ route('admin.messages.index') }}" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4 hover:ring-2 hover:ring-red-500 transition">
                    <div class="bg-red-500/20 text-red-600 dark:text-red-300 rounded-full p-3">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Messages non lus</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stats['unread_messages'] }}</p>
                    </div>
                </a>
            </div>

            {{-- GRILLE D'ACTIONS RAPIDES ET DERNIERS MESSAGES --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Actions Rapides -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-4">Actions Rapides</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <a href="{{ route('admin.articles.create') }}" class="p-4 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-center transition">
                            <i class="fas fa-plus-circle text-blue-500 text-2xl mb-2"></i>
                            <p class="font-semibold text-gray-800 dark:text-gray-200">Nouvelle Actualité</p>
                        </a>
                        <a href="{{ route('admin.clubs.create') }}" class="p-4 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-center transition">
                            <i class="fas fa-plus-circle text-green-500 text-2xl mb-2"></i>
                            <p class="font-semibold text-gray-800 dark:text-gray-200">Nouveau Club</p>
                        </a>
                        <a href="{{ route('admin.albums.create') }}" class="p-4 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-center transition">
                            <i class="fas fa-plus-circle text-purple-500 text-2xl mb-2"></i>
                            <p class="font-semibold text-gray-800 dark:text-gray-200">Nouvel Album</p>
                        </a>
                        <a href="{{ route('admin.albums.index') }}" class="p-4 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-center transition">
                            <i class="fas fa-upload text-gray-500 text-2xl mb-2"></i>
                            <p class="font-semibold text-gray-800 dark:text-gray-200">Ajouter des Photos</p>
                        </a>
                    </div>
                </div>

                <!-- Derniers Messages non lus -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-4">Derniers Messages non lus</h3>
                    <div class="space-y-4">
                        @forelse ($latestMessages as $message)
                            <a href="{{ route('admin.messages.show', $message) }}" class="block p-3 bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition">
                                <div class="flex justify-between items-center">
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">{{ $message->name }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $message->created_at->diffForHumans() }}</p>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 truncate">{{ $message->subject }}</p>
                            </a>
                        @empty
                            <div class="text-center py-8">
                                <i class="fas fa-check-circle text-green-500 text-3xl mb-2"></i>
                                <p class="text-gray-500 dark:text-gray-400">Votre boîte de réception est à jour !</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>