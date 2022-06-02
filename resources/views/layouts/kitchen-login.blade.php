<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kitchen Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
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
    
    
    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="{{ asset('assets/kitchen/css/custom.css') }}" rel="stylesheet">

</head>



<body class="layout-compact layout-sticky-subnav layout-compact">


    {{-- preloader --}}
    <div class="preloader" style="background-color:white">
        <img src="{{ asset('assets/admin/images/loader/preloader.gif') }}" alt="" style="object-fit: contain;">
    </div>







    {{-- page content --}}
    @yield('content')










    {{-- js imports --}}
    <script src="{{ asset('assets/kitchen/vendor/jquery.min.js') }}"></script>



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


    <!-- Moment.js -->
    <script src="{{ asset('assets/kitchen/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/kitchen/vendor/moment-range.js') }}"></script>

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