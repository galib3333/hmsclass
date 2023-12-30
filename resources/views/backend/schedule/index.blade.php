@extends('backend.app')

@section('title', trans('Schedule List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('schedule.create') }}" class="btn btn-light px-2 mb-3">Add Schedule<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Schedule Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Employee Name') }}</th>
                                <th scope="col">{{ __('Day') }}</th>
                                <th scope="col">{{ __('Shift') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($schedule as $s)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $s->employee?->name_en }}</td>
                                    <td>{{ $s->day?->day_name }}</td>
                                    <td>{{ $s->shift?->s_name }}</td>
                                    <td class="{{ $s->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $s->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('schedule.edit', encryptor('encrypt', $s->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $s->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $s->id }}"
                                            action="{{ route('schedule.destroy', encryptor('encrypt', $s->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Schedule Found</th>
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
