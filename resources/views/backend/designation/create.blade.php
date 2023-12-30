@extends('backend.app')

@section('title', trans('Create Designation'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('designation.index') }}" class="btn btn-light px-2 mb-3">Designation List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Designation Create Form</div>
                        <hr>
                        <form method="post" action="{{ route('designation.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="desigName">Designation Name<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="desigName" name="desigName"
                                        value="{{ old('desigName') }}" placeholder="Enter Designation Name">
                                    @if ($errors->has('desigName'))
                                        <span class="text-danger"> {{ $errors->first('desigName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="desigDes">Designation Description<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="desigDes" name="desigDes"
                                        value="{{ old('desigDes') }}" placeholder="Enter Designation Description">
                                    @if ($errors->has('desigDes'))
                                        <span class="text-danger"> {{ $errors->first('desigDes') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="" @if (old('status') === null) selected @endif>Select
                                                Status</option>
                                            <option value="1" @if (old('status') == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status') == 0)  @endif>
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
