@extends('backend.app')

@section('title', trans('Test List'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('test.create') }}" class="btn btn-light px-2 mb-3">Add Test<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Test Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Patient Name') }}</th>
                                <th scope="col">{{ __('Vat') }}</th>
                                <th scope="col">{{ __('Discount') }}</th>
                                <th scope="col">{{ __('Paid') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($test as $t)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $t->patient?->name_en }}</td>
                                    <td>{{ $t->vat }}</td>
                                    <td>{{ $t->discount }}</td>
                                    <td>{{ $t->paid }}</td>
                                    <td>{{ $t->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('test.edit', encryptor('encrypt', $t->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $t->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $t->id }}"
                                            action="{{ route('test.destroy', encryptor('encrypt', $t->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Test Found</th>
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
