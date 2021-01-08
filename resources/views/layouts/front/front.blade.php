<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medilab Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v3.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('layouts.front.navbar')
    @yield('content')
    @include('layouts.front.footer')


    <!-- Vendor JS Files -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
