@extends('layouts.app')

@section('title', 'Accueil - FETOC')

@section('content')
    <!-- Hero avec Carrousel Pleine Page -->
    <section class="relative w-full h-screen overflow-hidden">
        <div x-data="{ activeSlide: 1, slides: [
            {
                src: '{{ asset('assets/19.jpg') }}',
                alt: 'Compétition de Canoë-Kayak',
                title: 'Excellence Sportive',
                subtitle: 'Découvrez nos champions en action'
            },
            {
                src: '{{ asset('assets/26.jpg') }}',
                alt: 'Équipe de la FETOC',
                title: 'Notre Fédération',
                subtitle: 'Une équipe dédiée au développement du canoë-kayak'
            },
            {
                src: '{{ asset('assets/4.jpg') }}',
                alt: 'Stage de formation',
                title: 'Formation & Développement',
                subtitle: 'Investir dans l\'avenir de nos jeunes athlètes'
            },
            {
                src: '{{ asset('assets/20.jpg') }}',
                alt: 'Compétition nationale',
                title: 'Compétitions Nationales',
                subtitle: 'Des événements sportifs de haut niveau'
            }
        ]}" x-init="setInterval(() => { activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1 }, 5000)" class="relative h-full">

            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
                <div class="absolute inset-0 transition-opacity duration-1000" x-show="activeSlide === index + 1" x-transition:enter="opacity-0" x-transition:enter-end="opacity-100">
                    <img :src="slide.src" :alt="slide.alt" class="w-full h-full object-cover">
                    <!-- Overlay sombre pour la lisibilité du texte -->
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                </div>
            </template>

            <!-- Contenu Texte sur le Carrousel (titre, sous-titre, et bouton général) -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center p-6 z-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                    Bienvenue à la Fédération Togolaise de Canoë-Kayak
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl mb-8 drop-shadow-md">
                    Promouvoir le canoë-kayak et les disciplines associées au Togo.
                </p>
                <a href="/actualites" class="inline-block bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-full shadow-lg transform transition duration-300 hover:scale-105">
                    Découvrir nos actualités
                </a>
            </div>

            <!-- Titre et sous-titre spécifiques à chaque slide (affichés en dessous du contenu général) -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index + 1" class="absolute bottom-20 left-0 right-0 text-white text-center p-6 z-10 transition-opacity duration-1000" x-transition:enter="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-2 drop-shadow-lg" x-text="slide.title"></h2>
                    <p class="text-lg sm:text-xl drop-shadow-md" x-text="slide.subtitle"></p>
                </div>
            </template>


            <!-- Navigation dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index + 1" :class="{'bg-white': activeSlide === index + 1, 'bg-gray-500': activeSlide !== index + 1}" class="w-3 h-3 rounded-full shadow-md"></button>
                </template>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Section Présentation de la mission -->
        <section class="mb-16 text-center bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Mission</h2>
            <p class="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
                La Fédération Togolaise de Canoë-Kayak et Disciplines Associées (FETOC) a pour mission de développer la pratique de ces sports passionnants à travers le Togo. Nous nous engageons à organiser des compétitions équitables, à offrir des programmes de formation de qualité pour nos jeunes athlètes et à représenter fièrement le Togo sur la scène sportive internationale. Notre objectif est de cultiver le talent, l'esprit sportif et la passion pour le canoë-kayak.
            </p>
        </section>

       
    </main>
@endsection
