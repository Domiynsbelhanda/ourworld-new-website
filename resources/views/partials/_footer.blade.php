<!-- footer -->
<footer class="mil-dark-bg">
    <div class="mi-invert-fix">
        <div class="container mil-p-120-60">
            <div class="row justify-content-between">
                <div class="col-md-4 col-lg-4 mil-mb-60">

                    <div class="mil-muted mil-logo mil-up mil-mb-30">Our World TKPL</div>

                    <p class="mil-light-soft mil-up mil-mb-30">Souscrire à notre newsletter:</p>

                    <form class="mil-subscribe-form mil-up">
                        <input type="text" placeholder="Entrez votre adresse mail">
                        <button type="submit"
                                class="mil-button mil-icon-button-sm mil-arrow-place"></button>
                    </form>

                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-lg-7">

                            <nav class="mil-footer-menu mil-mb-60">
                                <ul>
                                    <li class="mil-up {{ Route::currentRouteName() == 'home' ? 'mil-active' : '' }}">
                                        <a href="{{route('home')}}">Accueil</a>
                                    </li>
                                    <li class="mil-up {{ Request::is('portfolio*') ? 'mil-active' : '' }}">
                                        <a href="#">Portfolio</a>
                                    </li>
                                    <li class="mil-up {{ Request::is('services*') ? 'mil-active' : '' }}">
                                        <a href="#">Services</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <div class="col-md-6 col-lg-5">

                            <nav class="mil-footer-menu mil-mb-60">
                                <ul>
                                    <li class="mil-up {{ Route::currentRouteName() == 'contact' ? 'mil-active' : '' }}">
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                    <li class="mil-up {{ Request::is('blog') ? 'mil-active' : '' }}">
                                        <a href="#">Blog</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-between flex-sm-row-reverse">
                <div class="col-md-7 col-lg-6">

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
                <div class="col-md-4 col-lg-6 mil-mb-60">

                    <div class="mil-vert-between">
                        <div class="mil-mb-30">
                            <ul class="mil-social-icons mil-up">
                                <li><a href="https://web.facebook.com/profile.php?id=100064531795188" target="_blank" class="social-icon"> <i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://x.com/ourworldtkpl" target="_blank" class="social-icon"> <i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/our_world_tkpl/" target="_blank" class="social-icon"> <i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/our-world-tkpl/" target="_blank" class="social-icon"> <i class="fab fa-linkedin-in"></i></a></li>

                            </ul>
                        </div>
                        <p class="mil-light-soft mil-up">© Copyright 2025 - Our World TKPL SARL. All Rights Reserved.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
