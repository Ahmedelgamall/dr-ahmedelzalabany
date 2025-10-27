@extends('front.layouts.app')
@section('content')
    <main class="bg-white">

        <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="title-breadcrumb">
                    <h2>{{ $service->title }}</h2>
                    <div class="breadcrumb-wrapper">
                        <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> - {{ $service->title }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- service details area start -->
        <div class="dextheme-section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 pr--40 pr_md--10 pr_sm--15">
                        <div class="service-details-left-wrapper">
                            <div class="thumbnail-large-service">
                                <img class="img-fluid" style="width: 60%; object-fit:cover;"
                                    src="{{ route('file_show', [$service->image, 'settings']) }}" alt="service">
                            </div>
                            <h3 class="title mt--35">{{ $service->title }}</h3>
                            <p class="disc mb--30">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-rightsidebar-single">
                            <h2 class="title">
                                {{ getTranslatedWords('other services') }}
                            </h2>
                            @foreach (App\Models\Service::where('id', '!=', $service->id)->inRandomOrder()->take(4)->get() as $s)
                                <a href="{{ route('service', $s->id) }}" class="single-department-service-wrapper mb-4 d-block">
                                    <div class="left-side">
                                        <div class="icon">
                                            <img class="img-fluid" src="{{ route('file_show', [$s->image, 'settings']) }}" alt="service">
                                        </div>
                                        <h4 class="title">{{ $s->title }}</h4>
                                    </div>
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            @endforeach


                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- service details area end -->


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
