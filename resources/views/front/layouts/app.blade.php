<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <!--====== Favicon Icon ======-->

    <link rel="shortcut icon" type="image/png" href="{{ route('file_show', [settings('logo'), 'settings']) }}">
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/animate.min.css') }}" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/bootstrap.min.css') }}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/slick.min.css') }}" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/nice-select.min.css') }}" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/magnific-popup.min.css') }}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/fonts/fontawesome/css/all.min.css') }}" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/fonts/flaticon/css/flaticon.css') }}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{ asset('website_assets/css/style.css') }}" />

    @if (app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200..1000&family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet">
        <style>
            body,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            {
            font-family: "Amiri", serif;
            }
        </style>
    @endif
</head>

<body>
    <!--====== Start Preloader ======-->
    <div id="preloader">
        <div id="loading-center">
            <div id="object"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->

    <!--====== Start Template Header ======-->
    <header class="template-header header-three">
        <div class="header-top-list-one d-none d-lg-block">
            <div class="container">
                <div class="list-items">
                    <div class="single-list-item">
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img style="width: 170px;"
                                    src="{{ route('file_show', [settings('logo'), 'settings']) }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="single-list-item">
                        <div class="contact-info">
                            <div class="icon">
                                <img src="{{ asset('website_assets/img/icon/map-white.png') }}" alt="Icon">
                            </div>
                            <div class="content">
                                <span class="info-title">{{ getTranslatedWords('address') }}</span>
                                <a href="#" class="info-desc">{{ settings('address') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-list-item">
                        <div class="contact-info">
                            <div class="icon">
                                <img src="{{ asset('website_assets/img/icon/phone-white.png') }}" alt="Icon">
                            </div>
                            <div class="content">
                                <span class="info-title">{{ getTranslatedWords('phone') }}</span>
                                <a href="tel:{{ settings('phone') }}" class="info-desc">{{ settings('phone') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-navigation">
                <div class="header-left">
                    <div class="site-logo d-lg-none">
                        <a href="{{ route('home') }}">
                            <img src="{{ route('file_show', [settings('logo'), 'settings']) }}"
                                alt="{{ settings('system_name') }}">
                        </a>
                    </div>
                    <nav class="site-menu item-extra-gap item-left d-none d-lg-block">
                        <ul class="primary-menu">
                            <li @if (\Route::is('home')) class="active" @endif><a
                                    href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                            <li @if (\Route::is('about-us')) class="active" @endif><a
                                    href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a></li>
                            <li @if (\Route::is('contact-us')) class="active" @endif><a
                                    href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a></li>
                            <li @if (\Route::is('services')) class="active" @endif><a
                                    href="{{ route('services') }}">{{ getTranslatedWords('services') }}</a></li>
                            <li @if (\Route::is('services')) class="active" @endif><a
                                    href="{{ route('contractsFront') }}">{{ getTranslatedWords('contracts') }}</a>
                            </li>
                            <li @if (\Route::is('blog')) class="active" @endif><a
                                    href="{{ route('blog') }}">{{ getTranslatedWords('blog') }}</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="extra-icons">
                        <li class="d-none d-lg-block">
                            <div class="off-canvas-btn">
                                <span></span>
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <a href="#" class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Start Off Canvas -->
        <div class="slide-panel off-canvas-panel">
            <div class="panel-overlay"></div>
            <div class="panel-inner">
                <div class="canvas-logo">
                    <img src="{{ route('file_show', [settings('logo'), 'settings']) }}" alt="">
                </div>
                <div class="about-us">
                    <h5 class="canvas-widget-title">{{ getTranslatedWords('about us') }}</h5>
                    <p>
                        {{ settings('footer_description') }}
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="canvas-widget-title">{{ getTranslatedWords('contact us') }}</h5>
                    <ul>
                        <li>
                            <i class="far fa-map-marker-alt"></i>
                            {{ settings('address') }}
                        </li>
                        <li>
                            <i class="far fa-envelope-open"></i>
                            <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>

                        </li>
                        <li>
                            <i class="far fa-phone"></i>
                            <a href="tel:{{ settings('phone') }}">{{ settings('phone') }}</a><br>

                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close">
                    <i class="fal fa-times"></i>
                </a>
            </div>
        </div>
        <!-- End Off Canvas -->

        <!-- Start Mobile Panel -->
        <div class="slide-panel mobile-slide-panel">
            <div class="panel-overlay"></div>
            <div class="panel-inner">
                <div class="panel-logo">
                    <img style="max-width: 100px;" src="{{ route('file_show', [settings('logo'), 'settings']) }}"
                        alt="">
                </div>
                <nav class="mobile-menu">
                    <ul class="primary-menu">

                        <li @if (\Route::is('home')) class="active" @endif><a
                                href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                        <li @if (\Route::is('about-us')) class="active" @endif><a
                                href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a></li>
                        <li @if (\Route::is('contact-us')) class="active" @endif><a
                                href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a></li>
                        <li @if (\Route::is('services')) class="active" @endif><a
                                href="{{ route('services') }}">{{ getTranslatedWords('services') }}</a></li>
                        <li @if (\Route::is('services')) class="active" @endif><a
                                href="{{ route('contractsFront') }}">{{ getTranslatedWords('contracts') }}</a></li>
                        <li @if (\Route::is('blog')) class="active" @endif><a
                                href="{{ route('blog') }}">{{ getTranslatedWords('blog') }}</a></li>
                    </ul>
                </nav>
                <a href="#" class="panel-close">
                    <i class="fal fa-times"></i>
                </a>
            </div>
        </div>
        <!-- Start Mobile Panel -->
    </header>
    <!--====== End Template Header ======-->

    @yield('content')

    <!--====== Back to Top Start ======-->
    <a class="back-to-top" href="#">
        <i class="far fa-angle-up"></i>
    </a>
    <!--====== Back to Top End ======-->

    <!--====== Start Template Footer ======-->
    <footer class="template-footer bg-color-grey template-footer-white have-cta-boxes-two">
        {{-- <div class="cta-boxes-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-boxed-two bg-color-secondary bg-size-cover blend-mode-multiply mb-30"
                            style="background-image: url(assets/img/cta-img/cta-boxed-2-1.jpg);">
                            <h2 class="cta-title">Looking a Doctors For Health Care</h2>
                            <a href="#" class="template-btn template-btn-bordered">Find Doctor <i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-boxed-two bg-color-secondary bg-size-cover blend-mode-multiply mb-30"
                            style="background-image: url({{ asset('website_assets/img/cta-img/cta-boxed-2-2.jpg') }});">
                            <h2 class="cta-title">{{ getTranslatedWords('book appointment') }}</h2>
                            <a href="{{ route('appointment') }}" class="template-btn template-btn-bordered">{{ getTranslatedWords('appointment') }}<i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="cta-boxed-two bg-color-secondary bg-size-cover blend-mode-multiply mb-30"
                            style="background-image: url(assets/img/cta-img/cta-boxed-2-3.jpg);">
                            <h2 class="cta-title">Innovative Psychial Therapist</h2>
                            <a href="#" class="template-btn template-btn-bordered">Find Doctor <i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="footer-inner bg-color-primary">
            <div class="container">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-8">
                            <div class="widget text-widget">
                                <div class="footer-logo">
                                    <img src="{{ route('file_show', [settings('logo'), 'settings']) }}"
                                        alt="Medibo">
                                </div>
                                <p>
                                    {{ settings('footer_description') }}
                                </p>
                                <ul class="contact-list">
                                    <li>
                                        <a
                                            href="https://maps.google.com/maps?q={{ urlencode(settings('address')) }}&t=&z=13&ie=UTF8&iwloc"><i
                                                class="far fa-map-marker-alt"></i>{{ settings('address') }}</a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{ settings('email') }}"><i
                                                class="far fa-envelope"></i>{{ settings('email') }}</a>
                                    </li>
                                    <li>
                                        <a href="tel:{{ settings('phone') }}"><i
                                                class="far fa-phone"></i>{{ settings('phone') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-sm-6">
                                    <div class="d-flex justify-content-lg-center">
                                        <div class="widget nav-widget">
                                            <h4 class="widget-title">{{ getTranslatedWords('Popular Services') }}</h4>
                                            <ul class="nav-links">
                                                @foreach (App\Models\Service::take(6)->get() as $s)
                                                    <li><a
                                                            href="{{ route('service', $s->id) }}">{{ $s->title }}</a>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-sm-6">
                                    <div class="d-flex justify-content-lg-center">
                                        <div class="widget nav-widget">
                                            <h4 class="widget-title">{{ getTranslatedWords('links') }}</h4>
                                            <ul class="nav-links">
                                                <li><a
                                                        href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('services') }}">{{ getTranslatedWords('services') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('contractsFront') }}">{{ getTranslatedWords('contracts') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('blog') }}">{{ getTranslatedWords('blog') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10">
                            <div class="widget newsletters-widget">
                               

                                <div class="opening-notice">
                                    <h6><i class="far fa-clock"></i>{{ getTranslatedWords('Opening Hours') }}</h6>
                                    <p>{{ settings('working_times') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    
                    <p>© {{ date('Y') }} <a target="_blank" href="https://whalestack.net/">made by Whale stack.</a>. All right reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!--====== End Template Footer ======-->

    <!--====== Jquery ======-->
    <script src="{{ asset('website_assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{ asset('website_assets/js/bootstrap.min.js') }}"></script>
    <!--====== Slick slider ======-->
    <script src="{{ asset('website_assets/js/slick.min.js') }}"></script>
    <!--====== Isotope ======-->
    <script src="{{ asset('website_assets/js/isotope.pkgd.min.js') }}"></script>
    <!--====== Images loaded ======-->
    <script src="{{ asset('website_assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!--====== In-view ======-->
    <script src="{{ asset('website_assets/js/jquery.inview.min.js') }}"></script>
    <!--====== Nice Select ======-->
    <script src="{{ asset('website_assets/js/jquery.nice-select.min.js') }}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{ asset('website_assets/js/magnific-popup.min.js') }}"></script>
    <!--====== WOW Js ======-->
    <script src="{{ asset('website_assets/js/wow.min.js') }}"></script>
    <!--====== Main JS ======-->
    <script src="{{ asset('website_assets/js/main.js') }}"></script>
</body>

</html>
