@extends('backend.app')
@section('title', trans('Blood Group List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('blood.create') }}" class="btn btn-light px-2 mb-3">Add Blood Group<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Blood Group Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Blood Group') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blood as $b)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $b->blood_type_name }}</td>
                                    {{-- <td>
                                        @if ($u->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td> --}}
                                    <td>{{ $b->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('blood.edit', encryptor('encrypt', $b->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $b->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $b->id }}"
                                            action="{{ route('blood.destroy', encryptor('encrypt', $b->id)) }}"
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
