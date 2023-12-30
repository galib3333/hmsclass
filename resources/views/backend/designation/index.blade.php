@extends('backend.app')
@section('title', trans('Designation List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('designation.create') }}" class="btn btn-light px-2 mb-3">Add Designation<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Designation Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Designation Name') }}</th>
                                <th scope="col">{{ __('Designation Description') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($designation as $des)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $des->desig_name }}</td>
                                    <td>{{ $des->desig_des }}</td>
                                    {{-- <td>
                                        @if ($u->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td> --}}
                                    <td class="{{ $des->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $des->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('designation.edit', encryptor('encrypt', $des->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $des->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $des->id }}"
                                            action="{{ route('designation.destroy', encryptor('encrypt', $des->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Designation Found</th>
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
