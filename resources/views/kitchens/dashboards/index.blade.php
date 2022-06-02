@extends('layouts.kitchen')



@php
    $counter = 1;
@endphp



@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen Portal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>

{{-- end breadcrubms --}}









{{-- content --}}
<div class="container page__container">
    <div class="col-12 text-center">
        @if ($shift == 'active')
        <a href="{{route('kitchen.endShift')}}" class="btn btn-success mt-2">
            End Shift
        </a> 
        @else
        <button disabled class="btn btn-success mt-2">
            End Shift
        </button> 
        @endif
  
    </div>
    <div class="page-section">

        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">

                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist" style="width: 100%;">


                            <!-- tab 1 -->
                            <div class="col-auto" style="width: 33%;">
                                <a href="#regular_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">18</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Menu Package Meals</strong>
                                        <small class="card-subtitle text-50">View Packages Meals For Today</small>
                                    </span>
                                </a>
                            </div>



                            <!-- tab 2 -->
                            <div class="col-auto border-left border-right" style="width: 33%;">
                                <a href="#custome_tap" data-toggle="tab" role="tab" aria-selected="false" aria-disabled=""
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start disabled">
                                    <span class="h2 mb-0 mr-3">12</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Custome Package Meals</strong>
                                        <small class="card-subtitle text-50">View All Custom Packages For Today</small>
                                    </span>
                                </a>
                            </div>


                            <div class="col-auto border-left border-right" style="width: 34%;">
                                <a href="#requests_tap" data-toggle="tab" role="tab" aria-selected="true" aria-disabled=""
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start disabled">
                                    <span class="h2 mb-0 mr-3">2</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Store Requests</strong>
                                        <small class="card-subtitle text-50">View All Customers Requests From
                                            Store</small>
                                    </span>
                                </a>
                            </div>





                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body tab-content">

                        <!-- dining Tap -->
                        <div class="tab-pane active text-70" id="regular_tap">
                            <div class="page-separator">
                                <div class="page-separator__text">Today's Menu Packages Meales</div>
                            </div>

                            <div class="form-group col-sm-12 mt-3 text-center">
                                <label class="form-label my-3">Total Consumtion Components For Today</label>
                                <div class="form-row">
                                    @foreach ($components_array as $component)
                                    <div class="col-2 px-3 card mx-2">
                                        <label class="form-label text-muted">{{$component['name']}}</label>
                                        @if ($component['unit'] == 'piece')
                                       {{ $component['quantity']}} Piece
                                        @elseif($component['unit'] == 'gram')
                                        {{ $component['quantity'] / 1000}} KG
                                        @elseif($component['unit'] == 'milliliter')
                                        {{ $component['quantity'] / 1000}} Liter
                                        @endif
                                       
                                    </div>

                                    

                                    @endforeach
                                   
                                   
                                </div>

                              

                            </div>

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


                                            {{-- foreach for plans packages --}}
                                            @foreach ($plans as $plan)
                                                
                                            <!-- table row 1 -->
                                            <tr>



                                                {{-- package name --}}
                                                <td
                                                    style="display: inline-block; width: 11%; border:0px;text-align:center">
                                                    <a href="#">
                                                        <h5 class="mb-0">{{ $packagesArray[$plan->package_id] }}</h5>
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










                                        </tbody>
                                    </table>
                                </div>





                            </div>



                        </div>

                        <div class="tab-pane text-70" id="custome_tap">

                            <div class="page-separator">
                                <div class="page-separator__text">Custom Packages Meales</div>
                            </div>

                            <div class="card mb-lg-32pt" style="box-shadow:none;">

                                <div class="table-responsive" data-toggle="lists"
                                    data-lists-values='["js-lists-values-name"]'>

                                    <table
                                        class="table table-responsive table-bordered table-flush mb-0 thead-border-top-0 custom-table-new">
                                        <thead class="d-block">
                                            <tr>


                                                <th
                                                    style="display: inline-block; width: 11%; border:none; text-align:center;">
                                                    Customer Name
                                                </th>
                                                <th
                                                    style="display: inline-block; width: 88%; border:none; text-align:center;">
                                                    Meals</th>

                                            </tr>
                                        </thead>



                                        <tbody class="d-block">

                                            <tr>
                                                <td
                                                    style="display: inline-block; width: 11%; border:0px; text-align: center;">

                                                    <h5 class="mb-1">Idress Abderlhman</h5>
                                                    <button class="btn btn-sm btn-warning">Cooking</button>

                                                </td>



                                                <!-- carousal -->

                                                <td style="display: inline-block; width: 88%; border-bottom:0px;">



                                                    <!-- breakfast meals -->
                                                    <div id="carousal-breakfast-col"
                                                        class="form-group col-sm-12 mt-4 pos-relative">

                                                        <!-- scroll right and left buttons -->
                                                        <div class="carousal-buttons-wrapper">

                                                            <!-- scroll left button -->
                                                            <button id="horizontal-carousal-button-left-4"
                                                                class="carousal-scroll-button-left btn btn-primary">
                                                                <i class="fa fa-chevron-left"></i>
                                                            </button>

                                                            <!-- scroll right button -->
                                                            <button id="horizontal-carousal-button-right-4"
                                                                class="carousal-scroll-button-right btn btn-primary">
                                                                <i class="fa fa-chevron-right"></i>
                                                            </button>

                                                        </div>

                                                        <!-- carousal -->
                                                        <div id="horizontal-carousal-4"
                                                            class="custom-horizontal-carousal" tabindex=0>



                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custome Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Breakfast
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Not Starting</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-danger mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button
                                                                                            class="btn btn-sm btn-outline-warning mt-3">
                                                                                            Start Cooking...
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->






                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning">Lunch</h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooking</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-warning mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Cooked
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->







                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Dinner </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->












                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning">Snack</h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->






                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Post-Workout
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->




                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Pre-Workout
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->


                                                        </div>
                                                        <!-- end carousal -->




                                                    </div>
                                                    <!-- end breakfast meals -->




                                                </td>
                                                <!-- end card carousal td -->

                                            </tr>
                                            <!-- end table row 1 -->










                                            <!-- table row 2 -->
                                            <tr>
                                                <td
                                                    style="display: inline-block; width: 11%; border:0px; text-align: center;">

                                                    <h5 class="mb-1">Idress Abderlhman</h5>
                                                    <button class="btn btn-sm btn-success">Cooked</button>

                                                </td>



                                                <!-- carousal -->

                                                <td style="display: inline-block; width: 88%; border-bottom:0px;">



                                                    <!-- breakfast meals -->
                                                    <div id="carousal-breakfast-col"
                                                        class="form-group col-sm-12 mt-4 pos-relative">

                                                        <!-- scroll right and left buttons -->
                                                        <div class="carousal-buttons-wrapper">

                                                            <!-- scroll left button -->
                                                            <button id="horizontal-carousal-button-left-5"
                                                                class="carousal-scroll-button-left btn btn-primary">
                                                                <i class="fa fa-chevron-left"></i>
                                                            </button>

                                                            <!-- scroll right button -->
                                                            <button id="horizontal-carousal-button-right-5"
                                                                class="carousal-scroll-button-right btn btn-primary">
                                                                <i class="fa fa-chevron-right"></i>
                                                            </button>

                                                        </div>

                                                        <!-- carousal -->
                                                        <div id="horizontal-carousal-5"
                                                            class="custom-horizontal-carousal" tabindex=0>



                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Breakfast
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->






                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning">Lunch</h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->







                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Dinner </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->












                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning">Snack</h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->






                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Post-Workout
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->




                                                            <!-- card  -->
                                                            <label for="" id="meal-breakfast-label-1"
                                                                class="card-group-row__col carousal-cols">


                                                                <input type="checkbox" class="meal-breakfast"
                                                                    name="meal-breakfast-1" id="meal-breakfast-1">


                                                                <div
                                                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                                    <div class="card-body d-flex flex-column">
                                                                        <div class=" mb-16pt">


                                                                            <span
                                                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                                                <img width="90" height="90"
                                                                                    src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                                            </span>
                                                                            <h4 class="mb-8pt carousal-card-heading">
                                                                                Custom Meal
                                                                            </h4>
                                                                            <h6 class="mb-0 text-warning"> Pre-Workout
                                                                            </h6>
                                                                            <hr class="mt-2">
                                                                            <h5>Ingredients</h5>

                                                                            <div style="display: block ruby;">
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Pumpkin<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(700)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Potato<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(200)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="text-70 mb-0"
                                                                                        style="font-weight: bold; ">
                                                                                        Gralic<br>
                                                                                        <span
                                                                                            class="badge badge-notifications badge-primary">(50)
                                                                                            Gram</span>
                                                                                    </p>
                                                                                </div>

                                                                            </div>

                                                                            <hr class="mt-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 pt-2">
                                                                                    <strong>Cooked</strong>
                                                                                    <span
                                                                                        class="indicator-line rounded bg-success mt-1"></span>
                                                                                </div>
                                                                                <div class="col-sm-6"> <a href="#">
                                                                                        <button disabled
                                                                                            class="btn btn-sm btn-success mt-3">
                                                                                            Finished
                                                                                        </button>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </label>
                                                            <!-- end card -->


                                                        </div>
                                                        <!-- end carousal -->




                                                    </div>
                                                    <!-- end breakfast meals -->




                                                </td>
                                                <!-- end card carousal td -->

                                            </tr>
                                            <!-- end table row 2 -->




                                        </tbody>
                                    </table>
                                </div>





                            </div>

                        </div>
                        <!-- End of Custome tap -->

                        <div class="tab-pane text-70" id="requests_tap">

                            <div class="row">

                                <div class="col-12">


                                    <div class="card">
                                        <div class="card-body">


                                        </div>

                                        <div class="table-responsive tab-pane" data-lists-sort-by="js-lists-values-from"
                                            data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                <thead>
                                                    <tr>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Customer Name</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Items</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Date</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Status</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Action</a>
                                                        </th>



                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">



                                                    <!-- table row -->
                                                    <tr>



                                                        <!-- start -->
                                                        <td>
                                                            <p>Idress Abdelrhman</p>
                                                        </td>



                                                        <!-- Shift -->
                                                        <td>
                                                            <p>Protein Shake (1) , Green Juice (2)</p>
                                                        </td>

                                                        <td class="">
                                                            12/9/2021
                                                        </td>

                                                        <td class="text-center">
                                                            <strong>Requested</strong>
                                                            <span class="indicator-line rounded bg-warning mt-1"></span>
                                                        </td>

                                                        <td class="text-center">
                                                            <button class="btn btn-sm btn-success">Ready</button>
                                                        </td>

                                                    </tr>
                                                    <!-- end table row -->







                                                    <!-- table row -->
                                                    <tr>



                                                        <!-- start -->
                                                        <td>
                                                            <p>Ahmed Ali</p>
                                                        </td>



                                                        <!-- Shift -->
                                                        <td>
                                                            <p>Green Juice (1)</p>
                                                        </td>

                                                        <td class="">
                                                            13/9/2021
                                                        </td>

                                                        <td class="text-center">
                                                            <strong>Ready</strong>
                                                            <span class="indicator-line rounded bg-success mt-1"></span>
                                                        </td>

                                                        <td class="text-center">
                                                            <button class="btn btn-sm btn-success"
                                                                disabled>Finished</button>
                                                        </td>

                                                    </tr>
                                                    <!-- end tr -->



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
                        <!-- End of store request tap -->

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
{{-- end content --}}






@endsection





@section('scripts')


<!-- package plan js (custom added) -->
<script src="{{ asset('assets/kitchen/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/kitchen/js/package-plan.js') }}"></script>

@endsection














{{-- modals --}}
@section('modals')

@php
    $modalcounter = 1;
@endphp

{{-- foreach for plans packages --}}
@foreach ($plans as $plan)

@foreach ($plan->meals as $planMeal)
    

<div class="modal fade meal-recipe-{{ $planMeal->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meal Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <h4 class="mb-0">Components</h4>

                {{-- component foreach --}}
                <p class="text-70 mb-0" style="font-weight: 500; ">
                @foreach ($planMeal->meal->components as $component)
                    | {{ $component->component->name }} <span class="badge badge-notifications badge-primary">({{ $component->quantity }}) Gram</span>
                @endforeach
                </p>
                {{-- end component foreach --}}

                <hr>
                {{-- sauce --}}
                    
                <h5 class="mb-0 mt-2">Sauce</h5>
                <div style="display: flex;">

                    <span>{{ (!empty($planMeal->meal->meal->sauce->name) ? $planMeal->meal->meal->sauce->name : "-") }}</span>

                    {{-- print sauce component if sauce exists --}}
                    @if (!empty($planMeal->meal->meal->sauce->name))
                        <p class="text-70 mb-0 ml-1" style="font-weight: bold; ">
                            @foreach ($planMeal->meal->meal->sauce->components as $component)
                            | {{ $component->component->name }} <span
                            class="badge badge-notifications badge-primary">({{ $component->quantity }}) Gram</span>
                            @endforeach

                    </p>
                    @endif
                    

                </div>

                <hr>
                <h4>Instructions</h4>
                <p>{{ $planMeal->meal->meal->instructions }}</p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endforeach
{{-- plan meals foreach --}}

@php
    $modalcounter++;
@endphp


@endforeach
{{-- plan foreach --}}



@endsection
{{-- end modal section --}}


