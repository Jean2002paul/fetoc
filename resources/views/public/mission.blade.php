@extends('layouts.public')

@section('title', 'Notre Mission - FETOC')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-emerald-500 to-emerald-700 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Notre Mission</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-4xl mx-auto">
                    Développer, promouvoir et organiser la pratique du canoë-kayak sur l'ensemble du territoire togolais.
                </p>
            </div>
        </section>

        <main class="container mx-auto px-6 py-16 flex-grow">
            <!-- 2. Section Mission (détaillée) -->
            <section id="mission" class="bg-gradient-to-br from-white to-gray-50 p-12 rounded-3xl shadow-2xl border border-gray-100">
                <div class="max-w-4xl mx-auto">
                    <p class="text-xl text-gray-700 leading-relaxed mb-12 text-center">
                        La Fédération Togolaise de Canoë-Kayak et Disciplines Associées (FETOC) a pour mission de développer, 
                        promouvoir et organiser la pratique du canoë-kayak et des disciplines associées sur l'ensemble du territoire togolais.
                    </p>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Objectifs Stratégiques</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Développement du sport</h4><p class="text-gray-600 text-sm">Promouvoir l'accessibilité des sports nautiques</p></div></div>
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Formation des athlètes</h4><p class="text-gray-600 text-sm">Former des compétiteurs de haut niveau</p></div></div>
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Organisation d'événements</h4><p class="text-gray-600 text-sm">Organiser des compétitions nationales</p></div></div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Représentation internationale</h4><p class="text-gray-600 text-sm">Représenter le Togo sur la scène internationale</p></div></div>
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Développement des infrastructures</h4><p class="text-gray-600 text-sm">Créer des centres d'entraînement</p></div></div>
                                <div class="flex items-start space-x-4"><div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-sm"></i></div><div><h4 class="font-semibold text-gray-900">Sensibilisation</h4><p class="text-gray-600 text-sm">Éduquer sur les sports nautiques</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection