@extends('backend.app')

@section('title', trans('Update Employee'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('employees.index') }}" class="btn btn-light px-2 mb-3">Employee List<i
                            class="fa fa-list px-2"></i></a>
                        <div class="card-title">Employee Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('employees.update', encryptor('encrypt', $employee->id)) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $employee->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="roleId">Role <i class="text-danger">*</i></label>
                                    <select class="form-control" name="roleId" id="roleId">
                                        <option value="">Select Role</option>
                                        @forelse($role as $r)
                                            <option value="{{ $r->id }}"
                                                {{ old('roleId', $employee->role_id) == $r->id ? 'selected' : '' }}>
                                                {{ $r->name }}</option>
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
                                                {{ old('bloodId', $employee->blood_id) == $b->id ? 'selected' : '' }}>
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
                                        value="{{ old('employeeName_en', $employee->name_en) }}" placeholder="Enter Employee Name In English">
                                    @if ($errors->has('employeeName_en'))
                                        <span class="text-danger"> {{ $errors->first('employeeName_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="employeeName_bn">Name (Bangla)</label>
                                    <input type="text" class="form-control" id="employeeName_bn" name="employeeName_bn"
                                        value="{{ old('employeeName_bn', $employee->name_bn) }}" placeholder="Enter Employee Name In Bangla">
                                    @if ($errors->has('employeeName_bn'))
                                        <span class="text-danger"> {{ $errors->first('employeeName_bn') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="EmailAddress" name="EmailAddress"
                                        value="{{ old('EmailAddress', $employee->email) }}" placeholder="Enter Email Address">
                                    @if ($errors->has('EmailAddress'))
                                        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_en">Contact Number (English) <i
                                            class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="contactNumber_en" name="contactNumber_en"
                                        value="{{ old('contactNumber_en', $employee->contact_no_en) }}"
                                        placeholder="Enter Your Contect Number In English">
                                    @if ($errors->has('contactNumber_en'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                    <input type="text" class="form-control" id="contactNumber_bn" name="contactNumber_bn"
                                        value="{{ old('contactNumber_bn', $employee->contact_no_bn) }}"
                                        placeholder="Enter Your Contect Number In Bangla">
                                    @if ($errors->has('contactNumber_bn'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="presentAddress"> Present Address</label>
                                    <input type="text" class="form-control" id="presentAddress" name="presentAddress"
                                        value="{{ old('presentAddress', $employee->present_address) }}" placeholder="Enter Your PresentAddress">
                                    @if ($errors->has('presentAddress'))
                                        <span class="text-danger"> {{ $errors->first('presentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="permanentAddress"> Permanent Address</label>
                                    <input type="text" class="form-control" id="permanentAddress" name="permanentAddress"
                                        value="{{ old('permanentAddress', $employee->permanent_address) }}" placeholder="Enter Your Permanent Address">
                                    @if ($errors->has('permanentAddress'))
                                        <span class="text-danger"> {{ $errors->first('permanentAddress') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="birthDate">Birth Date</label>
                                    <input type="date" class="form-control" id="birthDate" name="birthDate"
                                        value="{{ old('birthDate', $employee->birth_date) }}" placeholder="Enter Birth Date">
                                    @if ($errors->has('birthDate'))
                                        <span class="text-danger"> {{ $errors->first('birthDate') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1" @if (old('status', $employee->status) == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status', $employee->status) == 0) selected @endif>
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
                                            <option value="Male" @if (old('gender', $employee->gender) == 'male') selected @endif>Male
                                            </option>
                                            <option value="Female" @if (old('gender', $employee->gender) == 'female') selected @endif>
                                                Female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password <i class="text-danger">*</i></label>
                                        <input type="password" id="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger"> {{ $errors->first('password') }}</span>
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
                                    Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
