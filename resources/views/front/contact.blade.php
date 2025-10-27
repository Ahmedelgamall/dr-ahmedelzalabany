@extends('front.layouts.app')
@section('content')
<main class="bg-white">

    <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
        <div class="dextheme-container">
            <div class="title-breadcrumb">
                <h2>{{ getTranslatedWords('contact us') }}</h2>
                <div class="breadcrumb-wrapper">
                    <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> - {{ getTranslatedWords('contact us') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation-section bg-white">
        <div class="dextheme-container">
            <div class="dextheme-row">
                <div class="dextheme-col-lg-6 dextehme-col-12">
                    <div class="contact-info">
                        <div class="heading-section mb-4">

                            <h1 class="heading-title mb-4 dextheme-animation" data-animate="animate__slideInLeft">
                                {{ getTranslatedWords('always here for you') }}
                            </h1>
                            <p class="dextheme-animation" data-animate="animate__slideInLeft">
                                {{ getTranslatedWords('be always in contact with us') }}
                            </p>
                        </div>
                        <div class="contact-info-list pt-3">
                            <div class="info-item dextheme-animation" data-animate="animate__slideInLeft">
                                <span class="info-icon">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                        </path>
                                    </svg>
                                </span>
                                <div class="info-text">
                                    <span class="text-secondary">{{ getTranslatedWords('call us') }}</span>
                                    <p class="text-primary">{{ settings('phone') }}</p>
                                </div>
                            </div>
                            <div class="info-item dextheme-animation" data-animate="animate__slideInLeft">
                                <span class="info-icon">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                        </path>
                                    </svg>
                                </span>
                                <div class="info-text">
                                    <span class="text-secondary">{{ getTranslatedWords('email') }}</span>
                                    <p class="text-primary">{{ settings('email') }} </p>
                                </div>
                            </div>
                            <div class="info-item dextheme-animation" data-animate="animate__slideInLeft">
                                <span class="info-icon">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt"
                                        viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                        </path>
                                    </svg>
                                </span>
                                <div class="info-text">
                                    <span class="text-secondary">{{ getTranslatedWords('address') }}</span>
                                    <p class="text-primary">{{ settings('address') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dextheme-col-lg-6 dextehme-col-12">
                    <div class="consultation-form bg-secondary-opaque dextheme-animation"
                        data-animate="animate__slideInDown">
                        <div class="heading-text">
                            <h4>{{ getTranslatedWords('send message') }}</h4>

                        </div>
                        <form method="post" action="{{route('send-contact')}}">
                        @csrf
                        <div class="dextheme-row gy-4 mb-4">
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="text" name="name" value='{{old('name')}}'
                                    placeholder="{{ getTranslatedWords('patient name') }}">
                            </div>
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="email" name="email" value='{{old('email')}}'
                                    placeholder="{{ getTranslatedWords('email') }}">
                            </div>
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="tel" name="phone" value='{{old('phone')}}'
                                    placeholder="{{ getTranslatedWords('phone') }}">
                            </div>

                            <div class="dextheme-col-md-12">
                                <textarea rows="5" name="message" placeholder="{{ getTranslatedWords('message') }}">{{old('message')}}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="dextheme-btn btn-secondary hover-primary no-effect">
                            {{ getTranslatedWords('send') }}
                        </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="map-container">
        <iframe
          width="100%"
          height="450"
          src="https://maps.google.com/maps?q={{ urlencode(settings('address')) }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
        ></iframe>
      </div>

   


    {{--<!-- hospital branch area start -->
    <div class="rts-hospital-branch">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-wrapper-left">
                            <h2 class="title">
                                {{ getTranslatedWords('branches') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12 position-relative swiper-next-prev-controller">
                    <div class="swiper swiper-container-h3">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Branch::get() as $branch)
                                <div class="swiper-slide">
                                    <div class="single-hospitalbranch">
                                        <a onclick="return false;" class="thumbnail">
                                            <img src="{{ route('file_show', [$branch->image, 'settings']) }}"
                                                alt="branch">
                                        </a>
                                        <div class="inner-content">
                                            <a onclick="return false;">
                                                <h5 class="title">{{ $branch->name }}</h5>
                                            </a>
                                            <div class="bottom-area-start">
                                                <div class="left">
                                                    <div class="icon">
                                                        <i class="fa-light fa-location-dot"></i>
                                                    </div>
                                                    <p class="mb--0">
                                                        <a href="{{ $branch->location_url }}" target="_blank">
                                                            {{ $branch->address }}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="right">
                                                    {{ $branch->phone_1 }}
                                                    {{ $branch->phone_2 }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- hospital branch area end -->--}}


</main>
@endsection
