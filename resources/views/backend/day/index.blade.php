@extends('backend.app')
@section('title', trans('Day List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('day.create') }}" class="btn btn-light px-2 mb-3">Add Day<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Day Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Day Name') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($day as $d)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $d->day_name }}</td>
                                    <td class="{{ $d->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $d->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('day.edit', encryptor('encrypt', $d->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $d->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $d->id }}"
                                            action="{{ route('day.destroy', encryptor('encrypt', $d->id)) }}"
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
