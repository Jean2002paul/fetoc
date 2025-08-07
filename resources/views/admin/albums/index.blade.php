<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            
            {{-- GAUCHE : Fil d'Ariane et Titre --}}
            <div>
                <!-- Breadcrumbs -->
                <nav class="text-sm font-medium mb-2" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors">
                                <i class="fas fa-home mr-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right fa-xs text-gray-400 mx-2"></i>
                                <span class="font-semibold text-gray-700 dark:text-gray-200">Albums Photo</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                
                <!-- Titre principal -->
                <h2 class="font-bold text-2xl text-gray-900 dark:text-white leading-tight">
                    {{ __('Tous les Albums') }}
                </h2>
            </div>
            
            {{-- DROITE : Barre d'outils avec Recherche et Bouton d'action --}}
            <div class="flex items-center space-x-4">
                <!-- Champ de recherche (UI seulement pour l'instant) -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text" name="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm" placeholder="Rechercher un album...">
                </div>

                <!-- Bouton de création -->
                <a href="{{ route('admin.albums.create') }}" 
                class="inline-flex items-center justify-center px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-semibold text-sm shadow-md transform transition-all duration-300 hover:scale-105 shrink-0">
                    <i class="fas fa-plus mr-2"></i> Créer un Album
                </a>
            </div>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- === CARTE PRINCIPALE === --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Affichage du message de succès (inchangé) --}}
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md shadow-sm" role="alert">
                            <p class="font-bold">Succès</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    
                    {{-- On vérifie s'il y a des albums avant d'afficher le tableau --}}
                    @if($albums->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                {{-- === EN-TÊTE DU TABLEAU PLUS SOBRE === --}}
                                <thead class="bg-gray-50 dark:bg-gray-700/50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nom de l'Album</th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Photos</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider hidden sm:table-cell">Date de création</th>
                                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($albums as $album)
                                        {{-- Ligne avec effet de survol subtil --}}
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('admin.albums.show', $album) }}" class="text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">{{ $album->name }}</a>
                                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 hidden md:block">{{ Str::limit($album->description, 60) }}</p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500 dark:text-gray-400">
                                                <span class="px-3 py-1 text-xs font-semibold leading-5 rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300">
                                                    {{ $album->photos_count }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 hidden sm:table-cell">
                                                {{ $album->created_at->isoFormat('LL') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex justify-end items-center space-x-4">
                                                    <a href="{{ route('admin.albums.show', $album) }}" class="text-gray-500 hover:text-green-600 dark:hover:text-green-400" title="Voir & Ajouter des photos"><i class="fas fa-images"></i></a>
                                                    <a href="{{ route('admin.albums.edit', $album) }}" class="text-gray-500 hover:text-indigo-600 dark:hover:text-indigo-400" title="Modifier l'album"><i class="fas fa-pen"></i></a>
                                                    <form action="{{ route('admin.albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Attention ! La suppression de cet album entraînera la suppression de toutes les photos qu\'il contient. Êtes-vous sûr ?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-gray-500 hover:text-red-600 dark:hover:text-red-400" title="Supprimer l'album"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination --}}
                        <div class="mt-8">{{ $albums->links() }}</div>

                    @else
                        {{-- === SECTION "ÉTAT VIDE" AMÉLIORÉE === --}}
                        <div class="text-center py-16">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Aucun album</h3>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Commencez par créer votre premier album photo.</p>
                            <div class="mt-6">
                                <a href="{{ route('admin.albums.create') }}" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-secondary text-white rounded-md font-semibold text-sm shadow-md transition-colors duration-200">
                                    <i class="fas fa-plus mr-2"></i> Créer un Album
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>