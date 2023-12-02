@extends('backend.app')
@section('title', trans('Shift List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('shift.create') }}" class="btn btn-light px-2 mb-3">Add Shift<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Shift Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Shift Name') }}</th>
                                <th scope="col">{{ __('Start Time') }}</th>
                                <th scope="col">{{ __('End Time') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($shift as $s)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $s->s_name }}</td>
                                    <td>{{ $s->start }}</td>
                                    <td>{{ $s->end_time }}</td>
                                    <td>{{ $s->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('shift.edit', encryptor('encrypt', $s->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $s->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $s->id }}"
                                            action="{{ route('shift.destroy', encryptor('encrypt', $s->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Blood Group Found</th>
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
