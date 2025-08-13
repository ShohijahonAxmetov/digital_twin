<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Цифровой двойник</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content=""> -->
    <!-- <meta name="keywords" content=""> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="/assets/plugins/apex/apexcharts.css">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- ======= END MAIN STYLES ======= -->

    @yield('styles')

</head>

<body>

    <!-- Offcanval Overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- Offcanval Overlay -->

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Header -->
        @include('components.header')
        <!-- End Header -->

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <!-- Sidebar -->
            @include('components.sidebar')
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- End Main Content -->
        </div>
        <!-- End Main Wrapper -->

        <!-- Footer -->
        @include('components.footer')
        <!-- End Footer -->
    </div>
    <!-- End wrapper -->

    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="/assets/plugins/apex/apexcharts.min.js"></script>
    <script src="/assets/plugins/apex/custom-apexcharts.js"></script>
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->

    @yield('scripts')
</body>

</html>