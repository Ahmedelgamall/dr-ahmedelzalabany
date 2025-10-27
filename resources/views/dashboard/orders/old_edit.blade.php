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
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">{{ getTranslatedWords('edit order') }}</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ getTranslatedWords('home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ getTranslatedWords('edit order') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form enctype="multipart/form-data" method="post" action="{{ route('orders.update', $row->id) }}" class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <h4 class="card-title">{{ getTranslatedWords('edit order') }}</h4>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('customer') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->name }}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('phone') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->phone }}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('city') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->city->name }}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('area') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->area->name }}" readonly>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('address') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->address }}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('products') }}</label>
                            <div class="col-md-9">
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
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('shipping fees') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $row->area->shipping_fees }}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">{{ getTranslatedWords('status') }}</label>
                            <div class="col-md-9">
                                <select class="form-control" name="status" id="">

                                    @foreach (['pending','prepared','shipped','delivered'] as $status)
                                    <option value="{{ $status }}" @if ($row->status == $status) selected @endif>{{ getTranslatedWords(''.$status) }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="text-danger">{{ $errors->first('status') }}</div>
                                @enderror
                            </div>
                        </div>




                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">
                                    {{ getTranslatedWords('submit') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection