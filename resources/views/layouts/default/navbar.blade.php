<!-- =========================
    NAVBAR
========================== -->
<nav class="fixed top-0 left-0 w-full bg-dracula-current-line shadow-md z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo + text aligner à gauche -->
        <a href="#" class="flex items-center space-x-2">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12 h-12">
            <span class="hidden md:block text-2xl font-bold">Vassili JOFFROY</span>
        </a>

        <!-- Menu principal -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="#hero" class="hover:text-dracula-cyan">Accueil</a></li>
            <li><a href="#about" class="hover:text-dracula-cyan">À Propos</a></li>
            <li><a href="#projects" class="hover:text-dracula-cyan">Mes Projets</a></li>
            <li><a href="#logos" class="hover:text-dracula-cyan">Ils me font confiance</a></li>
        </ul>

        <!-- CTA -->
        <a href="#contact"
           class="hidden md:inline-block bg-dracula-cyan text-dracula-bg px-4 py-2 rounded-full font-semibold hover:bg-dracula-purple transition duration-300">
            Travaillons ensemble
        </a>

        <!-- Menu burger (visible sur mobile) -->
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <!-- Icône burger -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                 stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Menu mobile -->
    <div id="mobileMenu" class="hidden md:hidden bg-dracula-bg">
        <ul class="flex flex-col items-center space-y-4 py-4">
            <li><a href="#hero" class="text-white hover:text-dracula-cyan">Accueil</a></li>
            <li><a href="#about" class="text-white hover:text-dracula-cyan">À Propos</a></li>
            <li><a href="#projects" class="text-white hover:text-dracula-cyan">Mes Projets</a></li>
            <li><a href="#logos" class="text-white hover:text-dracula-cyan">Ils me font confiance</a></li>
            <li>
                <a href="#contact"
                   class="bg-dracula-cyan text-dracula-bg px-6 py-2 rounded-full font-semibold hover:bg-dracula-purple transition duration-300">
                    Travaillons ensemble
                </a>
            </li>
        </ul>
    </div>
</nav>

@push('js')
    <script>
        document.getElementById("menuBtn").addEventListener("click", function () {
            const mobileMenu = document.getElementById("mobileMenu");
            mobileMenu.classList.toggle("hidden");
            mobileMenu.classList.toggle("block");
        });
    </script>
@endpush
