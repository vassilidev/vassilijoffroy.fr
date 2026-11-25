@extends('layouts.default')

@section('title', 'Contacter Vassili Joffroy, dépannage informatique à Suresnes')
@section('description', 'Appelez le 07 60 48 73 34 ou écrivez sur WhatsApp pour un dépannage informatique à domicile à Suresnes et en Île-de-France, ou pour déposer votre matériel.')
@section('breadcrumb', 'Contact')

@php
    $site = config('site');
    $contactSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        'url' => route('contact'),
        'name' => 'Contacter Vassili Joffroy',
        'about' => ['@id' => url('/').'#business'],
    ];
@endphp

@push('schema')
    <x-json-ld :data="$contactSchema"/>
@endpush

@section('content')
    <section class="border-b border-line">
        <div class="container-site py-12 md:py-20">
            <h1 class="h-display">Contact</h1>
            <p class="lead mt-6 max-w-2xl">
                Le plus simple est de m'appeler. Pas besoin de savoir expliquer la panne : décrivez ce que vous voyez,
                je m'occupe du reste. Si je suis en intervention, je vous rappelle rapidement.
            </p>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <div class="rounded-3xl bg-call-light p-8 lg:col-span-2 md:p-10">
                    <x-open-status ping class="mb-4 text-lg"/>
                    <h2 class="h-card">Par téléphone</h2>
                    <p class="mt-2 text-lg text-ink-soft">7 jours sur 7, pour un dépannage, un devis ou une simple question.</p>
                    <x-call-button class="btn-lg mt-6 md:min-h-[5rem] md:px-10 md:text-[2rem]"/>
                </div>
                <div class="rounded-3xl bg-paper p-8 md:p-10">
                    <h2 class="h-card">Sur WhatsApp</h2>
                    <p class="mt-2 text-lg text-ink-soft">Décrivez le problème et joignez une photo de l'écran ou du message d'erreur.</p>
                    <x-whatsapp-button class="mt-6 text-lg">Écrire sur WhatsApp</x-whatsapp-button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24" aria-labelledby="infos-title">
        <h2 id="infos-title" class="sr-only">Coordonnées et horaires</h2>
        <div class="container-site grid gap-12 md:grid-cols-3">
            <div class="border-t-2 border-ink pt-5">
                <h3 class="h-card flex items-center gap-3"><x-icon name="pin" class="text-seine"/>Adresse</h3>
                <p class="mt-4 text-lg">
                    {{ $site['address']['street'] }}<br>{{ $site['address']['postal_code'] }} {{ $site['address']['city'] }}
                </p>
                <p class="mt-3 text-lg text-ink-soft">
                    J'interviens à domicile. Vous pouvez aussi déposer votre matériel chez moi, sur rendez-vous : je n'ai
                    pas de boutique pour l'instant.
                </p>
                <a href="{{ $site['links']['google_maps'] }}" target="_blank" rel="noopener" class="link mt-4 inline-flex items-center gap-1 text-lg">
                    Voir sur Google Maps <x-icon name="external" class="size-5"/>
                </a>
            </div>

            <div class="border-t-2 border-ink pt-5">
                <h3 class="h-card flex items-center gap-3"><x-icon name="clock" class="text-seine"/>Horaires</h3>
                <dl class="mt-4 divide-y divide-line text-lg">
                    <div class="flex justify-between gap-4 pb-3"><dt>Lundi au vendredi</dt><dd class="font-bold">8 h à 20 h</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt>Samedi et dimanche</dt><dd class="font-bold">9 h à 18 h</dd></div>
                    <div class="flex justify-between gap-4 pt-3"><dt>Urgences hors horaires</dt><dd class="font-bold">+ 20 €</dd></div>
                </dl>
            </div>

            <div class="border-t-2 border-ink pt-5">
                <h3 class="h-card flex items-center gap-3"><x-icon name="mail" class="text-seine"/>E-mail</h3>
                <p class="mt-4 text-lg">
                    <a href="mailto:{{ $site['email'] }}" class="link break-all">{{ $site['email'] }}</a>
                </p>
                <p class="mt-3 text-lg text-ink-soft">Pour un devis détaillé, un montage de PC ou un projet de site.</p>
            </div>
        </div>
    </section>

    @include('partials.zone')
@endsection
