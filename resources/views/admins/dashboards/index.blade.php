@extends('layouts.admin')


@php
    $counter = 1;
@endphp


{{-- section --}}
@section('content')


{{-- only this page --}}
<style>

#earningsTrafficChart {
    width: 100% !important;
}

</style>

{{-- content --}}



{{-- upper page name (breadcrumbs)--}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Dashboard</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">
                        Dashboard
                    </li>

                </ol>

            </div>

        </div>

    </div>
</div>
{{-- end upper page name (breadcrumbs)--}}





{{-- page container --}}
<div class="container page__container">
    <div class="page-section">

        {{-- overview --}}
        <div class="page-separator">
            <div class="page-separator__text">Overview</div>
        </div>

        <div class="row card-group-row mb-lg-8pt">
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3"> {{$active_customers->count()}} </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Active Customers</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                   0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">group</i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$leads->count()}}</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Leads</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">group</i>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$packages->count()}}</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Total Packages</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                  0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="fa-box" style="font-size: 22px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-group-row mb-lg-8pt">
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$components_value}} <small>AED</small> </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Current Stock Value</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">monetization_on</i>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">0</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Total Icome</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                   0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">monetization_on</i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">0</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Revenue</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                   0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">monetization_on</i>


                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row card-group-row mb-lg-8pt">
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">0</div>
                            <div class="flex">
                                <p class="mb-0"><strong>-</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">restaurant_menu</i>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">0</div>
                            <div class="flex">
                                <p class="mb-0"><strong>-</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                   0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">monetization_on</i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">0</div>
                            <div class="flex">
                                <p class="mb-0"><strong>-</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                   0%
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                        </div>
                        <i class="material-icons icon-32pt text-20 ml-8pt">local_shipping</i>

                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row mb-lg-8pt">
            <div class="col-lg-6">

            
                <div class="card dashboard-area-tabs" id="dashboard-area-tabs" style="height:683px;">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters flex" role="tablist">
                            <div class="col" data-toggle="chart" data-target="#earningsTrafficChart"
                                data-update='{"data":{"datasets":[{"label": "Traffic", "data":[
                                    {{$subs->where('start_date', '>=', '2021-01-01')->where('start_date', '<=', '2021-01-30')->count()}},
                                    {{$subs->where('start_date', '>=', '2021-02-01')->where('start_date', '<=', '2021-02-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-03-01')->where('start_date', '<=', '2021-03-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-04-01')->where('start_date', '<=', '2021-04-30')->count()}},
                                    {{$subs->where('start_date', '>=', '2021-05-01')->where('start_date', '<=', '2021-05-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-06-01')->where('start_date', '<=', '2021-06-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-07-01')->where('start_date', '<=', '2021-07-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-08-01')->where('start_date', '<=', '2021-8-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-09-01')->where('start_date', '<=', '2021-09-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-10-01')->where('start_date', '<=', '2021-10-30')->count()}}
                                    ,{{$subs->where('start_date', '>=',' 2021-11-01')->where('start_date', '<=',' 2021-11-30')->count()}}
                                    ,{{$subs->where('start_date', '>=', '2021-12-01')->where('start_date', '<=', '2021-12-30')->count()}}]}]}}'
                                data-prefix="" data-suffix="-customers">
                                <a href="#" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body text-center">
                                    <span class="font-weight-bold">Subscription</span>
                                    <span class="h2 mb-0 mt-n1"> {{$subs->count()}} </span>
                                </a>
                            </div>
                            <div class="col border-left" data-toggle="chart" data-target="#earningsTrafficChart"
                            data-update='{"data":{"datasets":[{"label": "Traffic", "data":[
                                {{$orders->where('date', '>', '2021-1-1')->where('date', '<', '2021-1-30')->count()}},
                                {{$orders->where('date', '>', '2021-2-1')->where('date', '<', '2021-2-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-3-1')->where('date', '<', '2021-3-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-4-1')->where('date', '<', '2021-4-30')->count()}},
                                {{$orders->where('date', '>', '2021-5-1')->where('date', '<', '2021-5-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-6-1')->where('date', '<', '2021-6-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-7-1')->where('date', '<', '2021-7-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-8-1')->where('date', '<', '2021-8-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-9-1')->where('date', '<', '2021-9-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-10-1')->where('date', '<', '2021-10-30')->count()}}
                                ,{{$orders->where('date', '>',' 2021-11-1')->where('date', '<',' 2021-11-30')->count()}}
                                ,{{$orders->where('date', '>', '2021-12-1')->where('date', '<', '2021-12-30')->count()}}]}]}}'
                                data-prefix="" data-suffix="-orders">
                                <a href="#" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body text-center">
                                    <span class="font-weight-bold">Orders</span>
                                    <span class="h2 mb-0 mt-n1">{{$orders->count()}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-muted">
                        <div id="earningsTrafficChartLegend" class="chart-legend mt-0 mb-24pt justify-content-start">
                        </div>
                        <div class="chart" style="height: 80%;">
                            <canvas class="chart-canvas js-update-chart-line" id="earningsTrafficChart"
                                data-chart-suffix="" data-chart-legend="#earningsTrafficChartLegend">
                                <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart
                                    goes here.</span>
                            </canvas>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters flex" role="tablist">
                            <div class="col-auto">
                                <div class="p-card-header">
                                    <p class="mb-0"><strong>Customers</strong></p>
                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                       0
                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto border-left">
                                <div class="p-card-header">
                                    <p class="mb-0"><strong>Orders</strong></p>
                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                        0
                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto ml-sm-auto">
                                <div class="p-card-header"><a href="#"><i
                                            class="material-icons text-50">more_horiz</i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="vector-map-revenue" class="map mb-3" style="height: 328px;" data-toggle="vector-map"
                            data-vector-map-map="world_en" data-vector-map-show-tooltip="false"
                            data-vector-map-enable-zoom="true" data-vector-map-scale="0" data-vector-map-pins='{"ae": "<div class=\"map-pin blue\"><span>UAE</span></div>"}'>
                        </div>

                        <ul class="list-unstyled dashboard-location-tabs nav flex-column m-0" role="tablist">
                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="us"
                                data-animate="true">
                                <div class="dashboard-location-tabs__tab active" data-toggle="tab" role="tab"
                                    aria-selected="true">
                                    <div><strong>Dubai</strong></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: {{$active_customers->where('city_id',1)->count()}}%;"
                                                    aria-valuenow="{{$customers->where('city_id','1')->count()}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>{{$active_customers->where('city_id','1')->count()}}</div>
                                    </div>
                                </div>
                            </li>
                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="it"
                                data-animate="true">
                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab"
                                    aria-selected="true">
                                    <div><strong>Abu Dahbi</strong></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{$active_customers->where('city_id',2)->count()}}%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>{{$active_customers->where('city_id',2)->count()}}</div>
                                    </div>
                                </div>
                            </li>
                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="au"
                                data-animate="true">
                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab"
                                    aria-selected="true">
                                    <div><strong>Sharjah</strong></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{$active_customers->where('city_id',3)->count()}}%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>{{$active_customers->where('city_id',3)->count()}}</div>
                                    </div>
                                </div>
                            </li>
                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="au"
                                data-animate="true">
                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab"
                                    aria-selected="true">
                                    <div><strong>Ras Al Khaimah</strong></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width:{{$active_customers->where('city_id',7)->count()}}%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>{{$active_customers->where('city_id',7)->count()}}</div>
                                    </div>
                                </div>
                            </li>
                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="au"
                                data-animate="true">
                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab"
                                    aria-selected="true">
                                    <div><strong>Ajman</strong></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{$active_customers->where('city_id',4)->count()}}%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>{{$active_customers->where('city_id',4)->count()}}</div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        {{-- end upper overview --}}



        {{-- seperator with title --}}
        <div class="page-separator">
            <div class="page-separator__text">Overview</div>
        </div>






        {{-- bottom tabs --}}
        <div class="card">

            <div class="card-header p-0 nav">
                <div class="row no-gutters" role="tablist" style=" width: 100%; ">

                    {{-- tab 1 link --}}
                    <div class="col-auto" style="cursor: pointer; width: 33%;">
                        <a href="#tab-a" data-value="#a" data-toggle="tab" role="tab" aria-selected="true"
                            class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                            <span class="h2 mb-0 mr-3">1</span>
                            <span class="flex d-flex flex-column">
                                <strong class="card-title">Customers</strong>
                                <small class="card-subtitle text-50">New Customers</small>
                            </span>
                        </a>
                    </div>


                    {{-- tab 2 link --}}
                    <div class="col-auto border-left border-right" style="cursor: pointer; width: 33%;">
                        <a href="#tab-b" data-value="#b" data-toggle="tab" role="tab" aria-selected="false"
                            class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                            <span class="h2 mb-0 mr-3">2</span>
                            <span class="flex d-flex flex-column">
                                <strong class="card-title">Kitchen</strong>
                                <small class="card-subtitle text-50">Now Preparing</small>
                            </span>
                        </a>
                    </div>


                    {{-- tab 3 ink --}}
                    <div class="col-auto border-left border-right" style="cursor: pointer; width: 34%;">
                        <a href="#tab-c" data-value="#c" data-toggle="tab" role="tab" aria-selected="false"
                            class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                            <span class="h2 mb-0 mr-3">3</span>
                            <span class="flex d-flex flex-column">
                                <strong class="card-title">Deliveries</strong>
                                <small class="card-subtitle text-50">Today Deliveries</small>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
            {{-- tabs links --}}




            {{-- tabs content --}}
            <div class="tab-content ">

                {{-- tab 1 : New Customers --}}
                <div class="table-responsive table-bordered tab-pane active" data-id="a" id="tab-a">
                    <div>

                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                            <thead>
                                <tr>


                                    <th>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">#</a>
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-name">Name</a>
                                    </th>
                                    <th >
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-status">Phone</a>
                                    </th>
                                    <th >
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-reason">City</a>
                                    </th>
                                    <th >
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-reason">Package</a>
                                    </th>
                                    <th >
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-available">Cost</a>
                                    </th>

                                    <th >
                                        <a href="javascript:void(0)" class="sort"
                                            data-sort="js-lists-values-available">Date</a>
                                    </th>


                                </tr>
                            </thead>
                            <tbody class="list" id="leaves">

                                @foreach ($customers as $customer)

                                <tr>
                                    <td>
                                        {{ $customer->id }}
                                    </td>
                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                            style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <span class="avatar-title rounded-circle"></span>

                                            </div>
                                            <div class="media-body">

                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <a href="{{ route('admin.editCustomer', [$customer->id]) }}">
                                                            <p class="mb-0"><strong
                                                                    class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                        </a>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        +{{ $customer->phone }}
                                    </td>
                                  

                                    <td>
                                        {{ $customer->city->name }}
                                    </td>
                                    <!-- package -->
                                    <td>
                                        {{ $customer->package->name }}
                                    </td>

                                    <td>
                                        @if (!empty($customer->subs[0]->price))
                                        {{ $customer->subs[0]->price }}
                                        @else
                                        -
                                        @endif
                                      
                                    </td>

                                    <!-- driver -->
                                    <td>
                                        {{ $customer->from_date }}
                                    </td>


                                </tr>
                                <!-- end table row -->

                                @endforeach


                            </tbody>
                        </table>

                    </div>

                </div>
                {{-- end tab 1 --}}



                {{-- tab 2 : Kitchen Preparing --}}
                <div class="table-responsive tab-pane" data-id="b" id="tab-b">

                    <div class="text-center">

                        <h5 class="my-4">
                                 Shift End Time : <span class="text-success" style="font-weight: bold;">{{$shift_end->time}}</span>  | 
                            Chif Ending shif at : <span class="text-success" style="font-weight: bold">
                                @if (!empty($chif_end->end_time))
                                {{$chif_end->end_time}} 
                                @else
                                    Not finished yet
                                @endif
                               
                            </span> 
                         </h5>

                    </div>

                    <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                        <thead>
                            <tr>


                             
                                <th>
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Package</a>
                                </th>

                                <th>
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Customers
                                        Number</a>
                                </th>

                                <th>
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-reason">Status</a>
                                </th>


                                <th>
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-from">View</a>
                                </th>


                            </tr>
                        </thead>
                        <tbody class="list" id="leaves">

                            @foreach ($packages as $package)

                            <tr>
                                <td>
                                    {{$package->name}}
                                </td>
                                <td>
                                    {{$package->customers->count()}}
                                </td>
                                <td>
                                    @if (!empty($chif_end->end_time))
                                    <span class="text-success"> Finished</span>
                                  
                                    @else
                                       <span class="text-warning">Not finished yet</span> 
                                    @endif
                                </td>

                                <td>
                                    <a data-toggle="modal"
                                    data-target=".package-plan-{{$package->id}}"
                                     class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                                
                            @endforeach

                          

                        </tbody>
                    </table>

                </div>
                {{-- end tab 2 : now preparing --}}




                {{-- tab 3 : Today Deliveries --}}
                <div class="table-responsive table-bordered tab-pane" data-id="c" id="tab-c"
                    data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                    data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                    <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                        <thead>
                            <tr>


                               
                                <th>
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                                </th>


                                <th >
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-name">Phone</a>
                                </th>


                                <th>
                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-days">Deliveris For Today</a>
                                </th>




                            </tr>
                        </thead>
                        <tbody class="list" id="leaves">

                            @foreach ($companies as $company)
                                                        
                                                 
                            <!-- table row -->
                            <tr>


                                <!-- name + pp -->
                                <td>

                                    <div class="media flex-nowrap align-items-center"
                                        style="white-space: nowrap;">
                                        <div class="avatar avatar-32pt mr-8pt">

                                         

                                        </div>
                                        <div class="media-body">

                                            <div class="d-flex align-items-center">
                                                <div class="flex d-flex flex-column">
                                                    <p class="mb-0"><strong
                                                            class="js-lists-values-name">{{$company->name}}</strong></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </td>

                                <!-- phone -->
                                <td>
                                 {{$company->phone}}
                                </td>

                              
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal"
                                    data-target=".company-deliveries-{{$company->id}}">View</a>
                                    </td>
                              
                            </tr>
                            <!-- end table row -->


                            @endforeach

                          
                        </tbody>
                    </table>
                    <!-- end table -->

                </div>
                {{-- end tab 3 : today deliveries --}}


            </div>
            {{-- end tabs content  --}}



            {{-- pagination for tabs bottom --}}
            <div class="card-footer p-8pt">

                <ul class="pagination justify-content-start pagination-xsm m-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true" class="material-icons">chevron_left</span>
                            <span>Prev</span>
                        </a>
                    </li>
                    <li class="page-item dropdown">
                        <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                            <span>1</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item active">1</a>
                            <a href="" class="dropdown-item">2</a>
                            <a href="" class="dropdown-item">3</a>
                            <a href="" class="dropdown-item">4</a>
                            <a href="" class="dropdown-item">5</a>
                        </div>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span>Next</span>
                            <span aria-hidden="true" class="material-icons">chevron_right</span>
                        </a>
                    </li>
                </ul>

            </div>
            {{-- end pagination for tabs --}}




        </div>
        {{-- end bottom tabs --}}

    </div>
</div>
{{-- end page container --}}
















{{-- end content --}}







@endsection
{{-- end section --}}






@section('scripts')

{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/kitchen/js/package-plan.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
    var xyValues = [
  {x:1, y:0},
  {x:2, y:0},
  {x:3, y:0},
  {x:4, y:0},
  {x:5, y:0},
  {x:6, y:0},
  {x:7, y:0},
  {x:8, y:0},
  {x:9, y:1},
  {x:10, y:2},
  {x:11, y:0},
  {x:12, y:0}
];

new Chart("myChart", {
  type: "scatter",
  data: {
    datasets: [{
      pointRadius: 4,
      pointBackgroundColor: "rgb(0,0,255)",
      data: xyValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      xAxes: [{ticks: {min: 1, max:12}}],
      yAxes: [{ticks: {min: 0, max:1000}}],
    }
  }
});
</script>


@endsection


@section('modals')

@foreach ($companies as $company)
    
<div class="modal fade company-deliveries-{{$company->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Company Deliveries</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



                <!-- modal body -->
                <div class="modal-body">

                  <div class="row">

                    <div class="col-12">


                        <div class="card">
                            <div class="card-body">


                            </div>

                            <div class="table-responsive tab-pane" data-id="c" id="tab-c"
                                data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                                data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                    <thead>
                                        <tr>


                                            <th style="width: 100px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Order</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Name</a>
                                            </th>


                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-reason">Package</a>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">Driver</a>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Timing</a>
                                            </th>


                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">City</a>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">District</a>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-from">Status</a>
                                            </th>

                                         
                                        </tr>
                                    </thead>


                                    <tbody class="list" id="leaves">



                                      
                                        {{-- customer deliveries --}}
                                        @foreach ($company->deliveries->where('date',Date('Y-m-d')) as $delivery)
                                            


                                        <!-- table row 1 -->
                                        <tr>



                                            <!-- order id -->
                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">

                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong
                                                                        class="js-lists-values-name"># {{ $delivery->id }}</strong></p>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </td>


                                            <!-- name + pic -->
                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle"></span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong
                                                                        class="js-lists-values-name">{{ $delivery->customer->fname }} {{ $delivery->customer->lname }}</strong></p>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </td>


                                            <!-- package -->
                                            <td>
                                                <small class="js-lists-values-policy text-50">{{ $delivery->customer->package->name }}</small>
                                            </td>


                                            <!-- driver -->
                                            <td>
                                                <small class="js-lists-values-policy text-50">
                                                    {{ $company->name}}</small>
                                            </td>



                                            <!-- timing -->
                                            <td>
                                                <small class="js-lists-values-days text-50"><span
                                                        class="badge badge-notifications badge-accent">{{ $delivery->customer->deliveryTime->timing }}</span>
                                                </small>
                                            </td>


                                            <!-- city -->
                                            <td>
                                                <small class="js-lists-values-days text-50">{{ $delivery->customer->city->name }}</small>
                                            </td>


                                            <!-- district -->
                                            <td>
                                                <small class="js-lists-values-days text-50">{{ $delivery->customer->district->name }}</small>
                                            </td>


                                          

                                            <!-- status -->

                                            @if ($delivery->status == "not delivered")
                                                
                                                <td>
                                                    <span class="avatar-title rounded bg-warning px-2">Not Delivered</span>
                                                </td>

                                            @elseif ($delivery->status == "delivered")

                                                <td>
                                                    <span class="avatar-title rounded bg-success px-2">Delivered</span>
                                                </td>

                                            @else

                                                <td>
                                                    <span class="avatar-title rounded bg-danger px-2">Canceled</span>
                                                </td>
                                                
                                            @endif


                                            

                                            {{-- <td class="text-right">
                                                <a href="" class="text-50"><i
                                                        class="material-icons">more_vert</i></a>
                                            </td> --}}
                                        </tr>
                                        <!-- end table row -->


                                        @endforeach
                                        {{-- deliveries --}}




                                    </tbody>
                                </table>
                                <!-- end table -->

                            </div>
                            <!-- wrapper -->

                        </div>
                        <!-- card -->
                    </div>
                    <!-- end col 12 -->
                </div>
                <!-- row -->



                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>

          

        </div> <!-- end model content -->

    </div>
</div>
  
@endforeach


@foreach ($packages as $package)

  

{{-- package plan modal --}}
<div class="modal fade package-plan-{{$package->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Package Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
          
                <div class="modal-body">

                    <div class="card mb-lg-32pt" style="box-shadow: none;">

                                <div class="" data-toggle="lists" data-lists-values='["js-lists-values-name"]'>

                                    <table
                                        class="table table-responsive table-bordered table-flush mb-0 thead-border-top-0 w-100 custom-table-new"
                                        style="overflow:hidden">
                                        <thead class="d-block">
                                            <tr>

                                                <th
                                                    style="display: inline-block; width: 11%; border:none;text-align:center">
                                                    Package
                                                </th>
                                                <th
                                                    style="display: inline-block; width: 88%; border:none;text-align:center">
                                                    Meals</th>

                                            </tr>
                                        </thead>

                                        <tbody class="d-block">

                                            @if ($package->plans)
                                                
                                          
                                            {{-- foreach for plans packages --}}
                                            @foreach ($package->plans->where('date', date('Y-m-d')) as $plan)
                                                
                                            <!-- table row 1 -->
                                            <tr>



                                                {{-- package name --}}
                                                <td
                                                    style="display: inline-block; width: 11%; border:0px;text-align:center">
                                                    <a href="#">
                                                        <h5 class="mb-0">{{ $package->name }}</h5>
                                                    </a>

                                                    <h6 class="text-muted">{{ $customersArray[$plan->package_id] }} Customers</h6>
                                                </td>


                                                <!-- carousal for meals inside-->
                                                <td style="display: inline-block; width: 88%; border-bottom:0px;">



                                                    <!-- breakfast meals -->
                                                    <div id="carousal-breakfast-col"
                                                        class="form-group col-sm-12 mt-4 pos-relative">

                                                        <!-- scroll right and left buttons -->
                                                        <div class="carousal-buttons-wrapper">

                                                            <!-- scroll left button -->
                                                            <button id="horizontal-carousal-button-left-{{ $counter }}"
                                                                class="carousal-scroll-button-left btn btn-primary">
                                                                <i class="fa fa-chevron-left"></i>
                                                            </button>

                                                            <!-- scroll right button -->
                                                            <button id="horizontal-carousal-button-right-{{ $counter }}"
                                                                class="carousal-scroll-button-right btn btn-primary">
                                                                <i class="fa fa-chevron-right"></i>
                                                            </button>

                                                        </div>

                                                        <!-- carousal -->
                                                        <div id="horizontal-carousal-{{ $counter }}"
                                                            class="custom-horizontal-carousal" tabindex=0>



                                                            {{-- meals inside with package id --}}
                                                            @foreach ($plan->meals as $planMeal)
                                                                

                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">
                                                                            <a data-toggle="modal"
                                                                                data-target=".meal-recipe-{{ $planMeal->id }}">
                                                                                <i
                                                                                    class="fa fa-question-circle float-left"></i>
                                                                            </a>

                                                                            <span class="float-right"
                                                                                style=" margin-top: -10px; ">
                                                                                <h4 class="mt-0">{{ (!empty($planMeal->customers) ? $planMeal->customers->where('date', date('Y-m-d'))->count() : 0) }}</h4>
                                                                            </span>


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt">{{ $planMeal->meal->meal->name }}</h4>
                                                                            <h6 class="mb-0">{{ $planMeal->meal->mealType->name }}</h6>
                                                                            <hr class="mt-2">

                                                                            {{-- components --}}
                                                                            <h5>Ingredients</h5>
                                                                            <div style="display: block ruby;">

                                                                                @foreach ($planMeal->meal->components as $component)
                                                                                    
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: 500; ">
                                                                                        {{ $component->component->name }}<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">({{ $component->quantity}})
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                             
                                                                                @endforeach
                                                                                
                                                                            </div>
                                                                            {{-- end components --}}




                                                                            {{-- today is calc of (meal component quantity * number of customer today) --}}
                                                                            <hr class="mt-2">
                                                                            <h5>Today's Quantity</h5>
                                                                            
                                                                            <div style="display: block ruby;">
                                                                                
                                                                                @foreach ($planMeal->meal->components as $component)

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: 500; ">
                                                                                        {{ $component->component->name }}<br>
                                                                                        <span   
                                                                                            class="badge badge-notifications badge-primary">({{ $component->quantity * (!empty($planMeal->customers) ? $planMeal->customers->where('date', date('Y-m-d'))->count() : 0) }})
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                @endforeach

                                                 
                                                                            </div>
                                                                            <a href="{{ route('kitchen.mealBreakdown', [$planMeal->id]) }}">
                                                                                <button
                                                                                    class="btn btn-sm btn-outline-warning mt-3">
                                                                                    Start Cooking
                                                                                </button>
                                                                            </a>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </label>
                                                            <!-- end card -->


                                                            @endforeach
                                                            {{-- end foreach for meals --}}





                                                        </div>
                                                        <!-- end carousal -->




                                                    </div>
                                                    <!-- end breakfast meals -->




                                                </td>
                                                <!-- end card carousal td -->


                                            </tr>
                                            <!-- end table row 1 -->


                                            @endforeach
                                            {{-- end foreach --}}

                                            @endif




                                        </tbody>
                                    </table>
                                </div>





                            </div>
                   

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
           
        </div>
    </div>
</div>
{{-- end package plan modal --}}
    
@endforeach

@endsection




