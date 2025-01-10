<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap-grid.css')}}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('css/plugins/swiper.min.css')}}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('css/plugins/fancybox.min.css')}}">
    <!-- ashley scss -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- page name -->
    <title>OW | @yield('title')</title>

</head>

<body>

<!-- wrapper -->
<div class="mil-wrapper" id="top">

    <!-- cursor -->
    <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path
                        d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z"/>
                </svg>
            </span>
        <div class="mil-more-text">More</div>
        <div class="mil-choose-text">Сhoose</div>
    </div>
    <!-- cursor end -->

    <!-- preloader -->
    <div class="mil-preloader">
        <div class="mil-preloader-animation">
            <div class="mil-pos-abs mil-animation-1">
                <p class="mil-h3 mil-muted mil-thin">illume</p>
                <p class="mil-h3 mil-muted">ton</p>
                <p class="mil-h3 mil-muted mil-thin">monde</p>
            </div>
            <div class="mil-pos-abs mil-animation-2">
                <div class="mil-reveal-frame">
                    <p class="mil-reveal-box"></p>
                    <p class="mil-h3 mil-muted mil-thin">Our World TKPL</p>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- scrollbar progress -->
    <div class="mil-progress-track">
        <div class="mil-progress"></div>
    </div>
    <!-- scrollbar progress end -->

    <!-- menu -->
    @include('partials._header')
    <!-- menu -->

    <!-- curtain -->
    <div class="mil-curtain"></div>
    <!-- curtain end -->

    <!-- frame -->
    <div class="mil-frame">
        <div class="mil-frame-top">
            <a href="{{route('home')}}" class="mil-logo">Our World</a>
            <div class="mil-menu-btn">
                <span></span>
            </div>
        </div>
        <div class="mil-frame-bottom">
            <div class="mil-current-page"></div>
            <div class="mil-back-to-top">
                <a href="#top" class="mil-link mil-dark mil-arrow-place">
                    <span>Haut de Page</span>
                </a>
            </div>
        </div>
    </div>
    <!-- frame end -->
    <div class="mil-content">
        <div id="swupMain" class="mil-main-transition">

        <!-- content -->
    @yield('content')
    <!-- content -->


    @include('partials._footer')

    <!-- hidden elements -->
    <div class="mil-hidden-elements">
        <div class="mil-dodecahedron">
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mil-pentagon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mil-arrow">
            <path
                d="M 14 5.3417969 C 13.744125 5.3417969 13.487969 5.4412187 13.292969 5.6367188 L 13.207031 5.7226562 C 12.816031 6.1136563 12.816031 6.7467188 13.207031 7.1367188 L 17.070312 11 L 4 11 C 3.448 11 3 11.448 3 12 C 3 12.552 3.448 13 4 13 L 17.070312 13 L 13.207031 16.863281 C 12.816031 17.254281 12.816031 17.887344 13.207031 18.277344 L 13.292969 18.363281 C 13.683969 18.754281 14.317031 18.754281 14.707031 18.363281 L 20.363281 12.707031 C 20.754281 12.316031 20.754281 11.682969 20.363281 11.292969 L 14.707031 5.6367188 C 14.511531 5.4412187 14.255875 5.3417969 14 5.3417969 z"/>
        </svg>

        <svg width="250" viewBox="0 0 300 1404" fill="none" xmlns="http://www.w3.org/2000/svg"
             class="mil-lines">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1 892L1 941H299V892C299 809.71 232.29 743 150 743C67.7096 743 1 809.71 1 892ZM0 942H300V892C300 809.157 232.843 742 150 742C67.1573 742 0 809.157 0 892L0 942Z"
                  class="mil-move"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M299 146V97L1 97V146C1 228.29 67.7096 295 150 295C232.29 295 299 228.29 299 146ZM300 96L0 96V146C0 228.843 67.1573 296 150 296C232.843 296 300 228.843 300 146V96Z"
                  class="mil-move"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M299 1H1V1403H299V1ZM0 0V1404H300V0H0Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M150 -4.37115e-08L150 1404L149 1404L149 0L150 -4.37115e-08Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M150 1324C232.29 1324 299 1257.29 299 1175C299 1092.71 232.29 1026 150 1026C67.7096 1026 1 1092.71 1 1175C1 1257.29 67.7096 1324 150 1324ZM150 1325C232.843 1325 300 1257.84 300 1175C300 1092.16 232.843 1025 150 1025C67.1573 1025 0 1092.16 0 1175C0 1257.84 67.1573 1325 150 1325Z"
                  class="mil-move"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M300 1175H0V1174H300V1175Z" class="mil-move"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M150 678C232.29 678 299 611.29 299 529C299 446.71 232.29 380 150 380C67.7096 380 1 446.71 1 529C1 611.29 67.7096 678 150 678ZM150 679C232.843 679 300 611.843 300 529C300 446.157 232.843 379 150 379C67.1573 379 0 446.157 0 529C0 611.843 67.1573 679 150 679Z"
                  class="mil-move"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M299 380H1V678H299V380ZM0 379V679H300V379H0Z"
                  class="mil-move"/>
        </svg>
    </div>
    <!-- hidden elements end -->

        </div>
    </div>
</div>
<!-- wrapper end -->

<!-- jQuery js -->
<script src="js/plugins/jquery.min.js"></script>
<!-- swup js -->
<script src="js/plugins/swup.min.js"></script>
<!-- swiper js -->
<script src="js/plugins/swiper.min.js"></script>
<!-- fancybox js -->
<script src="js/plugins/fancybox.min.js"></script>
<!-- gsap js -->
<script src="js/plugins/gsap.min.js"></script>
<!-- scroll smoother -->
<script src="js/plugins/smooth-scroll.js"></script>
<!-- scroll trigger js -->
<script src="js/plugins/ScrollTrigger.min.js"></script>
<!-- scroll to js -->
<script src="js/plugins/ScrollTo.min.js"></script>
<!-- ashley js -->
<script src="js/main.js"></script>

</body>

</html>
