<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">
    
    <meta name="robots" content="noindex">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">
    
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/kitchen/vendor/perfect-scrollbar.css') }}" rel="stylesheet">
    
    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/material-icons.css') }}" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/fontawesome.css') }}" rel="stylesheet">
    
    <!-- Preloader -->
    <link type="text/css" href="{{ asset('assets/kitchen/vendor/spinkit.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/kitchen/css/preloader.css') }}" rel="stylesheet">
    
    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/app.css') }}" rel="stylesheet">
    
    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/dark-mode.css') }}" rel="stylesheet">
    
    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('assets/kitchen/vendor/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    
    <link type="text/css" href="{{ asset('assets/kitchen/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/kitchen/css/select2.css') }}" rel="stylesheet">
    
    <!-- custom  -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/custom.css') }}" rel="stylesheet">

</head>





<body class="layout-compact layout-sticky-subnav layout-compact">


     {{-- preloader --}}
     <div class="preloader" style="background-color:white">
        <img src="{{ asset('assets/admin/images/loader/preloader.gif') }}" alt="" style="object-fit: contain;">
    </div>









    {{-- drawer layout --}}
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    
    
        {{-- page content --}}
        <div class="mdk-drawer-layout__content page-content">
    


            <!-- Header -->
            <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body" id="default-navbar"
                data-primary>
    
                <!-- Navbar toggler -->
                <button class="navbar-toggler d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">menu</span>
                </button>
    
                <!-- Navbar Brand -->
                <a href="#" class="navbar-brand mr-16pt">
                    <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                        src="{{ asset('assets/kitchen/images/logo/RESTAURANT.png') }}" width="100">
    
                </a>
    
    
    
                <form class="search-form navbar-search d-none d-md-flex mr-16pt" action="compact-index.html">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    <input type="text" class="form-control" placeholder="Search ...">
                </form>
    
                <div class="flex"></div>
    
                <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt" style="white-space: nowrap;">
                    <div class="nav-item dropdown d-none d-sm-flex">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Select language</strong></div>
                            <a class="dropdown-item active" href="">English</a>
                            <a class="dropdown-item" href="">Arabic</a>
    
                        </div>
                    </div>
                </div>
    
                <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                    <div class="nav-item dropdown d-none d-sm-flex">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            <img width="32" height="32" class="rounded-circle mr-8pt"
                                src="{{ asset('assets/admin/images/customers/default.jpg') }}" alt="account" />
                            <span class="flex d-flex flex-column mr-8pt">
                                <span class="navbar-text-100">{{session('chif_name')}}</span>
                                <small class="navbar-text-50">{{session('chif_type')}}</small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Account</strong></div>
                            {{-- <a class="dropdown-item" href="#">Edit Account</a> --}}
                            <a class="dropdown-item" href=" {{route('kitchen.logout')}} ">Logout</a>
                        </div>
                    </div>
    
                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown"
                            data-dropdown-disable-document-scroll data-caret="false">
                            <i class="material-icons">notifications</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">
    
                                    
                                   
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->
    
                   
                </div>
    
            </div>
            <!-- // END Header -->





            {{-- content inside (without page content closing div) --}}
            @yield('content')





            
            {{-- footer --}}
            <div class="js-fix-footer footer border-top-2">
            
                <div class="pb-16pt pb-lg-24pt">
                    <div class="container page__container">
                        <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                            <div class="row">
            
                                <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                    <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
            
                                    <nav class="nav nav-links nav--flush">
                                        <a href="http://Truth.ae" class="nav-link mr-8pt"><img
                                                src="{{ asset('assets/kitchen/images/icon/footer/logo.png') }}" width="100" alt="Facebook"></a>
                                    </nav>
                                </div>
            
                                <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                                    <a href="" class="btn btn-outline-white">English <span
                                            class="icon--right material-icons">arrow_drop_down</span></a>
                                </div>
            
                                <div class="col-md-4 text-md-right">
                                    <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                        <a href="" class="text-white-70 text-underline mr-16pt">Terms</a>
                                        <a href="" class="text-white-70 text-underline">Privacy policy</a>
                                    </p>
                                    <p class="text-white-50 small mb-0">Copyright 2021 &copy; All rights reserved.</p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end footer --}}




        </div>
        {{-- end page content --}}

















        <!-- drawer menu -->
        <div class="mdk-drawer js-mdk-drawer layout-compact__drawer" id="default-drawer">
            <div class="mdk-drawer__content js-sidebar-mini" data-responsive-width="992px" data-layout="compact">
        
                <div class="sidebar sidebar-mini sidebar-dark sidebar-left" data-perfect-scrollbar>
        
                    <!-- Navbar toggler -->
                    <a href="index.html"
                        class="navbar-toggler navbar-toggler-custom w-auto d-flex flex-shrink-0 align-items-center justify-content-center"
                        data-toggle="tooltip" data-title="Switch to Vertical App Layout" data-placement="right"
                        data-boundary="window">
                        <span class="material-icons">sync_alt</span>
                    </a>
        
                    <ul class="nav flex-column flex-nowrap flex-shrink-0 sidebar-menu" id="sidebar-mini-tabs" role="tablist">
                        <li class="sidebar-account mx-4pt mb-16pt">
                            <a href="#sm_account_1" class="p-4pt d-flex align-items-center justify-content-center"
                                data-toggle="tab" role="tab" aria-controls="sm_account_1" aria-selected="true">
                                <img width="32" height="32" class="rounded-circle"  src="{{ asset('assets/admin/images/customers/default.jpg') }}" 
                                    alt="account" />
        
                            </a>
                        </li>
                        <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Dashboards"
                            data-placement="right" data-boundary="window">
                            <a class="sidebar-menu-button" href="
                             {{ route('kitchen.dashboard') }} 
                            ">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>
        
                        <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Deliveries Status"
                            data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="{{ route('kitchen.meals') }}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">ballot</i>
                                <span class="sidebar-menu-text">All Meals</span>
                            </a>
                        </li>
        
        
                        <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Labeling" data-placement="right"
                            data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="{{ route('kitchen.labels') }}">
                                <i class="fa fa-bookmark mb-3" style=" font-size: 24px; "></i>
                                <span class="sidebar-menu-text">Labeling</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Labeling" data-placement="right"
                        data-container="body" data-boundary="window">
                        <a class="sidebar-menu-button" href="{{ route('kitchen.deliveries') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">local_shipping</i>
                            <span class="sidebar-menu-text">Deliveries</span>
                        </a>
                    </li>


                        {{-- @if (session('chif_type') == 'master')
                        <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Labeling" data-placement="right"
                        data-container="body" data-boundary="window">
                        <a class="sidebar-menu-button" href="#">
                            <i class="fa fa-users mb-2" style=" font-size:22px; "></i>
                            <span class="sidebar-menu-text">Assign Chifs</span>
                        </a>
                    </li>
                        @endif --}}
                      
        
        
                    </ul>
                </div>
        
                <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary sidebar-p-t" data-perfect-scrollbar>
                    <div class="tab-content">
        
                        <div class="tab-pane" id="sm_account_1">
                            <div class="sidebar-heading">Account</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_enterprise">
                            <div class="sidebar-heading">Enterprise</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse"
                                        href="#enterprise_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                        Enterprise
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                                                <span class="sidebar-menu-text">ERP Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-crm-dashboard.html">
                                                <span class="sidebar-menu-text">CRM Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-hr-dashboard.html">
                                                <span class="sidebar-menu-text">HR Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-employees.html">
                                                <span class="sidebar-menu-text">Employees</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-staff.html">
                                                <span class="sidebar-menu-text">Staff</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-leaves.html">
                                                <span class="sidebar-menu-text">Leaves</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-departments.html">
                                                <span class="sidebar-menu-text">Departments</span>
                                            </a>
                                        </li>
                                    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_productivity">
                            <div class="sidebar-heading">Productivity</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                        Productivity
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-projects.html">
                                                <span class="sidebar-menu-text">Projects</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-tasks-board.html">
                                                <span class="sidebar-menu-text">Tasks Board</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-tasks-list.html">
                                                <span class="sidebar-menu-text">Tasks List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-kanban.html">
                                                <span class="sidebar-menu-text">Kanban</span>
                                            </a>
                                        </li>
                                      

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_ecommerce">
                            <div class="sidebar-heading">eCommerce</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                        eCommerce
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ecommerce.html">
                                                <span class="sidebar-menu-text">Shop Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-edit-product.html">
                                                <span class="sidebar-menu-text">Edit Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_messaging">
                            <div class="sidebar-heading">Messaging</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                        Messaging
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-messages.html">
                                                <span class="sidebar-menu-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-email.html">
                                                <span class="sidebar-menu-text">Email</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_marketplace">
                            <div class="sidebar-heading">Marketplace</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#marketplace_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assessment</span>
                                        Marketplace
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="marketplace_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-digital-product.html">
                                                <span class="sidebar-menu-text">Digital Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_education">
                            <div class="sidebar-heading">Education</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#education_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                        Education
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="education_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                                                <span class="sidebar-menu-text">Student</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-dashboard.html">
                                                        <span class="sidebar-menu-text">Student Dashboard</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-profile.html">
                                                        <span class="sidebar-menu-text">Student Profile</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-my-courses.html">
                                                        <span class="sidebar-menu-text">My Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-quiz-results.html">
                                                        <span class="sidebar-menu-text">My Quizzes</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-take-course.html">
                                                        <span class="sidebar-menu-text">Take Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-take-lesson.html">
                                                        <span class="sidebar-menu-text">Take Lesson</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-take-quiz.html">
                                                        <span class="sidebar-menu-text">Take Quiz</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-quiz-result-details.html">
                                                        <span class="sidebar-menu-text">Quiz Result</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-path-assessment.html">
                                                        <span class="sidebar-menu-text">Skill Assessment</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-student-path-assessment-result.html">
                                                        <span class="sidebar-menu-text">Skill Result</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#instructor_menu">
                                                <span class="sidebar-menu-text">Instructor</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-dashboard.html">
                                                        <span class="sidebar-menu-text">Instructor Dashboard</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-profile.html">
                                                        <span class="sidebar-menu-text">Instructor Profile</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-courses.html">
                                                        <span class="sidebar-menu-text">Manage Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-quizzes.html">
                                                        <span class="sidebar-menu-text">Manage Quizzes</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-edit-course.html">
                                                        <span class="sidebar-menu-text">Edit Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-edit-quiz.html">
                                                        <span class="sidebar-menu-text">Edit Quiz</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-earnings.html">
                                                        <span class="sidebar-menu-text">Earnings</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled"
                                                        href="compact-instructor-statement.html">
                                                        <span class="sidebar-menu-text">Statement</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_cms">
                            <div class="sidebar-heading">CMS</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                        CMS
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-cms-dashboard.html">
                                                <span class="sidebar-menu-text">CMS Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-posts.html">
                                                <span class="sidebar-menu-text">Posts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_account">
                            <div class="sidebar-heading">Account</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                        Account
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-pricing.html">
                                                <span class="sidebar-menu-text">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-login.html">
                                                <span class="sidebar-menu-text">Login</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-signup.html">
                                                <span class="sidebar-menu-text">Signup</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-signup-payment.html">
                                                <span class="sidebar-menu-text">Payment</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-reset-password.html">
                                                <span class="sidebar-menu-text">Reset Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-change-password.html">
                                                <span class="sidebar-menu-text">Change Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account.html">
                                                <span class="sidebar-menu-text">Edit Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-profile.html">
                                                <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-notifications.html">
                                                <span class="sidebar-menu-text">Email Notifications</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-password.html">
                                                <span class="sidebar-menu-text">Account Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing.html">
                                                <span class="sidebar-menu-text">Subscription</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-upgrade.html">
                                                <span class="sidebar-menu-text">Upgrade Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-payment.html">
                                                <span class="sidebar-menu-text">Payment Information</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-history.html">
                                                <span class="sidebar-menu-text">Payment History</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-invoice.html">
                                                <span class="sidebar-menu-text">Invoice</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_community">
                            <div class="sidebar-heading">Community</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                                        <span
                                            class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                        Community
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-faq.html">
                                                <span class="sidebar-menu-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussions.html">
                                                <span class="sidebar-menu-text">Discussions</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussion.html">
                                                <span class="sidebar-menu-text">Discussion Details</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussions-ask.html">
                                                <span class="sidebar-menu-text">Ask Question</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_components">
                            <div class="sidebar-heading">UI Components</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                        Components
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-buttons.html">
                                                <span class="sidebar-menu-text">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-avatars.html">
                                                <span class="sidebar-menu-text">Avatars</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-forms.html">
                                                <span class="sidebar-menu-text">Forms</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-loaders.html">
                                                <span class="sidebar-menu-text">Loaders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-tables.html">
                                                <span class="sidebar-menu-text">Tables</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-cards.html">
                                                <span class="sidebar-menu-text">Cards</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-icons.html">
                                                <span class="sidebar-menu-text">Icons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-tabs.html">
                                                <span class="sidebar-menu-text">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-alerts.html">
                                                <span class="sidebar-menu-text">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-badges.html">
                                                <span class="sidebar-menu-text">Badges</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-progress.html">
                                                <span class="sidebar-menu-text">Progress</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-pagination.html">
                                                <span class="sidebar-menu-text">Pagination</span>
                                            </a>
                                        </li>
                    

                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="">
                                                <span class="sidebar-menu-text">Disabled</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_plugins">
                            <div class="sidebar-heading">Plugins</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                        Plugins
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-charts.html">
                                                <span class="sidebar-menu-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-flatpickr.html">
                                                <span class="sidebar-menu-text">Flatpickr</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-daterangepicker.html">
                                                <span class="sidebar-menu-text">Date Range Picker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-dragula.html">
                                                <span class="sidebar-menu-text">Dragula</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-dropzone.html">
                                                <span class="sidebar-menu-text">Dropzone</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-range-sliders.html">
                                                <span class="sidebar-menu-text">Range Sliders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-quill.html">
                                                <span class="sidebar-menu-text">Quill</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-select2.html">
                                                <span class="sidebar-menu-text">Select2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-nestable.html">
                                                <span class="sidebar-menu-text">Nestable</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-fancytree.html">
                                                <span class="sidebar-menu-text">Fancy Tree</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-maps-vector.html">
                                                <span class="sidebar-menu-text">Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-sweet-alert.html">
                                                <span class="sidebar-menu-text">Sweet Alert</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-toastr.html">
                                                <span class="sidebar-menu-text">Toastr</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="">
                                                <span class="sidebar-menu-text">Disabled</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_layouts">
                            <div class="sidebar-heading">Layouts</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="compact-index.html">
                                        <span class="sidebar-menu-text">Compact</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="mini-index.html">
                                        <span class="sidebar-menu-text">Mini</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="index.html">
                                        <span class="sidebar-menu-text">App</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="boxed-index.html">
                                        <span class="sidebar-menu-text">Boxed</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="sticky-index.html">
                                        <span class="sidebar-menu-text">Sticky</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="fixed-index.html">
                                        <span class="sidebar-menu-text">Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
        
        
                </div>
        
            </div>
        </div>
        <!-- // END drawer -->





    </div>
    <!-- // end drawer layout -->







    {{-- modals section --}}
    
    @yield('modals')
    
    {{-- end modals section--}}








    {{-- scripts section --}}
    
    @yield('scripts')
    
    {{-- end scripts section--}}





    {{-- js imports --}}
    <script src="{{ asset('assets/kitchen/vendor/jquery.min.js') }}"></script>


    @if (empty(session('chif_id')))
    <script>
        window.location.href = '/kitchen/login'; //dashboard of restaurant            
    </script>
   
    @endif


    {{-- inline scripts (used in dashboard page) --}}
    <script>

            $('.tab-toggle').on('click', function() {
                //get index of li which is clicked
                var indexs = $(this).closest('li').index()
                //remove class from others
                $("ul li").not($(this).closest('li')).removeClass("active")
                //add class where indexs same
                $("ul").find("li:eq(" + indexs + ")").not($(this).closest('li')).addClass("active")
            });
            
            $(document).ready(function(){
            
                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                
                $(".next").click(function(){
                
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });
                
                $(".previous").click(function(){
                
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();
                
                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                
                //show the previous fieldset
                previous_fs.show();
                
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });
                
                $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });
                
                $(".submit").click(function(){
                return false;
                })
            
            });
    
    
    </script>
    
    
    {{-- end inline scripts --}}



    
    <script src="{{ asset('assets/kitchen/dropify/js/dropify.min.js') }}"></script>
    
    <!-- Bootstrap -->
    <script src="{{ asset('assets/kitchen/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/vendor/bootstrap.min.js') }}"></script>
    
    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/kitchen/vendor/perfect-scrollbar.min.js') }}"></script>
    
    <!-- DOM Factory -->
    <script src="{{ asset('assets/kitchen/vendor/dom-factory.js') }}"></script>
    
    <!-- MDK -->
    <script src="{{ asset('assets/kitchen/vendor/material-design-kit.js') }}"></script>
    
    <!-- App JS -->
    <script src="{{ asset('assets/kitchen/js/app.js') }}"></script>
    
    <!-- Highlight.js -->
    <script src="{{ asset('assets/kitchen/js/hljs.js') }}"></script>
    
    <!-- Global Settings -->
    <script src="{{ asset('assets/kitchen/js/settings.js') }}"></script>
    
    <!-- Flatpickr -->
    {{-- <script src="{{ asset('assets/kitchen/vendor/flatpickr/flatpickr.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/kitchen/js/flatpickr.js') }}"></script> --}}
    
    <!-- Moment.js -->
    <script src="{{ asset('assets/kitchen/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/vendor/moment-range.js') }}"></script>


    
    <!-- Chart.js -->
    <script src="{{ asset('assets/kitchen/vendor/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/js/chartjs.js') }}"></script>
    
    <!-- Chart.js Samples -->
    <script src="{{ asset('assets/kitchen/js/page.analytics-dashboard.js') }}"></script>

    
    <!-- Vector Maps -->
    <script src="{{ asset('assets/kitchen/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/kitchen/js/vector-maps.js') }}"></script>
    
    <!-- List.js -->
    <script src="{{ asset('assets/kitchen/vendor/list.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/js/list.js') }}"></script>
    
    <!-- Tables -->
    <script src="{{ asset('assets/kitchen/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('assets/kitchen/js/check-selected-row.js') }}"></script>
    
    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('assets/kitchen/js/app-settings.js') }}"></script>
    
    <!-- Used for Icons Demo App -->
    <script src="{{ asset('assets/kitchen/vendor/vue.min.js') }}"></script>
    
    <!-- UI Icons Page JS -->
    <script src="{{ asset('assets/kitchen/js/app-icons.js') }}"></script>
    
    
    <!-- Select2 -->
    <script src="{{ asset('assets/kitchen/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/js/select2.js') }}"></script>
    
    


    
    

</body>