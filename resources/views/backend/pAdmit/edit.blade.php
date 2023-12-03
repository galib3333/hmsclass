@extends('backend.app')

@section('title', trans('Update Patient Admit'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('pAdmit.index') }}" class="btn btn-light px-2 mb-3">Patient List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Patient Admit Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('pAdmit.update', encryptor('encrypt', $pAdmit->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="patientId">Patient Name <i class="text-danger">*</i></label>
                                    <select class="form-control" name="bloodId" id="patientId">
                                        <option value="">Select Patient</option>
                                        @forelse($patient as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('patientId', $pAdmit->patient_id) == $p->id ? 'selected' : '' }}>
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
                                    <label for="roomId">Room Number <i class="text-danger">*</i></label>
                                    <select class="form-control" name="bloodId" id="roomId">
                                        <option value="">Select Room Number</option>
                                        @forelse($roomList as $rl)
                                            <option value="{{ $rl->id }}"
                                                {{ old('roomId', $pAdmit->room_id) == $rl->id ? 'selected' : '' }}>
                                                {{ $rl->room_no }}</option>
                                        @empty
                                            <option value="">No Room Number found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('roomId'))
                                        <span class="text-danger"> {{ $errors->first('roomId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="fatherName">Father's Name<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="fatherName" name="fatherName"
                                        value="{{ old('fatherName', $pAdmit->father_name) }}"
                                        placeholder="Enter Father's Name">
                                    @if ($errors->has('fatherName'))
                                        <span class="text-danger"> {{ $errors->first('fatherName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="motherName">Mother's Name<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="motherName" name="motherName"
                                        value="{{ old('motherName', $pAdmit->mother_name) }}"
                                        placeholder="Enter Mother's Name">
                                    @if ($errors->has('motherName'))
                                        <span class="text-danger"> {{ $errors->first('motherName') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="husbandName">Husband's Name</label>
                                    <input type="text" class="form-control" id="husbandName" name="husbandName"
                                        value="{{ old('husbandName', $pAdmit->husband_name) }}"
                                        placeholder="Enter Husband's Name">
                                    @if ($errors->has('husbandName'))
                                        <span class="text-danger"> {{ $errors->first('husbandName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="doctorRef">Doctor's Ref<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="doctorRef" name="doctorRef"
                                        value="{{ old('doctorRef', $pAdmit->doctor_ref) }}"
                                        placeholder="Enter Doctor's Ref">
                                    @if ($errors->has('doctorRef'))
                                        <span class="text-danger"> {{ $errors->first('doctorRef') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="problem">Problem</label>
                                    <textarea type="text" class="form-control" id="problem" name="problem" placeholder="Enter Your Problem">{{ old('problem', $pAdmit->problem) }}</textarea>
                                    @if ($errors->has('problem'))
                                        <span class="text-danger"> {{ $errors->first('problem') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="admitDate">Date of Admit</label>
                                    <input type="date" class="form-control" id="admitDate" name="admitDate"
                                        value="{{ old('admitDate', $pAdmit->admit_date) }}"
                                        placeholder="Enter Your Admit Date">
                                    @if ($errors->has('admitDate'))
                                        <span class="text-danger"> {{ $errors->first('admitDate') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="guardian">Guardian</label>
                                    <input type="text" class="form-control" id="guardian" name="guardian"
                                        value="{{ old('guardian', $pAdmit->guardian) }}"
                                        placeholder="Enter Your Guardian's Name">
                                    @if ($errors->has('guardian'))
                                        <span class="text-danger"> {{ $errors->first('guardian') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="relation">Relation</label>
                                    <input type="text" class="form-control" id="relation" name="relation"
                                        value="{{ old('relation', $pAdmit->relation) }}"
                                        placeholder="Enter Relation With Guardian">
                                    @if ($errors->has('relation'))
                                        <span class="text-danger"> {{ $errors->first('relation') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="condition">Patient's Condition</label>
                                    <input type="text" class="form-control" id="condition" name="condition"
                                        value="{{ old('condition', $pAdmit->condition) }}"
                                        placeholder="Enter Patient's Condition">
                                    @if ($errors->has('condition'))
                                        <span class="text-danger"> {{ $errors->first('condition') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if (old('status', $pAdmit->status) == 1) selected @endif>
                                                Active
                                            </option>
                                            <option value="0" @if (old('status', $pAdmit->status) == 0) selected @endif>
                                                Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger"> {{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="maritalStatus">Marital Status: <i class="text-danger">*</i></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatus"
                                            id="single" value="single"
                                            {{ old('maritalStatus', $pAdmit->maritalStatus) == 'single' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="single">Single</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatus"
                                            id="married" value="married"
                                            {{ old('maritalStatus', $pAdmit->maritalStatus) == 'married' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="married">Married</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatus"
                                            id="divorced" value="divorced"
                                            {{ old('maritalStatus', $pAdmit->maritalStatus) == 'divorced' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="divorced">Divorced</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatus"
                                            id="widowed" value="widowed"
                                            {{ old('maritalStatus', $pAdmit->maritalStatus) == 'widowed' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="widowed">Widowed</label>
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
