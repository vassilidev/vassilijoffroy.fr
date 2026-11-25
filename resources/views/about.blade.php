@extends('layouts.default')

@section('title', 'À propos de Vassili Joffroy, technicien et développeur')
@section('description', 'Technicien informatique à Suresnes, développeur Laravel senior, CTO et associé de TaxCut, fondateur de TFA The Forge Agency. Parcours, références et compétences.')
@section('breadcrumb', 'À propos')

@php
    $links = config('site.links');

    $profileSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfilePage',
        'url' => route('about'),
        'name' => 'À propos de Vassili Joffroy',
        'inLanguage' => 'fr-FR',
        'dateModified' => '2026-11-25',
        'mainEntity' => ['@id' => url('/').'#person'],
    ];

    $missions = [
        ['Aniticar', '2026', 'Intégration de la nouvelle interface d’une plateforme qui réunit les acteurs de l’automobile.'],
        ['Koesio Asset Management', '2026', 'Fondations DDD et moteur de valorisation d’actifs, au sein d’une équipe de 10 développeurs.'],
        ['Inkriz', '2025 à 2026', 'Traitement de documents par IA (Mistral) pour une collectivité territoriale : plus de 1 200 arrêtés traités.'],
        ['ClubFunding (Next40)', '2025', 'API de l’application mobile et back-office d’investissement de la première plateforme d’investissement privé en France.'],
        ['Dispr', '2024 à 2025', 'Lead developer d’une plateforme qui centralise en temps réel les offres de leasing de 7 banques.'],
        ['Centre Imex', '2023 à 2025', 'Maintenance et échanges EDI pour un acteur historique du fret international.'],
        ['SportEasy', '2024', 'Intégration automatisée de plus de 100 000 clubs sportifs dans plusieurs pays.'],
        ['SuperFormaliste et Tribune de Lyon', '2023 à 2024', 'Lead developer de plateformes LegalTech, avec une équipe allant jusqu’à 10 personnes.'],
        ['Autorité nationale des jeux, via Atos', '2023', 'API Laravel et application Nuxt en architecture DDD, authentification SAML 2.0.'],
        ['Hilbert Investment Solutions', '2023', 'Migration vers une architecture API et intégration DocuSign, recrutement de 3 développeurs.'],
        ['CommoPrices', '2022', 'Passage à un modèle SaaS multi-tenant, jusqu’au rachat par Mintec.'],
    ];

    $skills = [
        'Développement' => 'Laravel, PHP, Vue.js, Nuxt, React, Next.js, Node.js, TypeScript, Tailwind CSS',
        'Architecture et qualité' => 'DDD, TDD, multi-tenant, API REST, Pest, PHPStan, revue de code',
        'Données et IA' => 'Scraping à grande échelle (Puppeteer, Apify), Mistral AI, OpenAI, automatisation',
        'Intégrations' => 'Stripe, DocuSign, DGFiP et EDI, SAML 2.0, RNE et INPI',
        'Infrastructure' => 'Docker, AWS, Laravel Forge, GitLab CI, GitHub Actions, Sentry',
        'Dépannage' => 'PC et Mac, réseaux et Wi-Fi, sécurité, récupération de données, montage',
    ];

    $recommendations = [
        ['Parfait, je recommande Vassili pour sa qualité et son sérieux. Très professionnel !', 'Diag Power', 'Président'],
        ['Vassili est une personne de confiance et efficace, offrant toujours un service de qualité. Il fait toujours en sorte de résoudre n’importe quel problème.', 'Morine Mallet', 'Growth marketeuse'],
        ['Sérieux, à l’écoute, sympathique, je recommande fortement Vassili pour tous vos besoins en développement backend PHP et Laravel.', 'François Behague', 'Développeur backend'],
    ];
@endphp

@push('schema')
    <x-json-ld :data="$profileSchema"/>
@endpush

@section('content')
    <section class="border-b border-line">
        <div class="container-site grid items-center gap-12 py-12 md:py-20 lg:grid-cols-12">
            <div class="lg:col-span-8">
                <h1 class="h-display">Vassili Joffroy</h1>
                <p class="mt-5 text-xl font-bold leading-snug md:text-2xl">
                    Technicien et consultant informatique à Suresnes, développeur senior, CTO et associé de TaxCut,
                    fondateur de TFA The Forge Agency.
                </p>
                <p class="lead mt-5 max-w-2xl">
                    Je travaille dans l'informatique depuis plus de huit ans, des deux côtés de l'écran : je dépanne les
                    ordinateurs des particuliers et je conçois des logiciels pour des start-up, des PME et des grands
                    comptes.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    @foreach(['LinkedIn' => $links['linkedin'], 'Malt' => $links['malt'], 'GitHub' => $links['github']] as $label => $url)
                        <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-whatsapp text-lg">{{ $label }} <x-icon name="external" class="size-5"/></a>
                    @endforeach
                </div>
            </div>
            <img src="{{ asset('images/vassili-joffroy.webp') }}" width="400" height="400" fetchpriority="high"
                 alt="Portrait de Vassili Joffroy"
                 class="mx-auto aspect-square w-full max-w-xs rounded-[2rem] object-cover lg:col-span-4 lg:mr-0">
        </div>
    </section>

    <section class="py-16 md:py-24" aria-labelledby="metiers-title">
        <div class="container-site grid gap-10 lg:grid-cols-12">
            <h2 id="metiers-title" class="h-section lg:col-span-4">Deux métiers, une même exigence</h2>
            <div class="max-w-2xl space-y-5 text-lg md:text-xl lg:col-span-8">
                <p>
                    Formé à l'informatique, à la domotique et à la réparation, j'ai appris le développement en
                    autodidacte. J'ai fondé TFA The Forge Agency en 2018 et je n'ai jamais arrêté le dépannage, qui me
                    garde au contact des personnes qui utilisent la technologie au quotidien.
                </p>
                <p>
                    Aujourd'hui, je suis CTO et associé de TaxCut, qui simplifie la déclaration d'impôts des
                    particuliers, et je mène des missions de développement en freelance, notées 4,9 sur 5 sur Malt.
                </p>
                <p class="text-ink-soft">
                    Je mets la même rigueur dans une réparation chez vous que dans une plateforme qui traite des
                    données fiscales : comprendre avant d'agir, expliquer clairement, et livrer quelque chose qui tient.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-paper py-16 md:py-24" aria-labelledby="parcours-title">
        <div class="container-site">
            <h2 id="parcours-title" class="h-section">Parcours</h2>
            <ol class="mt-12 border-t-2 border-ink">
                <li class="grid gap-3 border-b border-line py-8 md:grid-cols-12 md:gap-8">
                    <p class="font-bold tabular-nums md:col-span-3">Depuis juillet 2024</p>
                    <div class="md:col-span-9">
                        <h3 class="h-card">CTO et associé, <a href="{{ $links['taxcut'] }}" target="_blank" rel="noopener" class="link">TaxCut</a></h3>
                        <p class="mt-3 max-w-3xl text-lg text-ink-soft">
                            Déclaration d'impôts automatisée et optimisation fiscale assistée par l'IA, pour plus de
                            2 000 utilisateurs. Je porte l'architecture, le produit et la feuille de route : plateforme
                            multi-tenant, transmission EDI avec la DGFiP, traitement sécurisé de données fiscales.
                            Incubé à Station F (EDHEC Entrepreneurs), passé par Wilco et L'Escalator, lauréat French
                            Tech et Réseau Entreprendre.
                        </p>
                    </div>
                </li>
                <li class="grid gap-3 border-b border-line py-8 md:grid-cols-12 md:gap-8">
                    <p class="font-bold tabular-nums md:col-span-3">Depuis septembre 2018</p>
                    <div class="md:col-span-9">
                        <h3 class="h-card">Fondateur et CEO, <a href="{{ $links['tfa'] }}" target="_blank" rel="noopener" class="link">TFA The Forge Agency</a></h3>
                        <p class="mt-3 max-w-3xl text-lg text-ink-soft">
                            Conception, développement et maintenance d'applications web pour des start-up, des PME,
                            des cabinets et des grands comptes : Orange, l'ANJ, la CFDT, Atos, Centre Imex. SaaS, CRM,
                            outils internes, tunnels de paiement, audits, migrations et reprises de projets existants.
                        </p>
                    </div>
                </li>
                <li class="grid gap-3 border-b border-line py-8 md:grid-cols-12 md:gap-8">
                    <p class="font-bold tabular-nums md:col-span-3">Depuis octobre 2018</p>
                    <div class="md:col-span-9">
                        <h3 class="h-card">Lead developer, CFDT (F3C, Télécom, Orange)</h3>
                        <p class="mt-3 max-w-3xl text-lg text-ink-soft">
                            Huit ans de collaboration continue comme référent technique de portails métiers utilisés
                            par plus de 10 000 personnes : formations, candidatures, facturation, outils internes.
                        </p>
                    </div>
                </li>
                <li class="grid gap-3 py-8 md:grid-cols-12 md:gap-8">
                    <p class="font-bold tabular-nums md:col-span-3">Depuis 2022</p>
                    <div class="md:col-span-9">
                        <h3 class="h-card">Développeur senior et lead developer freelance</h3>
                        <ul class="mt-5 divide-y divide-line">
                            @foreach($missions as [$client, $period, $text])
                                <li class="py-4 text-lg">
                                    <span class="font-bold">{{ $client }}</span>
                                    <span class="text-ink-soft">({{ $period }})</span>
                                    <span class="block text-ink-soft">{{ $text }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="py-16 md:py-24" aria-labelledby="competences-title">
        <div class="container-site">
            <h2 id="competences-title" class="h-section">Compétences</h2>
            <dl class="mt-12 grid gap-x-10 gap-y-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($skills as $group => $list)
                    <div class="border-t-2 border-ink pt-4">
                        <dt class="text-xl font-bold">{{ $group }}</dt>
                        <dd class="mt-2 text-lg text-ink-soft">{{ $list }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    <section class="bg-paper py-16 md:py-24" aria-labelledby="reco-title">
        <div class="container-site">
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 id="reco-title" class="h-section">Ce qu'en disent mes clients professionnels</h2>
                    <p class="lead mt-4">4,9 sur 5 sur Malt, 35 avis et 50 projets réalisés.</p>
                </div>
                <a href="{{ $links['malt'] }}" target="_blank" rel="noopener" class="link inline-flex items-center gap-1 text-lg">
                    Voir mon profil Malt <x-icon name="external" class="size-5"/>
                </a>
            </div>
            <div class="mt-12 grid gap-10 md:grid-cols-3">
                @foreach($recommendations as [$quote, $author, $role])
                    <figure class="border-t-2 border-ink/10 pt-5">
                        <blockquote class="text-lg md:text-xl">« {{ $quote }} »</blockquote>
                        <figcaption class="mt-4 text-ink-soft"><strong class="text-ink">{{ $author }}</strong>, {{ $role }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24" aria-labelledby="ensemble-title">
        <div class="container-site">
            <h2 id="ensemble-title" class="h-section">Travailler ensemble</h2>
            <div class="mt-12 grid gap-6 md:grid-cols-2">
                <div class="rounded-3xl bg-call-light p-8 md:p-10">
                    <h3 class="h-card">Un ordinateur en panne ?</h3>
                    <p class="mt-3 text-lg text-ink-soft">Dépannage, réparation et cours à domicile à Suresnes et en Île-de-France, ou en dépôt chez moi.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-call-button class="text-lg"/>
                        <x-whatsapp-button class="text-lg"/>
                    </div>
                </div>
                <div class="rounded-3xl bg-ink p-8 text-white md:p-10">
                    <h3 class="h-card">Un projet de site ou d'application ?</h3>
                    <p class="mt-3 text-lg text-white/75">En mission freelance ou avec mon agence, de la conception à la mise en production.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ $links['malt'] }}" target="_blank" rel="noopener" class="btn btn-call text-lg">Me contacter sur Malt</a>
                        <a href="{{ $links['tfa'] }}" target="_blank" rel="noopener" class="btn text-lg text-white ring-2 ring-inset ring-white/30 hover:ring-white/60">Site de TFA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
