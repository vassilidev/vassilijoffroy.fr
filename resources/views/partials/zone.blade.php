<section id="zone" class="border-t border-line py-16 md:py-24" aria-labelledby="zone-title">
    <div class="container-site grid gap-10 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 id="zone-title" class="h-section">Zone d'intervention</h2>
            <p class="lead mt-4">
                Je me déplace à Suresnes, dans les Hauts-de-Seine et dans toute l'Île-de-France.
            </p>
            <p class="mt-6 flex gap-3 rounded-2xl bg-seine-light p-5 text-lg">
                <x-icon name="box" class="mt-0.5 text-seine"/>
                <span>Vous préférez vous déplacer ? Déposez votre matériel chez moi, à Suresnes, sur rendez-vous. Je n'ai pas de boutique pour l'instant.</span>
            </p>
        </div>

        <div class="lg:col-span-8">
            <table class="w-full text-left text-lg">
                <caption class="sr-only">Frais de déplacement par zone</caption>
                <thead class="border-b-2 border-ink text-base">
                    <tr>
                        <th scope="col" class="pb-3 pr-6 font-bold">Communes</th>
                        <th scope="col" class="pb-3 text-right font-bold">Déplacement</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-line">
                    @foreach(config('site.zones') as $zone)
                        <tr class="align-top">
                            <td class="py-5 pr-6">
                                <span class="block font-bold">{{ $zone['name'] }}</span>
                                <span class="mt-1 block text-ink-soft">{{ implode(', ', $zone['cities']) }}</span>
                            </td>
                            <td class="whitespace-nowrap py-5 text-right text-xl font-extrabold {{ $loop->first ? 'text-call-dark' : '' }}">{{ $zone['fee'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="mt-5 text-ink-soft">
                Frais inclus si l'intervention est réussie. Votre commune n'apparaît pas ? Appelez-moi, je viens sûrement aussi.
            </p>
        </div>
    </div>
</section>
