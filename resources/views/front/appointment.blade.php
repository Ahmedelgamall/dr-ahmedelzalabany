@extends('front.layouts.app')
@section('js')
<script>
    $('.take_time li').on('click',function(){
        $('.time').val($(this).attr('data-value'));
    })
    $('.take_branch li').on('click',function(){
        $('.branch_id').val($(this).attr('data-value'));
    })

    
</script>
@endsection
@section('content')

<main class="bg-white">

    <section class="heading-wrapper" data-bg="{{ route('file_show', [settings('pages_background_image'), 'settings']) }}">
        <div class="dextheme-container">
            <div class="title-breadcrumb">
                <h2>{{ getTranslatedWords('request appointment') }}</h2>
                <div class="breadcrumb-wrapper">
                    <p><a href="{{ route('home') }}">{{ getTranslatedWords('home') }}</a> - {{ getTranslatedWords('request appointment') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
     <section class="consultation-section bg-white">
        <div class="dextheme-container">
            <div class="dextheme-row">
                <div class="dextheme-col-lg-6 dextehme-col-12">
                <div class="stack-images bg-size-contain"
                            data-bg="{{ asset('website_assets/images/Overlay-5.png') }}">
                            <img class="image-base dextheme-w-100 dextheme-animation" data-animate="animate__slideInUp"
                                src="{{ route('file_show', [settings('appointment_image'), 'settings']) }}">
                        </div>
                  
                </div>
                <div class="dextheme-col-lg-6 dextehme-col-12">
                    <div class="consultation-form bg-secondary-opaque dextheme-animation"
                        data-animate="animate__slideInDown">
                        <div class="heading-text">
                            <h4>{{ getTranslatedWords('request appointment') }}</h4>

                        </div>
                        <form method="post" action="{{route('request-appointment')}}">
                        @csrf
                        <div class="dextheme-row gy-4 mb-4">
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="text" name="name" value='{{old('name')}}'
                                    placeholder="{{ getTranslatedWords('patient name') }}">
                            </div>
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="tel" name="phone"
                                    placeholder="{{ getTranslatedWords('phone') }}">
                            </div>
                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <input type="text" name="radians_type" value='{{old('radians_type')}}'
                                    placeholder="{{ getTranslatedWords('radians type') }}">
                            </div>

                              <div class="dextheme-col-lg-6 dextheme-col-md-12">
                               <input type="date" name="date" value="{{ old('date') }}" id="datepicker" placeholder="{{ getTranslatedWords('appointment date') }}">
                               
                                
                            </div>

                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <label>{{ getTranslatedWords('appointment time') }}</label>
                                <select class="form-control" name="time">
                                    <option value="">{{getTranslatedWords('select')}}</option>
                                    <option value="noon">{{getTranslatedWords('noon')}}</option>
                                    <option value="After the afternoon">{{getTranslatedWords('After the afternoon')}}</option>
                                    <option value="evening">{{getTranslatedWords('evening')}}</option>
                
                                </select>
                                
                            </div>

                            <div class="dextheme-col-lg-6 dextheme-col-md-12">
                                <label>{{ getTranslatedWords('branch') }}</label>
                                <select class="form-control" name="branch_id">
                                    <option value="">{{getTranslatedWords('select')}}</option>
                                    @foreach (App\Models\Branch::get() as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                   @endforeach
                
                                </select>
                                
                            </div>
                             
                            

                            <div class="dextheme-col-md-12">
                                <textarea rows="5" name="notes" placeholder="{{ getTranslatedWords('notes') }}">{{old('notes')}}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="dextheme-btn btn-secondary hover-primary no-effect">
                            {{ getTranslatedWords('send') }}
                        </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

      <section class="methodology-section dextheme-section-padding"
            data-bg="{{ route('file_show', [settings('steps_image'), 'settings']) }}">
            <div class="dextheme-container">
                <div class="heading-section text-center mb-4 dextheme-w-65 mx-auto">

                    <h1 class="heading-title text-white mb-4"> {{ getTranslatedWords('steps for medical services') }}</h1>
                    <p class="text-white">
                        {{ getTranslatedWords('here you are the steps for medical services') }}
                    </p>
                </div>
                <div class="methodology-steps pt-3">
                    @foreach (App\Models\Step::get() as $key=> $step)
                        <div class="each-step">
                            <div class="step-heading">
                                <h3>{{ $key+1 }}.</h3>
                            </div>
                            <div class="step-text text-center text-white">
                                <h4>{{ $step->title }}</h4>
                                <p>{{ $step->description }}</p>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
</main>
  

    
    @endsection