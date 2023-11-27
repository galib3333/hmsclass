@extends('backend.app')
@section('title', trans('Role'))
@section('page', trans('List'))
@section('content')

    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <a href="{{ route('user.create') }}" class="btn btn-light px-2 mb-3">Add User<i class="fa fa-plus px-2"></i></a> --}}
                <a href="{{ route('role.create') }}" class="btn btn-light px-2 mb-3 mt-2 mx-2">Add Role<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">User Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Identity') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->identity }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('role.edit', encryptor('encrypt', $p->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('permission.list', encryptor('encrypt', $p->id)) }}">
                                            <i class="fa fa-unlock"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $p->id }}"
                                            action="{{ route('role.destroy', encryptor('encrypt', $p->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Role Found</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
