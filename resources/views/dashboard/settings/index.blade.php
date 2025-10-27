@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('settings'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}" />
@endsection
@section('js')
    <script src="{{ asset('assets/libs/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('new_assets/js/ckeditor/ckeditor.js') }}"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();
    </script>
@endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span>
            {{ getTranslatedWords('settings') }}</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">{{ getTranslatedWords('settings') }}</h5>
                    <!-- Account -->

                    <hr class="my-0" />
                    <div class="card-body">
                        <form enctype="multipart/form-data" id="formAccountSettings" method="POST"
                            action="{{ route('settings.update', $setting->id) }}">
                            @csrf
                            @method('put')
                            <div class="row">



                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('system name'),
                                        'required' => 'true',
                                        'model' => $setting,
                                    ])
                                        system_name
                                    @endcomponent

                                </div>
                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('address'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        address
                                    @endcomponent

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('email') }}</label>
                                    <input type="email" value="{{ $setting->email }}" class="form-control" name="email"
                                        placeholder="{{ getTranslatedWords('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('phone') }}</label>
                                    <input type="phone" value="{{ $setting->phone }}" class="form-control" name="phone"
                                        placeholder="{{ getTranslatedWords('phone') }}">
                                    @error('phone')
                                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    @if ($setting->logo != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current logo') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->logo, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('logo') }} 293 * 81
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('logo') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('logo')
                                        <div class="text-danger">{{ $errors->first('logo') }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    @if ($setting->about_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current about_us_image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->about_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('about_us_image') }} 650 * 650
                                    <div class="custom-file">
                                        <input type="file" name="about_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('about_us_image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('about_image')
                                        <div class="text-danger">{{ $errors->first('about_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    @if ($setting->why_us_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current why_us_image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->why_us_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('why_us_image') }} 876 * 1328
                                    <div class="custom-file">
                                        <input type="file" name="why_us_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('why_us_image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('why_us_image')
                                        <div class="text-danger">{{ $errors->first('why_us_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('facebook link') }}</label>
                                    <input type="url" value="{{ $setting->facebook_link }}" class="form-control" name="facebook_link"
                                        placeholder="{{ getTranslatedWords('facebook link') }}">
                                    @error('facebook_link')
                                        <div class="text-danger">{{ $errors->first('facebook_link') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('twitter link') }}</label>
                                    <input type="url" value="{{ $setting->twitter_link }}" class="form-control" name="twitter_link"
                                        placeholder="{{ getTranslatedWords('twitter link') }}">
                                    @error('twitter_link')
                                        <div class="text-danger">{{ $errors->first('twitter_link') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('youtube link') }}</label>
                                    <input type="url" value="{{ $setting->youtube_link }}" class="form-control" name="youtube_link"
                                        placeholder="{{ getTranslatedWords('youtube link') }}">
                                    @error('youtube_link')
                                        <div class="text-danger">{{ $errors->first('youtube_link') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('working times'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        working_times
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-6">
                                    @if ($setting->home_banner_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current home banner image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->home_banner_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('home banner image') }} 1920 * 1280
                                    <div class="custom-file">
                                        <input type="file" name="home_banner_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('home banner image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('home_banner_image')
                                        <div class="text-danger">{{ $errors->first('home_banner_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('home banner title'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        home_banner_title
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('home banner text'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        home_banner_text
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('home banner text'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        footer_description
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-12">
                                    @if ($setting->steps_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current steps image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->steps_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('steps image') }}  1920 x 1280
                                    <div class="custom-file">
                                        <input type="file" name="steps_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('steps image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('steps_image')
                                        <div class="text-danger">{{ $errors->first('steps_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    @if ($setting->appointment_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current appointment image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->appointment_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('appointment image') }} 1920 * 1280
                                    <div class="custom-file">
                                        <input type="file" name="appointment_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('appointment image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('appointment_image')
                                        <div class="text-danger">{{ $errors->first('appointment_image') }}</div>
                                    @enderror
                                </div>



                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('about us title'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        about_us_title
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('about us description'),
                                        'required' => 'false',
                                        'model' => $setting,
                                        'class'=>'ckeditor'
                                    ])
                                        about_us_description
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('meta description'),
                                        'required' => 'false',
                                        'model' => $setting,
                                    ])
                                        meta_description
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-6">
                                    @if ($setting->contact_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current contact image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->contact_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('contact image') }} 453 * 650
                                    <div class="custom-file">
                                        <input type="file" name="contact_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('contact image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('contact_image')
                                        <div class="text-danger">{{ $errors->first('contact_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    @if ($setting->pages_background_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current pages background image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $setting->pages_background_image, 'path' => 'settings']) }}" /><br>
                                    @endif
                                    {{ getTranslatedWords('pages background image') }} 1920 x 1280
                                    <div class="custom-file">
                                        <input type="file" name="pages_background_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('pages background image') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('pages_background_image')
                                        <div class="text-danger">{{ $errors->first('pages_background_image') }}</div>
                                    @enderror
                                </div>

                                

                            </div>
                            <div class="mt-2">
                                <button type="submit"
                                    class="btn btn-primary me-2">{{ getTranslatedWords('submit') }}</button>
                                <button type="reset"
                                    class="btn btn-outline-secondary">{{ getTranslatedWords('cancel') }}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>
    </div>
@endsection
