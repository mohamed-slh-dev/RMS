@extends('layouts.customer-login')




@section('content')


<!-- layout -->
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">



        <!-- breadcrubms -->
        <div class="border-bottom-2 mt-0 position-relative z-1"
            style="display: inline-flex; align-items: center; height: 100vh;">
            <div class="container-fluid">

                <div class="row align-items-center">

                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/customer/images/logo/RESTAURANT.png') }}" alt=""
                            style="width:100%; height:60px; object-fit: contain;">
                    </div>

                    <div class="col-8 offset-2">
                        <hr>
                    </div>

                


                    <div class="col-10 offset-1">
                        <form action="{{ route('customer.checkUser') }}" method="post">
                            @csrf
                            
                            <div class="form-row">

                                <div class="col-12">
                                    <input placeholder="Email" type="email" name="email" id="" class="form-control" required="">
                                </div>

                                <div class="col-12 mt-3 mb-4">
                                    <input placeholder="Password" type="password" name="password" required="" id="" class="form-control">
                                </div>

                                <div class="col-12 text-center">
                                    <button  class="btn btn-primary px-5">Login</button>
                                </div>

                            </div>
                        </form>
                    </div>



                </div>


            </div>
        </div>
        <!-- breadcrubms end -->





    </div>
    <!-- // END drawer-layout__content -->




    <!-- drawrer menu was here -->

    <!-- drawrer menu end -->



</div>


@endsection
