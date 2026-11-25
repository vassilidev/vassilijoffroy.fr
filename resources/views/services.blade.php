@extends('layouts.default')

@section('title', 'Services et tarifs de dépannage informatique | Vassili Joffroy')
@section('description', "Dépannage informatique dès 25 € : réparation d'ordinateur, suppression de virus, récupération de données, cours pour seniors, montage de PC. À domicile ou en dépôt à Suresnes.")
@section('breadcrumb', 'Services')

@section('content')
    <section class="border-b border-line">
        <div class="container-site py-12 md:py-20">
            <h1 class="h-display max-w-4xl">Services informatiques à domicile</h1>
            <p class="lead mt-6 max-w-2xl">
                Réparation, sécurité, montage et cours, chez vous en Île-de-France ou en dépôt chez moi à Suresnes.
                Le prix est annoncé avant l'intervention, et vous ne payez que si le problème est réglé.
            </p>
            <nav aria-label="Services" class="mt-10 flex flex-wrap gap-3">
                @foreach([
                    'reparation-pc' => 'Réparation',
                    'suppression-virus' => 'Virus et sécurité',
                    'montage-pc' => 'Montage de PC',
                    'formation' => 'Cours et accompagnement',
                    'developpement-web' => 'Sites et applications',
                ] as $anchor => $label)
                    <a href="#{{ $anchor }}" class="rounded-full px-5 py-3 text-lg font-semibold ring-2 ring-inset ring-line transition-colors hover:bg-paper hover:ring-ink/30">{{ $label }}</a>
                @endforeach
            </nav>
        </div>
    </section>

    <section id="reparation-pc" class="py-16 md:py-24" aria-labelledby="reparation-title">
        <div class="container-site grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h2 id="reparation-title" class="h-section">Réparation d'ordinateur</h2>
                <p class="lead mt-5">
                    PC fixe ou portable et Mac, toutes marques : HP, Dell, Lenovo, Asus, Acer, MSI, Apple. Je répare
                    chez vous, ou chez moi si vous déposez votre matériel.
                </p>
                <div class="mt-10 grid gap-10 sm:grid-cols-2">
                    <div>
                        <h3 class="h-card">Les pannes courantes</h3>
                        <ul class="mt-4 space-y-2 text-lg text-ink-soft">
                            @foreach(['Ordinateur très lent', 'Écran noir ou écran bleu', 'PC qui ne démarre plus ou se fige', 'Surchauffe, ventilateur bruyant', 'Imprimante non reconnue', 'Wi-Fi ou internet qui coupe'] as $item)
                                <li class="flex gap-3"><span class="mt-3 size-1.5 shrink-0 rounded-full bg-ink-soft" aria-hidden="true"></span>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3 class="h-card">Ce que je fais</h3>
                        <ul class="mt-4 space-y-2 text-lg">
                            @foreach(['Diagnostic complet', 'Remplacement de composants', 'Réinstallation du système', 'Récupération de vos fichiers', 'Optimisation des performances', 'Installation de logiciels et pilotes'] as $item)
                                <li class="flex gap-3"><x-icon name="check" class="mt-0.5 text-call-dark"/>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5">
                <x-rate-card class="bg-paper ring-0" :rows="[
                    ['Diagnostic à domicile', 'Offert'],
                    ['Réparation logicielle', 'Dès 25 €'],
                    ['Nettoyage et optimisation', 'Dès 25 €'],
                    ['Remplacement de composant', 'Sur devis'],
                    ['Récupération de données', 'Dès 25 €'],
                ]" note="Le prix est annoncé avant l'intervention."/>
            </div>
        </div>
    </section>

    <section id="suppression-virus" class="bg-paper py-16 md:py-24" aria-labelledby="virus-title">
        <div class="container-site grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h2 id="virus-title" class="h-section">Suppression de virus et sécurité</h2>
                <p class="lead mt-5">
                    Je nettoie votre ordinateur en profondeur, je le sécurise et je vous montre les bons réflexes pour
                    ne plus vous faire piéger. Au moindre doute, appelez-moi : plus une infection dure, plus vos
                    données sont exposées.
                </p>
                <div class="mt-10 grid gap-10 sm:grid-cols-2">
                    <div>
                        <h3 class="h-card">Les signes d'infection</h3>
                        <ul class="mt-4 space-y-2 text-lg text-ink-soft">
                            @foreach(['Publicités qui s’ouvrent toutes seules', 'Page d’accueil du navigateur modifiée', 'Programmes inconnus au démarrage', 'Fichiers bloqués ou chiffrés', 'Antivirus désactivé', 'Messages d’alerte suspects'] as $item)
                                <li class="flex gap-3"><span class="mt-3 size-1.5 shrink-0 rounded-full bg-ink-soft" aria-hidden="true"></span>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3 class="h-card">Ce que je fais</h3>
                        <ul class="mt-4 space-y-2 text-lg">
                            @foreach(['Suppression des virus et logiciels espions', 'Nettoyage complet du système', 'Installation d’un antivirus fiable', 'Sauvegarde de vos données', 'Conseils pour éviter les arnaques'] as $item)
                                <li class="flex gap-3"><x-icon name="check" class="mt-0.5 text-call-dark"/>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p class="mt-10 max-w-2xl rounded-2xl border-l-4 border-seine bg-white p-5 text-lg">
                    Un message vous demande d'appeler un faux support Microsoft ou de payer une rançon ? Ne payez rien,
                    n'appelez pas le numéro affiché, et contactez-moi.
                </p>
            </div>
            <div class="lg:col-span-5">
                <x-rate-card :rows="[
                    ['Diagnostic à domicile', 'Offert'],
                    ['Suppression de virus et sécurisation', 'Dès 25 €'],
                ]" note="Si l'infection n'est pas éliminée, vous ne payez rien."/>
            </div>
        </div>
    </section>

    <section id="montage-pc" class="py-16 md:py-24" aria-labelledby="montage-title">
        <div class="container-site grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h2 id="montage-title" class="h-section">Montage de PC sur mesure</h2>
                <p class="lead mt-5">
                    Du poste bureautique à la machine de jeu, je choisis les composants avec vous selon votre usage et
                    votre budget, puis j'assemble, j'installe et je teste.
                </p>
                <h3 class="h-card mt-10">Inclus</h3>
                <ul class="mt-4 grid gap-x-8 gap-y-2 text-lg sm:grid-cols-2">
                    @foreach(['Conseil sur les composants', 'Assemblage soigné', 'Windows et pilotes installés', 'Tests de performance', 'Garantie de montage d’un an', 'Garantie constructeur sur chaque pièce'] as $item)
                        <li class="flex gap-3"><x-icon name="check" class="mt-0.5 text-call-dark"/>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="lg:col-span-5">
                <x-rate-card class="bg-paper ring-0" title="Budgets indicatifs, composants compris" :rows="[
                    ['Bureautique', '400 à 600 €'],
                    ['Multimédia', '600 à 900 €'],
                    ['Jeu vidéo', '900 à 2 500 €'],
                    ['Station de travail', 'Dès 1 500 €'],
                ]" note="Devis gratuit et détaillé avant toute commande."/>
            </div>
        </div>
    </section>

    <section id="formation" class="bg-paper py-16 md:py-24" aria-labelledby="formation-title">
        <div class="container-site">
            <h2 id="formation-title" class="h-section">Cours et accompagnement informatique</h2>
            <p class="lead mt-5 max-w-2xl">
                Chez vous, à votre rythme, avec patience. Je vous laisse un support écrit après chaque séance pour
                refaire les gestes seul.
            </p>
            <div class="mt-12 grid gap-10 md:grid-cols-3">
                @foreach([
                    ['Premiers pas', 'Pour les seniors et les débutants', 'Dès 25 €', ['Prise en main de l’ordinateur', 'Internet en sécurité', 'E-mails et pièces jointes', 'WhatsApp et Facebook', 'Appels vidéo avec vos proches', 'Photos et souvenirs', 'Achats en ligne sans risque']],
                    ['Assistance et suivi', 'Pour ne plus rester bloqué', 'Dès 25 €', ['Aide à distance', 'Problèmes qui reviennent', 'Sauvegarde et synchronisation', 'Installation de logiciels', 'Conseils de sécurité']],
                    ['Aller plus loin', 'Pour progresser', 'Dès 25 €', ['Word et Excel', 'Retouche photo', 'Montage vidéo', 'Créer un site simple', 'Initiation à la programmation', 'Domotique et objets connectés']],
                ] as [$name, $for, $price, $items])
                    <div class="flex flex-col border-t-2 border-ink pt-6">
                        <h3 class="h-card">{{ $name }}</h3>
                        <p class="text-lg text-ink-soft">{{ $for }}</p>
                        <p class="mt-4 text-3xl font-extrabold tracking-tight">{{ $price }} <span class="text-lg font-semibold text-ink-soft">de l'heure</span></p>
                        <ul class="mt-6 space-y-2 text-lg">
                            @foreach($items as $item)
                                <li class="flex gap-3"><x-icon name="check" class="mt-0.5 text-call-dark"/>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="developpement-web" class="bg-ink py-16 text-white md:py-24" aria-labelledby="web-title">
        <div class="container-site grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h2 id="web-title" class="h-section">Sites et applications sur mesure</h2>
                <p class="mt-5 text-lg text-white/80 md:text-xl">
                    Pour les entreprises, les artisans et les indépendants. Avec mon agence, TFA The Forge Agency, je
                    conçois et maintiens des sites, des logiciels métier et des plateformes en ligne depuis 2018, pour
                    des start-up, des PME et des grands comptes comme Orange, la CFDT ou l'Autorité nationale des jeux.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ config('site.links.tfa') }}" target="_blank" rel="noopener" class="btn btn-call text-lg">
                        Découvrir TFA <x-icon name="external" class="size-5"/>
                    </a>
                    <a href="{{ route('about') }}" class="btn text-lg text-white ring-2 ring-inset ring-white/30 hover:ring-white/60">Mon parcours de développeur</a>
                </div>
            </div>
            <ul class="space-y-3 text-lg lg:col-span-5">
                @foreach(['Sites vitrines et e-commerce', 'Applications métier et SaaS', 'Reprise et maintenance d’un projet existant', 'Automatisation et intégration d’API', 'Référencement et performance'] as $item)
                    <li class="flex gap-3 border-b border-white/15 pb-3"><x-icon name="check" class="mt-0.5 text-call"/>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    @include('partials.cta', ['title' => 'Besoin d’un coup de main ? Appelez-moi.'])
@endsection
