@extends('front.layouts.app')
@section('content')

<main class="bg-white">

        <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="title-breadcrumb">
                    <h2>{{ getTranslatedWords('packages') }}</h2>
                    <div class="breadcrumb-wrapper">
                        <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> - {{ getTranslatedWords('packages') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="dextheme-section-padding bg-white">
  <div class="dextheme-container">
    <div class="heading-section text-center mb-5 dextheme-w-65 mx-auto">
     
      <h1 class="heading-title mb-4">{{ getTranslatedWords('our packages') }}</h1>
      <p>{{ getTranslatedWords('choose between many packages') }}</p>
    </div>
    <div class="dextheme-row g-4">
    @foreach (App\Models\Package::get() as $package)
      <div class="dextheme-col-lg-4 dextheme-col-12">
        <div class="pricing-card">
          <div class="pricing-title">
            <h4 class="text-primary">{{$package->title}}</h4>
          </div>
          <div class="pricing-price">
            <div class="currency">{{ getTranslatedWords('L.E') }}</div>
            <div class="price">{{ $package->price }} </div>
           
          </div>
          <hr>
          <div class="pricing-desc">
            <ul class="pricing-desc-list">
             @php($list = 'list:' . app()->getLocale())
             @php($meta_lang = explode(',', $package->$list))
              @foreach ($meta_lang as $item)
                                            <li class="list-item">
                <span class="bg-secondary svg-icon circle-check-icon"></span>
                {{$item}}
              </li>
                                        @endforeach
              
             
            </ul>
          </div>
         
          <a href="{{ route('appointment') }}" class="dextheme-btn btn-primary hover-normal mt-3">
            {{ getTranslatedWords('Book Now') }}
          </a>
        </div>
      </div>
    @endforeach
      
    </div>
  </div>
</section>
</main>
   
   
@endsection
