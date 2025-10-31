@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg" style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ $service->title }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ $service->title }}</li>
            </ul>
        </div>
    </section>

    <!--====== Service Area Start ======-->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 order-lg-last">
                    <div class="service-details-wrapper">
                        <div class="service-thumbnail mb-50">
                            <img src="{{ route('file_show', [$service->image ,'settings']) }}" alt="Image">
                        </div>
                        <h2 class="service-title">{{ $service->title }}</h2>
                        <p>
                           {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Area End ======-->

    

@endsection
