@extends('layouts.app')

@section('title', 'La Fédération - FETOC')

@section('content')
    <div class="min-h-screen flex flex-col">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">La Fédération</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-4xl mx-auto mb-8">
                    Découvrez la Fédération Togolaise de Canoë-Kayak et Disciplines Associées
                </p>
                <div class="flex flex-wrap justify-center gap-6 text-sm">
                    <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                        <i class="fas fa-users mr-2"></i>Plus de 500 membres
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                        <i class="fas fa-trophy mr-2"></i>15 clubs affiliés
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                        <i class="fas fa-medal mr-2"></i>Compétitions nationales
                    </div>
                </div>
            </div>
        </section>

        <main class="container mx-auto px-6 py-16 flex-grow">
            
            <!-- Section Mission -->
            <section id="mission" class="mb-20 bg-gradient-to-br from-white to-gray-50 p-12 rounded-3xl shadow-2xl border border-gray-100 relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-purple-50/30"></div>
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full translate-y-12 -translate-x-12"></div>
                
                <div class="relative z-10">
                    <!-- Titre avec traits décoratifs -->
                    <div class="text-center mb-12">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                            <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Mission</span>
                            <div class="w-16 h-0.5 bg-yellow-400"></div>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900">Notre Mission</h2>
                    </div>
                    
                    <div class="max-w-4xl mx-auto">
                        <p class="text-xl text-gray-700 leading-relaxed mb-8 text-center">
                            La Fédération Togolaise de Canoë-Kayak et Disciplines Associées (FETOC) a pour mission de développer, 
                            promouvoir et organiser la pratique du canoë-kayak et des disciplines associées sur l'ensemble du territoire togolais.
                        </p>
                        
                        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Objectifs Stratégiques</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Développement du sport</h4>
                                            <p class="text-gray-600 text-sm">Promouvoir l'accessibilité des sports nautiques</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Formation des athlètes</h4>
                                            <p class="text-gray-600 text-sm">Former des compétiteurs de haut niveau</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Organisation d'événements</h4>
                                            <p class="text-gray-600 text-sm">Organiser des compétitions nationales</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Représentation internationale</h4>
                                            <p class="text-gray-600 text-sm">Représenter le Togo sur la scène internationale</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Développement des infrastructures</h4>
                                            <p class="text-gray-600 text-sm">Créer des centres d'entraînement</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Sensibilisation</h4>
                                            <p class="text-gray-600 text-sm">Éduquer sur les sports nautiques</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Le Bureau -->
            <section id="bureau" class="mb-20 bg-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Bureau</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Le Bureau</h2>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <!-- Président -->
                    <div class="mb-12 bg-gradient-to-br from-primary to-secondary p-8 rounded-2xl text-white">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="text-center">
                                <div class="w-32 h-32 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-user-tie text-white text-4xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold mb-2">M. Kossi AGBENYEGA</h3>
                                <p class="text-lg font-semibold mb-4">Président</p>
                                <p class="text-white/90">
                                    M. Kossi AGBENYEGA est le président de la Fédération Togolaise de Canoë-Kayak depuis 2018. 
                                    Avec plus de 20 ans d'expérience dans le sport, il a contribué au développement des sports 
                                    nautiques au Togo.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-6">Responsabilités</h4>
                                <ul class="space-y-4">
                                    <li class="flex items-start space-x-3">
                                        <i class="fas fa-check-circle text-white mt-1"></i>
                                        <span>Direction générale de la fédération</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <i class="fas fa-check-circle text-white mt-1"></i>
                                        <span>Représentation nationale et internationale</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <i class="fas fa-check-circle text-white mt-1"></i>
                                        <span>Développement stratégique</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <i class="fas fa-check-circle text-white mt-1"></i>
                                        <span>Relations avec les partenaires</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bureau Exécutif -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-tie text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">M. Yao KOUASSI</h3>
                            <p class="text-white/90 mb-4">Vice-Président</p>
                            <p class="text-white/80 text-sm">
                                Responsable du développement sportif et de la formation des athlètes.
                            </p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-file-alt text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Mme. Akouvi MENSAH</h3>
                            <p class="text-white/90 mb-4">Secrétaire Générale</p>
                            <p class="text-white/80 text-sm">
                                Gestion administrative et coordination des activités fédérales.
                            </p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-coins text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">M. Komi ADOTE</h3>
                            <p class="text-white/90 mb-4">Trésorier</p>
                            <p class="text-white/80 text-sm">
                                Gestion financière et comptabilité de la fédération.
                            </p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-dumbbell text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">M. Koffi AGBO</h3>
                            <p class="text-white/90 mb-4">Responsable Technique</p>
                            <p class="text-white/80 text-sm">
                                Coordination technique et formation des entraîneurs.
                            </p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-trophy text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Mme. Afiwa KOUASSI</h3>
                            <p class="text-white/90 mb-4">Responsable Compétitions</p>
                            <p class="text-white/80 text-sm">
                                Organisation des événements sportifs et compétitions.
                            </p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bullhorn text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">M. Yao KOUASSI</h3>
                            <p class="text-white/90 mb-4">Responsable Communication</p>
                            <p class="text-white/80 text-sm">
                                Relations publiques et communication fédérale.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Disciplines Associées -->
            <section id="disciplines" class="mb-20 bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Disciplines</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Disciplines Associées</h2>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <!-- Canoë -->
                    <div class="mb-12 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-6">Canoë</h3>
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    Le canoë est une embarcation ouverte propulsée à la pagaie simple. Le pagayeur est à genoux 
                                    et utilise une pagaie à une seule pale. Cette discipline combine technique, endurance et stratégie.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-check-circle text-primary"></i>
                                        <span class="text-gray-700">Pagaie simple</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-check-circle text-primary"></i>
                                        <span class="text-gray-700">Position à genoux</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-check-circle text-primary"></i>
                                        <span class="text-gray-700">Embarcation ouverte</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white">
                                <h4 class="text-xl font-bold mb-4">Compétitions</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <i class="fas fa-trophy mr-3"></i>
                                        <span>Sprint (200m, 500m, 1000m)</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-trophy mr-3"></i>
                                        <span>Slalom (eau vive)</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-trophy mr-3"></i>
                                        <span>Marathon (longue distance)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kayak -->
                    <div class="mb-12 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white">
                                <h4 class="text-xl font-bold mb-4">Caractéristiques</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <i class="fas fa-water mr-3"></i>
                                        <span>Embarcation fermée</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-water mr-3"></i>
                                        <span>Pagaie double</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-water mr-3"></i>
                                        <span>Position assise</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-6">Kayak</h3>
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    Le kayak est une embarcation fermée propulsée à la pagaie double. Le pagayeur est assis 
                                    dans un cockpit fermé par une jupe. Cette discipline offre une grande variété de pratiques.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="bg-primary p-3 rounded-xl text-white text-center">
                                        <h5 class="font-bold">Sprint</h5>
                                        <p class="text-sm">Courses de vitesse</p>
                                    </div>
                                    <div class="bg-secondary p-3 rounded-xl text-white text-center">
                                        <h5 class="font-bold">Slalom</h5>
                                        <p class="text-sm">Eau vive</p>
                                    </div>
                                    <div class="bg-primary p-3 rounded-xl text-white text-center">
                                        <h5 class="font-bold">Marathon</h5>
                                        <p class="text-sm">Longue distance</p>
                                    </div>
                                    <div class="bg-secondary p-3 rounded-xl text-white text-center">
                                        <h5 class="font-bold">Freestyle</h5>
                                        <p class="text-sm">Figures acrobatiques</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Autres Disciplines -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-water text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Rafting</h3>
                            <p class="text-gray-600 text-center mb-4">
                                Descente de rivière en équipe sur un radeau pneumatique.
                            </p>
                            <div class="text-center">
                                <span class="bg-primary text-white px-3 py-1 rounded-full text-sm">Équipe</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Stand Up Paddle</h3>
                            <p class="text-gray-600 text-center mb-4">
                                Navigation debout sur une planche avec une pagaie.
                            </p>
                            <div class="text-center">
                                <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm">Individuel</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-dragon text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Dragon Boat</h3>
                            <p class="text-gray-600 text-center mb-4">
                                Course en équipe sur des embarcations traditionnelles.
                            </p>
                            <div class="text-center">
                                <span class="bg-primary text-white px-3 py-1 rounded-full text-sm">Équipe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Clubs Affiliés -->
            <section id="clubs" class="mb-20 bg-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Clubs</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Clubs Affiliés</h2>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <p class="text-xl text-gray-700 leading-relaxed mb-8 text-center">
                        La FETOC compte 15 clubs affiliés répartis sur tout le territoire togolais, 
                        offrant des programmes d'entraînement et de formation pour tous les niveaux.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Club 1 -->
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-trophy text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club Nautique de Lomé</h3>
                            <p class="text-white/90 text-center mb-4">Lomé, Région Maritime</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Formation tous niveaux</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Équipement fourni</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Compétitions locales</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Club 2 -->
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-water text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club de Canoë-Kayak de Kara</h3>
                            <p class="text-white/90 text-center mb-4">Kara, Région de la Kara</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Initiation gratuite</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Stages vacances</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Équipe compétition</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Club 3 -->
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-medal text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club Nautique de Sokodé</h3>
                            <p class="text-white/90 text-center mb-4">Sokodé, Région Centrale</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Formation technique</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Équipement moderne</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Champions régionaux</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Club 4 -->
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-star text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club de Pagaie d'Atakpamé</h3>
                            <p class="text-white/90 text-center mb-4">Atakpamé, Région des Plateaux</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>École de pagaie</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Formation sécurité</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Sorties découverte</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Club 5 -->
                        <div class="bg-gradient-to-br from-primary to-secondary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-anchor text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club Maritime de Tsévié</h3>
                            <p class="text-white/90 text-center mb-4">Tsévié, Région Maritime</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Sports nautiques</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Voile et kayak</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Activités familiales</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Club 6 -->
                        <div class="bg-gradient-to-br from-secondary to-primary p-6 rounded-2xl text-white">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-ship text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">Club de Canoë de Kpalimé</h3>
                            <p class="text-white/90 text-center mb-4">Kpalimé, Région des Plateaux</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Randonnées nautiques</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Formation environnement</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Écotourisme</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-12 text-center">
                        <div class="bg-gradient-to-br from-primary to-secondary p-8 rounded-2xl text-white">
                            <h3 class="text-2xl font-bold mb-4">Rejoignez un Club</h3>
                            <p class="mb-6">
                                Intéressé par le canoë-kayak ? Contactez-nous pour trouver le club le plus proche de chez vous 
                                et commencer votre aventure nautique !
                            </p>
                            <a href="/contact" class="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300">
                                Nous Contacter
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Histoire -->
            <section class="mb-20 bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Histoire</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Notre Histoire</h2>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Une aventure qui a commencé en 2010</h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                La Fédération Togolaise de Canoë-Kayak a été fondée avec l'objectif de promouvoir et développer 
                                la pratique du canoë-kayak au Togo. Depuis sa création, la FETOC s'est engagée à former des 
                                athlètes de haut niveau et à organiser des compétitions nationales et internationales.
                            </p>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Notre fédération a connu une croissance constante, passant de quelques clubs pionniers à un 
                                réseau de 15 clubs affiliés répartis sur tout le territoire togolais. Cette expansion témoigne 
                                de l'engouement croissant pour les sports nautiques dans notre pays.
                            </p>
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-primary">13</div>
                                    <div class="text-sm text-gray-600">Années d'expérience</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-primary">500+</div>
                                    <div class="text-sm text-gray-600">Membres actifs</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-primary">15</div>
                                    <div class="text-sm text-gray-600">Clubs affiliés</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-primary to-secondary p-8 rounded-2xl text-white">
                            <h4 class="text-xl font-bold mb-4">Nos Réalisations</h4>
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    Organisation de compétitions nationales annuelles
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    Formation de plus de 200 entraîneurs diplômés
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    Participation aux championnats d'Afrique
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    Développement des infrastructures nautiques
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Valeurs -->
            <section class="mb-20 bg-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Valeurs</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Nos Valeurs</h2>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 text-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Passion</h3>
                            <p class="text-gray-600">
                                Nous cultivons la passion pour les sports nautiques et transmettons cet amour à nos membres.
                            </p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 text-center">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-handshake text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Excellence</h3>
                            <p class="text-gray-600">
                                Nous visons l'excellence dans tous nos programmes et compétitions.
                            </p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 text-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Solidarité</h3>
                            <p class="text-gray-600">
                                Nous favorisons l'esprit d'équipe et la solidarité entre nos membres.
                            </p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 text-center">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-leaf text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Respect</h3>
                            <p class="text-gray-600">
                                Nous respectons l'environnement et promouvons des pratiques durables.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Objectifs -->
            <section class="mb-20 bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <!-- Titre avec traits décoratifs -->
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                        <span class="mx-4 text-primary font-semibold uppercase tracking-wider">Objectifs</span>
                        <div class="w-16 h-0.5 bg-yellow-400"></div>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">Nos Objectifs</h2>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Développer la pratique du canoë-kayak</h3>
                                <p class="text-gray-700">
                                    Promouvoir l'accessibilité des sports nautiques pour tous les âges et niveaux, 
                                    en créant des programmes d'initiation et de perfectionnement.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Former des athlètes de haut niveau</h3>
                                <p class="text-gray-700">
                                    Mettre en place des structures de formation pour développer des compétiteurs 
                                    capables de représenter le Togo sur la scène internationale.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Organiser des compétitions</h3>
                                <p class="text-gray-700">
                                    Créer un calendrier sportif riche avec des événements locaux, nationaux 
                                    et internationaux pour dynamiser la pratique compétitive.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Renforcer le réseau des clubs</h3>
                                <p class="text-gray-700">
                                    Soutenir et développer le réseau des clubs affiliés pour assurer une 
                                    couverture territoriale optimale et une accessibilité pour tous.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
@endsection
