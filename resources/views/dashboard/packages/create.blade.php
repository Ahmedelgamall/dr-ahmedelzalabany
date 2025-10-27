@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('add package'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}" />
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('assets/libs/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2({
            tags: true,
            tokenSeparators: []
        });
    </script>
@endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span>
            {{ getTranslatedWords('add package') }}</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">{{ getTranslatedWords('add package') }}</h5>
                    <!-- Account -->

                    <hr class="my-0" />
                    <div class="card-body">
                        <form enctype="multipart/form-data" id="formAccountSettings" method="POST"
                            action="{{ route('packages.store') }}">
                            @csrf



                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('title'),
                                        'required' => 'true',
                                    ])
                                        title
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="email" class="form-label">{{ getTranslatedWords('price') }}</label>
                                    <input type="number" value="{{ old('price') }}" class="form-control" name="price"
                                        placeholder="{{ getTranslatedWords('price') }}">
                                    @error('price')
                                        <div class="text-danger">{{ $errors->first('price') }}</div>
                                    @enderror
                                </div>




                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">{{ getTranslatedWords('list') }}</label>
                                    @foreach (['ar', 'en'] as $lang)
                                        <select name="list:{{ $lang }}[]" class="select2 form-control" multiple
                                            id=""></select>
                                        <span class="help-block">{{ $lang == 'ar' ? 'العربية' : 'english' }}</span>
                                        <div class="clearfix"> </div> <br />
                                        @error('list:' . $lang)
                                            <div class="text-danger">{{ $errors->first('list:' . $lang) }}</div>
                                        @enderror
                                    @endforeach

                                </div>




                                <div class="mb-3 col-md-6">

                                    {{ getTranslatedWords('image') }} 200 * 200
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
