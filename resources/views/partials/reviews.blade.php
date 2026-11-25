@php
    $featured = ['name' => 'Romain G.', 'city' => 'Saint-Cloud', 'text' => 'Intervention réalisée en urgence un dimanche, problème résolu dans la journée en un temps record. Très pro et pédagogue.'];
    $reviews = [
        ['name' => 'Stéphanie A.', 'city' => 'Suresnes', 'text' => 'Très compétent et surtout très honnête, il aime et connaît son métier. Et le tout avec des prix très corrects.'],
        ['name' => 'Arnaud C.', 'city' => 'Saint-Cloud', 'text' => 'Excellent professionnel, très réactif et efficace, a réparé un ordinateur et installé Windows 10 en un temps record.'],
        ['name' => 'Laura G.', 'city' => 'Suresnes', 'text' => "Mon ordinateur ne s'allumait plus, sûrement un problème de batterie. À distance, il m'a expliqué comment la retirer et faire les tests. Incroyable."],
        ['name' => 'Doréa M.', 'city' => 'Rueil-Malmaison', 'text' => 'Une personne incroyable et très professionnelle, foncez ! Merci encore.'],
    ];
    $site = config('site');
@endphp

<section class="bg-paper py-16 md:py-24" aria-labelledby="avis-title">
    <div class="container-site">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div>
                <h2 id="avis-title" class="h-section">Ce qu'en disent mes clients</h2>
                <p class="mt-4 flex flex-wrap items-center gap-x-3 gap-y-1 text-lg">
                    <span class="flex text-[#E8A317]" aria-hidden="true">
                        @for($i = 0; $i < 5; $i++)<x-icon name="star" class="size-6"/>@endfor
                    </span>
                    <span><strong>{{ str_replace('.', ',', $site['rating']['value']) }} sur 5</strong> sur plus de {{ $site['rating']['count'] }} avis Google</span>
                </p>
            </div>
            <a href="{{ $site['links']['google_reviews'] }}" target="_blank" rel="noopener" class="link inline-flex items-center gap-1 text-lg">
                Lire tous les avis <x-icon name="external" class="size-5"/>
            </a>
        </div>

        <div class="mt-12 grid gap-10 lg:grid-cols-12 lg:gap-12">
            <figure class="lg:col-span-5">
                <blockquote class="text-2xl font-bold leading-snug tracking-tight md:text-[2rem] md:leading-tight">
                    « {{ $featured['text'] }} »
                </blockquote>
                <figcaption class="mt-6 text-lg text-ink-soft"><strong class="text-ink">{{ $featured['name'] }}</strong>, {{ $featured['city'] }}</figcaption>
            </figure>

            <div class="grid gap-8 sm:grid-cols-2 lg:col-span-7">
                @foreach($reviews as $review)
                    <figure class="border-t-2 border-ink/10 pt-5">
                        <blockquote class="text-lg">« {{ $review['text'] }} »</blockquote>
                        <figcaption class="mt-3 text-ink-soft"><strong class="text-ink">{{ $review['name'] }}</strong>, {{ $review['city'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</section>
