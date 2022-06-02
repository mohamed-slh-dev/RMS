@extends('layouts.customer')




<!-- careful - copy when moving to laravel -->
<style>
    /* ---- my plan */
    .select2-selection {
        height: 120px !important;
        overflow: auto !important;
    }

    [dir] input[type="checkbox"] {
        display: none;
    }
</style>


@php
    $counter = 1;
@endphp




{{-- content --}}
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


                <form action="{{ route('customer.updatePlanMeals', [$plan->id]) }}" method="post">
                @csrf
                
               
                <div class="row align-items-center" style="margin-top:0px;">


                    <div class="col-12 text-center mb-1">
                        <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                            style="width:100%; height:60px; object-fit: contain;">
                    </div>




                    <!-- meal info -->
                    <div class="col-12 text-center pt-3">
                        <h6 class="m-meal-heading mb-0">
                            <a data-toggle="modal"></a>
                            Choose your plan meals
                        </h6>

                        <p class="mb-0 " style="font-size:14px;">{{ date('d M Y', strtotime($plan->date)) }}</p>
                    </div>






                    <div class="col-12">

                        
                    </div>



                    {{-- meal Group (based on meal_type) --}}
                    @foreach ($plan->meals->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $planMeals)
                    
                    
                    {{-- set and reset mealCounter --}}
                    @php
                    $mealCounter = 1;
                    @endphp

                    @if (str_contains($customerMealTypes, $mealGroup.","))
                        
                    
                    
                    <!-- breakfast meals -->
                    <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">
                        <label class="form-label">{{ $meal_types[$mealGroup] }}</label>
                    
                    
                        <!-- scroll right and left buttons -->
                        <div class="carousal-buttons-wrapper">
                    
                            <!-- scroll left button -->
                            <button type="button" id="horizontal-carousal-button-left-{{ $counter }}"
                                class="carousal-scroll-button-left btn btn-primary d-none">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                    
                            <!-- scroll right button -->
                            <button type="button" id="horizontal-carousal-button-right-{{ $counter }}"
                                class="carousal-scroll-button-right btn btn-primary d-none">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                    
                        </div>
                    
                        <!-- carousal -->
                        <div id="horizontal-carousal-{{ $counter }}" class="custom-horizontal-carousal" style="overflow-x: auto;" tabindex=0>
                    
                    
                    
                            @foreach ($planMeals as $planMeal)
                            
                            
                            {{-- breakfast --}}
                            @if ($mealGroup == 1)
                            
                            <!-- card  -->
                            <label for="meal-breakfast-default-{{ $mealCounter }}" id="meal-breakfast-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols meal-breakfast-default-label">
                            
                                <input type="checkbox" class="meal-breakfast-default" name="breakfast-meal-default[]"
                                    id="meal-breakfast-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="breakfast-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="breakfast-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Breakfast<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                            <label for="meal-launch-default-{{ $mealCounter }}" id="meal-launch-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols  meal-launch-default-label">
                            
                                <input type="checkbox" class="meal-launch-default" name="lunch-meal-default[]"
                                    id="meal-launch-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="lunch-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="lunch-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Lunch<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                            <label for="meal-dinner-default-{{ $mealCounter }}" id="meal-dinner-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols  meal-dinner-default-label">
                            
                                <input type="checkbox" class="meal-dinner-default" name="dinner-meal-default[]"
                                    id="meal-dinner-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="dinner-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="dinner-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Dinner<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                            <label for="meal-snack-default-{{ $mealCounter }}" id="meal-snack-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols meal-snack-default-label">
                            
                                <input type="checkbox" class="meal-snack-default" name="snack-meal-default[]"
                                    id="meal-snack-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="snack-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="snack-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Snack<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                            <label for="meal-postworkout-default-{{ $mealCounter }}" id="meal-postworkout-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols meal-postworkout-default-label">
                            
                                <input type="checkbox" class="meal-postworkout-default" name="postworkout-meal-default[]"
                                    id="meal-postworkout-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="postworkout-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="postworkout-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Post-Workout<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                            <label for="meal-preworkout-default-{{ $mealCounter }}" id="meal-preworkout-default-label-{{ $mealCounter }}"
                                class="card-group-row__col carousal-cols cuisine-meal meal-preworkout-default-label">
                            
                                <input type="checkbox" class="meal-preworkout-default" name="preworkout-meal-default[]"
                                    id="meal-preworkout-default-{{ $mealCounter }}" value="{{ $planMeal->id }}">
                            
                            
                                {{-- id of oackage_meal and meal_type_id --}}
                                <input type="hidden" name="preworkout-package-default-meal[]" value="{{ $planMeal->id }}">
                                <input type="hidden" name="preworkout-package-default-meal-type[]" value="{{ $planMeal->meal_type_id }}">
                            
                            
                            
                                <div class="card card-group-row__card text-center o-hidden card--raised ">
                            
                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">
                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}</h4>
                                            <h6 class="mb-0 text-warning">Pre-Workout<br><span class="badge badge-primary">{{
                                                    $planMeal->meal->meal->cuisine->name }}</span></h6>
                            
                                            {{-- ingredients in meal --}}
                                            <hr class="mt-2">
                                            <h6>Ingredients</h6>
                                            <p class="text-70 mb-0">
                            
                                                {{-- outer foreach --}}
                                                @foreach ($planMeal->meal->components as $mealComponent)
                            
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
                    
                    

                    @endif
                    {{-- end of customer doesn't have this meal type --}}


                    
                    @endforeach
                    {{-- end mealGroup foreach --}}

                    <!-- carousal of meals -->
                    



                    <div class="col-12 text-center mt-3 mb-5">
                        <a href="{{ route('customer.plan') }}" class="btn mr-2 btn-white px-5 py-1">
                            back
                        </a>

                        <button class="btn py-1 btn-primary px-5">
                            Save
                        </button>
                    </div>
                </div>
                <!-- end row -->

                </form>
                {{-- end form --}}
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





@endsection






{{-- scripts --}}
@section('scripts')

    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/admin/js/package-plan.js') }}"></script>
    
    
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

                        <p class="mb-0" style="color:dimgrey;">Perfect 6 pack food. Lean protein, Minimal carbohydrates
                            and lots of vegetables.
                            Average calories per meal is around 300 to 350 Kcal. All meals shown on this page are Sample
                            Meals.</p>

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

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 mb-2">
                        <span class="" style="color:dimgrey;"><i class="fa fa-circle mr-2"
                                style="font-size:10px; color:#4aa2ee;"></i>You can select ingredients to exclude from
                            your meal plan</span>
                    </div>


                    <div class="col-12">

                        <select id="select02" data-toggle="select" multiple
                            class="form-control form-control-lg myplan-select">
                            <!-- <option selected="" disabled="">Select any exclude</option> -->
                            <option selected="">Beans</option>
                            <option>Chicken</option>
                            <option selected="">Eggplant</option>

                            <option>Mushroom</option>
                            <option>Quinoa</option>
                            <option>Red Meat</option>
                            <option>Seafood</option>

                            <option>Nuts</option>
                            <option>Turkey</option>
                            <option>Rice</option>
                            <option>Eggs</option>

                            <option>Sesame</option>
                            <option>Soy</option>
                            <option>Chia</option>
                            <option>Cilantro</option>
                        </select>
                    </div>


                </div>


            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>

            </div>
        </div>
    </div>
</div>
<!-- end exclude modal -->

@endsection