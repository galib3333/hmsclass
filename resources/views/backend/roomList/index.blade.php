@extends('backend.app')

@section('title', trans('Room List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('roomList.create') }}" class="btn btn-light px-2 mb-3">Add Room<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Room Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Room Category') }}</th>
                                <th scope="col">{{ __('Room Number') }}</th>
                                <th scope="col">{{ __('Floor Number') }}</th>
                                <th scope="col">{{ __('Description') }}</th>
                                <th scope="col">{{ __('Room Capacity') }}</th>
                                <th scope="col">{{ __('Price') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roomList as $r)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $r->roomCat->room_cat_name }}</td>
                                    <td>{{ $r->room_no }}</td>
                                    <td>{{ $r->floor_no }}</td>
                                    <td>{{ $r->description }}</td>
                                    <td>{{ $r->capacity }}</td>
                                    <td>{{ $r->price }}</td>
                                    <td class="{{ $r->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $r->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('roomList.edit', encryptor('encrypt', $r->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $r->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $r->id }}"
                                            action="{{ route('roomList.destroy', encryptor('encrypt', $r->id)) }}"
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
