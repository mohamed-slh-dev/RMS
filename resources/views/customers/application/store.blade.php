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
                    <a href="{{ route('customer.chat') }}" class="btn btn-outline-primary w-100"><i class="fa fa-comment-dots"></i></a>
                </div>

                <!-- Navbar button -->
                <div class="col">
                    <a href="{{ route('customer.store') }}" class="btn btn-primary w-100"><i class="fa fa-store-alt"></i></a>
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

                <form action="{{ route('customer.storePurchase') }}" method="post">
                @csrf

                    <div class="form-row align-items-center" style="margin-top:0px;">




                        <div class="col-12 text-center mb-1">
                            <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                                style="width:100%; height:60px; object-fit: contain;">
                        </div>





                        <div class="col-12">

                            <!-- carousal -->
                            <div class="row align-items-center mt-3" style="position: relative;">

                                <div class="col-12 text-center mb-3">
                                    <button type="button" class="btn btn-sm py-1 btn-success px-3" data-toggle="modal"
                                        data-target=".purchase-history">
                                        View Purchases
                                    </button>
                                </div>


                                <!-- patch 1 -->
                                <div class="col-6 m-boxes-1">
                                    <div class="m-boxes">
                                        <h6 style="margin-bottom:2px !important;">Next Delivery Items</h6>
                                        <p class="mb-0">{{ (!empty($todayPurchases) ? $todayPurchases->count(): 0) }}</p>
                                    </div>
                                </div>

                                <div class="col-6 m-boxes-1">
                                    <div class="m-boxes">
                                        <h6 style="margin-bottom:2px !important;">Next Delivery Charge</h6>
                                        <p class="mb-0">{{ $todayCharge }}</p>
                                    </div>
                                </div>




                                <div class="col-12">
                                    <hr class="w-50 mb-0">
                                </div>

                            </div>
                            <!-- end carousal -->

                        </div>
                        <!-- end carousal col -->


                        <div class="col-12 text-left mt-4">
                            <h6 class="font-weight-medium font-weight-500"><i class="fa fa-info-circle mr-2"
                                    style="color:#4aa2ee; font-size: 16px; text-transform: unset !important;"></i>This item
                                will be added in
                                your next delivery</h6>
                        </div>


                        @foreach ($items as $item)
                            


                        <!-- item  -->
                        <div class="col-12 mb-4">

                            <div class="m-meal-card">
                                <div class="row py-3 align-items-center px-2">

                                    <!-- image -->
                                    <div class="col-4">
                                        <img width="90" height="90" src="{{ asset('assets/admin/images/store-items/'.$item->img) }}"
                                            style="border-radius: 50%; object-fit: contain;">
                                    </div>

                                    <!-- info + quantity-->
                                    <div class="col-8">

                                        <input type="checkbox" name="itemCheckbox[]" id="item-checkbox-{{ $item->id }}" class="item-checkbox" value="{{ $item->id }}">

                                        <h6 class="ml-1 mb-1 d-inline-block">{{ $item->name }}</h6>
                                        <p class="mb-0 text-secondary font-size-12 font-weight-bold">
                                            <span class="text-primary mr-1">Price: {{ $item->price }} (AED)</span>|<span
                                                class="text-secondary ml-1">Kcal: {{ $item->cals }}</span>
                                        </p>

                                        <hr class="mt-2 mb-2">
                                        <input type="number" disabled="" name="quantity[]" id="item-quantity-{{ $item->id }}" class="form-control" placeholder="Quantity">

                                        <input type="hidden" name="">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end card col 1-->


                        @endforeach
                        {{-- end foreach --}}




                        <div class="col-12 text-center mt-2 mb-5">

                            {{-- if there's next deliveries --}}
                            @if ($customer->deliveries->where('date', '>', date('Y-m-d'))->count() > 0)

                                <button class="btn btn-primary px-4">Confirm Order</button>

                            @else
                                <button class="btn btn-primary disabled px-4" disabled="">Confirm Order</button>
                            @endif
                        </div>



                    </div>
                    <!-- end row -->

                </form>
                {{-- end form --}}

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


    <!-- store (custom added) -->
    <script src="{{ asset('assets/customer/js/customer-store.js') }}"></script>


@endsection







{{-- modals --}}
@section('modals')


    <!-- purcahse history -->
    <div class="modal fade purchase-history" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="letter-spacing: 0.4px !important;">Purchases</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body">
    
                    <div class="row">
    
                        <div class="col-12 text-center">
                            <h6 class="font-size-15 mx-auto">Next Delivery Purchases</h6>
                        </div>
    
                        <div class="col-12">
    
    
                            <div class="table-responsive">
                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <th class="font-size-12">Item</th>
                                        <th class="font-size-12">Price</th>
                                        <th class="font-size-12">Quantity</th>
                                        <th class="font-size-12">Delivery Date</th>
    
                                    </thead>
    
                                    <tbody>

                                        @foreach ($todayPurchases as $todayPurchase)
                                            
                                        <tr>
                                            <td class="font-size-12">{{ $todayPurchase->item->name }}</td>
                                            <td class="font-size-12">{{ $todayPurchase->item->price }}</td>
                                            <td class="font-size-12">{{ $todayPurchase->quantity }}</td>
                                            <td class="font-size-12">{{ $todayPurchase->delivery_date }}</td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                        <!-- end col 12 -->
    
    
    
    
    
    
                        <div class="col-12 mt-4">
    
                            <hr>
    
                            <div class="col-12 text-center">
                                <h6 class="font-size-15">Purchase History</h6>
                            </div>
    
    
                            <div class="table-responsive">
                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <th class="font-size-12">Item</th>
                                        <th class="font-size-12">Price</th>
                                        <th class="font-size-12">Quantity</th>
                                        <th class="font-size-12">Delivery Date</th>
    
                                    </thead>
    
                                    <tbody>

                                        @foreach ($customer->purchases as $purchase)
                                            
                                        <tr>
                                            <td class="font-size-12">{{ $purchase->item->name }}</td>
                                            <td class="font-size-12">{{ $purchase->item->price }}</td>
                                            <td class="font-size-12">{{ $purchase->quantity }}</td>
                                            <td class="font-size-12">{{ $purchase->delivery_date }}</td>
                                        </tr>
    

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                        <!-- end col 12 -->
    
    
                    </div>
                    <!-- end row -->
    
    
                </div>
                <!-- end modal body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end package modal -->



@endsection