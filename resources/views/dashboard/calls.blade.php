@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('branches'))
@section('css')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection
@section('js')
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        let table = $('#datatables').DataTable({
            bLengthChange: true,
            lengthMenu: [10, 25, 50, 100, 200,500,1000],
            ordering: false,
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
                url: "{!! route('calls-trackings') !!}",
                data: function(d) {
                    d.from_date = '{{ request()->get('from_date') }}';
                    d.to_date = '{{ request()->get('to_date') }}';
                }

            }),
            columns: [    { data: 'id', name: 'id', orderable: true },
{
                    data: 'ip_address',
                    name: 'ip_address',
                    orderable: false
                },
                {
                    data: 'country',
                    name: 'country',
                    orderable: false
                },
                {
                    data: 'city',
                    name: 'city',
                    orderable: false
                },

                {
                    data: 'whatsapp',
                    name: 'whatsapp',
                    orderable: false
                },
                
                {
                    data: 'date',
                    name: 'date',
                    orderable: false
                },

            ],



            columnDefs: [{
                visible: false
            }],
            responsive: true,
        });

       
    </script>
@endsection
@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ getTranslatedWords('home') }} /</span>
            {{ getTranslatedWords('calls trackings') }}</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">

           


            {{-- <h5 class="card-header">{{getTranslatedWords('branches')}}</h5> --}}
            <div class="table-responsive text-nowrap">
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                          
                            <form action="{{ url()->current() }}" action="get" class="mt-4 mb-4">
                                <div class="form-group">
                                    <label for="">{{ getTranslatedWords('from date') }}</label>
                                    <input type="date" name="from_date" class="form-control">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="">{{ getTranslatedWords('to date') }}</label>
                                    <input type="date" name="to_date" class="form-control">
                                   
                                </div>
                                <div class="mt-2 mb-2">
                                    <button type="submit"
                                        class="btn btn-primary me-2">{{ getTranslatedWords('submit') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ getTranslatedWords('ip address') }}</th>
                            <th>{{ getTranslatedWords('country') }}</th>
                            <th>{{ getTranslatedWords('city') }}</th>
                            <th>{{ getTranslatedWords('whatsapp') }}</th>
                            <th>{{ getTranslatedWords('date') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

    
@endsection
   