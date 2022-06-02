@extends('layouts.kitchen-login')




@section('content')


<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content"
        style="background-image: url('{{ asset('assets/kitchen/images/bgs/healthy-food-background-U5A6RT9.jpg') }}') !important; background-size: cover;">

        <!-- Header -->

        <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body" id="default-navbar"
            data-primary>

           
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand mr-16pt">
                <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="{{ asset('assets/admin/images/logo/RMS.png') }}" width="100">


            </a>


            <div class="flex"></div>

            <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt" style="white-space: nowrap;">
                <div class="nav-item dropdown d-none d-sm-flex">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EN</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header"><strong>Select language</strong></div>
                        <a class="dropdown-item active" href="">English</a>
                        <a class="dropdown-item" href="">French</a>
                        <a class="dropdown-item" href="">Romanian</a>
                        <a class="dropdown-item" href="">Spanish</a>
                    </div>
                </div>
            </div>



            <div class="dropdown border-left-2 navbar-border">
                <button class="navbar-toggler navbar-toggler-custom d-block" type="button" data-toggle="dropdown"
                    data-caret="false">
                    <i class="fa fa-door-closed" style=" font-size: 22px; "></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header"><strong>Select Portal</strong></div>
                <a href="{{route('admin.login')}}" class="dropdown-item d-flex align-items-center">

                        <div class="avatar avatar-sm mr-8pt">

                            <span class="avatar-title rounded bg-primary">AD</span>

                        </div>

                        <small class="ml-4pt flex">
                            <span class="d-flex flex-column">
                                <strong class="text-black-100">Admin</strong>
                                <span class="text-black-50">Login As Administrator</span>
                            </span>
                        </small>
                    </a>
                    <a href="" class="dropdown-item active d-flex align-items-center">

                        <div class="avatar avatar-sm mr-8pt">

                            <span class="avatar-title rounded bg-accent">KT</span>

                        </div>

                        <small class="ml-4pt flex">
                            <span class="d-flex flex-column">
                                <strong class="text-black-100">Kitchen</strong>
                                <span class="text-black-50">Login As Kitchen Team</span>
                            </span>
                        </small>
                    </a>
                </div>
            </div>

        </div>

        <!-- // END Header -->

        <div class=" pt-32pt pt-sm-64pt pb-32pt px-0 bg-image-login">
            <div class="container-fluid page__container card p-5"
                style="background-color: transparent !important; border:none !important; box-shadow:none !important;">


                <div class="col-12 col-lg-8 offset-lg-2 py-3 bg-white"
                    style="border-radius:5px; background-color: rgba(255, 255, 255, 0.603) !important;">


                    <div class="col-sm-12 text-center d-none d-md-block">
                        <img class="text-center" src="{{ asset('assets/admin/images/logo/RESTAURANT.png') }}" style="  height: 80px; ">
                    </div>

                    <div class="row px-5  pb-4 pt-3">
                        <div class="col-sm-12 text-center mb-3">
                            <h4 class="text-black mb-2 font-size-sm-17">Welcome To <span
                                    class="font-weight-bolder">HealthRoad</span><br>Restaurant Managment Solution</h4>
                            <p class="mb-2 text-info text-center"
                                style="font-weight: 500; font-size:15; letter-spacing: 1px;">(KITCHEN TEAM)</p>
                        </div>


                        <form action="{{route('kitchen.login.check')}}" method="post" class="col-12 p-0 mx-auto">

                            @csrf
                            <div class="form-group">
                                <label class="form-label labels-login font-size-sm-13" for="email">Email:</label>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Your email address ...">
                            </div>
                            <div class="form-group">
                                <label class="form-label labels-login mt-3 font-size-sm-13"
                                    for="password">Password:</label>
                                <input id="password" name="password" type="password" class="form-control"
                                    placeholder="Your first and last name ...">
                                <p class="text-right mt-3"><a href="#" class="small"
                                        style="color:black; font-weight:500; text-decoration: underline;">Forgot your
                                        password?</a></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-accent px-4">Login</button>
                               
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>




    </div>
    <!-- // END drawer-layout__content -->
</div>



@endsection
