@extends('layouts.customer')




{{-- contents --}}
@section('content')



{{-- layout --}}
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">

        <!-- Header -->

        <div class="container-fluid bg-white py-3"
            style="box-shadow:0px 0px 3px 0px lightgrey; position:fixed; z-index: 1000; bottom:0px; max-width: 100%;">

            <div class="row m-navbar-row">

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.home') }}" class="btn btn-primary w-100"><i class="fa fa-home"></i></a>
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
                    <a href="{{ route('customer.profile') }}" class="btn btn-outline-primary w-100"><i class="fa fa-user"></i></a>
                </div>


            </div>
            {{-- end menu --}}









        </div>
        <!-- // END Header -->


        <!-- breadcrubms -->
        <div class="border-bottom-2 mt-3 position-relative z-1">
            <div class="container-fluid">

                <div class="row align-items-center">

                    <div class="col-12 text-center mb-3">
                        <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                            style="width:100%; height:60px; object-fit: contain;">
                    </div>







                    <!-- carousal col  -->

                    <div class="col-12">

                        <!-- carousal -->
                        <div class="row align-items-center mt-3" style="position: relative;">






                            <!-- patch 1 -->
                            <div class="col-4 d-none m-boxes-1">
                                <div class="m-boxes">
                                    <h6>Canceled Deliveries</h6>
                                    <p class="mb-0">{{ $customer->deliveries->where('status', 'canceled')->count() }}</p>
                                </div>
                            </div>

                            <div class="col-4 d-none m-boxes-1">
                                <div class="m-boxes">
                                    <h6>Cash Collection</h6>
                                    <p class="mb-0">{{ $customer->cash_collection }}</p>
                                </div>
                            </div>
                            

                            <div class="col-4 d-none m-boxes-1">
                                <div class="m-boxes">
                                    <h6>Bags on<br>hands</h6>
                                    <p class="mb-0">{{ $customer->bag }}</p>
                                </div>
                            </div>


                            <!-- patch 2 -->
                            <div class="col-4 m-boxes-2">
                                <div class="m-boxes">
                                    <h6>Today Deliveries</h6>
                                    <p class="mb-0">{{ $customer->deliveries->where('date', date('Y-m-d'))->count() }}</p>
                                </div>
                            </div>

                            <div class="col-4 m-boxes-2">
                                <div class="m-boxes">
                                    <h6>Coming Deliveries</h6>
                                    <p class="mb-0">{{ $customer->deliveries->where('status', 'not delivered')->count() - $customer->deliveries->where('status', 'delivered')->count() }}</p>
                                </div>
                            </div>

                            <div class="col-4 m-boxes-2">
                                <div class="m-boxes">
                                    <h6>All<br>Orders</h6>
                                    <p class="mb-0">{{ $customer->deliveries->count() }}</p>
                                </div>
                            </div>



                            <!-- move button -->
                            <button class="move-button btn btn-white">
                                <i class="fa fa-chevron-circle-right"></i>
                            </button>
                            <!-- move button end -->


                            <div class="col-12">
                                <hr class="w-50 mb-0">
                            </div>

                        </div>
                        <!-- end carousal -->

                    </div>
                    <!-- end carousal col -->




                    <div class="col-12 text-center mt-4 pt-0">
                        <h4 class="mb-2 carousal-card-heading" style="letter-spacing: 0.5px;"><span
                                class="hello-word">Hello,</span> {{ $customer->fname." ".$customer->lname }}<br>Enjoy Your Meals Today.
                        </h4>
                        <!-- date -->
                        <h5 class="mb-4"
                            style="font-size:15px; display:inline-block; margin-bottom: 5px !important; border-bottom: 1px solid #4aa2ee;">
                            {{ date('d M Y') }}</h5>
                    </div>




                    <!-- meal info -->
                    <div class="col-12 text-center pt-4 mt-1">
                        <h6 class="m-meal-heading mb-0">
                            <a data-toggle="modal" data-target=".package-info" class="cursor-pointer"><i
                                    class="fa fa-info-circle mr-2"></i></a>
                            {{ $customer->package->name }} Package
                        </h6>

                    </div>






                    <!-- carousal of meals -->
                    <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-3 pos-relative">


                        <!-- scroll right and left buttons -->
                        <div class="carousal-buttons-wrapper">

                            <!-- scroll left button -->
                            <button id="horizontal-carousal-button-left-1"
                                class="carousal-scroll-button-left btn btn-primary d-none">
                                <i class="fa fa-chevron-left"></i>
                            </button>

                            <!-- scroll right button -->
                            <button id="horizontal-carousal-button-right-1"
                                class="carousal-scroll-button-right btn btn-primary d-none">
                                <i class="fa fa-chevron-right"></i>
                            </button>

                        </div>

                        <!-- carousal -->
                        <div id="horizontal-carousal-1" class="custom-horizontal-carousal" tabindex=0
                            style="overflow-x: auto;">

                            @if ($customer->meals)
                                
                            @foreach ($customer->meals->where('date', date('Y-m-d'))->whereNotNull('package_plan_meal_id') as $customerMeal)
                                

                            <!-- card  -->
                            <label for="" id="meal-breakfast-label-1" class="card-group-row__col carousal-cols">


                                <input type="checkbox" class="meal-breakfast" name="meal-breakfast-1" id="meal-breakfast-1">


                                <div
                                    class="card card-group-row__card text-center o-hidden card--raised custom-schedule-cards ">

                                    <div class="card-body d-flex flex-column">
                                        <div class=" mb-16pt">


                                            <span
                                                class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/customer/images/stories/spicy.png') }}">
                                            </span>
                                            <h4 class="mb-8pt carousal-card-heading">{{ $customerMeal->meal->meal->meal->name }}
                                            </h4>
                                            <h6 class="mb-0 text-warning"> {{ $customerMeal->mealType->name }} </h6>
                                            <hr class="mt-2">
                                            <h5>Ingredients</h5>


                                            <div style="display: block ruby;">

                                                
                                                    
                                                <div>
                                                    
                                                    @foreach ($customerMeal->meal->meal->components as $component)

                                                    <p class="text-70 mb-0 d-inline-block mx-2" style="font-weight: bold;">

                                                        {{ $component->component->name }}<br>
                                                        <span class="badge badge-notifications badge-secondary">({{ $component->quantity }}) Gram</span>

                                                    </p>

                                                    @endforeach
                                                </div>

                                                

                                            </div>



                                        </div>

                                    </div>


                                </div>

                            </label>
                            <!-- end card -->


                            @endforeach
                            {{-- end foreach --}}



                            @endif
                            {{-- end customer meals check --}}


                        </div>
                        <!-- end carousal -->




                    </div>
                    <!-- end carousal of meals -->





                    <!-- delivery info -->
                    <div class="col-12 mt-4 mb-5">

                        <div class="row bg-white py-4 mx-0" style="border-radius: 5px;">

                            <div class="col-12">
                                <h5 class="text-center" style="text-decoration: underline;">Delivery informations</h5>
                            </div>



                            
                            <div class="col-6">
                                <h6 class="text-center">Delivery No.<br><span class="text-primary">{{ (!empty($delivery) ? "# ".$delivery->id : "-") }}</span></h6>
                            </div>

                            <div class="col-6">
                                <h6 class="text-center">Delivery time<br><span class="text-primary">{{ $customer->deliveryTime->timing }}</span></h6>
                            </div>

                            <div class="col-6">
                                <h6 class="text-center">Delivery Company<br><span class="text-primary">{{ (!empty($delivery->company) ? $delivery->company->name : "-") }}</span>
                                </h6>
                            </div>

                            <div class="col-6">
                                <h6 class="text-center">Driver<br><span class="text-primary">{{ (!empty($delivery->driver) ? $delivery->driver->name : "-") }}</span></h6>
                            </div>

                            <div class="col-12">
                                <h6 class="text-center">Status<br><span class="text-primary">{{ (!empty($delivery->status) ? ucwords($delivery->status)  : "-") }}</span></h6>
                            </div>

                            <div class="col-6 text-center mt-2">
                                <a class="btn btn-sm btn-primary w-100" href="tel:+971 55 3942 321">
                                    <i class="fa fa-phone mr-2"></i>Call
                                </a>

                            </div>

                            <div class="col-6 text-center mt-2">
                                <a class="btn btn-sm btn-outline-primary w-100" href="#">
                                    <i class="fa fa-comment mr-2"></i>Chat
                                </a>
                            </div>





                        </div>
                    </div>

                </div>
                <!-- end outer row -->


            </div>
        </div>
        <!-- breadcrubms end -->



        <div class="container page__container">
            <div class="page-section">




            </div>
        </div>





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

@endsection







{{-- modals --}}
@section('modals')
    
<!-- package modal -->
<div class="modal fade package-info" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="letter-spacing: 0.4px !important;">Package
                    Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-12">

                        <p class="mb-0" style="color:dimgrey;">{{ $customer->package->desc }}</p>

                    </div>


                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end package modal -->


@endsection