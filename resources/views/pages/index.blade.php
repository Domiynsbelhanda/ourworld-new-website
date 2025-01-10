@extends('layouts.apps')

@section('title')
    Accueil
@endsection

@section('content')
            <!-- banner -->
            <section class="mil-banner mil-dark-bg">
                <div class="mi-invert-fix">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
                        <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
                        <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
                    </div>

                    <div class="mil-gradient"></div>

                    <div class="container">
                        <div class="mil-banner-content mil-up">

                            <h1 class="mil-muted mil-mb-60"><span class="mil-thin">Un </span> Univers,<br>
                                <span class="mil-thin"> toute votre</span> Créativité.</h1>
                            <div class="row">
                                <div class="col-md-7 col-lg-5">

                                    <p class="mil-light-soft mil-mb-60">
                                        Votre partenaire créatif. Notre équipe crée des
                                        marques, des sites Web et des solutions numériques.
                                    </p>

                                </div>
                            </div>

                            <a href="{{route('services')}}" class="mil-button mil-arrow-place mil-btn-space">
                                <span>CE QUE NOUS FAISONS</span>
                            </a>

                            <a href="{{route('portfolio')}}" class="mil-link mil-muted mil-arrow-place">
                                <span>VOIR NOS REALISATIONS</span>
                            </a>

                            <div class="mil-circle-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300"
                                     enable-background="new 0 0 300 300" xml:space="preserve"
                                     class="mil-ct-svg mil-rotate" data-value="360">
                                        <defs>
                                            <path id="circlePath"
                                                  d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                        </defs>
                                    <circle cx="150" cy="100" r="75" fill="none"/>
                                    <g>
                                        <use xlink:href="#circlePath" fill="none"/>
                                        <text style="letter-spacing: 6.5px">
                                            <!-- circle text -->
                                            <textPath xlink:href="#circlePath">DESCENDRE - DESCENDRE -</textPath>
                                        </text>
                                    </g>
                                    </svg>
                                <a href="#about" class="mil-button mil-arrow-place mil-icon-button mil-arrow-down"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- about -->
            <section id="about">
                <div class="container mil-p-120-30">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-xl-5">

                            <div class="mil-mb-90">
                                <h2 class="mil-up mil-mb-60">A Propos <br>de <span class="mil-thin">Nous.</span></h2>
                                <p class="mil-up mil-mb-30">
                                    Bienvenue chez <b>Our World TKPL</b>, où nous nous efforçons d'être flexibles, connectés et
                                    fiables. Nous offrons des services de conception, développement, marketing,
                                    production vidéo, diffusion en direct et formation, entièrement adaptés à vos
                                    besoins, de manière simple et élégante.
                                </p>

                                <p class="mil-up mil-mb-60">
                                    Notre mission ? C'est simple : proposer une créativité et des services de premier
                                    ordre, sans le prix exorbitant.
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-5">

                            <div class="mil-about-photo mil-mb-90">
                                <div class="mil-lines-place"></div>
                                <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{asset('img/photo/our_world_tkpl_team.jpg')}}" alt="Our World TKPL Equipe" class="mil-scale" data-value-1="1"
                                         data-value-2="1.2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- about end -->

            <!-- services -->
            <section class="mil-dark-bg">
                <div class="mi-invert-fix">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4"
                             style="top: 300px; right: -100px"></div>
                        <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1"
                             style="left: 150px"></div>
                    </div>
                    <div class="container mil-p-120-0">

                        <div class="mil-mb-120">
                            <div class="row">
                                <div class="col-lg-10">

                                    <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">
                                        Des professionnels qui s'efforcent d'aider<br> votre marque à grandir et à progresser.
                                    </span>

                                </div>
                            </div>

                            <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                                <span class="mil-text-image"><img src="{{asset('img/photo/2.jpg')}}" alt="team"></span>
                                <h2 class="mil-h1 mil-muted mil-center">Des Idées <span class="mil-thin">Uniques</span></h2>

                            </div>
                            <div class="mil-complex-text justify-content-center mil-up">

                                <h2 class="mil-h1 mil-muted mil-center">Pour <span class="mil-thin">vous.</span>
                                </h2>
                                <a href="{{route('services')}}" class="mil-services-button mil-button mil-arrow-place"><span>CE QUE NOUS FAISONS</span></a>

                            </div>
                        </div>

                        <div class="row mil-services-grid m-0">
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="#" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Branding et <br>Conception d'identité</h5>
                                    <p class="mil-light-soft mil-mb-30">Notre agence créative est une équipe de professionnels
                                        dédiée à faire croître votre marque.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="#" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Design de sites web <br>et Développement</h5>
                                    <p class="mil-light-soft mil-mb-30">Notre agence créative est une équipe de professionnels
                                        dédiée à faire croître votre marque.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="#" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Publicité et <br>Campagnes marketing</h5>
                                    <p class="mil-light-soft mil-mb-30">Notre agence créative est une équipe de professionnels
                                        dédiée à faire croître votre marque.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="#" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Production LIVE <br>et AudioVisuelle</h5>
                                    <p class="mil-light-soft mil-mb-30">Notre agence créative est une équipe de professionnels
                                        dédiée à faire croître votre marque.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- services end -->

            <!-- partners -->
            <div class="mil-soft-bg">
                <div class="container mil-p-0-120">


                </div>
            </div>
            <!-- partners end -->

{{--            <!-- blog -->--}}
{{--            <section>--}}
{{--                <div class="container mil-p-120-60">--}}
{{--                    <div class="row align-items-center mil-mb-30">--}}
{{--                        <div class="col-lg-6 mil-mb-30">--}}
{{--                            <h3 class="mil-up">Popular Publications:</h3>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 mil-mb-30">--}}
{{--                            <div class="mil-adaptive-right mil-up">--}}
{{--                                <a href="blog.html" class="mil-link mil-dark mil-arrow-place">--}}
{{--                                    <span>View all</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}

{{--                            <a href="publication.html" class="mil-blog-card mil-mb-60">--}}
{{--                                <div class="mil-cover-frame mil-up">--}}
{{--                                    <img src="img/blog/1.jpg" alt="cover">--}}
{{--                                </div>--}}
{{--                                <div class="mil-post-descr">--}}
{{--                                    <div class="mil-labels mil-up mil-mb-30">--}}
{{--                                        <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>--}}
{{--                                        <div class="mil-label mil-upper">may 24 2023</div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="mil-up mil-mb-30">How to Become a Graphic Designer in 10 Simple--}}
{{--                                        Steps</h4>--}}
{{--                                    <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur--}}
{{--                                        adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos--}}
{{--                                        necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus--}}
{{--                                        nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque--}}
{{--                                        explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut--}}
{{--                                        at iure! Totam, a!</p>--}}
{{--                                    <div class="mil-link mil-dark mil-arrow-place mil-up">--}}
{{--                                        <span>Read more</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}

{{--                            <a href="publication.html" class="mil-blog-card mil-mb-60">--}}
{{--                                <div class="mil-cover-frame mil-up">--}}
{{--                                    <img src="img/blog/2.jpg" alt="cover">--}}
{{--                                </div>--}}
{{--                                <div class="mil-post-descr">--}}
{{--                                    <div class="mil-labels mil-up mil-mb-30">--}}
{{--                                        <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>--}}
{{--                                        <div class="mil-label mil-upper">may 24 2023</div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="mil-up mil-mb-30">16 Best Graphic Design Online and Offline Courses</h4>--}}
{{--                                    <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur--}}
{{--                                        adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos--}}
{{--                                        necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus--}}
{{--                                        nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque--}}
{{--                                        explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut--}}
{{--                                        at iure! Totam, a!</p>--}}
{{--                                    <div class="mil-link mil-dark mil-arrow-place mil-up">--}}
{{--                                        <span>Read more</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--            <!-- blog end -->--}}


@endsection
