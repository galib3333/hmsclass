@extends('backend.app')

@section('title', trans('Create Doctor'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('doctor.index') }}" class="btn btn-light px-2 mb-3">Doctor List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Doctor Create Form</div>
                        <hr>
                        <form method="post" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="employId">Doctor<i class="text-danger">*</i></label>
                                    {{-- @php
                                        dd($doctors);
                                    @endphp --}}
                                    <select class="form-control" name="employId" id="employId">
                                        <option value="">Select Doctor</option>
                                        @forelse($employee as $e)
                                            <option value="{{ $e->id }}"
                                                {{ old('employId') == $e->id ? 'selected' : '' }}>
                                                {{ $e->name_en }}</option>
                                        @empty
                                            <option value="">No Doctor found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('employId'))
                                        <span class="text-danger"> {{ $errors->first('employId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="departmentId">Departments<i class="text-danger">*</i></label>
                                    <select class="form-control" name="departmentId" id="departmentId">
                                        <option value="">Select Department</option>
                                        @forelse($department as $d)
                                            <option value="{{ $d->id }}"
                                                {{ old('departmentId') == $d->id ? 'selected' : '' }}>
                                                {{ $d->dep_name }}</option>
                                        @empty
                                            <option value="">No Department found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('departmentId'))
                                        <span class="text-danger"> {{ $errors->first('departmentId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="designationId">Designations<i class="text-danger">*</i></label>
                                    <select class="form-control" name="designationId" id="designationId">
                                        <option value="">Select Designation</option>
                                        @forelse($designation as $des)
                                            <option value="{{ $des->id }}"
                                                {{ old('designationId') == $des->id ? 'selected' : '' }}>
                                                {{ $des->desig_name }}</option>
                                        @empty
                                            <option value="">No Designation found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('designationId'))
                                        <span class="text-danger"> {{ $errors->first('designationId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="biography">Biography<i class="text-danger">*</i></label>
                                    <textarea class="form-control" id="biography" name="biography" value="{{ old('biography') }}"
                                        placeholder="Enter Biography"></textarea>
                                    @if ($errors->has('biography'))
                                        <span class="text-danger"> {{ $errors->first('biography') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="specialist">Specialization</label>
                                    <input type="text" class="form-control" id="specialist" name="specialist"
                                        value="{{ old('specialist') }}" placeholder="Enter specialization">
                                    @if ($errors->has('specialist'))
                                        <span class="text-danger"> {{ $errors->first('specialist') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="education">Education Details<i class="text-danger">*</i></label>
                                    <textarea class="form-control" id="education" name="education" value="{{ old('education') }}"
                                        placeholder="Enter Education Information"></textarea>
                                    @if ($errors->has('education'))
                                        <span class="text-danger"> {{ $errors->first('education') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="fees">Fees<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="fees" name="fees"
                                        value="{{ old('fees') }}" placeholder="Enter Fee">
                                    @if ($errors->has('fees'))
                                        <span class="text-danger"> {{ $errors->first('fees') }}</span>
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
