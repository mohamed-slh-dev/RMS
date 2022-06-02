@extends('layouts.customer')




{{-- content --}}
@section('content')


<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">

        <!-- Header -->

        <div class="container-fluid bg-white py-3"
            style="box-shadow:0px 0px 3px 0px lightgrey; position:fixed; z-index: 1000; bottom:0px; max-width: 100%; height: 8vh;">

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


                    <!-- back -->
                    <div class="col-12 mb-4" style="height: 8vh;">
                        <a href="{{ route('customer.chat') }}" class="btn btn-white py-1 px-4">
                            <i class="fa fa-chevron-circle-left mr-2"></i>Back
                        </a>

                        <hr class="mb-1">
                    </div>


                    <!-- chat room -->
                    <div class="col-12" style="height: 80vh;">

                        <!-- message wrapper -->
                        <div class="chat-message-wrapper">

                            @foreach ($chats as $chat)
                                

                            @if ($chat->type == "customer")
                                <!-- sender -->
                                <div class="chat-message-sender">
                                    <p>{{ $chat->message }}</p>
                                </div>


                            @else

                                <!-- receiver -->
                                <div class="chat-message-receiver">
                                    <p>{{ $chat->message }}</p>
                                </div>

                            @endif


                            


                            @endforeach
                            {{-- end foreach --}}



                        </div>




                        <!-- send message -->
                        <form action="{{ route('customer.sendMessage') }}" method="post">
                            @csrf

                            <div class="row no-gutters mt-3">
                                <div class="col-10">
                                    <input class="form-control" type="text" required="" name="message" id="" placeholder="Message .."
                                        style="border-top-right-radius: 0px; border-bottom-right-radius: 0px; border:1px solid white;">
                                </div>

                                <div class="col-2">
                                    <button class="btn btn-primary w-100"
                                        style="height: 37.5px; border-top-left-radius: 0px; border-bottom-left-radius: 0px;"><i
                                            class="fa fa-chevron-circle-right"></i></button>
                                </div>
                            </div>

                        </form>
                        

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


@endsection





{{-- modals --}}
@section('modals')

@endsection