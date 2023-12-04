@extends('backend.app')

@section('title', trans('Create Investigation Category'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('investCat.index') }}" class="btn btn-light px-2 mb-3">Investigation Category List<i
                            class="fa fa-list px-2"></i></a>
                        <div class="card-title">Investigation Category Create Form</div>
                        <hr>
                        <form method="post" action="{{route('investCat.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="invsetCatName">Investigation Category<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="invsetCatName" name="invsetCatName"
                                        value="{{ old('invsetCatName') }}" placeholder="Enter Investigation Category">
                                    @if ($errors->has('invsetCatName'))
                                        <span class="text-danger"> {{ $errors->first('invsetCatName') }}</span>
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