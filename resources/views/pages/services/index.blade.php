@extends('layouts.apps')

@section('title')
    Services
@endsection

@section('content')
    <!-- bannière -->
    <div class="mil-dark-bg">
        <div class="mil-inner-banner">
            <div class="mi-invert-fix">
                <div class="mil-banner-content mil-up">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-4 mil-scale" data-value-1="6" data-value-2="1.4"></div>
                    </div>
                    <div class="container">
                        <ul class="mil-breadcrumbs mil-light mil-mb-60">
                            <li><a href="{{route('home')}}">Page d'accueil</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                        </ul>
                        <h1 class="mil-muted mil-mb-60">C'est ce que nous faisons <span class="mil-thin">le mieux</span><br></h1>
                        <a href="#services" class="mil-link mil-accent mil-arrow-place mil-down-arrow">
                            <span>Nos services</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin de bannière -->

        <!-- services -->
        <section id="services">
            <div class="mi-invert-fix">
                <div class="container mil-p-120-60">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mil-lines-place mil-light"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <!-- Branding et Conception d'Identité -->
                                <div class="col-md-6 col-lg-6">
                                    <a class="mil-service-card-lg mil-accent-cursor mil-offset">
                                        <h4 class="mil-muted mil-up mil-mb-30">Branding et <br>Conception d'Identité</h4>
                                        <p class="mil-descr mil-light-soft mil-up mil-mb-30">Notre équipe se spécialise dans la création de l'identité visuelle de votre marque, en mettant l'accent sur l'unicité et l'impact visuel qui renforcent votre position sur le marché.</p>
                                        <ul class="mil-service-list mil-light mil-mb-30">
                                            <li class="mil-up">Création de logos</li>
                                            <li class="mil-up">Identité visuelle cohérente</li>
                                            <li class="mil-up">Stratégies de marque</li>
                                            <li class="mil-up">Wireframing et Audits UX</li>
                                        </ul>
                                    </a>
                                </div>

                                <!-- Conception et Développement de Sites Web -->
                                <div class="col-md-6 col-lg-6">
                                    <a class="mil-service-card-lg mil-accent-cursor">
                                        <h4 class="mil-muted mil-up mil-mb-30">Conception et <br>Développement de Sites Web</h4>
                                        <p class="mil-descr mil-light-soft mil-up mil-mb-30">Nous vous accompagnons dans le développement de sites web fonctionnels et esthétiques qui optimisent l'expérience utilisateur, renforcent votre image et convertissent vos visiteurs en clients.</p>
                                        <ul class="mil-service-list mil-light mil-mb-30">
                                            <li class="mil-up">Design et développement front-end</li>
                                            <li class="mil-up">Optimisation de l'UX/UI</li>
                                            <li class="mil-up">Sites web réactifs</li>
                                            <li class="mil-up">Développement mobile</li>
                                        </ul>
                                    </a>
                                </div>

                                <!-- Publicité et Campagnes Marketing -->
                                <div class="col-md-6 col-lg-6">
                                    <a class="mil-service-card-lg mil-accent-cursor mil-offset">
                                        <h4 class="mil-muted mil-up mil-mb-30">Publicité et <br>Campagnes Marketing</h4>
                                        <p class="mil-descr mil-light-soft mil-up mil-mb-30">Nous créons des campagnes marketing efficaces qui maximisent l'impact de votre message et optimisent votre retour sur investissement grâce à une stratégie ciblée et adaptée à vos besoins.</p>
                                        <ul class="mil-service-list mil-light mil-mb-30">
                                            <li class="mil-up">Publicité sur les réseaux sociaux</li>
                                            <li class="mil-up">Campagnes PPC</li>
                                            <li class="mil-up">E-mail marketing</li>
                                            <li class="mil-up">Création de contenus publicitaires</li>
                                        </ul>
                                    </a>
                                </div>

                                <!-- Production LIVE et AudioVisuelle -->
                                <div class="col-md-6 col-lg-6">
                                    <a href="{{route('services.lives')}}" class="mil-service-card-lg mil-more mil-accent-cursor">
                                        <h4 class="mil-muted mil-up mil-mb-30">Production LIVE <br>et AudioVisuelle</h4>
                                        <p class="mil-descr mil-light-soft mil-up mil-mb-30">Nous produisons des événements en direct et du contenu audiovisuel qui captivent votre audience, en intégrant les dernières technologies pour des expériences inoubliables.</p>
                                        <ul class="mil-service-list mil-light mil-mb-30">
                                            <li class="mil-up">Captation en direct</li>
                                            <li class="mil-up">Montage vidéo et post-production</li>
                                            <li class="mil-up">Effets visuels (VFX)</li>
                                            <li class="mil-up">Scénarisation et storyboarding</li>
                                            <li class="mil-up">Production sonore</li>
                                        </ul>
                                        <div class="mil-link mil-accent mil-arrow-place mil-up">
                                            <span>En Savoir Plus</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- fin des services -->



    @include('components._call_to_action')
@endsection
