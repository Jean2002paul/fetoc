@extends('layouts.public')

@section('title', 'Galerie Photo - FETOC')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-10">
        <div class="text-center mb-16">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Notre <span class="text-primary">Galerie</span>
            </h1>
            <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-400">
                Revivez les meilleurs moments de nos événements en images.
            </p>
        </div>

        @if ($albums->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($albums as $album)
                    <a href="{{ route('gallery.show', $album->slug) }}" class="group block rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="relative">
                            {{-- Image de couverture (la première photo de l'album) --}}
                            <img class="w-full h-60 object-cover" 
                                 src="{{ asset('storage/' . $album->photos->first()->path) }}" 
                                 alt="Couverture de l'album {{ $album->name }}">
                            
                            {{-- Superposition sombre pour le texte --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                            
                            {{-- Informations de l'album --}}
                            <div class="absolute bottom-0 left-0 p-6">
                                <h3 class="text-2xl font-bold text-white">{{ $album->name }}</h3>
                                <span class="mt-2 inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-primary/80 rounded-full">
                                    {{ $album->photos_count }} {{ Str::plural('photo', $album->photos_count) }}
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <i class="fas fa-camera-retro fa-4x text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Galerie en construction</h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">Revenez bientôt pour découvrir nos albums photos !</p>
            </div>
        @endif
    </div>
</div>
@endsection