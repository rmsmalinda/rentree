<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ROMEO.LK | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- jquery.vectormap css -->
    <link href="{{ asset("/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css") }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}"  type="text/css" id="bootstrap-style" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{ asset("/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("/assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Calender plugin CSS -->
    <link href="{{ asset("/assets/libs/fullcalendar/fullcalendar.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Calender plugin CSS End -->

    <!--advanced form -->
    <link href="{{ asset('/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <!-- End advanced form -->

    <!-- Sweet Alert-->
    <link href="{{ asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Clock -->
    <link type="text/css" rel="stylesheet" href="/analogclock.css">
    @yield('style')

</head>

<body data-layout="detached" data-topbar="colored">

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('core.includes.topbar')

        @include('core.includes.sidebar')

    <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">


                @yield('content')

            </div>
            <!-- End Page-content -->

            @include('core.includes.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->


<!-- JAVASCRIPT -->
<script src="{{ asset("/assets/libs/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("/assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("/assets/libs/metismenu/metisMenu.min.js") }}"></script>
<script src="{{ asset("/assets/libs/simplebar/simplebar.min.js") }}"></script>
<script src="{{ asset("/assets/libs/node-waves/waves.min.js") }}"></script>

<!-- apexcharts -->
<script src="{{ asset("/assets/libs/apexcharts/apexcharts.min.js") }}"></script>

<!-- jquery.vectormap map -->
<script src="{{ asset("/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js") }}"></script>

<!--form -->
<script src="{{ asset("/assets/libs/select2/js/select2.min.js") }}"></script>
<script src="{{ asset("/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js") }}"></script>
<script src="{{ asset("/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") }}"></script>
<script src="{{ asset("/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js") }}"></script>
<script src="{{ asset("/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js") }}"></script>

<!-- form advanced init -->
<script src="{{ asset("/assets/js/pages/form-advanced.init.js") }}"></script>

<!-- endform -->

<!-- Dashboard Data -->
<script src="{{ asset("/assets/js/pages/dashboard.init.js") }}"></script>

<script src="{{ asset("/assets/js/pages/dashboard-2.init.js") }}"></script>


<script src="{{ asset("/assets/js/app.js") }}"></script>

<!-- Calender plugin js -->

<script src="{{ asset("/assets/libs/moment/min/moment.min.js") }}"></script>
<script src="{{ asset("/assets/libs/fullcalendar/fullcalendar.min.js") }}"></script>
<script src="{{ asset("/assets/js/pages/calendar.init.js") }}"></script>

<!-- Calender End plugin js -->

<!-- Required datatable js -->
<script src="{{ asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('/assets/js/pages/datatables.init.js') }}"></script>

<!-- clock js -->

<script src = "/analogclock.js" type = "text/javascript">
</script>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
        var setting1 = {
            x:200,
            y:200,
            size:250,
        }
        $("#clock1").analogclock(setting1);
    });
</script>

@yield('script')



</body>

</html>
