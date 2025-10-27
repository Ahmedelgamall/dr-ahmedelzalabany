@extends('front.layouts.app')
@section('content')
    <main class="bg-white">

        <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="title-breadcrumb">
                    <h2>{{ $post->title }}</h2>
                    <div class="breadcrumb-wrapper">
                        <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> - {{ $post->title }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog list area start -->
        <section class="dextheme-section-padding bg-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="blog-details-main-wrapper">
                            <div class="thumbnail-main">
                                <img class="img-fluid" src="{{ route('file_show', [$post->image, 'settings']) }}" alt="">
                            </div>
                            <div class="inner-content mt-4">
                                <h3 class="title">
                                    {{ $post->title }}
                                </h3>
                                <p class="disc">
                                    {!! $post->body !!}
                                </p>

                                <div class="tag-share-wrapper-blog-details">
                                    {{-- <div class="tag-area">
                                    <span>Tags :</span>
                                    <button>Service</button>
                                    <button>Business</button>
                                    <button>Design</button>
                                </div> --}}
                                    <div class="social-area">
                                        <span>{{ getTranslatedWords('share') }}</span>
                                        <ul class="d-flex align-items-center">
                                            <li class="mx-2"><a target="_blank"
                                                    href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"><i
                                                        class="ekit-icon icon icon-facebook"></i></a></li>
                                            <li class="mx-2"><a target="_blank"
                                                    href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"><i
                                                        class="ekit-icon icon icon-twitter"></i></a></li>
                                            <li class="mx-2"><a target="_blank"
                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"><i
                                                        class="ekit-icon icon icon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl--40 pl_md--10 pl_sm--15">
                        {{-- <div class="single-sidebar-wized">
                        <div class="search">
                            <input type="text" placeholder="Enter Keyword">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </div>
                    </div> --}}

                        <div class="single-sidebar-wized">
                            <div class="title-area">
                                <h5 class="title">{{ getTranslatedWords('Recent Posts') }}</h5>
                            </div>
                            @foreach (App\Models\Blog::where('id', '!=', $post->id)->latest()->take(5)->get() as $p)
                                <div class="signle-post-short-area mb-4">
                                    <a href="{{ route('blog-details', $p->slug) }}" class="thumbnail">
                                        <img class="img-fluid" src="{{ route('file_show', [$p->image, 'settings']) }}" alt="blog">
                                    </a>
                                    <div class="infor">
                                        <div class="time">
                                            <i class="fa-sharp fa-light fa-clock"></i>
                                            {{ Carbon\Carbon::parse($p->created_at)->isoFormat('ll') }}

                                        </div>
                                        <a href="{{ route('blog-details', $p->slug) }}">
                                            <h5 class="title">
                                                {{ $p->title }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                       
                    </div>
                </div>
            </div>
        </section>
        <!-- blog list area end -->
    </main>
@endsection
