@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">All Customer</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Customers</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}








{{-- content --}}
<div class="container page__container">
    <div class="page-section">
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-info mt-2">{{ $customers->count() }}</h3>
                        <span style="font-weight: bold;"> Total Customer</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-success mt-2">{{ $customers->where('to_date', '>=',date('Y-m-d'))->count() }}</h3>
                        <span style="font-weight: bold;">Active</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-accent mt-2">{{ $customers->where('to_date', '<',date('Y-m-d'))->count() }}</h3>
                        <span style="font-weight: bold;">Lost</span>

                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-primary mt-2">{{ $freezs->where('start_date', '<=' ,date('Y-m-d'))->where('end_date', '>' ,date('Y-m-d'))->count() }}</h3>
                        <span style="font-weight: bold;">Freez</span>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-primary mt-2">{{ $customers->where('gender', 'male')->count() }}</h3>
                        <span style="font-weight: bold;">Male</span>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-primary mt-2">{{ $customers->where('gender', 'female')->count() }}</h3>
                        <span style="font-weight: bold;">Female</span>

                    </div>
                </div>
            </div>

         

        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card client-card">
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-sm-5 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-6 col-form-label pr-0">Customer Name</label>
                                            <div class="col-sm-6 pl-0">
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-5 ">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-4 col-form-label pr-0">Package</label>
                                            <div class="col-sm-8 pl-0">
                                                <select class="custom-select ">
                                                    
                                                    @foreach ($packages as $package)
                                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-sm-2 text-center">
                                        <button class="btn btn-outline-success waves-effect waves-light mx-3"> search
                                        </button>
                                    </div>


                                    <div class="col-12">
                                        <hr>
                                    </div>

                                    <div class="col-sm-12 text-center mt-3">

                                        <button id="card-view-btn"
                                            class="btn btn-outline-success waves-effect waves-light mx-3"> <i
                                                class="fa fa-id-card-alt mx-2"></i> Cards View </button>
                                        <button id="table-view-btn"
                                            class="btn btn-outline-primary waves-effect waves-light mx-3">
                                            <i class="fa fa-table mx-2"></i> Table View </button>

                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>




            <div class="col-12 row" id="card-view">


                {{-- customers cards --}}
                @foreach ($customers as $customer)
                    
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="row text-center">
                                <div class="col-12">
                                    <img class="m-3 rounded-circle avatar-md" width="100" height="100"
                                        src="{{ asset('assets/admin/images/customers/default.jpg') }}" alt="Generic placeholder image">
                                </div>
                                <div class="col-12">
                                    <div class="media-body">
                                        <h5 class="font-size-16 mb-1">{{ $customer->fname }} {{ $customer->lname }}</h5>
                                        <p class="text-muted mb-0">{{ $customer->email }}</p>
                                        <p class="text-muted font-size-14 font-weight-medium font-secondary mb-0">
                                            {{ $customer->district->name }}</p>

                                        <p class="font-weight-small font-secondary mt-2">
                                            <a class="btn btn-sm btn-success" href="{{ route('admin.editCustomer', [$customer->id]) }}"> View </a>
                                        </p>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <button data-toggle="modal" data-target=".freez-{{$customer->id}}"
                                        class="btn btn-sm btn-dark mr-3 font-15">
                                        <i class="fa fa-dice-d6 mr-2"></i>Freeze
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                <button data-toggle="modal" data-target=".renew-{{$customer->id}}"
                                        class="btn btn-sm btn-primary font-15">
                                        <i class="fa fa-history mr-2"></i>Renew
                                    </button>
                                </div>


                            </div>

                            <div class="row text-center mt-4">
                                <div class="col-sm-3 px-0">
                                    <h5 class="mb-0">{{ $customer->deliveries->where('status', 'delivered')->count() }}</h5>
                                    <p class="text-muted font-size-14">Delivered</p>
                                </div>
                                <div class="col-sm-6">



                                    <h6 class="text-muted font-size-14 mt-4">
                                        <span class="badge badge-light">
                                            {{ $customer->package->name }}
                                        </span>
                                    </h6>


                                </div>
                                <div class="col-sm-3 px-0">
                                    <h5 class="mb-0">{{ $customer->deliveries->where('status', 'canceled')->count() }}</h5>
                                    <p class="text-muted font-size-14">Canceled</p>
                                </div>
                            </div>

                            <ul class="social-links text-center list-inline mb-0 mt-3">

                                <li class="list-inline-item">
                                    <a target="_blank" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="https://wa.me/{{ $customer->phone }}"
                                        data-original-title="+{{ $customer->phone }}">
                                        <i class="fab fa-whatsapp  "></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="tel:+" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                        data-original-title="+{{ $customer->phone }}"><i class="fas fa-phone"></i></a>
                                </li>

                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{ route('admin.customerChatActive', [$customer->id]) }}"
                                        data-original-title="+{{ $customer->phone }}"><i class="fas fa-comment"></i></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <!-- end col -->

                @endforeach
                {{-- end foreach --}}

                
            </div>
            {{-- end cards --}}




            {{-- table view --}}
            <div class="col-12 row d-none" id="table-view">


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                    <thead>
                                        <tr>



                                            <th>
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Name</a>
                                            </th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">Phone</a>
                                            </th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">E-mail</a>
                                            </th>

                                            <th style="width: 150px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-reason">Package</a>
                                            </th>

                                            <th style="width: 130px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">Delivered</a>
                                            </th>

                                            <th style="width: 130px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Canceled</a>
                                            </th>

                                            <th style="width: 130px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-name">Freez</a>
                                            </th>


                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)" class="sort"
                                                    data-sort="js-lists-values-days">Renew</a>
                                            </th>



                                        </tr>
                                    </thead>
                                    <tbody class="list" id="leaves">


                                        {{-- customers cards --}}
                                        @foreach ($customers as $customer)

                                        <tr>
                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle"></span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <a href="{{ route('admin.editCustomer', [$customer->id]) }}">
                                                                    <p class="mb-0"><strong
                                                                            class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                +{{ $customer->phone }}
                                            </td>
                                            <td>
                                                {{ $customer->email }}
                                            </td>

                                            <!-- package -->
                                            <td>
                                                {{ $customer->package->name }}
                                            </td>


                                            <!-- driver -->
                                            <td>
                                                {{ 
                                                    $customer->deliveries->where('status', 'delivered')->count() }}
                                            </td>

                                            <td>
                                                {{ $customer->deliveries->where('status', 'canceled')->count() }}
                                            </td>


                                            <!-- timing -->
                                            <td>
                                            <button data-toggle="modal" data-target=".freez-{{$customer->id}}"
                                                    class="btn btn-sm btn-dark mr-3 font-15">
                                                    <i class="fa fa-dice-d6 mr-2"></i>Freeze
                                                </button>
                                            </td>


                                            <!-- city -->
                                            <td>
                                            <button data-toggle="modal" data-target=".renew-{{$customer->id}}"
                                                    class="btn btn-sm btn-primary font-15">
                                                    <i class="fa fa-history mr-2"></i> Renew
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

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>

        </div>
        <!-- end row -->


    </div>
</div>
{{-- end content --}}








@endsection
{{-- end section --}}






@section('scripts')

{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>


{{-- all customers page --}}
<script src="{{ asset('assets/admin/js/all-customers-page.js') }}"></script>


@endsection










{{-- modals section --}}
@section('modals')

@foreach ($customers as $customer)
    

{{-- freeze orders modal --}}
<div class="modal fade freez-{{$customer->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Freeze Subscription ({{$customer->fname}} {{$customer->lname}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.customers.freez')}}" method="POST">
                @csrf
            <input type="hidden" name="customer_id" value="{{$customer->id}}">
            <div class="modal-body">

                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-6">
                            <label class="form-label" for="exampleInputEmail1">Freezing Start Date</label>
                            <input required name="start_date" type="date" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form-label" for="exampleInputEmail1">Freezing End Date</label>
                            <input required name="end_date" type="date" class="form-control">
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="form-label" for="exampleInputEmail1">Subject</label>
                           <textarea class="form-control" name="subject" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
               
            </div>

            </form>

        </div>
    </div>
</div>

@endforeach

{{-- end freeze orders modal --}}






@foreach ($customers as $customer)
    
{{-- renew orders modal --}}
<div class="modal fade renew-{{$customer->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Renew Subscription ({{$customer->fname}} {{$customer->lname}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('admin.customers.renew')}}" method="POST">
                  @csrf
            <input type="hidden" name="customer_id" value="{{$customer->id}}" id="">
            <div class="modal-body">

                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Package</label>
                            <select id="expire_year" name="package" class="form-control custom-select">

                                @foreach ($packages as $package)
                            <option value="{{$package->id}}">{{$package->name}}</option>
                                @endforeach
                             
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Renew Start Date</label>
                            <input type="date" min="{{date('Y-m-d', strtotime($customer->to_date. ' + 1 days'))}}" name="start_date" class="form-control">
                        </div>
                        
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Plan Duration</label>

                            <div class="form-group mt-2">
                                <div class="d-flex">
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="20days-{{$customer->id}}" name="daysplan" type="radio"
                                            class="custom-control-input summary-plandays" value="20" checked="">
                                        <label for="20days-{{$customer->id}}" class="custom-control-label">20 Days</label>
                                    </div>
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="24days-{{$customer->id}}" name="daysplan" type="radio"
                                            class="custom-control-input summary-plandays" value="24">
                                        <label for="24days-{{$customer->id}}" class="custom-control-label">24 Days</label>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-12">

                            <div class="form-group">
                                <div class="custom-control custom-checkbox pl-2">
                                    {{-- <input id="choose-plan" checked type="checkbox" class="custom-control-input"> --}}
                                    <label for="choose-plan" class=" col-form-label form-label custom-control-label">Choose Customer Meals </label>

                                </div>
                            </div>

                            <!-- Choose plan -->
                            {{-- <div class="form-group row align-items-center mb-4" id="divide-plan">
                                <h6 class="col-form-label col-sm-4 text-uppercase" style="font-size: 15px !important;">
                                    Choose Plan</h6>
                                <div class="col-sm-8">
                                    <select id="select01" data-toggle="select" class="form-control">
                                        <option>1 Meals (Breakfast) </option>
                                        <option>1 Meals + Snack (Breakfast)</option>
                                        <option>2 Meals (Breakfast, Lunch) </option>
                                        <option>2 Meals + Snack (Breakfast, Lunch)</option>
                                        <option>3 Meals (Breakfast, Lunch, Dinner)</option>
                                        <option>3 Meals + Snack (Breakfast, Lunch, Dinner)</option>

                                        <option>4 Meals (Breakfast, Lunch, Dinner, Pre-Workout)</option>
                                        <option>4 Meals + Snack (Breakfast, Lunch, Dinner, Pre-Workout)</option>
                                        <option>5 Meals (Breakfast, Lunch, Dinner, Pre-Workout, Post-Workout)</option>
                                        <option>5 Meals + Snack (Breakfast, Lunch, Dinner, Pre-Workout, Post-Workout)
                                        </option>

                                    </select>
                                </div>
                            </div> --}}

                            <div id="divide-customer" class="row mb-4">
                                @foreach ($types as $type)
                                <div class="form-group col-4">
                                   <div class="custom-control custom-checkbox">
                                   <input id="type-{{$type->id}}-{{$customer->id}}" type="checkbox" name="{{$type->name}}" value="{{$type->id}}" class="custom-control-input tab-field-2 tab-field-2-1 summary-mealtype">
                                       <label for="type-{{$type->id}}-{{$customer->id}}" class="custom-control-label"> 
                                           {{$type->name}} </label>
                                   </div>
                               </div>
                               @endforeach

                            </div>

                    <div class="col-12">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-12 mb-4">Deliver Days</label>
                            <div class="col-sm-12 " style="display: contents;">
                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Saturday-{{$customer->id}}"  type="checkbox" name="saturday" value="saturday" class="custom-control-input">
                                    <label for="Saturday-{{$customer->id}}" class="custom-control-label">Saturday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Sunday-{{$customer->id}}"  type="checkbox" name="sunday" value="sunday" class="custom-control-input">
                                    <label for="Sunday-{{$customer->id}}" class="custom-control-label">Sunday </label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Monday-{{$customer->id}}"  type="checkbox" name="monday" value="monday" class="custom-control-input">
                                    <label for="Monday-{{$customer->id}}" class="custom-control-label">Monday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Tuesday-{{$customer->id}}" type="checkbox" name="tuesday" value="tuesday" class="custom-control-input">
                                    <label for="Tuesday-{{$customer->id}}" class="custom-control-label">Tuesday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Wednesday-{{$customer->id}}" type="checkbox" name="wednesday" value="wednesday" class="custom-control-input ">
                                    <label for="Wednesday-{{$customer->id}}" class="custom-control-label">Wednesday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Thursday-{{$customer->id}}" type="checkbox" name="thursday" value="thursday" class="custom-control-input ">
                                    <label for="Thursday-{{$customer->id}}" class="custom-control-label">Thursday</label>
                                </div>

                                {{-- <div class="custom-control custom-checkbox mx-2">
                                    <input id="Friday" type="checkbox" name="friday" value="friday" class="custom-control-input Friday">
                                    <label for="Friday" class="custom-control-label">Friday</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
                  
        </form>

        </div>
    </div>
</div>

{{-- end renew orders modal --}}

@endforeach



@endsection
{{-- end modals section --}}