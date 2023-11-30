@extends('backend.app')
@section('title', trans("Patient's Admit List"))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('pAdmit.create') }}" class="btn btn-light px-2 mb-3">Add More<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Patient's Admit Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Patient Name') }}</th>
                                <th scope="col">{{ __("Father's Name") }}</th>
                                <th scope="col">{{ __("Mother's Name") }}</th>
                                <th scope="col">{{ __("Husband's Name") }}</th>
                                <th scope="col">{{ __('Marital Status') }}</th>
                                <th scope="col">{{ __("Doctor's Ref") }}</th>
                                <th scope="col">{{ __('Problem') }}</th>
                                <th scope="col">{{ __('Date of Admit') }}</th>
                                <th scope="col">{{ __('Room Number') }}</th>
                                <th scope="col">{{ __('Guardian') }}</th>
                                <th scope="col">{{ __('Relation') }}</th>
                                <th scope="col">{{ __("Patient's Condition") }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pAdmit as $pa)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="50px" src="{{ asset('public/uploads/patients/' . $pa->image) }}"
                                            alt="">
                                    </td>
                                    <td>{{ $pa->patient?->name_en }}</td>
                                    <td>{{ $pa->father_name }}</td>
                                    <td>{{ $pa->mother_name }}</td>
                                    <td>{{ $pa->husband_name }}</td>
                                    <td>{{ $pa->marital_status }}</td>
                                    <td>{{ $pa->doctor_ref }}</td>
                                    <td>{{ $pa->problem }}</td>
                                    <td>{{ $pa->admit_date }}</td>
                                    <td>{{ $pa->roomList?->room_no }}</td>
                                    <td>{{ $pa->guardian }}</td>
                                    <td>{{ $pa->relation }}</td>
                                    <td>{{ $pa->condition }}</td>
                                    <td>{{ $pa->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('pAdmit.edit', encryptor('encrypt', $pa->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $pa->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $pa->id }}"
                                            action="{{ route('pAdmit.destroy', encryptor('encrypt', $pa->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">Nothing Found</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Hover table end -->

@endsection
