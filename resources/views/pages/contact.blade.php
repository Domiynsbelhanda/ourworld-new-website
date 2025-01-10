@extends('layouts.apps')

@section('title')
    Contact
@endsection

@section('content')
    <!-- banner -->
    <div class="mil-inner-banner mil-p-0-120">
        <div class="mil-banner-content mil-center mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-center mil-mb-60">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
                <h1 class="mil-mb-60">Entrer en contact!</h1>
                <h5><a href="tel:+243 996 852 377">+243 996 852 377</a></h5>
                <h5><a href="tel:+243 821 457 744">+243 821 457 744</a></h5>
                <h5><a href="mailito:info@ourworldtkpl.com">info@ourworldtkpl.com</a></h5>
                <br>
                <p>
                    1575, Avenue Mama Yemo, C/ Lubumbashi (Enceinte du Collège IMARA)
                </p>
                <a href="#contact" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>Envoyez un message</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- map -->
    <div class="mil-map-frame mil-up">
        <div class="mil-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4635.059696026993!2d27.478996299999995!3d-11.6594453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723eb806d95d0b%3A0x19db0149b5ee5e7a!2sColl%C3%A8ge%20IMARA!5e1!3m2!1sfr!2scd!4v1736510510384!5m2!1sfr!2scd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- map end -->

{{--    <!-- contact form -->--}}
{{--    <section id="contact">--}}
{{--        <div class="container mil-p-120-90">--}}
{{--            <h3 class="mil-center mil-up mil-mb-120">Parlons-<span class="mil-thin">en</span></h3>--}}
{{--            <form class="row align-items-center">--}}
{{--                <div class="col-lg-6 mil-up">--}}
{{--                    <input type="text" placeholder="NOM">--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 mil-up">--}}
{{--                    <input type="email" placeholder="EMAIL">--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 mil-up">--}}
{{--                    <textarea placeholder="Tell us about our project"></textarea>--}}
{{--                </div>--}}
{{--                <div class="col-lg-8">--}}
{{--                    <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> We promise not to disclose your personal information to third parties.</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="mil-adaptive-right mil-up mil-mb-30">--}}
{{--                        <button type="submit" class="mil-button mil-arrow-place">--}}
{{--                            <span>Send message</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- contact form end -->--}}
@endsection
