@extends('dashboard.layouts.app')
@section('title', content: getTranslatedWords('home'))
@section('js')
<script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
     let table = $('#datatables').DataTable({
        
        order: [
            [0, "desc"]
        ],
        @if(App::getLocale()=='ar')
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
        },
        @endif
       
        responsive: true,
    });
</script>
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('new_assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                    class="rounded" />
                            </div>

                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item change_orders_count" data-show="all"
                                        href="javascript:void(0);">{{ getTranslatedWords('all') }}</a>
                                    <a class="dropdown-item change_orders_count" data-show="day"
                                        href="javascript:void(0);">{{ getTranslatedWords('this day') }}</a>
                                    <a class="dropdown-item change_orders_count" data-show="week"
                                        href="javascript:void(0);">{{ getTranslatedWords('this week') }}</a>
                                    <a class="dropdown-item change_orders_count" data-show="month"
                                        href="javascript:void(0);">{{ getTranslatedWords('this month') }}</a>
                                    <a class="dropdown-item change_orders_count" data-show="year"
                                        href="javascript:void(0);">{{ getTranslatedWords('this year') }}</a>
                                </div>
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">{{ getTranslatedWords('appointments') }}</span>
                        <h3 class="card-title mb-2 orders_count">{{ App\Models\Appointment::count() }}
                        </h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('new_assets/img/icons/unicons/chart.png') }}" alt="chart success"
                                    class="rounded" />
                            </div>

                            

                        </div>
                        <span class="fw-semibold d-block mb-1">{{ getTranslatedWords('branches') }}</span>
                        <h3 class="card-title mb-2 customers_count">{{ App\Models\Branch::count() }}
                        </h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                    {{ getTranslatedWords('this month') }}
                                    {{ App\Models\Order::whereMonth('created_at', Carbon\Carbon::now()->month)->count() }}</small> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('new_assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>

                           

                        </div>
                        <span>{{ getTranslatedWords('contacts') }}</span>
                        <h3 class="card-title mb-1 profits_count">{{ App\Models\Contact::count() }}</h3>
                       
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
           
            <!--/ Total Revenue -->

        </div>


        <div class="row">
           
            <!-- Expense Overview -->
            <div class="col-md-12 col-lg-12 order-1 mb-4">
                <div class="card">
                    <h5 class="card-header">{{ getTranslatedWords('latest appointments') }}</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="datatables">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ getTranslatedWords('name') }}</th>
                                    <th>{{ getTranslatedWords('phone') }}</th>
                                    <th>{{ getTranslatedWords('appointment date') }}</th>
                                    <th>{{ getTranslatedWords('radians type') }}</th>
                                    <th>{{ getTranslatedWords('branch') }}</th>
                                    <th>{{ getTranslatedWords('created_at') }}</th>
                                    

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach (App\Models\Appointment::latest()->take(15)->get() as $query)
                                    <tr>
                                        <td>{{$query->id}}</td>
                                        <td>{{ $query->name }}</td>
                                        <td>{{ $query->phone }}</td>
                                        <td>{{ $query->date }} {{ getTranslatedWords(''.$query->time) }}</td>
                                        <td>{{ $query->type }}</td>
                                        <td>{{ $query->branch->name ?? '' }}</td>
                                        <td>{{ $query->created_at->format('Y-m-d') }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->


        </div>
    </div>


@endsection
