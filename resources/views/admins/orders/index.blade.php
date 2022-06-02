@extends('layouts.admin')


@php
    $counter = 1;
@endphp


<style>
    .custom-horizontal-carousal {
        min-height: 338px;
    }

</style>

{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Orders</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Dining Orders & One Time Orders</a></li>



                </ol>

            </div>
        </div>


    </div>
</div>


{{-- end breadcrubms --}}





{{-- content --}}
<div class="container page__container">
    <div class="page-section">


        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">

                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist" style="width: 100%;">


                            <!-- tab 1 -->
                            <div class="col-auto" style="width: 50%;">
                                <a href="#dining_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">{{ $orders->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Dining Orders</strong>
                                        <!-- <small class="card-subtitle text-50">Manage Packages</small> -->
                                    </span>
                                </a>
                            </div>



                            <!-- tab 2 -->
                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#orders_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">{{ $onetimeOrders->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">One Time Order</strong>
                                        <!-- <small class="card-subtitle text-50">Manage Meals</small> -->
                                    </span>
                                </a>
                            </div>






                        </div>
                    </div>
                    <!-- end card header -->


                    <!-- tabs content -->
                    <div class="card-body tab-content">

                        <!-- dining Tap -->
                        <div class="tab-pane active text-70" id="dining_tap">

                            <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add driver button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-dining"><i class="fa fa-plus-circle mr-2"></i>New Order</a>
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
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Dining ID</a>
                                                        </th>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Table</a>
                                                        </th>




                                                        

                                                        <th style="width:130px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Meals</a>
                                                        </th>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">DateTime</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Price</a>
                                                        </th>


                                                        <th></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">

                                                    @foreach ($orders as $order)
                                                        

                                                    <!-- table row -->
                                                    <tr>


                                                        <!-- name + pp -->
                                                        <td> 
                                                            <p class="mb-0">#{{ $order->id }}</p>
                                                        </td>



                                                        <!-- License -->
                                                        <td>
                                                            <p class="mb-0">{{ $order->table }}</p>
                                                    
                                                        </td>



                                                        <!-- timing -->
                                                        <td>
                                                            <p class="mb-0" style="font-size:14px;">
                                                                @foreach ($order->meals as $meal)   
                                                                {{ $meal->meal->meal->name }} - <span class="badge-primary badge-pill">{{ $meal->meal->package->name }}</span><br>
                                                                @endforeach
                                                            </p>
                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            <p class="mb-0">{{ date('d M Y h:i A', strtotime($order->created_at)) }}</p>
                                                            
                                                        </td>

                                                            {{-- initial --}}
                                                            @php
                                                                $result = 0;
                                                            @endphp

                                                            @foreach ($order->meals as $meal)
                                                                @php
                                                                    $result += $meal->selling_price;
                                                                @endphp
                                                            @endforeach
                                                                
                                                        <td>
                                                            <p class="mb-0">
                                                            {{ $result }}
                                                            <small class="text-muted">AED</small>
                                                            </p>
                                                        </td>

                                                        
                                                    </tr>
                                                    <!-- end table row -->


                                                    @endforeach
                                                    {{-- end foreach --}}

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
                        <!-- end dining tab -->


                        <div class="tab-pane text-70" id="orders_tap">

                            <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add driver button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-order"><i class="fa fa-plus-circle mr-2"></i>New Order</a>
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
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Order ID</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Customer</a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Phone</a>
                                                        </th>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Address</a>
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
                                                                data-sort="js-lists-values-name">Meals</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Note</a>
                                                        </th>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">DateTime</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Price</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Status</a>
                                                        </th>


                                                        <th></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    {{-- foreach --}}
                                                    @foreach ($onetimeOrders as $order)
                                                        
                                                    
                                                    <tr>

                                                        <td>
                                                            <p class="mb-1">#{{ $order->id }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1">{{ $order->customer_name }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1">{{ $order->customer_phone }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1">{{ $order->customer_address }}</p>
                                                        </td>


                                                        <td>
                                                            <p class="mb-1">{{ $order->city->name }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1">{{ $order->district->name }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1" style="font-size:14px;">
                                                                @foreach ($order->meals as $meal)
                                                                {{ $meal->meal->meal->name }} - <span class="badge-primary badge-pill">{{ $meal->meal->package->name }}</span><br>
                                                                @endforeach
                                                            </p>
                                                        </td>


                                                        <td>
                                                            <p class="mb-1">{{ (!empty($order->note) ? $order->note : "-") }}</p>
                                                        </td>

                                                        <td>
                                                            <p class="mb-1">{{ date('d M Y h:i A', strtotime($order->created_at)) }}</p>
                                                        </td>


                                                        {{-- initial --}}
                                                        @php
                                                            $result = 0;
                                                        @endphp
                                                        
                                                        @foreach ($order->meals as $meal)
                                                            @php
                                                            $result += $meal->selling_price;
                                                            @endphp
                                                        @endforeach
                                                        
                                                        <td>
                                                            <p class="mb-1">
                                                                {{ $result }}
                                                                <small class="text-muted">AED</small>
                                                            </p>
                                                        </td>

                                                        <td>
                                                            @if ($order->status == "delivered")
                                                                <p class="mb-1 badge badge-pill badge-success">{{ $order->status }}</p>

                                                            @elseif ($order->status == "canceled")
                                                                <p class="mb-1 badge badge-pill badge-danger">{{ $order->status }}</p>
                                                                
                                                            @else
                                                                <p class="mb-1 badge badge-pill badge-warning">{{ $order->status }}</p>
                                                            @endif
                                                            
                                                        </td>

                                                    </tr>

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
                        <!-- end one order tab -->

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


<!-- package plan js (custom added) -->
<script src="{{ asset('assets/admin/js/package-plan.js') }}"></script>


{{-- hide and show packages --}}
<script src="{{ asset('assets/admin/js/orders.js') }}"></script>

    
@endsection








{{-- modals --}}
@section('modals')
    

    {{-- dining order modal --}}
    <div class="modal fade new-dining" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dining Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('admin.createOrder') }}" method="post">
                    @csrf


                    <div class="modal-body">
                        <div class="list-group-item" id="custom">
                            <div class="form-group row align-items-center mb-0">
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Customer Table</label>
                                    <input type="text" name="table" required="" class="form-control" id="">
                                </div>
        
                                
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Package Type </label>
                                    <select class="form-control custom-select" name="package" id="package-select">

                                        <option value="all">Show All</option>
                                        @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Note</label>
                                    <input type="text" class="form-control" name="note">
                                </div>
        


                                {{-- set group counter --}}
                                @php
                                $mealGroupCounter = 1;
                                @endphp

                                @if ($packageMealsOG)
                                    
                                {{-- meal Group (based on meal_type) --}}
                                @foreach ($packageMealsOG->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $packageMeals)
                                
                                
                                {{-- set and reset mealCounter --}}
                                @php
                                $mealCounter = 1;
                                @endphp
                                
                                
                                <!-- breakfast meals -->
                                <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">
                                    <label class="form-label">{{ $meal_types[$mealGroup] }}</label>
                                
                                
                                    <!-- scroll right and left buttons -->
                                    <div class="carousal-buttons-wrapper">
                                
                                        <!-- scroll left button -->
                                        <button type="button" id="horizontal-carousal-button-left-{{ $counter }}"
                                            class="carousal-scroll-button-left btn btn-primary">
                                            <i class="fa fa-chevron-left"></i>
                                        </button>
                                
                                        <!-- scroll right button -->
                                        <button type="button" id="horizontal-carousal-button-right-{{ $counter }}"
                                            class="carousal-scroll-button-right btn btn-primary">
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                
                                    </div>
                                
                                    <!-- carousal -->
                                    <div id="horizontal-carousal-{{ $counter }}" class="custom-horizontal-carousal" tabindex=0>
                                
                                
                                
                                        @foreach ($packageMeals as $packageMeal)
                                
                                
                                        {{-- breakfast --}}
                                        @if ($mealGroup == 1)
                                
                                        <!-- card  -->
                                        <label for="meal-breakfast-{{ $mealCounter }}" id="meal-breakfast-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-breakfast-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-breakfast" name="breakfast-meal[]" id="meal-breakfast-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="breakfast-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="breakfast-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-2 text-warning">Breakfast<br>
                                                            <span class="badge badge-primary">{{ $packageMeal->package->name }}</span>
                                                        </h6>
                                
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                        {{-- lunch --}}
                                        @elseif ($mealGroup == 2)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-launch-{{ $mealCounter }}" id="meal-launch-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-launch-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-launch" name="lunch-meal[]" id="meal-launch-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="lunch-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="lunch-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Lunch<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                
                                        {{-- dinner --}}
                                        @elseif ($mealGroup == 3)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-dinner-{{ $mealCounter }}" id="meal-dinner-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-dinner-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-dinner" name="dinner-meal[]" id="meal-dinner-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="dinner-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="dinner-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Dinner<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                        {{-- snack --}}
                                        @elseif ($mealGroup == 4)
                                
                                        <!-- card  -->
                                        <label for="meal-snack-{{ $mealCounter }}" id="meal-snack-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-snack-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-snack" name="snack-meal[]" id="meal-snack-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="snack-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="snack-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Snack<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                        {{-- postworkout --}}
                                        @elseif ($mealGroup == 5)
                                
                                        <!-- card  -->
                                        <label for="meal-postworkout-{{ $mealCounter }}" id="meal-postworkout-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-postworkout-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-postworkout" name="postworkout-meal[]"
                                                id="meal-postworkout-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="postworkout-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="postworkout-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Post-Workout<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                        {{-- preworkout --}}
                                        @elseif ($mealGroup == 6)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-preworkout-{{ $mealCounter }}" id="meal-preworkout-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-preworkout-labels package-meal package-meal-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-preworkout" name="preworkout-meal[]"
                                                id="meal-preworkout-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="preworkout-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="preworkout-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Pre-Workout<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                        @endif
                                
                                
                                
                                        {{-- increase inner counter --}}
                                        @php
                                        $mealCounter++;
                                        @endphp
                                
                                        @endforeach
                                        {{-- end packageMeal foreach --}}
                                
                                
                                
                                
                                
                                    </div>
                                    <!-- end carousal -->
                                
                                
                                
                                
                                    {{-- increase counter for carousals --}}
                                    @php
                                    $counter++;
                                    @endphp
                                
                                
                                
                                </div>
                                <!-- end specific meals -->
                                
                                
                                {{-- increase outer counter --}}
                                @php
                                $mealGroupCounter++;
                                @endphp
                                
                                
                                @endforeach

                                @endif
        
                                
        
        
                            </div>
                        </div>
        
                    </div><!-- end of modal body -->
        
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-accent">Save</button>
                    </div>


                </form>
                {{-- end form --}}
    
            </div>
        </div>
    </div>
    <!-- end of modal -->
    
    
    
    
    
    
    
    
    
    
    
    {{-- new one time order modal --}}
    <div class="modal fade new-order" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">One Time Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('admin.createOnetimeOrder') }}" method="post">
                    @csrf


                    <div class="modal-body">
                        <div class="list-group-item" id="custom">
                            <div class="form-group row align-items-center mb-0">
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Customer Name </label>
                                    <input type="text" class="form-control" required="" name="name">
                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Customer Phone </label>
                                    <input type="text" class="form-control" required="" name="phone">
                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Customer Address </label>
                                    <input type="text" class="form-control" required="" name="address">
                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1"> City </label>
                                    <select class="form-control custom-select city-select-1" name="city" required="">
                                    
                                        <option selected="" class="d-none"></option>
                                    
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    
                                    </select>

                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">District </label>

                                    <select name="district" class="form-control custom-select district-select-1" required="">

                                        <option selected="" class="d-none"></option>

                                        @foreach ($districts as $district)
                                            <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">
                                            {{ $district->name }}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label" for="exampleInputEmail1">Package Type </label>
                                    <select class="form-control custom-select" name="package" id="package-select-2">
                                
                                        <option value="all">Show All</option>
                                        @foreach ($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
        
                                <div class="form-group col-sm-12">
                                    <label class="form-label" for="exampleInputEmail1">Note </label>
                                    <input type="text" class="form-control" name="note">
                                </div>
        



                                {{-- set group counter --}}
                                @php
                                $mealGroupCounter = 1;
                                @endphp

                                @if ($packageMealsOG)
                                
                                {{-- meal Group (based on meal_type) --}}
                                @foreach ($packageMealsOG->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $packageMeals)
                                
                                
                                {{-- set and reset mealCounter --}}
                                @php
                                $mealCounter = 1;
                                @endphp
                                


                                
                                <!-- breakfast meals -->
                                <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">
                                    <label class="form-label">{{ $meal_types[$mealGroup] }}</label>
                                
                                
                                    <!-- scroll right and left buttons -->
                                    <div class="carousal-buttons-wrapper">
                                
                                        <!-- scroll left button -->
                                        <button type="button" id="horizontal-carousal-button-left-{{ $counter }}"
                                            class="carousal-scroll-button-left btn btn-primary">
                                            <i class="fa fa-chevron-left"></i>
                                        </button>
                                
                                        <!-- scroll right button -->
                                        <button type="button" id="horizontal-carousal-button-right-{{ $counter }}"
                                            class="carousal-scroll-button-right btn btn-primary">
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                
                                    </div>
                                
                                    <!-- carousal -->
                                    <div id="horizontal-carousal-{{ $counter }}" class="custom-horizontal-carousal" tabindex=0>
                                
                                
                                
                                        @foreach ($packageMeals as $packageMeal)
                                
                                
                                        {{-- breakfast --}}
                                        @if ($mealGroup == 1)
                                
                                        <!-- card  -->
                                        <label for="meal-breakfast-second-{{ $mealCounter }}" id="meal-breakfast-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-breakfast-labels package-meal package-meal-second package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-breakfast-second" name="breakfast-meal[]" id="meal-breakfast-second-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="breakfast-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="breakfast-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-2 text-warning">Breakfast<br>
                                                            <span class="badge badge-primary">{{ $packageMeal->package->name }}</span>
                                                        </h6>
                                
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                        {{-- lunch --}}
                                        @elseif ($mealGroup == 2)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-launch-second-{{ $mealCounter }}" id="meal-launch-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-launch-labels package-meal-second package-meal package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-launch-second" name="lunch-meal[]" id="meal-launch-second-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="lunch-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="lunch-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Lunch<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                
                                        {{-- dinner --}}
                                        @elseif ($mealGroup == 3)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-dinner-second-{{ $mealCounter }}" id="meal-dinner-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-dinner-labels package-meal-second package-meal package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-dinner-second" name="dinner-meal[]" id="meal-dinner-second-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="dinner-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="dinner-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Dinner<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                
                                        {{-- snack --}}
                                        @elseif ($mealGroup == 4)
                                
                                        <!-- card  -->
                                        <label for="meal-snack-second-{{ $mealCounter }}" id="meal-snack-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-snack-labels package-meal-second package-meal package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-snack-second" name="snack-meal[]" id="meal-snack-second-{{ $mealCounter }}"
                                                value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="snack-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="snack-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Snack<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                        {{-- postworkout --}}
                                        @elseif ($mealGroup == 5)
                                
                                        <!-- card  -->
                                        <label for="meal-postworkout-second-{{ $mealCounter }}" id="meal-postworkout-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-postworkout-labels package-meal-second package-meal package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-postworkout-second" name="postworkout-meal[]"
                                                id="meal-postworkout-second-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="postworkout-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="postworkout-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Post-Workout<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                
                                
                                        {{-- preworkout --}}
                                        @elseif ($mealGroup == 6)
                                
                                
                                        <!-- card  -->
                                        <label for="meal-preworkout-second-{{ $mealCounter }}" id="meal-preworkout-second-label-{{ $mealCounter }}"
                                            class="card-group-row__col carousal-cols meal-preworkout-labels package-meal-second package-meal package-meal-{{ $packageMeal->package->id }} package-meal-second-{{ $packageMeal->package->id }}">
                                
                                            <input type="checkbox" class="meal-preworkout-second" name="preworkout-meal[]"
                                                id="meal-preworkout-second-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                
                                
                                            {{-- id of oackage_meal and  meal_type_id --}}
                                            <input type="hidden" name="preworkout-package-meal[]" value="{{ $packageMeal->id }}">
                                            <input type="hidden" name="preworkout-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                
                                
                                
                                            <div class="card card-group-row__card text-center o-hidden card--raised ">
                                
                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">
                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                        <h6 class="mb-0 text-warning">Pre-Workout<br><span
                                                                class="badge badge-primary">{{ $packageMeal->package->name }}</span></h6>
                                
                                                        {{-- ingredients in meal --}}
                                                        <hr class="mt-2">
                                                        <h6>Ingredients</h6>
                                                        <p class="text-70 mb-0">
                                
                                                            {{-- outer foreach --}}
                                                            @foreach ($packageMeal->components as $mealComponent)
                                
                                                            | {{ $mealComponent->component->name }}
                                
                                                            @endforeach
                                                            {{-- end outer foreach --}}
                                                        </p>
                                
                                
                                                    </div>
                                
                                                </div>
                                
                                
                                            </div>
                                
                                        </label>
                                        <!-- end card -->
                                
                                
                                        @endif
                                
                                
                                
                                        {{-- increase inner counter --}}
                                        @php
                                        $mealCounter++;
                                        @endphp
                                
                                        @endforeach
                                        {{-- end packageMeal foreach --}}
                                
                                
                                
                                
                                
                                    </div>
                                    <!-- end carousal -->
                                
                                
                                
                                
                                    {{-- increase counter for carousals --}}
                                    @php
                                    $counter++;
                                    @endphp
                                
                                
                                
                                </div>
                                <!-- end specific meals -->
                                
                                
                                {{-- increase outer counter --}}
                                @php
                                $mealGroupCounter++;
                                @endphp
                                
                                
                                @endforeach
        
                                @endif


                            </div>
                        </div>
        
                    </div>
                    <!-- end of modal body -->
        
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-accent">Save</button>
                    </div>
                

                </form>
                {{-- end form --}}
    
            </div>
        </div>
    </div>
    <!-- end of modal -->




@endsection