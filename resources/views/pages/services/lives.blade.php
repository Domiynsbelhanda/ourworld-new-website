@extends('layouts.apps')

@section('title')
    Services / Lives
@endsection

@section('content')
    <!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="mil-banner-content mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-mb-60">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('services.lives')}}">Production Live & AudioVisuelle</a></li>
                </ul>
                <h1 class="mil-mb-60">Production <span class="mil-thin">Live</span><br> et <span class="mil-thin">Audiovisuelle</span>
                </h1>
                <a href="#service" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>A Propos du Service</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- service -->
    <section id="service">
        <div class="container mil-p-120-90">
            <div class="row justify-content-between">
                <div class="col-lg-4 mil-relative mil-mb-90">

                    <h4 class="mil-up mil-mb-30">Votre <span class="mil-thin">Approche</span> <br>et <span
                            class="mil-thin">Spécificités</span></h4>
                    <p class="mil-up mil-mb-30">Dans le domaine de la Production LIVE et Audiovisuelle, notre approche
                        se concentre sur la création d'expériences immersives qui captivent le public et racontent une
                        histoire à travers des visuels et du son de haute qualité.</p>

                </div>
                <div class="col-lg-6">

                    <div class="mil-accordion-group mil-up">
                        <div class="mil-accordion-menu">

                            <p class="mil-accordion-head">Captation en direct</p>

                            <div class="mil-symbol mil-h3">
                                <div class="mil-plus">+</div>
                                <div class="mil-minus">-</div>
                            </div>

                        </div>
                        <div class="mil-accordion-content">
                            <p class="mil-mb-30">La captation en direct est au cœur de nos productions. Que ce soit pour
                                des concerts, des conférences ou des événements sportifs, nous garantissons une
                                transmission en haute qualité, captivant l’audience où qu’elle se trouve.</p>

                            <p class="mil-mb-30">Nous utilisons les dernières technologies en streaming et diffusion
                                pour assurer une expérience visuelle et sonore optimale pour les spectateurs connectés
                                ou présents sur place.</p>
                        </div>
                    </div>

                    <div class="mil-accordion-group mil-up">
                        <div class="mil-accordion-menu">

                            <p class="mil-accordion-head">Montage Vidéo et Post-production</p>

                            <div class="mil-symbol mil-h3">
                                <div class="mil-plus">+</div>
                                <div class="mil-minus">-</div>
                            </div>

                        </div>
                        <div class="mil-accordion-content">
                            <p class="mil-mb-30">Le montage vidéo est une étape cruciale pour transformer des séquences
                                brutes en un récit visuellement saisissant. Nous apportons notre expertise en
                                post-production pour soigner chaque détail : montage, étalonnage, ajout d'effets
                                spéciaux et mixage sonore.</p>
                            <p class="mil-mb-30">Notre objectif est de livrer des vidéos qui capturent l’essence de
                                votre événement ou de votre marque avec une qualité cinématographique.</p>
                        </div>
                    </div>

                    <div class="mil-accordion-group mil-up">
                        <div class="mil-accordion-menu">

                            <p class="mil-accordion-head">Effets Visuels (VFX)</p>

                            <div class="mil-symbol mil-h3">
                                <div class="mil-plus">+</div>
                                <div class="mil-minus">-</div>
                            </div>

                        </div>
                        <div class="mil-accordion-content">
                            <p class="mil-mb-30">Les effets visuels (VFX) ajoutent une dimension unique à vos
                                productions. Nous intégrons des effets créatifs, simulations et animations pour
                                dynamiser vos vidéos et captiver votre public.</p>
                            <p class="mil-mb-30">Qu'il s'agisse d'intros percutantes, d'effets cinématographiques ou de
                                transitions stylisées, nos spécialistes VFX apportent une touche professionnelle et
                                innovante à chaque projet.</p>
                        </div>
                    </div>

                    <div class="mil-accordion-group mil-up">
                        <div class="mil-accordion-menu">

                            <p class="mil-accordion-head">Scénarisation et Storyboarding</p>

                            <div class="mil-symbol mil-h3">
                                <div class="mil-plus">+</div>
                                <div class="mil-minus">-</div>
                            </div>

                        </div>
                        <div class="mil-accordion-content">
                            <p class="mil-mb-30">Un bon contenu audiovisuel commence par une histoire forte. Nous
                                collaborons avec vous pour élaborer des scénarios captivants et des storyboards
                                détaillés qui posent les bases de vos productions visuelles.</p>
                            <p class="mil-mb-30">Cette étape permet de clarifier votre vision et de garantir une
                                exécution fluide lors de la production et la post-production.</p>
                        </div>
                    </div>

                    <div class="mil-accordion-group mil-up">
                        <div class="mil-accordion-menu">

                            <p class="mil-accordion-head">Production sonore</p>

                            <div class="mil-symbol mil-h3">
                                <div class="mil-plus">+</div>
                                <div class="mil-minus">-</div>
                            </div>

                        </div>
                        <div class="mil-accordion-content">
                            <p class="mil-mb-30">La qualité sonore est essentielle pour plonger votre audience dans
                                l’ambiance souhaitée. Nous offrons des services de prise de son, mixage, design sonore
                                et mastering pour sublimer chaque production audiovisuelle.</p>
                            <p class="mil-mb-30">Nos équipements de pointe et notre expertise technique garantissent un
                                rendu impeccable et professionnel.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- service end -->


    <!-- prices -->
    <section class="mil-dark-bg">
        <div class="mi-invert-fix">
            <div class="container mil-p-120-120">
                <div class="mil-center">
                    <h2 class="mil-muted mil-up mil-mb-30">Tarification <span class="mil-thin">pour</span> <br>vos productions <span class="mil-thin">lives</span></h2>
                </div>

                <a class="mil-price-card mil-accent-cursor mil-up">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="mil-price-number mil-mb-30"><span class="mil-muted mil-thin">heure / $</span><span
                                    class="mil-accent">150</span></div>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="mil-muted mil-mb-30">Pack<br> Basique</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="mil-light-soft mil-mb-30">
                                - A Partir de 2 (deux) heures <br>
                                - Diffusion HD
                                - 2 Cameras (semi-professionnelle et professionnelle)<br>
                                - Une seule plateforme de diffusion <br>
                                - Eclairage Standard <br>
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="mil-adaptive-right mil-mb-30">
                                <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="mil-price-card mil-accent-cursor mil-up">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="mil-price-number mil-mb-30"><span class="mil-muted mil-thin">heure / $</span><span
                                    class="mil-accent">250</span></div>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="mil-muted mil-mb-30">Pack <br> Standard</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="mil-light-soft mil-mb-30">
                                - A Partir d'une (1) heure <br>
                                - Diffusion Full HD
                                - 3 Cameras (1 semi-professionnelle et 2 professionnelles)<br>
                                - 2 plateformes de diffusion <br>
                                - Eclairage Standard <br>
                                - Vidéo Short de l'évènement (à la demande)
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="mil-adaptive-right mil-mb-30">
                                <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="mil-price-card mil-accent-cursor mil-up mil-mb-60">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="mil-price-number mil-mb-30"><span class="mil-muted mil-thin">heure/$</span><span
                                    class="mil-accent">400</span></div>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="mil-muted mil-mb-30">Pack <br> Premium</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="mil-light-soft mil-mb-30">
                                - A Partir d'une (1) heure <br>
                                - Diffusion Ultra HD/4K/8K
                                - +4 Cameras (4K/8K)<br>
                                - +3 plateformes de diffusion <br>
                                - Eclairage de scène <br>
                                - Vidéo Short de l'évènement
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="mil-adaptive-right mil-mb-30">
                                <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="mil-center">
                    <a href="https://wa.me/243996852377?text=Bonjour,%20je%20vous%20contact%20depuis%20le%20site%20web%20de%20Our%20World%20TKPL%20pour%20louer%20vos%20services." class="mil-button  mil-arrow-place">
                        <span>Prendre Contact</span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- prices end -->

@endsection
