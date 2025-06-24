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

    <!-- À Propos Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary-dark mb-6 leading-tight">
                        👨‍💻 À PROPOS
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">Votre expert informatique de confiance</p>
                </div>

                <div class="grid lg:grid-cols-3 gap-12 items-center">
                    <div class="lg:col-span-1 text-center">
                        <div class="relative inline-block mb-8">
                            <img src="{{ asset('me.jpeg') }}" alt="Vassili JOFFROY - Expert Informatique" class="w-64 h-64 rounded-2xl shadow-2xl mx-auto object-cover">
                        </div>
                        <h3 class="text-2xl font-bold text-primary-dark mb-2 leading-tight">Vassili JOFFROY</h3>
                        <p class="text-lg text-primary-blue font-semibold">Expert Informatique • 23 ans</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="bg-white p-10 rounded-3xl shadow-xl">
                            <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                                <p>
                                    Depuis <strong class="text-primary-blue">plus de 8 ans</strong>, je suis passionné par l'informatique et j'accompagne particuliers et professionnels dans la résolution de leurs problèmes techniques.
                                </p>
                                <p>
                                    J'interviens à domicile et à distance pour vous offrir des solutions rapides et efficaces, que ce soit pour une réparation d'urgence, un montage sur mesure ou un accompagnement personnalisé.
                                </p>
                                <p>
                                    Ma formation professionnelle en informatique, domotique et réparation, complétée par une expérience en entreprise, me permet de vous garantir un service de qualité avec une approche technique rigoureuse.
                                </p>
                                <p>
                                    En parallèle de mon activité de dépannage, je dirige également une agence de développement d'applications, ce qui me donne une vision complète et moderne des enjeux informatiques actuels.
                                </p>
                            </div>

                            <div class="mt-10 grid md:grid-cols-3 gap-6">
                                <div class="text-center p-6 bg-primary-blue/5 rounded-2xl">
                                    <div class="text-3xl mb-3">⚡</div>
                                    <h4 class="font-bold text-primary-dark mb-2 leading-tight">Réactivité</h4>
                                    <p class="text-gray-600">Intervention rapide 24h/7j</p>
                                </div>
                                <div class="text-center p-6 bg-primary-green/5 rounded-2xl">
                                    <div class="text-3xl mb-3">🎯</div>
                                    <h4 class="font-bold text-primary-dark mb-2 leading-tight">Expertise</h4>
                                    <p class="text-gray-600">+8 ans d'expérience</p>
                                </div>
                                <div class="text-center p-6 bg-purple-500/5 rounded-2xl">
                                    <div class="text-3xl mb-3">🤝</div>
                                    <h4 class="font-bold text-primary-dark mb-2 leading-tight">Proximité</h4>
                                    <p class="text-gray-600">Service personnalisé</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Une question sur mon parcours ou mes services ?
                    </p>
                    <a href="tel:0760487334" class="bg-primary-blue hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/50 text-white px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                        📞 Discutons de votre projet
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
                        <img src="{{ asset('sap.png') }}" alt="Partenaire Services à la Personne" class="h-20 mr-6">
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

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary-dark mb-6 leading-tight">
                        ❓ QUESTIONS FRÉQUENTES
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">Toutes les réponses à vos questions sur le dépannage informatique à domicile</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(1)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    ⏰ Quel est le délai d'intervention pour un dépannage PC à domicile à Suresnes ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-1" class="faq-content px-8 pb-8">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Intervention le jour même possible dans toute l'Île-de-France !</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Urgences informatiques :</strong> Dans l'heure (24h/7j, même le dimanche)</li>
                                    <li>• <strong>Dépannage standard :</strong> Sous 24h maximum</li>
                                    <li>• <strong>Rendez-vous programmés :</strong> Selon vos disponibilités</li>
                                </ul>
                                <p>Pour Suresnes et communes limitrophes, je peux souvent intervenir dans les 2-3 heures. <a href="{{ route('contact') }}" class="text-primary-blue hover:underline">Contactez-moi</a> pour connaître ma disponibilité immédiate.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(2)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    💳 Comment bénéficier du crédit d'impôt sur mes prestations informatiques à domicile ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-2" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Crédit d'impôt automatique de 50% grâce à mon agrément Services à la Personne :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Avance immédiate :</strong> Payez seulement 50% le jour J</li>
                                    <li>• <strong>Remboursement fiscal :</strong> Jusqu'à 1500€/an remboursés par l'État</li>
                                    <li>• <strong>Démarches simplifiées :</strong> Je m'occupe de toute la paperasse</li>
                                </ul>
                                <p>Exemple concret : intervention à 100€ = vous payez 50€ réels. Tous les services de <a href="{{ route('services') }}" class="text-primary-blue hover:underline">réparation informatique</a> sont éligibles (main-d'œuvre + déplacement).</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(3)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    💰 Quels sont les moyens de paiement acceptés pour le dépannage informatique ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-3" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Plusieurs options de paiement pour votre confort :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Espèces :</strong> Paiement direct après intervention</li>
                                    <li>• <strong>Chèque :</strong> À l'ordre de Vassili JOFFROY</li>
                                    <li>• <strong>Virement bancaire :</strong> RIB fourni sur demande</li>
                                    <li>• <strong>Carte bancaire :</strong> Terminal de paiement mobile disponible</li>
                                </ul>
                                <p>Paiement toujours après intervention réussie. Pour le crédit d'impôt, je peux encaisser seulement 50% et l'État vous rembourse le reste directement.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(4)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    🏆 Quelles garanties offrez-vous sur vos réparations PC et suppression de virus ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-4" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Satisfaction garantie à 100% sur tous mes services :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Réparation réussie</strong> ou remboursement intégral</li>
                                    <li>• <strong>Diagnostic gratuit</strong> à domicile sans engagement</li>
                                    <li>• <strong>Garantie 3 mois</strong> sur les réparations effectuées</li>
                                    <li>• <strong>Support téléphonique gratuit</strong> pendant 1 mois après intervention</li>
                                </ul>
                                <p>Si le problème persiste après mon passage, je reviens gratuitement. Transparence totale sur les tarifs avant toute intervention.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(5)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    🚗 Comment fonctionnent les frais de déplacement en Île-de-France ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-5" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Frais de déplacement transparents et inclus si intervention réussie :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Suresnes & limitrophes :</strong> GRATUIT (Puteaux, Nanterre, Saint-Cloud...)</li>
                                    <li>• <strong>Proche de Suresnes :</strong> 10€ (Neuilly, Courbevoie, Garches...)</li>
                                    <li>• <strong>Reste Île-de-France :</strong> 10-20€ maximum (Paris, Versailles...)</li>
                                    <li>• <strong>Si réparation effectuée :</strong> Frais inclus dans le prix final</li>
                                </ul>
                                <p>Aucun frais caché ! Le déplacement est offert si je résous votre problème informatique. Devis gratuit sur place.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(6)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    🔧 Que comprend une intervention de dépannage informatique à domicile ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-6" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Service complet de A à Z inclus dans le prix :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Diagnostic complet</strong> de votre matériel informatique</li>
                                    <li>• <strong>Explication claire</strong> du problème en langage simple</li>
                                    <li>• <strong>Réparation</strong> ou remplacement des composants défaillants</li>
                                    <li>• <strong>Tests de fonctionnement</strong> et optimisation des performances</li>
                                    <li>• <strong>Formation personnalisée</strong> pour éviter les problèmes futurs</li>
                                    <li>• <strong>Conseils de sécurité</strong> et recommandations d'usage</li>
                                </ul>
                                <p>Que ce soit pour une <a href="{{ route('services') }}" class="text-primary-blue hover:underline">réparation PC</a>, suppression de virus ou montage d'ordinateur, vous bénéficiez d'un accompagnement complet.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full p-8 text-left focus:outline-none" onclick="toggleFAQ(7)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl md:text-2xl font-bold text-primary-dark leading-tight">
                                    🕐 Intervenez-vous le weekend et les jours fériés pour les urgences informatiques ?
                                </h3>
                                <svg class="faq-icon w-6 h-6 text-primary-blue transform transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-7" class="faq-content px-8 pb-8 hidden">
                            <div class="text-lg text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-primary-green">Service d'urgence 24h/7j, même le dimanche et jours fériés :</strong></p>
                                <ul class="space-y-2 ml-6 mb-4">
                                    <li>• <strong>Lundi-Vendredi :</strong> 8h-20h (tarif normal)</li>
                                    <li>• <strong>Weekend :</strong> 9h-18h (tarif normal)</li>
                                    <li>• <strong>Urgences 24h/7j :</strong> Supplément +20€ la nuit/weekend</li>
                                    <li>• <strong>Jours fériés :</strong> Intervention possible selon urgence</li>
                                </ul>
                                <p>Votre ordinateur ne démarre plus un dimanche ? Virus qui bloque tout un jour férié ? J'interviens rapidement pour les vraies urgences informatiques.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Une autre question sur le dépannage informatique à domicile ?</p>
                    <a href="tel:0760487334" class="bg-primary-blue hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/50 text-white px-12 py-6 rounded-2xl text-2xl font-bold transition-all duration-300 transform hover:scale-105">
                        📞 M'APPELER MAINTENANT
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript pour l'accordéon FAQ -->
    <script>
        function toggleFAQ(id) {
            const content = document.getElementById(`faq-${id}`);
            const icon = content.previousElementSibling.querySelector('.faq-icon');

            // Toggle le contenu
            content.classList.toggle('hidden');

            // Rotation de l'icône
            if (content.classList.contains('hidden')) {
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Ouvrir la première FAQ par défaut
        document.addEventListener('DOMContentLoaded', function() {
            const firstContent = document.getElementById('faq-1');
            const firstIcon = firstContent.previousElementSibling.querySelector('.faq-icon');

            // La première est déjà visible, on ajuste juste l'icône
            firstIcon.style.transform = 'rotate(0deg)';
        });
    </script>

    <section class="py-20 bg-gray-50">
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
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
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
                        <div class="leading-relaxed">• Suresnes</div>
                        <div class="leading-relaxed">• Puteaux</div>
                        <div class="leading-relaxed">• Nanterre</div>
                        <div class="leading-relaxed">• Saint-Cloud</div>
                        <div class="leading-relaxed">• Rueil-Malmaison</div>
                        <div class="leading-relaxed">• Paris 16ème (Bois de Boulogne)</div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <h3 class="text-2xl font-bold mb-6 text-primary-green leading-tight">Proche de Suresnes</h3>
                    <div class="space-y-2 text-lg">
                        <div class="leading-relaxed">• Courbevoie</div>
                        <div class="leading-relaxed">• Neuilly-sur-Seine</div>
                        <div class="leading-relaxed">• La Garenne-Colombes</div>
                        <div class="leading-relaxed">• Garches</div>
                        <div class="leading-relaxed">• Boulogne-Billancourt</div>
                        <div class="leading-relaxed">• Levallois-Perret</div>
                        <div class="leading-relaxed">• Sèvres</div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <div class="space-y-2 text-lg">
                        <div class="leading-relaxed">• Vaucresson</div>
                        <div class="leading-relaxed">• Marne-la-Coquette</div>
                        <div class="leading-relaxed">• Versailles</div>
                        <div class="leading-relaxed">• Le Vésinet</div>
                        <div class="leading-relaxed">• Chatou</div>
                        <div class="leading-relaxed">• Maisons-Laffitte</div>
                        <hr>
                        <div class="leading-relaxed">• + Toute l'Île-de-France</div>
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
