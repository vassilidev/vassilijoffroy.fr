<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vassili Joffroy - Entrepreneur & CTO spécialisé en Laravel, SaaS & Scraping</title>
    <meta name="description"
          content="Développeur web spécialisé en Laravel, SaaS & Scraping. J'aide les entreprises à innover et à se développer dans l'ère numérique.">
    <meta name="keywords" content="Vassili Joffroy, Développeur web, Laravel, SaaS, Scraping, CTO, Entrepreneur">
    <meta name="author" content="Vassili Joffroy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dracula-bg text-dracula-foreground font-sans overflow-x-hidden">

<div id="cursor"
     class="hidden md:block fixed top-0 left-0 w-4 h-4 bg-dracula-green rounded-full pointer-events-none z-50"></div>

<button id="scrollToTop"
        class="hidden fixed bottom-6 right-6 bg-dracula-green text-dracula-bg p-4 rounded-full shadow-lg hover:bg-dracula-green-700 transition duration-300 z-50">
    <i class="fas fa-chevron-up text-2xl"></i>
</button>

@include('layouts.default.navbar')

@yield('content')

@include('layouts.default.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Custom Cursor
        const cursor = document.getElementById('cursor');
        document.addEventListener('mousemove', e => {
            cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
        });

        // Scroll to Top
        const scrollToTopButton = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            scrollToTopButton.classList.toggle('hidden', window.pageYOffset <= 300);
        });

        // Toggle Mobile Menu
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    });
</script>
</body>
</html>
