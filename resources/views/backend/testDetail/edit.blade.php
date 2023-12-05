@extends('backend.app')

@section('title', trans('Update Test'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('test.index') }}" class="btn btn-light px-2 mb-3">Test List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Test Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('test.update', encryptor('encrypt', $test->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $test->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="patientId">Patient Name <i class="text-danger">*</i></label>
                                    <select class="form-control" name="patientId" id="patientId">
                                        <option value="">Select Patient</option>
                                        @forelse($patient as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('patientId', $test->patient_id) == $p->id ? 'selected' : '' }}>
                                                {{ $p->name_en }}</option>
                                        @empty
                                            <option value="">No Patient Name found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('patientId'))
                                        <span class="text-danger"> {{ $errors->first('patientId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="vat">Vat<i class="text-danger">*</i></label>
                                    <input type="number" class="form-control" id="vat" name="vat"
                                        value="{{ old('vat', $test->vat) }}" placeholder="Enter Vat">
                                    @if ($errors->has('vat'))
                                        <span class="text-danger"> {{ $errors->first('vat') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="discount">Discount<i class="text-danger">*</i></label>
                                    <input type="number" class="form-control" id="discount" name="discount"
                                        value="{{ old('discount', $test->discount) }}" placeholder="Enter Discount">
                                    @if ($errors->has('discount'))
                                        <span class="text-danger"> {{ $errors->first('discount') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="paid">Paid</label>
                                    <input type="text" class="form-control" id="paid" name="paid"
                                        value="{{ old('paid' , $test->paid) }}" placeholder="Enter Employee Name In Bangla">
                                    @if ($errors->has('paid'))
                                        <span class="text-danger"> {{ $errors->first('paid') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if (old('status', $test->status) == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status', $test->status) == 0) selected @endif>
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
