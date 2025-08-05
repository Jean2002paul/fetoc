
@extends('layouts.public')

{{-- On utilise le titre de l'article pour le titre de la page --}}
@section('title', $article->title . ' - FETOC')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900 py-12 sm:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg overflow-hidden">
            
            {{-- Image de l'article --}}
            @if($article->image_path)
                <img class="w-full h-96 object-cover" 
                     src="{{ asset('storage/' . $article->image_path) }}" 
                     alt="Image pour {{ $article->title }}">
            @endif

            <div class="p-6 sm:p-10">
                {{-- Titre et métadonnées --}}
                <header class="mb-8">
                    <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        {{ $article->title }}
                    </h1>
                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                        Publié le <time datetime="{{ $article->published_at->toIso8601String() }}">{{ $article->published_at->format('d F Y') }}</time>
                    </p>
                </header>

                {{-- Contenu de l'article --}}
                <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-gray-300">
                    {!! $article->content !!} {{-- ATTENTION: On utilise {!! !!} pour interpréter le HTML --}}
                </div>

                {{-- Pied de l'article avec un lien de retour --}}
                <footer class="mt-10 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ route('articles.index') }}" 
                       class="inline-flex items-center text-primary hover:text-secondary font-semibold transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Retour à la liste des actualités
                    </a>
                </footer>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
{{-- On va installer un plugin Tailwind pour styliser joliment le contenu --}}
<style>
    .prose h2 { margin-top: 2em; margin-bottom: 1em; }
    .prose h3 { margin-top: 1.5em; margin-bottom: 1em; }
    .prose p { margin-bottom: 1.25em; }
    .prose ul, .prose ol { margin-bottom: 1.25em; }
    .prose a { color: var(--color-primary); text-decoration: none; }
    .prose a:hover { text-decoration: underline; color: var(--color-secondary); }
</style>
@endpush