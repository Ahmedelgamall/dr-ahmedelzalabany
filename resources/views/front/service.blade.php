@extends('front.layouts.app')
@section('content')
    <section class="page-title-area page-title-bg"
        style="background-image: url({{ route('file_show', [settings('pages_background_image'), 'settings']) }});">
        <div class="container">
            <h1 class="page-title">{{ $service->title }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a></li>
                <li><i class="fas fa-angle-left"></i></li>
                <li>{{ $service->title }}</li>
            </ul>
        </div>
    </section>

    <!--====== Service Area Start ======-->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 order-lg-last">
                    <div class="service-details-wrapper">
                        @if ($service->first_image)
                            <div class="service-thumbnail mb-50">
                                <img src="{{ route('file_show', [$service->first_image, 'settings']) }}" alt="Image">
                            </div>
                        @endif
                        <h2 class="service-title">{{ $service->title }}</h2>
                        <p>
                            {!! $service->description !!}
                        </p>
                        @if ($service->last_image)
                            <div class="service-thumbnail mb-50">
                                <img src="{{ route('file_show', [$service->last_image, 'settings']) }}" alt="Image">
                            </div>
                        @endif

                         <!--====== Appointment Section Start ======-->
                         <section class="appointment-section">
                            <div class="appointment-form-three bg-color-secondary">
                                <div class="appointment-image"
                                    style="background-image: url({{ route('file_show', [settings('appointment_image'), 'settings']) }});">
                                </div>
                                <div class="form-wrap">
                                    <div class="section-heading text-center heading-white mb-60">

                                        <h2 class="title">{{ getTranslatedWords('request service') }}</h2>
                                    </div>
                                    <form action="{{ route('request-appointment') }}" method="post" class="wow fadeInUp"
                                        data-wow-delay="0.3s">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="date" class="text-white">{{ getTranslatedWords('patient name') }}</label>
                                                <div class="input-field">
                                                    <input type="text" name="name" value='{{ old('name') }}'
                                                        placeholder="{{ getTranslatedWords('patient name') }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="date" class="text-white">{{ getTranslatedWords('phone') }}</label>
                                                <div class="input-field">
                                                    <input type="text" name="phone" value='{{ old('phone') }}'
                                                        placeholder="{{ getTranslatedWords('phone') }}">
                                                </div>
                                            </div>
                                           {{--  <div class="col-sm-6">
                                                <div class="input-field">
                                                    <select name="time">

                                                        <option value="">{{ getTranslatedWords('select') }}
                                                            {{ getTranslatedWords('appointment time') }}</option>
                                                        <option value="noon">{{ getTranslatedWords('noon') }}</option>
                                                        <option value="After the afternoon">
                                                            {{ getTranslatedWords('After the afternoon') }}
                                                        </option>
                                                        <option value="evening">{{ getTranslatedWords('evening') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">

                                            {{-- <div class="col-sm-6">
                                                <label for="date" class="text-white">{{ getTranslatedWords('service') }}</label>
                                                <div class="input-field">
                                                    <select name="service_id">
                                                       
                                                        <option value="">{{ getTranslatedWords('select') }}
                                                            {{ getTranslatedWords('service') }}</option>
                                                        @foreach (App\Models\Service::get() as $b)
                                                            <option value="{{ $b->id }}">{{ $b->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="date" class="text-white">{{ getTranslatedWords('date') }}</label>
                                                <div class="input-field">
                                                    <input type="date" name="date" value='{{ old('date') }}'
                                                        placeholder="{{ getTranslatedWords('date') }}">
                                                </div>
                                            </div> --}}
                                            <div class="col-sm-12">
                                                <label for="date" class="text-white">{{ getTranslatedWords('notes') }}</label>
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
                        <!--====== Appointment Section End ======-->

                        <section class="faq-section section-gap">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="faq-page-content">
                                            <h3 class="faq-title">{{ getTranslatedWords('Frequently Asked Questions') }}
                                            </h3>
                                            {{-- <p class="mb-35">
                                                Amet consectetur adipiscing sed eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                            </p> --}}
                                            <div class="accordion" id="accordionFaq">
                                                @if ($service->faqs != '')
                                                    @forelse ($service->faqs as $key => $f)
                                                        <div
                                                            class="accordion-item @if ($loop->first) active-accordion @endif">
                                                            <div class="accordion-header">
                                                                <h6 data-toggle="collapse" aria-expanded="true"
                                                                    data-target="#itemTwo{{ $key }}">
                                                                    <span>{{ $f['question'] }}</span>
                                                                </h6>
                                                            </div>
                                                            <div class="collapse @if ($loop->first) show @endif"
                                                                id="itemTwo{{ $key }}"
                                                                data-parent="#accordionFaq">
                                                                <div class="accordion-content">
                                                                    <p>
                                                                        {{ $f['answer'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                @endif



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Area End ======-->
@endsection
