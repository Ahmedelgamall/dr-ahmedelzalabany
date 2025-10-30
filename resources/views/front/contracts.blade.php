@extends('front.layouts.app')

@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('contracts') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('contracts') }}</li>
            </ul>
        </div>
    </section>

    <section class="gallery-section section-gap-top section-gap">
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
   
@endsection
