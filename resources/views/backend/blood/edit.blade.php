@extends('backend.app')

@section('title', trans('Update Blood Group'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Blood Group Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('blood.update', encryptor('encrypt', $blood->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $blood->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="bloodTypeName">Blood Group<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="bloodTypeName" name="bloodTypeName"
                                        value="{{ old('bloodTypeName',  $blood->blood_type_name) }}" placeholder="Enter Blood Group Name">
                                    @if ($errors->has('bloodTypeName'))
                                        <span class="text-danger"> {{ $errors->first('bloodTypeName') }}</span>
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
