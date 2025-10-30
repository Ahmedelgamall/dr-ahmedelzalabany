@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('about us') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('about us') }}</li>
            </ul>
        </div>
    </section>

    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="circle-image-gallery mb-md-50">
                        <div class="row">
                            <div class="col-12 gallery-left">
                                <div class="single-img wow fadeInLeft" data-wow-delay="0.3s">
                                    <img src="{{ route('file_show', [settings('about_image'), 'settings']) }}"
                                        alt="">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="about-text">
                        <div class="section-heading mb-35">
                            <span class="tagline">{{ getTranslatedWords('about us') }}</span>
                            <h2 class="title">{{ settings('about_us_title') }}</h2>

                            <p>{{ getTranslatedWords('25 Years Of Experience in Medical Services') }}</p>
                        </div>
                        <p>
                            {!! settings('about_us_description') !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <div class="wcu-with-doctors">
        <!--====== Why Choose Section Start ======-->
        <section class="wcu-section section-gap-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="section-heading heading-white text-center mb-40">
                            <span class="tagline">{{ getTranslatedWords('Why Choose Our Medical') }}</span>
                            <h2 class="title">
                                {{ getTranslatedWords('Breakthrough in Comprehensive, Flexible Care Delivery Models') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach (App\Models\WhyChooseUs::get() as $w)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="image-title-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
                                <h4 class="title">{{ $w->title }}</h4>

                                <div class="image">
                                    <img src="{{ route('file_show', [$w->image, 'settings']) }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--====== Why Choose Section End ======-->


    </div>

    <!--====== FAQ Section Start ======-->
    <section class="faq-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="faq-image text-center text-lg-left mb-md-50">
                        <img src="{{ route('file_show', [settings('faqs_image'), 'settings']) }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="faq-content pl-xl-5">
                        <div class="section-heading mb-30">
                            <span class="tagline">{{ getTranslatedWords('How Can We help') }}</span>
                            <h2 class="title">{{ getTranslatedWords('Flexible & Responsive to Changing Needs') }}</h2>
                        </div>

                        <div class="accordion accordion-style-two mt-30" id="accordionFaq">
                            @foreach (App\Models\Faq::get() as $f)
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h6 data-toggle="collapse" aria-expanded="true"
                                            data-target="#itemOne{{ $f->id }}">
                                            <span>{{ $f->question }}</span>
                                        </h6>
                                    </div>
                                    <div class="collapse" id="itemOne{{ $f->id }}" data-parent="#accordionFaq">
                                        <div class="accordion-content">
                                            <p>
                                                {{ $f->answer }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ Section End ======-->
@endsection
