@extends('layouts.default')

@section('title', "Mentions légales et conditions générales d'utilisation | Vassili Joffroy")
@section('description', "Mentions légales, conditions générales d'utilisation, données personnelles et cookies du site vassilijoffroy.fr.")
@section('breadcrumb', 'Mentions légales et CGU')

@php($site = config('site'))

@section('content')
    <section class="border-b border-line">
        <div class="container-site py-12 md:py-16">
            <h1 class="h-section md:text-5xl">Mentions légales et conditions générales d'utilisation</h1>
            <p class="lead mt-4">Dernière mise à jour : 25 novembre 2026</p>
        </div>
    </section>

    <section class="py-12 md:py-16">
        <div class="container-site">
            <article class="prose prose-lg max-w-3xl prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-ink prose-a:text-seine prose-strong:text-ink text-ink-soft">
                <h2 id="presentation">1. Éditeur du site</h2>
                <p>Le site vassilijoffroy.fr (ci-après le « Site ») est édité par :</p>
                <ul>
                    <li><strong>Entreprise individuelle :</strong> Joffroy Vassili (VASSILI IT)</li>
                    <li><strong>SIREN :</strong> 888 765 740</li>
                    <li><strong>SIRET (siège) :</strong> {{ $site['siret'] }}</li>
                    <li><strong>Adresse :</strong> {{ $site['address']['street'] }}, {{ $site['address']['postal_code'] }} {{ $site['address']['city'] }}, France</li>
                    <li><strong>TVA intracommunautaire :</strong> FR32888765740</li>
                    <li><strong>Téléphone :</strong> <a href="tel:{{ $site['phone_e164'] }}">{{ $site['phone'] }}</a></li>
                    <li><strong>E-mail :</strong> <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a></li>
                    <li><strong>Directeur de la publication :</strong> Vassili Joffroy</li>
                </ul>
                <p>
                    Le Site présente les services de dépannage, de réparation et d'assistance informatique proposés par
                    l'entreprise et permet aux utilisateurs d'entrer en contact avec elle.
                </p>
                <p>Conception et réalisation : <a href="{{ $site['links']['tfa'] }}" target="_blank" rel="noopener">TFA The Forge Agency</a>.</p>

                <h2 id="acceptation">2. Acceptation des CGU</h2>
                <p>
                    L'accès et l'utilisation du Site impliquent l'acceptation sans réserve des présentes conditions
                    générales d'utilisation. L'éditeur peut les modifier à tout moment ; les modifications s'appliquent
                    dès leur publication.
                </p>

                <h2 id="services">3. Informations publiées</h2>
                <p>Le Site fournit des informations indicatives sur :</p>
                <ul>
                    <li>les prestations de dépannage, de réparation et d'assistance informatique ;</li>
                    <li>les tarifs et les modalités de prise de rendez-vous ;</li>
                    <li>les coordonnées et les horaires de contact.</li>
                </ul>
                <p>Ces informations peuvent évoluer sans préavis. Seul le prix annoncé avant l'intervention fait foi.</p>

                <h2 id="hebergement">4. Hébergement</h2>
                <p>
                    Le Site est hébergé par <strong>DigitalOcean, LLC</strong>, dans un centre de données situé à
                    Amsterdam (Pays-Bas). DigitalOcean LLC, 101 Avenue of the Americas, New York, NY 10013, États-Unis,
                    <a href="https://www.digitalocean.com" target="_blank" rel="noopener">digitalocean.com</a>.
                </p>

                <h2 id="propriete">5. Propriété intellectuelle</h2>
                <p>
                    L'ensemble des contenus du Site (textes, images, photographies, logos, mise en page et structure)
                    est protégé par le Code de la propriété intellectuelle. Toute reproduction, représentation ou
                    adaptation, totale ou partielle, sans autorisation écrite préalable de l'éditeur est interdite.
                </p>

                <h2 id="responsabilite">6. Responsabilité</h2>
                <p>L'éditeur veille à l'exactitude des informations publiées mais ne saurait être tenu responsable :</p>
                <ul>
                    <li>d'une inexactitude, d'une omission ou d'une erreur typographique ;</li>
                    <li>d'un dommage direct ou indirect lié à l'accès au Site, à son indisponibilité ou à l'utilisation des informations qu'il contient ;</li>
                    <li>de la présence éventuelle d'un virus ou d'un autre élément nuisible et de ses conséquences.</li>
                </ul>

                <h2 id="rgpd">7. Données personnelles</h2>
                <p>
                    Le Site ne comporte pas de formulaire. Les informations que vous communiquez volontairement par
                    téléphone, WhatsApp ou e-mail servent uniquement à répondre à votre demande, à établir un devis et
                    à réaliser l'intervention.
                </p>
                <p>
                    Conformément au Règlement (UE) 2016/679 et à la loi n° 78-17 du 6 janvier 1978 modifiée, vous
                    disposez d'un droit d'accès, de rectification, d'effacement, de limitation, d'opposition et de
                    portabilité de vos données. Pour l'exercer, écrivez à
                    <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a> ou à l'adresse de l'entreprise.
                    Une réponse vous est apportée sous 30 jours.
                </p>

                <h2 id="cookies">8. Cookies et mesure d'audience</h2>
                <p>
                    Le Site utilise des cookies techniques nécessaires à son fonctionnement et un outil de mesure
                    d'audience (Google Analytics). Vous pouvez configurer votre navigateur pour bloquer ou supprimer ces
                    cookies.
                </p>

                <h2 id="liens">9. Liens hypertextes</h2>
                <p>
                    Le Site contient des liens vers d'autres sites sur lesquels l'éditeur n'exerce aucun contrôle et
                    dont il ne peut être tenu responsable du contenu.
                </p>

                <h2 id="droit">10. Droit applicable</h2>
                <p>
                    Les présentes conditions sont régies par le droit français. Tout litige relève de la compétence
                    exclusive des tribunaux du ressort de la cour d'appel de Paris.
                </p>
            </article>
        </div>
    </section>
@endsection
