@extends('backend.app')

@section('title', trans('Test Invoice'))

@section('content')
    <div class="container-fluid">

        <div class="row mt-3">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Test
                                        Invoice</span></a>
                            </li>
                        </ul>
                        <div id="printableContent">
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="col-md-7 mt-3">

                                                <label for="status">Patient's ID:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Patient's Name:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Address:</label>
                                                <hr>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Dx:</label>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="col-md-8 mx-5 mt-3">
                                                <label for="">Date:</label>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Age:</label>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Gender:</label>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-md-10 mx-5 ">
                                                <label for="">Phone Number:</label>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">

                                        <div class="col-md-12 mt-5">
                                            <div class="col-md-4 mt-5">
                                                <label for="">Patient Test Information</label>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4 col-12">
                                                    <label for="invsetCatName">Investigation Category<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control" name="invsetCatName" id="invsetCatName">
                                                        <option value="">--Investigation Category--</option>
                                                        {{-- @forelse($roomCat as $rc)
                                                                <option value="{{ $rc->id }}"
                                                                    {{ old('roomCatId') == $rc->id ? 'selected' : '' }}>
                                                                    {{ $rc->room_cat_name }}</option>
                                                            @empty
                                                                <option value="">No Room Category found</option>
                                                            @endforelse --}}
                                                    </select>
                                                    @if ($errors->has('roomCatId'))
                                                        <span class="text-danger"> {{ $errors->first('roomCatId') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 col-12">
                                                    <label for="roomCatId">Investigation Name<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control" name="roomCatId" id="roomCatId">
                                                        <option value="">--Investigation Name--</option>
                                                        {{-- @forelse($roomCat as $rc)
                                                                <option value="{{ $rc->id }}"
                                                                    {{ old('roomCatId') == $rc->id ? 'selected' : '' }}>
                                                                    {{ $rc->room_cat_name }}</option>
                                                            @empty
                                                                <option value="">No Room Category found</option>
                                                            @endforelse --}}
                                                    </select>
                                                    @if ($errors->has('roomCatId'))
                                                        <span class="text-danger"> {{ $errors->first('roomCatId') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-2 col-12">
                                                    <label for="price">Price</label>
                                                    <input type="number" class="form-control" id="price" name="floorNo"
                                                        value="{{ old('price') }}" placeholder="Enter Price">
                                                    @if ($errors->has('price'))
                                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-2 col-12">
                                                    <label for="price">Action</label>
                                                    <a href="{{ route('test.create') }}" class="btn btn-light px-3 mb-3">Add
                                                        Test</a>
                                                    <a href="{{ route('test.create') }}"
                                                        class="btn btn-light px-2 mb-3">Renove Test</a>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="form-group col-md-2 col-12 mx-5">
                                                    <label for="price">Total</label>
                                                    <input type="number" class="form-control" id="price" name="floorNo"
                                                        value="{{ old('price') }}" placeholder="Enter Price">
                                                    @if ($errors->has('price'))
                                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="form-group col-md-2 col-12 mx-5">
                                                    <label for="price">Vat</label>
                                                    <input type="number" class="form-control" id="price" name="floorNo"
                                                        value="{{ old('price') }}" placeholder="Enter Price">
                                                    @if ($errors->has('price'))
                                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="form-group col-md-2 col-12 mx-5">
                                                    <label for="price">Discount</label>
                                                    <input type="number" class="form-control" id="price" name="floorNo"
                                                        value="{{ old('price') }}" placeholder="Enter Price">
                                                    @if ($errors->has('price'))
                                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group justify-content-end">
                                    <button type="submit" class="btn btn-light px-3" onclick="printProfile()"><i
                                            class="icon-lock"></i>
                                        Print</button>
                                </div>
                            </div>


                            {{-- end of print container --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>

    <!-- End container-fluid-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    {{-- <script>
        function printProfile() {
            window.print();
        }
    </script> --}}
    <script>
        function printProfile() {
            // Clone the content to be printed
            let printableContent = document.getElementById('printableContent').cloneNode(true);

            // Create a new window
            let printWindow = window.open('', '_blank');

            // Append the content to the new window
            printWindow.document.body.appendChild(printableContent);

            // Initiate printing
            printWindow.print();
        }
    </script>
@endsection
