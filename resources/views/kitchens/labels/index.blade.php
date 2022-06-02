@extends('layouts.kitchen')




@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen Portal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Deliveris Status</a></li>
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

            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3"> {{$customers_meals->count()}} </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Today's Meals</strong></p>
                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                    {{-- 100% --}}
                                    <!-- <i class="fa fa"></i> -->
                                </p>
                            </div>
                        </div>
                        <i class="fa fa-list text-primary" style="font-size: 26px"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">
                                {{$customers_meals->where('status','labeled')->count()}}
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Labeled</strong></p>
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

            <div class="col-lg-4 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <div class="flex d-flex align-items-center">
                                {{$customers_meals->where('status','cooked')->count()}}
                                <div class="h2 mb-0 mr-3"></div>
                            <div class="flex">
                                <p class="mb-0"><strong>Not Labeled</strong></p>
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
                        <form action="{{route('kitchen.labels')}}" method="POST">
                            @csrf
                      
                        <div class="row">
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-sm-2 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">#ID</label>
                                            <div class="col-sm-8 pl-0">
                                                <input type="text" class="form-control" name="id">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Customer</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select" name="customer">
                                                  @foreach ($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label pr-0">Meal Type</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select" name="type">
                                                    @foreach ($meal_types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                       @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    
                                    </div>


                                    <div class="col-sm-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Status</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select" name="status">
                                                    <option value="cooked">Not Labeled</option>
                                                    <option value="labeled">Labeled</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-outline-success waves-effect waves-light mx-3"> search
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>

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


                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">View Info.</a>
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
                            <small class="js-lists-values-policy text-50"> {{$meal->customer->deliveryTime->timing}} </small>
                        </td>

                        <td>
                            <small class="js-lists-values-policy text-50">
                                {{$meal->customer->package->name}}</small>
                        </td>

                        <td>{{$meal->mealType->name}}</td>

                        <td class="text-center">
                            @if ($meal->status == 'cooked')
                            <label class="form-label">Not Labeled
                            </label>
                            @else
                            <label class="form-label">Labeled
                            </label>
                            @endif
                           
                        </td>


                        <td class="text-center">
                            @if ($meal->status == 'labeled')

                            <button disabled href="#" class="btn btn-sm btn-success">Labeled</button>

                            @else

                            <a  href="{{route('kitchen.meals.labeled',[$meal->id])}}" class="btn btn-sm btn-success">Labele it</a>


                            @endif
                           
                        </td>

                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-primary">View</button>
                        </td>

                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>



    </div>
</div>


{{-- end content --}}







@endsection






{{-- modals --}}
@section('modals')


<div class="modal fade customer-info" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-2 ">

                        <div class="form-group col-sm-5 card text-center pt-3">
                            <label class="form-label">Name </label>
                            <p>Idres Abdulrahman</p>
                        </div>


                        <div class="col-sm-2"></div>
                        <div class="form-group col-sm-5 card text-center pt-3">
                            <label class="form-label" for="exampleInputEmail1">Phone </label>
                            <p> 0550000000000</p>
                        </div>


                        <div class="form-group col-sm-12 card text-center pt-3">
                            <label class="form-label">Address </label>
                            <p>Dubai 51 ST Block 12b</p>
                        </div>



                    </div>
                    <hr>

                    <div class="form-group col-sm-12 mt-3 text-center">
                        <label class="form-label my-3">Meal Macros Target For (Lean)</label>
                        <div class="form-row">
                            <div class="col-sm-6  px-2">
                                <div class="card pt-3">
                                    <label class="form-label text-muted">Kcals</label>
                                    <p style="font-weight:bold;">341</p>
                                </div>

                            </div>
                            <div class="col-sm-6  px-2 ">
                                <div class="card pt-3">
                                    <label class="form-label text-muted">Protein</label>
                                    <p style="font-weight:bold;">27</p>
                                </div>
                            </div>
                            <div class="col-sm-6  px-2">
                                <div class="card pt-3">
                                    <label class="form-label text-muted">Carbohydrates</label>
                                    <p style="font-weight:bold;">22</p>
                                </div>
                            </div>

                            <div class="col-sm-6  px-2">
                                <div class="card pt-3">
                                    <label class="form-label text-muted">Fats</label>
                                    <p style="font-weight:bold;">.4</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group col-sm-12 mt-3 text-center">
                        <label class="form-label my-3">Meals For Today (Lean)</label>
                        <div class="form-group col-sm-12 card text-center pt-3 mb-4">
                            <label class="form-label">Breakfast</label>
                            <p>Crunchy Salmon W/ Sweet Potato and Zucchini</p>
                        </div>

                        <div class="form-group col-sm-12 card text-center pt-3 mb-4">
                            <label class="form-label">Lunch</label>
                            <p>Korean Beef Bowl</p>
                        </div>

                        <div class="form-group col-sm-12 card text-center pt-3 mb-4">
                            <label class="form-label">Dinner</label>
                            <p>Pumpkin Oatmeal</p>
                        </div>

                        <div class="form-group col-sm-12 card text-center pt-3 mb-4">
                            <label class="form-label">Snack</label>
                            <p>Sweet Potato Pancakes</p>
                        </div>

                    </div>

                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                    class="btn btn-accent" data-dismiss="modal">Save</a>
            </div>
        </div>
    </div>
</div>



@endsection