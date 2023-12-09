@extends('backend.app')

@section('title', trans('Update Birth Information'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('birth.index') }}" class="btn btn-light px-2 mb-3">Birth Information List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Birth Information Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('birth.update', encryptor('encrypt', $birth->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="patientId">Patient Name <i class="text-danger">*</i></label>
                                    <select class="form-control" name="patientId" id="patientId">
                                        <option value="">Select Patient</option>
                                        @forelse($patient as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('patientId', $birth->patient_id) == $p->id ? 'selected' : '' }}>
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
                                    <label for="title">Title<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title', $birth->title) }}" placeholder="Enter Title">
                                    @if ($errors->has('title'))
                                        <span class="text-danger"> {{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option value="0" @if (old('gender', $birth->gender) == '0') selected @endif>Boy
                                            </option>
                                            <option value="1" @if (old('gender', $birth->gender) == '1') selected @endif>
                                                Girl</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        value="{{ old('description', $birth->description) }}" placeholder="Enter Description">
                                    @if ($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="docRef">Doctor's Ref<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="docRef" name="docRef"
                                        value="{{ old('docRef', $birth->doc_ref) }}" placeholder="Enter Doctor's Ref">
                                    @if ($errors->has('docRef'))
                                        <span class="text-danger"> {{ $errors->first('docRef') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="birthDate">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthDate" name="birthDate"
                                        value="{{ old('birthDate', $birth->birth_date) }}" placeholder="Enter Birth Date">
                                    @if ($errors->has('birthDate'))
                                        <span class="text-danger"> {{ $errors->first('birthDate') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1" @if (old('status', $birth->status) == 1) selected @endif>
                                                Active
                                            </option>
                                            <option value="0" @if (old('status', $birth->status) == 0) selected @endif>
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
