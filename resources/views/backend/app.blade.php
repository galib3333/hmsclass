<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- loader-->
    <link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet')}}" />
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('public/assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('public/assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('public/assets/css/app-style.css') }}" rel="stylesheet" />
    <!-- Toast CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />


</head>

<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('public/assets/images/logo.png') }}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">NewLife HMS</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <!-- Dropdown Menu START -->
                <li>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-h-square"></i><span>HRM</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="min-width: 100%">
                        <li class="dropdown-item">
                            <a href="{{ route('user.index') }}">
                                <i class="fa fa-user"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('userProfile') }}">
                                <i class="fa fa-user"></i> <span>User's Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('role.index') }}">
                                <i class="zmdi zmdi-account-circle"></i> <span>Roles</span>
                            </a>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('employees.index') }}">
                                <i class="fa fa-users"></i><span>Employees</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('shift.index') }}">
                                <i class="fa fa-clock-o" aria-hidden="true"></i><span>Shift</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('day.index') }}">
                                <i class="fa-solid fa-hourglass-start"></i><span>Day</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('schedule.index') }}">
                                <i class="fa-solid fa-calendar-plus"></i><span>Schedule</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('investCat.index') }}">
                                <i class="fa-solid fa-file-signature"></i><span>Investigation Category</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('invest.index') }}">
                                <i class="fa-solid fa-user-secret"></i><span>Investigations</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Add more items as needed -->
                </li>
                <!-- Dropdown Menu END-->
                <!-- Dropdown Menu START -->
                <li>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-bed" aria-hidden="true"></i><span>Room Management</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="min-width: 100%">
                        <li class="dropdown-item">
                            <a href="{{ route('roomCat.index') }}">
                                <i class="fa fa-th-large" aria-hidden="true"></i><span>Room Category</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('roomList.index') }}">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i><span>Rooms</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Add more items as needed -->
                </li>
                <!-- Dropdown Menu END-->
                <!-- Dropdown Menu START -->
                <li>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-user-md"></i><span>Doctors</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="min-width: 100%">
                        <li class="dropdown-item">
                            <a href="{{ route('doctor.index') }}">
                                <i class="fa fa-user-md"></i><span>Doctors</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('department.index') }}">
                                <i class="fa fa-cube"></i><span>Department</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('designation.index') }}">
                                <i class="fa fa-suitcase" aria-hidden="true"></i><span>Designation</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Add more items as needed -->
                </li>
                <!-- Dropdown Menu END-->
                <!-- Dropdown Menu START -->
                <li>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fa fa-wheelchair"></i><span>Patients</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="min-width: 100%">
                        <li class="dropdown-item">
                            <a href="{{ route('patients.index') }}">
                                <i class="fa fa-wheelchair"></i><span>Patients Registration</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('pAdmit.index') }}">
                                <i class="fa fa-ambulance" aria-hidden="true"></i><span>Patient Admission</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('prescription') }}">
                                <i class="fa-solid fa-prescription"></i><span>Patient Prescription</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('appRequest') }}">
                                <i class="fa-solid fa-prescription"></i><span>Appointment request</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="{{ route('appAccepted') }}">
                                <i class="fa-solid fa-prescription"></i><span>Appointment Accept List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Add more items as needed -->
                </li>
                <!-- Dropdown Menu END-->
                
                <li>
                    <a href="{{ route('patienttest.create') }}">
                        <i class="fas fa-dna" aria-hidden="true"></i><span>Test Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blood.index') }}">
                        <i class="zmdi zmdi-invert-colors"></i><span>Blood Group</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('birth.index') }}">
                        <i class="fas fa-notes-medical"></i><span>Birth Information</span>
                    </a>
                </li>
                <li class="sidebar-header">LABELS</li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i>
                        <span>Important</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a></li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i>
                        <span>Information</span></a>
                </li>
            </ul>
        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img
                                    src="{{ asset('public/uploads/employees/' .request()->session()->get('image')) }}"
                                    class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="{{ route('userProfile') }}">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="{{ asset('public/uploads/employees/' .request()->session()->get('image')) }}"
                                                alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">
                                                {{ encryptor('decrypt',request()->session()->get('userName')) }}</h6>
                                            <p class="user-subtitle">
                                                {{ encryptor('decrypt',request()->session()->get('email')) }}</p>
                                            <p class="user-subtitle">
                                                {{ encryptor('decrypt',request()->session()->get('role')) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <a href="{{ route('logOut') }}">
                                <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

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
        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2023 NewLife HMS.
                </div>
            </div>
        </footer>
        <!--End footer-->

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="assets/js/bootstrap.min.js')}}"></script>
    <!-- simplebar js -->
    <script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('public/assets/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <script src="{{ asset('public/assets/js/jquery.loading-indicator.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('public/assets/js/app-script.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ asset('public/assets/plugins/Chart.js/Chart.min.js') }}"></script>
    @stack('scripts')
    <!-- Index js -->
    <script src="{{ asset('public/assets/js/index.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
