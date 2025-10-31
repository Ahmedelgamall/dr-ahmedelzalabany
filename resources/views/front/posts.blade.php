@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg" style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('blog') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('blog') }}</li>
            </ul>
        </div>
    </section>

    <!--====== Blog Standard Start ======-->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-loop">
                        @foreach ($posts as $post)
                            <div class="single-blog-post">
                                <div class="post-thumbnail">
                                    <img src="{{ route('file_show', [$post->image, 'settings']) }}" alt="Image">
                                    <a href="{{ route('blog-details', $post->slug) }}" class="post-link"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="post-content">

                                    <h3 class="post-title">
                                        <a href="{{ route('blog-details', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p>
                                        {!! \Illuminate\Support\Str::words($post->body, 20, '...') !!}
                                    </p>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="{{ route('blog-details', $post->slug) }}"><i class="far fa-calendar-alt"></i>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('ll') }}</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{ $posts->links('pagination::bootstrap-4') }}
                    {{-- <ul class="pagination">
                         <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li class="dots"><span></span><span></span><span></span></li>
                        <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                    </ul> --}}
                </div>
                <div class="col-lg-4">
                    <div class="primary-sidebar">
                        <div class="widget search-widget">
                            <h4 class="widget-title">{{ getTranslatedWords('search') }}</h4>
                            <form action="{{ route('blog') }}" method="get" class="search-form">
                                <input type="search" placeholder="{{ getTranslatedWords('search') }}">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget latest-post-widget">
                            <h4 class="widget-title">{{ getTranslatedWords('Latest Articles') }}</h4>
                            <div class="latest-post-loop">
                                @foreach (App\Models\Blog::latest()->take(3)->get() as $p)
                                    <div class="single-post">
                                        <div class="thumbnail">
                                            <img src="{{ route('file_show', [$p->image, 'settings']) }}" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('blog-details', $p->slug) }}">{{ $p->title }}</a></h6>
                                            <span class="date"><i class="far fa-calendar-alt"></i> {{ Carbon\Carbon::parse($p->created_at)->isoFormat('ll') }}</span>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Blog Standard End ======-->
   
@endsection
