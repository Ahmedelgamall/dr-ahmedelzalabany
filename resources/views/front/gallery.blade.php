@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('doctor certificates') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('doctor certificates') }}</li>
            </ul>
        </div>
    </section>

    <!--====== Gallery Area Start ======-->
    <section class="gallery-section section-gap">
        <div class="container">
            
            <div class="row gallery-loop gallery-filter-item">
                <div class="mb-4">
                    <h2 class="mb-2">{{ getTranslatedWords('doctor biography') }}</h2>
                    {!! settings('doctor_bio') !!}
                </div>
                @foreach (App\Models\Certificate::get() as $c)
                    <div class="col-lg-4 col-sm-6 medical dental-care">
                        <div class="gallery-item-two mt-30">
                            <div class="gallery-thumbnail">
                                <img src="{{ route('file_show', [$c->image, 'settings']) }}" alt="Image">
                            </div>
                            <div class="gallery-caption">
                                <div>
                                    <a href="{{ route('file_show', [$c->image, 'settings']) }}" class="plus-icon"><i class="far fa-plus"></i></a>
                                    <h3 class="title">{{$c->title}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                
            </div>
            
        </div>
    </section>
    <!--====== Gallery Area End ======-->

    
@endsection
 