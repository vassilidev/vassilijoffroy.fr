@extends('layouts.default')

@section('title', 'Conditions Générales d\'Utilisation - CGU | Vassili JOFFROY - Réparation Informatique Suresnes')
@section('meta_description', 'Conditions Générales d\'Utilisation du site vassilijoffroy.fr. Informations légales, RGPD, cookies et mentions obligatoires pour les services de réparation informatique à domicile.')

@section('content')
    <!-- Hero CGU -->
    <section class="bg-gradient-to-br from-primary-dark via-gray-800 to-primary-blue text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">CONDITIONS GÉNÉRALES D'UTILISATION</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed">
                Site : <span class="text-primary-green font-bold">vassilijoffroy.fr</span><br>
                Dernière mise à jour : <span class="text-primary-green">24 juin 2025</span>
            </p>
        </div>
    </section>

    <!-- Contenu CGU -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">

                <!-- Navigation rapide -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg mb-12">
                    <h2 class="text-2xl font-bold text-primary-dark mb-6 leading-tight">📋 Navigation rapide</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                        <a href="#presentation" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">1. Présentation du site</a>
                        <a href="#acceptation" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">2. Acceptation des CGU</a>
                        <a href="#services" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">3. Services fournis</a>
                        <a href="#hebergement" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">4. Hébergement</a>
                        <a href="#propriete" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">5. Propriété intellectuelle</a>
                        <a href="#responsabilite" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">6. Responsabilité</a>
                        <a href="#rgpd" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">7. Données personnelles (RGPD)</a>
                        <a href="#cookies" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">8. Cookies et traceurs</a>
                        <a href="#liens" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">9. Liens hypertextes</a>
                        <a href="#droit" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">10. Droit applicable</a>
                        <a href="#references" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">11. Textes de référence</a>
                        <a href="#lexique" class="text-primary-blue hover:text-blue-600 hover:underline transition-colors">12. Lexique</a>
                    </div>
                </div>

                <!-- Section 1 -->
                <div id="presentation" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">1. 🏢 Présentation du site</h2>
                    <div class="bg-primary-blue/5 p-8 rounded-2xl border-l-4 border-primary-blue">
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            Le présent site (ci‑après le « Site ») est édité par :
                        </p>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <h3 class="text-xl font-bold text-primary-dark mb-4 leading-tight">Informations légales</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li><strong>Entreprise individuelle :</strong> Joffroy VASSILI (VASSILI IT)</li>
                                <li><strong>SIREN :</strong> 888 765 740</li>
                                <li><strong>SIRET (siège) :</strong> 888 765 740 00020</li>
                                <li><strong>Adresse du siège :</strong> 8 rue du Tertre, 92150 Suresnes, France</li>
                                <li><strong>Numéro de TVA intracommunautaire :</strong> FR32888765740</li>
                                <li><strong>Téléphone :</strong> <a href="tel:0760487334" class="text-primary-blue hover:underline">07 60 48 73 34</a></li>
                                <li><strong>E‑mail :</strong> <a href="mailto:contact@vassilijoffroy.fr" class="text-primary-blue hover:underline">contact@vassilijoffroy.fr</a></li>
                                <li><strong>Dirigeant de la publication :</strong> Joffroy VASSILI</li>
                            </ul>
                        </div>
                        <p class="text-lg text-gray-700 mt-6 leading-relaxed">
                            Le Site a pour objet de présenter les services de réparation d'ordinateurs et d'équipements périphériques proposés par l'entreprise individuelle VASSILI IT et de permettre aux utilisateurs d'entrer en contact avec le prestataire.
                        </p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div id="acceptation" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">2. ✅ Acceptation des CGU</h2>
                    <div class="bg-primary-green/5 p-8 rounded-2xl border-l-4 border-primary-green">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            L'accès et l'utilisation du Site impliquent l'acceptation sans réserve des présentes CGU par tout utilisateur. L'éditeur se réserve le droit de modifier les CGU à tout moment ; les modifications entreront en vigueur dès leur publication en ligne.
                        </p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div id="services" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">3. 🔧 Services fournis</h2>
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            Le Site fournit des informations indicatives sur :
                        </p>
                        <ul class="space-y-3 text-gray-700 ml-6">
                            <li>• les prestations de réparation et de maintenance informatique,</li>
                            <li>• les modalités de demande de devis ou de prise de rendez‑vous,</li>
                            <li>• les coordonnées et horaires de contact.</li>
                        </ul>
                        <p class="text-lg text-gray-700 mt-6 leading-relaxed">
                            Ces informations sont susceptibles d'être mises à jour ou d'évoluer sans préavis.
                        </p>
                    </div>
                </div>

                <!-- Section 4 -->
                <div id="hebergement" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">4. 🌐 Hébergement</h2>
                    <div class="bg-blue-50 p-8 rounded-2xl border-l-4 border-blue-400">
                        <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                            Le Site est hébergé par <strong>DigitalOcean, LLC</strong> – Datacenter européen (Amsterdam, Pays‑Bas).
                        </p>
                        <div class="bg-white p-6 rounded-xl">
                            <p class="text-gray-700">
                                <strong>DigitalOcean LLC</strong><br>
                                101 Avenue of the Americas, New York, NY 10013, États‑Unis<br>
                                Site web : <a href="https://www.digitalocean.com" target="_blank" class="text-primary-blue hover:underline">https://www.digitalocean.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div id="propriete" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">5. 📝 Propriété intellectuelle</h2>
                    <div class="bg-yellow-50 p-8 rounded-2xl border-l-4 border-yellow-400">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            L'ensemble des contenus du Site — textes, images, photos, logos, icônes, mises en page, bases de données, ainsi que la structure générale — est protégé par le Code de la propriété intellectuelle. Toute reproduction, représentation, modification ou adaptation totale ou partielle, sans autorisation écrite préalable de l'éditeur, est interdite.
                        </p>
                    </div>
                </div>

                <!-- Section 6 -->
                <div id="responsabilite" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">6. ⚖️ Responsabilité</h2>
                    <div class="bg-red-50 p-8 rounded-2xl border-l-4 border-red-400">
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            L'éditeur s'efforce d'assurer l'exactitude et l'actualisation des informations publiées. Toutefois, il ne saurait être tenu responsable :
                        </p>
                        <ul class="space-y-3 text-gray-700 ml-6">
                            <li>• de toute inexactitude, omission ou erreur typographique ;</li>
                            <li>• de tout dommage direct ou indirect résultant de l'accès ou de l'impossibilité d'accéder au Site, ou de l'utilisation des informations qu'il contient ;</li>
                            <li>• de la présence éventuelle de virus ou de tout autre élément nuisible sur le Site et de leurs éventuelles conséquences.</li>
                        </ul>
                    </div>
                </div>

                <!-- Section 7 - RGPD -->
                <div id="rgpd" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">7. 🔒 Gestion des données personnelles (RGPD)</h2>
                    <div class="bg-primary-green/5 p-8 rounded-2xl border-l-4 border-primary-green">
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            Aucune donnée à caractère personnel n'est collectée automatiquement lors de la simple navigation. Les informations communiquées volontairement (formulaire de contact, e‑mail, téléphone) sont traitées uniquement pour répondre aux demandes et établir des devis.
                        </p>

                        <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                            <h3 class="text-xl font-bold text-primary-dark mb-4 leading-tight">Vos droits RGPD</h3>
                            <p class="text-gray-700 mb-4 leading-relaxed">
                                Conformément au Règlement (UE) 2016/679 et à la loi n° 78‑17 du 6 janvier 1978 modifiée, vous disposez des droits suivants :
                            </p>
                            <ul class="space-y-2 text-gray-700 ml-6">
                                <li>• accès, rectification, effacement ;</li>
                                <li>• limitation ou opposition au traitement ;</li>
                                <li>• portabilité de vos données.</li>
                            </ul>
                        </div>

                        <div class="bg-primary-blue/10 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-primary-dark mb-4 leading-tight">Pour exercer ces droits :</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li><strong>Par e‑mail :</strong> <a href="mailto:contact@vassilijoffroy.fr" class="text-primary-blue hover:underline">contact@vassilijoffroy.fr</a></li>
                                <li><strong>Par courrier :</strong> Joffroy Vassili, 8 rue du Tertre, 92150 Suresnes, France</li>
                            </ul>
                            <p class="text-sm text-gray-600 mt-4 leading-relaxed">
                                Une réponse vous sera apportée sous 30 jours calendaires.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 8 -->
                <div id="cookies" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">8. 🍪 Cookies et traceurs</h2>
                    <div class="bg-purple-50 p-8 rounded-2xl border-l-4 border-purple-400">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Le Site utilise uniquement des cookies techniques indispensables à son fonctionnement et/ou des cookies de mesure d'audience anonymisés. Vous pouvez configurer votre navigateur pour bloquer ou supprimer ces cookies. Le refus d'installation d'un cookie peut entraîner l'impossibilité d'accéder à certains services.
                        </p>
                    </div>
                </div>

                <!-- Section 9 -->
                <div id="liens" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">9. 🔗 Liens hypertextes</h2>
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Des liens externes peuvent renvoyer vers d'autres sites, sur lesquels l'éditeur n'exerce aucun contrôle. L'éditeur décline donc toute responsabilité quant au contenu de ces sites tiers.
                        </p>
                    </div>
                </div>

                <!-- Section 10 -->
                <div id="droit" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">10. ⚖️ Droit applicable et juridiction compétente</h2>
                    <div class="bg-primary-dark/5 p-8 rounded-2xl border-l-4 border-primary-dark">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Les présentes CGU sont régies par le droit français. Tout litige relatif à l'interprétation ou à l'exécution des présentes relèvera de la compétence exclusive des tribunaux du ressort de la Cour d'appel de Paris.
                        </p>
                    </div>
                </div>

                <!-- Section 11 -->
                <div id="references" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">11. 📚 Textes de référence</h2>
                    <div class="bg-blue-50 p-8 rounded-2xl">
                        <ul class="space-y-3 text-gray-700">
                            <li>• Loi n° 78‑17 du 6 janvier 1978 modifiée (Informatique et Libertés)</li>
                            <li>• Règlement (UE) 2016/679 du 27 avril 2016 (RGPD)</li>
                        </ul>
                    </div>
                </div>

                <!-- Section 12 -->
                <div id="lexique" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 leading-tight">12. 📖 Lexique</h2>
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <dl class="space-y-4">
                            <div>
                                <dt class="font-bold text-primary-dark">Utilisateur :</dt>
                                <dd class="text-gray-700 ml-4">toute personne naviguant sur le Site.</dd>
                            </div>
                            <div>
                                <dt class="font-bold text-primary-dark">Donnée personnelle :</dt>
                                <dd class="text-gray-700 ml-4">toute information se rapportant à une personne physique identifiée ou identifiable.</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Footer CGU -->
                <div class="text-center py-12 border-t border-gray-200">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        © 2025 – Joffroy Vassili / VASSILI IT. Tous droits réservés.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('home') }}" class="bg-primary-blue hover:bg-blue-600 text-white px-8 py-3 rounded-xl font-bold transition-colors">
                            ← Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact rapide -->
    <section class="py-16 bg-primary-dark text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 leading-tight">Une question sur nos CGU ?</h2>
            <p class="text-xl mb-8 leading-relaxed">
                N'hésitez pas à nous contacter pour toute clarification
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:0760487334" class="bg-primary-green hover:bg-green-400 text-white px-8 py-4 rounded-xl font-bold transition-colors">
                    📞 07 60 48 73 34
                </a>
                <a href="mailto:contact@vassilijoffroy.fr" class="bg-primary-blue hover:bg-blue-600 text-white px-8 py-4 rounded-xl font-bold transition-colors">
                    ✉️ contact@vassilijoffroy.fr
                </a>
            </div>
        </div>
    </section>
@endsection
