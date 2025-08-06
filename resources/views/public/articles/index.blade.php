
@extends('layouts.public')

@section('title', 'Actualités - FETOC')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-10">
        {{-- En-tête de la page --}}
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Toutes nos <span class="text-primary">Actualités</span>
            </h1>
            <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-400">
                Restez informés des derniers événements et nouvelles de la fédération.
            </p>
        </div>

        {{-- Grille des articles --}}
        @if ($articles->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="shrink-0">
                            <a href="{{ route('articles.show', $article->slug) }}">
                                <img class="h-48 w-full object-cover" 
                                     src="{{ $article->image_path ? asset('storage/' . $article->image_path) : 'https://via.placeholder.com/400x200.png?text=FETOC' }}" 
                                     alt="Image pour {{ $article->title }}">
                            </a>
                        </div>
                        <div class="flex-1 bg-white dark:bg-gray-800 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-primary">
                                    <span>Publié le {{ $article->published_at->format('d/m/Y') }}</span>
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900 dark:text-white hover:text-primary transition-colors">
                                        {{ $article->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                                        {{ Str::limit(strip_tags($article->content), 120) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <a href="{{ route('articles.show', $article->slug) }}" class="text-base font-semibold text-primary hover:text-secondary">
                                    Lire la suite <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-16">
                <i class="fas fa-search fa-4x text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Aucune actualité trouvée</h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">Revenez bientôt pour découvrir nos dernières nouvelles !</p>
            </div>
        @endif
    </div>
</div>
@endsection