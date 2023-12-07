<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Favicons -->
    <link href="{{ asset('public/frontassets/img/logo-dark.png') }}" rel="icon">
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/frontassets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontassets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/frontassets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header section start -->

    <!-- header section end -->
    @yield('content')
    <!-- footer section start -->

    <!-- footer section end -->

    <!-- Javascript files-->
    <!-- Vendor JS Files -->
    <script src="{{ asset('public/frontassets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('public/frontassets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/frontassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/frontassets/js/main.js') }}"></script>
</body>

</html>
