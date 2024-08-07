@extends('layouts.apps')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="slider-wrapper">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img src="{{asset('demos/sliderbg_04.png')}}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="left top"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title customin customout start" data-x="left" data-hoffset="100"
                             data-y="60"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">OUR
                        </div>
                        <div class="tp-caption mini_title customin customout start" data-x="left" data-hoffset="330"
                             data-y="290"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="900" data-easing="Back.easeInOut" data-endspeed="300">
                            Light Up Your <span>WORLD.</span>
                        </div>
                        <div class="tp-caption customin customout" data-x="left" data-hoffset="100" data-y="150"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="700" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" style="z-index: 3"><img src="demos/sliderlogo_01.png"
                                                                                    alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img src="{{asset('demos/sliderbg_03.jpg')}}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="left top"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title2 customin customout start" data-x="left" data-hoffset="60"
                             data-y="180"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">BOOSTEZ
                            VOTRE CARRIERE <br>
                            AJOUTER UN PLUS <br> A VOS CONNAISSANCES.
                        </div>
                        <div class="tp-caption customin customout" data-x="right" data-hoffset="-60" data-y="bottom"
                             data-voffset="-20"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="700" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" style="z-index: 3"><img
                                src="{{asset('demos/slidergrowth_01.png')}}" alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="5000">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('demos/slider_accompagnement.png')}}" alt="video_business"
                             data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption big_title_onepage skewfromleft customout" data-x="center"
                             data-hoffset="0"
                             data-y="top" data-voffset="130"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="1300" data-easing="Power4.easeOut" data-endspeed="300"
                             data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 6">NOUS ACCOMPAGNONS
                            VOTRE
                            <span>ENTREPRISE:</span>
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption small_thin_grey1 customin customout" data-x="385" data-y="260"
                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="2000" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><span><i
                                    class="fa fa-bullseye"></i></span>
                            MARKETING & COMMUNICATION
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption small_thin_grey1 customin customout" data-x="410" data-y="290"
                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="2400" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><span><i
                                    class="fa fa-bullseye"></i></span>
                            DESGIN, MULTIMEDIAS & COUVERTURE LIVE
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption small_thin_grey1 customin customout" data-x="430" data-y="320"
                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="2600" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><span><i
                                    class="fa fa-bullseye"></i></span>
                            DEVELOPPEMENT WEB & MOBILE
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption small_thin_grey1 customin customout" data-x="450" data-y="350"
                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="2800" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><span><i
                                    class="fa fa-bullseye"></i></span>
                            MANAGEMENT & DATA ANALYSIS
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption small_thin_grey1 customin customout" data-x="470" data-y="380"
                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="3000" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 8"><span><i
                                    class="fa fa-bullseye"></i></span>
                            FORMATION & CONSULTING
                        </div>
                        <!-- LAYER NR. 7 -->
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img src="{{asset('demos/sliderlive_02.png')}}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="left top"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title  customin customout start" data-x="left" data-hoffset="30"
                             data-y="170"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">
                            COUVERTURE
                            <span>LIVE</span>
                        </div>
                        <div class="tp-caption small_title2 customin customout start" data-x="left" data-hoffset="30"
                             data-y="236"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1300" data-start="800" data-easing="Back.easeInOut" data-endspeed="300">
                            Rejoignez-nous pour une couverture live,
                            <br>complète et immersive de vos événement.
                        </div>
                        <div class="tp-caption small_title  customin customout start" data-x="left" data-hoffset="30"
                             data-y="320"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1600" data-start="1100" data-easing="Back.easeInOut" data-endspeed="300"><a
                                href="#" class="btn btn-primary btn-lg">EN SAVOIR PLUS</a>
                        </div>
                        <div class="tp-caption customin customout" data-x="right" data-hoffset="120" data-y="bottom"
                             data-voffset="0"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="700" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" style="z-index: 3">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div><!-- end slider-wrapper -->

    <div class="white-wrapper">
        <div class="container">
            <div class="messagebox">
                <h2>Développez
                    <mark class="rotate"> Votre Image, Des Compétences, Votre Visibilité, Votre Carrière</mark>
                    avec des possibilités infinies
                </h2>
                <p class="lead">Nous sommes Our World TKPL et nous créons des choses vraiment belles et étonnantes.
                    Profitez
                    de nos services pour développer votre image, acquérir de nouvelles compétences, accroître votre
                    visibilité et propulser votre carrière. Ne manquez pas cette incroyable opportunité !
                </p>
            </div><!-- end messagebox -->
        </div><!-- end container -->
    </div><!-- end white-wrapper -->

    <div class="grey-wrapper jt-shadow padding-top">
        <div class="make-center wow fadeInUp">
            <img src="{{asset('demos/banner.png')}}" alt="" class="img-responsive">
        </div>
    </div><!-- end white-wrapper -->

    <div id="servicess" class="white-wrapper">
        <div class="container">
            <div class="services_vertical">
                <div class="col-lg-4 first">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-4x"></i>
                        </div>
                        <h3>Marketing & Communication</h3>
                        <p>
                            Notre équipe vous accompagne pour développer une stratégie marketing personnalisée et
                            efficace. Grâce à notre expertise, nous créons des solutions adaptées à vos besoins, pour
                            optimiser votre communication et atteindre vos objectifs avec succès.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-picture-o fa-4x"></i>
                        </div>
                        <h3>Design et Multimedias</h3>
                        <p>
                            Notre service de design et multimédias vous offre des solutions créatives et innovantes pour
                            valoriser votre image de marque. Nous vous accompagnons dans la conception graphique, la
                            création de contenus visuels et multimédias, afin de captiver et engager votre audience.
                            Faites-nous confiance pour transformer vos idées en œuvres visuelles percutantes et
                            mémorables.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 last">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-video-camera fa-4x"></i>
                        </div>
                        <h3>Couverture Live</h3>
                        <p>
                            Notre service de couverture live vous permet de diffuser vos événements en temps réel,
                            assurant une expérience immersive et interactive pour votre audience. Nous vous accompagnons
                            à chaque étape, de la planification à la diffusion, pour garantir un streaming de haute
                            qualité. Faites confiance à notre expertise pour capturer et partager vos moments importants
                            en direct.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 first">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-laptop fa-4x"></i>
                        </div>
                        <h3>Développement Web & Mobile</h3>
                        <p>
                            Notre service de développement web et mobile offre des solutions sur mesure pour créer des
                            applications performantes et intuitives. Nous vous accompagnons tout au long du processus,
                            de la conception à la mise en ligne, en passant par le développement et les tests. Faites
                            confiance à notre expertise pour développer des plateformes adaptées à vos besoins et
                            accessibles sur tous les appareils.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-bar-chart-o fa-4x"></i>
                        </div>
                        <h3>Management & Data Analysis</h3>
                        <p>
                            Notre équipe spécialisée en Management et Data Analysis vous offre des solutions avancées
                            pour transformer vos données en informations stratégiques. Que vous cherchiez à optimiser
                            vos processus, à prendre des décisions éclairées ou à prévoir les tendances futures, nous
                            sommes là pour vous accompagner à chaque étape.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 last">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-cogs fa-4x"></i>
                        </div>
                        <h3>Formation & Consulting</h3>
                        <p>
                            Notre service de Formation & Consulting offre des programmes personnalisés pour développer
                            vos compétences et optimiser vos stratégies. Que vous recherchiez à renforcer les capacités
                            de votre équipe ou à améliorer votre efficacité opérationnelle, notre expertise vous guide
                            vers le succès.
                        </p>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="clearfix"></div>
            </div><!-- end services_vertical -->
            <div class="clearfix"></div>
        </div><!-- end container -->
    </div><!-- end transparent-bg -->


    <div id="videobgfull">
        <div class="videooverlay">
            <div class="container">
                <div class="general-title">
                    <h2>Boostez Votre Carrière</h2>
                    <hr>
                    <p class="lead">Améliorez votre carrière avec les formations les plus demandées</p>
                </div><!-- end general title -->

                <div class="custom-services">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">
                        <div class="ch-item">
                            <div class="ch-info-wrap">
                                <div class="ch-info" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                    <img style="width: 95%!important; object-fit: scale-down" src="{{asset('images/power-bi.png')}}" alt="power-bi-logo">
                                </div><!-- end ch-info -->
                            </div><!-- end ch-info-wrap -->
                        </div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="ch-item">
                                <div class="ch-info-wrap">
                                    <div class="ch-info" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                        <img style="height: 95%!important; object-fit: scale-down" src="{{asset('images/pmp.png')}}" alt="pmp-logo">
                                    </div><!-- end ch-info -->
                                </div><!-- end ch-info-wrap -->
                            </div><!-- end ch-item -->
                        </div><!-- end col-sm-3 -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="ch-item">
                            <div class="ch-info-wrap">
                                <div class="ch-info" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                    <img style="height: 95%!important; object-fit: scale-down" src="{{asset('images/MOS_Excel.png')}}" alt="excel-specialist-logo">
                                </div><!-- end ch-info -->
                            </div><!-- end ch-info-wrap -->
                        </div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="ch-item">
                            <div class="ch-info-wrap">
                                <div class="ch-info" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                    <img style="height: 95%!important; object-fit: scale-down" src="{{asset('images/photoshop.png')}}" alt="photoshop-logo">
                                </div><!-- end ch-info -->
                            </div><!-- end ch-info-wrap -->
                        </div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->

                </div><!-- end row -->

            </div><!-- end container -->
        </div><!-- end overlay -->
    </div>

    <section class="white-wrapper">
        <div class="container">

            <div class="general-title">
                <h2>Nos Recents Projets</h2>
                <hr>
            </div><!-- end general title -->

            <div class="text-center clearfix">
                <nav class="portfolio-filter">
                    <ul>
                        <li><a class="btn btn-primary" href="#" data-filter="*"><span></span>Tous</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".photography">Photographie</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".app-design">Videographie</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".logo">Couverture Live</a></li>
                    </ul>
                </nav>
            </div><!-- end text-center -->
        </div><!-- end container -->

        <div class="masonry_wrapper">
            <div class="item entry item-h2 item-w2 photography">
                <a href="#"><img src="demos/portfolio_masonry_01.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 graphic-design">
                <a href="#"><img src="demos/portfolio_masonry_02.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 item-w2 photography logo">
                <a href="#"><img src="demos/portfolio_masonry_03.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 app-design">
                <a href="#"><img src="demos/portfolio_masonry_04.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 item-w2 app-design logo">
                <a href="#"><img src="demos/portfolio_masonry_05.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 app-design">
                <a href="#"><img src="demos/portfolio_masonry_06.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->

            <div class="item entry item-h2 photography">
                <a href="#"><img src="demos/portfolio_masonry_07.jpg" alt=""></a>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st btn btn-default" rel="bookmark" href="#">View
                            project</a>
                        <h3>Best Apple Mockups</h3>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end item -->
        </div>

        <div class="clearfix"></div>

        <div class="buttons padding-top text-center">
            <a href="portfolio-masonry.html" class="btn btn-primary btn-lg" title="">VOIR NOS PROJETS</a>
        </div>

    </section><!-- end white-wrapper -->
@endsection
