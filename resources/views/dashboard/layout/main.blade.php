<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <!-- loader-->
    <link href="{{asset('Admin')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('Admin')}}/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="{{asset('Admin')}}/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('Admin')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{asset('Admin')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{asset('Admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{asset('Admin')}}/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{asset('Admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{asset('Admin')}}/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{asset('Admin')}}/assets/css/app-style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        @include('dashboard.layout.sidebar')

        @include('dashboard.layout.header')

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                @yield('content')
                <!--End Dashboard Content-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        @include('dashboard.layout.footer')

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('Admin')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('Admin')}}/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{asset('Admin')}}/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="{{asset('Admin')}}/assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="{{asset('Admin')}}/assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="{{asset('Admin')}}/assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="{{asset('Admin')}}/assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="{{asset('Admin')}}/assets/js/index.js"></script>


</body>

</html>
