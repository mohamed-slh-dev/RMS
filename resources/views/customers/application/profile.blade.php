@extends('layouts.customer')



<!-- maps -->
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2HIEq1bixHiWwg4t4AyQvElMzApekCQ"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>

<style type="text/css">
    #map {
        width: 100%;
        height: 480px;
        border: 5px solid white;
        border-radius: 5px;
    }
</style>
<!-- end map -->







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
                    <a href="{{ route('customer.plan') }}" class="btn btn-outline-primary w-100"><i class="fa fa-calendar-alt"></i></a>
                </div>

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.profile') }}" class="btn btn-primary w-100"><i class="fa fa-user"></i></a>
                </div>


            </div>
            {{-- end menu --}}









        </div>
        <!-- // END Header -->


        <!-- breadcrubms -->
        <div class="border-bottom-2 mt-3 position-relative z-1 mb-5">
            <div class="container-fluid">

                <div class="row align-items-center general-info-row align-items-center" style="margin-top:0px;">


                    <div class="col-12 text-center mb-1">
                        <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                            style="width:100%; height:60px; object-fit: contain;">
                    </div>



                    <!-- general info -->
                    <div class="col-6 mt-3 mb-3">
                        <h6 class="mb-0 font-size-16">Personal Info</h6>
                    </div>

                    <div class="col-6 mt-4 text-right mb-3">
                        <a href="{{ route('customer.profileEdit') }}" class="btn btn-secondary py-1"><i
                                class="fa fa-edit text-white"></i></a>
                    </div>


                    <div class="col-12">

                        <div class="row bg-white py-4" style="border-radius:5px; box-shadow:0px 0px 3px 0px lightgrey">
                            <div class="col-6">
                                <h6 class="border-right-1"><i class="fa fa-user mr-2"></i>{{ $customer->fname." ".$customer->lname }}</h6>
                            </div>

                            <div class="col-6">
                                <h6><i class="fa fa-phone mr-2"></i>{{ $customer->phone }}</h6>
                            </div>


                            <div class="col-6 mt-1">
                                <h6 class="border-right-1 mb-0"><i class="fa fa-dot-circle mr-2"></i>City: {{ $customer->city->name }}</h6>
                            </div>

                            <div class="col-6 mt-1">
                                <h6 class="mb-0"><i class="fa fa-dot-circle mr-2"></i>District: {{ $customer->district->name }}</h6>
                            </div>


                        </div>

                    </div>
                    <!-- end general info -->




                    <!-- map info -->
                    <div class="col-12 mt-4 mb-3">
                        <h6 class="mb-0 font-size-16">Location Info</h6>
                    </div>




                    <div class="col-12">


                        <div class="row">

                            <!-- map -->
                            <div class="col-12">
                                <div id="map"></div>
                            </div>



                            <!-- buttons -->
                            <div class="col-12 text-center mt-3">
                                <button id="currentLoc" class="btn btn-outline-primary py-1 mr-1"><i
                                        class="fa fa-map-marked m-2"></i>Currnet Location</button>
                                <button id="confirmPosition" class="btn btn-success py-1 m-2">Save Position</button>

                                <!-- hidden marks -->
                                <p class="d-none"><span id="onIdlePositionView"></span></p>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-12">
                    <hr>
                </div>






                <!-- Subscribtion info -->
                <div class="col-12 mt-4 mb-3">
                    <h6 class="mb-0 font-size-16">Subscription Info</h6>
                </div>



                <div class="col-12 mb-5">

                    <div class="row bg-white py-4 align-items-center"
                        style="border-radius:5px; box-shadow:0px 0px 3px 0px lightgrey">
                        <div class="col-6 border-right-1 text-center">
                            <h6 class="mb-1"><i class="fa fa-calendar-alt mr-2"></i>{{  date('d M Y', strtotime($customer->from_date))  }}</h6>
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







{{-- scripts --}}
@section('scripts')


    



    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/package-plan.js') }}"></script>


    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/customer-mobile.js') }}"></script>


    <!-- map script -->
    
    <script>
        // Get element references
            var confirmBtn = document.getElementById('confirmPosition');
            var onClickPositionView = document.getElementById('onClickPositionView');
            var onIdlePositionView = document.getElementById('onIdlePositionView');
    
            // Initialize locationPicker plugin
            var lp = new locationPicker('map', {
                setCurrentPosition: true, // You can omit this, defaults to true
            }, {
                zoom: 15 // You can set any google map options here, zoom defaults to 15
            });
    
            currentLoc.onclick = function () {
    
                var lp = new locationPicker('map', {
                    setCurrentPosition: true, // You can omit this, defaults to true
                }, {
                    zoom: 15 // You can set any google map options here, zoom defaults to 15
                });
    
            };
    
            // Listen to button onclick event
            confirmBtn.onclick = function () {
                // Get current location and show it in HTML and put it on inputs
                var location = lp.getMarkerPosition();
                document.getElementById('lat_input').value = location.lat;
                document.getElementById('long_input').value = location.lng;
                onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
                onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    
    
            };
    
            // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
            google.maps.event.addListener(lp.map, 'idle', function (event) {
                // Get current location and show it in HTML
                var location = lp.getMarkerPosition();
                onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    
            });
    
    </script>
    
    <!-- end map script -->


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