@extends('backend.app')

@section('title', trans('Create Patient'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Patient Create Form</div>
                        <hr>
                        <form method="post" action="{{route('patients.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="patientId">patient Id <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="patientId" name="patientId"
                                        value="{{ old('patientId') }}" placeholder="Enter Patient ID">
                                    @if ($errors->has('patientId'))
                                        <span class="text-danger"> {{ $errors->first('patientId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                        value="{{ old('firstName') }}" placeholder="Enter Your First Name">
                                    @if ($errors->has('firstName'))
                                        <span class="text-danger"> {{ $errors->first('firstName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                        value="{{ old('lastName') }}" placeholder="Enter Your Last Name">
                                    @if ($errors->has('lastName'))
                                        <span class="text-danger"> {{ $errors->first('lastName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="emailAddress">Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="emailAddress" name="emailAddress"
                                        value="{{ old('emailAddress') }}" placeholder="Enter Email Address">
                                    @if ($errors->has('emailAddress'))
                                        <span class="text-danger"> {{ $errors->first('emailAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="phoneNumber">Phone Number <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                        value="{{ old('phoneNumber') }}"
                                        placeholder="Enter Your Phone Number">
                                    @if ($errors->has('phoneNumber'))
                                        <span class="text-danger"> {{ $errors->first('phoneNumber') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="presentAddress"> Present Address</label>
                                    <input type="text" class="form-control" id="presentAddress" name="presentAddress"
                                        value="{{ old('presentAddress') }}"
                                        placeholder="Enter Your PresentAddress">
                                    @if ($errors->has('presentAddress'))
                                        <span class="text-danger"> {{ $errors->first('presentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="permanentAddress"> Permanent Address</label>
                                    <input type="text" class="form-control" id="permanentAddress" name="permanentAddress"
                                        value="{{ old('permanentAddress') }}"
                                        placeholder="Enter Your Permanent Address">
                                    @if ($errors->has('permanentAddress'))
                                        <span class="text-danger"> {{ $errors->first('permanentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="birthDate"> Birth Date</label>
                                    <input type="text" class="form-control" id="birthDate" name="birthDate"
                                        value="{{ old('birthDate') }}"
                                        placeholder="Enter Your Birth Date">
                                    @if ($errors->has('birthDate'))
                                        <span class="text-danger"> {{ $errors->first('birthDate') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="bloodType"> Blood Type</label>
                                    <input type="text" class="form-control" id="bloodType" name="bloodType"
                                        value="{{ old('bloodType') }}"
                                        placeholder="Enter Your bloodType">
                                    @if ($errors->has('bloodType'))
                                        <span class="text-danger"> {{ $errors->first('bloodType') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if (old('status') == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status') == 0) selected @endif>
                                                Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger"> {{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option value="male" @if (old('gender') == 'male') selected @endif>Male
                                            </option>
                                            <option value="female" @if (old('gender') == 'female') selected @endif>
                                                Female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" placeholder="Image"
                                            name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-2 px-3">
                                <div class="icheck-material-white">
                                    <input type="checkbox" id="user-checkbox1" checked="" />
                                    <label for="user-checkbox1">I Agree with Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
