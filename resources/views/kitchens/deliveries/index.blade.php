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
                            <div class="h2 mb-0 mr-3"> {{$customers_deliveries->count()}} </div>
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
                                {{$customers_deliveries->where('status','ready')->count()}}
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Ready</strong></p>
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
                              
                                <div class="h2 mb-0 mr-3">
                                    {{$customers_deliveries->where('status','not delivered')->count()}}
                                </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Not Ready</strong></p>
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
                        <form action="{{route('kitchen.deliveries')}}" method="POST">
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
                                                    <option value="all"></option>
                                                  @foreach ($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
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
                                                    <option value="all"></option>
                                                    <option value="not delivered">Not Ready</option>
                                                    <option value="ready">Ready</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">City</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select" name="city">
                                                    <option value="all"></option>
                                                    @foreach ($cities as $city)
                                                         <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                   

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
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Current
                                Status</a>
                        </th>

                        <th>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-from">Action</a>
                        </th>


                      

                    </tr>
                </thead>
                <tbody class="list" id="leaves">

                    @foreach ($customers_deliveries as $delivery)
                        
                 

                    <tr class="selected">

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">

                                <div class="media-body">

                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <p class="mb-0"><strong class="js-lists-values-name">
                                                #{{$delivery->id}} </strong></p>
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
                                                {{$delivery->customer->fname}} {{$delivery->customer->lname}}     
                                            </strong></p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </td>

                     
                        <td>
                            <small class="js-lists-values-policy text-50"> {{$delivery->customer->deliveryTime->timing}} </small>
                        </td>

                        <td>
                            <small class="js-lists-values-policy text-50">
                                {{$delivery->customer->package->name}}</small>
                        </td>

                     

                        <td>
                           
                            <label class="form-label">
                                {{$delivery->status}}
                            </label>
                          
                        </td>


                        <td>
                            @if ($delivery->status == 'ready')

                            <button disabled href="#" class="btn btn-sm btn-success">Ready</button>

                            @elseif($delivery->status == 'not delivered')

                            <a  href="{{route('kitchen.deliveries.ready',[$delivery->id])}}" class="btn btn-sm btn-success">Ready to deliver</a>

                            @else

                            @endif
                           
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





@endsection