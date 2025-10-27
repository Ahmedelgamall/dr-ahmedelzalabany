@extends('front.layouts.app')

@section('content')
    <main class="bg-white">
        <section class="hero-banner" data-bg="{{ route('file_show', [settings('home_banner_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="row">
                    <div class="dextheme-col-lg-6 dextheme-col-md-12">
                        <div class="hero-banner-content">

                            <h1 class="heading-title dextheme-animation" data-animate="animate__slideInLeft">
                                {{ settings('home_banner_title') }}
                            </h1>
                            <p class="dextheme-animation" data-animate="animate__slideInLeft" data-delay-step="220ms">
                                {{ settings('home_banner_text') }}</p>
                            {{-- <a href="#" class="dextheme-btn btn-primary hover-normal mt-3 dextheme-animation" data-animate="animate__slideInLeft" data-delay-step="210ms">
                Professional Support
              </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dextheme-section-padding bg-white">
            <div class="dextheme-container">
                <div class="dextheme-row g-5">
                    <div class="dextheme-col-lg-6 dextheme-col-md-12">
                        <div class="stack-images" data-bg="{{ asset('website_assets/images/Overlay-5.png') }}">
                            <img class="img-fluid image-base dextheme-w-75 dextheme-animation" data-animate="animate__slideInLeft"
                                data-delay-step="200ms" src="{{ route('file_show', [settings('about_image'), 'settings']) }}">
                            {{-- <img class="img-fluid image-floating dextheme-w-55 dextheme-animation" data-animate="animate__slideInUp" data-delay-step="210ms" src="https://placehold.co/650x650"> --}}
                        </div>
                    </div>
                    <div class="dextheme-col-lg-6 dextheme-col-md-12">
                        <div class="heading-section mb-5 mt-4">
                            <h5 class="heading-subtitle">{{ getTranslatedWords('about us') }}</h5>
                            <h1 class="heading-title mb-4 dextheme-animation" data-animate="animate__slideInLeft"
                                data-delay-step="200ms">{{ settings('about_us_title') }}</h1>
                            <p class="dextheme-animation" data-animate="animate__slideInLeft" data-delay-step="210ms">
                                {!! settings('about_us_description') !!}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="client-logo-section bg-white">
            <div class="dextheme-container">
                <div data-swiper-active="" data-swiper-slides-per-view="5" data-swiper-space-between="35"
                    data-swiper-loop="true" data-swiper-autoplay-delay="4000" data-swiper-navigation="false"
                    data-swiper-breakpoints="{&quot;320&quot;: {&quot;slidesPerView&quot;: 1}, &quot;768&quot;: {&quot;slidesPerView&quot;: 5}}">
                    <div class="dextheme-swiper swiper-fade position-relative overflow-hidden mb-5">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Contract::latest()->get() as $contract)
                                <div class="swiper-slide">
                                    <img src="{{ route('file_show', [$contract->image, 'settings']) }}" width="100%">
                                    <h5 class="card-title">{{ $contract->title }}</h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dextheme-section-padding bg-secondary-opaque bg-curl">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-5 dextheme-w-65 mx-auto">
                    <h5 class="heading-subtitle">{{ getTranslatedWords('services') }}</h5>
                    <h1 class="heading-title mb-4">{{ getTranslatedWords('many medical services') }}</h1>
                    <p>{{ getTranslatedWords('explore our perfect medical services') }}</p>
                </div>
                <div class="dextheme-row g-4 mb-4">
                    @foreach (App\Models\Service::take(4)->get() as $service)
                        <div class="dextheme-col-lg-3 dextheme-col-md-6 dextheme-col-12">
                            <div class="dextheme-service-card active dextheme-animation" data-animate="animate__slideInUp">
                                <div class="card-content">
                                    <img src="{{ route('file_show', [$service->image, 'settings']) }}">
                                    <h4 class="text-primary">{{ $service->title }}</h4>
                                    <p>{{ $service->description }}</p>
                                </div>
                                <span class="separator-wavy"></span>
                                <a href="{{ route('service', $service->id) }}" class="service-action">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-plus-circle" viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z">
                                        </path>
                                    </svg>
                                    <span>{{ getTranslatedWords('learn more') }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="text-center">
                    <a href="{{ route('services') }}" class="dextheme-btn btn-primary hover-normal mt-3">
                        {{ getTranslatedWords('show more') }}
                    </a>
                </div>
            </div>
        </section>

        <section class="dextheme-section-padding bg-secondary-opaque bg-curl">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-5 dextheme-w-65 mx-auto">
                    <h5 class="heading-subtitle"></h5>
                    <h1 class="heading-title mb-4">{{ getTranslatedWords('view clients Reviews') }}</h1>
                    <p>{{ getTranslatedWords('explore our clients reviews') }}</p>
                </div>
                <div class="swiper-anim swiper-fade position-relative review-card-wrapper">
                    <div class="swiper-wrapper">
                        @foreach (App\Models\Testimonial::take(15)->get() as $testim)
                            <div class="swiper-slide review-card-shadow">
                                <div class="review-card @@class">
                                    <i aria-hidden="true" class="icon icon-quote"></i>
                                    <div class="user-avatar">
                                        <img src="{{ route('file_show', [$testim->image, 'settings']) }}">
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="consultation-section bg-white">
            <div class="dextheme-container">
                <div class="dextheme-row">
                    <div class="dextheme-col-lg-4 dextheme-col-md-12">
                        <div class="contact-info">
                            <div class="heading-section mb-4">

                                <h1 class="heading-title mb-4 dextheme-animation" data-animate="animate__slideInLeft">
                                    {{ getTranslatedWords('always here for you') }}
                                </h1>
                                <p class="dextheme-animation" data-animate="animate__slideInLeft">Lorem ipsum dolor sit
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
                    <div class="dextheme-col-lg-4 dextheme-col-md-12">
                        <div class="consultation-form bg-secondary-opaque dextheme-animation"
                            data-animate="animate__slideInDown">
                            <div class="heading-text">
                                <h4>{{ getTranslatedWords('send message') }}</h4>

                            </div>
                            <div class="dextheme-row gy-4 mb-4">
                                <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                    <input type="text" name="name"
                                        placeholder="{{ getTranslatedWords('patient name') }}">
                                </div>
                                <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                    <input type="email" name="email"
                                        placeholder="{{ getTranslatedWords('email') }}">
                                </div>
                                <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                    <input type="tel" name="phone"
                                        placeholder="{{ getTranslatedWords('phone') }}">
                                </div>

                                <div class="dextheme-col-md-12">
                                    <textarea rows="5" name="message" placeholder="{{ getTranslatedWords('message') }}"></textarea>
                                </div>
                            </div>
                            <button class="dextheme-btn btn-secondary hover-primary no-effect">
                                {{ getTranslatedWords('send') }}
                            </button>
                        </div>
                    </div>
                    <div class="dextheme-col-lg-4 dextheme-col-md-12">
                        <div class="stack-images bg-size-contain"
                            data-bg="{{ asset('website_assets/images/Overlay-5.png') }}">
                            <img class="img-fluid image-base dextheme-w-100 dextheme-animation" data-animate="animate__slideInUp"
                                src="{{ route('file_show', [settings('contact_image'), 'settings']) }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="methodology-section dextheme-section-padding"
            data-bg="{{ route('file_show', [settings('steps_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-4 dextheme-w-65 mx-auto">

                    <h1 class="heading-title text-white mb-4"> {{ getTranslatedWords('steps for medical services') }}</h1>
                    <p class="text-white">
                        {{ getTranslatedWords('here you are the steps for medical services') }}
                    </p>
                </div>
                <div class="methodology-steps pt-3">
                    @foreach (App\Models\Step::get() as $key=> $step)
                        <div class="each-step">
                            <div class="step-heading">
                                <h3>{{ $key+1 }}.</h3>
                            </div>
                            <div class="step-text text-center text-white">
                                <h4>{{ $step->title }}</h4>
                                <p>{{ $step->description }}</p>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        {{--<section class="video-section bg-white">
            <div class="dextheme-container">
                <div class="video-box-wrapper" data-bg="https://placehold.co/1920x1280">
                    <a href="#" class="video-button-play">
                        <i aria-hidden="true" class="icon icon-play1"></i>
                    </a>
                </div>
            </div>
        </section>--}}
        <section class="dextheme-section-padding bg-white">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-5 dextheme-w-65 mx-auto">
                    
                    <h1 class="heading-title mb-4">{{ getTranslatedWords('articles and medical advices') }}</h1>
                    <p> {{ getTranslatedWords('many articles and medical advices') }}</p>
                </div>
                <div class="dextheme-row mb-4">
                    @foreach (App\Models\Blog::where('language',app()->getLocale())->latest()->take(3)->get() as $post)
                    <div class="dextheme-col-lg-4 dextheme-md-12">
                        <div class="blog-card-item">
                            <div class="blog-card-thumbnail">
                                <img src="{{ route('file_show', [$post->image, 'settings']) }}">
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                   
                                    <div class="meta-item">
                                        <i aria-hidden="true" class="icon icon-calendar3 me-2"></i>
                                        <span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('ll') }}</span>
                                    </div>
                                    
                                </div>
                                <h4 class="text-primary mb-3"> {{ $post->title }}</h4>
                                <p>{!! \Illuminate\Support\Str::words($post->body, 20, '...') !!}
                                </p>
                                <a href="{{ route('blog-details', $post->slug) }}">{{ getTranslatedWords('learn more') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </section>
        <section class="wellness-journey-section dextheme-section-padding" data-bg="{{ route('file_show', [settings('appointment_image'), 'settings']) }}">
            <div class="dextheme-container my-4">
                <div class="heading-section text-center mb-3 dextheme-w-65 mx-auto">
                    <h1 class="heading-title text-white mb-4 dextheme-animation" data-animate="animate__slideInUp"
                        data-delay-step="250ms">{{ getTranslatedWords('book appointment') }}</h1>
                    <p class="text-white"> {{ getTranslatedWords('book appointment more easily and confortable') }}</p>
                </div>
                <div class="text-center">
                    <a href="{{ route('appointment') }}" class="dextheme-btn outline-white hover-secondary mt-4">
                        {{ getTranslatedWords('press here') }}
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
