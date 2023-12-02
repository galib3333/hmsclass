@extends('backend.app')

@section('title', trans('Update Shift'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('shift.index') }}" class="btn btn-light px-2 mb-3">Blood List<i
                            class="fa fa-list px-2"></i></a>
                        <div class="card-title">Shift Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('shift.update', encryptor('encrypt', $shift->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $shift->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="shiftName">Shift Name<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="shiftName" name="shiftName"
                                        value="{{ old('shiftName',  $shift->s_name) }}" placeholder="Enter Shift Name">
                                    @if ($errors->has('shiftName'))
                                        <span class="text-danger"> {{ $errors->first('shiftName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="startTime">Start Time<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="startTime" name="startTime"
                                        value="{{ old('startTime', $shift->start) }}" placeholder="Enter Start Time">
                                    @if ($errors->has('startTime'))
                                        <span class="text-danger"> {{ $errors->first('startTime') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="endTime">End Time<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="endTime" name="endTime"
                                        value="{{ old('endTime', $shift->end_time) }}" placeholder="Enter End Time">
                                    @if ($errors->has('endTime'))
                                        <span class="text-danger"> {{ $errors->first('endTime') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if (old('status', $shift->status) == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status', $shift->status) == 0) selected @endif>
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
                                    Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
