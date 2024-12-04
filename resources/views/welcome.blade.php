@extends('layouts.default')

@section('content')
    <!-- Hero Section -->
    <header id="hero"
            class="relative h-screen flex flex-col justify-center items-center text-center text-dracula-foreground">
        <div class="absolute inset-0 bg-cover bg-center z-0"
             style="background-image: url({{ asset('hero.webp') }});"></div>
        <div class="absolute inset-0 bg-black opacity-70 z-0"></div>
        <div class="relative z-10 px-6 max-w-screen-lg mx-auto">
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-dracula-purple mb-4 leading-tight tracking-tight">
                @lang('hero_title')
            </h1>
            <!-- Description -->
            <p class="text-lg sm:text-xl md:text-2xl font-light mb-12 max-w-3xl mx-auto leading-relaxed text-dracula-foreground-light">
                @lang('hero_description')
            </p>
            <!-- Call-to-Actions -->
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#contact"
                   class="bg-dracula-green text-dracula-bg px-8 py-4 rounded-full font-semibold text-lg md:text-xl hover:bg-dracula-green-700 transition duration-300 shadow-lg">
                    @lang('hero_cta')
                </a>
                <a href="#about"
                   class="bg-dracula-bg border-2 border-dracula-green text-dracula-green px-8 py-4 rounded-full font-semibold text-lg md:text-xl hover:bg-dracula-green hover:text-dracula-bg transition duration-300 shadow-lg">
                    @lang('hero_cta_bis')
                </a>
            </div>
        </div>
    </header>


    <!-- Clients Section -->
    <section id="clients" class="bg-dracula-bg text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12">
                @lang('clients_title')
            </h2>
            <p class="text-center mb-12 text-lg">
                @lang('clients_subtitle')
            </p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center justify-center">
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="{{ asset('cfdt.png') }}" alt="CFDT" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="{{ asset('centrimex.png') }}" alt="Centre Imex" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="{{ asset('anj.png') }}" alt="Autorité Nationale des Jeux" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="{{ asset('superformaliste.png') }}" alt="SuperFormaliste" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://ml.globenewswire.com/Resource/Download/95587acd-77c4-4f24-8995-1648ac68f422" alt="Globe Newswire" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://media.licdn.com/dms/image/v2/D4E22AQGtRQbyeU9mRg/feedshare-shrink_800/feedshare-shrink_800/0/1724766455011?e=2147483647&v=beta&t=CwrW-0aduXyncHv_h4hdCXGi3qvNgOEXWBoQcq3tcbk" alt="LinkedIn Feedshare" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://pbs.twimg.com/profile_images/1542842477115326464/a5ZE-CFu_400x400.jpg" alt="Twitter Profile" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://icarusmediadigital.com/images/icon.png" alt="Icarus Media Digital" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://media.licdn.com/dms/image/v2/C4D12AQFP6rmVlIQyVA/article-inline_image-shrink_1500_2232/article-inline_image-shrink_1500_2232/0/1539274062140?e=1736380800&v=beta&t=i64tQAiM1-1HK6FHFGZH3jNRhAZGrH8aEDi-ghgeLqA" alt="LinkedIn Article" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center items-center p-4 bg-dracula-selection rounded-lg shadow-lg">
                    <img src="https://play-lh.googleusercontent.com/LqBpDIpmk9uCV_805DEz6yXxiygrLWfajptFq63ZGKineerLGdvPDZJwmAh6TE0Zb-M" alt="Play Store App" class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
            </div>
        </div>
    </section>



    <section id="about" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Image Section -->
                <div class="flex justify-center">
                    <img src="https://media.licdn.com/dms/image/v2/D4E03AQGo0FeOMRuXsg/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1732530644239?e=1738800000&v=beta&t=iWfT4oUqS70JfxwnsZXjc5aJ0ZEysdsJ9QAsQYIHPxc"
                         alt="Vassili Joffroy"
                         class="rounded-full shadow-lg w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 object-cover">
                </div>
                <!-- Text Content -->
                <div>
                    <h2 class="text-4xl font-bold text-dracula-purple mb-6">@lang('about_title')</h2>
                    <p class="leading-loose mb-4">@lang('about_description')</p>
                    <a href="#projects" class="text-dracula-green hover:underline">@lang('about_cta') &rarr;</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Projects Section -->
    <section id="projects" class="bg-dracula-bg text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12">
                @lang('projects_title')
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach (config('projects') as $project)
                    <div class="bg-dracula-current-line p-6 rounded-lg shadow-lg relative">
                        <h3 class="text-2xl font-semibold text-dracula-green mb-4">{{ $project['title'] }}</h3>
                        <p>{{ $project['description'] }}</p>
                        @if (!empty($project['url']))
                            <a href="{{ $project['url'] }}"
                               target="_blank"
                               class="text-dracula-green hover:underline absolute bottom-2 right-2">
                                @lang('projects_discover') &rarr;
                            </a>
                        @elseif (!empty($project['status']))
                            <p class="text-dracula-foreground italic absolute bottom-2 right-2">
                                {{ $project['status'] }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Passions Section -->
    <section id="passions" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12">@lang('passions_title')</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach (config('passions') as $passion)
                    <div class="flex items-center bg-dracula-bg rounded-lg p-6">
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
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-12">@lang('testimonials_title')</h2>
            <p class="text-center mb-12 text-lg">
                @lang('testimonials_intro')
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('testimonials') as $testimonial)
                    <div class="bg-dracula-current-line p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                        <div class="flex items-center mb-4">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                 class="w-12 h-12 rounded-full mr-3">
                            <div>
                                <span class="block font-semibold">{{ $testimonial['name'] }}</span>
                                <span class="text-sm text-dracula-foreground italic">{{ $testimonial['company'] }}</span>
                            </div>
                        </div>
                        <p class="italic">"{{ $testimonial['testimonial'] }}"</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- contact Section -->
    <section id="contact" class="bg-dracula-current-line text-dracula-foreground py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dracula-purple mb-6"
            >@lang('contact_title')</h2>
            <p class="text-center mb-8 text-lg">
                @lang('contact_intro')
            </p>
            <div class="flex justify-center">
                <a href="https://calendly.com/vassili-joffroy/30min"
                   class="bg-dracula-green text-dracula-bg px-8 py-4 rounded-full font-semibold text-lg sm:text-xl hover:bg-dracula-green-700 transition duration-300">
                    @lang('contact_cta')
                </a>
            </div>
        </div>
    </section>
@endsection
