@extends('layouts.public')

@section('title', 'Nos Clubs Affiliés - FETOC')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-10">
        {{-- En-tête de la page --}}
        <div class="text-center mb-16">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Nos <span class="text-primary">Clubs Affiliés</span>
            </h1>
            <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-400">
                Découvrez la communauté des clubs qui font vivre le canoë-kayak au Togo.
            </p>
        </div>

        {{-- Grille des clubs --}}
        @if ($clubs->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($clubs as $club)
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center flex flex-col items-center transform hover:-translate-y-2 transition-transform duration-300">
                        
                        {{-- LE LOGO EN CERCLE --}}
                        <div class="mb-4">
                            <img class="h-28 w-28 rounded-full object-cover ring-4 ring-primary/50 dark:ring-primary/70 shadow-md" 
                                 src="{{ $club->logo_path ? asset('storage/' . $club->logo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($club->name) . '&background=059669&color=fff&size=128' }}" 
                                 alt="Logo de {{ $club->name }}">
                        </div>

                        {{-- Nom du club --}}
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $club->name }}</h3>
                        
                        {{-- Description --}}
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 flex-grow">
                            {{ $club->description ? Str::limit($club->description, 100) : 'Aucune description disponible.' }}
                        </p>
                        
                        {{-- LE LIEN FACULTATIF VERS LE SITE WEB --}}
                        @if ($club->website_url)
                            <a href="{{ $club->website_url }}" 
                               target="_blank" rel="noopener noreferrer"
                               class="mt-auto inline-flex items-center px-4 py-2 bg-primary hover:bg-secondary text-white text-sm font-semibold rounded-full shadow-md transition-colors duration-200">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                Visiter le site
                            </a>
                        @endif

                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <i class="fas fa-search fa-4x text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Aucun club trouvé</h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">La liste des clubs affiliés sera bientôt disponible.</p>
            </div>
        @endif
    </div>
</div>
@endsection