<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="@yield('meta_description', 'Réparation informatique à domicile à Suresnes, Hauts-de-Seine et toute l\'Île-de-France. Intervention rapide 24h/7j, prix imbattables. Spécialiste PC, virus, imprimantes. ☎️ 07 60 48 73 34')">
    <meta name="keywords"
          content="réparation ordinateur, dépannage informatique, Suresnes, Hauts-de-Seine, Île-de-France, virus, PC portable, imprimante, montage PC, crédit impôt">
    <meta name="author" content="Vassili JOFFROY">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title"
          content="@yield('og_title', 'Réparation Informatique Suresnes - Vassili JOFFROY - Prix Imbattables')">
    <meta property="og:description"
          content="@yield('og_description', 'Dépannage informatique à domicile en Île-de-France. Rapide, professionnel, prix imbattables. Crédit d\'impôt 50%. Ouvert 24h/7j.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="fr_FR">

    <title>@yield('title', 'Réparation Informatique Suresnes - Dépannage PC à Domicile | Prix Imbattables | Vassili JOFFROY')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#2596be',
                        'primary-green': '#6bb210',
                        'primary-dark': '#03102b'
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        glow: {
                            '0%': {boxShadow: '0 0 5px rgba(107, 178, 16, 0.5)'},
                            '100%': {boxShadow: '0 0 20px rgba(107, 178, 16, 0.8), 0 0 30px rgba(107, 178, 16, 0.6)'}
                        }
                    }
                }
            }
        }
    </script>

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Vassili JOFFROY - Réparation Informatique",
            "description": "Service de réparation et dépannage informatique à domicile à Suresnes, Hauts-de-Seine et toute l'Île-de-France",
            "url": "{{ url('/') }}",
    "telephone": "+33760487334",
    "email": "contact@vassilijoffroy.fr",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "8 rue du Tertre",
        "addressLocality": "Suresnes",
        "postalCode": "92150",
        "addressCountry": "FR"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 48.8698,
        "longitude": 2.2284
    },
    "openingHours": "Mo-Su 00:00-23:59",
    "priceRange": "€",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "50",
        "bestRating": "5"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 48.8698,
            "longitude": 2.2284
        },
        "geoRadius": "50000"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Services de réparation informatique",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Réparation PC fixe et portable",
                    "description": "Dépannage ordinateurs toutes marques, écran noir, lenteur, virus"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Suppression de virus et malwares",
                    "description": "Nettoyage complet, sécurisation, installation antivirus"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Montage d'ordinateurs sur mesure",
                    "description": "Assemblage PC bureautique et gaming, conseil composants"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Réparation d'imprimantes domestiques",
                    "description": "Dépannage imprimantes jet d'encre et laser, configuration WiFi"
                }
            }
        ]
    }
}
    </script>
</head>
<body class="bg-gray-50">
<!-- Barre de contact supérieure -->
<div class="bg-primary-dark text-white py-4 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center text-sm">
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-8 mb-3 lg:mb-0">
                <a href="mailto:contact@contact@vassilijoffroy.fr"
                   class="flex items-center hover:text-primary-green transition-colors duration-300 leading-relaxed">
                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    contact@vassilijoffroy.fr
                </a>
                <a href="https://g.co/kgs/NHHRgL3" target="_blank"
                   class="flex items-center hover:text-primary-green transition-colors duration-300 leading-relaxed">
                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    8 rue du Tertre, 92150 Suresnes
                </a>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-6">
                <span class="text-primary-green font-bold animate-pulse-slow leading-tight">🟢 OUVERT 24H/7J</span>
                <a href="tel:0760487334"
                   class="bg-primary-green hover:bg-green-400 hover:shadow-lg hover:shadow-green-500/50 px-8 py-3 rounded-full font-bold transition-all duration-300 transform hover:scale-105 animate-glow">
                    📞 07 60 48 73 34
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Navigation principale -->
<nav class="bg-white shadow-xl sticky top-0 z-50 border-b-4 border-primary-blue">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-6">
            <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity duration-300">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-pzqJNB3Ubxq9iXh41G5x2Qy6S0abQW.png"
                     alt="Vassili JOFFROY - Réparation Informatique" class="h-16 w-16 mr-4 hover:scale-110 transition-transform duration-300">
                <div>
                    <h1 class="text-2xl font-bold text-primary-dark leading-tight">Vassili JOFFROY</h1>
                    <p class="text-sm text-primary-blue font-semibold leading-relaxed">Expert Informatique • Prix
                        Imbattables</p>
                </div>
            </a>

            <!-- Menu desktop -->
            <div class="hidden lg:flex space-x-10">
                <a href="{{ route('home') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-all duration-300 border-b-2 border-transparent hover:border-primary-blue pb-2 leading-tight">
                    Accueil
                </a>
                <a href="{{ route('services') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-all duration-300 border-b-2 border-transparent hover:border-primary-blue pb-2 leading-tight">
                    Services
                </a>
                <a href="{{ route('contact') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-all duration-300 border-b-2 border-transparent hover:border-primary-blue pb-2 leading-tight">
                    Contact
                </a>
            </div>

            <!-- Menu mobile button -->
            <button id="mobile-menu-button"
                    class="lg:hidden text-gray-700 hover:text-primary-blue transition-colors duration-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- CTA Button -->
            <a href="tel:0760487334"
               class="hidden lg:block bg-gradient-to-r from-primary-blue to-primary-green hover:from-blue-600 hover:to-green-600 hover:shadow-xl hover:shadow-blue-500/30 text-white px-10 py-4 rounded-xl font-bold text-xl transition-all duration-300 transform hover:scale-105 leading-tight">
                📞 APPELER MAINTENANT
            </a>
        </div>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="lg:hidden hidden pb-6">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Accueil
                </a>
                <a href="{{ route('services') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Services
                </a>
                <a href="{{ route('contact') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Contact
                </a>
                <a href="tel:0760487334"
                   class="bg-gradient-to-r from-primary-blue to-primary-green hover:from-blue-600 hover:to-green-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 text-center mt-4 leading-tight">
                    📞 APPELER MAINTENANT
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Contenu principal -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-primary-dark text-white py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-10">
            <div class="md:col-span-2">
                <div class="flex items-center mb-8">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-pzqJNB3Ubxq9iXh41G5x2Qy6S0abQW.png"
                         alt="Vassili JOFFROY" class="h-14 w-14 mr-4 rounded-full shadow-lg">
                    <div>
                        <h3 class="text-2xl font-bold leading-tight">Vassili JOFFROY</h3>
                        <p class="text-primary-green leading-relaxed">Expert en Réparation Informatique</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-8 text-lg leading-relaxed">
                    Votre spécialiste en dépannage informatique à domicile à Suresnes, dans les Hauts-de-Seine et toute
                    l'Île-de-France.
                    <strong class="text-primary-green">Prix imbattables</strong>, intervention rapide, résultats
                    garantis.
                </p>
                <div class="bg-primary-green/20 p-6 rounded-2xl mb-8 border border-primary-green/30">
                    <p class="text-primary-green font-bold text-xl leading-tight">💰 CRÉDIT D'IMPÔT 50%</p>
                    <p class="text-sm leading-relaxed">Services à la personne - Jusqu'à 1500€ remboursés par an</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:0760487334"
                       class="bg-primary-green hover:bg-green-400 hover:shadow-lg hover:shadow-green-500/50 px-8 py-4 rounded-xl transition-all duration-300 text-center font-bold leading-tight">
                        📞 07 60 48 73 34
                    </a>
                    <a href="https://g.co/kgs/sbiL66j" target="_blank"
                       class="bg-primary-blue hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/50 px-8 py-4 rounded-xl transition-all duration-300 text-center font-bold leading-tight">
                        ⭐ Voir nos avis Google
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-xl font-bold mb-8 text-primary-green leading-tight">Nos Services</h4>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Réparation PC fixe et portable
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Suppression de virus
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Montage d'ordinateurs
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Réparation d'imprimantes
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Dépannage à domicile
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Support technique
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-xl font-bold mb-8 text-primary-green leading-tight">Contact & Avis</h4>
                <div class="space-y-6 text-gray-300">
                    <div>
                        <p class="font-semibold text-lg leading-tight">📞 07 60 48 73 34</p>
                        <p class="text-sm leading-relaxed">Disponible 24h/7j</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg leading-tight">✉️ contact@vassilijoffroy.fr</p>
                        <p class="text-sm leading-relaxed">Réponse sous 2h</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg leading-tight">📍 8 rue du Tertre</p>
                        <p class="text-sm leading-relaxed">92150 Suresnes</p>
                    </div>
                    <div class="pt-4">
                        <a href="https://www.pagesjaunes.fr/pros/60418181" target="_blank"
                           class="text-primary-green hover:text-green-400 font-semibold transition-colors duration-300 leading-relaxed">
                            📋 Voir tous nos avis Pages Jaunes
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-16 pt-10 text-center text-gray-400">
            <p class="leading-relaxed">&copy; {{ date('Y') }} Vassili JOFFROY - Réparation Informatique. Tous droits
                réservés. | Agréé Services à la Personne</p>
        </div>
    </div>
</footer>

<!-- JavaScript pour le menu mobile -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
</body>
</html>
