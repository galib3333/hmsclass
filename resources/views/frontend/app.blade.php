<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('public/images/fevicon.png" type="image/gif') }}" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <nav class="destop_header navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.html">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="logo_main" href="{{ 'home' }}"><img
                                src="{{ asset('public/images/logo.png') }}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="depatments.html">Depatments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{ asset('public/images/search-icon.png') }}"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="mobile_header navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="{{ asset('public/images/logo.png') }}"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.html">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="logo_main" href="index.html"><img src="{{ asset('public/images/logo.png') }}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="depatments.html">Depatments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img
                                src="{{ asset('public/images/search-icon.png') }}"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- header section end -->
    @yield('content')
    <!-- footer section start -->
    <!-- info section -->
    <div class="info_section layout_padding">
        <div class="container ">
            <div class="info_content">
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <h5>
                                    Medical Care
                                </h5>
                            </div>
                            <div class="d-flex ">
                                <ul>
                                    <li>
                                        <a href="">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About Departments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                                <ul class="ml-3 ml-md-5">
                                    <li>
                                        <a href="">
                                            Cancer Oncology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Dental Surgery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Diagnose & Research
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Drug / Medicines
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <h5>
                                    The Services
                                </h5>
                            </div>
                            <div class="d-flex ">
                                <ul>
                                    <li>
                                        <a href="">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About Departments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                                <ul class="ml-3 ml-md-5">
                                    <li>
                                        <a href="">
                                            Cancer Oncology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Dental Surgery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Diagnose & Research
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Drug / Medicines
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <h5>
                                    Departments
                                </h5>
                            </div>
                            <div class="d-flex ">
                                <ul>
                                    <li>
                                        <a href="">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            About Departments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                                <ul class="ml-3 ml-md-5">
                                    <li>
                                        <a href="">
                                            Cancer Oncology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Dental Surgery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Diagnose & Research
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Drug / Medicines
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
                    <div class="social-box">
                        <a href="">
                            <img src="{{ asset('public/images/fb-icon.png') }}" alt="" />
                        </a>

                        <a href="">
                            <img src="{{ asset('public/images/twitter-icon.png') }}" alt="" />
                        </a>
                        <a href="">
                            <img src="{{ asset('public/images/linkedin-icon.png') }}" alt="" />
                        </a>
                        <a href="">
                            <img src="{{ asset('public/images/instagram-icon.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="form_container mt-5">
                        <form action="">
                            <label for="subscribeMail">
                                Newsletter
                            </label>
                            <input type="email" placeholder="Enter Your email" id="subscribeMail" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end info section -->
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright">2023 All Rights Reserved by <a href="https://newlife.org">New Life</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('public/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('public/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('public/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
