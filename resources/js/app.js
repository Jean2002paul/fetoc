// resources/js/app.js

import './bootstrap';
import Alpine from 'alpinejs';

// On définit notre logique de layout dans une fonction réutilisable
const layout = () => ({
    sidebarOpen: false,
    isDarkMode: false,
    init() {
        // Tente de récupérer le mode depuis le localStorage
        const storedDarkMode = localStorage.getItem('darkMode');
        // S'il y a une valeur stockée, on l'utilise, sinon on se base sur les préférences système
        this.isDarkMode = storedDarkMode === 'true' || (storedDarkMode === null && window.matchMedia('(prefers-color-scheme: dark)').matches);

        // On observe les changements pour les sauvegarder
        this.$watch('isDarkMode', val => {
            localStorage.setItem('darkMode', val);
        });
    }
});

// On rend cette fonction disponible globalement pour Alpine
Alpine.data('layout', layout);

// On rend Alpine disponible globalement
window.Alpine = Alpine;

// On démarre Alpine
Alpine.start();