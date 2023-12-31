@extends('backend.app')

@section('title', trans('Update Room'))

@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('roomList.index') }}" class="btn btn-light px-2 mb-3">Room List<i
                                class="fa fa-list px-2"></i></a>
                        <div class="card-title">Room Update Form</div>
                        <hr>
                        <form method="post" action="{{ route('roomList.update', encryptor('encrypt', $roomList->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{ encryptor('encrypt', $roomList->id) }}">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="roomCatId">Room Category<i class="text-danger">*</i></label>
                                    <select class="form-control" name="roomCatId" id="roomCatId">
                                        <option value="">Select Room Category</option>
                                        @forelse($roomCat as $rc)
                                            <option value="{{ $rc->id }}"
                                                {{ $roomList->room_cat_id == $rc->id ? 'selected' : '' }}>
                                                {{ $rc->room_cat_name }}
                                            </option>

                                        @empty
                                            <option value="">No Room Category found</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('roomCatId'))
                                        <span class="text-danger"> {{ $errors->first('roomCatId') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="roomNo">Room Number<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="roomNo" name="roomNo"
                                        value="{{ old('roomNo', $roomList->room_no) }}" placeholder="Enter Room Number">
                                    @if ($errors->has('roomNo'))
                                        <span class="text-danger"> {{ $errors->first('roomNo') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="floorNo">Floor Number</label>
                                    <input type="text" class="form-control" id="floorNo" name="floorNo"
                                        value="{{ old('floorNo', $roomList->floor_no) }}"
                                        placeholder="Enter Employee Name In Bangla">
                                    @if ($errors->has('floorNo'))
                                        <span class="text-danger"> {{ $errors->first('floorNo') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="description">Room Description<i class="text-danger">*</i></label>
                                    <textarea type="text" class="form-control" id="description" name="description" value=""
                                        placeholder="Enter Room Description">{{ old('description', $roomList->description) }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="capacity">Room Capacity<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="capacity" name="capacity"
                                        value="{{ old('capacity', $roomList->capacity) }}"
                                        placeholder="Enter Room Capacity">
                                    @if ($errors->has('capacity'))
                                        <span class="text-danger"> {{ $errors->first('capacity') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price', $roomList->price) }}" placeholder="Enter Room Price">
                                    @if ($errors->has('price'))
                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1" @if (old('status', $roomList->status) == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if (old('status', $roomList->status) == 0) selected @endif>
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
