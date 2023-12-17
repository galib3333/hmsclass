@extends('backend.layouts.appAuth')
@section('tile','Login Page')
@section('content')
    <!-- Start wrapper-->
    <div class="loader-wrapper">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{ asset('public/assets/images/logo-icon.png') }}" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form action="{{ route('login.check') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username" class="sr-only">Contact Number or Email Address</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ old('username') }}" placeholder="Phone Number/Email Address">
                            @if ($errors->has('username'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('username') }}
                                </small>
                            @endif
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="password" name="password"class="form-control input-shadow"
                                placeholder="Enter Password">
                            @if ($errors->has('password'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="icheck-material-white">
                                <input type="checkbox" id="user-checkbox" checked="" />
                                <label for="user-checkbox">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group col-6 text-right">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">Sign In</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Do not have an account? <a href="{{ 'register' }}"> Sign Up here</a></p>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

    </body>
@endsection
