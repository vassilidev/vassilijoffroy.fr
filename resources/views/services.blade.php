@extends('layouts.default')

@section('title', 'Services de Réparation Informatique - Dépannage PC, Virus, Montage | Prix Imbattables | Vassili JOFFROY')
@section('meta_description', 'Découvrez tous mes services : réparation PC fixe/portable, suppression virus, montage ordinateurs, réparation imprimantes. Intervention à domicile en Île-de-France. Prix imbattables.')

@section('content')
    <!-- Hero Services -->
    <section class="bg-gradient-to-br from-primary-blue via-primary-green to-primary-dark text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">MES SERVICES</h1>
            <p class="text-2xl md:text-3xl max-w-4xl mx-auto leading-relaxed">
                Tous vos problèmes informatiques résolus rapidement et efficacement<br>
                <span class="text-primary-green font-bold">Prix imbattables • Crédit d'impôt 50%</span>
            </p>
        </div>
    </section>

    <!-- Problèmes courants - SEO Boost -->
    <section class="py-20 bg-red-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-red-700 mb-6 leading-tight">
                    🚨 PROBLÈMES INFORMATIQUES COURANTS
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Vous reconnaissez un de ces symptômes ? <strong>N'attendez pas !</strong>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <!-- Problèmes PC -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-red-500">
                    <h3 class="text-xl font-bold text-red-700 mb-4 leading-tight">💻 Problèmes PC</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Ordinateur lent</li>
                        <li class="leading-relaxed">• Écran bleu (BSOD)</li>
                        <li class="leading-relaxed">• PC qui ne démarre pas</li>
                        <li class="leading-relaxed">• Ordinateur qui freeze</li>
                        <li class="leading-relaxed">• Bruits anormaux</li>
                        <li class="leading-relaxed">• Surchauffe</li>
                        <li class="leading-relaxed">• Écran noir</li>
                    </ul>
                </div>

                <!-- Problèmes Virus -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-orange-500">
                    <h3 class="text-xl font-bold text-orange-700 mb-4 leading-tight">🦠 Signes de Virus</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Pop-ups publicitaires</li>
                        <li class="leading-relaxed">• Page d'accueil modifiée</li>
                        <li class="leading-relaxed">• Programmes qui se lancent seuls</li>
                        <li class="leading-relaxed">• Fichiers cryptés/bloqués</li>
                        <li class="leading-relaxed">• Antivirus désactivé</li>
                        <li class="leading-relaxed">• Connexion internet lente</li>
                        <li class="leading-relaxed">• Messages d'erreur suspects</li>
                    </ul>
                </div>

                <!-- Problèmes Imprimante -->
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

                <!-- Problèmes Réseau -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border-l-4 border-blue-500">
                    <h3 class="text-xl font-bold text-blue-700 mb-4 leading-tight">🌐 Problèmes Réseau</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="leading-relaxed">• Pas de connexion internet</li>
                        <li class="leading-relaxed">• WiFi qui se déconnecte</li>
                        <li class="leading-relaxed">• Connexion très lente</li>
                        <li class="leading-relaxed">• Impossible de se connecter</li>
                        <li class="leading-relaxed">• Partage de fichiers impossible</li>
                        <li class="leading-relaxed">• Box internet défaillante</li>
                        <li class="leading-relaxed">• Configuration réseau</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="bg-red-100 border border-red-300 p-8 rounded-2xl max-w-3xl mx-auto">
                    <h3 class="text-2xl font-bold text-red-800 mb-4 leading-tight">⚠️ ATTENTION !</h3>
                    <p class="text-lg text-red-700 leading-relaxed">
                        Plus vous attendez, plus les problèmes peuvent s'aggraver et devenir coûteux à réparer.<br>
                        <strong>Contactez-moi dès les premiers symptômes !</strong>
                    </p>
                </div>
                <a href="tel:0760487334" class="mt-8 inline-block bg-red-600 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/50 text-white px-12 py-6 rounded-2xl text-2xl font-bold transition-all duration-300">
                    🚨 INTERVENTION D'URGENCE : 07 60 48 73 34
                </a>
            </div>
        </div>
    </section>

    <!-- Services détaillés -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">

            <!-- Réparation PC -->
            <div class="mb-20">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                    <div>
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            💻 RÉPARATION D'ORDINATEURS
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed"><strong>PC Fixe et Portable - Toutes marques :</strong></p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Écran noir ou bleu</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Ordinateur lent</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Problèmes de démarrage</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Surchauffe</li>
                                </ul>
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Bruits anormaux</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Remplacement composants</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Mise à jour système</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Récupération de données</li>
                                </ul>
                            </div>
                            <p class="text-primary-green font-semibold text-xl leading-relaxed">
                                Toutes marques : HP, Dell, Asus, Acer, Lenovo, MSI, Apple...
                            </p>
                        </div>
                        <div class="mt-8">
                            <a href="tel:0760487334" class="bg-primary-blue hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/50 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                                📞 Dépannage PC : 07 60 48 73 34
                            </a>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 p-10 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold text-primary-dark mb-6 leading-tight">💰 Tarifs Transparents</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Diagnostic à domicile</span>
                                <span class="font-bold text-primary-green text-xl">GRATUIT</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Réparation simple</span>
                                <span class="font-bold text-lg">À partir de 40€</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="leading-relaxed">Nettoyage complet</span>
                                <span class="font-bold text-lg">60€</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="leading-relaxed">Remplacement composant</span>
                                <span class="font-bold text-lg">Sur devis</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-primary-green/20 rounded-xl">
                            <p class="text-primary-dark font-semibold text-center leading-relaxed">
                                💳 Crédit d'impôt 50% applicable
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suppression Virus -->
            <div class="mb-20 bg-red-50 p-10 rounded-3xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                    <div class="order-2 lg:order-1">
                        <div class="bg-red-100 p-8 rounded-2xl border border-red-300">
                            <h3 class="text-2xl font-bold text-red-800 mb-6 leading-tight">⚠️ Signes d'infection</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3 text-red-700">
                                    <li class="leading-relaxed">• Ordinateur très lent</li>
                                    <li class="leading-relaxed">• Pop-ups publicitaires</li>
                                    <li class="leading-relaxed">• Page d'accueil modifiée</li>
                                    <li class="leading-relaxed">• Fichiers cryptés/bloqués</li>
                                </ul>
                                <ul class="space-y-3 text-red-700">
                                    <li class="leading-relaxed">• Programmes qui se lancent seuls</li>
                                    <li class="leading-relaxed">• Antivirus désactivé</li>
                                    <li class="leading-relaxed">• Messages d'erreur suspects</li>
                                    <li class="leading-relaxed">• Connexion internet lente</li>
                                </ul>
                            </div>
                            <div class="mt-6 p-4 bg-red-200 rounded-xl">
                                <p class="font-bold text-red-800 text-center leading-relaxed">
                                    N'attendez pas ! Plus vous attendez, plus les dégâts peuvent être importants.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            🦠 SUPPRESSION DE VIRUS
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed"><strong>Nettoyage complet et sécurisation :</strong></p>
                            <ul class="space-y-3">
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Suppression virus, malwares, spywares</li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Nettoyage registre Windows</li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Installation antivirus performant</li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Sécurisation du système</li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Formation prévention</li>
                                <li class="flex items-center leading-relaxed"><span class="text-red-500 mr-2">✓</span> Sauvegarde des données</li>
                            </ul>
                            <p class="text-red-600 font-semibold text-xl leading-relaxed">
                                🏆 Résultat garanti ou remboursé !
                            </p>
                        </div>
                        <div class="mt-8">
                            <a href="tel:0760487334" class="bg-red-600 hover:bg-red-700 hover:shadow-lg hover:shadow-red-500/50 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                                🚨 URGENCE VIRUS : 07 60 48 73 34
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Montage PC -->
            <div class="mb-20">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                    <div>
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            🔧 MONTAGE D'ORDINATEURS
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed"><strong>PC sur mesure - Du bureautique au gaming :</strong></p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Conseil sur les composants</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Assemblage professionnel</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Installation Windows</li>
                                </ul>
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Configuration complète</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Tests de performance</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-primary-green mr-2">✓</span> Garantie montage</li>
                                </ul>
                            </div>
                            <p class="text-primary-green font-semibold text-xl leading-relaxed">
                                Du PC bureautique (400€) au PC gaming haut de gamme (3000€+) !
                            </p>
                        </div>
                        <div class="mt-8">
                            <a href="tel:0760487334" class="bg-primary-green hover:bg-green-600 hover:shadow-lg hover:shadow-green-500/50 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                                📞 Montage PC : 07 60 48 73 34
                            </a>
                        </div>
                    </div>
                    <div class="bg-primary-dark text-white p-10 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold mb-6 leading-tight">Pourquoi faire monter son PC ?</h3>
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- Réparation Imprimantes -->
            <div class="mb-20 bg-purple-50 p-10 rounded-3xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                    <div class="order-2 lg:order-1">
                        <div class="bg-purple-100 p-8 rounded-2xl border border-purple-300">
                            <h3 class="text-2xl font-bold text-purple-800 mb-6 leading-tight">🖨️ Types d'imprimantes</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <span class="text-purple-600">•</span>
                                    <span class="text-purple-700 leading-relaxed">Jet d'encre (Canon, HP, Epson...)</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="text-purple-600">•</span>
                                    <span class="text-purple-700 leading-relaxed">Laser (Brother, Samsung...)</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="text-purple-600">•</span>
                                    <span class="text-purple-700 leading-relaxed">Multifonctions (impression + scan)</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="text-purple-600">•</span>
                                    <span class="text-purple-700 leading-relaxed">Imprimantes photo</span>
                                </div>
                            </div>
                            <div class="mt-6 p-4 bg-purple-200 rounded-xl">
                                <p class="font-bold text-purple-800 text-center leading-relaxed">
                                    ⚠️ Attention : Je ne répare que les imprimantes domestiques, pas les gros modèles professionnels.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="text-4xl font-bold text-primary-dark mb-8 leading-tight">
                            🖨️ RÉPARATION IMPRIMANTES
                        </h2>
                        <div class="space-y-6 text-lg text-gray-700">
                            <p class="leading-relaxed"><strong>Problèmes courants résolus :</strong></p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Imprimante non reconnue</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Bourrage papier récurrent</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Qualité d'impression dégradée</li>
                                </ul>
                                <ul class="space-y-3">
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Problèmes de cartouches</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Installation pilotes</li>
                                    <li class="flex items-center leading-relaxed"><span class="text-purple-500 mr-2">✓</span> Configuration WiFi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="tel:0760487334" class="bg-purple-600 hover:bg-purple-700 hover:shadow-lg hover:shadow-purple-500/50 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                                📞 Dépannage imprimante : 07 60 48 73 34
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
                UN PROBLÈME INFORMATIQUE ?
            </h2>
            <p class="text-2xl mb-12 leading-relaxed">N'attendez plus, contactez-moi maintenant !</p>
            <div class="flex flex-col lg:flex-row gap-6 justify-center items-center">
                <a href="tel:0760487334" class="bg-white text-primary-green hover:bg-gray-100 hover:shadow-2xl hover:shadow-white/50 px-12 py-6 rounded-2xl text-3xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 07 60 48 73 34
                </a>
                <div class="text-xl bg-white/20 px-8 py-4 rounded-xl backdrop-blur-sm border border-white/30">
                    <span class="font-bold">🟢 OUVERT 24H/7J</span>
                </div>
            </div>
            <div class="mt-8">
                <p class="text-lg leading-relaxed">💰 <strong>Crédit d'impôt 50%</strong> • 🏆 <strong>Réparation ou seulement frais de déplacement</strong></p>
            </div>
        </div>
    </section>
@endsection
