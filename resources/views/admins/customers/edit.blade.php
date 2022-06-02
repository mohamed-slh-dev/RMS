@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">{{ $customer->fname }} {{ $customer->lname }}</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Customer Info.</a></li>



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

            {{-- <div class="col-sm-12">
                <div class="text-center">
                    <h5>This customer is requested from manually signup! <button class="btn btn-sm btn-outline-success">
                            Confirm Customer</button></h5>
                </div>
            </div> --}}
            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-info mt-2">{{ (!empty($customer->meals) ? $customer->meals->count() : '0') }}</h3>Total Meals
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-success mt-2">{{ $customer->deliveries->where('status', 'delivered')->count() }}</h3>Delivered Meals
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-primary mt-2">{{ $customer->deliveries->where('date', '>', date('Y-m-d'))->count() }}</h3> Up Coming Meals

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-danger mt-2">{{ $customer->deliveries->where('status', 'canceled')->count() }}</h3> Canceled Meals

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-accent mt-2">{{ $customer->subs->sum('price') }}<small>AED</small> </h3>Total Revenue

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="mb-2 card-body text-muted">
                        <h3 class="text-accent mt-2">{{ date('d M Y', strtotime($customer->to_date)) }}</h3> Subscription End

                    </div>
                </div>
            </div>



        </div>


        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.updateCustomer', [$customer->id]) }}" method="post">
                    @csrf

                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="example-text-input" class="col-sm-6 col-form-label">First Name</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" value="{{ $customer->fname }}" id="example-text-input" required name="fname">
                        </div>

                    </div>


                    <div class="col-sm-4">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Last Name</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" value="{{ $customer->lname }}" id="example-text-input" required name="lname">
                        </div>

                    </div>

                    <div class="col-sm-4">
                        <label for="example-text-input" class="col-sm-6 col-form-label ">Phone</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" value="{{ $customer->phone }}" id="example-text-input" required name="phone">
                        </div>

                    </div>

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label ">Address</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" value="{{ $customer->address }}" id="example-text-input" required name="address">
                        </div>

                    </div>

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">City</label>
                        <div class="col-sm-12">
                            <select class="form-control custom-select city-select-1" id="" required name="city">
                                @foreach ($cities as $city)

                                    @if ($customer->city_id == $city->id)
                                        <option value="{{ $city->id }}" selected="">{{ $city->name }}</option>
                                    @else
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">District</label>
                        <div class="col-sm-12">
                            <select class="form-control custom-select district-select-1" required name="district" id="">

                                @foreach ($districts as $district)

                                @if ($customer->district_id == $district->id)
                                    <option class="city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}" selected="">{{ $district->name }}</option>

                                @elseif ($district->city_id == $customer->city_id)
                                    <option class="city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>

                                @else
                                    <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                                @endif
                                
                                @endforeach
                            </select>
                        </div>

                    </div>





                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Flat No.</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="example-text-input" value="{{ $customer->flat_number }}" required name="flat">
                        </div>

                    </div>

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Block No.</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="example-text-input" value="{{ $customer->block_number }}" required name="block">
                        </div>

                    </div>

                    {{-- <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Profile Picture</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="example-text-input" name="img">
                        </div>

                    </div> --}}

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Excludes</label>
                        <div class="col-sm-12">
                            <select id="select02" data-toggle="select" multiple class="form-control w-100" name="excludes[]">
                            
                                @foreach ($components as $component)

                                    {{-- check if component is checked already --}}
                                    @if ($customer->excludes->where('component_id', $component->id)->count() > 0) 
                                        <option value="{{ $component->id }}" selected="">{{ $component->name }}</option>

                                    @else
                                        <option value="{{ $component->id }}">{{ $component->name }}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-3">
                        <label for="example-text-input" class="col-sm-6 col-form-label">Account Manager</label>
                        <div class="col-sm-12">
                            <select class="form-control custom-select"  required name="manager">
                                @foreach ($users as $user)

                                    @if ($customer->manager_id == $user->id)
                                        <option value="{{ $user->id }}" selected="">{{ $user->name }}</option>
                                    @else
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="col-12">
                        <button class="btn btn-outline-success mr-3 font-15 mt-5">Update Info</button>

                        <a data-toggle="modal" data-target=".renew">
                            <button type="button" class="btn btn-primary font-15 mt-5 float-right">
                                <i class="fa fa-history mr-2"></i> Renew
                            </button>
                        </a>
                        <a data-toggle="modal" data-target=".freez">
                            <button type="button" class="btn btn-dark mr-3 font-15 mt-5 float-right">
                                <i class="fa fa-dice-d6 mr-2"></i>Freeze
                            </button>
                        </a>

                    </div>



                    <div class="col-12">
                        <hr style="border-top: 1px solid #c2c2c233;">
                    </div>


                </div>

                </form>
                {{-- end form --}}
            </div>







        </div>


        <div class="row">

            <div class="col-lg-12 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist" style="width: 100%;">

                                <div class="col-auto" style="width: 33%;">
                                    <a href="#delivieris_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">{{ $customer->deliveries->count() }}</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">All Deliveries</strong>
                                            <small class="card-subtitle text-50">Review All Deliveris</small>
                                        </span>
                                    </a>
                                </div>



                                <div class="col-auto border-left border-right" style="width: 33%;">
                                    <a href="#subscription_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">{{$customer->subs->count()}}</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Subscriptions</strong>
                                            <small class="card-subtitle text-50">Review All Subscriptions History</small>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-auto border-left border-right" style="width: 34%;">
                                    <a href="#feedback_tap" data-toggle="tab" role="tab" aria-selected="true"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                <span class="h2 mb-0 mr-3">{{$customer->feedbacks->count()}}</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Feedback</strong>
                                            <small class="card-subtitle text-50">Review feedback from customer</small>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>


                        <div class="card-body tab-content">
                            <!--   Packages Tap -->
                            <div class="tab-pane active text-70" id="delivieris_tap">
                                <div class="row card-group-row mb-16pt mb-lg-40pt">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Delivery Orders</h4>
                                                <p class="card-title-desc">Review all delivery orders</p>
                        
                                                <div class="table-responsive">
                                                    <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                        <thead>
                                                            <tr>
                        
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-name">Order</a>
                                                                </th>
                                                                <th>
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-name">Name</a>
                                                                </th>
                        
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-reason">Package</a>
                                                                </th>
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-days">Driver</a>
                                                                </th>
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-name">Date</a>
                                                                </th>
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-name">Timing</a>
                                                                </th>
                        
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-days">City</a>
                                                                </th>
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-days">District</a>
                                                                </th>
                        
                                                           
                        
                        
                                                                <th >
                                                                    <a href="javascript:void(0)" class="sort"
                                                                        data-sort="js-lists-values-from">Status</a>
                                                                </th>
                        
                        
                                                            </tr>
                                                        </thead>



                                                        <tbody class="list" id="leaves">
                        
                                                            
                                                            {{-- customer deliveries --}}
                                                            @foreach ($customer->deliveries as $delivery)
                                                            
                                                            
                                                            
                                                            <!-- table row 1 -->
                                                            <tr>
                                                            
                                                            
                                                            
                                                                <!-- order id -->
                                                                <td>
                                                            
                                                                    <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                            
                                                                        <div class="media-body">
                                                            
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex d-flex flex-column">
                                                                                    <p class="mb-0"><strong class="js-lists-values-name"># {{ $delivery->id }}</strong></p>
                                                                                </div>
                                                            
                                                                            </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                            
                                                                </td>
                                                            
                                                            
                                                                <!-- name + pic -->
                                                                <td>
                                                            
                                                                    <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                                        <div class="avatar avatar-32pt mr-8pt">
                                                            
                                                                            <span class="avatar-title rounded-circle"></span>
                                                            
                                                                        </div>
                                                                        <div class="media-body">
                                                            
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex d-flex flex-column">
                                                                                    <p class="mb-0"><strong class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                                                </div>
                                                            
                                                                            </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                            
                                                                </td>
                                                            
                                                            
                                                                <!-- package -->
                                                                <td>
                                                                    <small class="js-lists-values-policy text-50">{{ $customer->package->name }}</small>
                                                                </td>
                                                            
                                                            
                                                                <!-- driver -->
                                                                <td>
                                                                    <small class="js-lists-values-policy text-50">{{ (!empty($delivery->driver->name) ? $delivery->driver->name : "-")}}</small>
                                                                </td>



                                                                <!-- date -->
                                                                <td>
                                                                    <small class="js-lists-values-days text-50"><span
                                                                            class="">{{ date('d M Y', strtotime($delivery->date)) }}</span>
                                                                    </small>
                                                                </td>
                                                            
                                                            
                                                            
                                                                <!-- timing -->
                                                                <td>
                                                                    <small class="js-lists-values-days text-50"><span
                                                                            class="badge badge-notifications badge-accent">{{ $customer->deliveryTime->timing }}</span>
                                                                    </small>
                                                                </td>
                                                            
                                                            
                                                                <!-- city -->
                                                                <td>
                                                                    <small class="js-lists-values-days text-50">{{ $customer->city->name }}</small>
                                                                </td>
                                                            
                                                            
                                                                <!-- district -->
                                                                <td>
                                                                    <small class="js-lists-values-days text-50">{{ $customer->district->name }}</small>
                                                                </td>
                                                            
                                                            
                                                            
                                                                <!-- status -->
                                                            
                                                                @if ($delivery->status == "not delivered")
                                                            
                                                                <td>
                                                                    <span class="avatar-title rounded bg-warning px-2">Not Delivered</span>
                                                                </td>
                                                            
                                                                @elseif ($delivery->status == "delivered")
                                                            
                                                                <td>
                                                                    <span class="avatar-title rounded bg-success px-2">Delivered</span>
                                                                </td>
                                                            
                                                                @else
                                                            
                                                                <td>
                                                                    <span class="avatar-title rounded bg-danger px-2">Canceled</span>
                                                                </td>
                                                            
                                                                @endif
                                                            
                                                            
                                                            
                                  
                                                            </tr>
                                                            <!-- end table row -->
                                                            
                                                            
                                                            @endforeach
                                                            {{-- deliveries --}}
                        
                        
                        
                        
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












                            <!--   Meals Tap -->
                            <div class="tab-pane text-70" id="feedback_tap">

                                 <!-- button row -->
                            <div class="row card-group-row mb-3">


                                <!-- add driver button -->
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-feedback"><i class="fa fa-plus-circle mr-2"></i>Add Customer Feedback</a>
                                </div>


                            </div>

                                <div class="row card-group-row mb-16pt mb-lg-40pt p-4">
                                   

                                    <div class="card col-12 mb-lg-32pt">

                                        <div class="table-responsive" data-toggle="lists"
                                            data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                <thead>
                                                    <tr>

                                                        <th>ID</th>
                                                        <th>Subject</th>
                                                        <th>Rating</th>
                                                        <th>Date</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="clients">

                                                    @foreach ($customer->feedbacks as $feedback)
                                                        <tr>
                                                            <td>{{$feedback->id}}</td>

                                                            <td>{{$feedback->subject}}</td>

                                                            <td>
                                                                @if ($feedback->rating == 1)
                                                                    Very Bad
                                                                @elseif($feedback->rating == 2)
                                                                    Bad

                                                                    @elseif($feedback->rating == 3)
                                                                    Avarage

                                                                    @elseif($feedback->rating == 4)
                                                                    Good

                                                                    @elseif($feedback->rating == 5)
                                                                    Excellent
                                                                @endif
                                                              
                                                            </td>

                                                            <td>{{$feedback->date}}</td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        {{-- <div class="card-footer p-8pt">

                                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"
                                                            class="material-icons">chevron_left</span>
                                                        <span>Prev</span>
                                                    </a>
                                                </li>
                                                <li class="page-item dropdown">
                                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#"
                                                        aria-label="Page">
                                                        <span>1</span>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item active">1</a>
                                                        <a href="" class="dropdown-item">2</a>
                                                        <a href="" class="dropdown-item">3</a>
                                                        <a href="" class="dropdown-item">4</a>
                                                        <a href="" class="dropdown-item">5</a>
                                                    </div>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span>Next</span>
                                                        <span aria-hidden="true"
                                                            class="material-icons">chevron_right</span>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div> --}}
                                        

                                    </div>


                                </div>
                            </div>
                            



                            <!-- subs Tap -->
                            <div class="tab-pane text-70" id="subscription_tap">

                                <div class="row card-group-row p-4">                                   

                                        <div class="card col-12 mb-lg-32pt">
    
                                            <div class="table-responsive" data-toggle="lists"
                                                data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true"
                                                data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>
    
                                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                    <thead>
                                                        <tr>
    
                                                            <th>Name</th>
                                                            <th>Start Date</th>
                                                            <th>End date</th>
                                                            <th>Package</th>
                                                            <th>Price</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>



                                                    <tbody class="list" id="clients">
    

                                                        @foreach ($customer->subs as $sub)
                                                            
                                                        <tr>

    
                                                            <td>
    
                                                                <div class="media flex-nowrap align-items-center"
                                                                    style="white-space: nowrap;">
                                                                    <div class="avatar avatar-32pt mr-8pt">
    
                                                                        <span class="avatar-title rounded-circle"></span>
    
                                                                    </div>
                                                                    <div class="media-body">
    
                                                                        <div class="d-flex flex-column">
                                                                            <p class="mb-0"><strong
                                                                                    class="js-lists-values-name">{{ $customer->fname }} {{ $customer->lname }}</strong></p>
                                                                            <small
                                                                                class="js-lists-values-email text-50">{{ $customer->email }}</small>
                                                                        </div>
    
                                                                    </div>
                                                                </div>
    
                                                            </td>
    
    
                                                            <td>{{ date('d M Y', strtotime($sub->start_date)) }}</td>
    
    
    
                                                            <td>
                                                               {{ date('d M Y', strtotime($sub->end_date)) }}
                                                            </td>
    
                                                            <td>{{ $customer->package->name }}</td>
                                                            <td>
                                                               {{ $sub->price }}
                                                            </td>
                                                        
                                                        </tr>
                                                        

                                                        @endforeach
                                                        {{-- end subs foreach --}}
                                                        
    
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
    
                                            {{-- <div class="card-footer p-8pt">
    
                                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true"
                                                                class="material-icons">chevron_left</span>
                                                            <span>Prev</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item dropdown">
                                                        <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#"
                                                            aria-label="Page">
                                                            <span>1</span>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a href="" class="dropdown-item active">1</a>
                                                            <a href="" class="dropdown-item">2</a>
                                                            <a href="" class="dropdown-item">3</a>
                                                            <a href="" class="dropdown-item">4</a>
                                                            <a href="" class="dropdown-item">5</a>
                                                        </div>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span>Next</span>
                                                            <span aria-hidden="true"
                                                                class="material-icons">chevron_right</span>
                                                        </a>
                                                    </li>
                                                </ul>
    
                                            </div> --}}
                                            
    
                                        </div>
    
    
                                  
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

            

        </div>


    </div>
</div>
{{-- end content --}}





@endsection
{{-- end section --}}










{{-- modals section --}}
@section('modals')


<div class="modal fade new-feedback" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Delivery Timing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {{-- form --}}
            <form action="{{ route('admin.addFeedback',[$id]) }}" method="post">
                
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- timing start -->
                        <div class="form-group col-6">
                            <label class="form-label">Rating</label>
                            <select id="rating" name="rating" class="form-control custom-select">
                                <option value="1">1 Very Bad</option>
                                <option value="2">2 Bad</option>
                                <option value="3">3 Avarage</option>
                                <option value="4">4 Good</option>
                                <option value="5">5 Excellent</option>

                            </select>
                        </div>


                        <!-- timing end -->
                        <div class="form-group col-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="" required="">
                        </div>

                        <div class="form-group col-12">
                            <label class="form-label">Subject</label>
                           <textarea name="subject" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>

                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>

{{-- freeze modal --}}
<div class="modal fade freez" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Freeze Subscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.customers.freez')}}" method="POST">
                @csrf
            <input type="hidden" name="customer_id" value="{{$id}}">
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
{{-- end freeze modal --}}



{{-- renew modal --}}
<div class="modal fade renew" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Renew Subscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('admin.customers.renew')}}" method="POST">
                  @csrf
            <input type="hidden" name="customer_id" value="{{$id}}" id="">
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
                            <input type="date" min="{{$renew_start_date}}" name="start_date" class="form-control">
                        </div>
                        
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Plan Duration</label>

                            <div class="form-group mt-2">
                                <div class="d-flex">
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="20days" name="daysplan" type="radio"
                                            class="custom-control-input summary-plandays" value="20" checked="">
                                        <label for="20days" class="custom-control-label">20 Days</label>
                                    </div>
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="24days" name="daysplan" type="radio"
                                            class="custom-control-input summary-plandays" value="24">
                                        <label for="24days" class="custom-control-label">24 Days</label>
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
                                   <input id="type-{{$type->id}}" type="checkbox" name="{{$type->name}}" value="{{$type->id}}" class="custom-control-input tab-field-2 tab-field-2-1 summary-mealtype">
                                       <label for="type-{{$type->id}}" class="custom-control-label"> 
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
                                    <input id="Saturday"  type="checkbox" name="saturday" value="saturday" class="custom-control-input">
                                    <label for="Saturday" class="custom-control-label">Saturday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Sunday"  type="checkbox" name="sunday" value="sunday" class="custom-control-input">
                                    <label for="Sunday" class="custom-control-label">Sunday </label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Monday"  type="checkbox" name="monday" value="monday" class="custom-control-input">
                                    <label for="Monday" class="custom-control-label">Monday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Tuesday" type="checkbox" name="tuesday" value="tuesday" class="custom-control-input">
                                    <label for="Tuesday" class="custom-control-label">Tuesday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Wednesday" type="checkbox" name="wednesday" value="wednesday" class="custom-control-input ">
                                    <label for="Wednesday" class="custom-control-label">Wednesday</label>
                                </div>

                                <div class="custom-control custom-checkbox mx-2">
                                    <input id="Thursday" type="checkbox" name="thursday" value="thursday" class="custom-control-input ">
                                    <label for="Thursday" class="custom-control-label">Thursday</label>
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


@endsection
{{-- end modals section --}}