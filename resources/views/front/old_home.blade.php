@extends('front.layouts.app')
@section('js')
    <script>
        $('.list li').on('click', function() {
            $('.time').val($(this).attr('data-value'));
        })
        $('.take_branch li').on('click', function() {
            $('.branch_id').val($(this).attr('data-value'));
        })
    </script>
@endsection
@section('content')
    <!-- rts banner area srtart -->
    <div class="rts-banner-area-three bg_image rts-wsection-gap" @if (settings('home_banner_image') != '') style="background-image: url({{ route('file_show', [settings('home_banner_image'), 'settings']) }});" @endif>
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-three-inner-content">
                        <h1 class="title wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                            {{ settings('home_banner_title') }}
                        </h1>
                        <div class="button-wrapper">
                            <a href="#" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">احجز موعد</a>
                            <div class="call-infor-wrapper wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                                <div class="icon">
                                    <img src="{{ asset('website_assets/images/banner/icons/02.png') }}" alt="banner">
                                </div>
                                <div class="info">
                                    <span>{{ getTranslatedWords('call us') }}</span>
                                    <a href="#">{{ settings('phone') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl--50 pl_md--10 pl_sm--10 mt_md--30 mt_sm--30">
                    <div class="take-consultent-area-form move-down wow">
                        <form action="{{ route('request-appointment') }}" method="post" id="form">
                            @csrf
                            <h4 class="title">
                                {{ getTranslatedWords('book appointment') }}
                            </h4>
                            <div class="half-input-wrapper">
                                <input type="text" name="name" placeholder="{{ getTranslatedWords('name') }}">
                                <input type="text" name="phone" placeholder="{{ getTranslatedWords('phone') }}">
                            </div>
                            <input type="text" name="radians_type" placeholder="{{ getTranslatedWords('radians type') }}">

                            <div class="input-half-wrapper datepicker-wrapper">
                                <input type="text" id="datepicker" name="date" placeholder="{{ getTranslatedWords('appointment date') }}">
                                <input type="hidden" name="time" class="time">
                                <div class="search-input">
                                    <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">
                                        <span style="color: rgb(80, 80, 80);" class="current">{{ getTranslatedWords('appointment time') }}</span>
                                        <ul class="list">
                                            <li data-value="noon" class="option">{{ getTranslatedWords('noon') }}</li>
                                            <li data-value="After the afternoon" class="option">
                                                {{ getTranslatedWords('After the afternoon') }}</li>
                                            <li data-value="evening" class="option">{{ getTranslatedWords('evening') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="input-half-wrapper d-block">

                                <div class="search-input">

                                    <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">

                                        <span style="color: rgb(80, 80, 80);" class="current">{{ getTranslatedWords('branch') }}</span>
                                        <input type="hidden" name="branch_id" class="branch_id">
                                        <ul class="list take_branch">
                                            @foreach (App\Models\Branch::get() as $b)
                                                <li data-value="{{ $b->id }}" class="option">{{ $b->name }}</li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <textarea class="mb--15" name="#" id="textarea" placeholder="{{ getTranslatedWords('notes') }}"></textarea>
                            <a onclick="event.preventDefault(); document.getElementById('form').submit();" class="rts-btn btn-primary" style="cursor: pointer;">{{ getTranslatedWords('book now') }}
                                <img src="{{ asset('website_assets/images/banner/icons/arrow--up-right.svg') }}" alt=""></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-side-tect-top-bottom">
            <span>{{ getTranslatedWords('24/7 hours call') }}</span>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- short service -->
    <div class="short-service-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".2s" data-wow-duration=".8s">
                    <a href="{{ route('appointment') }}" class="single-short-service">
                        <div class="icon">
                            <img src="{{ asset('website_assets/images/service/01.svg') }}" alt="service">
                        </div>
                        <h5 class="title">

                            {{ getTranslatedWords('book appointment') }}
                        </h5>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".6s" data-wow-duration=".8s">
                    <a href="tel:{{ settings('phone') }}" class="single-short-service">
                        <div class="icon">
                            <img src="{{ asset('website_assets/images/service/03.svg') }}" alt="service">
                        </div>
                        <h5 class="title">
                            {{ getTranslatedWords('call us') }}
                        </h5>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".8s" data-wow-duration=".8s">
                    <a href="{{ route('contact-us') }}" class="single-short-service">
                        <div class="icon">
                            <img src="{{ asset('website_assets/images/service/04.svg') }}" alt="service">
                        </div>
                        <h5 class="title">
                            {{ getTranslatedWords('contact us') }}
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- short service end -->

    <!-- rts-service-area start -->
    <div class="rts-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">{{ getTranslatedWords('services') }}</span>
                        <!-- <h2 class="title text-center">we provide a wide range <br> of medical services</h2> -->
                        <h2 class="title text-center">{{ getTranslatedWords('many medical services') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                @foreach (App\Models\Service::take(8)->get() as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                        <div class="single-service-area style-bg-light border-trnasparent">
                            <div class="icon">
                                <img src="{{ route('file_show', [$service->image, 'settings']) }}" alt="service">
                            </div>
                            <h4 class="title">{{ $service->title }}</h4>
                            <p class="disc">
                                {{ $service->description }}
                            </p>
                            <a href="{{ route('service', $service->id) }}" class="btn-transparent">{{ getTranslatedWords('learn more') }}<i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="bg-shape">
            <img src="{{ asset('website_assets/images/service/11.png') }}" alt="srevice">
        </div>
    </div>
    <!-- rts-service-area end -->

    <!-- hospital branch area start -->
    <div class="rts-hospital-branch rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-wrapper-left">
                            <span class="pre">{{ getTranslatedWords('branches') }}</span>
                            <h2 class="title">
                                {{ settings('system_name') }} {{ getTranslatedWords('branches') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row mt--60">
                    <div class="col-lg-12 position-relative swiper-next-prev-controller">
                        <div class="swiper swiper-container-h3">
                            <div class="swiper-wrapper">
                                @foreach (App\Models\Branch::get() as $branch)
                                    <div class="swiper-slide">
                                        <div class="single-hospitalbranch">
                                            <a onclick="return false;" class="thumbnail">
                                                <img src="{{ route('file_show', [$branch->image, 'settings']) }}" alt="branch">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
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
                                                        <div class="phone-area">
                                                            {{ $branch->phone_1 }}
                                                            {{ $branch->phone_2 }}
                                                        </div>
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
    </div>
    <!-- hospital branch area end -->




    <!-- rts testimonials area start -->
    <div class="rts-testimonials-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">{{ getTranslatedWords('testimonials') }}</span>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <div class="col-lg-12">
                    <div class="swiper swiper-container-h1">
                        <div class="swiper-wrapper">

                            @foreach (App\Models\Testimonial::take(15)->get() as $testim)
                                <div class="swiper-slide">
                                    <div class="single-testimonials-style">
                                        <div class="quots">
                                            <img class="w-100 img-fluid" src="{{ route('file_show', [$testim->image, 'settings']) }}" alt="testimonails">
                                        </div>

                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimonials area end -->


    <!-- why choose us section start -->
    <div class="why-choose-area-wrapper bg-light  rts-section-gap ">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 mb_md--30 mb_sm--30">
                    <div class="title-between-area">
                        <div class="title-wrapper-right">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                <!-- Our Health <br> Service Steps -->
                                {{ getTranslatedWords('steps for medical services') }}

                            </h2>
                        </div>
                        <!-- <p class="disc wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                                                Easily schedule your appointment online, by phone, or in person. Our friendly staff will
                                                help you find a convenient time.
                                            </p> -->
                        <p class="disc wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                            {{ getTranslatedWords('here you are the steps for medical services') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="left-whychoose-us wow move-left">
                        <img src="{{ route('file_show', [settings('steps_image'), 'settings']) }}" alt="service">
                    </div>
                </div>
                <div class=" offset-lg-1 col-lg-5">
                    <div class="why-choose-us-area-wrapper-main">

                        <div class="why-choose-us-main-wrapper">
                            @foreach (App\Models\Step::get() as $step)
                                <div class="single-choose-us wow fadeInleft" data-wow-delay=".2s" data-wow-duration=".8s">
                                    <div class="icon">
                                        <img src="{{ route('file_show', [$step->image, 'settings']) }}" alt="service">
                                    </div>
                                    <div class="info">
                                        <h6 class="title">{{ $step->title }}</h6>
                                        <p>{{ $step->description }}</p>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us section end -->


    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-wrapper-left">
                            <h2 class="title">
                                {{ getTranslatedWords('articles and medical advices') }}
                            </h2>
                        </div>
                        <p class="disc">
                            {{ getTranslatedWords('many articles and medical advices') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                @foreach (App\Models\Blog::latest()->take(3)->get() as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">
                        <!-- single blog areas start -->
                        <div class="rts-single-blog">
                            <a href="{{ route('blog-details', $post->slug) }}" class="thumbnail">
                                <img src="{{ route('file_show', [$post->image, 'settings']) }}" alt="blog-image">
                            </a>
                            <div class="inner-content">
                                <a class="button-wrapper" href="{{ route('blog-details', $post->slug) }}">
                                    <h5 class="title">
                                        {{ $post->title }}
                                    </h5>
                                </a>
                                <a href="{{ route('blog-details', $post->slug) }}" class="rts-btn btn-primary border bg-transparent">{{ getTranslatedWords('read more') }}<img src="{{ asset('website_assets/images/banner/icons/arrow--up-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- single blog areas end -->
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- rts blog area end -->

    <!-- rts faq area start -->
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-gl-12">
                    <div class="container-wrapper-faq">
                        <div class="title-six-center">
                            <h2 class="title">
                                <!-- frequently asked questions -->
                                {{ getTranslatedWords('faqs') }}
                            </h2>
                        </div>
                        <div class="accordion mt--60" id="accordionExample">
                            @foreach (App\Models\Faq::get() as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button @if (!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne{{ $faq->id }}">
                                            {{ $faq->question }} @if (app()->getLocale() == 'en')
                                                ?
                                            @else
                                                ؟
                                            @endif
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{ $faq->id }}" class="accordion-collapse collapse @if ($loop->first) show @endif" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->

    <!-- request appoinment area start -->
    <div class="request-appoinment-area">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="request-appoinemnt-area-main-wrapper radious-0 bg_image rts-section-gap">
                        <!-- <span class="pre">Book Appointment</span> -->
                        <span class="pre">{{ getTranslatedWords('book appointment') }}</span>
                        <h2 class="title">
                            {{ getTranslatedWords('book appointment more easily and confortable') }}

                        </h2>
                        <a href="#" class="rts-btn btn-primary">{{ getTranslatedWords('press here') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- request appoinment area end -->
@endsection
