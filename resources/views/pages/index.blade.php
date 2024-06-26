@extends('layouts.apps')

@section('title') Accueil @endsection

@section('content')
    <div class="slider-wrapper">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img src="{{asset('demos/sliderbg_04.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="left top"
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
                             data-endeasing="Power4.easeIn" style="z-index: 3"><img src="demos/sliderlogo_01.png" alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <img src="{{asset('demos/sliderbg_03.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="left top"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title2 customin customout start" data-x="left" data-hoffset="60"
                             data-y="180"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">BOOSTEZ VOTRE CARRIERE <br>
                            AJOUTER UN PLUS <br> A VOS CONNAISSANCES.
                        </div>
                        <div class="tp-caption customin customout" data-x="right" data-hoffset="-60" data-y="bottom"
                             data-voffset="-20"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="700" data-easing="Power4.easeOut" data-endspeed="500"
                             data-endeasing="Power4.easeIn" style="z-index: 3"><img src="{{asset('demos/slidergrowth_01.png')}}" alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="5000">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('demos/slider_accompagnement.png')}}" alt="video_business" data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption big_title_onepage skewfromleft customout" data-x="center" data-hoffset="0"
                             data-y="top" data-voffset="130"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800" data-start="1300" data-easing="Power4.easeOut" data-endspeed="300"
                             data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 6">NOUS ACCOMPAGNONS VOTRE
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
                        <img src="{{asset('demos/sliderlive_02.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="left top"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title  customin customout start" data-x="left" data-hoffset="30"
                             data-y="170"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">COUVERTURE
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

{{--    <div class="white-wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="messagebox">--}}
{{--                <h2>Jollyany is Simple,--}}
{{--                    <mark class="rotate">Powerful Theme, Amazing Theme, Superb Theme</mark>--}}
{{--                    With Endless Possibilties--}}
{{--                </h2>--}}
{{--                <p class="lead">Hey Everyone! We are Jollyany and we make really beautiful and amazing stuff. This can be--}}
{{--                    used to describe what you do,<br>--}}
{{--                    how you do it, & who you do it for. Don’t Miss the Awesome Theme</p>--}}
{{--                <a class="btn btn-primary btn-lg" href="#">Purchase Now</a> <a class="btn btn-dark btn-lg" href="#">Tell Me--}}
{{--                    More!</a>--}}
{{--            </div><!-- end messagebox -->--}}
{{--        </div><!-- end container -->--}}
{{--    </div><!-- end white-wrapper -->--}}

{{--    <div class="grey-wrapper jt-shadow padding-top">--}}
{{--        <div class="make-center wow fadeInUp">--}}
{{--            <img src="demos/banner.png" alt="" class="img-responsive">--}}
{{--        </div>--}}
{{--    </div><!-- end white-wrapper -->--}}

{{--    <div class="white-wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="services_vertical">--}}
{{--                <div class="col-lg-4 first">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-lightbulb-o fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Aweosme Design Layout</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-gear fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Drag and Drop Builder</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="col-lg-4 last">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-tablet fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Retina Ready Display</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="col-lg-4 first">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-folder-o fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Next-level features</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-google-plus fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Social Media Friendly</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="col-lg-4 last">--}}
{{--                    <div class="service_vertical_box">--}}
{{--                        <div class="service-icon">--}}
{{--                            <i class="fa fa-bars fa-4x"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Responsive Web Design</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus--}}
{{--                            adipiscing aliquam. </p>--}}
{{--                        <a href="#" class="readmore">Read More...</a>--}}
{{--                    </div><!-- end service_vertical_box -->--}}
{{--                </div><!-- end col-lg-4 -->--}}
{{--                <div class="clearfix"></div>--}}
{{--            </div><!-- end services_vertical -->--}}
{{--            <div class="clearfix"></div>--}}
{{--            <div class="calloutbox bgdark">--}}
{{--                <div class="col-lg-10">--}}
{{--                    <h2><span>JOLLYANY</span>, you ever neededto build powerful & trendy website!</h2>--}}
{{--                    <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at--}}
{{--                        semper.</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-2">--}}
{{--                    <a class="btn pull-right btn-default btn-lg margin-top" href="#">Purchase now!</a>--}}
{{--                </div>--}}
{{--            </div><!-- end messagebox -->--}}
{{--        </div><!-- end container -->--}}
{{--    </div><!-- end transparent-bg -->--}}

{{--    <div class="grey-wrapper jt-shadow">--}}
{{--        <div class="container">--}}
{{--            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">--}}
{{--                <div class="widget">--}}
{{--                    <h3>WHY <span>JOLLYANY</span> IS SIMPLE & VERY POWERFUL?</h3>--}}
{{--                    <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt--}}
{{--                        tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget--}}
{{--                        eros.</p>--}}
{{--                    <div id="accordion-first" class="clearfix">--}}
{{--                        <div class="accordion" id="accordion2">--}}
{{--                            <div class="accordion-group">--}}
{{--                                <div class="accordion-heading">--}}
{{--                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"--}}
{{--                                       href="#collapseOne">--}}
{{--                                        <em class="fa fa-plus icon-fixed-width"></em>Jollyany is fully responsive and--}}
{{--                                        perfectly fits on any Mobile device.--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div id="collapseOne" class="accordion-body collapse">--}}
{{--                                    <div class="accordion-inner">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
{{--                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
{{--                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="accordion-group">--}}
{{--                                <div class="accordion-heading">--}}
{{--                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"--}}
{{--                                       href="#collapseTwo">--}}
{{--                                        <em class="fa fa-plus icon-fixed-width"></em>Jollyany is automatically creates--}}
{{--                                        retina ready images.--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div id="collapseTwo" class="accordion-body collapse">--}}
{{--                                    <div class="accordion-inner">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
{{--                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
{{--                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="accordion-group">--}}
{{--                                <div class="accordion-heading">--}}
{{--                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"--}}
{{--                                       href="#collapseThree">--}}
{{--                                        <em class="fa fa-plus icon-fixed-width"></em>Jollyany contains 365 Retina Ready Font--}}
{{--                                        Awesome icons.--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div id="collapseThree" class="accordion-body collapse">--}}
{{--                                    <div class="accordion-inner">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
{{--                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
{{--                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="accordion-group">--}}
{{--                                <div class="accordion-heading">--}}
{{--                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"--}}
{{--                                       href="#collapseFour">--}}
{{--                                        <em class="fa fa-plus icon-fixed-width"></em>Jollyany is Powerful Admin Panel--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div id="collapseFour" class="accordion-body collapse">--}}
{{--                                    <div class="accordion-inner">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
{{--                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
{{--                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- end accordion -->--}}
{{--                    </div><!-- end accordion first -->--}}
{{--                </div><!-- end widget -->--}}
{{--            </div><!-- end col-lg-6 -->--}}

{{--            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">--}}
{{--                <div class="widget">--}}
{{--                    <h3>OUR <span>POWERFUL</span> SKILLS!</h3>--}}
{{--                    <div id="skills" class="skills_bar">--}}
{{--                        <small>Adobe Photoshop</small>--}}
{{--                        <div class="progress wow slideInLeft">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"--}}
{{--                                 aria-valuemax="100" style="width: 70%;">--}}
{{--                                <span class="skill_count">90%</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end progress -->--}}
{{--                        <small>HTML5 & CSS3</small>--}}
{{--                        <div class="progress wow slideInLeft">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"--}}
{{--                                 aria-valuemax="100" style="width: 80%;">--}}
{{--                                <span class="skill_count">80%</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end progress -->--}}
{{--                        <small>WordPress</small>--}}
{{--                        <div class="progress wow slideInLeft">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"--}}
{{--                                 aria-valuemax="100" style="width: 75%;">--}}
{{--                                <span class="skill_count">90%</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end progress -->--}}
{{--                        <small>Customer Support</small>--}}
{{--                        <div class="progress wow slideInLeft">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"--}}
{{--                                 aria-valuemax="100" style="width: 90%;">--}}
{{--                                <span class="skill_count">90%</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end progress -->--}}
{{--                        <small>Shopify Design</small>--}}
{{--                        <div class="progress wow slideInLeft">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0"--}}
{{--                                 aria-valuemax="100" style="width: 78%;">--}}
{{--                                <span class="skill_count">80%</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end progress -->--}}
{{--                    </div><!-- end skills_bar -->--}}
{{--                </div><!-- end widget -->--}}
{{--            </div><!-- end col-lg-6 -->--}}
{{--        </div><!-- end container -->--}}
{{--    </div><!-- end grey-wrapper -->--}}

{{--    <div id="videobgfull">--}}
{{--        <div class="videooverlay">--}}
{{--            <div class="container">--}}
{{--                <div class="general-title">--}}
{{--                    <h2>Our Working Process</h2>--}}
{{--                    <hr>--}}
{{--                    <p class="lead">These is the team behind Jollyany Agency</p>--}}
{{--                </div><!-- end general title -->--}}

{{--                <div class="custom-services">--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">--}}
{{--                        <div class="ch-item">--}}
{{--                            <div class="ch-info-wrap">--}}
{{--                                <div class="ch-info">--}}
{{--                                    <div class="ch-info-front">--}}
{{--                                        <i class="fa fa-print fa-4x"></i>--}}
{{--                                        <h3>Print Ready</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="ch-info-back">--}}
{{--                                        <h3>RESULTS</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end ch-info -->--}}
{{--                            </div><!-- end ch-info-wrap -->--}}
{{--                        </div><!-- end ch-item -->--}}
{{--                    </div><!-- end col-sm-3 -->--}}

{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                        <div class="ch-item">--}}
{{--                            <div class="ch-info-wrap">--}}
{{--                                <div class="ch-info">--}}
{{--                                    <div class="ch-info-front">--}}
{{--                                        <i class="fa fa-lightbulb-o fa-4x"></i>--}}
{{--                                        <h3>Planning</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="ch-info-back">--}}
{{--                                        <h3>RESULTS</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end ch-info -->--}}
{{--                            </div><!-- end ch-info-wrap -->--}}
{{--                        </div><!-- end ch-item -->--}}
{{--                    </div><!-- end col-sm-3 -->--}}

{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                        <div class="ch-item">--}}
{{--                            <div class="ch-info-wrap">--}}
{{--                                <div class="ch-info">--}}
{{--                                    <div class="ch-info-front">--}}
{{--                                        <i class="fa fa-bar-chart-o fa-4x"></i>--}}
{{--                                        <h3>Built with care</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="ch-info-back">--}}
{{--                                        <h3>RESULTS</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end ch-info -->--}}
{{--                            </div><!-- end ch-info-wrap -->--}}
{{--                        </div><!-- end ch-item -->--}}
{{--                    </div><!-- end col-sm-3 -->--}}

{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 last">--}}
{{--                        <div class="ch-item">--}}
{{--                            <div class="ch-info-wrap">--}}
{{--                                <div class="ch-info">--}}
{{--                                    <div class="ch-info-front">--}}
{{--                                        <i class="fa fa-html5 fa-4x"></i>--}}
{{--                                        <h3>Clean and Simple</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="ch-info-back">--}}
{{--                                        <h3>RESULTS</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end ch-info -->--}}
{{--                            </div><!-- end ch-info-wrap -->--}}
{{--                        </div><!-- end ch-item -->--}}
{{--                    </div><!-- end col-sm-3 -->--}}
{{--                </div><!-- end row -->--}}

{{--            </div><!-- end container -->--}}
{{--        </div><!-- end overlay -->--}}
{{--    </div>--}}

{{--    <section class="white-wrapper">--}}
{{--        <div class="container">--}}

{{--            <div class="general-title">--}}
{{--                <h2>Latest Projects</h2>--}}
{{--                <hr>--}}
{{--            </div><!-- end general title -->--}}

{{--            <div class="text-center clearfix">--}}
{{--                <nav class="portfolio-filter">--}}
{{--                    <ul>--}}
{{--                        <li><a class="btn btn-primary" href="#" data-filter="*"><span></span>All</a></li>--}}
{{--                        <li><a class="btn btn-primary" href="#" data-filter=".photography">Photography</a></li>--}}
{{--                        <li><a class="btn btn-primary" href="#" data-filter=".app-design">App Design</a></li>--}}
{{--                        <li><a class="btn btn-primary" href="#" data-filter=".logo">Logo</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div><!-- end text-center -->--}}
{{--        </div><!-- end container -->--}}

{{--        <div class="masonry_wrapper">--}}
{{--            <div class="item entry item-h2 item-w2 photography">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_01.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 graphic-design">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_02.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 item-w2 photography logo">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_03.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 app-design">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_04.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 item-w2 app-design logo">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_05.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 app-design">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_06.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}

{{--            <div class="item entry item-h2 photography">--}}
{{--                <a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_07.jpg" alt=""></a>--}}
{{--                <div class="magnifier">--}}
{{--                    <div class="buttons">--}}
{{--                        <a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>--}}
{{--                        <h3>Best Apple Mockups</h3>--}}
{{--                    </div><!-- end buttons -->--}}
{{--                </div><!-- end magnifier -->--}}
{{--            </div><!-- end item -->--}}
{{--        </div>--}}

{{--        <div class="clearfix"></div>--}}

{{--        <div class="buttons padding-top text-center">--}}
{{--            <a href="portfolio-masonry.html" class="btn btn-primary btn-lg" title="">View All Projects</a>--}}
{{--        </div>--}}

{{--    </section><!-- end white-wrapper -->--}}

{{--    <section id="one-parallax" class="parallax" style="background-image: url('demos/parallax_01.jpg');"--}}
{{--             data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">--}}
{{--        <div class="overlay">--}}
{{--            <div class="container">--}}
{{--                <div class="testimonial-widget">--}}
{{--                    <div id="owl-testimonial" class="owl-carousel">--}}
{{--                        <div class="testimonial">--}}
{{--                            <p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with--}}
{{--                                and I have worked with hundreds<br>--}}
{{--                                of them. Thanks for beautiful work, keep it up!</p>--}}
{{--                            <h3>Filiz ÖZER - Jolly Themes</h3>--}}
{{--                        </div><!-- end tweet -->--}}
{{--                        <div class="testimonial">--}}
{{--                            <p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with--}}
{{--                                and I have worked with hundreds<br>--}}
{{--                                of them. Thanks for beautiful work, keep it up!</p>--}}
{{--                            <h3>Na Vicky - Jolly Themes</h3>--}}
{{--                        </div><!-- end tweet -->--}}
{{--                        <div class="testimonial">--}}
{{--                            <p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with--}}
{{--                                and I have worked with hundreds of them. Thanks for beautiful work, keep it up!</p>--}}
{{--                            <h3>James Watson - Envato</h3>--}}
{{--                        </div><!-- end tweet -->--}}
{{--                    </div><!-- end owl-testimonial -->--}}
{{--                </div><!-- end testimonial widget -->--}}
{{--            </div><!-- end container -->--}}
{{--        </div><!-- end overlay -->--}}
{{--    </section><!-- end transparent-bg -->--}}

{{--    <section class="make-bg-full">--}}
{{--        <div class="calloutbox-full-mini nocontainer">--}}
{{--            <div class="long-twitter">--}}
{{--                <p class="lead"><i class="fa fa-twitter"></i> Donec vitae sapien ut libero venenatis faucibus. Nullam quis--}}
{{--                    ante. Etiam sit amet orci eget eros. <a href="#">25 min ago</a></p>--}}
{{--            </div>--}}
{{--        </div><!-- end calloutbox -->--}}
{{--    </section><!-- make bg -->--}}
@endsection
