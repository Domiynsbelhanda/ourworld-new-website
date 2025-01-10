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
                                <a href="#.">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio-1.html">Grid type 1</a></li>
                                    <li><a href="portfolio-2.html">Grid type 2</a></li>
                                    <li><a href="portfolio-3.html">Slider</a></li>
                                </ul>
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
                            <div class="row">
                                <div class="col-lg-8 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Projects</h6>

                                    <ul class="mil-menu-list">
                                        <li><a href="project-1.html" class="mil-light-soft">Interior design
                                                studio</a></li>
                                        <li><a href="project-2.html" class="mil-light-soft">Home Security Camera</a>
                                        </li>
                                        <li><a href="project-3.html" class="mil-light-soft">Kemia Honest
                                                Skincare</a></li>
                                        <li><a href="project-4.html" class="mil-light-soft">Cascade of Lava</a></li>
                                        <li><a href="project-5.html" class="mil-light-soft">Air Pro by Molekule</a>
                                        </li>
                                        <li><a href="project-6.html" class="mil-light-soft">Tony's Chocolonely</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Useful links</h6>

                                    <ul class="mil-menu-list">
                                        <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                        <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Careers</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="mil-divider mil-mb-60"></div>
                            <div class="row justify-content-between">

                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Canada</h6>

                                    <p class="mil-light-soft mil-up">71 South Los Carneros Road, California <span
                                            class="mil-no-wrap">+51 174 705 812</span></p>

                                </div>
                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Germany</h6>

                                    <p class="mil-light-soft">Leehove 40, 2678 MC De Lier, Netherlands <span
                                            class="mil-no-wrap">+31 174 705 811</span></p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
