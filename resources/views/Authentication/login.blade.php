@extends('layouts.appAuth')

@section('content')
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ route('login.check') }}" method="POST" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="{{ asset('public/assets/img/logo-dark.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="username">Contact Number or Email Address</label>
                            <input type="text" autofocus="" class="form-control" id="username" name="username"
                                value="{{ old('username') }}" placeholder="Phone Number/Email Address">
                            @if ($errors->has('username'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('username') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" required="" id="password" name="password"
                                placeholder="Enter pwd">
                            @if ($errors->has('password'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="{{ 'register' }}">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
            <div class="container">

                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="index.html"><img src="{{ asset('public/assets/img/logo-dark.png') }}"
                            alt="Dreamguy's Technologies"></a>
                </div>
                <!-- /Account Logo -->

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <!-- Account Form -->
                        <form action="{{ route('login.check') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Contact Number or Email Address</label>
                                <input class="form-control" type="text" id="username" name="username"
                                    value="{{ old('username') }}" placeholder="Phone Number/Email Address">
                                @if ($errors->has('username'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('username') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                        <input class="form-control" type="password" class="form-control" required="" id="password" name="password"
                                        placeholder="Enter pwd">
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="forgot-password.html">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <input class="form-control" type="password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                            <div class="account-footer">
                                <p>Don't have an account yet? <a href="register.html">Register</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

    </body>
@endsection
