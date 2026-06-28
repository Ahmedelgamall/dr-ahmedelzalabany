@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('add service'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}" />
@endsection
@section('js')
    <script src="{{ asset('assets/libs/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script>
       
        $(document).ready(function() {
            CKEDITOR.replaceAll('ckeditor');
            $('.repeater').repeater({
                initEmpty: false,
                defaultValues: {
                    'question': '',
                    'answer': ''
                },
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    if (confirm('{{ getTranslatedWords('Are you sure?') }}')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
        });
    </script>
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
            {{ getTranslatedWords('add service') }}</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">{{ getTranslatedWords('add service') }}</h5>
                  

                    <hr class="my-0" />
                    <div class="card-body">
                        <form enctype="multipart/form-data" id="formAccountSettings" method="POST"
                            action="{{ route('services.store') }}">
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
                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('description'),
                                        'required' => 'true',
                                        'class' => 'ckeditor',
                                    ])
                                        description
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('short description'),
                                        'required' => 'false',
                                    ])
                                    short_description
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('meta description'),
                                        'required' => 'false',
                                    ])
                                        meta_description
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('meta title'),
                                        'required' => 'false',
                                    ])
                                        meta_title
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-6">

                                    {{ getTranslatedWords('image') }} 150 * 150
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

                                <div class="mb-3 col-md-6">

                                    {{ getTranslatedWords('first image in service') }}
                                    <div class="custom-file">
                                        <input type="file" name="first_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('first image in service') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('first_image')
                                        <div class="text-danger">{{ $errors->first('first_image') }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">

                                    {{ getTranslatedWords('last image in service') }}
                                    <div class="custom-file">
                                        <input type="file" name="last_image" class="custom-file-input"
                                            id="validatedCustomFile">
                                        <label class="custom-file-label"
                                            for="validatedCustomFile">{{ getTranslatedWords('last image in service') }}</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    @error('last_image')
                                        <div class="text-danger">{{ $errors->first('last_image') }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="repeater">
                                        <div data-repeater-list="faqs">

                                            <div data-repeater-item class="mb-3">
                                                <input type="text" name="question"
                                                    placeholder="{{ getTranslatedWords('question') }}"
                                                    class="form-control mb-2" />
                                                <textarea name="answer" placeholder="{{ getTranslatedWords('answer') }}" class="form-control mb-2"></textarea>

                                                <button type="button" data-repeater-delete class="btn btn-danger">
                                                    {{ getTranslatedWords('remove') }}
                                                </button>
                                            </div>

                                        </div>

                                        <button type="button" data-repeater-create class="btn btn-primary mt-2">
                                            {{ getTranslatedWords('Add FAQ') }}
                                        </button>
                                    </div>
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
                    
                </div>

            </div>
        </div>
    </div>
@endsection
