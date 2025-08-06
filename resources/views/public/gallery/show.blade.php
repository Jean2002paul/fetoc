@extends('layouts.public')

@section('title', 'Album : ' . $album->name . ' - FETOC')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900/95">
    <div class="container mx-auto px-6 py-10">
        {{-- En-tête de la page --}}
        <div class="mb-12">
            <a href="{{ route('gallery.index') }}" class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors">
                <i class="fas fa-arrow-left mr-2"></i> Retour à tous les albums
            </a>
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl mt-4">
                {{ $album->name }}
            </h1>
            @if($album->description)
                <p class="mt-4 text-lg leading-6 text-gray-600 dark:text-gray-300 max-w-2xl">
                    {{ $album->description }}
                </p>
            @endif
        </div>

        {{-- Grille des photos --}}
        {{-- La classe "spotlight-group" active la galerie --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 spotlight-group">
            @foreach ($album->photos as $photo)
                {{-- Chaque lien est un élément de la galerie --}}
                <a href="{{ asset('storage/' . $photo->path) }}" 
                   class="block relative rounded-lg overflow-hidden group shadow-lg"
                   data-title="{{ $photo->title ?? $album->name }}"
                   data-description="Photo de l'album {{ $album->name }}">
                    <img src="{{ asset('storage/' . $photo->path) }}" 
                         alt="{{ $photo->title ?? 'Photo' }}" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-4xl"></i>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection