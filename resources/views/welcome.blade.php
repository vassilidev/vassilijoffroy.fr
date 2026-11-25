@extends('layouts.default')

@section('title', 'Dépannage informatique à domicile à Suresnes | Vassili Joffroy')
@section('description', "Technicien informatique à Suresnes : dépannage PC et Mac à domicile ou en dépôt, virus, données, cours pour seniors. Diagnostic offert, prix annoncé à l'avance.")

@section('content')
    @php($site = config('site'))

    <section>
        <div class="container-site grid items-center gap-14 pb-14 pt-10 md:pt-16 lg:grid-cols-12 lg:pb-20 lg:pt-20">
            <div class="lg:col-span-7">
                <x-open-status ping class="mb-6 rounded-full bg-call-light px-4 py-2 text-lg"/>
                <h1 class="h-display">Dépannage informatique à domicile à Suresnes</h1>
                <p class="lead mt-6 max-w-xl">
                    Ordinateur bloqué, message inquiétant, virus, imprimante ou <span class="whitespace-nowrap">Wi-Fi</span> qui ne répond plus ? Pas de
                    panique : je viens chez vous dans les Hauts-de-Seine et en <span class="whitespace-nowrap">Île-de-France</span>,
                    ou vous déposez votre matériel chez moi.
                </p>

                <div class="mt-10 flex flex-col items-start gap-4 sm:flex-row sm:items-center">
                    <x-call-button class="btn-lg md:min-h-[5rem] md:px-10 md:text-[2rem]"/>
                    <x-whatsapp-button class="btn-lg">Écrire sur WhatsApp</x-whatsapp-button>
                </div>
                <p class="mt-5 text-lg text-ink-soft">Je réponds vite, 7 jours sur 7, et le diagnostic est offert.</p>
            </div>

            <figure class="relative mx-auto w-full max-w-[400px] lg:col-span-5 lg:mr-0">
                <img src="{{ asset('images/vassili-joffroy.webp') }}" width="400" height="400" fetchpriority="high"
                     alt="Portrait de Vassili Joffroy, technicien et consultant informatique à Suresnes"
                     class="aspect-square w-full rounded-[2rem] object-cover">
                <figcaption class="absolute -bottom-6 left-5 right-5 rounded-2xl bg-white px-5 py-4 shadow-[0_12px_32px_-12px_rgba(16,42,67,0.35)] ring-1 ring-line sm:left-6 sm:right-auto">
                    <span class="flex text-[#E8A317]" aria-hidden="true">
                        @for($i = 0; $i < 5; $i++)<x-icon name="star" class="size-5"/>@endfor
                    </span>
                    <span class="mt-1 block"><strong>{{ str_replace('.', ',', $site['rating']['value']) }} sur 5</strong> sur plus de {{ $site['rating']['count'] }} avis Google</span>
                </figcaption>
            </figure>
        </div>

        <div class="container-site">
            <dl class="grid gap-x-8 gap-y-6 border-t border-line py-10 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <dt class="text-lg font-bold">Diagnostic offert</dt>
                    <dd class="mt-1 text-ink-soft">Je vous explique la panne avant de toucher à quoi que ce soit.</dd>
                </div>
                <div>
                    <dt class="text-lg font-bold">Prix annoncé à l'avance</dt>
                    <dd class="mt-1 text-ink-soft">Vous savez combien vous payez avant que je commence.</dd>
                </div>
                <div>
                    <dt class="text-lg font-bold">Payé si c'est réglé</dt>
                    <dd class="mt-1 text-ink-soft">Si je ne résous pas le problème, vous ne payez rien.</dd>
                </div>
                <div>
                    <dt class="text-lg font-bold">Dépôt possible</dt>
                    <dd class="mt-1 text-ink-soft">Chez moi à Suresnes, sur rendez-vous.</dd>
                </div>
            </dl>
        </div>
    </section>

    <section id="tarifs" class="border-t border-line py-16 md:py-24" aria-labelledby="tarifs-title">
        <div class="container-site grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <h2 id="tarifs-title" class="h-section">Ce que je fais, et à quel prix</h2>
                <p class="lead mt-4">À partir de 25 €, selon le temps passé. Le prix est annoncé avant l'intervention, sans surprise.</p>
                <a href="{{ route('services') }}" class="link mt-6 inline-block text-lg">Le détail de chaque service</a>
            </div>

            <ul class="divide-y divide-line border-y border-line lg:col-span-8">
                @foreach($site['services'] as $service)
                    <li>
                        <a href="{{ route('services') }}#{{ $service['anchor'] }}" class="group flex flex-col gap-1 py-5 sm:flex-row sm:items-baseline sm:gap-4">
                            <span class="min-w-0">
                                <span class="block text-xl font-bold transition-colors group-hover:text-seine">{{ $service['name'] }}</span>
                                <span class="block text-ink-soft">{{ $service['summary'] }}</span>
                            </span>
                            <span class="leader" aria-hidden="true"></span>
                            <span class="whitespace-nowrap text-xl font-extrabold {{ $service['value'] === 0 ? 'text-call-dark' : '' }}">{{ $service['price'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="bg-paper py-16 md:py-24" aria-labelledby="etapes-title">
        <div class="container-site">
            <h2 id="etapes-title" class="h-section max-w-2xl">Comment se passe une intervention</h2>
            <ol class="mt-12 grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['Vous m’appelez', 'Pas besoin de termes techniques : décrivez ce que vous voyez, je vous donne une première estimation.'],
                    ['Je viens chez vous', 'Ou vous déposez votre matériel chez moi à Suresnes. Le diagnostic est offert.'],
                    ['Je répare et j’explique', 'Sans jargon, avec des conseils simples pour éviter que la panne revienne.'],
                    ['Vous payez si c’est réglé', 'Espèces, chèque, virement ou carte, une fois la panne réglée.'],
                ] as [$step, $text])
                    <li class="border-t-2 border-ink pt-5">
                        <span class="block text-5xl font-extrabold tabular-nums text-seine" aria-hidden="true">{{ $loop->iteration }}</span>
                        <h3 class="h-card mt-4">{{ $step }}</h3>
                        <p class="mt-2 text-lg text-ink-soft">{{ $text }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="py-16 md:py-24" aria-labelledby="qui-title">
        <div class="container-site grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h2 id="qui-title" class="h-section">Qui vient chez vous</h2>
                <div class="mt-6 max-w-2xl space-y-5 text-lg md:text-xl">
                    <p>
                        Je m'appelle Vassili Joffroy. Je dépanne des ordinateurs à Suresnes et je conçois des logiciels
                        pour des entreprises exigeantes : je suis CTO et associé de TaxCut, une start-up incubée à
                        Station F, et je dirige depuis 2018 l'agence de développement TFA The Forge Agency.
                    </p>
                    <p class="text-ink-soft">
                        Pour vous, cela veut dire un diagnostic précis, une réparation propre et des explications
                        claires, que vous soyez à l'aise avec l'informatique ou que vous débutiez.
                    </p>
                </div>
                <a href="{{ route('about') }}" class="link mt-8 inline-block text-lg">Découvrir mon parcours</a>
            </div>

            <dl class="divide-y divide-line border-y border-line lg:col-span-5">
                <div class="py-5">
                    <dt class="text-ink-soft">Depuis 2024</dt>
                    <dd class="text-xl font-bold">CTO et associé de TaxCut</dd>
                </div>
                <div class="py-5">
                    <dt class="text-ink-soft">Depuis 2018</dt>
                    <dd class="text-xl font-bold">Fondateur de TFA The Forge Agency</dd>
                </div>
                <div class="py-5">
                    <dt class="text-ink-soft">Sur Malt</dt>
                    <dd class="text-xl font-bold">4,9 sur 5, 35 avis de clients professionnels</dd>
                </div>
                <div class="py-5">
                    <dt class="text-ink-soft">Ils m'ont confié leurs projets</dt>
                    <dd class="text-xl font-bold">Orange, CFDT, Autorité nationale des jeux, Atos, ClubFunding</dd>
                </div>
            </dl>
        </div>
    </section>

    @include('partials.reviews')
    @include('partials.faq')
    @include('partials.zone')
    @include('partials.cta')
@endsection
