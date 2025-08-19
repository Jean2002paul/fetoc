@extends('layouts.public')

@section('title', 'Contact - FETOC')

@section('content')
    <div class="min-h-screen flex flex-col">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-16">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contactez la FETOC</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto mb-6">
                    La Fédération Togolaise de Canoë-Kayak est à votre disposition pour toutes vos questions, 
                    inscriptions aux clubs, informations sur les compétitions et formations.
                </p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full"><i class="fas fa-users mr-2"></i>Plus de 500 membres</div>
                    <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full"><i class="fas fa-trophy mr-2"></i>15 clubs affiliés</div>
                    <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full"><i class="fas fa-medal mr-2"></i>Compétitions nationales</div>
                </div>
            </div>
        </section>

        <main class="container mx-auto px-6 py-16 flex-grow">
            <!-- Bloc principal Contact + FAQ -->
            <div class="max-w-4xl mx-auto bg-gradient-to-br from-blue-50 via-purple-50 to-white/80 border border-blue-200 shadow-2xl rounded-3xl p-10 mb-16 backdrop-blur-md">
                <!-- Formulaire de contact -->
                <div id="contact-form" class="mb-12">
                    <div class="text-center mb-8">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                            <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Contact</span>
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Envoyez-nous un message</h2>
                    </div>
                    
                    {{-- Message de succès --}}
                    @if(session('success'))
                        <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md" role="alert">
                            <p class="font-bold">Message envoyé !</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    
                    {{-- Affichage des erreurs de validation --}}
                    @if ($errors->any())
                        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Oups!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 bg-white/90"
                                       placeholder="Votre nom complet">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 bg-white/90"
                                       placeholder="votre@email.com">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Sujet *</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 bg-white/90"
                                   placeholder="Sujet de votre message">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 resize-none bg-white/90"
                                      placeholder="Décrivez votre demande en détail...">{{ old('message') }}</textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-500 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Envoyer le message
                        </button>
                    </form>
                </div>

                <!-- FAQ Section -->
                <div>
                    <div class="text-center mb-8">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                            <span class="mx-4 text-primary font-semibold uppercase tracking-wider">FAQ</span>
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Ce que vous devez savoir</h2>
                    </div>
                    <div class="max-w-3xl mx-auto space-y-4">
                        @php
                            $faqs = [
                                ["question" => "Comment s'inscrire ?", "answer" => "Contactez un club ou utilisez notre formulaire. Nous vous orienterons vers le club le plus proche."],
                                ["question" => "Documents requis ?", "answer" => "Pièce d'identité, certificat médical, fiche d'inscription et frais d'adhésion."],
                                ["question" => "Compétitions débutants ?", "answer" => "Oui, nous organisons des compétitions pour tous les niveaux et des stages d'initiation."],
                                ["question" => "Licence fédérale ?", "answer" => "Délivrée par votre club d'affiliation. Permet de participer aux compétitions officielles."],
                                ["question" => "Équipement nécessaire ?", "answer" => "Gilet de sauvetage, pagaie, kayak/canoë. Les clubs fournissent l'équipement de base."],
                                ["question" => "Stages de formation ?", "answer" => "Oui, stages réguliers pour tous niveaux, encadrés par des entraîneurs diplômés."],
                            ];
                        @endphp
                        @foreach($faqs as $faq)
                        <details class="group bg-white/80 rounded-2xl p-6 border-l-4 border-blue-400 shadow-lg hover:shadow-xl transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                                <span>{{ $faq['question'] }}</span>
                                <svg class="ml-2 w-5 h-5 text-blue-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </summary>
                            <p class="mt-4 text-gray-700">{{ $faq['answer'] }}</p>
                        </details>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Carte interactive -->
            <div class="mt-16 bg-white p-8 rounded-2xl shadow-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Notre localisation</h3>
                <div class="w-full h-96 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7633.277877686897!2d1.4844777364616484!3d6.20922230264489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2stg!4v1754394173496!5m2!1sfr!2stg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-500">Siège social: Agbodrafo, Togo</p>
                </div>
            </div>
        </main>
    </div>
@endsection