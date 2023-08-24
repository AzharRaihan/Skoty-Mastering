<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/admin/css/app.css') }}"  rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('admin.layouts.partials.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.partials.leftsidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    @yield('page-data')
                </div>
                <!-- End Page-content -->
                @include('admin.layouts.partials.footer')
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        @include('admin.layouts.partials.rightsidebar')
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- dashboard init -->
        <script src="{{ asset('assets/admin/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    </body>

</html>