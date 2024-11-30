@extends('layouts.default')

@section('content')
    <!-- Hero Section -->
    <header id="hero"
            class="relative h-screen flex flex-col justify-center items-center text-center text-dracula-foreground">
        <div class="absolute inset-0 bg-cover bg-center z-0"
             style="background-image: url({{ asset('hero.jpg') }});"></div>
        <div class="absolute inset-0 bg-black opacity-70 z-0"></div>
        <div class="relative z-10 px-6">
            <h1 class="text-6xl font-extrabold text-dracula-purple mb-6 leading-tight max-w-4xl mx-auto"
                data-aos="fade-up">
                @lang('hero_title')
            </h1>
            <p class="text-xl sm:text-2xl mb-10 max-w-2xl mx-auto leading-relaxed text-dracula-foreground-light"
               data-aos="fade-up" data-aos-delay="100">
                @lang('hero_description')
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#calendar"
                   class="bg-dracula-green text-dracula-bg px-8 py-4 rounded-full font-semibold text-lg sm:text-xl hover:bg-dracula-green-700 transition duration-300">
                    @lang('hero_cta')
                </a>
                <a href="#about"
                   class="bg-dracula-bg border-2 border-dracula-green text-dracula-green px-8 py-4 rounded-full font-semibold text-lg sm:text-xl hover:bg-dracula-green hover:text-dracula-bg transition duration-300">
                    @lang('hero_cta_bis')
                </a>
            </div>
        </div>
    </header>

    <!-- Clients Section -->
    <section id="clients" class="bg-dracula-bg text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12" data-aos="fade-up">@lang('clients_title')</h2>
            <p class="text-center mb-12 text-lg" data-aos="fade-up" data-aos-delay="100">@lang('clients_subtitle')</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 items-center justify-center">
                <img src="/images/clients/cfdt.png" alt="CFDT" class="h-16 mx-auto" data-aos="zoom-in">
                <img src="/images/clients/centre-imex.png" alt="Centre Imex" class="h-16 mx-auto" data-aos="zoom-in"
                     data-aos-delay="100">
                <img src="/images/clients/anj.png" alt="Autorité Nationale des Jeux" class="h-16 mx-auto"
                     data-aos="zoom-in" data-aos-delay="200">
                <img src="/images/clients/mintec.png" alt="Mintec" class="h-16 mx-auto" data-aos="zoom-in"
                     data-aos-delay="300">
                <img src="/images/clients/rubrash.png" alt="Rubrash" class="h-16 mx-auto" data-aos="zoom-in"
                     data-aos-delay="400">
                <img src="/images/clients/superformaliste.png" alt="SuperFormaliste" class="h-16 mx-auto"
                     data-aos="zoom-in" data-aos-delay="500">
                <img src="/images/clients/monannoncelegale.png" alt="MonAnnonceLégale" class="h-16 mx-auto"
                     data-aos="zoom-in" data-aos-delay="600">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <img src="{{ asset('me.jpeg') }}" alt="Vassili Joffroy"
                         class="rounded-lg shadow-lg h-3/5">
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-4xl font-bold text-dracula-purple mb-6">@lang('about_title')</h2>
                    <p class="leading-loose mb-4">@lang('about_description')</p>
                    <a href="#societes" class="text-dracula-green hover:underline">@lang('about_cta') &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-dracula-bg text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12" data-aos="fade-up">@lang('projects_title')</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Dynamic projects from config -->
                @foreach (config('projects') as $project)
                    <div class="bg-dracula-current-line p-6 rounded-lg shadow-lg" data-aos="fade-up">
                        <h3 class="text-2xl font-semibold text-dracula-green mb-4">{{ $project['title'] }}</h3>
                        <p>{{ $project['description'] }}</p>
                        @if (!empty($project['url']))
                            <a href="{{ $project['url'] }}" target="_blank" class="text-dracula-green hover:underline">
                                @lang('projects_discover') &rarr;
                            </a>
                        @elseif (!empty($project['status']))
                            <p class="text-dracula-comment italic">{{ $project['status'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Passions Section -->
    <section id="passions" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12"
                data-aos="fade-up">@lang('passions_title')</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach (config('passions') as $passion)
                    <div class="flex items-center bg-dracula-bg rounded-lg p-6" data-aos="{{ $passion['animation'] }}">
                        <div class="w-1/3">
                            <img src="{{ asset($passion['image']) }}" alt="{{ $passion['title'] }}"
                                 class="rounded-full shadow-lg">
                        </div>
                        <div class="w-2/3 pl-6">
                            <h3 class="text-2xl font-semibold text-dracula-green mb-2">{{ $passion['title'] }}</h3>
                            <p>{{ $passion['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-dracula-bg text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12"
                data-aos="fade-up">@lang('testimonials_title')</h2>
            <p class="text-center mb-12 text-lg" data-aos="fade-up" data-aos-delay="100">
                @lang('testimonials_intro')
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('testimonials') as $testimonial)
                    <div class="bg-dracula-current-line p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300"
                         data-aos="fade-up" data-aos-delay="{{ $testimonial['delay'] }}">
                        <div class="flex items-center mb-4">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                 class="w-12 h-12 rounded-full mr-3">
                            <div>
                                <span class="block font-semibold">{{ $testimonial['name'] }}</span>
                                <span class="text-sm text-dracula-comment">{{ $testimonial['company'] }}</span>
                            </div>
                        </div>
                        <p class="italic">"{{ $testimonial['testimonial'] }}"</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section id="calendar" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-6"
                data-aos="fade-up">@lang('calendar_title')</h2>
            <p class="text-center mb-8 text-lg" data-aos="fade-up" data-aos-delay="100">
                @lang('calendar_intro')
            </p>
            <div data-aos="fade-up" data-aos-delay="200">
                <iframe src="https://calendly.com/vassili-joffroy/30min?embed_domain=www.votresite.com&embed_type=Inline"
                        width="100%" height="700" frameborder="0"></iframe>
            </div>
        </div>
    </section>
@endsection
