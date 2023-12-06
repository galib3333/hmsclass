@extends('backend.app')

@section('title', trans('Update Schedule'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('schedule.index') }}" class="btn btn-light px-2 mb-3">Schedule List<i
                            class="fa fa-list px-2"></i></a>
                        <div class="card-title">Schedule Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('schedule.update', encryptor('encrypt', $schedule->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $schedule->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="employId">Employee Name<i class="text-danger">*</i></label>
                                    <select class="form-control" name="employId" id="employId">
                                        <option value="">Select Employee Name</option>
                                        @forelse($employees as $e)
                                            <option value="{{ $e->id }}"
                                                {{ old('employId', $schedule->employ_id) == $e->id ? 'selected' : '' }}>
                                                {{ $e->name_en }}</option>
                                        @empty
                                            <option value="">No Employee found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('employId'))
                                        <span class="text-danger"> {{ $errors->first('employId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="dayId">Day<i class="text-danger">*</i></label>
                                    <select class="form-control" name="dayId" id="dayId">
                                        <option value="">Select Day</option>
                                        @forelse($day as $d)
                                            <option value="{{ $d->id }}"
                                                {{ old('dayId', $schedule->day_id) == $d->id ? 'selected' : '' }}>
                                                {{ $d->day_name }}</option>
                                        @empty
                                            <option value="">No Day found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('dayId'))
                                        <span class="text-danger"> {{ $errors->first('dayId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="shiftId">Shift<i class="text-danger">*</i></label>
                                    <select class="form-control" name="shiftId" id="shiftId">
                                        <option value="">Select Shift</option>
                                        @forelse($shift as $s)
                                            <option value="{{ $s->id }}"
                                                {{ old('shiftId', $schedule->shift_id) == $s->id ? 'selected' : '' }}>
                                                {{ $s->s_name }}</option>
                                        @empty
                                            <option value="">No Shift found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('shiftId'))
                                        <span class="text-danger"> {{ $errors->first('shiftId') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if (old('status', $schedule->status) == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status', $schedule->status) == 0) selected @endif>
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
