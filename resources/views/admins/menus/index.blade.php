@extends('layouts.admin')



{{-- collection pass section --}}

<script>
var componentsArray = @json($components);
var packagesArray = @json($packages);
</script>

{{-- end collection pass section --}}



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Menu Management</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Menu Managment</a></li>

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

                            <div class="col-auto" style="width: 20%;">
                                <a href="#packages_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">{{ $packages->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Packges</strong>
                                        <small class="card-subtitle text-50">Manage Packages</small>
                                    </span>
                                </a>
                            </div>



                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#meals_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">{{ $all_meals->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Meals</strong>
                                        <small class="card-subtitle text-50">Manage Meals</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#sauces_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">{{ $sauces->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Sauces</strong>
                                        <small class="card-subtitle text-50">Manage Sauces</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto" style="width: 20%;">
                                <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">{{ $components->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Components</strong>
                                        <small class="card-subtitle text-50">Review All Components</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#settings_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">-</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Settings</strong>
                                        <small class="card-subtitle text-50">Manage Option</small>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>



                    {{-- tabs --}}
                    <div class="card-body tab-content">

                        <!--   Packages Tap -->
                        <div class="tab-pane active text-70" id="packages_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-package">New Package</a>
                                </div>


                                @foreach ($packages as $package)
                                    
                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow mb-16pt">
                                                <span
                                                    class=" d-inline-flex mb-16pt mt-3">
                                                    <img width="180" height="120" src="{{ asset('assets/admin/images/packages/'.$package->img) }}" style="object-fit: contain;">
                                                </span>


                                                {{-- package name --}}
                                                <h4 class="mb-8pt">{{ $package->name }}</h4>


                                                {{-- macros --}}
                                                <div class="row">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7); border-bottom: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Kcals</label>
                                                        <h5>({{ $package->cals }})</h5>
                                                    </div>
                                                    <div class="col-6"
                                                        style=" border-bottom: 1px solid rgba(39,44,51,.7); ">
                                                        <label class="form-label">Protein</label>
                                                        <h5>({{ $package->proteins }})</h5>
                                                    </div>

                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label mt-2">Carbo.</label>
                                                        <h5>({{ $package->carbs }})</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label mt-2">Fats</label>
                                                        <h5>({{ $package->fats }})</h5>
                                                    </div>

                                                </div>
                                            
                                                <hr class="my-2">

                                                {{-- description --}}
                                                <p class="text-70 mb-0">{{ $package->desc }}</p>

                                            </div>


                                            {{-- price (calculated but here printed easily) --}}
                                            <p class="d-flex justify-content-center align-items-center m-0">
                                                <span class="h4 m-0 font-weight-normal">AED</span>
                                                <span class="h1 m-0 font-weight-normal">
                                                    {{ $package->price + (($package->price * $margin->margin) / 100) + (($package->price * $margin->operation) / 100) + $mealPackingPrice[$package->id] }} 
                                                </span>
                                                <span class="h4 m-0 font-weight-normal">/ month</span>
                                            </p>

                                        </div>
                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <a href="{{ route('admin.packageMeal', [$package->id]) }}">
                                                    <button class="btn btn-sm btn-outline-info">Meals</button>
                                                </a>
                                            </div>
                                            <div class="col-sm-6 text-center mb-3">
                                                <a  href="{{ route('admin.packagePlan', [$package->id]) }}">
                                                    <button class="btn btn-sm btn-outline-success ">Package plan</button>
                                                </a>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center">
                                                <button style="box-shadow:none !important;" type="button" id="package-assign-id" data-target=".delete-package" data-toggle="modal" value="{{ $package->id }}"  class="px-2 package-assign-id btn btn-none">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>

                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".edit-package-{{ $package->id }}" class="px-2">
                                                    <i class="fas fa-edit text-secondary"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                @endforeach
                                {{-- end foreach --}}

                                

                                
                            </div>
                        </div>
                        {{-- end tab packages --}}

                        <!--   Meals Tap -->
                        <div class="tab-pane text-70" id="meals_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-meal">New Meal</a>
                                </div>



                                {{-- packages --}}
                                @foreach ($packages as $package)
                                    
                                {{-- show package if has meals --}}
                                @if ($package->meals->count() > 0)
                                    

                                <div class="col-12 text-center">
                                    <h4>{{ $package->name }} Package</h4>
                                </div>



                                @foreach ($package->meals->unique('meal_id') as $packageMeal)

                                {{-- package meals --}}
                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt">{{ $packageMeal->meal->name }}</h4>
                                                {{-- <h6 class="mb-0"></h6> --}}
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">
                                                    @foreach ($packageMeal->components as $mealComponent)
                                                        | {{ $mealComponent->component->name }}
                                                    @endforeach
                                                </p>
                                            </div>

                                        </div>


                                        <div class="card-footer">

                                            <button style="box-shadow:none !important;" type="button" id="meal-assign-id" data-target=".delete-meal" data-toggle="modal" value="{{ $packageMeal->meal->id }}"  class="px-2 meal-assign-id btn btn-none">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>

                                        </div>
                                    </div>

                                </div>



                                @endforeach
                                {{-- end package meals --}}

                                <div class="col-12">
                                    <hr>
                                </div>


                                @endif
                                {{-- end of show package if only have meals --}}

                                
                                @endforeach
                                {{-- end foreach package --}}

                            
                            </div>
                        </div>
                        {{-- end menu tab + row --}}


                        {{-- sauce tab --}}
                        <div class="tab-pane text-70" id="sauces_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-sauce">New Sauce</a>
                                </div>




                                {{-- sauce price --}}
                                @php
                                    $sauceprice = 0;
                                @endphp


                                {{-- single sauce (repeat) --}}
                                @foreach ($sauces as $sauce)
                                    
                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/sauces/'.$sauce->img) }}" style="object-fit: contain !important;">
                                                </span>
                                                <h4 class="mb-8pt">{{ $sauce->name }}</h4>

                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>


                                                {{-- sauce components --}}
                                                <div style="display: block ruby;">

                                                    {{-- is it purchased sauce --}}
                                                    @if ($sauce->components->count() == 0)
                                                        <div>
                                                        <p class="text-70 mb-0" style="font-weight: 500; ">
                                                            No Preview
                                                        </p>
                                                        </div>
                                                    @endif


                                                    {{-- regular sauce --}}
                                                    {{-- sauce components (foreach) --}}
                                                    @foreach ($sauce->components as $component)


                                                    @php
                                                        // get summation or components
                                                        $sauceprice += $component->component->price * $component->quantity;
                                                    @endphp


                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: 500; ">{{ $component->component->name }}<br>
                                                            <span class="badge badge-notifications badge-primary">({{ $component->quantity }})
                                                                Gram</span>
                                                        </p>
                                                    </div>
                                                    
                                                    @endforeach
                                                    {{-- end foreach inner --}}

                                                </div>
                                                {{-- end sauce component --}}

                                                

                                            </div>

                                        </div>

                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <h6>Price: {{ $sauce->price + (($sauce->price * $margin->margin) / 100) + (($sauce->price * $margin->operation) / 100) }} AED</h6>
                                            </div>
                                            <div class="col-sm-6"> 
                                               
                                            <button style="box-shadow:none !important;" type="button" id="sauce-assign-id" data-target=".delete-sauce" data-toggle="modal" value="{{ $sauce->id }}"  class="px-2 sauce-assign-id btn btn-none">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- end single sauce --}}


                                @endforeach
                                {{-- end foreach --}}


                            </div>
                        </div>



                        {{-- component tab --}}
                        <div class="tab-pane text-70" id="componets_tap">
                            <div class="row card-group-row">

                                {{-- category foreach --}}
                                @php
                                    $counter = 1;
                                @endphp

                                @foreach ($component_categories as $category)
                                    
                                @if ($counter == 1)
                                    <div class="col-sm-12 text-center mt-3">
                                        <h4>{{ $category->name }}</h4>
                                    </div>
                                @else
                                    <div class="col-sm-12 text-center mt-3">
                                        <hr>
                                        <h4>{{ $category->name }}</h4>
                                    </div>
                                @endif
                                


                                {{-- component foreach --}}
                                @foreach ($category->components as $component)
                                    
                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card text-center">
                                        <div class="card-body">
                                            <span
                                                class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mt-3" style="width:90px; height:90px;">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/components/'.$component->img) }}" style="object-fit: contain; border-radius:50%;">
                                            </span>
                                            <div class="text-center mt-2">
                                                <label class="form-label">{{ $component->name }}</label>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                @endforeach
                                {{-- end component foreach --}}

                                @php
                                    $counter++;
                                @endphp

                                @endforeach
                                {{-- end category foreach --}}

        
                            </div>
                            {{-- end row --}}

                        </div>
                        {{-- end component tab --}}




                        <!-- manage plans Tap -->
                        <div class="tab-pane text-70" id="settings_tap">
                            <div class="row card-group-row">
                                <div class="col-sm-6">
                                    <h4 class="ml-3">Manage Plans</h4>

                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-plan">New Plan</a>
                                    </div>


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
                                                                    data-sort="js-lists-values-name">ID</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Plan Name</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Meals</a>
                                                            </th>

                                                            <th> Delete</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">


                                                        {{-- plans foreach --}}
                                                        @foreach ($restaurant_plans as $plan)

                                                        <!-- table row -->
                                                        <tr>
                                                    
                                                        
                                                            <!-- id -->
                                                            <td>
                                                                <p class="mb-0">{{$plan->id}}</p>
                                                            </td>

                                                            <!-- name -->
                                                            <td>
                                                                <p class="mb-0">{{$plan->name}}</p>
                                                            </td>


                                                            <!-- meal types -->
                                                            <td>
                                                                <p class="mb-0">
                                                                    @foreach ($plan->planMeals as $type)
                                                                      {{$type->mealType->name}}
                                                                    @endforeach
                                                              
                                                                </p>
                                                            </td>

                                                            <td>
                                                                <a href="{{route('admin.deleteRestPlan',[$plan->id])}}">
                                                                    <i class="fas fa-trash text-danger"></i>
                                                                </a>
                                                                  
                                                                </td>
                                                            
                                                        </tr>

                                                        @endforeach


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
                                <div class="col-sm-6">

                                    <h4 class="ml-2">Manage Categories</h4>
                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-categ">New Category</a>
                                    </div>


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
                                                                    data-sort="js-lists-values-name">ID</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Category</a>
                                                            </th>


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Purchase Limit (AED)</a>
                                                            </th>
                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Edit</a>
                                                            </th>
                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Delete</a>
                                                            </th>

                                                      


                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">



                                                        {{-- component categories --}}
                                                        @foreach ($component_categories as $category)
                                                        
                                                        
                                                        <!-- table row -->
                                                        <tr>
                                                        
                                                        
                                                        
                                                            <!-- id -->
                                                            <td>
                                                                <p class="mb-0">{{$category->id}}</p>
                                                            </td>
                                                        
                                                        
                                                        
                                                            <!-- name -->
                                                            <td>
                                                                <p class="mb-0">{{$category->name}}</p>
                                                            </td>
                                                        
                                                            {{-- purchase limit --}}
                                                            <td>
                                                                <p class="mb-0">{{$category->purchase_limit}}</p>
                                                            </td>

                                                            <td>
                                                                <a data-toggle="modal"
                                                            data-target=".edit-categ-{{$category->id}}">
                                                            <i class="fas fa-edit text-secondary"></i>
                                                                </a>
                                                               
                                                            </td>

                                                            <td>
                                                                <button style="box-shadow:none !important;" type="button" id="category-assign-id" data-target=".delete-category" data-toggle="modal" value="{{ $category->id }}"  class="px-2 category-assign-id btn btn-none">
                                                                    <i class="fas fa-trash text-danger"></i>
                                                                </button>
                                                                  
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


                                <div class="col-sm-6">

                                    <h4 class="ml-2">Manage Cuisines</h4>
                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-cuisine">New Cuisine</a>
                                    </div>


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
                                                                    data-sort="js-lists-values-name">ID</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Name</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Edit</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Delete</a>
                                                            </th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">



                                                        {{-- component categories --}}
                                                        @foreach ($cuisines as $cuisine)
                                                        
                                                        
                                                        <!-- table row -->
                                                        <tr>
                                                        
                                                        
                                                        
                                                            <!-- id -->
                                                            <td>
                                                                <p class="mb-0">{{$cuisine->id}}</p>
                                                            </td>
                                                        
                                                        
                                                        
                                                            <!-- name -->
                                                            <td>
                                                                <p class="mb-0">{{$cuisine->name}}</p>
                                                            </td>
                                                        
                                                           
                                                        
                                                            <td>
                                                                <a  data-toggle="modal"
                                                            data-target=".edit-cuisine-{{$cuisine->id}}">
                                                            <i class="fas fa-edit text-secondary"></i>
                                                                </a>
                                                               
                                                            </td>

                                                            <td>
                                                                <button style="box-shadow:none !important;" type="button" id="cuisine-assign-id" data-target=".delete-cuisine" data-toggle="modal" value="{{ $cuisine->id }}"  class="px-2 cuisine-assign-id btn btn-none">
                                                                    <i class="fas fa-trash text-danger"></i>
                                                                </button>
                                                                  
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

                                <div class="col-sm-6">

                                    <h4 class="ml-2">Manage Promo codes</h4>
                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-promo">New Promo Code</a>
                                    </div>


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
                                                                    data-sort="js-lists-values-name">Name</a>
                                                            </th>


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Precentage</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Using Times</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Used</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Delete</a>
                                                            </th>

                                                           
                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">



                                                        {{-- component categories --}}
                                                        @foreach ($promo_codes as $code)
                                                        
                                                        
                                                        <!-- table row -->
                                                        <tr>
                                                        
                                                        
                                                      
                                                        
                                                            <!-- name -->
                                                            <td>
                                                                <p class="mb-0">{{$code->name}}</p>
                                                            </td>
                                                        
                                                            <td>
                                                                <p class="mb-0">{{$code->precentage}}</p>
                                                            </td>
                                                        
                                                            <td>
                                                                <p class="mb-0">{{$code->using_times}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$code->used}}</p>
                                                            </td>

                                                            <td>
                                                            <a href="{{route('admin.deletePromo',[$code->id])}}">
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



                            </div>
                            <!-- End of main row -->

                        </div>
                        <!-- end of settings tap -->


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

<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/menu-components.js') }}"></script>  

@endsection






@section('modals')
    
{{-- new package modal --}}
<div class="modal fade new-package" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- add package form --}}
            <form action="{{ route('admin.addPackage') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4">Daily Intake Target</label>
                            <div class="form-group col-sm-8 pb-0">
                                <div class="form-row pt-3">
                                    <div class="col">
                                        <input type="number" name="cals" class="form-control" placeholder="calorie" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="proteins" class="form-control" placeholder="Protein" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="carbs" class="form-control" placeholder="Carbs" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="fats" class="form-control" placeholder="Fat" required="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">Package Name</label>
                            <div class="form-group col-sm-3 pb-0">
                                <div class="form-row">
                                    <div class="col pt-3">
                                        <input type="text" name="name" class="form-control" required="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">Package Picture</label>
                            <div class="form-group col-sm-4 pb-0">
                                <div class="form-row pt-3">
                                    <div class="col">
                                        <input type="file" name="img" id="file" class="custom-file-input" required="">
                                        <label for="file" class="custom-file-label">Choose file</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Description</label>
                            <div class="col-sm-9 pt-3">
                                <textarea class="form-control" name="desc" id="" cols="30" rows="3" required=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            
                {{-- modal footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  role="button" type="submit" class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
{{-- end new package modal --}}












{{-- update package modal --}}


@foreach ($packages as $package)
    
<div class="modal fade edit-package-{{ $package->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit {{ $package->name }} Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- add package form --}}
            <form action="{{ route('admin.updatePackage') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4">Daily Intake Target</label>
                            <div class="form-group col-sm-8 pb-0">
                                <div class="form-row pt-3">


                                    {{-- package id --}}
                                    <input type="hidden" name="packageid" id="" value="{{ $package->id }}">

                                    <div class="col">
                                        <input type="number" name="cals" class="form-control" placeholder="calorie"
                                            required="" value="{{ $package->cals }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="proteins" class="form-control" placeholder="Protein"
                                            required="" value="{{ $package->proteins }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="carbs" class="form-control" placeholder="Carbs"
                                            required="" value="{{ $package->carbs }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="fats" class="form-control" placeholder="Fat"
                                            required="" value="{{ $package->fats }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">Package Name</label>
                            <div class="form-group col-sm-3 pb-0">
                                <div class="form-row">
                                    <div class="col pt-3">
                                        <input type="text" name="name" class="form-control" required="" value="{{ $package->name }}">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">New Package Picture</label>
                            <div class="form-group col-sm-4 pb-0">
                                <div class="form-row pt-3">
                                    <div class="col">
                                        <input type="file" name="img" id="file" class="custom-file-input">
                                        <label for="file" class="custom-file-label">Choose file</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Description</label>
                            <div class="col-sm-9 pt-3">
                                <textarea class="form-control" name="desc" id="" cols="30" rows="3"
                                    required="" >{{ $package->desc }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- modal footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button role="button" type="submit" class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
{{-- end update package modal --}}



@endforeach










{{-- new category modal --}}
<div class="modal fade new-categ" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.addCategory') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Category Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Category Name" required="">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Purchase limit (AED) : </label>
                                <input type="text" name="purchase_limit" class="form-control" placeholder="Per Month" required="">
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end new category modal --}}



@foreach ($component_categories as $category)
    
{{-- edit category modal --}}
<div class="modal fade edit-categ-{{$category->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.editCategory') }}" method="post">
                @csrf

            <input type="hidden" name="id" value="{{$category->id}}">
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Category Name:</label>
                                <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Category Name" required="">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Purchase limit (AED) : </label>
                            <input type="text" value="{{$category->purchase_limit}}" name="purchase_limit" class="form-control" placeholder="Per Month" required="">
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end edit category modal --}}

@endforeach



{{-- new cuisnie modal --}}
<div class="modal fade new-cuisine" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Cuisine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.addCuisine') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Cuisnie Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Cuisine Name" required="">
                            </div>
                          

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end new cuisine modal --}}


@foreach ($cuisines as $cuisine)
    

{{-- edit cuisnie modal --}}
<div class="modal fade edit-cuisine-{{$cuisine->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Cuisine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.editCuisine') }}" method="post">
                @csrf

            <input type="hidden" name="id" value="{{$cuisine->id}}" id="">
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Cuisnie Name:</label>
                            <input type="text" value="{{$cuisine->name}}" name="name" class="form-control" placeholder="Cuisine Name" required="">
                            </div>
                          

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end edit cuisine modal --}}

@endforeach




{{-- new promo code modal --}}
<div class="modal fade new-promo" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Promo Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.addPromo') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Code:</label>
                                <input type="text" name="name" class="form-control" placeholder="Promo Code" required="">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Precenteage (%):</label>
                                <input type="number" step="0.01" name="precentage" class="form-control" placeholder="Promo Code" required="">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Using Times:</label>
                                <input type="number" name="using" class="form-control" placeholder="Promo Code" required="">
                            </div>
                          

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end new promo code modal --}}









{{-- new meal moda --}}
<div class="modal fade new-meal" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Meal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.addMeal') }}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="modal-body">


                    <div class="list-group-item" id="general-meal-info">

                        


                        <div class="form-group row align-items-center mb-0">

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="custom-select2">Meal Cuisine</label>
                                <select id="custom-select2" class="form-control custom-select" name="cuisine" required="">
                                    
                                    @foreach ($cuisines as $cuisine)
                                        <option value="{{ $cuisine->id }}">{{ $cuisine->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Meal Name</label>
                                <input type="text" class="form-control" placeholder="Meal Name" name="name" required="">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="custom-select1">Meal Type</label>

                                <select id="select02" data-toggle="select" multiple class="form-control" name="type[]" required="">
                                                                        
                                    @foreach ($meal_types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach

                                </select>

                            </div>



                            <div class="form-group col-sm-4">
                                <label class="form-label" for="custom-select2">Meal Category</label>
                                <select id="custom-select2" class="form-control custom-select" name="category" required="">
                                    
                                    @foreach ($meal_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="custom-select2">Department</label>
                                <select id="custom-select2" class="form-control custom-select" name="department" required="">
                                    <option selected value="Hot Kitchen">Hot Kitchen</option>
                                    <option value="Cold Kitchen">Cold Kitchen</option>

                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" id="date" class="form-control" required="">

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="custom-select2">Sauce</label>
                                <select id="custom-select2" class="form-control custom-select" name="sauce">

                                    <option selected value="">No Sauce</option>
                                    
                                    @foreach ($sauces as $sauce)
                                        <option value="{{ $sauce->id }}">{{ $sauce->name }}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="input-file-events" class="form-label">Meal Picture</label>
                                <input type="file" id="input-file-events" class="dropify-event" name="img"
                                    data-default-file="" required=""/>

                            </div>



                            <div class="col-sm-12">
                                <div class="form-row align-items-start">
                                    <div class="form-group col-md-6 mb-16pt mb-sm-0">

                                        <div class="custom-control custom-checkbox">

                                            <input id="package-meal-checkbox" type="checkbox"
                                                class="custom-control-input custom1" name="assign-to-package-checkbox" required="">

                                            <label for="package-meal-checkbox"
                                                class="custom-control-label custom-control-label-checkbox">Assign To Package</label>

                                        </div>

                                    </div>


                                    <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                        <button type="button" id="add-package-meal-button"
                                            class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                            title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                            Package</button>
                                    </div>


                                    <!-- here rest the input of component and delete button -->

                                    <div class="col-sm-12">
                                        <div id="package-meal-row" class="form-row align-items-center d-none">
                                            
                                            {{-- only when deleting component to fire action --}}
                                            <select name="" id="fire-change-action" disabled="disabled" class="menu-package-component-groups d-none">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                            

                                            
                                            
                                            

                                        </div>
                                    </div>
                                    <!-- component col 12 -->

                                </div>





                            </div>
                            {{-- end col 12 --}}


                        </div>
                        {{-- end row --}}


                        
                    </div>

                    
                </div> <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>
{{-- end new meal modal --}}










{{-- new plan modal --}}
<div class="modal fade new-plan" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.addRestaurantPlan') }}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">

                            {{-- name --}}
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Plan Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="" required="">
                            </div>


                            {{-- meals --}}
                            <div class="col-md-12 row">
                                <label class="col-form-label form-label col-sm-3">Choose The Meals</label>

                                <div class="col-12 row m-3">

                                    {{-- counter --}}
                                    <?php $counter = 1 ?>

                                    {{-- meal types --}}
                                    @foreach ($meal_types as $meal_type)

                                    <div class="form-group col-4">
                                        <div class="custom-control custom-checkbox">
                                            <input id="meal-type-checkbox-{{ $counter }}" type="checkbox" value="{{ $meal_type->id }}" name="meal_types[]" class="custom-control-input">

                                            <label for="meal-type-checkbox-{{ $counter }}" class="custom-control-label">{{ $meal_type->name }}</label>
                                        </div>
                                    </div>

                                    {{-- counter+ --}}
                                    <?php $counter++ ?>

                                    @endforeach
                                    {{-- end foreach --}}


                                    
                                </div>
                                {{-- end col --}}
                            </div>
                            {{-- end row --}}


                        </div>
                    </div>
                </div>
                {{-- end modal body --}}

                {{-- modal ooter --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button role="button" type="submit" class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
{{-- end new plan modal --}}












{{-- new sauce modal --}}
<div class="modal fade new-sauce" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Sauce</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- row --}}
            <div class="row">   

                <div class="col-12 text-center mt-4">

                    <button type="button" class="btn btn-accent sauce-switch-button active px-3" id="regular-sauce">
                        Regular Sauce
                    </button>

                    <button type="button" class="btn btn-outline-accent sauce-switch-button px-3" id="purchased-sauce">
                        Purchased Sauce
                    </button>

                </div>


                <div class="col-12" id="regular-sauce-tab">

                    {{-- form --}}
                    <form action="{{ route('admin.addSauce') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="modal-body">
                    
                    
                            <div class="list-group-item" id="general-meal-info">
                                <div class="form-group row align-items-center mb-0">
                                    <div class="form-group col-sm-4">
                                        <label class="form-label">Sauce Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="" required="">
                                    </div>
                    
                    
                    
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Sauce Picture</label>
                                        <input type="file" required="" class="dropify" data-default-file="" name="img" />
                    
                                    </div>
                    
                    
                    
                                    <div class="col-sm-12">
                                        <div class="form-row align-items-start">
                                            <div class="form-group col-md-6 mb-16pt mb-sm-0">
                    
                                                <div class="custom-control custom-checkbox">
                    
                                                    <input id="component-checkbox-2" type="checkbox" class="custom-control-input custom1"
                                                        required="">
                    
                                                    <label for="component-checkbox-2"
                                                        class="custom-control-label custom-control-label-checkbox">Components</label>
                    
                                                </div>
                    
                                            </div>
                    
                    
                                            <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                                <a id="add-component-button-2"
                                                    class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                                    title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                                    Component</a>
                                            </div>
                    
                    
                                            <!-- here rest the input of component and delete button -->
                    
                                            <div class="col-sm-12">
                                                <div id="meal-component-row-2" class="form-row align-items-center d-none">
                    
                    
                                                </div>
                                            </div>
                                            <!-- component col 12 -->
                    
                                        </div>
                    
                    
                    
                    
                    
                                    </div>
                    
                                </div>
                            </div>
                    
                    
                        </div> <!-- end model body -->
                    
                    
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-accent">Save</button>
                        </div>
                    
                    </form>
                    {{-- end form --}}


                </div>
                {{-- end regular sauce tab --}}



                <div class="col-12 d-none" id="purchased-sauce-tab">
                
                    {{-- form --}}
                    <form action="{{ route('admin.addPurchasedSauce') }}" method="post" enctype="multipart/form-data">
                        @csrf
                
                        <div class="modal-body">
                
                
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <div class="form-group col-sm-4">
                                        <label class="form-label">Sauce Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="" required="">
                                    </div>
                

                                    <div class="form-group col-sm-4">
                                        <label class="form-label">Price Per Meal</label>
                                        <input type="number" step="0.01" class="form-control" name="price" placeholder="" required="">
                                    </div>
                
                
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Sauce Picture</label>
                                        <input type="file" required="" class="dropify" data-default-file="" name="img" />
                
                                    </div>
                
                
                
                                    
                
                                </div>
                            </div>
                
                
                        </div> <!-- end model body -->
                
                
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-accent">Save</button>
                        </div>
                
                    </form>
                    {{-- end form --}}
                
                
                </div>
                {{-- end purchased sauce tab --}}


            </div>
            {{-- end row --}}
            

        </div>
        <!-- end model content -->

    </div>
</div>
{{-- end new sauce modal --}}




{{-- delete partner modal --}}
<div class="modal fade delete-package" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0 font-weight-bold" id="myLargeModalLabel">Delete Package ? </h4>
                <br>

              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h6 class="text-danger">All meal, plans, customers and any other related to this package will be deleted!</h6>
                {{-- form (search partner) --}}
                <form action="{{ route('admin.deletePackage') }}" method="post">

                    {{-- method fields --}}
                    @method('POST')
                    @csrf

                    {{-- id of customer --}}
                    <input type="hidden" name="package_id" id="modal-assign-package" value="">


                    {{-- row --}}
                    <div class="row">

                        {{-- col --}}
                        <div class="col-12">
                            <div class="form-group row">


                                {{-- extra days input --}}
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-outline-danger mx-2 font-15">CONFIRM</button>
                                </div>

                                <div class="col-6 text-left">
                                    <button data-dismiss="modal"
                                        class="btn btn-outline-primary mx-2 font-15">CANCEL</button>
                                </div>


                            </div>
                        </div>
                        {{-- end col --}}


                    </div>
                    {{-- end row --}}
                </form>
                {{-- end form --}}

            </div>
            {{-- end modal body --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->




{{-- delete meal modal --}}
<div class="modal fade delete-meal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0 font-weight-bold" id="myLargeModalLabel">Delete Meal ? </h4>
                <br>

              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h6 class="text-danger">All meal plans and any other related to this meal will be deleted!</h6>
                {{-- form (search partner) --}}
                <form action="{{ route('admin.deleteMeal') }}" method="post">

                    {{-- method fields --}}
                    @method('POST')
                    @csrf

                    {{-- id of customer --}}
                    <input type="hidden" name="meal_id" id="modal-assign-meal" value="">


                    {{-- row --}}
                    <div class="row">

                        {{-- col --}}
                        <div class="col-12">
                            <div class="form-group row">


                                {{-- extra days input --}}
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-outline-danger mx-2 font-15">CONFIRM</button>
                                </div>

                                <div class="col-6 text-left">
                                    <button data-dismiss="modal"
                                        class="btn btn-outline-primary mx-2 font-15">CANCEL</button>
                                </div>


                            </div>
                        </div>
                        {{-- end col --}}


                    </div>
                    {{-- end row --}}
                </form>
                {{-- end form --}}

            </div>
            {{-- end modal body --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->




{{-- delete sauce modal --}}
<div class="modal fade delete-sauce" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0 font-weight-bold" id="myLargeModalLabel">Delete Sauce ? </h4>
                <br>

              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h6 class="text-danger">You sure you want to delete this sauce?</h6>
                {{-- form (search partner) --}}
                <form action="{{ route('admin.deleteSauce') }}" method="post">

                    {{-- method fields --}}
                    @method('POST')
                    @csrf

                    {{-- id of customer --}}
                    <input type="hidden" name="sauce_id" id="modal-assign-sauce" value="">


                    {{-- row --}}
                    <div class="row">

                        {{-- col --}}
                        <div class="col-12">
                            <div class="form-group row">


                                {{-- extra days input --}}
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-outline-danger mx-2 font-15">CONFIRM</button>
                                </div>

                                <div class="col-6 text-left">
                                    <button data-dismiss="modal"
                                        class="btn btn-outline-primary mx-2 font-15">CANCEL</button>
                                </div>


                            </div>
                        </div>
                        {{-- end col --}}


                    </div>
                    {{-- end row --}}
                </form>
                {{-- end form --}}

            </div>
            {{-- end modal body --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->




{{-- delete category modal --}}
<div class="modal fade delete-category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0 font-weight-bold" id="myLargeModalLabel">Delete Category ? </h4>
                <br>

              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h6 class="text-danger">Any components in this catgeory will be deleted!</h6>
                {{-- form (search partner) --}}
                <form action="{{ route('admin.deleteCategory') }}" method="post">

                    {{-- method fields --}}
                    @method('POST')
                    @csrf

                    {{-- id of customer --}}
                    <input type="hidden" name="category_id" id="modal-assign-category" value="">


                    {{-- row --}}
                    <div class="row">

                        {{-- col --}}
                        <div class="col-12">
                            <div class="form-group row">


                                {{-- extra days input --}}
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-outline-danger mx-2 font-15">CONFIRM</button>
                                </div>

                                <div class="col-6 text-left">
                                    <button data-dismiss="modal"
                                        class="btn btn-outline-primary mx-2 font-15">CANCEL</button>
                                </div>


                            </div>
                        </div>
                        {{-- end col --}}


                    </div>
                    {{-- end row --}}
                </form>
                {{-- end form --}}

            </div>
            {{-- end modal body --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->



{{-- delete cuisine modal --}}
<div class="modal fade delete-cuisine" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0 font-weight-bold" id="myLargeModalLabel">Delete Cuisine ? </h4>
                <br>

              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h6 class="text-danger">Any meals in this cuisine will be deleted!</h6>
                {{-- form (search partner) --}}
                <form action="{{ route('admin.deleteCuisine') }}" method="post">

                    {{-- method fields --}}
                    @method('POST')
                    @csrf

                    {{-- id of customer --}}
                    <input type="hidden" name="cuisine_id" id="modal-assign-cuisine" value="">


                    {{-- row --}}
                    <div class="row">

                        {{-- col --}}
                        <div class="col-12">
                            <div class="form-group row">


                                {{-- extra days input --}}
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-outline-danger mx-2 font-15">CONFIRM</button>
                                </div>

                                <div class="col-6 text-left">
                                    <button data-dismiss="modal"
                                        class="btn btn-outline-primary mx-2 font-15">CANCEL</button>
                                </div>


                            </div>
                        </div>
                        {{-- end col --}}


                    </div>
                    {{-- end row --}}
                </form>
                {{-- end form --}}

            </div>
            {{-- end modal body --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->



{{-- end modals --}}

@endsection



{{-- lorem demo --}}

