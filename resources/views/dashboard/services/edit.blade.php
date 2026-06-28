@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('edit service'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/select2.min.css') }}" />
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            {{ getTranslatedWords('edit service') }}</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">{{ getTranslatedWords('edit service') }}</h5>
                    <!-- Account -->

                    <hr class="my-0" />
                    <div class="card-body">
                        <form enctype="multipart/form-data" id="formAccountSettings" method="POST"
                            action="{{ route('services.update', $row->id) }}">
                            @csrf
                            @method('put')


                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('title'),
                                        'required' => 'true',
                                        'model' => $row,
                                    ])
                                        title
                                    @endcomponent

                                </div>


                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('description'),
                                        'required' => 'true',
                                        'model' => $row,
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
                                        'model' => $row,
                                    ])
                                    short_description
                                    @endcomponent
                                </div>

                                <div class="mb-3 col-md-12">
                                    @component('components.input_trans', [
                                        'type' => 'textarea',
                                        'label' => getTranslatedWords('meta description'),
                                        'required' => 'false',
                                        'model' => $row,
                                    ])
                                        meta_description
                                    @endcomponent
                                </div>

                                

                                <div class="mb-3 col-md-6">
                                    @component('components.input_trans', [
                                        'type' => 'text',
                                        'label' => getTranslatedWords('meta title'),
                                        'required' => 'false',
                                        'model' => $row,
                                    ])
                                        meta_title
                                    @endcomponent

                                </div>

                                <div class="mb-3 col-md-6">
                                    @if ($row->image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current image') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $row->image, 'path' => 'settings']) }}" /><br>
                                    @endif
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
                                    @if ($row->first_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current first image in service') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $row->first_image, 'path' => 'settings']) }}" /><br>
                                    @endif
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
                                    @if ($row->last_image != '')
                                        <label for="email"
                                            class="form-label">{{ getTranslatedWords('current last image in service') }}</label>
                                        <img class="img-fluid"
                                            src="{{ route('file_show', ['filename' => $row->last_image, 'path' => 'settings']) }}" /><br>
                                    @endif
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
                                    <label class="form-label">{{ getTranslatedWords('faqs') }}</label>

                                    <div class="repeater">
                                        <div data-repeater-list="faqs">

                                            @forelse($row->faqs ?? [] as $faq)
                                                <div data-repeater-item class="mb-3">
                                                    <input type="text" name="question"
                                                        value="{{ $faq['question'] ?? '' }}" class="form-control mb-2">

                                                    <textarea name="answer" class="form-control mb-2">{{ $faq['answer'] ?? '' }}</textarea>

                                                    <button type="button" data-repeater-delete class="btn btn-danger">
                                                        {{ getTranslatedWords('remove') }}
                                                    </button>
                                                </div>
                                            @empty
                                            
                                                <div data-repeater-item class="mb-3">
                                                    <input type="text" name="question" class="form-control mb-2"
                                                        placeholder="{{ getTranslatedWords('question') }}">

                                                    <textarea name="answer" class="form-control mb-2" placeholder="{{ getTranslatedWords('answer') }}"></textarea>

                                                    <button type="button" data-repeater-delete class="btn btn-danger">
                                                        {{ getTranslatedWords('remove') }}
                                                    </button>
                                                </div>
                                            @endforelse

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
                    <!-- /Account -->
                </div>

            </div>
        </div>
    </div>
@endsection
