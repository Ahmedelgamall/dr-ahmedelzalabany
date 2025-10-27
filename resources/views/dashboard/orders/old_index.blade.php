@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('orders'))
@section('css')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection
@section('js')
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        let table = $('#datatables').DataTable({
            bLengthChange: false,
            "bDestroy": true,
            processing: true,
            serverSide: true,
            order: [
                [0, "desc"]
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
            },
            "ajax": ({
                url: '{!! route('orders.index') !!}',

            }),
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: true
                },
                {
                    data: 'customer',
                    name: 'customer',
                    orderable: false
                },

                {
                    data: 'phone',
                    name: 'phone',
                    orderable: false
                },

                {
                    data: 'city',
                    name: 'city',
                    orderable: false
                },

                {
                    data: 'area',
                    name: 'area',
                    orderable: false
                },

                {
                    data: 'address',
                    name: 'address',
                    orderable: false
                },
                {
                    data: 'date',
                    name: 'date',
                    orderable: false
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false
                },
               
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },

            ],



            columnDefs: [{
                visible: false
            }],
            responsive: true,
        });

        $(document).on('click', '.delete', function() {
            var id = $(this).attr('data-id');
            var action = $('#delete form').attr('action');
            var new_action = action.substr(0, action.lastIndexOf('/') + 1) + id;
            $('#delete form').attr('action', new_action);
            $("#delete").modal('show');
        });
    </script>
@endsection
@section('content')



    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">{{getTranslatedWords('orders')}}</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{getTranslatedWords('orders')}}
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
                    <div class="card-body">
                        

                        <h5 class="card-title">{{getTranslatedWords('orders')}}</h5>
                        <div class="table-responsive">
                            <table id="datatables" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{getTranslatedWords('customer')}}</th>
                                        <th>{{getTranslatedWords('phone')}}</th>
                                        <th>{{getTranslatedWords('city')}}</th>
                                        <th>{{getTranslatedWords('area')}}</th>
                                        <th>{{getTranslatedWords('address')}}</th>
                                        <th>{{getTranslatedWords('date')}}</th>
                                        <th>{{getTranslatedWords('status')}}</th>
                                        <th>{{getTranslatedWords('actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card -->
                        <div class="modal fade" id="delete">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{getTranslatedWords('delete')}}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ route('orders.destroy', 0) }}">
                                        @csrf
                                        @method('delete')
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">{{getTranslatedWords('close')}}</button>
                                            <button type="submit" class="btn btn-danger">{{getTranslatedWords('delete')}}</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
