<section class="border-t border-line py-16 md:py-24" aria-labelledby="cta-title">
    <div class="container-site flex flex-col gap-8 md:flex-row md:items-center md:justify-between">
        <div class="max-w-xl">
            <x-open-status class="mb-4 text-lg"/>
            <h2 id="cta-title" class="h-section">{{ $title ?? 'Un souci avec votre ordinateur ? Appelez-moi.' }}</h2>
            <p class="lead mt-4">
                Décrivez simplement ce qui se passe, je vous dis tout de suite ce que je peux faire et à quel prix. Mieux vaut appeler tôt, avant que la panne ne s'aggrave ou que vos fichiers soient en danger.
            </p>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row md:flex-col lg:flex-row">
            <x-call-button class="btn-lg"/>
            <x-whatsapp-button class="btn-lg"/>
        </div>
    </div>
</section>
