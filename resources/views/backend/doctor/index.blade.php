@extends('backend.app')
@section('title', trans('Doctor List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('doctor.create') }}" class="btn btn-light px-2 mb-3">Add Doctor<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Doctor Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Name EN') }}</th>
                                <th scope="col">{{ __('Department') }}</th>
                                <th scope="col">{{ __('Designation') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Contact No EN') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($doctor as $doc)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="50px" src="{{ asset('public/uploads/employees/' . $doc->image) }}"
                                            alt=""></td>
                                    <td>{{ $doc->employ->name_en }}</td>
                                    <td>{{ $doc->department?->dep_name }}</td>
                                    <td>{{ $doc->designation?->desig_name }}</td>
                                    <td>{{ $doc->employ->email }}</td>
                                    <td>{{ $doc->employ->contact_no_en }}</td>
                                    <td>{{ $doc->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('doctor.edit', encryptor('encrypt', $doc->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $doc->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $doc->id }}"
                                            action="{{ route('doctor.destroy', encryptor('encrypt', $doc->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Doctor Found</th>
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
