@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('edit order'))
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
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span> {{ getTranslatedWords('edit order') }}</h4>

    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <h5 class="card-header">{{ getTranslatedWords('edit order') }}</h5>
                <!-- Account -->

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('orders.update', $row->id) }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">{{ getTranslatedWords('customer') }}</label>
                                <input
                                    class="form-control"
                                    type="text"

                                    value="{{ $row->name }}"
                                    readonly
                                    autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('phone') }}</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    readonly
                                    value="{{ $row->phone }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('city') }}</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    readonly
                                    value="{{ $row->city->name }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('area') }}</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    readonly
                                    value="{{ $row->area->name }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('address') }}</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    readonly
                                    value="{{ $row->address }}" />
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="email" class="form-label">{{ getTranslatedWords('products') }}</label>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>{{getTranslatedWords('product')}}</td>
                                            <td>{{getTranslatedWords('quantity')}}</td>
                                            <td>{{getTranslatedWords('price')}}</td>
                                            <td>{{getTranslatedWords('sub total')}}</td>
                                        </tr>
                                        @foreach($row->products()->get() as $product)
                                        <tr>
                                            <td>{{$product->product->name}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td>{{$product->product->price}}</td>
                                            <td>{{$product->qty*$product->product->price}}</td>
                                        </tr>
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td>
                                                    {{$row->products()->get()->sum(function($q){
                                                            return $q->product->price * $q->qty;
                                                        })}}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('shipping fees') }}</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    readonly
                                    value="{{ $row->area->shipping_fees }}" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">{{ getTranslatedWords('status') }}</label>
                                <select id="country" class="select2 form-select" name="status">
                                    @foreach (['pending','prepared','shipped','delivered'] as $status)
                                    <option value="{{ $status }}" @if ($row->status == $status) selected @endif>{{ getTranslatedWords(''.$status) }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="text-danger">{{ $errors->first('status') }}</div>
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