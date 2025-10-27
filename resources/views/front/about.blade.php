@extends('front.layouts.app')
@section('content')
    <main class="bg-white">

        <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="title-breadcrumb">
                    <h2>{{ getTranslatedWords('about us') }}</h2>
                    <div class="breadcrumb-wrapper">
                        <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> -
                            {{ getTranslatedWords('about us') }}
                        </p>
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


        <section class="dextheme-section-padding bg-white">
            <div class="dextheme-container">
                <div class="dextheme-row g-5">
                    <div class="dextheme-col-lg-6 dextheme-col-md-12">
                        <div class="stack-images" data-bg="{{ asset('website_assets/images/Overlay-5.png') }}">
                            <img class="image-base dextheme-w-75 dextheme-animation" data-animate="animate__slideInLeft"
                                data-delay-step="200ms" src="{{ route('file_show', [settings('about_image'), 'settings']) }}">
                            {{-- <img class="image-floating dextheme-w-55 dextheme-animation" data-animate="animate__slideInUp" data-delay-step="210ms" src="https://placehold.co/650x650"> --}}
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


        <section class="wellness-journey-section dextheme-section-padding"
            data-bg="{{ route('file_show', [settings('appointment_image'), 'settings']) }}">
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
