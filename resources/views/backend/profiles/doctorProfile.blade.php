@extends('backend.app')

@section('title', trans('Doctor Profile'))

@section('content')
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    <div class="card-img-block">
                        <img class="img-fluid" src="{{ asset('public/assets/images/Profile3.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img src="{{ asset('public/uploads/employees/' .request()->session()->get('image')) }}"
                            alt="profile-image" class="profile">
                        <h4> {{ encryptor('decrypt',request()->session()->get('userName')) }}</h4>
                        <h6> {{ encryptor('decrypt',request()->session()->get('email')) }}</h6>
                        <h6> {{ encryptor('decrypt',request()->session()->get('role')) }}</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="icon-block">
                            <a href="javascript:void();"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:void();"> <i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void();"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>

                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                            <div>
                                <img src="{{ asset('public/assets/images/d2.svg') }}" class="skill-img"
                                    alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Pediatric Oncology<span class="float-right">65%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="{{ asset('public/assets/images/d4.svg') }}" class="skill-img"
                                    alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Medical Oncology <span class="float-right">50%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="{{ asset('public/assets/images/d3.svg') }}" class="skill-img"
                                    alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Radiation Oncology<span class="float-right">70%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:70%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="{{ asset('public/assets/images/d5.svg') }}" class="skill-img"
                                    alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Surgical Oncology<span class="float-right">35%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:35%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                                        class="icon-envelope-open"></i> <span class="hidden-xs">Add Doctor</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Doctor's List</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-5">Doctor's Profile</h5>
                                <div class="row">
                                    <div class="col-md-6 justify-content-end text-right">
                                        <h6>Email Address</h6>
                                        <h6>Department</h6>
                                        <h6>Designation</h6>
                                        <h6>Present Address</h6>
                                        <h6>Permanent Address</h6>
                                        <h6>Contact Number EN</h6>
                                        <h6>Contact Number BN</h6>
                                        <h6>Short Biography</h6>
                                        <h6>Date Of Birth</h6>
                                        <h6>Specialist</h6>
                                        <h6>Gender</h6>
                                        <h6>Blood Group</h6>
                                        <h6>Education</h6>
                                        <h6>Fees</h6>
                                        <h6>Status</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Email Address</h6>
                                        <h6>Department</h6>
                                        <h6>Designation</h6>
                                        <h6>Present Address</h6>
                                        <h6>Permanent Address</h6>
                                        <h6>Contact Number EN</h6>
                                        <h6>Contact Number BN</h6>
                                        <h6>Short Biography</h6>
                                        <h6>Date Of Birth</h6>
                                        <h6>Specialist</h6>
                                        <h6>Gender</h6>
                                        <h6>Blood Group</h6>
                                        <h6>Education</h6>
                                        <h6>Fees</h6>
                                        <h6>Status</h6>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <div class="alert-icon">
                                        <i class="icon-info"></i>
                                    </div>
                                    <div class="alert-message">
                                        <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is
                                                    your a link to the latest summary report from the..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">Yesterday</span> There
                                                    has been a request on your account since that was..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/10</span> Porttitor
                                                    vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia
                                                    rhoncus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum
                                                    tincidunt ullamcorper eros eget luctus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion
                                                    ais the fix for tibulum tincidunt ullamcorper eros.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="edit">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Mark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Jhonsan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" value="mark@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Change
                                            profile</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="url" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value=""
                                                placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value=""
                                                placeholder="City">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value=""
                                                placeholder="State">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="jhonsanmark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm
                                            password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancel">
                                            <input type="button" class="btn btn-primary" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>
    <!-- End container-fluid-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection
