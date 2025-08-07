<x-app-layout>
    {{-- Le header de la page --}}
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
                                    <span class="font-semibold text-gray-700 dark:text-gray-200">Clubs Affiliés </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    
                    <!-- Titre principal -->
                    <h2 class="font-bold text-2xl text-gray-900 dark:text-white leading-tight">
                        {{ __('Clubs Affiliés') }}
                    </h2>
                </div>
                
                {{-- DROITE : Barre d'outils avec Recherche et Bouton d'action --}}
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" name="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm" placeholder="Rechercher un club...">
                    </div>

                    <!-- Bouton de création -->
                    <a href="{{ route('admin.clubs.create') }}" 
                    class="inline-flex items-center justify-center px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-semibold text-sm shadow-md transform transition-all duration-300 hover:scale-105 shrink-0">
                        <i class="fas fa-plus mr-2"></i> Ajouter un Clubs
                    </a>
                </div>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Message de succès --}}
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p class="font-bold">Succès</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    {{-- Le tableau qui liste les clubs --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    {{-- Colonnes adaptées aux clubs --}}
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Logo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nom du Club</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Statut</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date d'ajout</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                {{-- On boucle sur la variable $clubs --}}
                                @forelse ($clubs as $club)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{-- Affichage du logo --}}
                                            <img class="h-10 w-10 rounded-full object-cover" 
                                                 src="{{ $club->logo_path ? asset('storage/' . $club->logo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($club->name) . '&background=random' }}" 
                                                 alt="Logo de {{ $club->name }}">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{-- On affiche le nom du club --}}
                                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $club->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{-- On vérifie si le club est actif --}}
                                            @if($club->is_active)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                            @else
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactif</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                            {{ $club->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            {{-- Les actions doivent être dans la même cellule pour un bon alignement --}}
                                            <div class="flex justify-end items-center space-x-4">
                                                <a href="{{ route('admin.clubs.edit', $club) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Modifier</a>
                                                
                                                <form action="{{ route('admin.clubs.destroy', $club) }}" method="POST"
                                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce club ?');" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600 font-medium">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>    
                                        </td>
                                    </tr>
                                @empty
                                    {{-- Message si aucun club n'est trouvé --}}
                                    <tr>
                                        <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">
                                            Aucun club trouvé.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Liens de pagination pour $clubs --}}
                    <div class="mt-8">
                        {{ $clubs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>