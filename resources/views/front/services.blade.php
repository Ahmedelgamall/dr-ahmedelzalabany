@extends('front.layouts.app')
@section('content')
<main class="bg-white">
    <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
        <div class="dextheme-container">
            <div class="title-breadcrumb">
                <h2>{{ getTranslatedWords('services') }}</h2>
                <div class="breadcrumb-wrapper">
                    <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> -
                        {{ getTranslatedWords('services') }}
                    </p>
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
                @foreach (App\Models\Service::get() as $service)
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