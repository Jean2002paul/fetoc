@extends('layouts.app')

@section('title', 'Contact - FETOC')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contactez la FETOC</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto mb-6">
                La Fédération Togolaise de Canoë-Kayak est à votre disposition pour toutes vos questions, 
                inscriptions aux clubs, informations sur les compétitions et formations.
            </p>
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <i class="fas fa-users mr-2"></i>Plus de 500 membres
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <i class="fas fa-trophy mr-2"></i>15 clubs affiliés
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <i class="fas fa-medal mr-2"></i>Compétitions nationales
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 py-16">
        <!-- FAQ Section -->
        <div class="mb-16 bg-gradient-to-br from-white to-gray-50 p-8 rounded-3xl shadow-2xl border border-gray-100">
            <!-- Titre avec traits décoratifs -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-16 h-0.5 bg-yellow-400"></div>
                    <span class="mx-4 text-primary font-semibold uppercase tracking-wider">FAQ</span>
                    <div class="w-16 h-0.5 bg-yellow-400"></div>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Ce que vous devez savoir</h2>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Comment s'inscrire ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Contactez un club ou utilisez notre formulaire. Nous vous orienterons vers le club le plus proche.
                    </p>
                </details>
                
                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Documents requis ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Pièce d'identité, certificat médical, fiche d'inscription et frais d'adhésion.
                    </p>
                </details>
                
                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Compétitions débutants ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Oui, nous organisons des compétitions pour tous les niveaux et des stages d'initiation.
                    </p>
                </details>
                
                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Licence fédérale ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Délivrée par votre club d'affiliation. Permet de participer aux compétitions officielles.
                    </p>
                </details>

                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Équipement nécessaire ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Gilet de sauvetage, pagaie, kayak/canoë. Les clubs fournissent l'équipement de base.
                    </p>
                </details>

                <details class="group bg-white rounded-2xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <summary class="cursor-pointer font-semibold text-gray-900 hover:text-primary transition-colors duration-300 text-lg flex items-center justify-between">
                        <span>Stages de formation ?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform duration-300 text-primary"></i>
                    </summary>
                    <p class="mt-4 text-gray-600">
                        Oui, stages réguliers pour tous niveaux, encadrés par des entraîneurs diplômés.
                    </p>
                </details>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Formulaire de contact -->
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Contact</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Envoyez-nous un message</h2>
                </div>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                            <input type="text" id="nom" name="nom" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                   placeholder="Votre nom complet">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                   placeholder="votre@email.com">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                   placeholder="+228 XX XX XX XX">
                        </div>
                        <div>
                            <label for="sujet" class="block text-sm font-semibold text-gray-700 mb-2">Sujet *</label>
                            <select id="sujet" name="sujet" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">
                                <option value="">Choisissez un sujet</option>
                                <option value="information">Demande d'information générale</option>
                                <option value="inscription">Inscription à un club</option>
                                <option value="formation">Formation et stages</option>
                                <option value="competition">Compétitions et événements</option>
                                <option value="licence">Demande de licence</option>
                                <option value="partenariat">Partenariat et sponsoring</option>
                                <option value="presse">Presse et médias</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 resize-none"
                                  placeholder="Décrivez votre demande en détail..."></textarea>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" id="newsletter" name="newsletter" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                        <label for="newsletter" class="text-sm text-gray-600">
                            Je souhaite recevoir la newsletter de la FETOC
                        </label>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-primary to-secondary hover:from-secondary hover:to-primary text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Informations de contact -->
            <div class="space-y-8">
                <!-- Coordonnées -->
                <div class="bg-white p-8 rounded-2xl shadow-xl">
                    <!-- Titre avec traits décoratifs -->
                    <div class="text-center mb-8">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                            <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Coordonnées</span>
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Nos coordonnées</h3>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Adresse du siège</h4>
                                <p class="text-gray-600">123 Rue de la Fédération<br>Quartier Administratif<br>Lomé, Togo</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Téléphone</h4>
                                <a href="tel:+22890000000" class="text-gray-600 hover:text-primary transition-colors duration-300">
                                    +228 90 00 00 00
                                </a><br>
                                <a href="tel:+22890000001" class="text-gray-600 hover:text-primary transition-colors duration-300">
                                    +228 90 00 00 01 (Urgences)
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                <a href="mailto:contact@fetoc.tg" class="text-gray-600 hover:text-primary transition-colors duration-300">
                                    contact@fetoc.tg
                                </a><br>
                                <a href="mailto:info@fetoc.tg" class="text-gray-600 hover:text-primary transition-colors duration-300">
                                    info@fetoc.tg
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Horaires d'ouverture</h4>
                                <p class="text-gray-600">
                                    <strong>Lundi - Vendredi :</strong> 8h00 - 17h00<br>
                                    <strong>Samedi :</strong> 9h00 - 12h00<br>
                                    <strong>Dimanche :</strong> Fermé<br>
                                    <em class="text-sm">Fermé les jours fériés</em>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>



        <!-- Carte interactive -->
        
@endsection
