{{-- resources/views/components/public/footer.blade.php --}}

<footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-16 relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 py-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Contact -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3 mb-4"><div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center"><i class="fas fa-map-marker-alt text-white"></i></div><h4 class="text-xl font-bold text-primary">Contact</h4></div>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3"><i class="fas fa-map-marker-alt text-primary mt-1"></i><p class="text-gray-300 hover:text-white transition-colors duration-300">Siège social: Agbodrafo , Togo</p></div>
                    <div class="flex items-center space-x-3"><i class="fas fa-envelope text-primary"></i><a href="mailto:fetoc228@gmail.com" class="text-gray-300 hover:text-white transition-colors duration-300">fetoc228@gmail.com</a></div>
                    <div class="flex items-center space-x-3"><i class="fas fa-phone text-primary"></i><a href="tel:+22890000000" class="text-gray-300 hover:text-white transition-colors duration-300">(+228) 90 20 27 12 / 90 29 28 29</a></div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="space-y-4"><div class="flex items-center space-x-3 mb-4"><div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center"><i class="fas fa-sitemap text-white"></i></div><h4 class="text-xl font-bold text-primary">Navigation</h4></div>
                <ul class="space-y-3">
                    <li><a href="/" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Accueil</span></a></li>
                    <li><a href="/federation/mission" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>La Fédération</span></a></li>
                    <li><a href="/clubs" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Clubs affiliés</span></a></li>
                    <li><a href="/actualites" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Actualités</span></a></li>
                    <li><a href="/galerie" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Galerie</span></a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Contact</span></a></li>
                </ul>
            </div>

            <!-- Disciplines -->
            <div class="space-y-4"><div class="flex items-center space-x-3 mb-4"><div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center"><i class="fas fa-water text-white"></i></div><h4 class="text-xl font-bold text-primary">Disciplines</h4></div>
                <ul class="space-y-3">
                    <li><a href="/disciplines/canoe" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Canoë</span></a></li>
                    <li><a href="/disciplines/kayak" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Kayak</span></a></li>
                    <li><a href="/disciplines/associees" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center space-x-2"><i class="fas fa-chevron-right text-primary text-xs"></i><span>Disciplines associées</span></a></li>
                </ul>
            </div>

            <!-- Réseaux sociaux -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3 mb-4"><div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center"><i class="fas fa-share-alt text-white"></i></div><h4 class="text-xl font-bold text-primary">Suivez-nous</h4></div>
                <div class="flex space-x-4">
                    <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-blue-500/50"><i class="fab fa-facebook-f text-xl group-hover:text-white transition-colors duration-300"></i><span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Facebook</span></a>
                    <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-500 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-pink-500/50"><i class="fab fa-instagram text-xl group-hover:text-white transition-colors duration-300"></i><span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Instagram</span></a>
                    <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:rotate-3 hover:shadow-lg hover:shadow-red-500/50"><i class="fab fa-youtube text-xl group-hover:text-white transition-colors duration-300"></i><span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">YouTube</span></a>
                    <a href="#" class="group relative w-12 h-12 bg-gray-800 hover:bg-blue-400 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-rotate-3 hover:shadow-lg hover:shadow-blue-400/50"><i class="fab fa-twitter text-xl group-hover:text-white transition-colors duration-300"></i><span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Twitter</span></a>
                </div>
                <div class="mt-6"><h5 class="text-sm font-semibold text-gray-400 mb-3">Newsletter</h5>
                    <div class="flex space-x-2"><input type="email" placeholder="Votre email" class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary transition-colors duration-300"><button class="px-4 py-2 bg-primary hover:bg-secondary text-white rounded-lg transition-colors duration-300 transform hover:scale-105"><i class="fas fa-paper-plane"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Copyright -->
    <div class="border-t border-gray-700 bg-gray-800">
        <div class="container mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm">© {{ now()->year }} FETOC - Tous droits réservés.</div>
                <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-sm">
                    <div class="flex space-x-6">
                        <a href="/mentions-legales" class="text-gray-400 hover:text-primary transition-colors duration-300">Mentions légales</a>
                        <a href="/politique-confidentialite" class="text-gray-400 hover:text-primary transition-colors duration-300">Politique de confidentialité</a>
                        <a href="/conditions-utilisation" class="text-gray-400 hover:text-primary transition-colors duration-300">Conditions d'utilisation</a>
                    </div>
                    <div class="flex items-center space-x-2 text-gray-500">
                        <span>Conçu par</span>
                        <a href="https://jean2002paul.github.io/Portfolio-jean-paul/" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary font-semibold transition-colors duration-300 flex items-center space-x-1 cursor-pointer hover:scale-105 transform"><span>Louis ZIALENGOR</span><i class="fas fa-external-link-alt text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>