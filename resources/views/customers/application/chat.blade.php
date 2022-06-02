@extends('layouts.customer')




{{-- contents --}}
@section('content')

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
                    <a href="{{ route('customer.chat') }}" class="btn btn-primary w-100"><i class="fa fa-comment-dots"></i></a>
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
                    <a href="{{ route('customer.plan') }}" class="btn btn-outline-primary w-100"><i class="fa fa-calendar-alt"></i></a>
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
        <div class="border-bottom-2 mt-3 position-relative z-1 mb-5">
            <div class="container-fluid">

                <div class="row align-items-center general-info-row align-items-center" style="margin-top:0px;">


                    <div class="col-12 px-0"
                        style="position: relative; background-image: url({{ asset('assets/customer/images/logo/RESTAURANT.png') }}); background-size: contain; background-position: top; height: 200px; border-top-left-radius: 5px; border-top-right-radius: 5px; background-repeat: no-repeat;">

                        <!-- overlay -->
                        <div class="hero-overlay"
                            style="position: absolute; top:0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.404); border-top-left-radius: 5px; border-top-right-radius: 5px;">
                        </div>

                        <div class="row align-items-center h-100">
                            <div class="col-6 text-right">
                                <button class="btn btn-success px-4 py-1 font-weight-bold"
                                    style="box-shadow: 0px 0px 2px 0px rgb(0, 190, 0);">
                                    <i class="fa fa-phone-alt mr-2"></i>Call
                                </button>
                            </div>

                            <div class="col-6 text-left">
                                <a href="{{ route('customer.chatRoom') }}" class="btn btn-success px-4 py-1 font-weight-bold"
                                    style="box-shadow: 0px 0px 2px 0px rgb(0, 190, 0);">
                                    <i class="fa fa-comment-dots mr-2 text-white"></i>Chat
                                </a>
                            </div>


                        </div>
                    </div>



                    <div class="col-12">

                        <div class="row bg-white py-3" style="border-radius:5px; box-shadow:0px 0px 3px 0px lightgrey">
                            <div class="col-12 text-center">
                                <h6 class="border-right-1 border-left-1 mb-0"><i class="fa fa-info-circle mr-2"></i> {{ $customer->deliveries->count() }} Deliveries</h6>
                            </div>


                        </div>

                    </div>
                    <!-- end general info -->




                    <div class="col-12">
                        <hr>
                    </div>





                    <!-- Subscribtion info -->
                    <div class="col-12 mt-3 mb-3">
                        <h6 class="mb-0 font-size-16">Subscription Info</h6>
                    </div>



                    <div class="col-12">

                        <div class="row bg-white py-4 align-items-center"
                            style="border-radius:5px; box-shadow:0px 0px 3px 0px lightgrey">
                            <div class="col-6 border-right-1 text-center">
                                <h6 class="mb-1"><i class="fa fa-calendar-alt mr-2"></i>{{ date('d M Y', strtotime($customer->from_date)) }}</h6>
                                <p class="text-center mb-0">
                                    <span class="badge-pill badge-secondary px-3 font-size-12 font-weight-500">Start
                                        Date</span>
                                </p>
                            </div>

                            <div class="col-6 border-right-1 text-center">
                                <h6 class="mb-1"><i class="fa fa-calendar-alt mr-2"></i>{{ date('d M Y', strtotime($customer->to_date)) }}</h6>
                                <p class="text-center mb-0">
                                    <span class="badge-pill badge-secondary px-3 font-size-12 font-weight-500">End
                                        Date</span>
                                </p>
                            </div>





                            <div class="col-6 border-right-1 text-center mt-3">
                                <button class="btn btn-outline-primary w-100 py-1" data-toggle="modal"
                                    data-target=".renew">Renew</button>

                            </div>

                            <div class="col-6 border-right-1 text-center mt-3">
                                <button class="btn btn-outline-primary w-100 py-1" data-toggle="modal"
                                    data-target=".freez">Freeze</button>
                            </div>

                        </div>

                    </div>





                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- breadcrubms end -->




    </div>
    <!-- // END drawer-layout__content -->




    <!-- drawrer menu was here -->

    <!-- drawrer menu end -->



</div>
<!-- // END drawer-layout -->



@endsection






{{-- sections --}}
@section('sections')

<!-- package plan js (custom added) -->
<script src="{{ asset('assets/customer/js/package-plan.js') }}"></script>


<!-- package plan js (custom added) -->
<script src="{{ asset('assets/customer/js/customer-mobile.js') }}"></script>


@endsection








{{-- modals --}}
@section('modals')

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
            <input type="hidden" name="customer_id" value="{{session('customer_id')}}">
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
            <input type="hidden" name="customer_id" value="{{session('customer_id')}}" id="">
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
                                <div class="custom-control pl-2">
                                  
                                    <label class=" col-form-label form-label">Choose Customer Meals </label>

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
                            <div class="row">
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Saturday"  type="checkbox" name="saturday" value="saturday" class="custom-control-input">
                                    <label for="Saturday" class="custom-control-label">Saturday</label>
                                    </div>
                                </div>

                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Sunday"  type="checkbox" name="sunday" value="sunday" class="custom-control-input">
                                    <label for="Sunday" class="custom-control-label">Sunday </label>
                                    </div>
                                </div>

                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Monday"  type="checkbox" name="monday" value="monday" class="custom-control-input">
                                    <label for="Monday" class="custom-control-label">Monday</label>
                                    </div>
                                </div>

                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Tuesday" type="checkbox" name="tuesday" value="tuesday" class="custom-control-input">
                                    <label for="Tuesday" class="custom-control-label">Tuesday</label>
                                    </div>
                                </div>

                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Wednesday" type="checkbox" name="wednesday" value="wednesday" class="custom-control-input ">
                                    <label for="Wednesday" class="custom-control-label">Wednesday</label>
                                    </div>
                                </div>

                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="Thursday" type="checkbox" name="thursday" value="thursday" class="custom-control-input ">
                                    <label for="Thursday" class="custom-control-label">Thursday</label>
                                    </div>
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
<!-- end renew modal -->

@endsection




