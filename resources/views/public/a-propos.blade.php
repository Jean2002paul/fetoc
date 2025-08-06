@extends('layouts.public')

@section('title', 'À Propos de la Fédération - FETOC')

@section('content')
    <div class="flex flex-col">
        <!-- 1. Hero Section -->
        <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">À Propos de la FETOC</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-4xl mx-auto">
                    Découvrez notre histoire, nos valeurs et les objectifs qui nous animent.
                </p>
            </div>
        </section>

        <main class="container mx-auto px-6 py-16 flex-grow">
            <!-- 6. Section Histoire -->
            <section class="mb-20 bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <div class="text-center mb-12"><h2 class="text-4xl font-bold text-gray-900">Notre Histoire</h2></div>
                <div class="max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Une aventure qui a commencé en 2010</h3>
                            <p class="text-gray-700 leading-relaxed mb-6">La Fédération Togolaise de Canoë-Kayak a été fondée avec l'objectif de promouvoir et développer la pratique du canoë-kayak au Togo...</p>
                            <p class="text-gray-700 leading-relaxed mb-6">Notre fédération a connu une croissance constante, passant de quelques clubs pionniers à un réseau de 15 clubs...</p>
                        </div>
                        <div class="bg-gradient-to-br from-primary to-secondary p-8 rounded-2xl text-white">
                            <h4 class="text-xl font-bold mb-4">Nos Réalisations</h4>
                            <ul class="space-y-3">
                                <li class="flex items-center"><i class="fas fa-check-circle mr-3"></i>Organisation de compétitions nationales annuelles</li>
                                <li class="flex items-center"><i class="fas fa-check-circle mr-3"></i>Formation de plus de 200 entraîneurs diplômés</li>
                                <li class="flex items-center"><i class="fas fa-check-circle mr-3"></i>Participation aux championnats d'Afrique</li>
                                <li class="flex items-center"><i class="fas fa-check-circle mr-3"></i>Développement des infrastructures nautiques</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 7. Section Valeurs -->
            <section class="mb-20 bg-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <div class="text-center mb-12"><h2 class="text-4xl font-bold text-gray-900">Nos Valeurs</h2></div>
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center"><div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-heart text-white text-2xl"></i></div><h3 class="text-xl font-bold text-gray-900 mb-3">Passion</h3><p class="text-gray-600">Nous cultivons la passion pour les sports nautiques...</p></div>
                        <div class="text-center"><div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-handshake text-white text-2xl"></i></div><h3 class="text-xl font-bold text-gray-900 mb-3">Excellence</h3><p class="text-gray-600">Nous visons l'excellence dans tous nos programmes...</p></div>
                        <div class="text-center"><div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-users text-white text-2xl"></i></div><h3 class="text-xl font-bold text-gray-900 mb-3">Solidarité</h3><p class="text-gray-600">Nous favorisons l'esprit d'équipe...</p></div>
                        <div class="text-center"><div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-leaf text-white text-2xl"></i></div><h3 class="text-xl font-bold text-gray-900 mb-3">Respect</h3><p class="text-gray-600">Nous respectons l'environnement...</p></div>
                    </div>
                </div>
            </section>

            <!-- 8. Section Objectifs -->
            <section class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <div class="text-center mb-12"><h2 class="text-4xl font-bold text-gray-900">Nos Objectifs</h2></div>
                <div class="max-w-4xl mx-auto"><div class="space-y-8">
                    <div class="flex items-start space-x-6"><div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold">1</span></div><div><h3 class="text-xl font-bold text-gray-900 mb-2">Développer la pratique du canoë-kayak</h3><p class="text-gray-700">Promouvoir l'accessibilité des sports nautiques...</p></div></div>
                    <div class="flex items-start space-x-6"><div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold">2</span></div><div><h3 class="text-xl font-bold text-gray-900 mb-2">Former des athlètes de haut niveau</h3><p class="text-gray-700">Mettre en place des structures de formation...</p></div></div>
                    <div class="flex items-start space-x-6"><div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold">3</span></div><div><h3 class="text-xl font-bold text-gray-900 mb-2">Organiser des compétitions</h3><p class="text-gray-700">Créer un calendrier sportif riche...</p></div></div>
                    <div class="flex items-start space-x-6"><div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold">4</span></div><div><h3 class="text-xl font-bold text-gray-900 mb-2">Renforcer le réseau des clubs</h3><p class="text-gray-700">Soutenir et développer le réseau des clubs...</p></div></div>
                </div></div>
            </section>
        </main>
    </div>
@endsection