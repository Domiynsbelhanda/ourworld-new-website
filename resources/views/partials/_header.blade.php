<div class="mil-menu-frame">
    <!-- frame clone -->
    <div class="mil-frame-top">
        <a href="{{route('home')}}" class="mil-logo">Our World TKPL</a>
        <div class="mil-menu-btn">
            <span></span>
        </div>
    </div>
    <!-- frame clone end -->
    <div class="container">
        <div class="mil-menu-content">
            <div class="row">
                <div class="col-xl-5">

                    <nav class="mil-main-menu" id="swupMenu">
                        <ul>
                            <li class="mil-has-children {{ Request::is('/') ? 'mil-active' : '' }}">
                                <a href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li class="mil-has-children {{ Request::is('portfolio*') ? 'mil-active' : '' }}">
                                <a href="{{route('portfolio')}}">Portfolio</a>
                            </li>
                            <li class="mil-has-children {{ Request::is('services*') ? 'mil-active' : '' }}">
                                <a href="{{route('services')}}">Services</a>
                            </li>
                            <li class="mil-has-children {{ Route::currentRouteName() == 'contact' ? 'mil-active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>


                </div>
                <div class="col-xl-7">

                    <div class="mil-menu-right-frame">
                        <div class="mil-animation-in">
                            <div class="mil-animation-frame">
                                <div class="mil-animation mil-position-1 mil-scale" data-value-1="2"
                                     data-value-2="2"></div>
                            </div>
                        </div>
                        <div class="mil-menu-right">
                            <div class="row justify-content-between">

                                <div class="col-md-6 col-lg-5 mil-mb-60">

                                    <h6 class="mil-muted mil-up mil-mb-30">Contact</h6>

                                    <p class="mil-light-soft mil-up">
                                <span
                                    class="mil-no-wrap">
                                    <a href="mailito:info@ourworldtkpl.com">info@ourworldtkpl.com</a>
                                </span>
                                    </p>

                                    <p class="mil-light-soft mil-up">
                                <span
                                    class="mil-no-wrap">
                                    <a href="tel:+243 996 852 377">+243 996 852 377</a>
                                </span>
                                    </p>

                                    <p class="mil-light-soft mil-up">
                                <span
                                    class="mil-no-wrap">
                                    <a href="tel:+243 821 457 744">+243 821 457 744</a>
                                </span>
                                    </p>

                                </div>
                                <div class="col-md-6 col-lg-5 mil-mb-60">

                                    <h6 class="mil-muted mil-up mil-mb-30">Adresse</h6>

                                    <p class="mil-light-soft mil-up">
                                        1575, Avenue Mama Yemo, C/ Lubumbashi (Enceinte du Collège IMARA)
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
