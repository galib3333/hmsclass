@extends('backend.app')

@section('title', trans("Patient's Prescription"))

@section('content')
    <div class="container-fluid">

        <div class="row mt-3">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Prescription</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div id="printableContent">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="col-md-7 mt-3">

                                                <label for="status">Patient's ID:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Patient's Name:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Address:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Dx:</label>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="col-md-8 mx-5 mt-3">
                                                <label for="">Date:</label>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Age:</label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Gender:</label>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-md-10 mx-5 ">
                                                <label for="">Phone Number:</label>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 mt-4">
                                            <div class="form-group col-md-10">
                                                <label for="cc" class="">C/C</label>
                                                <textarea class="form-control" name="cc" id="cc" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group col-md-10">
                                                <label for="inv" class="">Inv</label>
                                                <textarea class="form-control" name="inv" id="inv" cols="30" rows="10"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-5">
                                            <div class="col-md-4 mt-5 mb-3">
                                                <label for="">Rx:</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Medicine:</label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for=""></label>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-md-4">
                                                    <label for="status">Dose:</label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <label for="status"></label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <label for="status"></label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="status">Advice:</label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="status">Next Visit:</label>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group justify-content-end">
                                        <button type="submit" class="btn btn-light px-3" onclick="printProfile()"><i
                                                class="icon-lock"></i>
                                            Print</button>
                                    </div>
                                </div>
                            </div>
                            {{-- end of print container --}}
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
                                        <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
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
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
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
            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
    </div>
    <!-- End container-fluid-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    {{-- <script>
        function printProfile() {
            window.print();
        }
    </script> --}}
    <script>
        function printProfile() {
            // Clone the content to be printed
            var printableContent = document.getElementById('printableContent').cloneNode(true);

            // Create a new window
            var printWindow = window.open('', '_blank');

            // Append the content to the new window
            printWindow.document.body.appendChild(printableContent);

            // Initiate printing
            printWindow.print();
        }
    </script>
@endsection
