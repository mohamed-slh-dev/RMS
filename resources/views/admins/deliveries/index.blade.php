@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Delivery Managment</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Manage all deliveries components</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}










{{-- content --}}
<div class="container page__container">

    <div class="row card-group-row mb-lg-8pt">
        <div class="col-lg-4 col-md-4 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-body d-flex align-items-center">
                    <div class="flex d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">0</div>
                        <div class="flex">
                            <p class="mb-0"><strong>Total Deliveries</strong></p>
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
     
        <div class="col-lg-4 col-md-4 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-body d-flex align-items-center">
                    <div class="flex d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">0</div>
                        <div class="flex">
                            <p class="mb-0"><strong>Total Deliveries Charges</strong></p>
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
                            <p class="mb-0"><strong>PrimeWare</strong></p>
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
    </div>

    <div class="row card-group-row mb-lg-8pt">
        <div class="col-lg-4 col-md-4 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-body d-flex align-items-center">
                    <div class="flex d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">0</div>
                        <div class="flex">
                            <p class="mb-0"><strong>Transcorp</strong></p>
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
     
       

        <div class="col-lg-4 col-md-4 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-body d-flex align-items-center">
                    <div class="flex d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">0</div>
                        <div class="flex">
                            <p class="mb-0"><strong>Logx</strong></p>
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

        <div class="col-lg-4 col-md-4 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-body d-flex align-items-center">
                    <div class="flex d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">0</div>
                        <div class="flex">
                            <p class="mb-0"><strong>In House</strong></p>
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
    </div>
    <div class="page-section">

        

        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist" style="width: 100%;">


                            <!-- tab 1 -->
                            <div class="col-auto" style="width: 16%;">
                                <a href="#packages_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Deliveries<br>For Today</strong>
                                        <!-- <small class="card-subtitle text-50">Manage Packages</small> -->
                                    </span>
                                </a>
                            </div>



                            <!-- tab 2 -->
                            <div class="col-auto border-left border-right" style="width: 16%;">
                                <a href="#drivers_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Drivers<br>details</strong>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 16%;">
                                <a href="#deliveries_comp_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Delivery<br>Companies</strong>
                                    </span>
                                </a>
                            </div>


                            <!-- tab 3 -->
                            <div class="col-auto border-left border-right" style="width: 16%;">
                                <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Timing <br> Management</strong>
                                    </span>
                                </a>
                            </div>
                            <!-- end tab 3 -->


                            <!-- tab 4 -->
                            <div class="col-auto border-left border-right" style="width: 16%;">
                                <a href="#delivery_charge_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Delivery <br> Charge</strong>
                                    </span>
                                </a>
                            </div>
                            <!-- end tab 4 -->

                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#primeware" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">PrimeWare <br> Delivery</strong>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->




                    <!-- tabs content -->
                    <div class="card-body tab-content">

                        <!-- Deliveries for today Tap -->
                        <div class="tab-pane active text-70" id="packages_tap">

                            <!-- overview row -->
                            <div class="row card-group-row mb-lg-8pt">
                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">0</div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Picked From<br>Restaurant</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        0%
                                                        <!-- <i class="fa fa"></i> -->
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="fa fa-spinner text-warning" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">0</div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Delivered</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        0%
                                                        <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="fa fa-check-circle text-success" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">0</div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Canceled</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        0%
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="fa fa-times-circle text-danger" style="font-size: 26px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- overview row -->






                            <!-- table row -->
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


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Order</a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Name</a>
                                                        </th>


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-reason">Package</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Driver</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Timing</a>
                                                        </th>


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">City</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">District</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Address</a>
                                                        </th>



                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-from">Status</a>
                                                        </th>

                                                      
                                                    </tr>
                                                </thead>


                                                <tbody class="list">



                                                    {{-- foreach customers --}}
                                                    @foreach ($customers as $customer)
                                                        

                                                    {{-- customer deliveries --}}
                                                    @foreach ($customer->deliveries->where('date',Date('Y-m-d')) as $delivery)
                                                        


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
                                                                                    class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </td>


                                                        <!-- package -->
                                                        <td>
                                                            <small class="js-lists-values-policy text-50">{{ $customer->package->name }}</small>
                                                        </td>


                                                        <!-- driver -->
                                                        <td>
                                                            <small class="js-lists-values-policy text-50">{{ (!empty($delivery->driver->name) ? $delivery->driver->name : "-") 
                                                            }}</small>
                                                        </td>



                                                        <!-- timing -->
                                                        <td>
                                                            <small class="js-lists-values-days text-50"><span
                                                                    class="badge badge-notifications badge-accent">{{ $customer->deliveryTime->timing }}</span>
                                                            </small>
                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            <small class="js-lists-values-days text-50">{{ $customer->city->name }}</small>
                                                        </td>


                                                        <!-- district -->
                                                        <td>
                                                            <small class="js-lists-values-days text-50">{{ $customer->district->name }}</small>
                                                        </td>


                                                        <!-- address -->
                                                        <td>
                                                            <small class="js-lists-values-days text-50">{{ $customer->address }}</small>
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


                                                    </tr>
                                                    <!-- end table row -->


                                                    @endforeach
                                                    {{-- deliveries --}}



                                                    @endforeach
                                                    {{-- customers --}}


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
                        <!-- end today deliveries tab -->









                        <!-- driver Tap -->
                        <div class="tab-pane text-70" id="drivers_tap">

                            <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add driver button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-meal"><i class="fa fa-plus-circle mr-2"></i>New Driver</a>
                                </div>


                            </div>
                            <!-- end row -->





                            <!-- table row -->
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


                                                        <th style="width:180px">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Name</a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Phone</a>
                                                        </th>




                                                        <th style="width: 130px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Driver License</a>
                                                        </th>

                                                        


                                                        <th style="width: 130px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Timing</a>
                                                        </th>

                                                        <th style="width: 130px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">City</a>
                                                        </th>

                                                        <th style="width: 130px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">District</a>
                                                        </th>


                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    {{-- foreach --}}
                                                    @foreach ($drivers as $driver)
                                                        
                                                    <!-- table row -->
                                                    <tr>


                                                        <!-- name + pp -->
                                                        <td>

                                                            <div class="media flex-nowrap align-items-center"
                                                                style="white-space: nowrap;">
                                                                <div class="avatar avatar-32pt mr-8pt">

                                                                    <img src="{{ asset('assets/admin/images/drivers/profiles/'.$driver->profile_img) }}"
                                                                        alt="Avatar" class="avatar-img rounded-circle img-fit">

                                                                </div>
                                                                <div class="media-body">

                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex d-flex flex-column">
                                                                            <p class="mb-0">
                                                                                <strong class="js-lists-values-name">{{ $driver->name }}</strong>
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <!-- phone -->
                                                        <td>
                                                            <small class="js-lists-values-policy text-50">+{{ $driver->phone }}</small>
                                                        </td>

                                                        <!-- License -->
                                                        <td>
                                                            <small class="js-lists-values-policy text-50">{{ $driver->license }}</small>
                                                        </td>


                                                        



                                                        <!-- timing -->
                                                        <td>

                                                            {{-- foreach times --}}
                                                            @foreach ($driver->times as $time)

                                                            <small class="js-lists-values-days text-50">
                                                                <span class="badge badge-notifications badge-accent">
                    
                                                                {{ $time->time->timing }}

                                                                </span>
                                                            </small>

                                                            @endforeach
                                                            {{-- end foreach --}}

                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            <small class="js-lists-values-days text-50">{{ $driver->city->name }}</small>
                                                        </td>


                                                        <!-- district -->
                                                        <td>

                                                            {{-- foreach times --}}
                                                            @foreach ($driver->districts as $district)

                                                            <small class="js-lists-values-days text-50">{{ $district->district->name }}</small>

                                                            @endforeach
                                                            {{-- end foreach --}}
                                                        </td>



                                                        <td class="text-right">
                                                            <a href="" class="text-50"><i
                                                                    class="material-icons">more_vert</i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- end table row -->



                                                    @endforeach
                                                    {{-- end foreach --}}



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
                            <!-- row  of table -->







                        </div>
                        <!-- end driver tab -->

                        <div class="tab-pane text-70" id="deliveries_comp_tap">

                            <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add driver button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-delivery-comp"><i class="fa fa-plus-circle mr-2"></i>New Company</a>
                                </div>


                            </div>
                            <!-- end row -->





                            <!-- table row -->
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


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Name</a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Phone</a>
                                                        </th>



                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">E-mail</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">City</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">District</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Attachment</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">View</a>
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

                                                        <!-- License -->
                                                        <td>
                                                            {{$company->email}}
                                                        </td>


                                                        <!-- Shift -->
                                                        <td>
                                                            {{$company->city->name}}
                                                        </td>



                                                        <!-- timing -->
                                                        <td>
                                                           @foreach ($company->districts as $district)
                                                              {{ $district->district->name}}
                                                           @endforeach
                                                             </td>

                                                             <td>
                                                             <a download="" href="{{asset('assets/admin/images/deliverycompanies/attachments/'.$company->attachment)}}">Download</a>
                                                               
                                                            </td>

                                                            <td>
                                                                <a class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target=".edit-delivery-comp-{{$company->id}}" > View
                                                            </a>
                                                            </td>


                                                    </tr>
                                                    <!-- end table row -->


                                                    @endforeach


                                                    <!-- table row -->
                                                    




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
                            <!-- row  of table -->







                        </div>
                        <!-- end driver tab -->






                        <!-- timing Tap -->
                        <div class="tab-pane text-70" id="componets_tap">

                            <div class="row">

                          
                            <div class="col-sm-6">
                            <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add timing button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-timing"><i class="fa fa-plus-circle mr-2"></i>New Delivery
                                        Timing</a>
                                </div>


                            </div>
                            <!-- end row -->





                            <!-- table row -->
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
                                                                data-sort="js-lists-values-name">Timing Start</a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Timing End</a>
                                                        </th>


                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    {{-- foreach for timing --}}
                                                    @foreach ($delivery_times as $time)
                                                        
                                                        {{-- explode into two timings --}}
                                                        @php
                                                        $two_times = explode(' - ', $time->timing);
                                                        @endphp

                                                        
                                                        <!-- table row -->
                                                        <tr>



                                                            <!-- start -->
                                                            <td>
                                                                <small class="js-lists-values-policy text-50">
                                                                {{ date("g:i a", strtotime($two_times[0]))}}
                                                                </small>
                                                            </td>

                                                            <!-- end -->
                                                            <td>
                                                                <small class="js-lists-values-policy text-50">
                                                                {{ date("g:i a", strtotime($two_times[1]))}}
                                                                </small>
                                                            </td>


                                                            <td class="text-right">
                                                                <a href=""class="text-50">
                                                                    <i class="material-icons">more_vert</i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- end table row -->


                                                    @endforeach
                                                    {{-- end foreach --}}




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
                            <!-- row  of table -->


                        </div>

                <div class="col-sm-6">
                                <!-- button row -->
                       <div class="row card-group-row mb-3">


                           <!-- add timing button -->
                           <div class="col-sm-12 text-left mt-0 mb-2">
                               <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                   data-target=".new-dayoff"><i class="fa fa-plus-circle mr-2"></i>New Delivery Day Off</a>
                           </div>


                       </div>
                       <!-- end row -->

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


                                                   <th>
                                                       <a href="javascript:void(0)" class="sort"
                                                           data-sort="js-lists-values-name">Day</a>
                                                   </th>

                                                   <th>
                                                       <a href="javascript:void(0)" class="sort"
                                                           data-sort="js-lists-values-name">Status</a>
                                                   </th>

                                                   <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">Delete</a>
                                                </th>



                                                   <th style="width: 24px;"></th>
                                               </tr>
                                           </thead>


                                           <tbody class="list" id="leaves">


                                               {{-- foreach --}}
                                               @foreach ($daysoff as $dayoff)
                                                   

                                                   <!-- table row -->
                                                   <tr>



                                                       <!-- start -->
                                                       <td>
                                                           <p>{{ $dayoff->name }}</p>
                                                       </td>



                                                       <!-- Shift -->
                                                       <td>
                                                           <p>No deliveries will be on this day</p>
                                                       </td>



                                                       <td>
                                                        <a href="{{route('admin.deleteDayOff',[$dayoff->id])}}">
                                                            <i class="fas fa-trash text-danger"></i>
                                                        </a>
                                                       </td>
                                                   </tr>
                                                   <!-- end table row -->


                                               @endforeach
                                               {{-- end foreach --}}



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
                       <!-- row  of table -->
                           </div>


                        </div>
                        
                        </div>
                        <!-- end timing tab -->




                        <!-- delivery charge -->

                        <div class="tab-pane text-70" id="delivery_charge_tap">

                            <div class="row">
                                <div class="col-sm-12">
                                     <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add timing button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-charge"><i class="fa fa-plus-circle mr-2"></i>New Delivery
                                        Charge</a>
                                </div>


                            </div>
                            <!-- end row -->

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


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">City</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Charge</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Edit</a>
                                                        </th>

                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    {{-- foreach --}}
                                                    @foreach ($cities->whereNotNull('charge') as $city)
                                                        

                                                        <!-- table row -->
                                                        <tr>



                                                            <!-- start -->
                                                            <td>
                                                                <p>{{ $city->name }}</p>
                                                            </td>



                                                            <!-- Shift -->
                                                            <td>
                                                                <p>{{ $city->charge }} AED</p>
                                                            </td>


                                                            <td>
                                                                <a class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target=".edit-city-charge-{{$city->id}}" > View
                                                            </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end table row -->


                                                    @endforeach
                                                    {{-- end foreach --}}



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
                            <!-- row  of table -->
                                </div>
                                {{-- end of col-12 --}}

                                

                            </div>
                           





                            <!-- table row -->
                            



                        </div>
                        <!-- end delivery charge tab -->

                        <div class="tab-pane text-70 " id="primeware">

                            <div class="row">
                                <div class="col-sm-12" style=" display: contents; ">
                                    <h5 class="ml-2">Deliver All Your Customers Subscriptions With PrimeWare?</h5>
                                    <div class="custom-control custom-checkbox-toggle custom-control-inline ml-3">
                                        <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                        <label class="custom-control-label" for="subscribe"></label>
                                    </div>

                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-12 mb-3">
                                    <h6>Select Deliveries Collection Timing (From & To)</h6>
                                </div>

                                <div class="col-sm-3">
                                    <label for="example-text-input">Collection Time From</label>
                                    <div>
                                        <input type="time" name="from" class="form-control">
                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <label for="example-text-input">Collection Time To</label>
                                    <div>
                                        <input type="time" name="to" class="form-control">
                                    </div>

                                </div>

                                <div class="col-sm-4">

                                    <button class="btn btn-success" style=" margin-top: 25px; ">Update</button>
                                </div>


                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <div class="form-group row">

                                        <div class="col-12 text-center">

                                            <img src="{{ asset('assets/admin/images/logo/primeware.gif') }}" width="190" height="120"
                                                alt="logo-large" class="logo-lg text-center ">


                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 ">
                                    <div class="form-group row">
                                        <div class="col-sm-4 text-center">
                                            <label for="example-text-input"
                                                class="form-label col-form-label">Name</label>
                                            <div class="col-sm-12">
                                                <h3>PrimeWareWare Delivery</h3>
                                            </div>

                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <label for="example-text-input"
                                                class="form-label col-form-label">E-mail</label>
                                            <div class="col-sm-12">
                                                <h3>hello@primewaredelivery.ae</h3>
                                            </div>

                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <label for="example-text-input"
                                                class="form-label col-form-label">Phone</label>
                                            <div class="col-sm-12">
                                                <h3>+971 50 626 2006</h3>
                                            </div>

                                        </div>


                                    </div>
                                </div>


                            </div>



                        </div>
                        <!-- end primeware tab -->


                    </div>
                </div>

            </div>
        </div>



    </div>
</div>
{{-- end content --}}










@endsection
{{-- end section --}}











@section('scripts')



{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>




<script>
    $('.tab-toggle').on('click', function() {
  //get index of li which is clicked
  var indexs = $(this).closest('li').index()
  //remove class from others
  $("ul li").not($(this).closest('li')).removeClass("active")
  //add class where indexs same
  $("ul").find("li:eq(" + indexs + ")").not($(this).closest('li')).addClass("active")
});

$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script>



@endsection












{{-- modals section --}}
@section('modals')


<!-- driver modal -->
<div class="modal fade new-meal" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.addDriver') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- name -->
                        <div class="form-group col-4">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="" required="">
                        </div>


                        <!-- phone -->
                        <div class="form-group col-4">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="" required="">
                        </div>

                        <!-- Email -->
                        <div class="form-group col-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="" required="">
                        </div>


                        <!-- License -->
                        <div class="form-group col-4">
                            <label class="form-label">License</label>
                            <input type="text" name="license" class="form-control" placeholder="" required="">
                        </div>

                        <!-- password -->
                        <div class="form-group col-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="" required="">
                        </div>


                        


                        <!-- city -->
                        <div class="form-group col-4">
                            <label class="form-label">City</label>
                            <select class="form-control custom-select city-select-1" name="city" required="">
                                    
                                <option selected="" class="d-none"></option>

                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- district -->
                        <div class="form-group col-4">
                            <label class="form-label">District</label>

                            
                            <select id="select02" name="districts[]" multiple class="form-control district-select-1" required="" style="height:90px;">
                                
                                @foreach ($districts as $district)
                                    <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach

                            </select>
                        </div>




                        <!-- delivery timings -->
                        <div class="form-group col-4">
                            <label class="form-label">Shift Timing</label>
                            <select name="delivery-times[]" multiple class="form-control" style="height:90px;" required="">
                        
                                @foreach ($delivery_times as $time)
                                <option value="{{ $time->id }}">{{ $time->timing }}</option>
                                @endforeach
                        
                            </select>
                        </div>



                        <!-- attachment lable -->
                        <div class="form-group col-12 mt-4 mb-1">
                            <label class="form-label border-bottom-1">Attachments</label>
                        </div>


                        <!-- Picture -->
                        <div class="form-group col-6">
                            <input type="file" id="file" name="profile-img" class="custom-file-input" required="">
                            <label for="file" class="custom-file-label" style="width: 355px; margin-left:14px;">Profile
                                Picture</label>
                        </div>

                        <!-- License File -->
                        <div class="form-group col-6">
                            <div>
                                <input type="file" id="file" name="license-img" class="custom-file-input" required="">
                                <label for="file" class="custom-file-label" style="width: 366px; margin-left:14px;">License
                                    Picture</label>
                            </div>

                        </div>

                    </div>



                </div> <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Add</button>
                </div>


            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>
<!-- end driver modal -->

<div class="modal fade new-delivery-comp" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.addCompany') }}" method="post" enctype="multipart/form-data">
                @csrf

            <!-- modal body -->
            <div class="modal-body">

                <div class="row">

                    <!-- name -->
                    <div class="form-group col-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="" required="">
                    </div>


                    <!-- phone -->
                    <div class="form-group col-4">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="" required="">
                    </div>

                    <!-- Email -->
                    <div class="form-group col-4">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required="">
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required="">
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label">Pickup Start</label>
                        <input type="time" class="form-control" name="pickup_start">
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label">Pickup End</label>
                        <input type="time" class="form-control" name="pickup_end">
                    </div>


                   <!-- city -->
                   <div class="form-group col-4">
                    <label class="form-label">City</label>
                    <select class="form-control custom-select city-select-1" name="city" required="">
                            
                        <option selected="" class="d-none"></option>

                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach

                    </select>
                </div>

                <!-- district -->
                <div class="form-group col-4">
                    <label class="form-label">District</label>

                    
                    <select id="select02" name="districts[]" multiple class="form-control district-select-1" required="" style="height:90px;">
                        
                        @foreach ($districts as $district)
                            <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                        @endforeach

                    </select>
                </div>



                    <!-- attachment lable -->
                    <div class="form-group col-12  mb-1">
                        <label class="form-label">Attachments</label>
                    </div>

                      <!-- Picture -->
                      <div class="form-group col-6">
                        <input type="file" id="file" class="custom-file-input" name="contract">
                        <label for="file" class="custom-file-label" style="width: 355px; margin-left:14px;">Contract</label>
                    </div>
                    <!--  -->

                   

                    <div class="form-group col-12">
                        <hr>
                    <h5>Delivery Chagrge For Cities</h5>
                    </div>
                    <div class="form-group col-sm-3">
                        <label class="form-label">Dubai</label>
                        <input type="number" class="form-control" name="dubai" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Abu Dhabi</label>
                        <input type="number" class="form-control" name="abudhabi" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Sharjah</label>
                        <input type="number" class="form-control" name="sharjah" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Ajman</label>
                        <input type="number" class="form-control" name="ajman" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Umm Alquwain</label>
                        <input type="number" class="form-control" name="ummalquwain" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Al Ain</label>
                        <input type="number" class="form-control" name="alain" value="0" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">RAK</label>
                        <input type="number" class="form-control" name="rak" value="0" >
                    </div>


                </div>



            </div> <!-- end model body -->



            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-accent" >Add</button>
            </div>

            </form>
        </div> <!-- end model content -->

    </div>
</div>
<!-- end company modal -->



{{-- Edit company modal --}}
@foreach ($companies as $company)


<div class="modal fade edit-delivery-comp-{{$company->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.updateCompany') }}" method="post" enctype="multipart/form-data">
                @csrf

            <input type="hidden" name="comp_id" value="{{$company->id}}" id="">
            <!-- modal body -->
            <div class="modal-body">

                <div class="row">

                    <!-- name -->
                    <div class="form-group col-4">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{$company->name}}" class="form-control" name="name" placeholder="" required="">
                    </div>


                    <!-- phone -->
                    <div class="form-group col-4">
                        <label class="form-label">Phone</label>
                        <input type="text" value="{{$company->phone}}" class="form-control" name="phone" placeholder="" required="">
                    </div>

                    <!-- Email -->
                    <div class="form-group col-4">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{$company->email}}" class="form-control" name="email" placeholder="" required="">
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" >
                    </div>

                

                    <div class="form-group col-4">
                        <label class="form-label">Pickup Start</label>
                        <input type="time" class="form-control" value="{{$company->pickuptime_start}}" name="pickup_start">
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label">Pickup End</label>
                        <input type="time" class="form-control" value="{{$company->pickuptime_end}}"  name="pickup_end">
                    </div>

                   <!-- city -->
                   <div class="form-group col-4">
                    <label class="form-label">City</label>
                    <select class="form-control custom-select city-select-1" name="city" required="">
                            
                        @foreach ($cities as $city)
                        @if ($company->city_id == $city->id)
                        <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                           @else 
                           <option value="{{ $city->id }}">{{ $city->name }}</option>

                        @endif
                        @endforeach

                    </select>
                </div>

                <!-- district -->
                <div class="form-group col-4">
                    <label class="form-label">District</label>

                    
                    <select id="select02" name="districts[]" multiple class="form-control district-select-1" required="" style="height:90px;">
                        
                        @foreach ($company->districts as $comp_district)

                        @foreach ($districts as $district)

                        @if ($district->id == $comp_district->district_id )
                        <option selected value="{{ $district->id }}">{{ $district->name }}</option>
                        @else
                        <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                        @endif
                     
                         

                            @endforeach
                        @endforeach

                    </select>
                </div>



                    <!-- attachment lable -->
                    <div class="form-group col-12  mb-1">
                        <label class="form-label">Attachments</label>
                    </div>

                      <!-- Picture -->
                      <div class="form-group col-6">
                        <input type="file" id="file" class="custom-file-input" name="contract">
                        <label for="file" class="custom-file-label" style="width: 355px; margin-left:14px;">Contract</label>
                    </div>
                    <!--  -->

                   

                    <div class="form-group col-12">
                        <hr>
                    <h5>Delivery Chagrge For Cities</h5>
                    </div>
                    <div class="form-group col-sm-3">
                        <label class="form-label">Dubai</label>
                    <input type="number" class="form-control" name="dubai" value="{{$company->dubai_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Abu Dhabi</label>
                        <input type="number" class="form-control" name="abudhabi" value="{{$company->abudhabi_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Sharjah</label>
                        <input type="number" class="form-control" name="sharjah" value="{{$company->sharjah_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Ajman</label>
                        <input type="number" class="form-control" name="ajman" value="{{$company->ajman_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Umm Alquwain</label>
                        <input type="number" class="form-control" name="ummalquwain" value="{{$company->ummalquwain_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Al Ain</label>
                        <input type="number" class="form-control" name="alain" value="{{$company->alain_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">RAK</label>
                        <input type="number" class="form-control" name="rak" value="{{$company->rak_charge}}" >
                    </div>


                </div>



            </div> <!-- end model body -->



            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-accent" >Update</button>
            </div>

            </form>
        </div> <!-- end model content -->

    </div>
</div>
<!-- end edit company modal -->

    
@endforeach








<!-- shift modal -->
<div class="modal fade new-timing" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Delivery Timing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {{-- form --}}
            <form action="{{ route('admin.addDeliveryTime') }}" method="post">
                
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- timing start -->
                        <div class="form-group col-4">
                            <label class="form-label">Timing Start</label>
                            <input type="time" class="form-control" name="timing-start" placeholder="" required="">
                        </div>


                        <!-- timing end -->
                        <div class="form-group col-4">
                            <label class="form-label">Timing End</label>
                            <input type="time" class="form-control" name="timing-end" placeholder="" required="">
                        </div>



                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>
<!-- end  shift modal -->



<div class="modal fade new-dayoff" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Delivery Day Off</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {{-- form --}}
            <form action="{{ route('admin.addDayOff') }}" method="post">
                
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- timing start -->
                        <div class="form-group col-4">
                            <label class="form-label">Days</label>
                            <select class="form-control custom-select" name="dayoff" id="" required="">
                               
                                <option value="Sat">Saturday</option>
                                <option value="Sun">Sunday</option>
                                <option value="Mon">Monday</option>
                                <option value="Tue">Tuesday</option>
                                <option value="Wed">Wednesday</option>
                                <option value="Thu">Thursday</option>
                                <option value="Fri">Friday</option>

                            </select>

                        </div>




                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>



{{-- delivery charge --}}
<div class="modal fade new-charge" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Delivery Charge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.addCharge') }}" method="post">
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- city -->
                        <div class="form-group col-4">
                            <label class="form-label">City</label>
                            <select class="form-control custom-select" name="city" id="" required="">
                                
                                @foreach ($cities->whereNull('charge') as $city)

                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    
                                @endforeach

                            </select>
                        </div>


                        <!-- timing end -->
                        <div class="form-group col-4">
                            <label class="form-label">Charge</label>
                            <input required="" type="number" name="charge" class="form-control" placeholder="">
                        </div>





                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent" >Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>
<!-- end  shift modal -->


{{-- edit city charge --}}

@foreach ($cities->whereNotNull('charge') as $city)
    
<div class="modal fade edit-city-charge-{{$city->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Delivery Charge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.updateCharge') }}" method="post">
                @csrf

            <input type="hidden" name="city_id" value="{{$city->id}}" id="">
                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- city -->
                        <div class="form-group col-4">
                            <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city_name" disabled value="{{$city->name}}" id="">
                        </div>


                        <!-- timing end -->
                        <div class="form-group col-4">
                            <label class="form-label">Charge</label>
                        <input required="" value="{{$city->charge}}" type="number" name="charge" class="form-control" placeholder="">
                        </div>





                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent" >Update</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>
<!-- end  city charge modal -->
@endforeach

@endsection
{{-- end modals section --}}