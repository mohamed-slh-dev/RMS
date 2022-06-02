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


                    <!-- general info -->
                    <div class="col-6 mt-4 mb-3">
                        <h6 class="mb-0 font-size-16">Edit Info</h6>
                    </div>

                    <div class="col-6 mt-4 text-right mb-3">
                        <a href="{{ route('customer.profile') }}" class="btn btn-white py-1"><i class="fa fa-chevron-circle-left mr-2"></i>Back</a>
                    </div>


                    <div class="col-12">

                        <form action="{{ route('customer.updateProfile') }}" method="post">
                            @csrf

                            <div class="form-row py-4 edit-profile-row"
                                style="border-radius:5px; box-shadow:0px 0px 3px 0px lightgrey">
                                <div class="col-6 mb-3">
                                    <input type="text" name="fname" id="" placeholder="First Name" value="{{ $customer->fname }}"
                                        class="form-control" required="">
                                </div>

                                <div class="col-6 mb-3">
                                    <input type="text" name="lname" id="" placeholder="Last Name" value="{{ $customer->lname }}"
                                        class="form-control" required="">
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="text" name="phone" id="" placeholder="Phone" value="{{ $customer->phone }}"
                                        class="form-control" required="">
                                </div>


                                <div class="col-12 mb-3">
                                    <input type="text" name="email" id="" placeholder="Email" value="{{ $customer->email }}"
                                        class="form-control" required="">
                                </div>


                                <div class="col-6 mb-3">
                                    <input type="text" name="weight" id="" placeholder="Weight" value="{{ $customer->weight }}" class="form-control" required="">
                                </div>


                                <div class="col-6 mb-3">
                                    <input type="text" name="height" id="" placeholder="Height" value="{{ $customer->height }}" class="form-control" required="">
                                </div>



                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="text" name="address" id="" placeholder="Address"
                                        value="{{ $customer->address }}" class="form-control" required="">
                                </div>


                                <div class="col-6 mb-3">
                                    <input type="text" name="block" id="" placeholder="Block No." value="{{ $customer->block_number }}"
                                        class="form-control" required="">
                                </div>


                                <div class="col-6 mb-3">
                                    <input type="text" name="flat" id="" placeholder="Flat No." value="{{ $customer->flat_number }}"
                                        class="form-control" required="">
                                </div>








                                <div class="col-12 mb-3">
                                    <select name="city" id="" class="form-control custom-select city-select-1" required="">
                                        <optgroup label="City" style="background-color: lightgrey; color:grey">
                                                                                
                                            @foreach ($cities as $city)
                                                @if ($city->id == $customer->city_id)
                                                    <option value="{{ $city->id }}" selected="">{{ $city->name }}</option>
                                                @else
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endif
                                            @endforeach
                                            
                                        </optgroup>
                                    </select>
                                </div>


                                <div class="col-12 mb-4">
                                    <select name="district" id="" class="form-control custom-select district-select-1" required="">
                                        <optgroup label="District" style="background-color: lightgrey; color:grey">
                                            
                                            @foreach ($districts as $district)

                                            @if ($district->id == $customer->district_id)
                                                <option class="city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}" selected="">{{ $district->name }}</option>
                                                    
                                            @elseif ($district->city_id == $customer->city_id)
                                                <option class="city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>

                                            @else

                                                <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>

                                            @endif
                                            
                                            @endforeach

                                        </optgroup>
                                    </select>
                                </div>



                                <div class="col-12 text-center mb-4">
                                    <button class="btn btn-success px-4">
                                        Update
                                    </button>
                                </div>






                            </div>

                        </form>
                        
                    </div>
               
                    <!-- end general info -->




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


{{-- city select from admin --}}
<script src="{{ asset('assets/admin/js/city-select.js') }}"></script>

<!-- package plan js (custom added) -->
<script src="{{ asset('assets/customer/js/customer-mobile.js') }}"></script>


@endsection




{{-- modals --}}
@section('modals')


@endsection