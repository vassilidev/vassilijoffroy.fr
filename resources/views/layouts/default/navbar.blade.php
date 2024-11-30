<nav id="navbar"
     class="fixed top-0 left-0 right-0 bg-dracula-bg bg-opacity-90 backdrop-blur-md px-6 py-4 flex justify-between items-center z-50 transition duration-300">
    <a href="#hero"
       class="text-2xl font-bold text-dracula-purple focus:outline-none focus:ring-2 focus:ring-dracula-green">
        Vassili Joffroy
    </a>
    <ul class="hidden md:flex space-x-6">
        <li><a href="#about" class="hover:text-dracula-green transition">À Propos</a></li>
        <li><a href="#projects" class="hover:text-dracula-green transition">Mes projets</a></li>
        <li><a href="#passions" class="hover:text-dracula-green transition">Passions</a></li>
        <li><a href="#testimonials" class="hover:text-dracula-green transition">Témoignages</a></li>
        <li><a href="#calendar" class="hover:text-dracula-green transition">Disponibilités</a></li>
    </ul>
    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="md:hidden focus:outline-none" aria-label="Toggle menu">
        <i class="fas fa-bars text-2xl text-dracula-foreground"></i>
    </button>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="hidden fixed top-0 left-0 w-full h-full bg-dracula-bg bg-opacity-95 z-40">
    <div class="flex flex-col items-center justify-center h-full space-y-6">
        <a href="#about" class="text-2xl text-dracula-foreground hover:text-dracula-green" onclick="toggleMenu()">À
            Propos</a>
        <a href="#societes" class="text-2xl text-dracula-foreground hover:text-dracula-green" onclick="toggleMenu()">Mes
            Sociétés</a>
        <a href="#passions" class="text-2xl text-dracula-foreground hover:text-dracula-green" onclick="toggleMenu()">Passions</a>
        <a href="#testimonials" class="text-2xl text-dracula-foreground hover:text-dracula-green"
           onclick="toggleMenu()">Témoignages</a>
        <a href="#calendar" class="text-2xl text-dracula-foreground hover:text-dracula-green" onclick="toggleMenu()">Disponibilités</a>
    </div>
</div>