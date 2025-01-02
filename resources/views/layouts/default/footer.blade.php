<footer class="bg-dracula-current-line py-16">
    <div class="container mx-auto px-6">
        <!-- Grid Footer -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Branding et description -->
            <div>
                <a href="#" class="text-2xl font-bold text-dracula-cyan">Vassili JOFFROY</a>
                <p class="mt-4 text-sm text-dracula-foreground">
                    Entrepreneur passionné et fondateur de TFA - The Forge Agency.<br>
                    Je transforme vos idées en solutions numériques innovantes.
                </p>
            </div>

            <!-- Liens rapides -->
            <div>
                <h3 class="text-xl font-semibold text-dracula-cyan mb-4">Liens rapides</h3>
                <ul class="space-y-2">
                    <li><a href="#hero" class="hover:text-dracula-cyan">Accueil</a></li>
                    <li><a href="#about" class="hover:text-dracula-cyan">À Propos</a></li>
                    <li><a href="#projects" class="hover:text-dracula-cyan">Mes Projets</a></li>
                    <li><a href="#logos" class="hover:text-dracula-cyan">Ils m'ont fait confiance</a></li>
                    <li><a href="#contact" class="hover:text-dracula-cyan">Contact</a></li>
                </ul>
            </div>

            <!-- Réseaux sociaux -->
            <div>
                <h3 class="text-xl font-semibold text-dracula-cyan mb-4">Suivez-moi</h3>
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/vassili-joffroy" target="_blank"
                       class="text-dracula-foreground hover:text-dracula-cyan">
                        <img src="{{ asset('linkedin.svg') }}" alt="LinkedIn" class="w-6 h-6" loading="lazy">
                    </a>
                    <a href="https://www.malt.fr/profile/vassilijoffroy" target="_blank"
                       class="text-dracula-foreground hover:text-dracula-cyan">
                        <img src="{{ asset('briefcase.svg') }}" alt="Malt" class="w-6 h-6" loading="lazy">
                    </a>
                    <a href="https://github.com/vassilidev" target="_blank"
                       class="text-dracula-foreground hover:text-dracula-cyan">
                        <img src="{{ asset('code.svg') }}" alt="GitHub" class="w-6 h-6" loading="lazy">
                    </a>
                </div>
            </div>
        </div>

        <!-- Section Contact -->
        <div class="text-center mt-8">
            <p class="text-sm text-dracula-foreground">
                Besoin d’une solution numérique sur mesure ? <a href="#contact"
                                                                class="text-dracula-cyan hover:underline">Contactez-moi</a>
                pour en discuter.
            </p>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm text-dracula-foreground mt-4">
            &copy; {{ date('Y') }} Vassili JOFFROY. Tous droits réservés.
        </div>
    </div>
</footer>
