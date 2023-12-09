@extends('backend.app')

@section('title', trans('Update Designation'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('designation.index') }}" class="btn btn-light px-2 mb-3">Designation List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Designation Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('designation.update', encryptor('encrypt', $designation->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $designation->id) }}">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="desigName">Designation Name<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="desigName" name="desigName"
                                            value="{{ old('desigName', $designation->desig_name) }}"
                                            placeholder="Enter Designation Name">
                                        @if ($errors->has('desigName'))
                                            <span class="text-danger"> {{ $errors->first('desigName') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="desigDes">Designation Description<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="depDes" name="desigDes"
                                            value="{{ old('desigDes', $designation->desig_des) }}"
                                            placeholder="Enter Designation Description">
                                        @if ($errors->has('desigDes'))
                                            <span class="text-danger"> {{ $errors->first('desigDes') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="">Select Status</option>
                                                <option value="1" @if (old('status', $designation->status) == 1) selected @endif>
                                                    Active
                                                </option>
                                                <option value="0" @if (old('status', $designation->status) == 0) selected @endif>
                                                    Inactive</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group py-2 px-3 col-12">
                                        <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox1" checked="" />
                                            <label for="user-checkbox1">I Agree with Terms & Conditions</label>
                                        </div>
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
