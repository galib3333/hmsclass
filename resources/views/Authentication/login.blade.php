@extends('layouts.appAuth')

@section('content')
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ route('login.check') }}" method="POST" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="{{asset('public/assets/img/logo-dark.png')}}" alt=""></a>
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
                            Don’t have an account? <a href="register.html">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
