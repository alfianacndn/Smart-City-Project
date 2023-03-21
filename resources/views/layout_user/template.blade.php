<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets1/assets/images/favicon.png">
    <title>Dashboard</title>
    <!-- Custom CSS -->
    <link href="../asset1/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../asset1/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../asset1/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../asset1/dist/css/style.min.css" rel="stylesheet">
</head>


<body>



    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        @include ('layout_user.header')
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include ('layout_user.navbar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        @yield ('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../asset1/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../asset1/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../asset1/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../asset1/dist/js/app-style-switcher.js"></script>
    <script src="../asset1/dist/js/feather.min.js"></script>
    <script src="../asset1/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../asset1/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../asset1/dist/js/custom.min.js"></script>

    <!--This page JavaScript -->
    <script src="../asset1/assets/extra-libs/c3/d3.min.js"></script>
    <script src="../asset1/assets/extra-libs/c3/c3.min.js"></script>
    <script src="../asset1/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../asset1/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../asset1/ssets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../asset1/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../asset1/dist/js/pages/dashboards/dashboard1.min.js"></script>


    <script src="../asset1/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../asset1/assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <!-- apps -->
    <!-- apps -->


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../asset1/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../asset1/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->

    <!--Custom JavaScript -->
    <script src="../asset1/dist/js/custom.min.js"></script>
    <script src="../asset1/assets/extra-libs/knob/jquery.knob.min.js"></script>
    <script>
        $(function() {
            $('[data-plugin="knob"]').knob();
        });
    </script>

</body>


</html>