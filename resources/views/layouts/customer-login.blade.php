<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer App</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/customer/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/customer/css/material-icons.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ asset('assets/customer/css/fontawesome.css') }}" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="{{ asset('assets/customer/vendor/spinkit.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/customer/css/preloader.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/customer/css/app.css') }}" rel="stylesheet">

    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="{{ asset('assets/customer/css/dark-mode.css') }}" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('assets/customer/vendor/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/customer/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/customer/css/select2.css') }}" rel="stylesheet">

    <!-- custom  -->
    <link type="text/css" href="{{ asset('assets/customer/css/custom.css') }}" rel="stylesheet">
</head>


<body class="layout-compact layout-sticky-subnav layout-compact">

    {{-- preloader --}}
    <div class="preloader" style="background-color:white">
        <img src="{{ asset('assets/admin/images/loader/preloader.gif') }}" alt="" style="object-fit: contain;">
    </div>







    {{-- page content --}}
    @yield('content')









    {{-- scripts --}}

    <script src="{{ asset('assets/customer/vendor/jquery.min.js') }}"></script>
    
    <script src="{{ asset('assets/customer/dropify/js/dropify.min.js') }}"></script>
    
    <!-- Bootstrap -->
    <script src="{{ asset('assets/customer/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/customer/vendor/bootstrap.min.js') }}"></script>
    
    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/customer/vendor/perfect-scrollbar.min.js') }}"></script>
    
    <!-- DOM Factory -->
    <script src="{{ asset('assets/customer/vendor/dom-factory.js') }}"></script>
    
    <!-- MDK -->
    <script src="{{ asset('assets/customer/vendor/material-design-kit.js') }}"></script>
    
    <!-- App JS -->
    <script src="{{ asset('assets/customer/js/app.js') }}"></script>
    
    <!-- Highlight.js -->
    <script src="{{ asset('assets/customer/js/hljs.js') }}"></script>
    
    <!-- UI Icons Page JS -->
    <script src="assets/js/app-icons.js"></script>
    
    
    <!-- Select2 -->
    <script src="{{ asset('assets/customer/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/customer/js/select2.js') }}"></script>
    
    
    
    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/package-plan.js') }}"></script>
    
    
    <!-- package plan js (custom added) -->
    <script src="{{ asset('assets/customer/js/customer-mobile.js') }}"></script>
    
    </body>
    
</html>