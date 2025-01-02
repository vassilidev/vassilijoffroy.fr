<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vassili Joffroy - Entrepreneur & Développeur Laravel, SaaS, et Scraping</title>
    <meta name="description"
          content="Transformez vos idées en réalités numériques avec Vassili Joffroy. Expert en Laravel, SaaS et Scraping, je crée des solutions digitales sur mesure pour booster vos projets.">
    <meta name="keywords"
          content="Vassili Joffroy, Développeur Laravel, SaaS, Scraping, Entrepreneur, CTO, Projets numériques, Transformation digitale">
    <meta name="author" content="Vassili Joffroy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Vassili Joffroy - Entrepreneur & Développeur Laravel, SaaS, et Scraping">
    <meta property="og:description"
          content="Transformez vos idées en réalités numériques avec Vassili Joffroy. Expert en Laravel, SaaS et Scraping, je crée des solutions digitales sur mesure pour booster vos projets.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vassilijoffroy.fr">
    <meta property="og:image" content="{{ asset('banner.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vassili Joffroy - Entrepreneur & Développeur Laravel, SaaS, et Scraping">
    <meta name="twitter:description"
          content="Transformez vos idées en réalités numériques avec Vassili Joffroy. Expert en Laravel, SaaS et Scraping, je crée des solutions digitales sur mesure pour booster vos projets.">
    <meta name="twitter:image" content="{{ asset('banner.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://vassilijoffroy.fr">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
    <meta name="apple-mobile-web-app-title" content="Vassili Joffroy"/>
    <link rel="manifest" href="/site.webmanifest"/>

    <!-- CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')
</head>
<body class="bg-dracula-bg text-dracula-foreground mt-6">

<div id="cursor"
     class="hidden md:block fixed top-0 left-0 w-4 h-4 bg-dracula-green rounded-full pointer-events-none z-50"></div>

<button id="scrollToTop"
        class="hidden fixed bottom-6 right-6 bg-dracula-cyan text-dracula-bg p-4 rounded-full shadow-lg hover:bg-dracula-purple hover:shadow-xl transition-all duration-300 ease-in-out z-50">
    <img src="{{ asset('chevron-up.svg') }}" alt="Remonter en haut" class="w-6 h-6">
</button>

@include('layouts.default.navbar')

@yield('content')

@include('layouts.default.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Scroll to Top
        const scrollToTopButton = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            scrollToTopButton.classList.toggle('hidden', window.pageYOffset <= 300);
        });

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>
@stack('js')
</body>
</html>
