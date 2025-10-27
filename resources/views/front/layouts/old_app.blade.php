<!DOCTYPE html>
<html lang="en" dir="@if (app()->getLocale() == 'ar') rtl @else ltr @endif">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ route('file_show', [settings('logo'), 'settings']) }}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}



    <link rel="stylesheet" href="{{ asset('website_assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('website_assets/fonts/arabic-font.css') }}" rel="stylesheet">
        <style>
            .custom-select.one::after {

                right: auto;
                left: 25px;
            }

            .title-wrapper-left .title,
            .title-wrapper-left {
                text-align: right
            }
        </style>
    @endif

    @if (app()->getLocale() == 'en')
        <link href="{{ asset('website_assets/fonts/english-font.css') }}" rel="stylesheet">
    @endif
    <style>


        .brand-wrapper-main .single-brand {
            display: inline-block;
        }

        .nice-select .list {
            right: 0
        }

        .toast-message {
            font-size: 1.5em
        }

        .single-hospitalbranch {

            height: auto !important;
        }
    </style>
    @if (app()->getLocale() == 'en')
        <style>
            body {
                direction: ltr
            }

            .container-wrapper-faq .accordion .accordion-item .accordion-header button::after {
                right: 0;
            }

            .header-wrapper-1 .header-right .input-area i {

                right: 16px;
                left: auto;

            }
        </style>
    @endif
    @yield('css')
</head>

<body>
    <!-- header area start -->
    <!-- header area start -->
    <header class="header-one style-two  header--sticky">
        <div class="header-top-area-2">
            <div class="container">
                <div class="header-top-two">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="logo">
                            <img width="80px" src="{{ route('file_show', [settings('logo'), 'settings']) }}"
                                alt="logo_area">
                        </a>
                    </div>
                    <div class="rightarea">
                        <div class="single-contact-area">
                            <i class="fa-light fa-location-dot"></i>
                            <div class="information">
                                <span>{{ settings('address') }}</span>
                            </div>
                        </div>
                        <div class="single-contact-area">
                            <i class="fa-regular fa-clock"></i>
                            <div class="information">
                                <span>{{ settings('working_times') }}</span>
                            </div>
                        </div>
                        <div class="single-contact-area">
                            <i class="fa-light fa-phone"></i>
                            <div class="information">
                                <span>{{ getTranslatedWords('phone') }}: <br> {{ settings('phone') }}</span>
                            </div>
                        </div>
                        <div class="menu-btn" id="menu-btn">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-wrapper-1">
                        <div class="logo-area-start">
                            <div class="nav-area">
                                <ul class="">
                                    <li class="main-nav">
                                        <a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a>
                                    </li>
                                    <li><a href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a>
                                    </li>
                                    <li><a href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a>
                                    </li>
                                    <li><a href="{{ route('services') }}">{{ getTranslatedWords('services') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('contractsFront') }}">{{ getTranslatedWords('contracts') }}</a>
                                    </li>
                                    <li><a href="{{ route('blog') }}">{{ getTranslatedWords('blog') }}</a></li>
                                    <li><a
                                            href="{{ route('show-packages') }}">{{ getTranslatedWords('packages') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="input-area">
                                <form method="get" action="{{ route('blog') }}">

                                    <input id="myInput" name="search" type="text"
                                        placeholder="{{ getTranslatedWords('search') }}">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </form>
                            </div>

                            <!-- Language Selector -->
                            <div class="language-selector">
                                <select id="languageSelect" onchange="window.location.href=this.value;">
                                    <option value="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                        العربية</option>
                                    <option value="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                        English</option>
                                </select>
                            </div>

                            <a href="{{ route('appointment') }}"
                                class="rts-btn btn-primary">{{ getTranslatedWords('book appointment') }}<img
                                    src="{{ asset('website_assets/images/banner/icons/arrow--up-right.svg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header area end -->
    <!-- header area end -->

    @yield('content')

    <!-- rts footer area start -->
    <div class="rts-footer-area footer-bg pt--105 pt_sm--50">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="footer-wrapper-style-between">
                        <div class="single-wized">
                            <h6 class="title">{{ getTranslatedWords('contact us') }}</h6>
                            <div class="body">
                                <p class="location">
                                    {{ settings('address') }}
                                </p>
                                <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>
                                <a href="tel:{{ settings('phone') }}">{{ settings('phone') }}</a>
                            </div>
                        </div>
                        <div class="single-wized">
                            <h6 class="title">{{ getTranslatedWords('center') }}</h6>
                            <div class="body">
                                <ul class="nav-bottom">
                                    <li><a href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a>
                                    </li>
                                    <li><a href="{{ route('appointment') }}">{{ getTranslatedWords('book appointment') }}
                                        </a></li>
                                    <li><a
                                            href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-wized">
                            <h6 class="title">{{ getTranslatedWords('our services') }}</h6>
                            <div class="body">
                                <ul class="nav-bottom">
                                    @foreach (App\Models\Service::take(4)->get() as $service)
                                        <li><a href="{{ route('service', $service->id) }}">{{ $service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="single-wized">
                            <h6 class="title">{{ getTranslatedWords('working time') }}</h6>
                            <div class="body">
                                <p class="location">
                                    {{ settings('working_times') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        <a target="_blank" href="https://whalestack.net/">
                            <p>made by Whale stack.
                        </a> All right reserved</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer area end -->
    <!-- header area end -->



    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">

            <div class="language-select mobile-lang">
                <select id="mobileLanguageSwitcher" onchange="window.location.href=this.value;">
                    <option value="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</option>
                    <option value="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</option>
                </select>
            </div>


            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ route('home') }}" class="main">{{ getTranslatedWords('home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}" class="main">{{ getTranslatedWords('about us') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}"
                            class="main">{{ getTranslatedWords('contact us') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="main">{{ getTranslatedWords('services') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contractsFront') }}"
                            class="main">{{ getTranslatedWords('contracts') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="main">{{ getTranslatedWords('blog') }}</a>
                    </li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="{{ settings('facebook_link') }}">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ settings('twitter_link') }}">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ settings('youtube_link') }}">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div id="anywhere-home">
    </div>
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <script src="{{ asset('website_assets/js/plugins/jquery.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('website_assets/js/vendor/waw.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/metismenu.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/jarallax.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('website_assets/js/plugins/magnifying-popup.js') }}"></script>
    <script src="{{ asset('website_assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- main js here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('website_assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr['error']("{{ $error }}")
                @endforeach
            @endif
            @if (session()->has('success'))
                toastr['success']("{{ session()->get('success') }}")
            @elseif (session()->has('error'))
                toastr['error']("{{ session()->get('error') }}")
            @endif
        });
    </script>
    @yield('js')
</body>

</html>
