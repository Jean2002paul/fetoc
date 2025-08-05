<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'FETOC - Fédération Togolaise de Canoë-Kayak')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" />
    
    <style>
        :root {
            --color-primary: #10B981;
            --color-secondary: #059669;
            --color-dark: #1F2937;
            --color-light: #F9FAFB;
        }
        .bg-primary { background-color: var(--color-primary); }
        .text-primary { color: var(--color-primary); }
        .hover\:bg-secondary:hover { background-color: var(--color-secondary); }
        .hover\:text-secondary:hover { color: var(--color-secondary); }
        .group:hover .group-hover\:block {
            display: block;
        }
    </style>
</head>
<body class="bg-light font-sans text-gray-800 leading-relaxed">

    <!-- Header -->
    <header class="bg-white shadow-md py-4 relative z-10">
        <nav class="container mx-auto px-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('assets/logo_fetoc.png') }}" alt="Logo FETOC" class="h-10 w-20 object-cover" />
                <span class="hidden md:inline text-xl font-bold text-gray-900">Fédération Togolaise de Canoë-Kayak</span>
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 text-base font-semibold">
                <li><a href="/" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Accueil</a></li>
                
                                 <!-- Menu déroulant -->
                 <li class="relative group" x-data="{ federationMenuOpen: false, federationMenuTimeout: null }" 
                     @mouseenter="clearTimeout(federationMenuTimeout); federationMenuOpen = true" 
                     @mouseleave="federationMenuTimeout = setTimeout(() => federationMenuOpen = false, 150)">
                     <button class="flex items-center gap-2 hover:text-primary focus:outline-none transition-colors duration-300 hover:scale-105 transform">
                         La Fédération
                         <i class="fas fa-chevron-down text-sm transition-transform duration-300" 
                            :class="{ 'rotate-180': federationMenuOpen }"></i>
                     </button>
                     
                     <div x-show="federationMenuOpen"
                          @mouseenter="clearTimeout(federationMenuTimeout)"
                          @mouseleave="federationMenuTimeout = setTimeout(() => federationMenuOpen = false, 150)"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform -translate-y-4 scale-95"
                          x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
                          x-transition:leave="transition ease-in duration-200"
                          x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
                          x-transition:leave-end="opacity-0 transform -translate-y-4 scale-95"
                          class="absolute bg-white mt-3 shadow-2xl rounded-xl z-50 border border-gray-200 min-w-48 overflow-hidden backdrop-blur-sm bg-white/95">
                        
                        <div class="py-2">
                            <a href="/federation#mission" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-bullseye mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Mission</span>
                            </a>
                            
                            <a href="/federation#bureau" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-users mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Le Bureau</span>
                            </a>
                            
                            <a href="/federation#disciplines" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-water mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Disciplines associées</span>
                            </a>
                            
                            <a href="/federation#clubs" 
                               class="flex items-center px-6 py-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all duration-300 group/item">
                                <i class="fas fa-trophy mr-3 text-primary group-hover/item:text-white transition-colors duration-300"></i>
                                <span>Clubs affiliés</span>
                            </a>
                        </div>
                    </div>
                </li>


                <li><a href="/actualites" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Actualités</a></li>
                <li><a href="/galerie" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Galerie</a></li>
                <li><a href="/contact" class="hover:text-primary transition-colors duration-300 hover:scale-105 transform">Contact</a></li>
            </ul>

            <!-- Mobile Hamburger -->
            <button id="mobile-menu-button" class="md:hidden text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 px-4 space-y-3">
            <a href="/" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Accueil</a>
            <details class="group">
                <summary class="cursor-pointer py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium flex items-center justify-between">
                    <span>La Fédération</span>
                    <i class="fas fa-chevron-down transition-transform duration-300 group-open:rotate-180"></i>
                </summary>
                <div class="pl-4 space-y-2 mt-2 bg-gray-50 rounded-lg p-3">
                                         <a href="/federation#mission" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-bullseye mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Mission</span>
                     </a>
                     <a href="/federation#bureau" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-users mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Le Bureau</span>
                     </a>
                     <a href="/federation#disciplines" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-water mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Disciplines associées</span>
                     </a>
                     <a href="/federation#clubs" class="flex items-center py-2 px-4 hover:text-primary hover:bg-white rounded-lg transition-all duration-300 group/item">
                         <i class="fas fa-trophy mr-3 text-primary group-hover/item:scale-110 transition-transform duration-300"></i>
                         <span>Clubs affiliés</span>
                     </a>
                </div>
            </details>
            <a href="/actualites" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Actualités</a>
            <a href="/galerie" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Galerie</a>
            <a href="/contact" class="block py-3 px-4 hover:text-primary hover:bg-gray-50 rounded-lg transition-all duration-300 text-base font-medium">Contact</a>
        </div>
    </header>

    <!-- Contenu -->
    <main class="@if(request()->is('/')) p-0 @else py-10 px-4 container mx-auto @endif">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-16 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="container mx-auto px-6 py-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Contact -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Contact</h4>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <p class="text-gray-300 hover:text-white transition-colors duration-300">Siège social: Agbodrafo, Togo</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <a href="mailto:fetoc228@gmail.com" class="text-gray-300 hover:text-white transition-colors duration-300">fetoc228@gmail.com</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary"></i>
                            <a href="tel:+22890202712" class="text-gray-300 hover:text-white transition-colors duration-300">(+228) 90 20 27 12</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary"></i>
                            <a href="tel:+22890292829" class="text-gray-300 hover:text-white transition-colors duration-300">(+228) 90 29 28 29</a>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-clock text-primary mt-1"></i>
                            <div class="text-gray-300">
                                <p class="hover:text-white transition-colors duration-300">Lun-Ven: 8h00-17h00</p>
                                <p class="hover:text-white transition-colors duration-300">Sam: 9h00-12h00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-sitemap text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Navigation</h4>
                    </div>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Accueil</span></a></li>
                                                 <li><a href="/federation#mission" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>La Fédération</span></a></li>
                         <li><a href="/federation#clubs" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Clubs affiliés</span></a></li>
                        <li><a href="/actualites" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Actualités</span></a></li>
                        <li><a href="/galerie" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Galerie</span></a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Contact</span></a></li>
                    </ul>
                </div>

                <!-- Disciplines -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-water text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Disciplines</h4>
                    </div>
                    <ul class="space-y-3">
                                                 <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Canoë</span></a></li>
                         <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Kayak</span></a></li>
                         <li><a href="/federation#disciplines" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Disciplines associées</span></a></li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <i class="fas fa-share-alt text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold text-primary">Suivez-nous</h4>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-blue-500/50">
                            <i class="fab fa-facebook-f text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Facebook</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-500 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-pink-500/50">
                            <i class="fab fa-instagram text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Instagram</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-red-500/50">
                            <i class="fab fa-youtube text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">YouTube</span>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-400 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-blue-400/50">
                            <i class="fab fa-twitter text-xl group-hover:text-white transition-colors duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Twitter</span>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h5 class="text-sm font-semibold text-gray-400 mb-3">Newsletter</h5>
                        <div class="flex space-x-2">
                            <input type="email" placeholder="Votre email" class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300">
                            <button class="px-4 py-2 bg-primary hover:bg-secondary text-white rounded-lg transition-colors duration-300 transform hover:scale-105">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-700 bg-gray-800">
            <div class="container mx-auto px-6 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-gray-400 text-sm">
                        &copy; {{ now()->year }} FETOC - Tous droits réservés.
                    </div>
                    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-sm">
                        <div class="flex space-x-6">
                            <a href="/mentions-legales" class="text-gray-400 hover:text-primary transition-colors duration-300">Mentions légales</a>
                            <a href="/politique-confidentialite" class="text-gray-400 hover:text-primary transition-colors duration-300">Politique de confidentialité</a>
                            <a href="/conditions-utilisation" class="text-gray-400 hover:text-primary transition-colors duration-300">Conditions d'utilisation</a>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500">
                            <span>Conçu par</span>
                            <a href="https://jean2002paul.github.io/Portfolio-jean-paul/" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary font-semibold transition-colors duration-300 flex items-center space-x-1 cursor-pointer hover:scale-105 transform">
                                <span>Louis ZIALENGOR</span>
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script mobile -->
    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', () => {
            document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });
    </script>
</body>
</html>
