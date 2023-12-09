@extends('backend.app')

@section('title', trans('Create User'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('user.index') }}" class="btn btn-light px-2 mb-3">User List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">User Create Form</div>
                        <hr>
                        <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="roleId">Role <i class="text-danger">*</i></label>
                                    <select class="form-control" name="roleId" id="roleId">
                                        <option value="">Select Role</option>
                                        @forelse($role as $r)
                                            <option value="{{ $r->id }}"
                                                {{ old('roleId') == $r->id ? 'selected' : '' }}>
                                                {{ $r->name }}</option>
                                        @empty
                                            <option value="">No Role found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('roleId'))
                                        <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                    @endif
                                </div>
                                <!-- Fields from EmployBasic model -->
                                <div class="form-group col-md-6 col-12">
                                    <label for="userName_en">Employee Name <i class="text-danger">*</i></label>
                                    <select class="form-control" name="userName_en" id="userName_en">
                                        <option value="">Select Employee</option>
                                        @forelse($employee as $emp)
                                            <option value="{{ $emp->id }}">{{ $emp->name_en }}</option>
                                        @empty
                                            <option value="">No Employees found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('employeeId'))
                                        <span class="text-danger"> {{ $errors->first('employeeId') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="">Select Status</option>
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
                                        <label for="fullAccess">Full Access</label>
                                        <select id="fullAccess" class="form-control" name="fullAccess">
                                            <option value="0" @if (old('fullAccess') == 0) selected @endif>No
                                            </option>
                                            <option value="1" @if (old('fullAccess') == 1) selected @endif>Yes
                                            </option>
                                        </select>
                                        @if ($errors->has('fullAccess'))
                                            <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password <i class="text-danger">*</i></label>
                                        <input type="password" id="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger"> {{ $errors->first('password') }}</span>
                                        @endif
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
