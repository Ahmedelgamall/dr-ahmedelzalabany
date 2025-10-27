@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('add branch'))
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}" />
@endsection
@section('js')
<script src="{{ asset('assets/libs/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>

<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();
</script>
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span> {{ getTranslatedWords('add admin') }}</h4>

    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <h5 class="card-header">{{ getTranslatedWords('add branch') }}</h5>
                <!-- Account -->

                <hr class="my-0" />
                <div class="card-body">
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('branches.store') }}">
                        @csrf



                        <div class="row">
                            <div class="mb-3 col-md-6">
                                @component('components.input_trans', [
                                    'type' => 'text',
                                    'label' => getTranslatedWords('name'),
                                    'required' => 'true',
                                ])
                                    name
                                @endcomponent

                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('phone_1') }}</label>
                                <input type="tel" value="{{ old('phone_1') }}" class="form-control" name="phone_1"
                                    placeholder="{{ getTranslatedWords('phone_1') }}">
                                @error('phone_1')
                                <div class="text-danger">{{ $errors->first('phone_1') }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('phone_2') }}</label>
                                <input type="tel" value="{{ old('phone_2') }}" class="form-control" name="phone_2"
                                    placeholder="{{ getTranslatedWords('phone_2') }}">
                                @error('phone_2')
                                <div class="text-danger">{{ $errors->first('phone_2') }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('location_url') }}</label>
                                <input type="url" value="{{ old('location_url') }}" class="form-control" name="location_url"
                                    placeholder="{{ getTranslatedWords('location_url') }}">
                                @error('location_url')
                                <div class="text-danger">{{ $errors->first('location_url') }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                @component('components.input_trans', [
                                    'type' => 'text',
                                    'label' => getTranslatedWords('address'),
                                    'required' => 'true',
                                  
                                ])
                                    address
                                @endcomponent

                            </div>
                            

                            <div class="mb-3 col-md-6">
                               
                                {{ getTranslatedWords('image') }} 600 * 506
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input"
                                        id="validatedCustomFile">
                                    <label class="custom-file-label"
                                        for="validatedCustomFile">{{ getTranslatedWords('image') }}</label>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                @enderror
                            </div>

                            





                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">{{ getTranslatedWords('submit') }}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ getTranslatedWords('cancel') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>
</div>
@endsection