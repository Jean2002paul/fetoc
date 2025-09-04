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
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'FETOC - Fédération Togolaise de Canoë-Kayak')</title>
    <meta name="title" content="FETOC - Fédération Togolaise de Canoë-Kayak">
    <meta name="description" content="Site officiel de la Fédération Togolaise de Canoë-Kayak. Découvrez nos compétitions, nos athlètes et nos actualités.">
    <meta name="keywords" content="canoë, kayak, FETOC, Togo, sport nautique, compétition, pagayage, aviron">
    <meta name="author" content="FETOC">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/vrai_logo_fetoc.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/vrai_logo_fetoc.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vrai_logo_fetoc.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vrai_logo_fetoc.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vrai_logo_fetoc.png') }}">
    
    <!-- Meta Tags pour le SEO -->
    <meta name="description" content="FETOC - Fédération Togolaise de Canoë-Kayak. Découvrez nos activités, compétitions et actualités.">
    <meta property="og:title" content="FETOC - Fédération Togolaise de Canoë-Kayak">
    <meta property="og:description" content="Découvrez nos activités, compétitions et actualités de la Fédération Togolaise de Canoë-Kayak.">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="FETOC - Fédération Togolaise de Canoë-Kayak">
    <meta property="og:description" content="Site officiel de la Fédération Togolaise de Canoë-Kayak. Découvrez nos compétitions, nos athlètes et nos actualités.">
    <meta property="og:image" content="{{ url(asset('assets/vrai_logo_fetoc.png')) }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Logo de la Fédération Togolaise de Canoë-Kayak">
    <meta property="og:site_name" content="FETOC">
    <meta property="og:locale" content="fr_FR">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="FETOC - Fédération Togolaise de Canoë-Kayak">
    <meta property="twitter:description" content="Site officiel de la Fédération Togolaise de Canoë-Kayak. Découvrez nos compétitions, nos athlètes et nos actualités.">
    <meta property="twitter:image" content="{{ url(asset('assets/vrai_logo_fetoc.png')) }}">
    <meta name="twitter:image:alt" content="Logo de la Fédération Togolaise de Canoë-Kayak">
    
    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#10B981">
    <meta name="msapplication-TileColor" content="#10B981">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
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
