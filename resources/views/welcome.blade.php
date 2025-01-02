@extends('layouts.default')

@section('content')
    <section id="hero" class="relative bg-dracula-bg py-16 md:py-24">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
            <div class="md:w-1/2 text-center md:text-left space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold text-dracula-cyan leading-tight">
                    Transformons vos idées en réalités numériques
                </h1>
                <p class="text-lg md:text-xl text-dracula-foreground">
                    Entrepreneur et développeur passionné, je crée des solutions digitales sur mesure pour propulser vos
                    projets au sommet.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#about"
                       class="bg-dracula-cyan text-dracula-bg px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-dracula-purple transition duration-300">
                        Découvrir mon parcours
                    </a>
                    <a href="#projects"
                       class="bg-dracula-current-line border border-dracula-cyan text-dracula-cyan px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-dracula-cyan hover:text-dracula-bg transition duration-300">
                        Explorer mes projets
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 md:mt-0 mt-2">
                <div class="relative overflow-hidden rounded-lg shadow-lg mx-10">
                    <img
                            src="{{ asset('hero.webp') }}"
                            alt="Illustration Hero"
                            class="object-cover w-full h-full"
                            loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dracula-current-line py-12" id="logos">
        <div class="container mx-auto px-6">
            <h2 class="text-center text-2xl md:text-3xl font-bold text-dracula-cyan mb-8">Ils m'ont fait confiance</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center justify-center">
                <a href="https://www.cfdt.fr/" rel="nofollow" target="_blank">
                    <img src="{{ asset('cfdt.png') }}" alt="CFDT"
                         class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </a>
                <a href="https://www.centrimex.com/" rel="nofollow" target="_blank">
                    <img src="{{ asset('centrimex.png') }}" alt="Centrimex"
                         class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </a>
                <a href="https://anj.fr/" rel="nofollow" target="_blank">
                    <img src="{{ asset('anj.png') }}" alt="ANJ"
                         class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </a>
                <a href="https://www.superformaliste.com/" rel="nofollow" target="_blank">
                    <img src="{{ asset('superformaliste.png') }}" alt="SuperFormaliste"
                         class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </a>
                <a href="https://www.expanamarkets.com/" rel="nofollow" target="_blank">
                    <img src="{{ asset('expana.png') }}" alt="Expana Markets"
                         class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 bg-dracula-bg text-dracula-foreground">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <!-- Colonne Image -->
            <div class="md:w-1/2 mb-8 md:mb-0 flex justify-center">
                <div class="relative w-56 h-56 rounded-full bg-white overflow-hidden shadow-lg">
                    <img src="{{ asset('logo.png') }}"
                         alt="Photo de Vassili JOFFROY"
                         class="absolute inset-0 w-full p-5 h-full object-cover">
                </div>
            </div>

            <!-- Colonne Texte -->
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl font-bold text-dracula-cyan">Qui suis-je ?</h2>
                <p>
                    Développeur web spécialisé en Laravel et PHP, avec plus de 7 ans d'expérience, j'accompagne les
                    entreprises dans leur transformation digitale. En tant que fondateur de TFA - The Forge Agency, je
                    conçois des solutions performantes et sur mesure.
                </p>
                <a href="#projects"
                   class="bg-dracula-cyan text-dracula-bg px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-dracula-purple transition duration-300 inline-block">
                    Découvrez mes projets →
                </a>
            </div>
        </div>
    </section>

    <section id="projects" class="py-16 bg-dracula-current-line text-dracula-foreground">
        <div class="container mx-auto px-6">
            <h2 class="text-center text-3xl font-bold mb-12 text-dracula-cyan">Mes Projets</h2>

            <!-- Grid uniforme -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-dracula-bg rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="relative h-40">
                            <img src="{{ $project['image'] }}"
                                 alt="Image projet {{ $project['title'] }}"
                                 class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-bold text-dracula-cyan">{{ $project['title'] }}</h3>
                            <p class="text-white text-sm">
                                {{ $project['description'] }}
                            </p>
                            <a href="{{ $project['url'] }}" target="_blank"
                               class="bg-dracula-cyan text-dracula-bg px-4 py-2 rounded-full font-semibold hover:bg-dracula-purple transition duration-300 inline-block">
                                Voir plus →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================
        CONTACT
    ========================== -->
    <section id="contact" class="py-16 bg-dracula-bg text-dracula-foreground">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-2/3 space-y-6">
                <h2 class="text-3xl font-bold text-dracula-cyan">Vous souhaitez collaborer ?</h2>
                <p class="text-lg">
                    Contactez-moi dès aujourd'hui pour discuter de vos besoins et trouver la solution idéale à vos
                    projets
                    numériques. Ensemble, nous pouvons transformer vos idées en réalités.
                </p>
            </div>
            <div class="md:w-1/3 text-center">
                <a href="https://calendly.com/vassili-joffroy/30min" target="_blank"
                   class="bg-dracula-cyan text-dracula-bg px-8 py-4 rounded-full font-semibold shadow-lg hover:bg-dracula-purple transition duration-300">
                    Contactez-moi →
                </a>
            </div>
        </div>
    </section>
@endsection
