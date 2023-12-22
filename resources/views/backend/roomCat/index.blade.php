@extends('backend.app')
@section('title', trans('Room Category List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('roomCat.create') }}" class="btn btn-light px-2 mb-3">Add Room Category<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Room Category Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Room Category Name') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roomCat as $rc)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $rc->room_cat_name }}</td>
                                    {{-- <td>
                                        @if ($u->status == 1)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('Inactive') }}
                                        @endif
                                    </td> --}}
                                    <td class="{{ $rc->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $rc->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('roomCat.edit', encryptor('encrypt', $rc->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $rc->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $rc->id }}"
                                            action="{{ route('roomCat.destroy', encryptor('encrypt', $rc->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Room Category Found</th>
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
