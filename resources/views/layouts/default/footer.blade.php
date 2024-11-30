<footer class="bg-dracula-bg py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Branding -->
            <div class="text-center md:text-left mb-6 md:mb-0">
                <img src="{{ asset('_VJ_.png') }}" alt="Vassili Joffroy" class="h-10">
            </div>
            <!-- Navigation -->
            <ul class="flex flex-wrap justify-center md:justify-start space-x-6">
                <li><a href="#about" class="hover:text-dracula-green transition">À Propos</a></li>
                <li><a href="#projects" class="hover:text-dracula-green transition">Mes projets</a></li>
                <li><a href="#passions" class="hover:text-dracula-green transition">Passions</a></li>
                <li><a href="#testimonials" class="hover:text-dracula-green transition">Témoignages</a></li>
                <li><a href="#contact" class="hover:text-dracula-green transition">Disponibilités</a></li>
            </ul>
            <!-- Social Links -->
            <div class="flex space-x-6 mt-6 md:mt-0">
                <a href="https://www.linkedin.com/in/vassili-joffroy/" aria-label="LinkedIn"
                   class="text-dracula-foreground hover:text-dracula-purple">
                    <img src="{{ asset('linkedin.svg') }}" alt="LinkedIn" class="w-6 h-6">
                </a>
                <a href="https://www.malt.fr/profile/vassilijoffroy" aria-label="Malt"
                   class="text-dracula-foreground hover:text-dracula-purple">
                    <img src="{{ asset('briefcase.svg') }}" alt="Malt" class="w-6 h-6">
                </a>
                <a href="https://www.codeur.com/-vassilij" aria-label="Codeur.com"
                   class="text-dracula-foreground hover:text-dracula-purple">
                    <img src="{{ asset('code.svg') }}" alt="Codeur.com" class="w-6 h-6">
                </a>
            </div>
        </div>
        <div class="mt-8 border-t border-dracula-comment pt-6 text-center">
            <a href="https://www.pappers.fr/entreprise/joffroy-vassili-888765740"
               class="text-white hover:text-dracula-green">&copy; {{ date('Y') }} Vassili IT. Tous droits réservés.</a>
        </div>
    </div>
</footer>
