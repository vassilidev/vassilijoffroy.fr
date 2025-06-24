@extends('layouts.default')

@section('title', 'Réparation Informatique Suresnes - Dépannage PC à Domicile | Prix Imbattables | Vassili JOFFROY')
@section('meta_description', 'Réparation informatique à domicile à Suresnes, Hauts-de-Seine et toute l\'Île-de-France. Intervention rapide 24h/7j, prix imbattables, crédit d\'impôt 50%. ☎️ 07 60 48 73 34')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary-dark via-primary-blue to-primary-green text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                PROBLÈMES INFORMATIQUE ?<br>
                <span class="text-primary-green animate-pulse">J'ARRIVE !</span>
            </h1>
            <p class="text-2xl md:text-3xl mb-4 max-w-4xl mx-auto font-light leading-relaxed">
                Réparation informatique à domicile à <strong>Suresnes</strong>, les <strong>Hauts-de-Seine</strong><br>
                et toute l'<strong>Île-de-France</strong> !
            </p>
            <p class="text-xl md:text-2xl mb-12 text-primary-green font-bold">
                Rapide • Professionnel • Prix imbattables
            </p>

            <div class="flex flex-col lg:flex-row gap-8 justify-center items-center mb-12">
                <a href="tel:0760487334" class="bg-primary-green hover:bg-green-400 hover:shadow-2xl hover:shadow-green-500/50 text-white px-16 py-8 rounded-2xl text-4xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 M'APPELER MAINTENANT
                </a>
                <div class="flex flex-col items-center space-y-4">
                    <div class="bg-green-500/20 backdrop-blur-sm px-8 py-4 rounded-2xl border-2 border-green-400 shadow-lg">
                        <span class="font-bold text-2xl text-green-300">🟢 OUVERT 24H/7J</span>
                    </div>
                    <div class="bg-yellow-500/20 backdrop-blur-sm px-6 py-3 rounded-xl border border-yellow-400">
                        <span class="font-bold text-lg text-yellow-200">⭐ 4.9/5 sur +60 avis</span>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="bg-white/15 backdrop-blur-sm p-8 rounded-2xl border border-white/20 hover:bg-white/25 transition-all duration-300">
                    <div class="text-5xl mb-4">⚡</div>
                    <h3 class="font-bold text-xl mb-3 leading-tight">INTERVENTION RAPIDE</h3>
                    <p class="text-lg leading-relaxed">Dépannage le jour même</p>
                </div>
                <div class="bg-white/15 backdrop-blur-sm p-8 rounded-2xl border border-white/20 hover:bg-white/25 transition-all duration-300">
                    <div class="text-5xl mb-4">💰</div>
                    <h3 class="font-bold text-xl mb-3 leading-tight">PRIX IMBATTABLES</h3>
                    <p class="text-lg leading-relaxed">Les meilleurs tarifs d'Île-de-France</p>
                </div>
                <div class="bg-white/15 backdrop-blur-sm p-8 rounded-2xl border border-white/20 hover:bg-white/25 transition-all duration-300">
                    <div class="text-5xl mb-4">🏆</div>
                    <h3 class="font-bold text-xl mb-3 leading-tight">RÉPARATION GARANTIE</h3>
                    <p class="text-lg leading-relaxed">Ou remboursement intégral</p>
                </div>
                <div class="bg-white/15 backdrop-blur-sm p-8 rounded-2xl border border-white/20 hover:bg-white/25 transition-all duration-300">
                    <div class="text-5xl mb-4">💳</div>
                    <h3 class="font-bold text-xl mb-3 leading-tight">CRÉDIT D'IMPÔT 50%</h3>
                    <p class="text-lg leading-relaxed">Services à la personne</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-primary-dark mb-6 leading-tight">
                    MES SERVICES DE RÉPARATION
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Spécialiste en dépannage informatique, j'interviens à votre domicile pour tous vos problèmes d'ordinateur.<br>
                    <span class="text-primary-blue font-semibold">Réparation, formation, accompagnement personnalisé !</span>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="group bg-gray-50 hover:bg-primary-blue hover:text-white p-8 rounded-2xl text-center transition-all duration-200 transform hover:scale-102 shadow-lg hover:shadow-xl flex flex-col h-full">
                    <div class="text-6xl mb-6 transition-transform duration-200 group-hover:scale-110">💻</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">Réparation PC</h3>
                    <p class="mb-6 text-lg leading-relaxed flex-grow">Fixe et portable, toutes marques</p>
                    <a href="tel:0760487334" class="bg-primary-blue group-hover:bg-white group-hover:text-primary-blue hover:shadow-lg text-white px-6 py-3 rounded-xl transition-all duration-200 font-bold inline-block mt-auto">
                        M'appeler
                    </a>
                </div>

                <div class="group bg-gray-50 hover:bg-red-500 hover:text-white p-8 rounded-2xl text-center transition-all duration-200 transform hover:scale-102 shadow-lg hover:shadow-xl flex flex-col h-full">
                    <div class="text-6xl mb-6 transition-transform duration-200 group-hover:scale-110">🦠</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">Suppression Virus</h3>
                    <p class="mb-6 text-lg leading-relaxed flex-grow">Nettoyage complet et sécurisation</p>
                    <a href="tel:0760487334" class="bg-red-500 group-hover:bg-white group-hover:text-red-500 hover:shadow-lg text-white px-6 py-3 rounded-xl transition-all duration-200 font-bold inline-block mt-auto">
                        Urgence virus
                    </a>
                </div>

                <div class="group bg-gray-50 hover:bg-primary-green hover:text-white p-8 rounded-2xl text-center transition-all duration-200 transform hover:scale-102 shadow-lg hover:shadow-xl flex flex-col h-full">
                    <div class="text-6xl mb-6 transition-transform duration-200 group-hover:scale-110">🔧</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">Montage PC</h3>
                    <p class="mb-6 text-lg leading-relaxed flex-grow">Assemblage sur mesure</p>
                    <a href="tel:0760487334" class="bg-primary-green group-hover:bg-white group-hover:text-primary-green hover:shadow-lg text-white px-6 py-3 rounded-xl transition-all duration-200 font-bold inline-block mt-auto">
                        Devis gratuit
                    </a>
                </div>

                <div class="group bg-gray-50 hover:bg-purple-500 hover:text-white p-8 rounded-2xl text-center transition-all duration-200 transform hover:scale-102 shadow-lg hover:shadow-xl flex flex-col h-full">
                    <div class="text-6xl mb-6 transition-transform duration-200 group-hover:scale-110">👨‍🏫</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">Formation & Support</h3>
                    <p class="mb-6 text-lg leading-relaxed flex-grow">Cours personnalisés seniors & débutants</p>
                    <a href="tel:0760487334" class="bg-purple-500 group-hover:bg-white group-hover:text-purple-500 hover:shadow-lg text-white px-6 py-3 rounded-xl transition-all duration-200 font-bold inline-block mt-auto">
                        Accompagnement
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Crédit d'impôt Section (simplifiée) -->
    <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto text-center">
                <div class="bg-white p-12 rounded-3xl shadow-2xl border-4 border-primary-green">
                    <div class="flex items-center justify-center mb-8">
                        <img src="https://i0.wp.com/blog.abby.fr/wp-content/uploads/2024/03/sap-ombre-transparent.png?resize=800%2C589&ssl=1" alt="Partenaire Services à la Personne" class="h-20 mr-6">
                        <div class="text-left">
                            <h2 class="text-4xl font-bold text-primary-dark leading-tight">PARTENAIRE SAP</h2>
                            <p class="text-xl text-gray-600 leading-relaxed">Services à la Personne Agréé</p>
                        </div>
                    </div>

                    <div class="bg-primary-green text-white p-8 rounded-2xl mb-8">
                        <h3 class="text-3xl font-bold mb-4 leading-tight">💰 CRÉDIT D'IMPÔT 50%</h3>
                        <p class="text-xl leading-relaxed">L'État vous rembourse la moitié de vos frais !</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6 text-lg">
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <div class="text-3xl mb-3">💳</div>
                            <p class="font-bold text-primary-dark mb-2 leading-tight">Vous payez 100€</p>
                            <p class="text-gray-600 leading-relaxed">Pour votre intervention</p>
                        </div>
                        <div class="bg-primary-blue text-white p-6 rounded-xl">
                            <div class="text-3xl mb-3">🏛️</div>
                            <p class="font-bold mb-2 leading-tight">L'État rembourse 50€</p>
                            <p class="leading-relaxed">Crédit d'impôt automatique</p>
                        </div>
                        <div class="bg-primary-green text-white p-6 rounded-xl">
                            <div class="text-3xl mb-3">✅</div>
                            <p class="font-bold mb-2 leading-tight">Coût réel : 50€</p>
                            <p class="leading-relaxed">Jusqu'à 1500€/an remboursés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages authentiques -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-primary-dark mb-6 leading-tight">
                    ⭐ ILS ME FONT CONFIANCE
                </h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">Découvrez les avis authentiques de mes clients satisfaits</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://g.co/kgs/sbiL66j" target="_blank" class="bg-red-500 hover:bg-red-600 hover:shadow-lg hover:shadow-red-500/50 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300">
                        📱 Voir avis Google
                    </a>
                    <a href="https://www.pagesjaunes.fr/pros/60418181" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg hover:shadow-yellow-500/50 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300">
                        📋 Voir avis Pages Jaunes
                    </a>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-blue text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            LG
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Laura G.</div>
                            <div class="text-gray-500 text-sm">Suresnes</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Mon ordinateur ne s'allumait plus, sûrement un problème de batterie. Et à distance il m'a expliqué comment la retirer et faire les tests! Incroyable."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-green text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            ND
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Nathalie D.</div>
                            <div class="text-gray-500 text-sm">Rueil-Malmaison</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Ce jeune homme calme vous prodigue conseils avec grand professionnalisme et efficacité. Je recommande vivement ses services."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            RG
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Romain G.</div>
                            <div class="text-gray-500 text-sm">Saint-Cloud</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Intervention réalisée en urgence un dimanche, problème résolu dans la journée en un temps record. Très pro et pédagogue."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            SA
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Stephanie A.</div>
                            <div class="text-gray-500 text-sm">Suresnes</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Très compétent et surtout très honnête...il aime et connait son métier. Et le tout avec des prix très corrects."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-yellow-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            DM
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Doréa M.</div>
                            <div class="text-gray-500 text-sm">Rueil-Malmaison</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Une personne incroyable et très professionnelle, foncez ! merci encore 👍✨"</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-indigo-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            AC
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Arnaud C.</div>
                            <div class="text-gray-500 text-sm">Saint-Cloud</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Excellent professionnel, très réactif et efficace, a réparé un ordinateur et installé windows 10 en un temps record."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Zone d'intervention -->
    <section class="py-20 bg-primary-dark text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">
                🗺️ ZONE D'INTERVENTION
            </h2>
            <p class="text-2xl mb-12 leading-relaxed">Je me déplace dans toute l'Île-de-France</p>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <h3 class="text-2xl font-bold mb-6 text-primary-green leading-tight">Suresnes & Limitrophes</h3>
                    <div class="space-y-2 text-lg">
                        <div className="leading-relaxed">• Suresnes</div>
                        <div className="leading-relaxed">• Puteaux</div>
                        <div className="leading-relaxed">• Nanterre</div>
                        <div className="leading-relaxed">• Saint-Cloud</div>
                        <div className="leading-relaxed">• Rueil-Malmaison</div>
                        <div className="leading-relaxed">• Paris 16ème (Bois de Boulogne)</div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <h3 class="text-2xl font-bold mb-6 text-primary-green leading-tight">Proche de Suresnes</h3>
                    <div class="space-y-2 text-lg">
                        <div className="leading-relaxed">• Courbevoie</div>
                        <div className="leading-relaxed">• Neuilly-sur-Seine</div>
                        <div className="leading-relaxed">• La Garenne-Colombes</div>
                        <div className="leading-relaxed">• Garches</div>
                        <div className="leading-relaxed">• Boulogne-Billancourt</div>
                        <div className="leading-relaxed">• Levallois-Perret</div>
                        <div className="leading-relaxed">• Sèvres</div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <h3 class="text-2xl font-bold mb-6 text-primary-green leading-tight">Secteurs Privilégiés</h3>
                    <div class="space-y-2 text-lg">
                        <div className="leading-relaxed">• Vaucresson</div>
                        <div className="leading-relaxed">• Marne-la-Coquette</div>
                        <div className="leading-relaxed">• Versailles</div>
                        <div className="leading-relaxed">• Le Vésinet</div>
                        <div className="leading-relaxed">• Chatou</div>
                        <div className="leading-relaxed">• Maisons-Laffitte</div>
                        <div className="leading-relaxed">• + Toute l'Île-de-France</div>
                    </div>
                </div>
            </div>

            <div class="bg-primary-green/20 p-8 rounded-2xl max-w-4xl mx-auto mb-12 border border-primary-green/30">
                <h3 class="text-2xl font-bold mb-6 leading-tight">💰 Frais de déplacement</h3>
                <div class="grid md:grid-cols-3 gap-6 text-lg">
                    <div>
                        <div class="font-bold text-primary-green mb-2 leading-tight">Suresnes & Limitrophes</div>
                        <div class="text-2xl font-bold">GRATUIT</div>
                    </div>
                    <div>
                        <div class="font-bold text-primary-green mb-2 leading-tight">Proche de Suresnes</div>
                        <div class="text-2xl font-bold">10€</div>
                    </div>
                    <div>
                        <div class="font-bold text-primary-green mb-2 leading-tight">Reste Île-de-France</div>
                        <div class="text-2xl font-bold">10-20€ max</div>
                    </div>
                </div>
                <p class="text-sm mt-6 text-gray-300 leading-relaxed">Frais inclus si intervention réussie</p>
            </div>

            <div>
                <a href="tel:0760487334" class="bg-primary-green hover:bg-green-400 hover:shadow-2xl hover:shadow-green-500/50 text-white px-12 py-6 rounded-2xl text-3xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 M'APPELER MAINTENANT
                </a>
            </div>
        </div>
    </section>
@endsection
