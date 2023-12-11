@extends('backend.layouts.appAuth')
@section('title', 'Sign Up')
@section('content')

    <div class="card card-authentication1 mx-auto my-4">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{ asset('public/assets/images/logo-icon.png') }}" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                <form {{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="FullName" class="sr-only">Full Name</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="FullName" class="form-control input-shadow"
                                placeholder="Enter Your Full Name" name="FullName" value="{{ old('FullName') }}">
                            @if ($errors->has('FullName'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('FullName') }}
                                </small>
                            @endif
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EmailAddress" class="sr-only">Email Address</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="EmailAddress" name="EmailAddress" value="{{ old('EmailAddress') }}"
                                class="form-control input-shadow" placeholder="Enter Your Email Address">
                            @if ($errors->has('EmailAddress'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('EmailAddress') }}
                                </small>
                            @endif
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_no_en" class="sr-only">Contact Number</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="contact_no_en" name="contact_no_en" value="{{ old('contact_no_en') }}"
                                class="form-control input-shadow" placeholder="Enter Your Contact Number">
                            @if ($errors->has('contact_no_en'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('contact_no_en') }}
                                </small>
                            @endif
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="password" name="password" class="form-control input-shadow"
                                placeholder="Choose Password">
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
                    <div class="form-group">
                        <label for="password_confirmation" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="password_confirmation" name="password_confirmation"
                                class="form-control input-shadow" placeholder="Choose Password">
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
                    <div class="form-group">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox" checked="" />
                            <label for="user-checkbox">I Agree With Terms & Conditions</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
                    <div class="text-center mt-3">Sign Up With</div>

                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Already have an account? <a href="{{'login'}}"> Sign In here</a></p>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection
