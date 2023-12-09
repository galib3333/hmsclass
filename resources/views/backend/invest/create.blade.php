@extends('backend.app')

@section('title', trans('Create A Investigation'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('invest.index') }}" class="btn btn-light px-2 mb-3">Room List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Investigation Create Form</div>
                        <hr>
                        <form method="post" action="{{ route('invest.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="invCatId">Investigation Category<i class="text-danger">*</i></label>
                                    <select class="form-control" name="invCatId" id="invCatId">
                                        <option value="">Select Investigation Category</option>
                                        @forelse($investCat as $ic)
                                            <option value="{{ $ic->id }}"
                                                {{ old('invCatId') == $ic->id ? 'selected' : '' }}>
                                                {{ $ic->invset_cat_name }}</option>
                                        @empty
                                            <option value="">No Investigation Category found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('invCatId'))
                                        <span class="text-danger"> {{ $errors->first('invCatId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="invsetName">Investigation Title<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="invsetName" name="invsetName"
                                        value="{{ old('invsetName') }}" placeholder="Enter Room Number">
                                    @if ($errors->has('invsetName'))
                                        <span class="text-danger"> {{ $errors->first('invsetName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="description">Investigation Description<i class="text-danger">*</i></label>
                                    <textarea type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"
                                        placeholder="Enter Investigation Description"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price') }}" placeholder="Enter Room Price">
                                    @if ($errors->has('price'))
                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
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
