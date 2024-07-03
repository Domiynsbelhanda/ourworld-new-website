<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <title>@yield('title') | Our World TKPL</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Bootstrap Styles -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('style.css')}}" rel="stylesheet">

        <!-- Carousel Slider -->
        <link href="{{asset('css/owl-carousel.css')}}" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles CSS -->
        <style>
            body {
                font-family: 'Montserrat', sans-serif!important;
            }
        </style>

        <!-- SLIDER ROYAL CSS SETTINGS -->
        <link href="{{asset('royalslider/royalslider.css')}}" rel="stylesheet">
        <link href="{{asset('royalslider/skins/default-inverted/rs-default-inverted.css')}}" rel="stylesheet">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen"/>

        <script src="{{asset('js/respond.min.js')}}"></script>
        <![endif]-->

    </head>

    <body>

    <div class="animationload">
        <div class="loader">Chargement en cours...</div>
    </div>

    <div id="topbar" class="clearfix">
        <div class="container">
            <div class="text-center">
                <h2>
                    <i class="fa fa-warning" style="color: red"></i>
                    Notre site web est en cours de construction !
                </h2>
            </div>
        </div><!-- end container -->
    </div><!-- end topbar -->

    @include('partials._header')

    @yield('content')

    @include('partials._footer')

    <div class="dmtop">Scroll to Top</div>

    <!-- Main Scripts-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.simple-text-rotator.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/custom-portfolio-masonry.js')}}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript">
        var revapi;
        jQuery(document).ready(function () {
            revapi = jQuery('.tp-banner').revolution(
                {
                    delay: 9000,
                    startwidth: 1170,
                    startheight: 500,
                    hideThumbs: 10,
                    fullWidth: "on",
                    forceFullWidth: "on"
                });
        });	//ready
    </script>

    <!-- Fullwidth Video Div  -->
    <script type="text/javascript" src="{{asset('js/libs/swfobject.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/libs/modernizr.video.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/video_background.js')}}"></script>

    <script>
        jQuery(document).ready(function ($) {
            var Video_back = new video_background($("#videobgfull"), {
                "position": "absolute",	//Stick within the div
                "z-index": "-1",		//Behind everything
                "loop": true, 			//Loop when it reaches the end
                "autoplay": true,		//Autoplay at start
                "muted": true,			//Muted at start
                "youtube": "PBIq6E-BJbI",	//Youtube video id
                "start": 5,					//Start with 6 seconds offset (to pass the introduction in this case for example)
                "video_ratio": 1.7778, 		// width/height -> If none provided sizing of the video is set to adjust
                "fallback_image": "videos/main.jpg",	//Fallback image path
            });
        });
    </script>


    </body>

</html>
