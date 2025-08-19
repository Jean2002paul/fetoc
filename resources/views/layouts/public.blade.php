{{-- resources/views/layouts/public.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover" />
    <meta name="theme-color" content="#10B981" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>@yield('title', 'FETOC - Fédération Togolaise de Canoë-Kayak')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS for mobile responsiveness -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
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
        .group:hover .group-hover\:block { display: block; }
    </style>
    @stack('styles')
</head>
<body class="bg-light font-sans text-gray-800 leading-relaxed pt-20">
    <!-- On appelle le composant Header -->
    <x-public.header />

    <!-- Contenu de la page -->
    <main class="@if(request()->is('/')) p-0 @else py-6 sm:py-10 px-3 sm:px-4 container mx-auto @endif">
        @yield('content')
    </main>

    <!-- On appelle le composant Footer -->
    <x-public.footer />
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/spotlight.js@0.7.8/dist/spotlight.bundle.min.js" defer></script>
    @stack('scripts')
</body>
</html>
