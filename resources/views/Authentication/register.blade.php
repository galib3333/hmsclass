@extends('layouts.appAuth')
@section('title', 'Sign Up')
@section('content')
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form {{ route('register.store') }}" method="POST" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="{{asset('public/assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="FullName">Full Name</label>
                            <input type="text" class="form-control" name="FullName" value="{{ old('FullName') }}"
                                required="" id="FullName" placeholder="Your Full Name">
                            @if ($errors->has('FullName'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('FullName') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="EmailAddress">Email address</label>
                            <input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress"
                                value="{{ old('EmailAddress') }}" placeholder="Enter email">
                            @if ($errors->has('EmailAddress'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('EmailAddress') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contact_no_en">Contact Number</label>
                            <input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en"
                                value="{{ old('contact_no_en') }}" placeholder="Phone Number">
                            @if ($errors->has('contact_no_en'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('contact_no_en') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
                            @if ($errors->has('password'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.html">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
