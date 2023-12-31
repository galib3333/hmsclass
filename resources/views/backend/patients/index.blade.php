@extends('backend.app')

@section('title', trans("Patient's List"))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('patients.create') }}" class="btn btn-light px-2 mb-3">Add Patient<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Patient Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Patient Id') }}</th>
                                <th scope="col">{{ __('Name EN') }}</th>
                                <th scope="col">{{ __('Name BN') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Contact Number EN') }}</th>
                                <th scope="col">{{ __('Contact Number BN') }}</th>
                                <th scope="col">{{ __('Present Address') }}</th>
                                <th scope="col">{{ __('Permanent Address') }}</th>
                                <th scope="col">{{ __('Birth Date') }}</th>
                                <th scope="col">{{ __('Gender') }}</th>
                                <th scope="col">{{ __('Blood Type') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($patient as $p)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="50px" src="{{ asset('public/uploads/patients/' . $p->image) }}"
                                            alt="">
                                    </td>
                                    <td>{{ $p->patient_id }}</td>
                                    <td>{{ $p->name_en }}</td>
                                    <td>{{ $p->name_bn }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->contact_no_en }}</td>
                                    <td>{{ $p->contact_no_bn }}</td>
                                    <td>{{ $p->present_address }}</td>
                                    <td>{{ $p->permanent_address }}</td>
                                    <td>{{ $p->birth_date }}</td>
                                    <td>{{ $p->gender }}</td>
                                    <td>{{ $p->blood?->blood_type_name }}</td>
                                    {{-- <td>
                                        @if ($p->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td> --}}
                                    <td class="{{ $p->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $p->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('patients.edit', encryptor('encrypt', $p->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $p->id }}"
                                            action="{{ route('patients.destroy', encryptor('encrypt', $p->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Patient Found</th>
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
