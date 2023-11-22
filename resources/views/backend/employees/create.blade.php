@extends('backend.app')

@section('title', trans('Create Employee'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Employee Create Form</div>
                        <hr>
                        <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="roleId">Role <i class="text-danger">*</i></label>
                                    <select class="form-control" name="roleId" id="roleId">
                                        <option value="">Select Role</option>
                                        @forelse($role as $r)
                                            <option value="{{ $r->id }}"
                                                {{ old('roleId') == $r->id ? 'selected' : '' }}>
                                                {{ $r->type }}</option>
                                        @empty
                                            <option value="">No Role found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('roleId'))
                                        <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="bloodId">Blood Group <i class="text-danger">*</i></label>
                                    <select class="form-control" name="bloodId" id="bloodId">
                                        <option value="">Select Blood Group</option>
                                        @forelse($blood as $b)
                                            <option value="{{ $b->id }}"
                                                {{ old('bloodId') == $b->id ? 'selected' : '' }}>
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
                                    <label for="employeeName_en">Name (English) <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="employeeName_en" name="employeeName_en"
                                        value="{{ old('employeeName_en') }}" placeholder="Enter Employee Name In English">
                                    @if ($errors->has('employeeName_en'))
                                        <span class="text-danger"> {{ $errors->first('employeeName_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="employeeName_bn">Name (Bangla)</label>
                                    <input type="text" class="form-control" id="employeeName_bn" name="employeeName_bn"
                                        value="{{ old('employeeName_bn') }}" placeholder="Enter Employee Name In Bangla">
                                    @if ($errors->has('employeeName_bn'))
                                        <span class="text-danger"> {{ $errors->first('employeeName_bn') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="EmailAddress" name="EmailAddress"
                                        value="{{ old('EmailAddress') }}" placeholder="Enter Email Address">
                                    @if ($errors->has('EmailAddress'))
                                        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_en">Contact Number (English) <i
                                            class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="contactNumber_en" name="contactNumber_en"
                                        value="{{ old('contactNumber_en') }}"
                                        placeholder="Enter Your Contect Number In English">
                                    @if ($errors->has('contactNumber_en'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                    <input type="text" class="form-control" id="contactNumber_bn" name="contactNumber_bn"
                                        value="{{ old('contactNumber_bn') }}"
                                        placeholder="Enter Your Contect Number In Bangla">
                                    @if ($errors->has('contactNumber_bn'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="presentAddress"> Present Address</label>
                                    <input type="text" class="form-control" id="presentAddress" name="presentAddress"
                                        value="{{ old('presentAddress') }}" placeholder="Enter Your PresentAddress">
                                    @if ($errors->has('presentAddress'))
                                        <span class="text-danger"> {{ $errors->first('presentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="permanentAddress"> Permanent Address</label>
                                    <input type="text" class="form-control" id="permanentAddress" name="permanentAddress"
                                        value="{{ old('permanentAddress') }}" placeholder="Enter Your Permanent Address">
                                    @if ($errors->has('permanentAddress'))
                                        <span class="text-danger"> {{ $errors->first('permanentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="birthDate">Birth Date</label>
                                    <input type="date" class="form-control" id="birthDate" name="birthDate"
                                        value="{{ old('birthDate') }}" placeholder="Enter Birth Date">
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
