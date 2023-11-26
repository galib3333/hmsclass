@extends('backend.app')

@section('title', trans('Update Patient'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('patients.index') }}" class="btn btn-light px-2 mb-3">Patient List<i
                            class="fa fa-list px-2"></i></a>
                        <div class="card-title">Patient Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('patients.update', encryptor('encrypt', $patient->id)) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="bloodId">Blood Group <i class="text-danger">*</i></label>
                                    <select class="form-control" name="bloodId" id="bloodId">
                                        <option value="">Select Blood Group</option>
                                        @forelse($blood as $b)
                                            <option value="{{ $b->id }}"
                                                {{ old('bloodId', $patient->blood_id) == $b->id ? 'selected' : '' }}>
                                                {{ $b->blood_type_name }}</option>
                                        @empty
                                            <option value="">No Blood Group found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('bloodId'))
                                        <span class="text-danger"> {{ $errors->first('bloodId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="patientNameEN">Name (English) <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="patientNameEN" name="patientNameEN"
                                        value="{{ old('patientNameEN', $patient->name_en) }}" placeholder="Enter Your Name In English">
                                    @if ($errors->has('patientNameEN'))
                                        <span class="text-danger"> {{ $errors->first('patientNameEN') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="patientNameBN">Name (Bangla)</label>
                                    <input type="text" class="form-control" id="patientNameBN" name="patientNameBN"
                                        value="{{ old('patientNameBN', $patient->name_bn) }}" placeholder="Enter Employee Name In Bangla">
                                    @if ($errors->has('patientNameBN'))
                                        <span class="text-danger"> {{ $errors->first('patientNameBN') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="emailAddress">Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="emailAddress" name="emailAddress"
                                        value="{{ old('emailAddress', $patient->email) }}"
                                        placeholder="Enter Email Address">
                                    @if ($errors->has('emailAddress'))
                                        <span class="text-danger"> {{ $errors->first('emailAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_en">Contact Number (English) <i
                                            class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="contactNumber_en" name="contactNumber_en"
                                        value="{{ old('contactNumber_en', $patient->contact_no_en) }}"
                                        placeholder="Enter Your Contect Number In English">
                                    @if ($errors->has('contactNumber_en'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                    <input type="text" class="form-control" id="contactNumber_bn" name="contactNumber_bn"
                                        value="{{ old('contactNumber_bn', $patient->contact_no_bn) }}"
                                        placeholder="Enter Your Contect Number In Bangla">
                                    @if ($errors->has('contactNumber_bn'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="presentAddress">Present Address</label>
                                    <input type="text" class="form-control" id="presentAddress" name="presentAddress"
                                        value="{{ old('presentAddress', $patient->present_address) }}"
                                        placeholder="Enter Your PresentAddress">
                                    @if ($errors->has('presentAddress'))
                                        <span class="text-danger"> {{ $errors->first('presentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="permanentAddress"> Permanent Address</label>
                                    <input type="text" class="form-control" id="permanentAddress" name="permanentAddress"
                                        value="{{ old('permanentAddress', $patient->permanent_address) }}"
                                        placeholder="Enter Your Permanent Address">
                                    @if ($errors->has('permanentAddress'))
                                        <span class="text-danger"> {{ $errors->first('permanentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="birthDate">Birth Date</label>
                                    <input type="date" class="form-control" id="birthDate" name="birthDate"
                                        value="{{ old('birthDate', $patient->birth_date) }}" placeholder="Enter Birth Date">
                                    @if ($errors->has('birthDate'))
                                        <span class="text-danger"> {{ $errors->first('birthDate') }}</span>
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
                                            <option value="Male" @if (old('gender') == 'Male') selected @endif>Male
                                            </option>
                                            <option value="Female" @if (old('gender') == 'Female') selected @endif>
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
