@extends('layouts.kitchen')




@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen Portal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">All Meals</a></li>
                </ol>

            </div>



        </div>


    </div>
</div>
{{-- end breadcrubms --}}







{{-- content --}}
<div class="container page__container">
    <div class="page-section">

        <div class="row card-group-row mb-lg-8pt">

            <div class="col-lg-3 col-md-3 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3"> {{$customers_meals->count()}} </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Today's Meals</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    100%
                                    <!-- <i class="fa fa"></i> -->
                                </p>
                            </div>
                        </div>
                        <i class="fa fa-list text-primary" style="font-size: 26px"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$customers_meals->where('status','cooked')->count()}}</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Cooked</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    {{-- 92% --}}
                                    <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                </p>
                            </div>
                        </div>
                        <i class="fa fa-check-circle text-success" style="font-size: 26px"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$customers_meals->where('status','cooking')->count()}}</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Cooking</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    {{-- 8% --}}
                                </p>
                            </div>
                        </div>
                        <i class="fa fa-spinner text-warning" style="font-size: 26px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">{{$customers_meals->where('status','not started')->count()}}</div>
                            <div class="flex">
                                <p class="mb-0"><strong>Not Started</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    {{-- 2% --}}
                                </p>
                            </div>
                        </div>
                        <i class="fa fa-minus-circle text-danger" style="font-size: 26px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card client-card">
                    <div class="card-body text-center">
                    <form action="{{route('kitchen.meals')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-md-6 col-lg-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">#ID</label>
                                            <div class="col-sm-8 pl-0">
                                                <input type="text" class="form-control" name="id">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Meal Type</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select " name="type">
                                                    <option value="all"></option>
                                                   @foreach ($meal_types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-6 col-lg-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Package</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select " name="package">
                                                    <option value="all"></option>
                                                    @foreach ($packages as $package)
                                                <option value="{{$package->id}}">{{$package->name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-lg-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Status</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select " name="status">
                                                    <option value="all"></option>
                                                    <option value="not started">Not Started</option>
                                                    <option value="cooking">Cooking</option>
                                                    <option value="cooked">Cooked</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-outline-success waves-effect waves-light mx-3"> search
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>
                        {{-- End of row --}}
                    </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- End of raw -->

        <div class="card table-responsive">

            <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>


                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">#</a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Excludes</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Delivery
                                Timing</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-reason">Package</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-reason">Meal</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Current
                                Status</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Action</a>
                        </th>


                    </tr>
                </thead>
                <tbody class="list" id="leaves">

                  
                    
                    @foreach ($customers_meals as $meal)
                        

                    <tr class="selected">

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">

                                <div class="media-body">

                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <p class="mb-0"><strong class="js-lists-values-name">
                                                #{{$meal->id}} </strong></p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </td>

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                <div class="avatar avatar-32pt mr-8pt">

                                    <img src="{{ asset('assets/kitchen/images/people/110/guy-3.jpg') }}" alt="Avatar"
                                        class="avatar-img rounded-circle">

                                </div>
                                <div class="media-body">

                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <p class="mb-0"><strong class="js-lists-values-name">
                                                {{$meal->customer->fname}} {{$meal->customer->lname}}     
                                            </strong></p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </td>

                        <td>
                          @foreach ($meal->customer->excludes as $exclude)
                          {{$exclude->component->name}}
                              
                          @endforeach
                        </td>

                        <td>
                            <small class="js-lists-values-policy text-50">
                                 {{$meal->customer->deliveryTime->timing}} </small>
                        </td>

                        <td>
                            <small class="js-lists-values-policy text-50">
                                {{$meal->customer->package->name}}</small>
                        </td>

                        <td>{{$meal->mealType->name}}</td>

                        <td class="text-center">
                            <label class="form-label"> {{$meal->status}}
                            </label>
                        </td>


                        <td class="text-center">
                            @if ($meal->status == 'not started')

                            <button data-toggle="modal"
                            data-target=".confirm-components-{{$meal->id}}" class="btn btn-sm btn-warning">
                            Start Cooking
                            </button>

                            @elseif($meal->status == 'cooking')

                            <a  href="{{route('kitchen.meals.cooked',[$meal->id])}}"   class="btn btn-sm btn-warning">cooked?</a>

                            @elseif($meal->status == 'cooked')

                            <button disabled href="" class="btn btn-sm btn-success">Finished</button>

                            @else 
                            <button disabled href="" class="btn btn-sm btn-success">{{$meal->status}}</button>
                            @endif
                           
                        </td>

                    </tr>

                    @endforeach


                </tbody>
            </table>

        </div>





        <!-- Extra meals table -->
        <div class="card table-responsive mt-5">

            <h4 class="text-center my-4">Extra Meals</h4>

            <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>


                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">#</a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Delivery
                                Timing</a>
                        </th>


                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-reason">Extra Meals</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Current
                                Status</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Action</a>
                        </th>


                    </tr>
                </thead>
                <tbody class="list" id="leaves">

                    

                    


                </tbody>
            </table>

        </div>




    </div>
</div>

{{-- end content --}}







@endsection






{{-- modals --}}
@section('modals')

@foreach ($customers_meals as $meal)
    
  
<div class="modal fade confirm-components-{{$meal->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meal Components</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 text-center">
                    <h3>
                        @if ($meal->meal)
                        {{$meal->meal->meal->meal->name}} 
                        </h3>
                        <span
                            class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                            <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$meal->meal->meal->meal->img) }}">
                        </span>

                        <h4>Components</h4>
                        
                        <p class="text-70 mb-0" style="font-weight: bold; ">
                            @foreach ($meal->meal->meal->components as $component)

                            {{$component->component->name}} <span class="badge badge-notifications badge-primary">( {{$component->quantity}} ) Gram </span>|
                          
                            @endforeach
                        </p>
                    @else
                    <h3>No Meal In Today's Meal</h3>
                    <span
                        class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                        <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                    </span>

                    <h4>Components</h4>

                    <p class="text-70 mb-0" style="font-weight: bold; ">
                       No Components
                    </p>
                @endif

                    <hr>

                    <h4>Excludes</h4>
                    <p style=" font-weight:bold ">
                    @foreach ($meal->customer->excludes as $exclude)
                       {{$exclude->component->name}} | 
                    @endforeach
                </p>
                    <p>

                    </p>


                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{route('kitchen.meals.cooking',[$meal->id])}}" class="btn btn-success">Confirm</a>
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection