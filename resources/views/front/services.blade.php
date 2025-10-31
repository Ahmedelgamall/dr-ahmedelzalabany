@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ getTranslatedWords('services') }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ getTranslatedWords('services') }}</li>
            </ul>
        </div>
    </section>

    <section class="services-area section-gap-top-less bg-color-grey">
        <div class="container">
            <div class="row justify-content-center service-loop">

                @foreach (App\Models\Service::get() as $s)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="iconic-box mt-30">
                            <div class="icon">
                                <img src="{{ route('file_show', [$s->image ,'settings']) }}" alt="Icon">
                            </div>
                            <h4 class="title"><a href="{{ route('service', $s->id) }}">{{ $s->title }}</a></h4>
                            <p>
                                {{ $s->description }}
                            </p>

                            <div class="box-link-wrap">
                                <span class="link-icon"><i class="far fa-plus"></i></span>
                                <a class="box-link" href="{{ route('service', $s->id) }}">{{ getTranslatedWords('learn more') }} <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="appointment-section section-gap">
        <div class="appointment-form-three bg-color-secondary">
            <div class="appointment-image" style="background-image: url({{ route('file_show', [settings('appointment_image'), 'settings']) }});">
            </div>
            <div class="form-wrap">
                <div class="section-heading text-center heading-white mb-60">

                    <h2 class="title">{{ getTranslatedWords('request appointment') }}</h2>
                </div>
                <form action="{{ route('request-appointment') }}" method="post" class="wow fadeInUp" data-wow-delay="0.3s">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="name" value='{{ old('name') }}'
                                    placeholder="{{ getTranslatedWords('patient name') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="phone" value='{{ old('phone') }}'
                                    placeholder="{{ getTranslatedWords('phone') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <select name="time">

                                    <option value="">{{ getTranslatedWords('select') }}
                                        {{ getTranslatedWords('appointment time') }}</option>
                                    <option value="noon">{{ getTranslatedWords('noon') }}</option>
                                    <option value="After the afternoon">{{ getTranslatedWords('After the afternoon') }}
                                    </option>
                                    <option value="evening">{{ getTranslatedWords('evening') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <select name="branch_id">

                                    <option value="">{{ getTranslatedWords('select') }}
                                        {{ getTranslatedWords('branch') }}</option>
                                    @foreach (App\Models\Branch::get() as $b)
                                        <option value="{{ $b->id }}">{{ $b->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="date" name="date" value='{{ old('date') }}'
                                    placeholder="{{ getTranslatedWords('date') }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-field">
                                <textarea rows="5" name="notes" placeholder="{{ getTranslatedWords('notes') }}">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-field">
                                <button type="submit" class="template-btn template-btn-primary">
                                    {{ getTranslatedWords('send') }} <i class="far fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
   
@endsection
