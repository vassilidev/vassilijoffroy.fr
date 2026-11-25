<?php

return [
    'name' => 'Vassili Joffroy',
    'tagline' => 'Technicien et consultant informatique',
    'phone' => "07\u{00A0}60\u{00A0}48\u{00A0}73\u{00A0}34", // non-breaking spaces: the number never wraps
    'phone_e164' => '+33760487334',
    'whatsapp' => 'https://wa.me/33760487334?text='.rawurlencode("Bonjour Vassili, j'ai besoin d'aide avec mon matériel informatique : "),
    'email' => 'contact@vassilijoffroy.fr',
    'address' => [
        'street' => '8 rue du Tertre',
        'postal_code' => '92150',
        'city' => 'Suresnes',
        'region' => 'Hauts-de-Seine',
    ],
    'siret' => '888 765 740 00020',
    'rating' => ['value' => '4.9', 'count' => 60],
    // Single source for the home rate card, the services page and the JSON-LD offer catalog
    'services' => [
        ['name' => 'Diagnostic à domicile', 'summary' => 'Avant toute intervention, sans engagement', 'price' => 'Offert', 'value' => 0, 'anchor' => 'reparation-pc'],
        ['name' => "Réparation d'ordinateur", 'summary' => 'PC fixe ou portable, Mac, toutes marques', 'price' => 'Dès 40 €', 'value' => 40, 'anchor' => 'reparation-pc'],
        ['name' => 'Suppression de virus', 'summary' => 'Nettoyage complet, sécurisation, antivirus', 'price' => '60 €', 'value' => 60, 'anchor' => 'suppression-virus'],
        ['name' => 'Récupération de données', 'summary' => 'Disque abîmé, fichiers effacés', 'price' => '80 à 150 €', 'value' => 80, 'anchor' => 'reparation-pc'],
        ['name' => 'Formation et accompagnement', 'summary' => 'Seniors et débutants, à votre rythme', 'price' => 'Dès 35 € de l’heure', 'value' => 35, 'unit' => 'HUR', 'anchor' => 'formation'],
        ['name' => 'Montage de PC sur mesure', 'summary' => 'Bureautique, multimédia, gaming', 'price' => 'Sur devis', 'value' => null, 'anchor' => 'montage-pc'],
        ['name' => 'Sites et applications sur mesure', 'summary' => 'Avec mon agence, TFA The Forge Agency', 'price' => 'Sur devis', 'value' => null, 'anchor' => 'developpement-web'],
    ],
    'zones' => [
        ['name' => 'Suresnes et communes voisines', 'fee' => 'Offert', 'cities' => ['Suresnes', 'Puteaux', 'Nanterre', 'Saint-Cloud', 'Rueil-Malmaison', 'Paris 16e']],
        ['name' => 'Autour de Suresnes', 'fee' => '10 €', 'cities' => ['Courbevoie', 'Neuilly-sur-Seine', 'La Garenne-Colombes', 'Garches', 'Boulogne-Billancourt', 'Levallois-Perret', 'Sèvres', 'Issy-les-Moulineaux']],
        ['name' => 'Reste de l’Île-de-France', 'fee' => '10 à 20 €', 'cities' => ['Paris', 'Vaucresson', 'Marne-la-Coquette', 'Versailles', 'Le Vésinet', 'Chatou', 'Maisons-Laffitte', 'Saint-Germain-en-Laye']],
    ],
    'links' => [
        'google_reviews' => 'https://g.co/kgs/sbiL66j',
        'google_maps' => 'https://g.co/kgs/NHHRgL3',
        'pagesjaunes' => 'https://www.pagesjaunes.fr/pros/60418181',
        'linkedin' => 'https://www.linkedin.com/in/vassili-joffroy/',
        'malt' => 'https://www.malt.fr/profile/vassilijoffroy',
        'github' => 'https://github.com/vassilidev',
        'tfa' => 'https://the-forge.agency',
        'taxcut' => 'https://www.taxcut.fr',
        'pappers' => 'https://www.pappers.fr/entreprise/joffroy-vassili-888765740',
    ],
];
