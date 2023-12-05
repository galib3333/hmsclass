@extends('frontend.app')

@section('content')
    <!-- banner section start -->
    <div class="banner_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 padding_0">
                    <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_bg">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Providing appropritate<br>
                                            health care for
                                            <br>seniors and childrens
                                        </h1>
                                        <p class="long_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum</p>
                                        <div class="btn_main">
                                            <!-- Bootstrap modal triggers -->
                                            <div class="about_bt mx-1"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#registrationModal">Registration</a></div>
                                            <div class="about_bt"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#appointmentModal">Get Appointment</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bootstrap modal for Registration -->
                            <div class="modal fade" id="registrationModal" tabindex="-1"
                                aria-labelledby="registrationModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Add your registration form here -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <div class="container-fluid">

                                                <div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <a href="{{ route('patients.index') }}"
                                                                    class="btn btn-light px-2 mb-3">Patient List<i
                                                                        class="fa fa-list px-2"></i></a>
                                                                <div class="card-title">Patient Create Form</div>
                                                                <hr>
                                                                <form method="post" action="{{ route('patients.store') }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="patientNameEN">Name (English) <i
                                                                                    class="text-danger">*</i></label>
                                                                            <input type="text" class="form-control"
                                                                                id="patientNameEN" name="patientNameEN"
                                                                                value="{{ old('patientNameEN') }}"
                                                                                placeholder="Enter Employee Name In English">
                                                                            @if ($errors->has('patientNameEN'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('patientNameEN') }}</span>
                                                                            @endif
                                                                        </div>

                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="patientNameBN">Name (Bangla)</label>
                                                                            <input type="text" class="form-control"
                                                                                id="patientNameBN" name="patientNameBN"
                                                                                value="{{ old('patientNameBN') }}"
                                                                                placeholder="Enter Employee Name In Bangla">
                                                                            @if ($errors->has('patientNameBN'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('patientNameBN') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="bloodId">Blood Group <i
                                                                                    class="text-danger">*</i></label>
                                                                            <select class="form-control" name="bloodId"
                                                                                id="bloodId">
                                                                                <option value="">Select Blood Group
                                                                                </option>
                                                                                @forelse($blood as $b)
                                                                                    <option value="{{ $b->id }}"
                                                                                        {{ old('bloodId') == $b->id ? 'selected' : '' }}>
                                                                                        {{ $b->blood_type_name }}</option>
                                                                                @empty
                                                                                    <option value="">No Blood Group
                                                                                        found</option>
                                                                                @endforelse
                                                                            </select>
                                                                            @if ($errors->has('bloodId'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('bloodId') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="emailAddress">Email <i
                                                                                    class="text-danger">*</i></label>
                                                                            <input type="text" class="form-control"
                                                                                id="emailAddress" name="emailAddress"
                                                                                value="{{ old('emailAddress') }}"
                                                                                placeholder="Enter Email Address">
                                                                            @if ($errors->has('emailAddress'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('emailAddress') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="contactNumber_en">Contact Number
                                                                                (English) <i
                                                                                    class="text-danger">*</i></label>
                                                                            <input type="text" class="form-control"
                                                                                id="contactNumber_en"
                                                                                name="contactNumber_en"
                                                                                value="{{ old('contactNumber_en') }}"
                                                                                placeholder="Enter Your Contect Number In English">
                                                                            @if ($errors->has('contactNumber_en'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('contactNumber_en') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="contactNumber_bn">Contact Number
                                                                                (Bangla)</label>
                                                                            <input type="text" class="form-control"
                                                                                id="contactNumber_bn"
                                                                                name="contactNumber_bn"
                                                                                value="{{ old('contactNumber_bn') }}"
                                                                                placeholder="Enter Your Contect Number In Bangla">
                                                                            @if ($errors->has('contactNumber_bn'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('contactNumber_bn') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="presentAddress"> Present
                                                                                Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="presentAddress" name="presentAddress"
                                                                                value="{{ old('presentAddress') }}"
                                                                                placeholder="Enter Your PresentAddress">
                                                                            @if ($errors->has('presentAddress'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('presentAddress') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="permanentAddress"> Permanent
                                                                                Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="permanentAddress"
                                                                                name="permanentAddress"
                                                                                value="{{ old('permanentAddress') }}"
                                                                                placeholder="Enter Your Permanent Address">
                                                                            @if ($errors->has('permanentAddress'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('permanentAddress') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-6 col-12">
                                                                            <label for="birthDate">Birth Date</label>
                                                                            <input type="date" class="form-control"
                                                                                id="birthDate" name="birthDate"
                                                                                value="{{ old('birthDate') }}"
                                                                                placeholder="Enter Birth Date">
                                                                            @if ($errors->has('birthDate'))
                                                                                <span class="text-danger">
                                                                                    {{ $errors->first('birthDate') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="status">Status</label>
                                                                                <select id="status"
                                                                                    class="form-control" name="status">
                                                                                    <option value="1"
                                                                                        @if (old('status') == 1) selected @endif>
                                                                                        Active
                                                                                    </option>
                                                                                    <option value="0"
                                                                                        @if (old('status') == 0) selected @endif>
                                                                                        Inactive</option>
                                                                                </select>
                                                                                @if ($errors->has('status'))
                                                                                    <span class="text-danger">
                                                                                        {{ $errors->first('status') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="gender">Gender</label>
                                                                                <select id="gender"
                                                                                    class="form-control" name="gender">
                                                                                    <option value="male"
                                                                                        @if (old('gender') == 'male') selected @endif>
                                                                                        Male
                                                                                    </option>
                                                                                    <option value="female"
                                                                                        @if (old('gender') == 'female') selected @endif>
                                                                                        Female</option>
                                                                                </select>
                                                                                @if ($errors->has('gender'))
                                                                                    <span class="text-danger">
                                                                                        {{ $errors->first('gender') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="image">Image</label>
                                                                                <input type="file" id="image"
                                                                                    class="form-control"
                                                                                    placeholder="Image" name="image">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group py-2 px-3">
                                                                        <div class="icheck-material-white">
                                                                            <input type="checkbox" id="user-checkbox1"
                                                                                checked="" />
                                                                            <label for="user-checkbox1">I Agree with Terms
                                                                                & Conditions</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit"
                                                                            class="btn btn-light px-5"><i
                                                                                class="icon-lock"></i>
                                                                            Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- registration form fields go here -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bootstrap modal for Appointment -->
                            <div class="modal fade" id="appointmentModal" tabindex="-1"
                                aria-labelledby="appointmentModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Add your appointment form here -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="appointmentModalLabel">Appointment Form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Your appointment form fields go here -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner_bg">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Providing appropritate<br>
                                            health care for
                                            <br>seniors and childrens
                                        </h1>
                                        <p class="long_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum</p>
                                        <div class="btn_main">
                                            <div class="about_bt mx-1"><a href="#">Registration</a></div>
                                            <div class="about_bt"><a href="#">Get Appointment</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_bg">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Providing appropritate<br>
                                            health care for
                                            <br>seniors and childrens
                                        </h1>
                                        <p class="long_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum</p>
                                        <div class="btn_main">
                                            <div class="about_bt mx-1"><a href="#">Registration</a></div>
                                            <div class="about_bt"><a href="#">Get Appointment</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 padding_0">
                    <div class="banner_img"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital">
                        <h4 class="about_text">About</h4>
                        <h1 class="highest_text">The Highest provide health care</h1>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters, as opposedIt is a long
                            established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed</p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_2" href="#"><img src="{{ asset('public/images/img-2.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- care section start -->
    <div class="care_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_3" href="#"><img src="{{ asset('public/images/img-3.png') }}"></div>
                </div>
                <div class="col-md-6">
                    <div class="care_taital">
                        <h4 class="finest_text">Finest Patient</h4>
                        <h1 class="care_text">Care & Amenities</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,tempor Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam,</p>
                        <div class="read_bt_2"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- care section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="call_box">
                        <div class="call_image"><img src="{{ asset('public/images/call-icon.png') }}"></div>
                        <h2 class="emergency_text">Emergency Cases</h2>
                        <h1 class="call_text">1-800-400-5768</h1>
                        <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call_box active">
                        <div class="call_image"><img src="{{ asset('public/images/time-seat-icon.png') }}"></div>
                        <h2 class="emergency_text">Doctors timetable</h2>
                        <h1 class="call_text">1-800-400-5768</h1>
                        <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call_box">
                        <div class="call_image"><img src="{{ asset('public/images/watch-icon.png') }}"></div>
                        <h2 class="emergency_text">Opening hours</h2>
                        <h1 class="call_text">1-800-400-5768</h1>
                        <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- doctor section start -->
    <div class="doctor_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding_top0">
                    <h4 class="about_text">Best Laboratory</h4>
                    <h1 class="highest_text">Tests Available</h1>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur </p>
                    <div class="read_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_4"><img src="{{ asset('public/images/img-4.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- doctor section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="contact_text">Contact Us</h1>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Subject" name="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                        </div>
                    </form>
                    <div class="main_bt"><a href="#">Send</a></div>
                </div>
                <div class="col-md-6">
                    <h1 class="contact_text">What says our patients</h1>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2 class="selfideno_text">Selfideno</h2>
                                <div class="client_main">
                                    <div class="image_5"><img src="{{ asset('public/images/img-5.png') }}"></div>
                                    <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur </p>
                                    <div class="quote_icon"><img src="{{ asset('public/images/quote-icon.png') }}"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h2 class="selfideno_text">Selfideno</h2>
                                <div class="client_main">
                                    <div class="image_5"><img src="{{ asset('public/images/img-5.png') }}"></div>
                                    <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur </p>
                                    <div class="quote_icon"><img src="{{ asset('public/images/quote-icon.png') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- appointment section start -->
    <div class="appointment_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="need_text">Need a doctor for check-Up </h3>
                    <h1 class="make_text">Make An Appointment & You're Done </h1>
                </div>
                <div class="col-md-6">
                    <div class="appointment_bt_main">
                        <div class="appointment_bt"><a href="#">Get Appointment</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appointment section end -->
@endsection
