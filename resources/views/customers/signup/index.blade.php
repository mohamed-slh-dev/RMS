<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Signup</title>




    <!-- Select2 -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/admin/css/select2.css') }}" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="{{ asset('assets/admin/css/flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/admin/css/flatpickr-airbnb.css') }}" rel="stylesheet">
    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/admin/css/material-icons.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ asset('assets/admin/css/fontawesome.css') }}" rel="stylesheet">
    <!-- Preloader -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/spinkit.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/admin/css/preloader.css') }}" rel="stylesheet">
    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/admin/css/app.css') }}" rel="stylesheet">
    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="{{ asset('assets/admin/css/dark-mode.css') }}" rel="stylesheet">
    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/jqvmap/jqvmap.min.css') }}" rel="stylesheet">


    <!-- bootstrap -->
    <link type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet">


    <style type="text/css">
        input[type=checkbox] {
            display: none;
        }

        .checkbox label:before {
            border-radius: 3px;
        }



        input[type=checkbox]:checked {
            content: "\2713";
            text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
            font-size: 15px;
            color: #f3f3f3;
            text-align: center;
            line-height: 15px;
        }


        [dir] .flatpickr-input[readonly] {
            padding: 20.5px 12px !important;
        }
    </style>



    <!-- map -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2HIEq1bixHiWwg4t4AyQvElMzApekCQ"></script>
    <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>

    <style type="text/css">
        #map {
            width: 100%;
            height: 480px;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px lightgrey;
        }
    </style>

    <!-- map -->








</head>



<body class="layout-compact layout-sticky-subnav layout-compact">




    {{-- collection pass section --}}
    
    <script>
    var marginArray = @json($margin);
    var cityChargeArray = @json($cityCharge);
    var cityNameArray = @json($cityName);
    
    
    var typeArray = @json($typeName);
    var timingArray = @json($timingArray);
    
    var packagePriceArray = @json($packagePrice);
    var packageNameArray = @json($packageName);
    

    var packageCalsArray = @json($packageCals);
    var packageProteinsArray = @json($packageProteins);
    var packageCarbsArray = @json($packageCarbs);
    var packageFatsArray = @json($packageFats);

    </script>
    
    {{-- end collection pass section --}}




    <!-- preloader -->
    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>







    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content bg-white bg-image pb-4"
            style="background-image: url({{ asset('assets/admin/images/bgs/Dashboard-background.png') }});">

            <!-- Header -->
            <div class="navbar navbar-expand navbar-shadow px-0 py-2  pl-lg-16pt navbar-light bg-body"
                id="default-navbar" data-primary>


                <div class="row w-100 align-items-center">
                    <div class="col-4 col-lg-4 text-left">

                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand mr-16pt">
                            <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="{{ asset('assets/admin/images/logo/RESTAURANT.png') }}"
                                width="100">
                        </a>
                    </div>

                    <div class="col-4 col-lg-4 text-center">
                        <h4 class="mb-0 text-uppercase">Plan Signup</h4>
                    </div>


                </div>



            </div>
            <!-- // END Header -->



            <form id="regForm" action="{{route('admin.newCustomer')}}" method="POST">
                @csrf

           
            <!-- panel 1 inputs -->
            <div class="container-fluid mt-5">


                <div class="row">


                    <!-- tab 1 -->
                    <div id="tab-1" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Please fill your contact info.</h4>
                            </div>




                            <!-- fname -->
                            <div class="col-5 offset-1 mb-2">
                                <input name="fname" type="text" class="form-control signup-input text-center mb-4 tab-field-1"
                                    placeholder="First Name">
                            </div>

                            <!-- lname -->
                            <div class="col-5 mb-2">
                                <input name="lname" type="text" class="form-control signup-input text-center mb-4 tab-field-1"
                                    placeholder="Last Name">
                            </div>





                            <!-- email -->
                            <div class="col-5 offset-1 mb-2">
                                <input name="email" type="email" class="form-control signup-input text-center mb-4 tab-field-1"
                                    placeholder="E-mail">
                            </div>

                             <!-- password -->
                             <div class="col-5  mb-2">
                                <input name="password" type="password" class="form-control signup-input text-center mb-4 tab-field-1"
                                    placeholder="Password">
                            </div>

                            <!-- phone -->
                            <div class="col-5 offset-1 mb-2">
                                <input name="phone" type="text" class="form-control signup-input text-center mb-4 tab-field-1"
                                    placeholder="Mobile Number">
                            </div>

                                <!-- hear from us -->
                                <div class="col-5 mb-2">
                                    <select class="custom-select form-control signup-select mb-4 tab-field-1" name="" id=""
                                        style="background-color:rgb(250, 250, 250) !important">
                                        <option value="" class="d-none" selected="">How you heard about us</option>
    
                                        <option value="11">Friend</option>
                                        <option value="2">Family</option>
                                        <option value="3">Doctor</option>
                                    </select>
                                </div>




                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end tab 1 -->




                    <!-- tab 2 -->
                    <div id="tab-2" class="col-12 tab">
                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Tell us about you.</h4>
                            </div>



                            <!-- Height -->
                            <div class="col-5 offset-1 mb-3">
                                <label for="" class="signup-label">HEIGHT (M)</label>
                                <input name="height" type="number" class="form-control signup-input text-center mb-4 tab-field-2">
                            </div>

                            <!-- weight -->
                            <div class="col-5 mb-3">
                                <label for="" class="signup-label">WEIGHT (KG)</label>
                                <input name="weight" type="number" class="form-control signup-input text-center mb-4 tab-field-2">
                            </div>





                            <!-- birthdate -->
                            <div class="col-5 offset-1 mb-3">
                                <label for="" class="signup-label">BIRTH DATE</label>
                                <input name="dateofbirth" type="date" class="form-control signup-select signup-date text-center mb-4 tab-field-2">
                            </div>



                            <!-- gender -->
                            <div class="col-5 mb-3">

                                <label class="signup-label">GENDER</label>

                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <label for="male-radio" id="male-radio-label"
                                            class="signup-radiobuttons gender-radiobuttons active">Male</label>
                                        <input class="d-none" value="male" type="radio" checked name="gender" id="male-radio">
                                    </div>

                                    <div class="col-6">
                                        <label for="female-radio" id="female-radio-label"
                                            class="signup-radiobuttons gender-radiobuttons">Female</label>
                                        <input class="d-none" value="femail" type="radio" name="gender" id="female-radio">
                                    </div>
                                </div>

                            </div>
                            <!-- end gender -->






                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 2 -->





                    <!-- tab 3 -->
                    <div id="tab-3" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Thanks, what is your goal?</h4>
                            </div>


                            <!-- goal options 1 : fat loss -->
                            <div class="col-10 offset-1 goal-options-col mb-4">

                                <input class="d-none" type="radio" name="goal-options" id="fat-loss" checked>

                                <label for="fat-loss" class="goal-options-labels active d-block">

                                    <!-- active dot -->
                                    <i class="fa fa-circle option-active-circle"></i>


                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <svg style="width: 65px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 51.22 48.16">
                                                <title>health</title>
                                                <path
                                                    d="M48.9,5.54a53.45,53.45,0,0,0-44.8,0,5.55,5.55,0,0,0-3.15,5.8L5.36,41.76a8.21,8.21,0,0,0,8.12,7h26a8.21,8.21,0,0,0,8.12-7l4.42-30.42A5.55,5.55,0,0,0,48.9,5.54Zm1.17,5.52L45.66,41.47a6.24,6.24,0,0,1-6.14,5.31h-26a6.24,6.24,0,0,1-6.14-5.31L2.93,11.06a3.54,3.54,0,0,1,2-3.7,51.45,51.45,0,0,1,43.12,0A3.54,3.54,0,0,1,50.07,11.06Zm-29.74,4.8H32.67a2.22,2.22,0,0,0,2.21-2.05l.42-5.73a2,2,0,0,0-1.21-2A18.7,18.7,0,0,0,32,5.31a1,1,0,0,0-.35-.1,19,19,0,0,0-5.07-.72h-.21a19,19,0,0,0-5.07.72,1,1,0,0,0-.35.1,18.8,18.8,0,0,0-2.06.76,2,2,0,0,0-1.2,2l.42,5.73A2.22,2.22,0,0,0,20.33,15.86Zm5.62-2,.21-2a1,1,0,0,1,.29-.58l0,0h0a.91.91,0,0,1,.29.56l.26,2Zm-6.24-6,.83-.34.19,2.33a1,1,0,0,0,1,.92h.08a1,1,0,0,0,.91-1.08L22.49,7a16.94,16.94,0,0,1,3-.45v.7a1,1,0,0,0,2,0v-.7a17,17,0,0,1,3,.45l-.23,2.77a1,1,0,0,0,.91,1.08h.08a1,1,0,0,0,1-.92l.19-2.33.83.34a0,0,0,0,1,0,0l-.42,5.73a.21.21,0,0,1-.21.2H29l-.3-2.27a2.92,2.92,0,0,0-.93-1.78l0,0a2,2,0,0,0-2.68,0,2.91,2.91,0,0,0-.94,1.85l-.23,2.22H20.33a.21.21,0,0,1-.21-.2L19.7,7.93A0,0,0,0,1,19.71,7.91ZM20.63,37v0c0-.05-1.45-5.14-.13-8.77,1.25-3.41.92-7-.82-9.25a4.77,4.77,0,0,0-4.4-1.9,6.51,6.51,0,0,0-4.59,3.28,1,1,0,0,0,1.7,1.05A4.56,4.56,0,0,1,15.5,19a2.82,2.82,0,0,1,2.6,1.15c1.33,1.68,1.53,4.56.52,7.33-1.51,4.13-.07,9.46.08,10l.52,2.2a2.62,2.62,0,0,1-4.84,1.88l-.07-.13a27.77,27.77,0,0,1-3.38-10.51,23.78,23.78,0,0,1-.14-3.35,1,1,0,0,0-2-.07,25.67,25.67,0,0,0,.15,3.64,29.76,29.76,0,0,0,3.62,11.26l.07.13a4.62,4.62,0,0,0,8.54-3.31ZM37.72,17a4.77,4.77,0,0,0-4.4,1.9c-1.75,2.21-2.07,5.84-.82,9.25,1.32,3.61-.1,8.67-.13,8.77v0l-.53,2.22a4.62,4.62,0,0,0,8.54,3.3l.07-.13A29.76,29.76,0,0,0,44.07,31.1c.44-4.05,0-7.56-1.37-10.14A6.76,6.76,0,0,0,37.72,17Zm4.36,13.88A27.78,27.78,0,0,1,38.7,41.4l-.07.13a2.62,2.62,0,0,1-4.84-1.87l.52-2.2c.15-.53,1.59-5.85.08-10-1-2.77-.81-5.64.52-7.33A2.82,2.82,0,0,1,37.5,19C39.74,19.25,43,22.71,42.08,30.89ZM9.64,25l.17.09.19.06.2,0,.2,0,.19-.06.17-.09.15-.12a1,1,0,0,0,.29-.71,1,1,0,0,0,0-.19,1,1,0,0,0-.06-.19,1,1,0,0,0-.22-.33l-.15-.12-.17-.09-.19-.06a1,1,0,0,0-.39,0l-.19.06-.17.09-.15.12a.94.94,0,0,0-.12.15,1,1,0,0,0-.09.17,1,1,0,0,0-.06.19,1,1,0,0,0,0,.19,1,1,0,0,0,.29.71Z"
                                                    transform="translate(-0.89 -0.62)" fill="#757575" />
                                            </svg>
                                        </div>

                                        <div class="col-9 pl-3">
                                            <h4>Fat Loss & Tone</h4>
                                            <p class="mb-0">- 20% Calorie deficit</p>
                                        </div>

                                    </div>
                                </label>

                            </div>
                            <!-- end goal 1 option -->








                            <!-- goal options 2 : build muscle -->
                            <div class="col-10 offset-1 goal-options-col mb-4">

                                <input class="d-none" type="radio" name="goal-options" id="build-muscle">

                                <label for="build-muscle" class="goal-options-labels d-block">

                                    <!-- active dot -->
                                    <i class="fa fa-circle option-active-circle"></i>

                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <svg style="width:65px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 51.46 47.15">
                                                <title>muscle</title>
                                                <path
                                                    d="M44.84,17.78h-.37a13.89,13.89,0,0,0-12.32,7.49,11.64,11.64,0,0,0-12.37,1.68,44.33,44.33,0,0,0-.51-5.3,31.65,31.65,0,0,1-.41-3.87h5.42a3.2,3.2,0,0,0,2.27-.94l4.29-4.29A3.2,3.2,0,0,0,30.9,8.1,3.2,3.2,0,0,0,30,3.65l-2.6-1.73A7.61,7.61,0,0,0,23.18.63a11.73,11.73,0,0,0-8.35,3.46,45.7,45.7,0,0,0-9.61,14C2.49,24.28,1.1,28.88,1.1,31.71a14.89,14.89,0,0,1-.42,3.92A4.75,4.75,0,0,0,3,41a51.29,51.29,0,0,0,25.4,6.74H29.9a51.12,51.12,0,0,0,16.19-2.63l.75-.25A7.49,7.49,0,0,0,52,37.79V25.29A7.47,7.47,0,0,0,44.84,17.78Zm5,20a5.35,5.35,0,0,1-3.67,5.08l-.75.25A49,49,0,0,1,29.9,45.64H28.35A49.13,49.13,0,0,1,4,39.18a2.62,2.62,0,0,1-1.27-3,16.92,16.92,0,0,0,.5-4.5c0-2.5,1.36-6.92,3.94-12.78A43.55,43.55,0,0,1,16.35,5.6a9.6,9.6,0,0,1,6.83-2.83,5.48,5.48,0,0,1,3,.92l2.6,1.73A1.07,1.07,0,0,1,29,7.08L25.57,10.5a1.2,1.2,0,0,1-2-.66,1.19,1.19,0,0,1,.34-1l1-1A1.07,1.07,0,0,0,23.33,6.3l-1,1a3.34,3.34,0,0,0,.87,5.36A3.35,3.35,0,0,0,27.08,12l2.35-2.34a1.06,1.06,0,0,1-.1,1.36L25,15.32a1.08,1.08,0,0,1-.76.31h-5a1.61,1.61,0,0,1,.22-.31A1.07,1.07,0,0,0,18,13.8c-1.75,1.75-1.33,4.72-.83,8.15a38.68,38.68,0,0,1,.52,5.47c0,4.41-3.34,5.35-3.48,5.39a1.07,1.07,0,0,0,.53,2.08,7,7,0,0,0,4.44-4.08l.05,0a9.65,9.65,0,0,1,14.9-1.62,1.07,1.07,0,0,0,1.51-1.52A11.86,11.86,0,0,0,34,26.32a11.76,11.76,0,0,1,10.45-6.4h.32a5.31,5.31,0,0,1,5,5.36v12.5Z"
                                                    transform="translate(-0.51 -0.63)" fill="#757575" />
                                            </svg>
                                        </div>

                                        <div class="col-9 pl-3">
                                            <h4>Build Muscle & Strength</h4>
                                            <p class="mb-0">- 20% Calorie surplus</p>
                                        </div>

                                    </div>
                                </label>

                            </div>
                            <!-- end goal 2 option -->






                            <!-- goal options 3 : general health -->
                            <div class="col-10 offset-1 goal-options-col mb-4">

                                <input class="d-none" type="radio" name="goal-options" id="general-health">

                                <label for="general-health" class="goal-options-labels d-block">

                                    <!-- active dot -->
                                    <i class="fa fa-circle option-active-circle"></i>

                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 33.98 55.02">
                                                <title>energy</title>
                                                <path
                                                    d="M30.91,4.13V1.38A.89.89,0,0,0,30,.49H5a.89.89,0,0,0-.89.89V4.13A4.45,4.45,0,0,0,.51,8.48v39a4.41,4.41,0,0,0,1.82,3.55h0v3.55a.89.89,0,0,0,.89.89H31.81a.89.89,0,0,0,.89-.89V51.07h0a4.41,4.41,0,0,0,1.82-3.55v-39A4.45,4.45,0,0,0,30.91,4.13Zm-25-1.86H29.13V4H5.87Zm25,51.47H4.09V51.87A4.5,4.5,0,0,0,5,52H30a4.5,4.5,0,0,0,.89-.09Zm1.79-6.21A2.68,2.68,0,0,1,30,50.18H5A2.68,2.68,0,0,1,2.3,47.52v-.89H32.7Zm0-2.66H2.3V11.14H32.7Zm0-35.5H2.3V8.48A2.68,2.68,0,0,1,5,5.82H30A2.68,2.68,0,0,1,32.7,8.48ZM10.35,29.77h4l-3.9,8.51a.88.88,0,0,0,.3,1.1.9.9,0,0,0,1.14-.1L25.29,26a.88.88,0,0,0,.19-1,.89.89,0,0,0-.83-.55H19.17l4.44-6.61a.88.88,0,0,0,0-.91.9.9,0,0,0-.79-.47H13.92a.89.89,0,0,0-.85.63L9.49,28.63a.88.88,0,0,0,.13.79A.9.9,0,0,0,10.35,29.77Zm4.24-11.54H21.2l-4.44,6.61a.88.88,0,0,0,0,.91.9.9,0,0,0,.79.47h5l-8.4,8.34,2.43-5.31a.88.88,0,0,0-.06-.85.9.9,0,0,0-.75-.41H11.56Z"
                                                    transform="translate(-0.51 -0.49)" fill="#757575" />
                                            </svg>
                                        </div>

                                        <div class="col-9 pl-3">
                                            <h4>General Health</h4>
                                            <p class="mb-0">- Maintenance calories</p>
                                        </div>

                                    </div>
                                </label>

                            </div>
                            <!-- end goal 3 option -->


                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 3 -->





                    <!-- tab 4 -->
                    <div id="tab-4" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">How active are you?</h4>
                            </div>


                            <!-- card 1 -->
                            <div class="col-5 offset-1 mb-3">

                                <div class="row align-items-center">

                                    <!-- input -->
                                    <input type="radio" value="I spend most of my day sitting down" name="activity" class="d-none" id="not-active-option"
                                        checked>

                                    <label for="not-active-option" class="col-11 offset-1 active-option-col active">
                                        <h5 class="text-center mt-4">Not Active</h5>
                                        <p class="mb-0">I spend most of my day sitting down</p>
                                        <span></span>
                                    </label>

                                </div>

                            </div>

                            <!-- card 2 -->
                            <div class="col-5 mb-3">

                                <div class="row align-items-center">

                                    <!-- input -->
                                    <input type="radio" value="Up to 3 hours of exercise/week or less than 5,000 steps daily" name="activity" class="d-none" id="somehwat-active-option">

                                    <label for="somehwat-active-option" class="col-11 offset-1 active-option-col">
                                        <h5 class="text-center mt-4">Somewhat Active</h5>
                                        <p class="mb-0">Up to 3 hours of exercise/week or less than 5,000 steps daily
                                        </p>
                                        <span></span>
                                    </label>

                                </div>

                            </div>







                            <!-- card 3 -->
                            <div class="col-5 offset-1 mb-3">

                                <div class="row align-items-center">

                                    <!-- input -->
                                    <input type="radio" value="Between 4-6 hours of exercise/week or between 5,000 and 10,000
                                    steps daily" name="activity" class="d-none" id="quite-active-option">

                                    <label for="quite-active-option" class="col-11 offset-1 active-option-col">
                                        <h5 class="text-center mt-4">Quite Active</h5>
                                        <p class="mb-0">Between 4-6 hours of exercise/week or between 5,000 and 10,000
                                            steps daily</p>
                                        <span></span>
                                    </label>

                                </div>

                            </div>

                            <!-- card 4 -->
                            <div class="col-5 mb-3">

                                <div class="row align-items-center">

                                    <!-- input -->
                                    <input type="radio" value="7+ hours of exercise/week or more than 10,000 steps daily" name="activity" class="d-none" id="very-active-option">

                                    <label for="very-active-option" class="col-11 offset-1 active-option-col">
                                        <h5 class="text-center mt-4">Very Active</h5>
                                        <p class="mb-0">7+ hours of exercise/week or more than 10,000 steps daily</p>
                                        <span></span>
                                    </label>

                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 4 -->







                    <!-- tab 5 -->
                    <div id="tab-5" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Choose your dietary preference</h4>
                            </div>


                            <!-- dietary 1 -->
                            <label id="dietary-label-1" for="dietary-standard-radiobutton"
                                class="col-12 mb-4 dietary-labels active">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-standard-radiobutton" checked
                                    class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/everything.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Standard</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-standard" class="btn btn-none dietary-buttons active">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-standard-parag" class="col-8 offset-2 text-center dietary-parags"
                                        style="height:126px">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary -->








                            <!-- dietary 2 -->
                            <label id="dietary-label-2" for="dietary-glute-radiobutton"
                                class="col-12 mb-4 dietary-labels">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-glute-radiobutton" class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/gluten-free.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Gluten Free / Dairy Free</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-glute" class="btn btn-none dietary-buttons">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-glute-parag" class="col-8 offset-2 text-center dietary-parags">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary -->












                            <!-- dietary 3 -->
                            <label id="dietary-label-3" for="dietary-vegan-radiobutton"
                                class="col-12 mb-4 dietary-labels">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-vegan-radiobutton" class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/vegan.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Vegan and Plant Based</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-vegan" class="btn btn-none dietary-buttons">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-vegan-parag" class="col-8 offset-2 text-center dietary-parags">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary 3 -->








                            <!-- dietary 4 -->
                            <label id="dietary-label-4" for="dietary-vegetarian-radiobutton"
                                class="col-12 mb-4 dietary-labels">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-vegetarian-radiobutton"
                                    class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/pescatarian.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Pescatarian Vegetarian</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-vegetarian" class="btn btn-none dietary-buttons">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-vegetarian-parag"
                                        class="col-8 offset-2 text-center dietary-parags">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary 4 -->









                            <!-- dietary 5 -->
                            <label id="dietary-label-5" for="dietary-paleo-radiobutton"
                                class="col-12 mb-4 dietary-labels">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-paleo-radiobutton" class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/paleo.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Paleo</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-paleo" class="btn btn-none dietary-buttons">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-paleo-parag" class="col-8 offset-2 text-center dietary-parags">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary 5 -->









                            <!-- dietary 6 -->
                            <label id="dietary-label-6" for="dietary-fodmap-radiobutton"
                                class="col-12 mb-4 dietary-labels">

                                <!-- radiobutton -->
                                <input type="radio" name="dietary-option" id="dietary-fodmap-radiobutton"
                                    class="d-none">


                                <div class="row dietary-row align-items-center">


                                    <div class="col-4 text-center">
                                        <img src="{{ asset('assets/admin/images/icon/lowfoodmap.svg') }}" alt="">
                                    </div>

                                    <div class="col-4 text-center">
                                        <h5 class="mb-0">Low-Fodmap</h5>
                                    </div>

                                    <!-- button info -->
                                    <div class="col-4 text-center">
                                        {{-- <button id="dietary-fodmap" class="btn btn-none dietary-buttons">
                                            <i class="fa fa-info-circle"></i>
                                        </button> --}}
                                    </div>

                                    <!-- descr hidden -->
                                    <div id="dietary-fodmap-parag" class="col-8 offset-2 text-center dietary-parags">
                                        <hr class="w-25">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut
                                            doloribus eligendi omnis impedit numquam qui consectetur, nam tempore quod
                                            officia ratione veniam iusto optio mollitia facere fugiat. Aliquid, rem.</p>
                                    </div>
                                </div>
                            </label>
                            <!-- end dietary 6 -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 5 -->







                    <!-- tab 6 -->
                    <div id="tab-6" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Choose your monthly package</h4>
                            </div>


                            {{-- <div class="col-12 text-center mb-3">
                                <h6>Daily calories require: <span id="required-cal-val"
                                        class="text-success text-decoration-underline">1480</span></h6>
                            </div> --}}



                            <div class="col-12">

                                <div class="row">

                                    @php
                                        $tmpcounter = 1;
                                    @endphp

                                    @foreach ($packages as $package)
                                        <div class="col-4 text-center mb-3">

                                        @if ($tmpcounter == 1)
                                            <label for="lean-package-checkbox-{{$package->id}}" class="package-labels active">
                                            
                                                <!-- checkbox -->
                                                <input type="radio" name="customer_package" id="lean-package-checkbox-{{$package->id}}" value="{{$package->id}}"
                                                    class="d-none summary-packageid" checked="">
                                        @else

                                            <label for="lean-package-checkbox-{{$package->id}}" class="package-labels">
    
                                                <!-- checkbox -->
                                                <input type="radio" name="customer_package" id="lean-package-checkbox-{{$package->id}}" value="{{$package->id}}"
                                                    class="d-none summary-packageid">
                                            
                                        @endif
                                        
                                            


                                                
                                                @php
                                                $tmpcounter++;
                                                @endphp


                                                <img src="{{ asset('assets/admin/images/packages/'.$package->img) }}" alt="">
    
                                                <h5 class="mx-2" style="height:40px; font-size:17px; overflow:hidden;">{{$package->name}}</h5>
                                                
    
                                                <div class="row mt-4 mx-2">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid lightgrey; border-bottom: 1px solid lightgrey;">
                                                        <label class="form-label">Kcals</label>
                                                        <h5 style="font-size: 15px;">({{$package->cals}})</h5>
                                                    </div>
                                                    <div class="col-6" style=" border-bottom: 1px solid lightgrey; ">
                                                        <label class="form-label">Protein</label>
                                                        <h5 style="font-size: 15px;">({{$package->proteins}})</h5>
                                                    </div>
    
                                                    <div class="col-6" style="border-right: 1px solid lightgrey;">
                                                        <label class="form-label mt-3">Carbo.</label>
                                                        <h5 style="font-size: 15px;">({{$package->carbs}})</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label mt-3">Fats</label>
                                                        <h5 style="font-size: 15px;">({{$package->fats}})</h5>
                                                    </div>
    
                                                </div>
    
                                            </label>
    
                                        </div>
                                        <!-- end package -->
                                    @endforeach



                                </div>
                                <!-- end row -->


                            </div>
                            <!-- end col 12 -->



                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 6 -->











                    <!-- tab 7 -->
                    <div id="tab-7" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4 pb-3">
                                <h4 style="font-size: 26px;">Complete your package info</h4>
                            </div>



                            <div class="col-12">
                                <div class="row">


                                    <!-- days -->
                                    <div class="col-4">

                                        <h6 class="text-center mb-4 text-uppercase">Delivery Days</h6>


                                        <!-- 1 -->
                                        <label
                                        @if ((array_key_exists('Sat', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-1">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Saturday
                                            <input id="day-1" type="checkbox" name="saturday" value="saturday" class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>


                                        <!-- 2 -->
                                        <label   @if ((array_key_exists('Sun', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-2">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Sunday
                                            <input id="day-2" name="sunday" value="sunday"  type="checkbox"  class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>

                                        <!-- 3 -->
                                        <label   @if ((array_key_exists('Mon', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-3">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Monday
                                            <input name="monday" value="monday"  id="day-3" type="checkbox" class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>


                                        <!-- 4 -->
                                        <label   @if ((array_key_exists('Tus', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-4">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Tuesday
                                            <input name="tuesday" value="tuesday"  id="day-4" type="checkbox" class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>


                                        <!-- 5 -->
                                        <label   @if ((array_key_exists('Wed', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-5">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Wednesday
                                            <input id="day-5" type="checkbox" name="wednesday" value="wednesday"  class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>


                                        <!-- 6 -->
                                        <label   @if ((array_key_exists('Thu', $off_days_array)))
                                        class="days-label d-none"
                                        @else
                                        class="days-label"
                                        @endif  for="day-6">
                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                            <i class="fa fa-check-circle text-white"></i>
                                            Thursday
                                            <input id="day-6" type="checkbox" name="thursday" value="thursday"  class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                        </label>

                                          <!-- 6 -->
                                          <label   @if ((array_key_exists('Fri', $off_days_array)))
                                          class="days-label d-none"
                                          @else
                                          class="days-label"
                                          @endif  for="day-7">
                                              <i class="fa fa-circle" style="opacity: 1;"></i>
                                              <i class="fa fa-check-circle text-white"></i>
                                              Thursday
                                              <input id="day-7" type="checkbox"  name="friday" value="friday"   class="d-none tab-field-7 tab-field-7-1 summary-deliverydays">
                                          </label>


                                    </div>
                                    <!-- days -->





                                    <!-- meals -->
                                    <div class="col-8">

                                        <h6 class="text-center mb-4 text-uppercase">Choose the meals <span class="text-success"></span> </h6>

                                        <div class="row">


                                            <!-- note 12 col -->
                                            <div class="col-md-12 mt-3">

                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox pl-2">
                                                        <div class="d-flex">
                                                            <div class="custom-control custom-radio mx-2">
                                                                <input id="radioStacked1" name="choose_meals_plan"
                                                                    type="radio" value="plans"
                                                                    class="custom-control-input" checked="">
                                                                <label for="radioStacked1"
                                                                    class="custom-control-label">Choose From Plans
                                                                    <small>(Meals already set)</small> </label>
                                                            </div>

                                                            <div class="custom-control custom-radio mx-2">
                                                                <input id="radioStacked2" name="choose_meals_plan"
                                                                    type="radio" value="custom"
                                                                    class="custom-control-input">
                                                                <label for="radioStacked2"
                                                                    class="custom-control-label">Choose Custom
                                                                    Meals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Choose plan -->
                                                <div class="form-group row align-items-center mb-4 " id="divide-plan">
                                                    <h6 class="col-form-label col-sm-4 text-uppercase"
                                                        style="font-size: 15px !important;">Choose Plan</h6>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="plan_id">
                                                            @foreach ($meals_plan as $plan)
                                                        <option value="{{$plan->id}}"> {{$plan->name}}
                                                            (
                                                            @foreach ($plan->planMeals as $type)
                                                            
                                                            {{$type->mealType->name}}
                                                            @endforeach 
                                                            )</option>
                                                            @endforeach
                                                        

                                                        </select>
                                                    </div>
                                                </div>

                                                <div id="divide-customer" class=" row mb-4 d-none">

                                                   @foreach ($types as $type)
                                                    <!-- 1 -->
                                                    <div class="col-md-6 col-lg-4">
                                                    <label class="meals-label" for="meal-{{$type->id}}">

                                                            <i class="fa fa-circle" style="opacity: 1;"></i>
                                                            <i class="fa fa-check-circle text-success"></i>
                                                            {{$type->name}}
                                                            <input value="{{$type->id}}" id="meal-{{$type->id}}" type="checkbox" name="{{$type->name}}"
                                                                class="tab-field-7 tab-field-7-2 summary-mealtype">


                                                        </label>
                                                    </div>

                                                    @endforeach

                                            
                                                </div>

                                                <!-- plan duration -->
                                                <div class="form-group row align-items-center mb-4">
                                                    <h6 class="col-form-label col-sm-4 text-uppercase"
                                                        style="font-size: 15px !important;">Start Date</h6>
                                                    <div class="col-sm-8">
    
                                                        <input min="{{$start_date}}" id="date_to"  type="date" class="form-control tab-field-7" name="from">

                                                    </div>

                                                 

                                                </div>
                                                <!-- end plan duration -->




                                                {{-- plan days --}}
                                                <div class="form-group row align-items-center mb-4">
                                                    <h6 class="col-form-label col-sm-4 text-uppercase" style="font-size: 15px !important;">Plan days</h6>
                                                    <div class="col-sm-8">
                                                
                                                        <div class="form-group mt-2">
                                                            <div class="d-flex">
                                                                <div class="custom-control custom-radio mx-2">
                                                                    <input id="20days" name="daysplan" type="radio" class="custom-control-input summary-plandays" value="20"
                                                                        checked="">
                                                                    <label for="20days" class="custom-control-label">20 Days</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mx-2">
                                                                    <input id="24days" name="daysplan" type="radio" class="custom-control-input summary-plandays" value="24">
                                                                    <label for="24days" class="custom-control-label">24 Days</label>
                                                                </div>
                                                        
                                                        
                                                            </div>
                                                        </div>
                                                
                                                    </div>
                                                
                                                
                                                
                                                </div>
                                                {{-- end plan days --}}
                                              



                                                <!-- delivery time -->
                                                <div class="form-group row align-items-center mb-4">
                                                    <h6 class="col-form-label col-sm-4 text-uppercase"
                                                        style="font-size: 15px !important;">Delivery Time</h6>
                                                    <div class="col-sm-8">
                                                        <select name="delivery_time" 
                                                            class="form-control tab-field-7 summary-deliverytime">
                                                            @foreach ($timings as $time)
                                                            <option value="{{$time->id}}" >{{$time->timing}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end delivery time -->



                                                <!-- Exclusions -->
                                                <div class="form-group row align-items-start mb-4">
                                                    <h6 class="col-form-label col-sm-4 text-uppercase"
                                                        style="font-size: 15px !important;">Exclusions</h6>
                                                    <div class="col-sm-8">
                                                        <p>You can exclude any ingredient from your meals if you have an
                                                            intolerance, allergies or dislike.</p>

                                                        <select id="select01" data-toggle="select" multiple
                                                            class="form-control form-control-lg"
                                                             name="excludes[]">
                                                            <option disabled="" class="d-none">Select your ingredients
                                                            </option>

                                                            @foreach ($components as $component)
                                                            <option value="{{$component->id}}">{{$component->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end delivery time -->





                                            </div>

                                        </div>
                                    </div>
                                    <!-- end days -->









                                </div>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 7 -->







                    <div id="tab-8" class="col-12 tab">
                    
                    
                        <div class="row">
                    
                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Your daily intake macros With Health Road <br>
                                    <small>(Total Macros counted by Package type and Number of Meals per Day)</small> </h4>
                            </div>
                    
                    
                            <!-- card 1 -->
                            <div class="col-12 mb-3">
                    
                                <div class="row align-items-center cal-intake-row">
                    
                                    <div class="col-3 offset-3">
                                        <h4 id="summary-cals">-</h4>
                                        <h5 style="border-bottom:2px solid #e5e5e5; padding-bottom:25px; margin-bottom:0px;">Calories</h5>
                                        {{-- <p>Your daily calorie intake requirement based on your personal information,
                                            goal and activity level</p> --}}
                                    </div>


                                    <div class="col-3">
                                        <h4 id="summary-proteins">-</h4>
                                        <h5 style="border-bottom:2px solid #e5e5e5; padding-bottom:25px; margin-bottom:0px;">Proteins</h5>
                                
                                    </div>



                                    <div class="col-3 offset-3">
                                        <h4 id="summary-carbs">-</h4>
                                        <h5 style="border-bottom:2px solid #e5e5e5; padding-bottom:12px; margin-bottom:5px;">Carbohydrates</h5>

                                    </div>


                                    <div class="col-3">
                                        <h4 id="summary-fats">-</h4>
                                        <h5 style="border-bottom:2px solid #e5e5e5; padding-bottom:12px; margin-bottom:5px;">Fats</h5>
                                       
                                    </div>


                                    
                    
                                    
                    
                                </div>
                    
                            </div>
                    
                    
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 8 -->








                    <!-- tab 9 -->
                    <div id="tab-9" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Add to your order (optional)</h4>

                                <p for="all-deliveries-checkbox" class="font-weight-medium font-weight-500 mb-2"
                                    style="letter-spacing: 0.4px !important;">
                                    <input type="checkbox" name="" checked="" id="all-deliveries-checkbox" class="mr-1"
                                        style="display:inline-block">
                                    Include chosen items with all deliveries
                                </p>


                                <p id="custom-deliveries-wrapper" for="all-deliveries-checkbox text-center"
                                    class="font-weight-medium font-weight-500 d-none"
                                    style="letter-spacing: 0.4px !important;">
                                    <i class="fa fa-circle mr-2 text-success" style="font-size:12px;"></i>Number of
                                    deliveries to include
                                    <input type="text" name="" id="all-deliveries-input"
                                        class="ml-2 d-inline form-control text-center" style="width: 75px; height:27px;"
                                        value="1">
                                </p>


                            </div>



                            <div class="col-12">
                                <div class="row align-items-start">


                                    <!-- breakfast meals -->
                                    <div id="carousal-breakfast-col" class="form-group col-sm-12 mt-4 pos-relative">
                                        <label class="form-label">From Our Store</label>


                                        <!-- scroll right and left buttons -->
                                        <div class="carousal-buttons-wrapper">

                                            <!-- scroll left button -->
                                            <button id="horizontal-carousal-button-left-1"
                                                class="carousal-scroll-button-left btn btn-primary">
                                                <i class="fa fa-chevron-left"></i>
                                            </button>

                                            <!-- scroll right button -->
                                            <button id="horizontal-carousal-button-right-1"
                                                class="carousal-scroll-button-right btn btn-primary">
                                                <i class="fa fa-chevron-right"></i>
                                            </button>

                                        </div>

                                        <!-- carousal -->
                                        <div id="horizontal-carousal-1" class="custom-horizontal-carousal" style="min-height:250px;" tabindex=0>






                                        </div>
                                        <!-- end carousal -->



                                    </div>
                                    <!-- end breakfast meals -->




                                </div>
                            </div>


                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 9 -->






                    <!-- tab 10 -->
                    <div id="tab-10" class="col-12 tab">


                        <div class="row">

                            <div class="col-12 text-center mt-4 mb-4">
                                <h4 style="font-size: 26px;">Confirm delivery address</h4>
                            </div>



                            <!-- city -->
                            <div class="col-4 mb-2">
                                <select class="custom-select form-control signup-select mb-4 city-select-1 tab-field-10" name="city" id=""
                                    style="background-color:rgb(250, 250, 250) !important">
                                    
                                    <option selected="" class="d-none">City</option>
                                    
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <!-- District -->
                            <div class="col-4 mb-2">
                                <select class="custom-select form-control signup-select mb-4 district-select-1 tab-field-10" name="district" id=""
                                    style="background-color:rgb(250, 250, 250) !important">
                                    
                                    <option value="" selected="" class="d-none">District</option>
                                    
                                    @foreach ($districts as $district)
                                        <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">
                                        {{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- address -->
                            <div class="col-4 mb-2">
                                <input type="text" name="address" class="form-control signup-input text-center mb-4 tab-field-10"
                                    placeholder="Address">
                            </div>

                            <!-- block no -->
                            <div class="col-4 mb-2">
                                <input type="text" name="block" class="form-control signup-input text-center mb-4 tab-field-10"
                                    placeholder="Block No">
                            </div>


                            <!-- Floor/villa -->
                            <div class="col-4 mb-2">
                                <input type="text" name="floor" class="form-control signup-input text-center mb-4 tab-field-10"
                                    placeholder="Floor/Villa">
                            </div>


                            <!-- Flat no -->
                            <div class="col-4 mb-2">
                                <input type="text" name="flat" class="form-control signup-input text-center mb-4 tab-field-10"
                                    placeholder="Flat No">
                            </div>


                            <div class="col-12">
                                <hr>
                            </div>


                            <div class="col-12 text-center pt-3">

                                <input type="hidden" class="form-control tab-field-10" id="lat_input" name="lat">
                                <input type="hidden" class="form-control tab-field-10" id="long_input" name="long">


                                <h6 class="text-uppercase mb-0">Choose your current address or drag from a nearest
                                    landmak on map</h6><br>
                                <div class="row">

                                    <div class="col-6 text-right">
                                        <button id="currentLoc" type="button" style="width:auto"
                                            class="btn btn-sm px-4 py-2 mb-3 btn-primary profile-location-button showpage-action-buttons text-center">
                                            <i class="fas fa-map-marker-alt mr-2"></i> My Current location</button>
                                    </div>

                                    <div class="col-6 text-left">
                                        <button id="confirmPosition" type="button" style="width:auto"
                                            class="btn btn-sm px-4 py-2 mb-3 btn-warning profile-location-button showpage-action-buttons text-center">Confirm
                                            Position</button>
                                    </div>

                                </div>



                                <!--map div-->
                                <div id="map" class="col-10 offset-1"></div>

                                <br>

                                <div class="col-12 text-center my-4">

                                </div>


                                <br>

                                <div class="col-12 text-center">
                                    <!-- <p><span id="onIdlePositionView"></span></p> -->
                                </div>

                            </div>


                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 10 -->









                    <!-- tab 11 -->
                    <div id="tab-11" class="col-12 tab">


                        <div class="row">

                           


                            <div class="col-12 mb-3">

                                <div class="row">
                                    <div class="col-10 offset-1 text-center">

                                    </div>

                                    <div class="col-10 offset-1"
                                        style="box-shadow: 0px 0px 3px 0px rgb(173, 173, 173); border-radius: 5px;">

                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-12 text-center mb-0">
                                                <img src="{{ asset('assets/admin/images/logo/RESTAURANT.png') }}" alt="" width="100%" height="90"
                                                    style="object-fit: contain;">
                                            </div>
                
                                            <div class="col-12 text-center mt-0 mb-4">
                                                <h4 style="font-size: 24px;" class="text-uppercase">Summary</h4>
                                            </div>
                                            
                                            <div class="col-7">
                                                <h6>Subscription Package</h6>
                                                {{-- <p>For the period of - to -</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" id="summary-packageid"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->




                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Meals Per Day</h6>
                                                {{-- <p>-</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" id="summary-mealtype"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Number Of Days</h6>
                                                {{-- <p>-</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" id="summary-plandays"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Delivery Days</h6>
                                                {{-- <p>-</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" style="text-transform: capitalize !important;" id="summary-deliverydays"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->



                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Delivery Timing</h6>
                                                {{-- <p>-</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" id="summary-deliverytime"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->


                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Delivery Area</h6>
                                                {{-- <p>-</p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black" id="summary-deliverycharge"></p>
                                            </div>
                                        </div>
                                        <!-- end item -->



                                        <!-- item -->
                                        <div class="row summary-items align-items-center">
                                            <div class="col-7">
                                                <h6>Credit Discount</h6>
                                                {{-- <p></p> --}}
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class="text-black font-weight-bold">-</p>
                                            </div>
                                        </div>
                                        <!-- end item -->


                                        <!-- total -->
                                        <div class="row summary-items align-items-center"
                                            style="background-color: #17a2b8; padding:28px 15px;">
                                            <div class="col-7">
                                                <h6 style="color: white; font-size: 21px !important;">Total Amount</h6>
                                                <p></p>
                                            </div>
                                            <div class="col-5 text-left">
                                                <p class=""
                                                    style="text-decoration: underline; font-weight: bold; color:white; font-size: 16px;" id="summary-totalamount">
                                                    - AED</p>
                                            </div>
                                        </div>
                                        <!-- total -->
                                     
                                    </div>


                                </div>
                                <!-- end inner row -->


                            </div>
                            <!-- end col 12 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab 11 -->




                    <!-- tab (tmp) -->
                    <!-- <div class="col-12 tab">
                  
                  
                     <div class="row">
                  
                        <div class="col-12 text-center mt-4 mb-4">
                           <h4 style="font-size: 26px;">Modify your order (optional)</h4>
                        </div>
                  
                  
                     </div> -->
                    <!-- end row -->
                    <!-- </div> -->
                    <!-- end tab tmp -->



                    <!-- next and previous buttons -->
                    <div class="col-12 text-right mt-4">
                        <div class="row">
                            <div class="col-11 text-right">
                                <button class="btn btn-outline-secondary px-5" type="button" id="prevBtn"
                                    onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-info px-5" type="submit" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>

                    </div>




                    <!-- Circles which indicates the steps of the form: -->
                    <div class="col-12 mt-5 text-center">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>





                </div>
            </div>
            <!-- end container -->

        </form>

        </div>
        <!-- // END drawer-layout__content -->




    </div>
    <!-- drawer layout -->











    {{-- js imports --}}
    <script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>
    

    <script>
        $(document).ready(function(){
             $("input[type='radio']").click(function(){
                 var radioValue = $("input[name='choose_meals_plan']:checked").val();
                 if(radioValue == 'plans'){
                  $("#divide-customer").addClass("d-none");
                 $("#divide-plan").removeClass("d-none");
                 }else{
                  $("#divide-plan").addClass("d-none");
                $("#divide-customer").removeClass("d-none");
                 }
             });
         });
    </script>








    <!-- map script -->
    <script>
        // Get element references
         var confirmBtn = document.getElementById('confirmPosition');
        //  var onClickPositionView = document.getElementById('onClickPositionView');
        //  var onIdlePositionView = document.getElementById('onIdlePositionView');

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

         }

         // Listen to button onclick event
         confirmBtn.onclick = function () {
            // Get current location and show it in HTML and put it on inputs
            var location = lp.getMarkerPosition();
            document.getElementById('lat_input').value = location.lat;
            document.getElementById('long_input').value = location.lng;
            


         }

         // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
         google.maps.event.addListener(lp.map, 'idle', function (event) {
            // Get current location and show it in HTML
            var location = lp.getMarkerPosition();
          

         });

    </script>

    <!-- end map script -->



    <script src="{{ asset('assets/admin/dropify/js/dropify.min.js') }}"></script>
    
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap.min.js') }}"></script>
    
    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/admin/vendor/perfect-scrollbar.min.js') }}"></script>
    
    <!-- DOM Factory -->
    <script src="{{ asset('assets/admin/vendor/dom-factory.js') }}"></script>
    
    <!-- MDK -->
    <script src="{{ asset('assets/admin/vendor/material-design-kit.js') }}"></script>
    
    <!-- App JS -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    
    <!-- Highlight.js -->
    <script src="{{ asset('assets/admin/js/hljs.js') }}"></script>
    
    <!-- Global Settings -->
    <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
    
    <!-- Flatpickr -->
    {{-- <script src="{{ asset('assets/admin/vendor/flatpickr/flatpickr.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/js/flatpickr.js') }}"></script> --}}
    
    <!-- Moment.js -->
    <script src="{{ asset('assets/admin/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/moment-range.js') }}"></script>
    
    
    
    <!-- Chart.js -->
    <script src="{{ asset('assets/admin/vendor/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chartjs.js') }}"></script>
    
    <!-- Chart.js Samples -->
    <script src="{{ asset('assets/admin/js/page.analytics-dashboard.js') }}"></script>
    
    
    <!-- Vector Maps -->
    <script src="{{ asset('assets/admin/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vector-maps.js') }}"></script>
    
    <!-- List.js -->
    <script src="{{ asset('assets/admin/vendor/list.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/list.js') }}"></script>
    
    <!-- Tables -->
    <script src="{{ asset('assets/admin/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('assets/admin/js/check-selected-row.js') }}"></script>
    
    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('assets/admin/js/app-settings.js') }}"></script>
    
    <!-- Used for Icons Demo App -->
    <script src="{{ asset('assets/admin/vendor/vue.min.js') }}"></script>
    
    <!-- UI Icons Page JS -->
    <script src="{{ asset('assets/admin/js/app-icons.js') }}"></script>
    
    
    <!-- Select2 -->
    <script src="{{ asset('assets/admin/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.js') }}"></script>




    <!-- customer meals -->
    <script src="{{ asset('assets/admin/js/customer-meals.js') }}"></script>


   


    <!-- package plan -->
    <script src="{{ asset('assets/admin/js/package-plan.js') }}"></script>


    <!-- customer signup js -->
    <script src="{{ asset('assets/admin/js/customer-signup.js') }}"></script>

    <script src="{{ asset('assets/admin/js/city-select.js') }}"></script>

    <!-- customer meals -->
    <script src="{{ asset('assets/admin/js/multistepform.js') }}"></script>

</body>

</html>