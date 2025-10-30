@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('contact us') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('contact us') }}</li>
            </ul>
        </div>
    </section>

    <section class="contact-form-area">

        <div class="section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-heading mb-60 text-center">
                            <span class="tagline">{{ getTranslatedWords('always here for you') }}</span>
                            <h2 class="title">{{ getTranslatedWords('Leave a Message') }}</h2>
                        </div>
                        <form action="{{ route('send-contact') }}" name="contactForm" method="post" class="contact-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field form-group">
                                        <label for="name">{{ getTranslatedWords('patient name') }}</label>
                                        <input type="text" name="name" value='{{ old('name') }}'
                                            placeholder="{{ getTranslatedWords('patient name') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field form-group">
                                        <label for="email">{{ getTranslatedWords('email') }}</label>
                                        <input type="email" name="email" value='{{ old('email') }}'
                                            placeholder="{{ getTranslatedWords('email') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field form-group">
                                        <label for="number">{{ getTranslatedWords('phone') }}</label>
                                        <input type="tel" placeholder="{{ getTranslatedWords('phone') }}"
                                            name="phone" value='{{ old('phone') }}'
                                            placeholder="{{ getTranslatedWords('phone') }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-field form-group">
                                        <label for="message">{{ getTranslatedWords('message') }}</label>
                                        <textarea id="message" name="message" placeholder="{{ getTranslatedWords('message') }}" required
                                            data-error="Please enter your name">{{ old('message') }}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="template-btn">{{ getTranslatedWords('send') }}<i
                                                class="far fa-plus"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
