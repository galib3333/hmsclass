@extends('backend.app')
@section('title', trans('Users List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <a href="{{ route('user.create') }}" class="btn btn-light px-2 mb-3">Add User<i class="fa fa-plus px-2"></i></a> --}}
                <h5 class="card-title">User Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Contact') }}</th>
                                <th scope="col">{{ __('Role') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user as $u)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="50px"
                                            src="{{ asset('public/uploads/employees/' . $u->employBasic?->image) }}"
                                            alt="">
                                    </td>
                                    <td>{{ $u->name_en }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->contact_no_en }}</td>
                                    <td>{{ $u->role?->name }}</td>

                                    <td>
                                        @if ($u->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td>
                                    <!-- or <td>{{ $u->status == 1 ? 'Active' : 'Inactive' }}</td>-->
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('user.edit', encryptor('encrypt', $u->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $u->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $u->id }}"
                                            action="{{ route('user.destroy', encryptor('encrypt', $u->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No User Found</th>
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
