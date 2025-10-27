@extends('front.layouts.app')
@section('content')
    <main class="bg-white">
        <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="title-breadcrumb">
                    <h2>{{ getTranslatedWords('blog') }}</h2>
                    <div class="breadcrumb-wrapper">
                        <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> -
                            {{ getTranslatedWords('blog') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="dextheme-section-padding bg-white">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-5 dextheme-w-65 mx-auto">

                    <h1 class="heading-title mb-4">{{ getTranslatedWords('articles and medical advices') }}</h1>
                    <p> {{ getTranslatedWords('many articles and medical advices') }}</p>
                </div>
                <div class="dextheme-row mb-4">
                    @foreach ($posts as $post)
                        <div class="dextheme-col-lg-4 dextheme-md-12">
                            <div class="blog-card-item mb-4">
                                <div class="blog-card-thumbnail">
                                    <img src="{{ route('file_show', [$post->image, 'settings']) }}">
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta">

                                        <div class="meta-item">
                                            <i aria-hidden="true" class="icon icon-calendar3 me-2"></i>
                                            <span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('ll') }}</span>
                                        </div>

                                    </div>
                                    <h4 class="text-primary mb-3"> {{ $post->title }}</h4>
                                    <p>{!! \Illuminate\Support\Str::words($post->body, 20, '...') !!}
                                    </p>
                                    <a href="{{ route('blog-details', $post->slug) }}">{{ getTranslatedWords('learn more') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        {{ $posts->links('pagination::bootstrap-4') }}

                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
