@extends('backend.app')
@section('title', trans('Employee List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('employees.create') }}" class="btn btn-light px-2 mb-3">Add Employee<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Employee Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Name EN') }}</th>
                                <th scope="col">{{ __('Name BN') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Contact Number EN') }}</th>
                                <th scope="col">{{ __('Contact Number BN') }}</th>
                                <th scope="col">{{ __('Present Address') }}</th>
                                <th scope="col">{{ __('Permanent Address') }}</th>
                                <th scope="col">{{ __('Gender') }}</th>
                                <th scope="col">{{ __('Birth Date') }}</th>
                                <th scope="col">{{ __('Blood Group') }}</th>
                                <th scope="col">{{ __('Role') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employee as $e)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="50px" src="{{ asset('public/uploads/employees/' . $e->image) }}"
                                            alt=""></td>
                                    <td>{{ $e->name_en }}</td>
                                    <td>{{ $e->name_bn }}</td>
                                    <td>{{ $e->email }}</td>
                                    <td>{{ $e->contact_no_en }}</td>
                                    <td>{{ $e->contact_no_bn }}</td>
                                    <td>{{ $e->present_address }}</td>
                                    <td>{{ $e->permanent_address }}</td>
                                    <td>{{ $e->gender }}</td>
                                    <td>{{ $e->birth_date }}</td>
                                    <td>{{ $e->blood?->blood_type_name }}</td>
                                    <td>{{ $e->role?->name }}</td>

                                    <td class="{{ $e->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $e->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>

                                    {{-- <td>
                                        @if ($e->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td> --}}

                                    <td class="white-space-nowrap">
                                        <a href="{{ route('employees.edit', encryptor('encrypt', $e->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $e->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $e->id }}"
                                            action="{{ route('employees.destroy', encryptor('encrypt', $e->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Employee Found</th>
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
