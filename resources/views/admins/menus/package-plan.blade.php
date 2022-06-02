@extends('layouts.admin')



{{-- counter for the carousal --}}
@php
$counter = 1;
@endphp



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Package Plan Schedule</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Menu Management</a></li>

                    <li class="breadcrumb-item active">
                        Package Plan Schedule
                    </li>

                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}





{{-- content --}}
<div class="container page__container">
    <div class="page-section">
        <div class="page-separator">
            <div class="page-separator__text">{{ $package->name }} Plan Schedule</div>
        </div>
        <div class="row card-group-row my-3">
            <div class="col-sm-12">
                <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-plan">Add
                    Plan</a>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card client-card">
                    <div class="card-body text-center">

                        {{-- filter form --}}
                        <form action="{{ route('admin.packagePlanFilter', [$package->id]) }}" method="post">
                            @csrf

                            {{-- row --}}
                            <div class="row">

                                <div class="col-sm-4 ">
                                    <div class="form-group row mb-0">
                                        <label for="example-text-input" class="col-sm-4 col-form-label pr-0">From
                                            Date</label>
                                        <div class="col-sm-8 pl-0">
                                            <input type="date" class="form-control" name="from-date">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4 ">
                                    <div class="form-group row mb-0">
                                        <label for="example-text-input" class="col-sm-4 col-form-label pr-0 ">To
                                            Date</label>
                                        <div class="col-sm-8 pl-0">
                                            <input type="date" class="form-control w-100" name="to-date">
                                        </div>
                                    </div>

                                </div>


                                <div class="col-4 text-left">
                                    <button class="btn btn-outline-success waves-effect waves-light mr-2">Search</button>
                                    <button onclick="printDiv('print-table')" type="button" class="btn btn-outline-warning waves-effect waves-light"><i class="fa fa-print mr-2"></i>Print</button>
                                </div>


                            </div>
                            {{-- end row --}}

                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-lg-32pt" id="print-table" style="box-shadow: none;">

            <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-name"]'>





                <table class="table table-responsive table-bordered table-flush mb-0 thead-border-top-0 custom-table-new">
                    <thead class="d-block">
                        <tr>


                            <th style="display: inline-block; width: 11%; border:none; text-align:center;">
                                Date
                            </th>
                            <th style="display: inline-block; width: 88%; border:none; text-align:center;">Meals</th>

                        </tr>
                    </thead>



                    <tbody class="d-block">

                        {{-- plan grouBy date foreach --}}
                        @foreach ($plans->groupBy('date') as $planDate => $plan)
                            
                        <tr>

                            {{-- left col --}}
                            <td style="display: inline-block; width: 11%; border:0px; text-align: center;">

                                <h5 class="mb-1">{{ date('d-M-Y', strtotime($planDate)) }}</h5>

                            </td>


                                

                            <!-- right col  -->
                            <td style="display: inline-block; width: 88%; border-bottom:0px;">


                                <!-- breakfast meals -->
                                <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">

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


                                        {{-- plan meals --}}
                                        @foreach ($plan[0]->meals as $planMeal)


                                        <!-- card  -->
                                        <label for="" id=""
                                            class="card-group-row__col carousal-cols" style="text-align: center">


                                            <input type="checkbox" class="meal-breakfast" name="" id="">

                                            <div class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                                <div class="card-body d-flex flex-column">
                                                    <div class=" mb-16pt">


                                                        <span
                                                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                            <img width="90" height="90"
                                                                src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                                        </span>
                                                        <h4 class="mb-8pt carousal-card-heading">{{ $planMeal->meal->meal->name }}
                                                        </h4>
                                                        <h6 class="mb-0 text-warning">{{ $planMeal->type->name }}</h6>
                                                        <hr class="mt-2">
                                                        <h5>Ingredients</h5>

                                                        <div style="display: block ruby;">
                                                            
                                                            {{-- components --}}
                                                            @foreach ($planMeal->meal->components as $component)

                                                            <div>
                                                                <p class="text-70 mb-0" style="font-weight: bold; ">
                                                                    {{ $component->component->name }}<br>
                                                                    <span class="badge badge-notifications badge-primary">({{ $component->quantity }})
                                                                        Gram</span>
                                                                </p>
                                                            </div>

                                                            @endforeach
                                                            {{-- end components --}}

                                                        </div>



                                                    </div>

                                                </div>
                                                {{-- end card body --}}


                                            </div>
                                            {{-- card group --}}

                                        </label>
                                        <!-- end card -->


                                        @endforeach
                                        {{-- end planMeals foreach --}}


                                    </div>
                                    <!-- end carousal -->


                                </div>
                                <!-- end carousal col -->


                            

                            </td>
                            <!-- end right col -->


                    
                        </tr>
                        <!-- end table row 1 -->


                        @php
                            $counter++;
                        @endphp
                        

                        @endforeach
                        {{-- end groupBy foreach --}}




                    </tbody>
                </table>
                <!-- end table -->


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

@endsection










@section('modals')


{{-- new plan --}}
<div class="modal fade new-plan" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Package Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.createPackagePlan', [$package->id]) }}" method="POST">
            @csrf

            <div class="modal-body">
                <div class="form-group row align-items-center mb-0">

            
                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Package Type</label>
                        <input type="text" readonly value="{{ $package->name }}" class="form-control" name="package">
                    </div>

                    {{-- <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Cuisine</label>
                        <select id="custom-select01" class="form-control custom-select cuisine-select-1" name="cuisine">
                            
                            <option value=""></option>

                            @foreach ($cuisines as $cuisine)
                                <option value="{{ $cuisine->id }}">{{ $cuisine->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}


                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" name="date" required="">
                    </div>

                </div>


                <div class="list-group-item" id="all_meals_div">
                    <h6 class="text-center mb-0">All Meals For The Day<br>* Please Choose The Default Meals After You Finish</h6>
                    <div class="form-group row align-items-center mb-0">


                        {{-- set group counter --}}
                        @php
                            $mealGroupCounter = 1;
                        @endphp

                        {{-- meal Group (based on meal_type) --}}
                        @foreach ($package->meals->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $packageMeals)
                            

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
                                    <label for="meal-breakfast-{{ $mealCounter }}" id="meal-breakfast-label-{{ $mealCounter }}" class="card-group-row__col carousal-cols meal-breakfast-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
                                        <input type="checkbox" class="meal-breakfast" name="breakfast-meal[]" id="meal-breakfast-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                        

                                        {{-- id of oackage_meal and  meal_type_id --}}
                                        <input type="hidden" name="breakfast-package-meal[]" value="{{ $packageMeal->id }}">
                                        <input type="hidden" name="breakfast-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">


                                        <div class="card card-group-row__card text-center o-hidden card--raised ">
                                    
                                            <div class="card-body d-flex flex-column">
                                                <div class=" mb-16pt">
                                                    <span
                                                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-2 text-warning">Breakfast<br>
                                                        <span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span>
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
                                        class="card-group-row__col carousal-cols meal-launch-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
                                        <input type="checkbox" class="meal-launch" name="lunch-meal[]"
                                            id="meal-launch-{{ $mealCounter }}" value="{{ $packageMeal->id }}">

                                        {{-- id of oackage_meal and  meal_type_id --}}
                                        <input type="hidden" name="lunch-package-meal[]" value="{{ $packageMeal->id }}">
                                        <input type="hidden" name="lunch-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                    
                                    
                                        <div class="card card-group-row__card text-center o-hidden card--raised ">
                                    
                                            <div class="card-body d-flex flex-column">
                                                <div class=" mb-16pt">
                                                    <span
                                                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-0 text-warning">Lunch<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                                    
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
                                        class="card-group-row__col carousal-cols meal-dinner-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
                                        <input type="checkbox" class="meal-dinner" name="dinner-meal[]" id="meal-dinner-{{ $mealCounter }}" value="{{ $packageMeal->id }}">

                                        {{-- id of oackage_meal and  meal_type_id --}}
                                        <input type="hidden" name="dinner-package-meal[]" value="{{ $packageMeal->id }}">
                                        <input type="hidden" name="dinner-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                                    
                                    
                                        <div class="card card-group-row__card text-center o-hidden card--raised ">
                                    
                                            <div class="card-body d-flex flex-column">
                                                <div class=" mb-16pt">
                                                    <span
                                                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-0 text-warning">Dinner<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                                    
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
                                        class="card-group-row__col carousal-cols meal-snack-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
                                        <input type="checkbox" class="meal-snack" name="snack-meal[]"
                                            id="meal-snack-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                    
                                        {{-- id of oackage_meal and  meal_type_id --}}
                                        <input type="hidden" name="snack-package-meal[]" value="{{ $packageMeal->id }}">
                                        <input type="hidden" name="snack-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">



                                        <div class="card card-group-row__card text-center o-hidden card--raised ">
                                    
                                            <div class="card-body d-flex flex-column">
                                                <div class=" mb-16pt">
                                                    <span
                                                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-0 text-warning">Snack<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                                    
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
                                        class="card-group-row__col carousal-cols meal-postworkout-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
                                        <input type="checkbox" class="meal-postworkout" name="postworkout-meal[]" id="meal-postworkout-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                                    
                                        {{-- id of oackage_meal and  meal_type_id --}}
                                        <input type="hidden" name="postworkout-package-meal[]" value="{{ $packageMeal->id }}">
                                        <input type="hidden" name="postworkout-package-meal-type[]" value="{{ $packageMeal->meal_type_id }}">

                                    
                                        <div class="card card-group-row__card text-center o-hidden card--raised ">
                                    
                                            <div class="card-body d-flex flex-column">
                                                <div class=" mb-16pt">
                                                    <span
                                                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-0 text-warning">Post-Workout<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                                    
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
                                        class="card-group-row__col carousal-cols meal-preworkout-labels cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }}">
                                    
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
                                                        <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                    </span>
                                                    <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                    <h6 class="mb-0 text-warning">Pre-Workout<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                                    
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
                        {{-- end mealGroup foreach --}}


                        <!-- launch -->
                        


                    </div>
                    {{-- end row --}}
                   
                    
                </div>
                <!-- end list items -->

             




                {{-- default meals for  --}}
                <div class="list-group-item d-none" id="default_meals_div">
                    <h6 class="text-center mb-0">Default Meals For The Day</h6>
                    

                    <div class="form-group row align-items-center mb-0">
                    
                    
                        {{-- set group counter --}}
                        @php
                        $mealGroupCounter = 1;
                        @endphp
                    
                        {{-- meal Group (based on meal_type) --}}
                        @foreach ($package->meals->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $packageMeals)
                    
                    
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
                                <label for="meal-breakfast-default-{{ $mealCounter }}" id="meal-breakfast-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-breakfast-default-label">
                    
                                    <input type="checkbox" class="meal-breakfast-default" name="breakfast-meal-default[]"
                                        id="meal-breakfast-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="breakfast-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="breakfast-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Breakfast<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                                <label for="meal-launch-default-{{ $mealCounter }}" id="meal-launch-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-launch-default-label">
                    
                                    <input type="checkbox" class="meal-launch-default" name="lunch-meal-default[]" id="meal-launch-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="lunch-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="lunch-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Lunch<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                                <label for="meal-dinner-default-{{ $mealCounter }}" id="meal-dinner-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-dinner-default-label">
                    
                                    <input type="checkbox" class="meal-dinner-default" name="dinner-meal-default[]" id="meal-dinner-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="dinner-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="dinner-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Dinner<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                                <label for="meal-snack-default-{{ $mealCounter }}" id="meal-snack-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-snack-default-label">
                    
                                    <input type="checkbox" class="meal-snack-default" name="snack-meal-default[]" id="meal-snack-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="snack-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="snack-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Snack<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                                <label for="meal-postworkout-default-{{ $mealCounter }}" id="meal-postworkout-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-postworkout-default-label">
                    
                                    <input type="checkbox" class="meal-postworkout-default" name="postworkout-meal-default[]" id="meal-postworkout-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="postworkout-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="postworkout-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Post-Workout<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                                <label for="meal-preworkout-default-{{ $mealCounter }}" id="meal-preworkout-default-label-{{ $mealCounter }}"
                                    class="card-group-row__col carousal-cols cuisine-meal cuisine-meal-{{ $packageMeal->meal->cuisine->id }} meal-preworkout-default-label">
                    
                                    <input type="checkbox" class="meal-preworkout-default" name="preworkout-meal-default[]"
                                        id="meal-preworkout-default-{{ $mealCounter }}" value="{{ $packageMeal->id }}">
                    
                    
                                    {{-- id of oackage_meal and  meal_type_id --}}
                                    <input type="hidden" name="preworkout-package-default-meal[]" value="{{ $packageMeal->id }}">
                                    <input type="hidden" name="preworkout-package-default-meal-type[]" value="{{ $packageMeal->meal_type_id }}">
                    
                    
                    
                                    <div class="card card-group-row__card text-center o-hidden card--raised ">
                    
                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading">{{ $packageMeal->meal->name }}</h4>
                                                <h6 class="mb-0 text-warning">Pre-Workout<br><span class="badge badge-primary">{{ $packageMeal->meal->cuisine->name }}</span></h6>
                    
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
                        {{-- end mealGroup foreach --}}
                    
                    
                        <!-- launch -->
                    
                    
                    
                    </div>
                    {{-- end row --}}
                   
                    
                </div>
                {{-- end of default meals for day --}}



               


            </div>
            <!-- end modal body -->


            <!-- footer -->
            <div class="modal-footer">
                <div class="row" style="width:100%;">
                    <div class="col-6 text-left">
                        <button type="button" class="btn btn-outline-success float-left mx-2" id="default_meals">
                            Choose Default Meals
                        </button>
                        
                        <button type="button" class="btn btn-outline-success float-left mx-2 active" id="all_meals">Plan Meals</button>
                    </div>

                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-accent">Save</button>
                    </div>
                </div>

                
            </div>


            </form>
            {{-- end form --}}


        </div>
    </div>
</div>
{{-- end new plan modal --}}




@endsection