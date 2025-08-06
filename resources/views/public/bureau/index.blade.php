@extends('layouts.public')

@section('title', 'Le Bureau - FETOC')

@section('content')
<div class="bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto px-6 py-16">
        {{-- En-tête de la page --}}
        <div class="text-center mb-16">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Le <span class="text-primary">Bureau Exécutif</span>
            </h1>
            <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-400">
                Découvrez l'équipe dévouée qui dirige la Fédération Togolaise de Canoë-Kayak.
            </p>
        </div>

        {{-- Grille des membres --}}
        @if ($members->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($members as $member)
                    <div class="text-center bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                        {{-- Photo du membre --}}
                        <img class="w-32 h-32 mx-auto rounded-full object-cover ring-4 ring-primary/30" 
                             src="{{ $member->photo_path ? asset('storage/' . $member->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) . '&background=059669&color=fff&size=128' }}" 
                             alt="Photo de {{ $member->name }}">

                        {{-- Nom et position --}}
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $member->name }}</h3>
                            <p class="text-primary font-semibold">{{ $member->position }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <i class="fas fa-users-cog fa-4x text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Composition du bureau à venir</h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">La liste des membres du bureau exécutif sera bientôt publiée.</p>
            </div>
        @endif
    </div>
</div>
@endsection