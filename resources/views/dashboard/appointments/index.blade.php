@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('appointments'))
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
            @if (App::getLocale() == 'ar')
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
                },
            @endif
            "ajax": ({
                url: "{!! route('appointments.index') !!}",

            }),
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: true
                },
                {
                    data: 'name',
                    name: 'name',
                    orderable: false
                },

                {
                    data: 'phone',
                    name: 'phone',
                    orderable: false
                },

                {
                    data: 'radians_type',
                    name: 'radians_type',
                    orderable: false
                },

                {
                    data: 'branch',
                    name: 'branch',
                    orderable: false
                },

                {
                    data: 'date',
                    name: 'date',
                    orderable: true
                },


                {
                    data: 'sent date',
                    name: 'sent date',
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

        $(document).on('click', '.delete_modal', function() {
            var id = $(this).attr('data-id');
            var action = $('#delete form').attr('action');
            var new_action = action.substr(0, action.lastIndexOf('/') + 1) + id;
            $('#delete form').attr('action', new_action);
            $("#delete").modal('show');
        });
        
    </script>
@endsection
@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span>
            {{ getTranslatedWords('appointments') }}</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">

            {{-- <h5 class="card-header">{{ getTranslatedWords('appointments') }}</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ getTranslatedWords('name') }}</th>
                            <th>{{ getTranslatedWords('phone') }}</th>
                            <th>{{ getTranslatedWords('radians type') }}</th>
                            <th>{{ getTranslatedWords('branch') }}</th>
                            <th>{{ getTranslatedWords('appointment date') }}</th>
                            <th>{{ getTranslatedWords('sent date') }}</th>
                            <th>{{ getTranslatedWords('actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">{{ getTranslatedWords('delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('appointments.destroy', 0) }}">
                    @csrf
                    @method('delete')
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            {{ getTranslatedWords('close') }}
                        </button>
                        <button type="submit" class="btn btn-primary">{{ getTranslatedWords('delete') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
@endsection
