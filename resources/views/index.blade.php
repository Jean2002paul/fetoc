@extends('layouts.public')

@section('title', 'Accueil - FETOC')

@section('content')
    <section class="relative w-full h-screen overflow-hidden">
        <div x-data="{ heroActiveSlide: 1, heroSlides: [
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
        ]}" x-init="setInterval(() => { heroActiveSlide = heroActiveSlide === heroSlides.length ? 1 : heroActiveSlide + 1 }, 5000)" class="relative h-full">

            <!-- Slides -->
            <template x-for="(slide, index) in heroSlides" :key="index">
                <div class="absolute inset-0 transition-opacity duration-1000" x-show="heroActiveSlide === index + 1" x-transition:enter="opacity-0" x-transition:enter-end="opacity-100">
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
                    
                </p>
                <a href="/actualites" class="inline-block bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-full shadow-lg transform transition duration-300 hover:scale-105">
                    Découvrir nos actualités
                </a>
            </div>

            <!-- Titre et sous-titre spécifiques à chaque slide (affichés en dessous du contenu général) -->
            <template x-for="(slide, index) in heroSlides" :key="index">
                <div x-show="heroActiveSlide === index + 1" class="absolute bottom-20 left-0 right-0 text-white text-center p-6 z-10 transition-opacity duration-1000" x-transition:enter="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-2 drop-shadow-lg" x-text="slide.title"></h2>
                    <p class="text-lg sm:text-xl drop-shadow-md" x-text="slide.subtitle"></p>
                </div>
            </template>


            <!-- Navigation dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
                <template x-for="(slide, index) in heroSlides" :key="index">
                    <button @click="heroActiveSlide = index + 1" :class="{'bg-white': heroActiveSlide === index + 1, 'bg-gray-500': heroActiveSlide !== index + 1}" class="w-3 h-3 rounded-full shadow-md"></button>
                </template>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Section Présentation de la mission -->
        <section class="mb-16 bg-gradient-to-br from-white to-gray-50 p-12 rounded-3xl shadow-2xl border border-gray-100 relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-purple-50/30"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full -translate-y-16 translate-x-16"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full translate-y-12 -translate-x-12"></div>
            
            <div class="relative z-10 text-center">
                <!-- Titre avec traits décoratifs -->
                <div class="mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Mission</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Notre Mission</h2>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <p class="text-xl text-gray-700 leading-relaxed mb-8">
                        La Fédération Togolaise de Canoë-Kayak et Disciplines Associées (FETOC) a pour mission de développer la pratique de ces sports passionnants à travers le Togo.
                    </p>
                    
                    <!-- Points clés de la mission -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-trophy text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Compétitions Équitables</h3>
                            <p class="text-gray-600">
                                Organiser des compétitions de haut niveau avec des règles équitables pour tous les participants.
                            </p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chalkboard-teacher text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Formation de Qualité</h3>
                            <p class="text-gray-600">
                                Offrir des programmes de formation excellents pour développer nos jeunes athlètes.
                            </p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-flag text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Représentation Internationale</h3>
                            <p class="text-gray-600">
                                Représenter fièrement le Togo sur la scène sportive internationale.
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <p class="text-lg text-gray-700 italic">
                            Notre objectif est de cultiver le talent, l'esprit sportif et la passion pour le canoë-kayak.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
