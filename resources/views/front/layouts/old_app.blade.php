<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="@if (app()->getLocale() == 'ar') rtl @else ltr @endif">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ route('file_show', [settings('logo'), 'settings']) }}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="stylesheet" href="{{ asset('website_assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/vendor/css/ekiticons3b71.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/vendor/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/vendor/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/vendor/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/countUp.min.js') }}"></script>
    <style>
        .review-card .user-avatar {
            width: auto;
            height: auto;
        }
    </style>
    @if (app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200..1000&family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body,.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6,p,li > a,.btn, .dextheme-btn {
                font-family: "Amiri", serif;
            }
            footer ul {
                padding-right: 0;
            }

            .dextheme-footer .footer-main .footer-menu-list .footer-menu-item:before {

                content: "\e875";

            }
        </style>
    
    @else
    <style>

        body {
            direction:ltr;
        }
    </style>
    @endif
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="dextheme-container">
            <div class="dextheme-navbar d-flex w-100 fd">
                <div class="logo-brand my-auto">
                    <img class="img-fluid" src="{{ route('file_show', [settings('logo'), 'settings']) }}">
                </div>
                <button class="navbar-toggler ms-auto" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                {{ getTranslatedWords('home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">
                                {{ getTranslatedWords('about us') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">
                                {{ getTranslatedWords('contact us') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">
                                {{ getTranslatedWords('services') }}
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contractsFront') }}">
                                {{ getTranslatedWords('contracts') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">
                                {{ getTranslatedWords('blog') }}
                            </a>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('show-packages') }}">
                                {{ getTranslatedWords('packages') }}
                            </a>
                        </li>--}}
                        <li class="nav-item">
                        @if(app()->getLocale()=='ar')
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                EN
                            </a>
                        @else
                        <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                عربى
                            </a>
                        </li>
                        @endif
                    </ul>
                    <span class="nav-item button-call">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                            </path>
                        </svg>
                        <a href="tel:{{ settings('phone') }}"
                            class="nav-link text-secondary">{{ settings('phone') }}</a>
                    </span>
                    <a href="{{ route('appointment') }}" class="dextheme-btn btn-primary hover-normal no-effect">
                        {{ getTranslatedWords('book appointment') }}
                    </a>

                </div>
            </div>
        </div>
    </nav>
    <div class="dextheme-menu-drawer">
        <div class="drawer-inner">
            <div class="logo-brand">
                <img src="{{ route('file_show', [settings('logo'), 'settings']) }}">
            </div>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <a href="{{ route('home') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('home') }}
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('about-us') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('about us') }}
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('contact-us') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('contact us') }}
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('services') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('services') }}
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('contractsFront') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('contracts') }}
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('blog') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('blog') }}
                    </a>
                </li>

                {{--<li class="mb-1">
                    <a href="{{ route('show-packages') }}" class="nav-link p-3 pt-0">
                        {{ getTranslatedWords('packages') }}
                    </a>
                </li>--}}

            </ul>



        </div>
    </div>
    <div class="backdrop" id="drawerBackdrop"></div>
    @yield('content')
    <footer class="dextheme-footer">
        <div class="footer-main">
            <div class="dextheme-container d-flex flex-wrap">
                <div class="dextheme-w-45">
                    <div class="dextheme-row">
                        <div class="dextheme-col-md-6">
                            <div class="d-flex flex-column gap-4">
                                <img class="img-fluid" src="{{ route('file_show', [settings('logo'), 'settings']) }}" width="230">
                                <p class="text-dark">
                                    {{ settings('footer_description') }}
                                </p>
                            </div>
                        </div>
                        <div class="dextheme-col-md-6">
                            <div class="dextheme-w-75 d-flex ms-auto gap-2 flex-column">
                                <h4 class="text-secondary mb-1">{{ getTranslatedWords('center') }}</h4>
                                <ul class="footer-menu-list">
                                    <li class="footer-menu-item">
                                        <a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a>
                                    </li>
                                    <li class="footer-menu-item">
                                        <a href="{{ route('about-us') }}">{{ getTranslatedWords('about us') }}</a>
                                    </li>
                                    <li class="footer-menu-item">
                                        <a
                                            href="{{ route('contact-us') }}">{{ getTranslatedWords('contact us') }}</a>
                                    </li>
                                    <li class="footer-menu-item">
                                        <a href="{{ route('services') }}">{{ getTranslatedWords('services') }}</a>
                                    </li>
                                    <li class="footer-menu-item">
                                        <a
                                            href="{{ route('appointment') }}">{{ getTranslatedWords('book appointment') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dextheme-w-55">
                    <div class="dextheme-row">
                        <div class="dextheme-col-md-7">
                            <div class="d-flex ms-auto gap-2 flex-column popular-services">
                                <h4 class="text-secondary mb-1">{{ getTranslatedWords('services') }}</h4>
                                <div class="dextheme-row">
                                    <div class="dextheme-col-md-6">
                                        <ul class="footer-menu-list">
                                            @foreach (App\Models\Service::take(4)->get() as $service)
                                                <li class="footer-menu-item">
                                                    <a
                                                        href="{{ route('service', $service->id) }}">{{ $service->title }}</a>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                    <div class="dextheme-col-md-6">
                                        <ul class="footer-menu-list">
                                            @foreach (App\Models\Service::skip(4)->take(4)->get() as $service)
                                                <li class="footer-menu-item">
                                                    <a
                                                        href="{{ route('service', $service->id) }}">{{ $service->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dextheme-col-md-5">
                            <div class="d-flex ms-auto gap-2 flex-column contact-us">
                                <h4 class="text-secondary mb-1">{{ getTranslatedWords('contact us') }}</h4>
                                <ul class="footer-contact-us">
                                    <li class="footer-contact-us-item">
                                        <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                        <a
                                            href="https://maps.google.com/maps?q={{ urlencode(settings('address')) }}&t=&z=13&ie=UTF8&iwloc=&output=embed">{{ settings('address') }}</a>
                                    </li>
                                    <li class="footer-contact-us-item">
                                        <i aria-hidden="true" class="icon icon-envelope3"></i>
                                        <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>
                                    </li>
                                    <li class="footer-contact-us-item">
                                        <i aria-hidden="true" class="icon icon-phone-call2"></i>
                                        <a href="tel:{{ settings('phone') }}"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="footer-lower dextheme-container">
                <div class="dextheme-row py-3">
                    <div class="dextheme-col-md-6">
                        <div class="footer-social-media">
                            <p>{{ settings('working_times') }}</p>

                        </div>
                    </div>
                    <div class="dextheme-col-md-6">
                        <div class="footer-copyright justify-content-md-end">
                            <a class="text-white" target="_blank" href="https://whalestack.net/">
                                <p>{{getTranslatedWords('made by Whale stack')}}.
                            </a>{{getTranslatedWords('All right reserved')}}</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/lightbox-plus-jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/countUp.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/progressbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website_assets/vendor/js/swiper-bundle.min.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="{{ asset('website_assets/js/main.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;

            // Ambil semua link dari navbar
            const allLinks = document.querySelectorAll('.navbar-nav a.nav-link, .navbar-nav a.dropdown-item');

            allLinks.forEach(link => {
                const href = link.getAttribute('href');

                // Abaikan jika href kosong atau #
                if (!href || href === '#') return;

                // Buat URL absolut dari href
                const linkUrl = new URL(href, window.location.origin);

                // Jika cocok dengan path sekarang
                if (linkUrl.pathname === currentPath) {
                    // Tambah active ke link yang cocok
                    link.classList.add('active');

                    // Jika ini dropdown-item, tambahkan active ke parent nav-link-nya
                    const parentDropdown = link.closest('.dropdown');
                    if (parentDropdown) {
                        const parentLink = parentDropdown.querySelector('.nav-link');
                        if (parentLink) {
                            parentLink.classList.add('active');
                        }
                    }
                }
            });
        });
    </script>
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
</body>

</html>
