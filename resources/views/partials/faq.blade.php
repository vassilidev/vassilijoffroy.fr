@php
    $faq = [
        "Quel est le délai d'intervention pour un dépannage informatique à domicile ?"
            => "Le jour même dans la plupart des cas. À Suresnes et dans les communes voisines, je passe souvent dans les 2 à 3 heures. Les urgences sont traitées 7 jours sur 7, et les rendez-vous se calent selon vos disponibilités.",
        "Puis-je déposer mon ordinateur plutôt que de vous faire venir ?"
            => "Oui. Je n'ai pas de boutique, mais vous pouvez déposer votre ordinateur ou votre imprimante chez moi, à Suresnes, sur rendez-vous. Appelez-moi ou écrivez-moi sur WhatsApp pour convenir d'un créneau.",
        'Combien coûte un dépannage informatique ?'
            => 'Le diagnostic à domicile est offert. Réparations, suppression de virus, récupération de données et cours commencent à 25 €. Le prix dépend du temps passé et il est toujours annoncé avant l\'intervention. <a class="link" href="'.route('services').'">Voir tous les tarifs</a>.',
        'Combien coûte le déplacement ?'
            => "Il est offert à Suresnes et dans les communes voisines : Puteaux, Nanterre, Saint-Cloud, Rueil-Malmaison et Paris 16e. Comptez 10 € autour de Suresnes et 10 à 20 € ailleurs en Île-de-France. Les frais sont inclus si l'intervention est réussie.",
        'Quels moyens de paiement acceptez-vous ?'
            => "Espèces, chèque, virement et carte bancaire. Vous payez après l'intervention, une fois le problème réglé.",
        'Quelles garanties offrez-vous sur vos réparations ?'
            => "Si je ne règle pas le problème, vous ne payez pas. Les réparations sont garanties 3 mois, et je reste joignable gratuitement par téléphone pendant un mois après mon passage.",
        'Intervenez-vous le soir et le week-end ?'
            => "Oui. Du lundi au vendredi de 8 h à 20 h et le week-end de 9 h à 18 h, au tarif normal. En dehors de ces horaires, les urgences restent possibles avec un supplément de 20 €.",
        'Sur quel matériel intervenez-vous ?'
            => "Ordinateurs fixes et portables de toutes marques (HP, Dell, Lenovo, Asus, Acer, MSI), Mac, imprimantes et connexions Wi-Fi. Je monte aussi des PC sur mesure, du poste bureautique à la machine de jeu.",
        "Donnez-vous des cours d'informatique aux seniors ?"
            => "Oui, chez vous et à votre rythme : prise en main de l'ordinateur, internet, e-mails, appels vidéo, photos, achats en ligne en sécurité. Je vous laisse un support écrit après chaque séance. À partir de 25 € de l'heure.",
        'Pouvez-vous intervenir à distance ?'
            => "Oui, pour la plupart des problèmes logiciels : je vous guide par téléphone ou je prends la main sur votre ordinateur, avec votre accord.",
        'Qui est Vassili Joffroy ?'
            => 'Je suis technicien et consultant informatique à Suresnes. Je suis aussi développeur senior, CTO et associé de la start-up TaxCut et fondateur de l\'agence TFA The Forge Agency. <a class="link" href="'.route('about').'">Découvrir mon parcours</a>.',
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faq)->map(fn ($answer, $question) => [
            '@type' => 'Question',
            'name' => $question,
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($answer)],
        ])->values()->all(),
    ];
@endphp

@push('schema')
    <x-json-ld :data="$faqSchema"/>
@endpush

<section id="faq" class="border-t border-line py-16 md:py-24" aria-labelledby="faq-title">
    <div class="container-site grid gap-10 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 id="faq-title" class="h-section">Questions fréquentes</h2>
            <p class="lead mt-4">Une autre question ? Le plus simple est de m'appeler.</p>
            <x-call-button class="mt-6 text-lg"/>
        </div>

        <div class="faq divide-y divide-line border-y border-line lg:col-span-8">
            @foreach($faq as $question => $answer)
                <details @if($loop->first) open @endif>
                    <summary class="flex items-start justify-between gap-6 py-5 text-lg font-bold leading-snug md:text-xl">
                        <h3>{{ $question }}</h3>
                        <x-icon name="plus" class="faq-icon mt-0.5 size-7 text-seine transition-transform duration-200"/>
                    </summary>
                    <p class="max-w-2xl pb-6 text-lg text-ink-soft">{!! $answer !!}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
