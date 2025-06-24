@extends('layouts.default')

@section('title', 'Services de Réparation Informatique - Dépannage PC, Virus, Formation | Prix Imbattables | Vassili JOFFROY')
@section('meta_description', 'Découvrez tous mes services : réparation PC fixe/portable, suppression virus, montage ordinateurs, formation seniors, développement web. Intervention à domicile en Île-de-France. Prix imbattables, crédit d\'impôt 50%.')

@section('content')
    <!-- Hero Services -->
    <section
            class="bg-gradient-to-br from-primary-dark via-primary-blue to-primary-green text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">MES SERVICES INFORMATIQUES</h1>
            <p class="text-2xl md:text-3xl max-w-4xl mx-auto leading-relaxed mb-8">
                Dépannage PC à domicile, formation personnalisée et développement web<br>
                <span class="text-primary-green font-bold">Prix imbattables • Crédit d'impôt 50% • Intervention rapide</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:0760487334"
                   class="bg-primary-green hover:bg-green-400 hover:shadow-2xl hover:shadow-green-500/50 text-white px-12 py-6 rounded-2xl text-2xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 M'APPELER MAINTENANT
                </a>
                <div class="bg-white/20 backdrop-blur-sm px-8 py-4 rounded-xl border border-white/30">
                    <span class="font-bold text-xl">🟢 OUVERT 24H/7J</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Services -->
    <section class="py-12 bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">
                <a href="#reparation-pc"
                   class="bg-primary-blue text-white px-6 py-3 rounded-xl hover:bg-blue-600 transition-colors font-semibold">Réparation
                    PC</a>
                <a href="#suppression-virus"
                   class="bg-red-500 text-white px-6 py-3 rounded-xl hover:bg-red-600 transition-colors font-semibold">Suppression
                    Virus</a>
                <a href="#montage-pc"
                   class="bg-primary-green text-white px-6 py-3 rounded-xl hover:bg-green-600 transition-colors font-semibold">Montage
                    PC</a>
                <a href="#formation"
                   class="bg-purple-500 text-white px-6 py-3 rounded-xl hover:bg-purple-600 transition-colors font-semibold">Formation
                    & Support</a>
                <a href="#agence-web"
                   class="bg-primary-dark text-white px-6 py-3 rounded-xl hover:bg-gray-800 transition-colors font-semibold">Développement
                    Web</a>
            </div>
        </div>
    </section>

    <!-- Problèmes courants - SEO Boost -->
    <section class="py-20 bg-red-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-red-700 mb-6 leading-tight">
                    🚨 PROBLÈMES INFORMATIQUES COURANTS À SURESNES
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Vous reconnaissez un de ces symptômes ? <strong>N'attendez pas que ça empire !</strong>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-red-500">
                    <h3 class="text-xl font-bold text-red-700 mb-4 leading-tight">💻 Problèmes PC Courants</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Ordinateur très lent</li>
                        <li class="leading-relaxed">• Écran bleu de la mort (BSOD)</li>
                        <li class="leading-relaxed">• PC qui ne démarre plus</li>
                        <li class="leading-relaxed">• Ordinateur qui freeze</li>
                        <li class="leading-relaxed">• Bruits anormaux du ventilateur</li>
                        <li class="leading-relaxed">• Surchauffe excessive</li>
                        <li class="leading-relaxed">• Écran noir au démarrage</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-orange-500">
                    <h3 class="text-xl font-bold text-orange-700 mb-4 leading-tight">🦠 Signes d'Infection Virus</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Pop-ups publicitaires intempestifs</li>
                        <li class="leading-relaxed">• Page d'accueil modifiée</li>
                        <li class="leading-relaxed">• Programmes qui se lancent seuls</li>
                        <li class="leading-relaxed">• Fichiers cryptés/bloqués</li>
                        <li class="leading-relaxed">• Antivirus désactivé</li>
                        <li class="leading-relaxed">• Internet très lent</li>
                        <li class="leading-relaxed">• Messages d'erreur suspects</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-purple-500">
                    <h3 class="text-xl font-bold text-purple-700 mb-4 leading-tight">🖨️ Problèmes Imprimante</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Imprimante non reconnue</li>
                        <li class="leading-relaxed">• Bourrage papier récurrent</li>
                        <li class="leading-relaxed">• Qualité d'impression dégradée</li>
                        <li class="leading-relaxed">• Cartouches non reconnues</li>
                        <li class="leading-relaxed">• Impression WiFi impossible</li>
                        <li class="leading-relaxed">• Pilotes manquants</li>
                        <li class="leading-relaxed">• Erreurs de communication</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-blue-500">
                    <h3 class="text-xl font-bold text-blue-700 mb-4 leading-tight">👥 Difficultés Seniors</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Peur de l'ordinateur</li>
                        <li class="leading-relaxed">• Navigation internet difficile</li>
                        <li class="leading-relaxed">• Emails compliqués</li>
                        <li class="leading-relaxed">• Mots de passe oubliés</li>
                        <li class="leading-relaxed">• Téléchargements impossibles</li>
                        <li class="leading-relaxed">• Réseaux sociaux mystérieux</li>
                        <li class="leading-relaxed">• Besoin d'accompagnement</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="bg-red-100 border border-red-300 p-8 rounded-2xl max-w-3xl mx-auto">
                    <h3 class="text-2xl font-bold text-red-800 mb-4 leading-tight">⚠️ INTERVENTION D'URGENCE</h3>
                    <p class="text-lg text-red-700 leading-relaxed">
                        Plus vous attendez, plus les problèmes peuvent s'aggraver et devenir coûteux à réparer.<br>
                        <strong>Contactez-moi dès les premiers symptômes pour un diagnostic gratuit !</strong>
                    </p>
                </div>
                <a href="tel:0760487334"
                   class="mt-8 inline-block bg-red-600 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/50 text-white px-12 py-6 rounded-2xl text-2xl font-bold transition-all duration-300">
                    🚨 URGENCE : 07 60 48 73 34
                </a>
            </div>
        </div>
    </section>

    <!-- Réparation PC -->
    <section id="reparation-pc" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            💻 RÉPARATION D'ORDINATEURS À DOMICILE
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed">
                                <strong>Dépannage PC fixe et portable à Suresnes, Hauts-de-Seine et toute
                                    l'Île-de-France.</strong>
                                Intervention rapide pour tous vos problèmes informatiques, toutes marques confondues.
                            </p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Écran noir ou bleu
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Ordinateur très lent
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Problèmes de démarrage
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Surchauffe et bruits
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Pannes matérielles
                                    </li>
                                </ul>
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Remplacement composants
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Mise à jour système
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Récupération de données
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Optimisation performances
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Installation logiciels
                                    </li>
                                </ul>
                            </div>
                            <p class="text-primary-green font-semibold text-xl leading-relaxed">
                                🏆 Toutes marques : HP, Dell, Asus, Acer, Lenovo, MSI, Apple, Packard Bell...
                            </p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 p-10 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold text-primary-dark mb-6 leading-tight">💰 Tarifs Réparation PC</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Diagnostic à domicile</span>
                                <span class="font-bold text-primary-green text-xl">GRATUIT</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Réparation logicielle</span>
                                <span class="font-bold text-lg">À partir de 40€</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Nettoyage complet + optimisation</span>
                                <span class="font-bold text-lg">60€</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Remplacement composant</span>
                                <span class="font-bold text-lg">Sur devis</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="leading-relaxed">Récupération de données</span>
                                <span class="font-bold text-lg">80-150€</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-primary-green/20 rounded-xl">
                            <p class="text-primary-dark font-semibold text-center leading-relaxed">
                                💳 Crédit d'impôt 50% applicable sur tous les tarifs
                            </p>
                        </div>
                        <a href="tel:0760487334"
                           class="mt-6 block bg-primary-blue hover:bg-blue-600 hover:shadow-lg text-white px-8 py-4 rounded-xl font-bold text-center transition-all duration-300">
                            📞 Dépannage PC : 07 60 48 73 34
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Suppression Virus -->
    <section id="suppression-virus" class="py-20 bg-red-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="bg-red-100 p-8 rounded-2xl border border-red-300">
                            <h3 class="text-2xl font-bold text-red-800 mb-6 leading-tight">⚠️ Urgence Virus
                                Informatique</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3 text-red-700">
                                    <li class="leading-relaxed">• PC infecté par malware</li>
                                    <li class="leading-relaxed">• Ransomware (fichiers cryptés)</li>
                                    <li class="leading-relaxed">• Spyware (vol de données)</li>
                                    <li class="leading-relaxed">• Adware (publicités)</li>
                                </ul>
                                <ul class="space-y-3 text-red-700">
                                    <li class="leading-relaxed">• Trojan (cheval de Troie)</li>
                                    <li class="leading-relaxed">• Rootkit (infection profonde)</li>
                                    <li class="leading-relaxed">• Virus de boot</li>
                                    <li class="leading-relaxed">• Faux antivirus</li>
                                </ul>
                            </div>
                            <div class="mt-6 p-4 bg-red-200 rounded-xl">
                                <p class="font-bold text-red-800 text-center leading-relaxed">
                                    🚨 Intervention d'urgence 24h/7j pour les infections graves
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            🦠 SUPPRESSION DE VIRUS À DOMICILE
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed">
                                <strong>Nettoyage complet et sécurisation de votre ordinateur infecté.</strong>
                                Intervention rapide à Suresnes et toute l'Île-de-France pour éliminer virus, malwares et
                                logiciels malveillants.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Suppression virus, malwares, spywares
                                </li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Nettoyage registre Windows
                                </li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Installation antivirus performant
                                </li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Sécurisation complète du système
                                </li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Formation prévention infections
                                </li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span>
                                    Sauvegarde et récupération données
                                </li>
                            </ul>
                            <p class="text-red-600 font-semibold text-xl leading-relaxed">
                                🏆 Résultat garanti ou remboursement intégral !
                            </p>
                        </div>
                        <a href="tel:0760487334"
                           class="mt-8 inline-block bg-red-600 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/50 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                            🚨 URGENCE VIRUS : 07 60 48 73 34
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Montage PC -->
    <section id="montage-pc" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            🔧 MONTAGE D'ORDINATEURS SUR MESURE
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed">
                                <strong>Assemblage PC personnalisé à Suresnes et Île-de-France.</strong>
                                Du PC bureautique économique au PC gaming haut de gamme, je monte votre ordinateur selon
                                vos besoins et budget.
                            </p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Conseil choix composants
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Assemblage professionnel
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Installation Windows + pilotes
                                    </li>
                                </ul>
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Configuration complète
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Tests de performance
                                    </li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                        Garantie montage 1 an
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-primary-green/10 p-6 rounded-2xl">
                                <h4 class="font-bold text-primary-dark mb-3 leading-tight">💡 Types de PC assemblés
                                    :</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• <strong>PC Bureautique :</strong> 400-600€ (Internet, Office, emails)</li>
                                    <li>• <strong>PC Multimédia :</strong> 600-900€ (Photos, vidéos, streaming)</li>
                                    <li>• <strong>PC Gaming :</strong> 900-2500€ (Jeux récents, performances)</li>
                                    <li>• <strong>PC Workstation :</strong> 1500€+ (Montage vidéo, 3D, CAO)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-primary-dark text-white p-10 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold mb-6 leading-tight">🎯 Pourquoi faire monter son PC ?</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Meilleur rapport qualité/prix</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Composants de qualité choisis</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Évolutivité garantie</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Pas de logiciels inutiles</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Garantie constructeur sur chaque pièce</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-primary-green text-2xl">✓</span>
                                <span class="text-lg leading-relaxed">Support technique inclus</span>
                            </div>
                        </div>
                        <a href="tel:0760487334"
                           class="mt-8 block bg-primary-green hover:bg-green-600 hover:shadow-lg text-white px-8 py-4 rounded-xl font-bold text-center transition-all duration-300">
                            📞 Devis Montage PC Gratuit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formation & Support -->
    <section id="formation" class="py-20 bg-purple-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary-dark mb-6 leading-tight">
                        👨‍🏫 FORMATION & ACCOMPAGNEMENT INFORMATIQUE
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Cours personnalisés à domicile pour seniors, débutants et tous ceux qui veulent progresser
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Formation Seniors -->
                    <div class="bg-white p-8 rounded-3xl shadow-xl">
                        <div class="text-center mb-6">
                            <div class="text-6xl mb-4">👴👵</div>
                            <h3 class="text-2xl font-bold text-primary-dark leading-tight">Formation Seniors</h3>
                            <p class="text-gray-600 leading-relaxed">Accompagnement patient et bienveillant</p>
                        </div>
                        <ul class="space-y-3 text-gray-700 mb-8">
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Premiers pas sur ordinateur
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Navigation internet sécurisée
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Emails et messagerie
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Réseaux sociaux (Facebook, WhatsApp)
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Visioconférence (Skype, Zoom)
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Gestion photos et souvenirs
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span>
                                Achats en ligne sécurisés
                            </li>
                        </ul>
                        <div class="text-center">
                            <p class="text-lg font-bold text-purple-600 mb-4">À partir de 35€/h</p>
                            <a href="tel:0760487334"
                               class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-xl font-bold transition-colors">
                                Formation Senior
                            </a>
                        </div>
                    </div>

                    <!-- Support Technique -->
                    <div class="bg-white p-8 rounded-3xl shadow-xl">
                        <div class="text-center mb-6">
                            <div class="text-6xl mb-4">🛠️</div>
                            <h3 class="text-2xl font-bold text-primary-dark leading-tight">Support & Mentoring</h3>
                            <p class="text-gray-600 leading-relaxed">Accompagnement technique personnalisé</p>
                        </div>
                        <ul class="space-y-3 text-gray-700 mb-8">
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Support technique à distance
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Résolution problèmes récurrents
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Optimisation performances
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Conseils sécurité informatique
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Sauvegarde et synchronisation
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Installation et configuration logiciels
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-blue mr-2">✓</span>
                                Mentoring technique
                            </li>
                        </ul>
                        <div class="text-center">
                            <p class="text-lg font-bold text-primary-blue mb-4">À partir de 40€/h</p>
                            <a href="tel:0760487334"
                               class="bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl font-bold transition-colors">
                                Support Technique
                            </a>
                        </div>
                    </div>

                    <!-- Formation Avancée -->
                    <div class="bg-white p-8 rounded-3xl shadow-xl">
                        <div class="text-center mb-6">
                            <div class="text-6xl mb-4">🎓</div>
                            <h3 class="text-2xl font-bold text-primary-dark leading-tight">Formation Avancée</h3>
                            <p class="text-gray-600 leading-relaxed">Pour aller plus loin dans l'informatique</p>
                        </div>
                        <ul class="space-y-3 text-gray-700 mb-8">
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Bureautique avancée (Excel, Word)
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Retouche photo (Photoshop, GIMP)
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Montage vidéo débutant
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Création site web simple
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Programmation initiation
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Domotique et objets connectés
                            </li>
                            <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span>
                                Maintenance préventive PC
                            </li>
                        </ul>
                        <div class="text-center">
                            <p class="text-lg font-bold text-primary-green mb-4">À partir de 45€/h</p>
                            <a href="tel:0760487334"
                               class="bg-primary-green hover:bg-green-600 text-white px-6 py-3 rounded-xl font-bold transition-colors">
                                Formation Avancée
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-3xl mx-auto">
                        <h3 class="text-2xl font-bold text-primary-dark mb-4 leading-tight">🎯 Pédagogie Adaptée</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Chaque formation est personnalisée selon votre niveau, vos besoins et votre rythme
                            d'apprentissage.
                            Patience, bienveillance et explications claires garanties !
                        </p>
                        <div class="grid md:grid-cols-3 gap-4 text-center">
                            <div class="bg-purple-50 p-4 rounded-xl">
                                <div class="text-2xl mb-2">🕐</div>
                                <p class="font-semibold">À votre rythme</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-xl">
                                <div class="text-2xl mb-2">🏠</div>
                                <p class="font-semibold">À domicile</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-xl">
                                <div class="text-2xl mb-2">📋</div>
                                <p class="font-semibold">Support écrit fourni</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agence Web -->
    <section id="agence-web" class="py-20 bg-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        🌐 DÉVELOPPEMENT WEB & APPLICATIONS
                    </h2>
                    <p class="text-xl leading-relaxed">
                        En parallèle du dépannage, je dirige une agence de développement d'applications métier et sites
                        web sur mesure
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-8 leading-tight">Mon Agence de Développement</h3>
                        <div class="space-y-6 text-lg leading-relaxed">
                            <p>
                                Fort de mon expérience en informatique et de ma formation technique, j'ai créé une
                                <strong class="text-primary-green">agence spécialisée dans le développement
                                    d'applications métier</strong>
                                et de sites web sur mesure.
                            </p>
                            <p>
                                Cette double compétence me permet d'avoir une vision complète des enjeux informatiques,
                                de la réparation hardware jusqu'au développement logiciel avancé.
                            </p>
                            <p>
                                Que vous soyez une PME, un artisan ou un particulier avec un projet web,
                                je peux vous accompagner de A à Z dans votre transformation digitale.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm p-10 rounded-3xl border border-white/20">
                        <h4 class="text-2xl font-bold mb-8 leading-tight">🚀 Services Web Proposés</h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <ul class="space-y-3">
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Sites web vitrine
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> E-commerce
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Applications métier
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Logiciels sur mesure
                                </li>
                            </ul>
                            <ul class="space-y-3">
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Refonte de sites
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Optimisation SEO
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Maintenance web
                                </li>
                                <li class="flex items-center leading-relaxed">
                                    <span class="text-primary-green mr-2">✓</span> Formation digitale
                                </li>
                            </ul>
                        </div>

                        <div class="mt-8 p-6 bg-primary-green/20 rounded-2xl border border-primary-green/30">
                            <h5 class="font-bold text-xl mb-3 leading-tight">💡 Avantage Unique</h5>
                            <p class="leading-relaxed">
                                Contrairement aux agences classiques, je comprends parfaitement vos contraintes
                                techniques
                                et peux assurer le support informatique complet de votre projet.
                            </p>
                        </div>

                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <a href="https://the-forge.agency" target="_blank"
                               class="bg-primary-green hover:bg-green-600 text-white px-6 py-3 rounded-xl font-bold text-center transition-colors">
                                Site de l'agence
                            </a>
                            <a href="mailto:contact@vassilijoffroy.fr"
                               class="bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl font-bold text-center transition-colors">
                                ✉️ Devis Gratuit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="bg-gradient-to-r from-primary-green to-primary-blue text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">
                BESOIN D'UN SERVICE INFORMATIQUE ?
            </h2>
            <p class="text-2xl mb-12 leading-relaxed">
                Dépannage, formation, développement... Je suis votre expert informatique complet !
            </p>
            <div class="flex flex-col lg:flex-row gap-6 justify-center items-center">
                <a href="tel:0760487334"
                   class="bg-white text-primary-green hover:bg-gray-100 hover:shadow-2xl hover:shadow-white/50 px-12 py-6 rounded-2xl text-3xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 07 60 48 73 34
                </a>
                <div class="text-xl bg-white/20 px-8 py-4 rounded-xl backdrop-blur-sm border border-white/30">
                    <span class="font-bold">🟢 OUVERT 24H/7J</span>
                </div>
            </div>
            <div class="mt-8">
                <p class="text-lg leading-relaxed">
                    💰 <strong>Crédit d'impôt 50%</strong> • 🏆 <strong>Satisfaction garantie</strong> • ⚡ <strong>Intervention
                        rapide</strong>
                </p>
            </div>
        </div>
    </section>
@endsection
