@php
    $site = config('site');
    $home = url('/');
    $title = trim($__env->yieldContent('title'));
    $description = trim($__env->yieldContent('description'));
    $breadcrumb = trim($__env->yieldContent('breadcrumb'));

    $offers = collect($site['services'])->map(fn ($s) => array_filter([
        '@type' => 'Offer',
        'itemOffered' => ['@type' => 'Service', 'name' => $s['name'], 'description' => $s['summary'], 'provider' => ['@id' => $home.'#business']],
        'priceSpecification' => $s['value'] === null ? null : array_filter([
            '@type' => isset($s['unit']) ? 'UnitPriceSpecification' : 'PriceSpecification',
            'priceCurrency' => 'EUR',
            'price' => $s['value'],
            'unitCode' => $s['unit'] ?? null,
        ], fn ($v) => $v !== null),
    ], fn ($v) => $v !== null))->all();

    $cities = collect($site['zones'])->pluck('cities')->flatten()->unique()
        ->map(fn ($c) => ['@type' => 'City', 'name' => $c])->values()->all();

    $graph = [
        [
            '@type' => 'WebSite',
            '@id' => $home.'#website',
            'url' => $home,
            'name' => $site['name'],
            'description' => 'Dépannage, réparation et formation informatique à domicile à Suresnes et en Île-de-France.',
            'inLanguage' => 'fr-FR',
            'publisher' => ['@id' => $home.'#business'],
        ],
        [
            '@type' => ['LocalBusiness', 'ProfessionalService'],
            '@id' => $home.'#business',
            'name' => 'Vassili Joffroy, dépannage informatique à domicile',
            'alternateName' => 'VASSILI IT',
            'description' => "Technicien et consultant informatique à Suresnes : dépannage et réparation d'ordinateurs à domicile ou en dépôt, suppression de virus, récupération de données, montage de PC et formation des seniors, en Île-de-France.",
            'url' => $home,
            'telephone' => $site['phone_e164'],
            'email' => $site['email'],
            'image' => asset('images/vassili-joffroy.jpg'),
            'logo' => asset('logo.png'),
            'founder' => ['@id' => $home.'#person'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $site['address']['street'],
                'postalCode' => $site['address']['postal_code'],
                'addressLocality' => $site['address']['city'],
                'addressRegion' => $site['address']['region'],
                'addressCountry' => 'FR',
            ],
            'geo' => ['@type' => 'GeoCoordinates', 'latitude' => 48.8698, 'longitude' => 2.2284],
            'hasMap' => $site['links']['google_maps'],
            'areaServed' => [...$cities, ['@type' => 'AdministrativeArea', 'name' => 'Île-de-France']],
            'openingHoursSpecification' => [
                ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '08:00', 'closes' => '20:00'],
                ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Saturday', 'Sunday'], 'opens' => '09:00', 'closes' => '18:00'],
            ],
            'priceRange' => '€€',
            'paymentAccepted' => 'Espèces, chèque, virement bancaire, carte bancaire',
            'currenciesAccepted' => 'EUR',
            'knowsLanguage' => ['fr', 'en'],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => $site['rating']['value'],
                'reviewCount' => $site['rating']['count'],
                'bestRating' => '5',
                'worstRating' => '1',
            ],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Services informatiques à domicile', 'itemListElement' => $offers],
            'sameAs' => [$site['links']['google_reviews'], $site['links']['pagesjaunes']],
        ],
        [
            '@type' => 'Person',
            '@id' => $home.'#person',
            'name' => $site['name'],
            'givenName' => 'Vassili',
            'familyName' => 'Joffroy',
            'url' => route('about'),
            'image' => asset('images/vassili-joffroy.jpg'),
            'jobTitle' => $site['tagline'],
            'description' => 'Technicien et consultant informatique à Suresnes, développeur Laravel senior, CTO et associé de TaxCut, fondateur de TFA The Forge Agency.',
            'worksFor' => [
                ['@id' => $home.'#business'],
                ['@type' => 'Organization', 'name' => 'TaxCut', 'url' => $site['links']['taxcut']],
                ['@type' => 'Organization', 'name' => 'TFA The Forge Agency', 'url' => $site['links']['tfa']],
            ],
            'knowsAbout' => ['Dépannage informatique', "Réparation d'ordinateurs", 'Sécurité informatique', 'Formation informatique', 'Laravel', 'PHP', 'Vue.js', 'Node.js', 'Web scraping', 'Architecture logicielle'],
            'knowsLanguage' => ['fr', 'en'],
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Suresnes', 'addressRegion' => 'Hauts-de-Seine', 'addressCountry' => 'FR'],
            'sameAs' => [$site['links']['linkedin'], $site['links']['malt'], $site['links']['github']],
        ],
    ];

    if ($breadcrumb !== '') {
        $graph[] = [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $home],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $breadcrumb, 'item' => url()->current()],
            ],
        ];
    }

    $schema = ['@context' => 'https://schema.org', '@graph' => $graph];
    $nav = ['home' => 'Accueil', 'services' => 'Services', 'about' => 'À propos', 'contact' => 'Contact'];
    $font = '/fonts/atkinson-hyperlegible-next-latin-wght-normal.woff2';
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="{{ $site['name'] }}">
    <meta name="theme-color" content="#102A43">
    <meta name="format-detection" content="telephone=no">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $site['name'] }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Vassili Joffroy, technicien et consultant informatique à Suresnes">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon-96x96.png" type="image/png" sizes="96x96">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preload" href="{{ $font }}" as="font" type="font/woff2" crossorigin>
    <style>
        @font-face {
            font-family: "Atkinson Hyperlegible Next";
            font-style: normal;
            font-weight: 200 800;
            font-display: swap;
            src: url("{{ $font }}") format("woff2");
        }
    </style>
    @stack('preload')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-json-ld :data="$schema"/>
    @stack('schema')

    <script type="speculationrules">{"prefetch":[{"where":{"href_matches":"/*"},"eagerness":"moderate"}]}</script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-QDM8KP8ZTH');
        // Analytics is loaded after the page so it never competes with the first render
        addEventListener('load', () => setTimeout(() => {
            const s = document.createElement('script');
            s.async = true;
            s.src = 'https://www.googletagmanager.com/gtag/js?id=G-QDM8KP8ZTH';
            document.head.append(s);
        }, 1500));
    </script>
</head>
<body class="pb-32 md:pb-0">
<a href="#contenu" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:rounded-full focus:bg-ink focus:px-5 focus:py-3 focus:text-white">Aller au contenu</a>

<header class="sticky top-0 z-50 border-b border-line bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/85">
    <div class="container-site flex items-center justify-between gap-4 py-3">
        <a href="{{ route('home') }}" class="flex items-center gap-3 rounded-xl">
            <img src="{{ asset('images/logo-96.webp') }}" alt="" width="48" height="48" class="size-11 md:size-12">
            <span class="leading-tight">
                <span class="block text-lg font-extrabold tracking-tight">Vassili Joffroy</span>
                <span class="hidden whitespace-nowrap text-sm text-ink-soft sm:block">Technicien et consultant informatique</span>
            </span>
        </a>

        <nav aria-label="Navigation principale" class="hidden items-center gap-1 lg:flex">
            @foreach($nav as $route => $label)
                <a href="{{ route($route) }}" class="nav-link" @if(request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <x-call-button class="hidden text-lg md:inline-flex"/>
            <button id="menu-button" type="button" aria-expanded="false" aria-controls="mobile-menu"
                    class="grid size-12 place-items-center rounded-full ring-2 ring-inset ring-line lg:hidden">
                <x-icon name="menu"/>
                <span class="sr-only">Menu</span>
            </button>
        </div>
    </div>

    <nav id="mobile-menu" hidden aria-label="Navigation mobile" class="border-t border-line lg:hidden">
        <ul class="container-site flex flex-col py-3 text-xl">
            @foreach($nav as $route => $label)
                <li>
                    <a href="{{ route($route) }}" class="block rounded-xl px-3 py-3 font-semibold hover:bg-paper" @if(request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<main id="contenu">
    @yield('content')
</main>

<footer class="bg-ink text-white/80">
    <div class="container-site grid gap-12 py-16 md:grid-cols-12">
        <div class="md:col-span-5">
            <p class="text-2xl font-extrabold text-white">Vassili Joffroy</p>
            <p class="mt-1 text-white/70">Technicien et consultant informatique</p>
            <p class="mt-6 max-w-sm">
                Dépannage, réparation et formation informatique à domicile à Suresnes, dans les Hauts-de-Seine et en
                Île-de-France. Vous pouvez aussi déposer votre matériel chez moi, sur rendez-vous.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <x-call-button/>
                <x-whatsapp-button class="!bg-transparent !text-white !ring-white/30 hover:!ring-white/60 [&_svg]:!text-[#4ADE80]"/>
            </div>
        </div>

        <div class="md:col-span-3">
            <h2 class="font-bold text-white">Pages</h2>
            <ul class="mt-4 space-y-2">
                @foreach($nav as $route => $label)
                    <li><a href="{{ route($route) }}" class="hover:text-white hover:underline">{{ $label }}</a></li>
                @endforeach
                <li><a href="{{ route('cgu') }}" class="hover:text-white hover:underline">Mentions légales et CGU</a></li>
            </ul>
        </div>

        <div class="md:col-span-4">
            <h2 class="font-bold text-white">Coordonnées</h2>
            <ul class="mt-4 space-y-3">
                <li class="flex gap-3"><x-icon name="phone" class="size-5 translate-y-1 text-white/50"/><a href="tel:{{ $site['phone_e164'] }}" class="hover:text-white">{{ $site['phone'] }}</a></li>
                <li class="flex gap-3"><x-icon name="mail" class="size-5 translate-y-1 text-white/50"/><a href="mailto:{{ $site['email'] }}" class="hover:text-white">{{ $site['email'] }}</a></li>
                <li class="flex gap-3"><x-icon name="pin" class="size-5 translate-y-1 text-white/50"/><a href="{{ $site['links']['google_maps'] }}" target="_blank" rel="noopener" class="hover:text-white">{{ $site['address']['street'] }}, {{ $site['address']['postal_code'] }} {{ $site['address']['city'] }}</a></li>
                <li class="flex gap-3"><x-icon name="clock" class="size-5 translate-y-1 text-white/50"/><span>Lundi au vendredi, 8 h à 20 h<br>Week-end, 9 h à 18 h</span></li>
            </ul>
            <p class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm">
                <a href="{{ $site['links']['google_reviews'] }}" target="_blank" rel="noopener" class="underline decoration-white/30 underline-offset-4 hover:text-white">Avis Google</a>
                <a href="{{ $site['links']['pagesjaunes'] }}" target="_blank" rel="noopener" class="underline decoration-white/30 underline-offset-4 hover:text-white">Pages Jaunes</a>
                <a href="{{ $site['links']['linkedin'] }}" target="_blank" rel="noopener" class="underline decoration-white/30 underline-offset-4 hover:text-white">LinkedIn</a>
                <a href="{{ $site['links']['malt'] }}" target="_blank" rel="noopener" class="underline decoration-white/30 underline-offset-4 hover:text-white">Malt</a>
            </p>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="container-site flex flex-col gap-2 py-6 text-sm text-white/60 md:flex-row md:items-center md:justify-between">
            <p>
                &copy; {{ date('Y') }} Vassili Joffroy.
                <a href="{{ $site['links']['pappers'] }}" target="_blank" rel="noopener" class="hover:text-white">SIRET {{ $site['siret'] }}</a>
            </p>
            <p>Site conçu par <a href="{{ $site['links']['tfa'] }}" target="_blank" rel="noopener" class="font-semibold text-white/80 hover:text-white">TFA The Forge Agency</a></p>
        </div>
    </div>
</footer>

<div class="fixed inset-x-0 bottom-0 z-40 border-t border-line bg-white/95 px-4 pt-3 backdrop-blur md:hidden" style="padding-bottom: max(0.75rem, env(safe-area-inset-bottom))">
    <x-open-status class="mb-2 w-full justify-center text-sm"/>
    <div class="grid grid-cols-2 gap-3">
        <x-call-button class="w-full !px-3 text-lg">Appeler</x-call-button>
        <x-whatsapp-button class="w-full !px-3 text-lg"/>
    </div>
</div>
</body>
</html>
