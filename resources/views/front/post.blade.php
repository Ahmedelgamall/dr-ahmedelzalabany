@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg" style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ $post->title }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </section>

    <section class="blog-area section-gap">
        <div class="container">
            <div class="row">
                <div class="blog-details-wrapper">
                    <div class="post-thumbnail">
                        <img class="img-fluid" src="{{ route('file_show', [$post->image, 'settings']) }}" alt="Image">
                    </div>
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="{{ route('blog-details', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            {!! $post->body !!}
                        </div>

                        <div class="details-line"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
