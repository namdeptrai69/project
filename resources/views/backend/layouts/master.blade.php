<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/backend/images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- bootstrap-progressbar -->
    <link href="/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/backend/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('backend.includes.sidebar')

        <!-- top navigation -->
        @include('backend.includes.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            @yield('content-header')
            <!-- /top tiles -->

            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('backend.includes.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/backend/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/backend/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/backend/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/backend/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/backend/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/backend/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/backend/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/backend/vendors/Flot/jquery.flot.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.pie.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.time.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.stack.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/backend/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/backend/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/backend/vendors/moment/min/moment.min.js"></script>
<script src="/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Datatables -->
<script src="/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="/backend/vendors/jszip/dist/jszip.min.js"></script>
<script src="/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/backend/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/backend/build/js/custom.min.js"></script>

</body>
</html>