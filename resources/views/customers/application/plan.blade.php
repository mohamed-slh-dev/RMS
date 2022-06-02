@extends('layouts.customer')



<!-- careful - copy when moving to laravel -->
<style>
    /* ---- my plan */
    .select2-selection {
        height: 120px !important;
        overflow: auto !important;
    }
</style>



@php
    $counter = 1;
@endphp

{{-- contents --}}
@section('content')



    <!-- layout -->
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">
    
            <!-- Header -->
    
            <div class="container-fluid bg-white py-3"
                style="box-shadow:0px 0px 3px 0px lightgrey; position:fixed; z-index: 1000; bottom:0px; max-width: 100%;">
    
                <div class="row m-navbar-row">

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.home') }}" class="btn btn-outline-primary w-100"><i class="fa fa-home"></i></a>
                </div>

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.chat') }}" class="btn btn-outline-primary w-100"><i class="fa fa-comment-dots"></i></a>
                </div>

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.store') }}" class="btn btn-outline-primary w-100"><i class="fa fa-store-alt"></i></a>
                </div>

                <!-- Navbar button -->
                <!-- <div class="col-2">
                        <a href="ad.html" class="btn btn-outline-primary w-100"><i class="fa fa-ad"></i></a>
                    </div> -->


                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.plan') }}" class="btn btn-primary w-100"><i class="fa fa-calendar-alt"></i></a>
                </div>

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.profile') }}" class="btn btn-outline-primary w-100"><i class="fa fa-user"></i></a>
                </div>


            </div>
            {{-- end menu --}}
    
    
    
    
    
    
    
    
    
            </div>
            <!-- // END Header -->
    
    
            <!-- breadcrubms -->
            <div class="border-bottom-2 mt-3 position-relative z-1">
                <div class="container-fluid">
    
                    <div class="row align-items-center" style="margin-top:0px;">
    
    
                        <div class="col-12 text-center mb-1">
                            <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                                style="width:100%; height:60px; object-fit: contain;">
                        </div>
    
    
    
    
                        <!-- meal info -->
                        <div class="col-12 text-center pt-3">
                            <h6 class="m-meal-heading mb-0">
                                <a data-toggle="modal" data-target=".package-info" class="cursor-pointer"><i
                                        class="fa fa-info-circle mr-2"></i></a>
                                {{ $customer->package->name }} Package
                            </h6>
                        </div>
    
    
                        <!-- carousal col  -->
    
                        <div class="col-12">
    
                            <!-- carousal -->
                            <div class="row align-items-center mt-4" style="position: relative;">
    
    
    
                                <!-- patch 1 -->
    
    
    
    
                                <div class="col-3 m-boxes-1">
                                    <div class="m-boxes-plan">
                                        <h6>Cal</h6>
                                        <p class="mb-0">{{ $customer->package->cals }}</p>
                                    </div>
                                </div>
    
                                <div class="col-3 m-boxes-1">
                                    <div class="m-boxes-plan">
    
                                        <h6>Fat</h6>
                                        <p class="mb-0">{{ $customer->package->fats }}</p>
                                    </div>
                                </div>
    
                                <div class="col-3 m-boxes-1">
                                    <div class="m-boxes-plan">
                                        <h6>Carb</h6>
                                        <p class="mb-0">{{ $customer->package->carbs }}</p>
                                    </div>
                                </div>
    
    
                                <div class="col-3 m-boxes-1">
                                    <div class="m-boxes-plan">
                                        <h6>Protein</h6>
                                        <p class="mb-0">{{ $customer->package->proteins }}</p>
                                    </div>
                                </div>
    
    
    
                            </div>
                            <!-- end carousal -->
    
                        </div>
                        <!-- end carousal col -->
    
    
    
    
    
                        <div class="col-12 mt-4 pb-2 text-center">
                            <button class="btn btn-sm btn-warning px-4" style="letter-spacing: 0.4px;" data-toggle="modal"
                                data-target=".exclude-modal">Excludes</button>
                        </div>
    
    
    


                        {{-- print meal by day (only upcoming meals) --}}
                        @if ($customer->meals)
                            

                            
                        @foreach ($customer->meals->where('date', '>=', date('Y-m-d'))->whereNotNull('package_plan_meal_id')->sortBy('date')->groupBy('date') as $mealDate => $customerMeals)




                      
    
                        <!-- carousal of meals -->
                        <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">
    
                            <!-- date -->
                            <div class="row align-items-end mb-2 mx-0">
                                <div class="col-6">
                                    <h6 class="mb-0">{{ date('d M Y', strtotime($mealDate)) }}</h6>
                                </div>
    
                                <div class="col-6 text-right">
                                    {{-- suppose to be package_plan_meal_id (cause it all the same package plan id) --}}
                                    <a href="{{ route('customer.planMeals', [$customerMeals[0]->meal->package_plan_id]) }}" class="py-1 btn btn-sm btn-outline-primary">
                                        Change Meals
                                    </a>
                                </div>
                            </div>
    
                            <!-- scroll right and left buttons -->
                            <div class="carousal-buttons-wrapper">
    
                                <!-- scroll left button -->
                                <button id="horizontal-carousal-button-left-{{ $counter }}"
                                    class="carousal-scroll-button-left btn btn-primary d-none">
                                    <i class="fa fa-chevron-left"></i>
                                </button>
    
                                <!-- scroll right button -->
                                <button id="horizontal-carousal-button-right-{{ $counter }}"
                                    class="carousal-scroll-button-right btn btn-primary d-none">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
    
                            </div>
    
                            <!-- carousal -->
                            <div id="horizontal-carousal-{{ $counter }}" class="custom-horizontal-carousal" tabindex=0
                                style="overflow-x: auto;">
    
                            
                                @foreach ($customerMeals as $customerMeal)
                                    
                                <!-- card  -->
                                <label for="" id="meal-breakfast-label-1" class="card-group-row__col carousal-cols">
    
    
                                    <input type="checkbox" class="meal-breakfast" name="meal-breakfast-1"
                                        id="meal-breakfast-1">
    
    
                                    <div
                                        class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">
    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
    
    
                                                <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$customerMeal->meal->meal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $customerMeal->meal->meal->meal->name }}
                                                </h4>
                                                <h6 class="mb-0 text-warning"> {{ $customerMeal->mealType->name }} </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
    
                                                <div style="display: block ruby;">
                                                    
                                                    <div>
                                                    
                                                        @foreach ($customerMeal->meal->meal->components as $component)
                                                    
                                                        <p class="text-70 mb-0 d-inline-block mx-2" style="font-weight: bold;">
                                                    
                                                            {{ $component->component->name }}<br>
                                                            <span class="badge badge-notifications badge-secondary">({{ $component->quantity }}) Gram</span>
                                                    
                                                        </p>
                                                    
                                                        @endforeach
                                                    </div>
    
                                                </div>
    
    
    
                                            </div>
    
                                        </div>
    
    
                                    </div>
    
                                </label>
                                <!-- end card -->
    
    
    
                                @endforeach
                                {{-- end foreach --}}
    
    
    
    
                            </div>
                            <!-- end carousal -->
    
    
    
    
                        </div>
                        <!-- end carousal of meals -->
    
    
                        <!-- hr -->
                        <div class="col-12">
                            <hr>
                        </div>


                        @php
                            $counter++;
                        @endphp

                        @endforeach
                            
                        @endif
    
                        {{-- end printing the meals --}}
    
    
    
    
                    </div>
                    <!-- end row -->
    
    
                </div>
            </div>
            <!-- breadcrubms end -->
    
    
    
            <div class="container page__container">
                <div class="page-section">
    
    
    
    
                </div>
            </div>
    
    
    
    
    
        </div>
        <!-- // END drawer-layout__content -->
    
    
    
    
        <!-- drawrer menu was here -->
    
        <!-- drawrer menu end -->
    
    
    
    </div>
    <!-- // END drawer-layout -->



@endsection








{{-- scripts --}}
@section('scripts')

    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/package-plan.js') }}"></script>
    
    
    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/customer-mobile.js') }}"></script>


@endsection









{{-- modals --}}
@section('modals')

    <!-- package modal -->
    <div class="modal fade package-info" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="letter-spacing: 0.4px !important;">Package
                        Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body">
    
                    <div class="row">
                        <div class="col-12">
    
                            <p class="mb-0" style="color:dimgrey;">{{ $customer->package->desc }}</p>
    
                        </div>
    
    
                    </div>
    
    
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end package modal -->
    
    
    
    
    
    
    
    
    
    
    
    <!-- exclude modal -->
    <div class="modal fade exclude-modal" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="letter-spacing: 0.4px !important;">Exclude
                        Ingredients</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="{{ route('customer.updateExcludes') }}" method="post">

                    @csrf
                    <div class="modal-body">
        
                        <div class="row">
        
                            <div class="col-12 mb-2">
                                <span class="" style="color:dimgrey;"><i class="fa fa-circle mr-2"
                                        style="font-size:10px; color:#4aa2ee;"></i>You can select ingredients to exclude from
                                    your meal plan</span>
                            </div>
        
        
                            <div class="col-12">
        
                                <select id="select02" data-toggle="select" multiple
                                    class="form-control form-control-lg myplan-select" name="excludes[]">

                                    @foreach ($components as $component)
                                        
                                        @php
                                            $found = 0;
                                        @endphp


                                        {{-- check if exclude exists --}}
                                        @foreach ($customer->excludes as $exclude)
                                            
                                            @if ($exclude->component_id == $component->id)
                                                
                                                @php
                                                $found = 1;
                                                @endphp 
                                                
                                            @endif

                                        @endforeach


                                        @if ($found == 1)
                                            <option selected="" value="{{ $component->id }}">{{ $component->name }}</option>
                                        @else
                                            <option value="{{ $component->id }}">{{ $component->name }}</option>
                                        @endif
        

                                    @endforeach

                                </select>
                            </div>
        
        
                        </div>
        
        
                    </div>
        
                    <div class="modal-footer">
        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save</button>
        
                    </div>
                </form>
                {{-- end form --}}
            </div>
        </div>
    </div>
    <!-- end exclude modal -->

@endsection