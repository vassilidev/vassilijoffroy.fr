@extends('layouts.default')

@section('title', 'Contact - Dépannage Informatique à Domicile Suresnes | Vassili JOFFROY - 07 60 48 73 34')
@section('meta_description', 'Contactez Vassili JOFFROY pour vos dépannages informatiques en Île-de-France. Intervention rapide 24h/7j. Téléphone : 07 60 48 73 34. Email : contact@vassilijoffroy.fr. Crédit d\'impôt 50%.')

@section('content')
    <!-- Hero Contact -->
    <section class="bg-gradient-to-br from-primary-dark via-primary-blue to-primary-green text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">CONTACTEZ-MOI</h1>
            <p class="text-2xl md:text-3xl max-w-4xl mx-auto leading-relaxed mb-8">
                Dépannage informatique à domicile à Suresnes et toute l'Île-de-France<br>
                <span class="text-primary-green font-bold">Intervention rapide 24h/7j • Crédit d'impôt 50%</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="tel:0760487334" class="bg-primary-green hover:bg-green-400 hover:shadow-2xl hover:shadow-green-500/50 text-white px-16 py-8 rounded-2xl text-4xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 07 60 48 73 34
                </a>
                <div class="bg-green-500/20 backdrop-blur-sm px-8 py-4 rounded-2xl border-2 border-green-400 shadow-lg">
                    <span class="font-bold text-2xl text-green-300">🟢 OUVERT 24H/7J</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Informations de contact -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 max-w-7xl mx-auto">

                <!-- Coordonnées -->
                <div>
                    <h2 class="text-4xl font-bold text-primary-dark mb-12 leading-tight">MES COORDONNÉES</h2>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-6 p-8 bg-gradient-to-r from-primary-green/10 to-green-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="bg-primary-green text-white p-4 rounded-full flex-shrink-0">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-primary-dark mb-2 leading-tight">Téléphone - Intervention Urgente</h3>
                                <a href="tel:0760487334" class="text-3xl font-bold text-primary-green hover:text-green-600 transition-colors">
                                    07 60 48 73 34
                                </a>
                                <p class="text-gray-600 mt-2 text-lg leading-relaxed">Disponible 24h/7j pour vos urgences informatiques</p>
                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Réponse immédiate • Intervention le jour même possible</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6 p-8 bg-gradient-to-r from-primary-blue/10 to-blue-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="bg-primary-blue text-white p-4 rounded-full flex-shrink-0">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-primary-dark mb-2 leading-tight">Email - Devis & Questions</h3>
                                <a href="mailto:contact@vassilijoffroy.fr" class="text-xl text-primary-blue hover:text-blue-600 transition-colors">
                                    contact@vassilijoffroy.fr
                                </a>
                                <p class="text-gray-600 mt-2 text-lg leading-relaxed">Réponse sous 2h en moyenne</p>
                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Idéal pour devis détaillés et projets web</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6 p-8 bg-gradient-to-r from-gray-100 to-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="bg-primary-dark text-white p-4 rounded-full flex-shrink-0">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-primary-dark mb-2 leading-tight">Adresse - Zone d'Intervention</h3>
                                <p class="text-xl leading-relaxed">8 rue du Tertre<br>92150 Suresnes</p>
                                <p class="text-gray-600 mt-2 text-lg leading-relaxed">Basé à Suresnes • Intervention toute l'Île-de-France</p>
                                <p class="text-red-600 font-semibold mt-1 leading-relaxed">⚠️ Uniquement interventions à domicile</p>
                            </div>
                        </div>

                        <!-- Avis clients -->
                        <div class="bg-gradient-to-r from-yellow-50 to-red-50 p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-primary-dark mb-6 leading-tight">⭐ Avis Clients Vérifiés</h3>
                            <div class="flex flex-col sm:flex-row gap-4 mb-4">
                                <a href="https://g.co/kgs/sbiL66j" target="_blank" class="bg-red-500 hover:bg-red-600 hover:shadow-lg hover:shadow-red-500/50 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 text-center">
                                    📱 Google : 4.9/5 ⭐
                                </a>
                                <a href="https://www.pagesjaunes.fr/pros/60418181" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg hover:shadow-yellow-500/50 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 text-center">
                                    📋 Pages Jaunes
                                </a>
                            </div>
                            <p class="text-gray-600 text-center leading-relaxed">Plus de 60 avis clients vérifiés • Note moyenne 4.9/5</p>
                        </div>

                        <!-- Certifications -->
                        <div class="bg-primary-green/10 p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-primary-dark mb-6 leading-tight">🏅 Certifications & Agréments</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <div class="bg-primary-green text-white px-4 py-2 rounded-full font-bold">SAP</div>
                                    <span class="text-lg">Partenaire Services à la Personne</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="bg-primary-blue text-white px-4 py-2 rounded-full font-bold">50%</div>
                                    <span class="text-lg">Crédit d'impôt garanti</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="bg-purple-500 text-white px-4 py-2 rounded-full font-bold">PRO</div>
                                    <span class="text-lg">Formation professionnelle certifiée</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div>
                    <h2 class="text-4xl font-bold text-primary-dark mb-12 leading-tight">DEMANDE D'INTERVENTION</h2>

                    <div class="bg-white p-10 rounded-3xl shadow-2xl border border-gray-100">
                        <form action="{{ '' }}" method="POST">
                            @csrf
                            <div class="space-y-8">
                                <div>
                                    <label for="name" class="block text-lg font-semibold text-gray-700 mb-3">Nom et Prénom *</label>
                                    <input type="text" id="name" name="name" required class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300" placeholder="Votre nom complet">
                                </div>

                                <div>
                                    <label for="phone" class="block text-lg font-semibold text-gray-700 mb-3">Téléphone *</label>
                                    <input type="tel" id="phone" name="phone" required class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300" placeholder="07 XX XX XX XX">
                                </div>

                                <div>
                                    <label for="city" class="block text-lg font-semibold text-gray-700 mb-3">Ville *</label>
                                    <input type="text" id="city" name="city" required class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300" placeholder="Suresnes, Puteaux, Paris...">
                                </div>

                                <div>
                                    <label for="service" class="block text-lg font-semibold text-gray-700 mb-3">Type de service</label>
                                    <select id="service" name="service" class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300">
                                        <option value="">Sélectionnez un service</option>
                                        <option value="reparation-pc">Réparation PC fixe/portable</option>
                                        <option value="suppression-virus">Suppression virus/malware</option>
                                        <option value="montage-pc">Montage PC sur mesure</option>
                                        <option value="formation">Formation informatique</option>
                                        <option value="support">Support technique</option>
                                        <option value="developpement-web">Développement web</option>
                                        <option value="autre">Autre problème</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="problem" class="block text-lg font-semibold text-gray-700 mb-3">Décrivez votre problème *</label>
                                    <textarea id="problem" name="problem" rows="5" required class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300 resize-none" placeholder="Ex: Mon ordinateur ne démarre plus depuis ce matin, écran bleu avec message d'erreur, virus détecté par l'antivirus..."></textarea>
                                </div>

                                <div>
                                    <label for="urgency" class="block text-lg font-semibold text-gray-700 mb-3">Niveau d'urgence</label>
                                    <select id="urgency" name="urgency" class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-blue focus:border-transparent text-lg transition-all duration-300">
                                        <option value="normal">Normal (sous 24h)</option>
                                        <option value="urgent">Urgent (dans la journée)</option>
                                        <option value="emergency">Très urgent (dans l'heure)</option>
                                    </select>
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-primary-green to-green-600 hover:from-green-600 hover:to-green-700 hover:shadow-lg hover:shadow-green-500/50 text-white py-6 px-8 rounded-xl font-bold text-xl transition-all duration-300 transform hover:scale-105">
                                    📧 ENVOYER MA DEMANDE
                                </button>
                            </div>
                        </form>

                        <div class="mt-8 p-6 bg-yellow-50 border-2 border-yellow-200 rounded-xl">
                            <p class="text-yellow-800 font-bold text-lg text-center mb-2 leading-tight">💡 Pour une intervention immédiate :</p>
                            <a href="tel:0760487334" class="block text-center text-3xl font-bold text-primary-green hover:text-green-600 transition-colors">
                                📞 07 60 48 73 34
                            </a>
                            <p class="text-center text-sm text-yellow-700 mt-2">Réponse garantie en moins de 5 minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horaires et disponibilité -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary-dark mb-6 leading-tight">HORAIRES & DISPONIBILITÉ</h2>
                <p class="text-xl text-gray-600 leading-relaxed">Service de dépannage informatique adapté à vos contraintes</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-10 rounded-3xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                    <div class="text-6xl mb-6">🕐</div>
                    <h3 class="text-2xl font-bold text-primary-dark mb-4 leading-tight">Lundi - Vendredi</h3>
                    <p class="text-2xl text-primary-green font-bold mb-2">8h00 - 20h00</p>
                    <p class="text-gray-600 text-lg leading-relaxed">Interventions programmées<br>Tarif normal</p>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                    <div class="text-6xl mb-6">🕕</div>
                    <h3 class="text-2xl font-bold text-primary-dark mb-4 leading-tight">Weekend</h3>
                    <p class="text-2xl text-primary-green font-bold mb-2">9h00 - 18h00</p>
                    <p class="text-gray-600 text-lg leading-relaxed">Samedi et dimanche<br>Tarif normal</p>
                </div>

                <div class="bg-gradient-to-br from-primary-green to-green-600 text-white p-10 rounded-3xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                    <div class="text-6xl mb-6">🚨</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">URGENCES</h3>
                    <p class="text-2xl font-bold mb-2">24H/7J</p>
                    <p class="text-lg leading-relaxed">Même la nuit et jours fériés<br>Supplément +20€</p>
                </div>

                <div class="bg-primary-blue text-white p-10 rounded-3xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                    <div class="text-6xl mb-6">📞</div>
                    <h3 class="text-2xl font-bold mb-4 leading-tight">Réponse Rapide</h3>
                    <p class="text-2xl font-bold mb-2">< 5 MIN</p>
                    <p class="text-lg leading-relaxed">Réponse téléphonique<br>garantie</p>
                </div>
            </div>

            <div class="text-center mt-16">
                <div class="bg-white p-8 rounded-2xl shadow-lg max-w-3xl mx-auto">
                    <h3 class="text-2xl font-bold text-primary-dark mb-4 leading-tight">🎯 Engagement Qualité</h3>
                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-3xl mb-2">⚡</div>
                            <p class="font-bold text-primary-blue">Intervention rapide</p>
                            <p class="text-gray-600">Le jour même possible</p>
                        </div>
                        <div>
                            <div class="text-3xl mb-2">🏆</div>
                            <p class="font-bold text-primary-green">Satisfaction garantie</p>
                            <p class="text-gray-600">Réparation ou remboursé</p>
                        </div>
                        <div>
                            <div class="text-3xl mb-2">💳</div>
                            <p class="font-bold text-purple-600">Crédit d'impôt 50%</p>
                            <p class="text-gray-600">Services à la personne</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zone d'intervention détaillée -->
    <section class="py-20 bg-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-6 leading-tight">ZONE D'INTERVENTION DÉPANNAGE INFORMATIQUE</h2>
                <p class="text-2xl leading-relaxed">Intervention à domicile dans toute l'Île-de-France</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
                <div>
                    <h3 class="text-3xl font-bold mb-8 leading-tight">Principales villes desservies :</h3>

                    <!-- Suresnes & Limitrophes -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-bold text-primary-green mb-4">Suresnes & Limitrophes (GRATUIT)</h4>
                        <div class="grid md:grid-cols-2 gap-3">
                            <div class="leading-relaxed">• Suresnes</div>
                            <div class="leading-relaxed">• Puteaux</div>
                            <div class="leading-relaxed">• Nanterre</div>
                            <div class="leading-relaxed">• Saint-Cloud</div>
                            <div class="leading-relaxed">• Rueil-Malmaison</div>
                            <div class="leading-relaxed">• Paris 16ème</div>
                        </div>
                    </div>

                    <!-- Proche de Suresnes -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-bold text-primary-green mb-4">Proche de Suresnes (10€)</h4>
                        <div class="grid md:grid-cols-2 gap-3">
                            <div class="leading-relaxed">• Courbevoie</div>
                            <div class="leading-relaxed">• Neuilly-sur-Seine</div>
                            <div class="leading-relaxed">• La Garenne-Colombes</div>
                            <div class="leading-relaxed">• Garches</div>
                            <div class="leading-relaxed">• Boulogne-Billancourt</div>
                            <div class="leading-relaxed">• Levallois-Perret</div>
                            <div class="leading-relaxed">• Sèvres</div>
                            <div class="leading-relaxed">• Issy-les-Moulineaux</div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-2xl font-bold text-primary-green mb-4">Autres Communes (10-20€)</h4>
                        <div class="grid md:grid-cols-2 gap-3">
                            <div class="leading-relaxed">• Vaucresson</div>
                            <div class="leading-relaxed">• Marne-la-Coquette</div>
                            <div class="leading-relaxed">• Versailles</div>
                            <div class="leading-relaxed">• Le Vésinet</div>
                            <div class="leading-relaxed">• Chatou</div>
                            <div class="leading-relaxed">• Maisons-Laffitte</div>
                            <div class="leading-relaxed">• Saint-Germain-en-Laye</div>
                            <div class="leading-relaxed">• Neuilly-sur-Seine</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-10 rounded-3xl border border-white/20">
                    <h3 class="text-2xl font-bold mb-8 leading-tight">💰 Frais de déplacement transparents</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-center py-4 border-b border-white/20">
                            <span class="text-lg leading-relaxed">Suresnes & communes limitrophes</span>
                            <span class="font-bold text-primary-green text-2xl">GRATUIT</span>
                        </div>
                        <div class="flex justify-between items-center py-4 border-b border-white/20">
                            <span class="text-lg leading-relaxed">Proche de Suresnes (92)</span>
                            <span class="font-bold text-xl">10€</span>
                        </div>
                        <div class="flex justify-between items-center py-4 border-b border-white/20">
                            <span class="text-lg leading-relaxed">Paris et proche banlieue</span>
                            <span class="font-bold text-xl">15€</span>
                        </div>
                        <div class="flex justify-between items-center py-4 border-b border-white/20">
                            <span class="text-lg leading-relaxed">Reste Île-de-France</span>
                            <span class="font-bold text-xl">10-20€ max</span>
                        </div>
                        <div class="flex justify-between items-center py-4">
                            <span class="text-lg leading-relaxed">Urgence nuit/weekend</span>
                            <span class="font-bold text-xl">+20€</span>
                        </div>
                    </div>
                    <p class="text-sm mt-6 text-gray-300 text-center leading-relaxed">
                        💡 Frais inclus si intervention réussie
                    </p>

                    <div class="mt-8 p-6 bg-primary-green/20 rounded-2xl border border-primary-green/30">
                        <h4 class="font-bold text-xl mb-3 leading-tight">🎯 Pourquoi ces tarifs ?</h4>
                        <ul class="space-y-2 text-sm">
                            <li>• Essence et temps de trajet</li>
                            <li>• Matériel de diagnostic transporté</li>
                            <li>• Disponibilité garantie 24h/7j</li>
                            <li>• Service à domicile premium</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <p class="text-xl mb-8 leading-relaxed">
                    Votre ville n'est pas listée ? Contactez-moi pour connaître les conditions d'intervention !
                </p>
                <a href="tel:0760487334" class="bg-primary-green hover:bg-green-400 hover:shadow-2xl hover:shadow-green-500/50 text-white px-12 py-6 rounded-2xl text-3xl font-bold transition-all duration-300 transform hover:scale-105">
                    📞 APPELEZ-MOI MAINTENANT
                </a>
            </div>
        </div>
    </section>

    <!-- Témoignages locaux -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary-dark mb-6 leading-tight">
                    ⭐ TÉMOIGNAGES CLIENTS SURESNES & RÉGION
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">Ils m'ont fait confiance pour leur dépannage informatique</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-blue text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            LG
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Laura G.</div>
                            <div class="text-gray-500 text-sm">Suresnes • Réparation PC</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Intervention rapide un dimanche pour mon PC qui ne démarrait plus. Problème résolu en 1h, très professionnel !"</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-green text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            ND
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Nathalie D.</div>
                            <div class="text-gray-500 text-sm">Rueil-Malmaison • Formation Senior</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"Très patient pour m'apprendre l'ordinateur. Maintenant je maîtrise les emails et internet. Merci !"</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            RG
                        </div>
                        <div>
                            <div class="font-bold text-primary-dark text-lg">Romain G.</div>
                            <div class="text-gray-500 text-sm">Saint-Cloud • Suppression Virus</div>
                        </div>
                        <div class="ml-auto">
                            <span class="text-yellow-400 text-2xl">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic leading-relaxed">"PC infecté par un ransomware, données récupérées et système nettoyé. Un vrai sauveur !"</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://g.co/kgs/sbiL66j" target="_blank" class="bg-red-500 hover:bg-red-600 hover:shadow-lg hover:shadow-red-500/50 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300">
                        📱 Tous nos avis Google
                    </a>
                    <a href="https://www.pagesjaunes.fr/pros/60418181" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg hover:shadow-yellow-500/50 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300">
                        📋 Avis Pages Jaunes
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
