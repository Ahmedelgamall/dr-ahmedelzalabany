@extends('front.layouts.app')

@section('content')
    <!--====== Hero Area Start ======-->
    <section style="direction: ltr;" class="hero-area-two">
        <div class="hero-img"
            style="background-image: url({{ route('file_show', [settings('home_banner_image'), 'settings']) }});"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">

                        <h1 class="title wow fadeInRight" data-wow-delay="0.4s">{{ settings('home_banner_title') }}</h1>
                        <p class="wow fadeInLeft" data-wow-delay="0.5s"> {{ settings('home_banner_text') }}</p>
                        <a href="{{ route('services') }}" class="template-btn wow fadeInDown"
                            data-wow-delay="0.6s">{{ getTranslatedWords('services') }}<i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Appointment Section Start ======-->
    <section class="appointment-section">
        <div class="appointment-form-three bg-color-secondary">
            <div class="appointment-image" style="background-image: url(assets/img/appointment/04.jpg);">
            </div>
            <div class="form-wrap">
                <div class="section-heading text-center heading-white mb-60">

                    <h2 class="title">{{ getTranslatedWords('request appointment') }}</h2>
                </div>
                <form action="{{ route('request-appointment') }}" method="post" class="wow fadeInUp" data-wow-delay="0.3s">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="name" value='{{ old('name') }}'
                                    placeholder="{{ getTranslatedWords('patient name') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="phone" value='{{ old('phone') }}'
                                    placeholder="{{ getTranslatedWords('phone') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <select name="time">

                                    <option value="">{{ getTranslatedWords('select') }}
                                        {{ getTranslatedWords('appointment time') }}</option>
                                    <option value="noon">{{ getTranslatedWords('noon') }}</option>
                                    <option value="After the afternoon">{{ getTranslatedWords('After the afternoon') }}
                                    </option>
                                    <option value="evening">{{ getTranslatedWords('evening') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <select name="branch_id">

                                    <option value="">{{ getTranslatedWords('select') }}
                                        {{ getTranslatedWords('branch') }}</option>
                                    @foreach (App\Models\Branch::get() as $b)
                                        <option value="{{ $b->id }}">{{ $b->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="date" name="date" value='{{ old('date') }}'
                                    placeholder="{{ getTranslatedWords('date') }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-field">
                                <textarea rows="5" name="notes" placeholder="{{ getTranslatedWords('notes') }}">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-field">
                                <button type="submit" class="template-btn template-btn-primary">
                                    {{ getTranslatedWords('send') }} <i class="far fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== Appointment Section End ======-->

    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="about-content">
                        <div class="section-heading mb-35">
                            <span class="tagline">{{ getTranslatedWords('about us') }}</span>
                            <h2 class="title">{{ settings('about_us_title') }}</h2>

                        </div>
                        <p>{{ settings('about_us_description') }}</p>

                    </div>
                </div>
                <div class="col-lg-7 col-md-10">
                    <div class="bordered-icon-wrapper">
                        <img src="{{ route('file_show', [settings('about_image'), 'settings']) }}" alt="AboutImg">

                        <div class="border-icon">
                            <img src="{{ asset('website_assets/img/icon/shield.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-section bg-color-primary section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading heading-white text-center mb-70">
                        <span class="tagline">{{ getTranslatedWords('Popular Dental Services') }}</span>
                        <h2 class="title">{{ getTranslatedWords('Benefit FOr Physical Mental and Virtual Care') }}</h2>
                    </div>
                </div>
            </div>
            <div class="iconic-boxes-big-image">
                <div class="row justify-content-lg-between justify-content-center first-row">
                    @foreach (App\Models\Service::take(2)->get() as $s)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 first-column">
                            <div class="single-iconic-item wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ route('file_show', [$s->image, 'settings']) }}"
                                        alt="">
                                </div>
                                <h4 class="title"><a href="{{ route('service', $s->id) }}">{{ $s->title }}</a></h4>
                                <p>
                                    {{ $s->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row justify-content-lg-between justify-content-center second-row">
                    @foreach (App\Models\Service::skip(2)->take(2)->get() as $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 first-column">
                            <div class="single-iconic-item wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ route('file_show', [$service->image, 'settings']) }}"
                                        alt="">
                                </div>
                                <h4 class="title"><a
                                        href="{{ route('service', $service->id) }}">{{ $service->title }}</a></h4>
                                <p>
                                    {{ $service->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <img src="{{ route('file_show', [settings('steps_image'), 'settings']) }}" alt="Image" class="big-image">
                <img src="{{ asset('website_assets/img/iconic-box/border-line.png') }}" alt="Image"
                    class="border-image">
            </div>
        </div>
    </section>
    <!--====== Service Section End ======-->

    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-heading text-center mb-40">
                        <span class="tagline">{{ getTranslatedWords('articles and medical advices') }}</span>
                        <h2 class="title">{{ getTranslatedWords('many articles and medical advices') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center latest-blog-loop">
                @foreach (App\Models\Blog::latest()->take(3)->get() as $post)
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="latest-blog-two no-radius mt-30">
                            <div class="thumbnail">
                                <img src="{{ route('file_show', [$post->image, 'settings']) }}" alt="Image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{ route('blog-details', $post->slug) }}" class="blog-date"><i
                                            class="far fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($post->created_at)->isoFormat('ll') }}</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="{{ route('blog-details', $post->slug) }}">{{ $post->title }}</a>
                                </h4>
                                <p>
                                    {!! \Illuminate\Support\Str::words($post->body, 20, '...') !!}
                                </p>
                                <a href="{{ route('blog-details', $post->slug) }}"
                                    class="template-btn">{{ getTranslatedWords('learn more') }}<i
                                        class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="gallery-section section-gap-top">
        <div class="container-fluid fluid-70">
            <div class="section-heading text-center mb-40">
                <span class="tagline">{{ getTranslatedWords('contracts') }}</span>
                <h2 class="title">{{ getTranslatedWords('our success partners') }}</h2>
            </div>
            <div class="row gallery-loop justify-content-center">
                @foreach (App\Models\Contract::get() as $c)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="gallery-item-one mt-30">
                            <div class="gallery-thumbnail">
                                <img src="{{ route('file_show', [$c->image, 'settings']) }}" alt="Image">
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <div class="doctors-with-testimonial">

        <!--====== Testimonial Section Start ======-->
        <section class="testimonial-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-heading text-center mb-40">
                            <span class="tagline">{{ getTranslatedWords('Our Testimonial') }}</span>
                            <h2 class="title">{{ getTranslatedWords('What our Patients Say About Our Medical') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-xl-8 col-lg-9">
                        <div class="row justify-content-center">
                            @foreach (App\Models\Testimonial::get() as $t)
                                <div class="col-md-6 col-sm-10">
                                    <div class="testimonial-box mt-30 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="author-info-wrapper">
                                            <div class="avatar">
                                                <img src="{{ route('file_show', [$t->image, 'settings']) }}" alt="Images">
                                            </div>
                                            <div class="author-info">
                                                <h5 class="name">{{ $t->name }}</h5>
                                                <span class="title">{{ $t->title }}</span>
                                                <ul class="rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="content">
                                            {{ $t->opinion }}
                                        </p>
                                        <span class="quote-icon">
                                            <img src="{{ asset('website_assets/img/icon/right-quote.png') }}" alt="Quote">
                                        </span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Testimonial Section End ======-->

        <div class="section-image">
            <img src="{{ route('file_show', [settings('contact_image'), 'settings']) }}" alt="Image">
        </div>
    </div>


   
@endsection
