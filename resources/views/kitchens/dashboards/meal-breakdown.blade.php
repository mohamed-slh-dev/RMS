@extends('layouts.kitchen')




@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen Portal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Meal Breakdown</a></li>



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






                            <div class="col-auto border-left border-right" style="width: 100%;">
                                <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start text-center">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">{{ strtoupper($planMeal->meal->package->name) }} MEALS</strong>
                                        <small class="card-subtitle text-50">Manage {{ $planMeal->meal->package->name }} Meals</small>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="card-body tab-content">

                        <!--   Packages Tap -->


                        <!-- Meals Tap -->
                        <div class="tab-pane active text-70" id="meals_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt text-center">


                                <div class="col-12 text-center">
                                    <h4> {{ $planMeal->type->name }} Meal</h4>
                                </div>



                                <div class="card-group-row__col custom-schedule-cards col-sm-12 text-center">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>

                                                <span class="float-right" style=" margin-top: -10px; ">
                                                    <h4 class="mt-0">{{ (!empty($planMeal->customers) ? $planMeal->customers->where('date', date('Y-m-d'))->count() : 0) }}</h4>
                                                </span>


                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$planMeal->meal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt">{{ $planMeal->meal->meal->name }}</h4>

                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <div style="display: block ruby;">

                                                    @foreach ($planMeal->meal->components as $component)
                                                    
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: 500; ">
                                                            {{ $component->component->name }}<br>
                                                            <span class="badge badge-notifications badge-primary">({{ $component->quantity}})
                                                                Gram</span>
                                                        </p>
                                                    </div>
                                                    
                                                    
                                                    @endforeach


                                                

                                                </div>

                                                <hr class="mt-2">
                                                <h5>Today's Quantity</h5>
                                                <div style="display: block ruby;">
                                                    
                                                    @foreach ($planMeal->meal->components as $component)
                                                    
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: 500; ">
                                                            {{ $component->component->name }}<br>
                                                            <span class="badge badge-notifications badge-primary">({{ $component->quantity * (!empty($planMeal->customers) ?
                                                                $planMeal->customers->where('date', date('Y-m-d'))->count() : 0) }})
                                                                Gram</span>
                                                        </p>
                                                    </div>
                                                    
                                                    @endforeach


                                                    

                                                </div>


                                            </div>

                                        </div>

                                    </div>

                                </div>
                                {{-- end card --}}

                                <div class="col-12">
                                    <hr>
                                </div>



                                {{-- regular customres --}}

                                <div class="col-12 text-center">
                                    <h4>Regular Customers ({{ $withoutExcludesCount }})</h4>
                                </div>

                                <div class="col-sm-12 text-center mb-4" style=" display: block; ">
                                    <h5>All meals cooked?</h5>
                                    <p class="mb-1">
                                        <a href="{{route('kitchen.meals.all.cooked',[$id])}}"  class="btn btn-sm btn-success">
                                            All Cooked!
                                        </a>
                                      
                                    </p>
                                    
                                </div>

                                <div class="card table-responsive">

                                    <table
                                        class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                        <thead>

                                            
                                            <tr>


                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">#</a>
                                                </th>
                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">Name</a>
                                                </th>

                                           
                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-from">status</a>
                                                </th>

                                                <th>
                                                    
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody class="list" id="leaves">

                                            @foreach ($customersWithoutExcludes as $customersWithoutExclude)
                                            
                                            {{-- if customer has meals --}}
                                            @if ($customersWithoutExclude->meals->count() > 0)
                                                
                                            <tr>


                                                <td>

                                                    <div class="media flex-nowrap align-items-center"
                                                        style="white-space: nowrap;">

                                                        <div class="media-body">

                                                            <div class="d-flex align-items-center">
                                                                <div class="flex d-flex flex-column">
                                                                    <p class="mb-0">
                                                                        <strong class="js-lists-values-name"># {{ $customersWithoutExclude->id }}</strong></p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

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
                                                                    <p class="mb-0"><strong
                                                                            class="js-lists-values-name">{{ $customersWithoutExclude->fname }} {{ $customersWithoutExclude->lname }}</strong></p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </td>
                                               
                                              
                                                <td class="text-center">
                                                    <label class="form-label">
                                                        {{ $customersWithoutExclude->meals[0]->status }}
                                                    </label>
                                                </td>

                                                <td class="text-center">

                                                   @if ($customersWithoutExclude->meals[0]->status == 'not started')

                                                    <a href="{{route('kitchen.meals.cooking',[$customersWithoutExclude->meals[0]->id])}}" class="btn btn-success">Start Cooking</a>

                        
                                                    @elseif($customersWithoutExclude->meals[0]->status == 'cooking')
                        
                                                    <a  href="{{route('kitchen.meals.cooked',[$customersWithoutExclude->meals[0]->id])}}"   class="btn btn-sm btn-warning">cooked?</a>
                        
                                                    @elseif($customersWithoutExclude->meals[0]->status == 'cooked')
                        
                                                    <button disabled href="" class="btn btn-sm btn-success">Finished</button>
                        
                                                    @else 
                                                    <button disabled href="" class="btn btn-sm btn-success">{{$customersWithoutExclude->meals[0]->status}}</button>
                                                    @endif
                                                </td>


                                            </tr>

                                            @endif
                                            {{-- end if --}}

                                            @endforeach
                                            {{-- end foreach without excludes --}}
                                            

                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4>Customers With Excludes ({{ $withExcludesCount }}) </h4>
                                </div>
                                

                                <div class="card table-responsive">

                                    
                                    <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                        <thead>

                                            
                                            <tr>


                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">#</a>
                                                </th>
                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">Name</a>
                                                </th>

                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-name">Excludes</a>
                                                </th>

                                              
                                               

                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-from">Current Status</a>
                                                </th>

                                                <th>
                                                    <a href="javascript:void(0)" class="sort"
                                                        data-sort="js-lists-values-from">Action</a>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody class="list" id="leaves">


                                            {{-- foreach for with excludes --}}
                                            @foreach ($customersWithExcludes as $customer)

                                            {{-- if customer has meals --}}
                                            @if ($customer->meals->count() > 0)


                                            <tr>


                                                <td>

                                                    <div class="media flex-nowrap align-items-center"
                                                        style="white-space: nowrap;">

                                                        <div class="media-body">

                                                            <div class="d-flex align-items-center">
                                                                <div class="flex d-flex flex-column">
                                                                    <p class="mb-0"><strong
                                                                            class="js-lists-values-name"># {{ $customer->id }}</strong></p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

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
                                                                    <p class="mb-0"><strong
                                                                            class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </td>

                                                {{-- excludes --}}
                                                <td>
                                                    @foreach ($customer->excludes as $exclude)
                                                        | {{ $exclude->component->name }}
                                                    @endforeach
                                                </td>
                                                
                                              

                                                <td class="text-center">
                                                    <label class="form-label">{{ $customer->meals[0]->status }}
                                                    </label>
                                                </td>

                                                <td class="text-center">

                                                  
                                                    @if ($customer->meals[0]->status == 'not started')

                                                    <a href="{{route('kitchen.meals.cooking',[$customer->meals[0]->id])}}" class="btn btn-success">Start Cooking</a>

                        
                                                    @elseif($customer->meals[0]->status == 'cooking')
                        
                                                    <a  href="{{route('kitchen.meals.cooked',[$customer->meals[0]->id])}}"   class="btn btn-sm btn-warning">cooked?</a>
                        
                                                    @elseif($customer->meals[0]->status == 'cooked')
                        
                                                    <button disabled href="" class="btn btn-sm btn-success">Finished</button>
                        
                                                    @else 
                                                    <button disabled href="" class="btn btn-sm btn-success">{{$customer->meals[0]->status}}</button>
                                                    @endif

                                                </td>


                                            </tr>


                                            @endif 
                                            {{-- end if --}}


                                            @endforeach
                                            {{-- end foreach --}}


                                        </tbody>
                                    </table>

                                </div>
                                {{-- end table 1 --}}

                            </div>

                        </div>


                        <!--    Componets Tap -->

                    </div>
                </div>

            </div>
        </div>



    </div>
</div>


{{-- end content --}}








@endsection





@section('scripts')


{{-- scripts --}}
<!-- meal components js (custom added) -->
<script src="{{ asset('assets/kitchen/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/kitchen/js/meal-breakdown.js') }}"></script>


@endsection





{{-- modals --}}
@section('modals')

<div class="modal fade confirm-components" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meal Components</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Components</h4>

                <p class="text-70 mb-0" style="font-weight: bold; ">
                    Pumpkin <span class="badge badge-notifications badge-primary">(700) Gram </span>
                    | Potato <span class="badge badge-notifications badge-primary">(200) Gram </span>
                    | Gralic <span class="badge badge-notifications badge-primary">(50) Gram </span>
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>


@endsection