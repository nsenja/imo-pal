<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tixia.dexignzone.com/codeigniter/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:16:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Tixia - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:title" content="Tixia - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:description" content="Tixia - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:image" content="../social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Daftar Pengunjung Server</title>
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">

    <link href="{{ asset('/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/styleUser.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--******************* Preloader start ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--******************* Preloader end ********************-->

    <!--********************************** Main wrapper start ***********************************-->
    <div id="main-wrapper">

        <!--**********************************  Nav header start ***********************************-->
        @include('layout.header')
        <!--**********************************  Header end ti-comment-alt ***********************************-->
        <!--**********************************  EventList ***********************************-->
        @yield('content')
        <!--********************************** Content body end ***********************************-->
        <!--********************************** Footer start ***********************************-->
        @include('layout.footer')
        <!--********************************** Footer end ***********************************-->
    </div>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>


    


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from tixia.dexignzone.com/codeigniter/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:16:45 GMT -->

</html>
