{{-- resources/views/components/dark-mode-toggle.blade.php --}}

{{--
    Ce bouton interagit avec la variable 'isDarkMode' définie dans le layout parent (x-data).
    @click="isDarkMode = !isDarkMode" inverse la valeur de cette variable.
--}}
<button 
    @click="isDarkMode = !isDarkMode"
    type="button"
    class="relative inline-flex items-center justify-center w-12 h-6 bg-gray-300 dark:bg-gray-600 rounded-full transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:focus:ring-offset-gray-800"
>
    <span class="sr-only">Activer le mode sombre</span>

    {{-- Cercle qui se déplace --}}
    <span 
        :class="isDarkMode ? 'translate-x-6' : 'translate-x-1'"
        class="absolute left-0 inline-block w-4 h-4 bg-white rounded-full transform transition-transform duration-300 ease-in-out"
    ></span>

    {{-- Icône Lune (visible en mode clair) --}}
    <svg :class="{'opacity-0': isDarkMode, 'opacity-100': !isDarkMode}" class="absolute left-1.5 w-3 h-3 text-gray-500 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
    </svg>

    {{-- Icône Soleil (visible en mode sombre) --}}
    <svg :class="{'opacity-100': isDarkMode, 'opacity-0': !isDarkMode}" class="absolute right-1.5 w-3 h-3 text-yellow-400 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M12 12a4 4 0 11-8 0 4 4 0 018 0z" />
    </svg>
</button>