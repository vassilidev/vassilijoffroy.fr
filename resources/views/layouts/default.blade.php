<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QDM8KP8ZTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-QDM8KP8ZTH');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="@yield('meta_description', 'Réparation informatique à domicile à Suresnes, Hauts-de-Seine et toute l\'Île-de-France. Intervention rapide 24h/7j, prix imbattables. Spécialiste PC, virus, imprimantes. ☎️ 07 60 48 73 34')">
    <meta name="keywords"
          content="réparation ordinateur, dépannage informatique, Suresnes, Hauts-de-Seine, Île-de-France, virus, PC portable, imprimante, montage PC, crédit impôt, formation informatique, développement web">
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
    <meta property="og:image"
          content="{{ asset('logo.png') }}">

    <link rel="preload" href="{{ asset('logo.png') }}" as="image">
    <link rel="preload" href="{{ asset('me.jpeg') }}" as="image">
    <link rel="preload" href="{{ asset('sap.png') }}" as="image">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Réparation Informatique Suresnes - Vassili JOFFROY')">
    <meta name="twitter:description"
          content="@yield('og_description', 'Dépannage informatique à domicile en Île-de-France. Prix imbattables, crédit d\'impôt 50%.')">

    <title>@yield('title', 'Réparation Informatique Suresnes - Dépannage PC à Domicile | Prix Imbattables | Vassili JOFFROY')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- JSON-LD Schema Amélioré -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "LocalBusiness",
                    "@id": "{{ url('/') }}#business",
                    "name": "Vassili JOFFROY - Réparation Informatique",
                    "alternateName": "Expert Informatique Suresnes",
                    "description": "Service de réparation et dépannage informatique à domicile à Suresnes, Hauts-de-Seine et toute l'Île-de-France. Formation seniors, montage PC, suppression virus, développement web.",
                    "url": "{{ url('/') }}",
                    "telephone": "+33760487334",
                    "email": "contact@vassilijoffroy.fr",
                    "founder": {
                        "@type": "Person",
                        "name": "Vassili JOFFROY",
                        "jobTitle": "Expert Informatique",
                        "worksFor": {
                            "@id": "{{ url('/') }}#business"
                        }
                    },
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "8 rue du Tertre",
                        "addressLocality": "Suresnes",
                        "postalCode": "92150",
                        "addressRegion": "Hauts-de-Seine",
                        "addressCountry": "FR"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 48.8698,
                        "longitude": 2.2284
                    },
                    "openingHours": "Mo-Su 00:00-23:59",
                    "priceRange": "€€",
                    "paymentAccepted": "Cash, Check, Bank Transfer, Credit Card",
                    "currenciesAccepted": "EUR",
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.9",
                        "reviewCount": "60",
                        "bestRating": "5",
                        "worstRating": "1"
                    },
                    "serviceArea": [
                        {
                            "@type": "City",
                            "name": "Suresnes"
                        },
                        {
                            "@type": "City",
                            "name": "Puteaux"
                        },
                        {
                            "@type": "City",
                            "name": "Nanterre"
                        },
                        {
                            "@type": "City",
                            "name": "Saint-Cloud"
                        },
                        {
                            "@type": "City",
                            "name": "Rueil-Malmaison"
                        },
                        {
                            "@type": "State",
                            "name": "Île-de-France"
                        }
                    ],
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Services de réparation informatique",
                        "itemListElement": [
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Réparation PC fixe et portable",
                                    "description": "Dépannage ordinateurs toutes marques, écran noir, lenteur, virus, problèmes de démarrage",
                                    "provider": {
                                        "@id": "{{ url('/') }}#business"
                                    }
                                },
                                "priceSpecification": {
                                    "@type": "PriceSpecification",
                                    "priceCurrency": "EUR",
                                    "price": "40"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Suppression de virus et malwares",
                                    "description": "Nettoyage complet, sécurisation, installation antivirus, suppression ransomware",
                                    "provider": {
                                        "@id": "{{ url('/') }}#business"
                                    }
                                },
                                "priceSpecification": {
                                    "@type": "PriceSpecification",
                                    "priceCurrency": "EUR",
                                    "price": "60"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Montage d'ordinateurs sur mesure",
                                    "description": "Assemblage PC bureautique et gaming, conseil composants, installation Windows",
                                    "provider": {
                                        "@id": "{{ url('/') }}#business"
                                    }
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Formation informatique seniors",
                                    "description": "Cours personnalisés à domicile, internet, emails, réseaux sociaux",
                                    "provider": {
                                        "@id": "{{ url('/') }}#business"
                                    }
                                },
                                "priceSpecification": {
                                    "@type": "PriceSpecification",
                                    "priceCurrency": "EUR",
                                    "price": "35"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Développement web et applications",
                                    "description": "Sites web sur mesure, applications métier, e-commerce, refonte",
                                    "provider": {
                                        "@id": "{{ url('/') }}#business"
                                    }
                                }
                            }
                        ]
                    },
                    "sameAs": [
                        "https://g.co/kgs/sbiL66j",
                        "https://www.pagesjaunes.fr/pros/60418181"
                    ]
                },
                {
                    "@type": "WebSite",
                    "@id": "{{ url('/') }}#website",
                    "url": "{{ url('/') }}",
                    "name": "Vassili JOFFROY - Réparation Informatique Suresnes",
                    "description": "Site officiel de Vassili JOFFROY, expert en réparation informatique à domicile à Suresnes et Île-de-France",
                    "publisher": {
                        "@id": "{{ url('/') }}#business"
                    },
                    "potentialAction": [
                        {
                            "@type": "SearchAction",
                            "target": {
                                "@type": "EntryPoint",
                                "urlTemplate": "{{ url('/') }}?q={search_term_string}"
                            },
                            "query-input": "required name=search_term_string"
                        }
                    ]
                }
            ]
        }
    </script>
</head>
<body class="bg-gray-50">
<div class="hidden md:block bg-primary-dark text-white py-2 md:py-4 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center text-xs md:text-sm">
            <div class="flex flex-col md:flex-row items-center space-y-1 md:space-y-0 md:space-x-8 mb-2 lg:mb-0">
                <a href="mailto:contact@vassilijoffroy.fr"
                   class="flex items-center hover:text-primary-green transition-colors duration-300 leading-relaxed">
                    <svg class="w-3 h-3 md:w-4 md:h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    <span>contact@vassilijoffroy.fr</span>
                </a>
                <a href="https://g.co/kgs/NHHRgL3" target="_blank"
                   class="flex items-center hover:text-primary-green transition-colors duration-300 leading-relaxed">
                    <svg class="w-3 h-3 md:w-4 md:h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span>8 rue du Tertre, 92150 Suresnes</span>
                </a>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
                <span class="text-primary-green font-bold animate-pulse-slow leading-tight text-xs md:text-sm">🟢 OUVERT 24H/7J</span>
                <a href="tel:0760487334"
                   class="bg-primary-green hover:bg-green-400 hover:shadow-lg hover:shadow-green-500/50 px-4 md:px-8 py-2 md:py-3 rounded-full font-bold transition-all duration-300 transform hover:scale-105 animate-glow text-xs md:text-sm">
                    📞 07 60 48 73 34
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Navigation principale -->
<nav class="bg-white shadow-xl sticky top-0 z-50 border-b-4 border-primary-blue">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4 md:py-6">
            <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity duration-300">
                <img src="{{ asset('logo.png') }}"
                     alt="Vassili JOFFROY - Réparation Informatique"
                     class="h-12 w-12 md:h-16 md:w-16 mr-3 md:mr-4 hover:scale-110 transition-transform duration-300">
                <div>
                    <h1 class="text-lg md:text-2xl font-bold text-primary-dark leading-tight">Vassili JOFFROY</h1>
                    <p class="text-xs md:text-sm text-primary-blue font-semibold leading-relaxed">Expert Informatique •
                        Prix Imbattables</p>
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
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        <div id="mobile-menu" class="lg:hidden hidden pb-4 md:pb-6">
            <div class="flex flex-col space-y-3 md:space-y-4">
                <a href="{{ route('home') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-base md:text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Accueil
                </a>
                <a href="{{ route('services') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-base md:text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Services
                </a>
                <a href="{{ route('contact') }}"
                   class="text-gray-700 hover:text-primary-blue font-semibold text-base md:text-lg transition-colors duration-300 py-2 border-b border-gray-200 leading-tight">
                    Contact
                </a>
                <a href="tel:0760487334"
                   class="bg-gradient-to-r from-primary-blue to-primary-green hover:from-blue-600 hover:to-green-600 text-white px-6 md:px-8 py-3 md:py-4 rounded-xl font-bold text-base md:text-lg transition-all duration-300 text-center mt-3 md:mt-4 leading-tight">
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
                    <img src="{{ asset('logo.png') }}"
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
                        Formation informatique
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Développement web
                    </li>
                    <li class="flex items-center leading-relaxed">
                        <span class="text-primary-green mr-3 flex-shrink-0">✓</span>
                        Support technique 24h/7j
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

        <div class="border-t border-gray-700 mt-16 pt-10">
            <div class="flex flex-col lg:flex-row justify-between items-center text-center lg:text-left text-gray-400 space-y-4 lg:space-y-0">
                <div>
                    <p class="leading-relaxed">&copy; {{ date('Y') }} Vassili JOFFROY - Réparation Informatique. Tous
                        droits réservés.</p>
                    <a class="text-sm leading-relaxed" href="https://www.pappers.fr/entreprise/joffroy-vassili-888765740" target="_blank">Agréé Services à la Personne • SIRET : 88876574000020</a><br>
                    <a href="{{ route('cgu') }}" class="text-sm leading-relaxed text-primary-green hover:text-green-400 transition-colors duration-300">CGU</a>
                </div>
                <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6">
                    <div class="text-center">
                        <p class="text-xs leading-relaxed">Site créé par</p>
                        <a href="https://siteeclair.fr/" target="_blank"
                           class=" text-yellow-400 ltransition-colors duration-300 font-semibold leading-relaxed">
                            Site Éclair
                        </a>
                        <p class="text-xs text-gray-500 leading-relaxed">Un site pro. Une seule offre. Livré en 10
                            jours.</p>
                    </div>
                </div>
            </div>
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
