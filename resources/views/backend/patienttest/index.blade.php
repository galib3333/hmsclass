@extends('backend.app')

@section('title', trans('Test Detail'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('patienttest.create') }}" class="btn btn-light px-2 mb-3">Add Test<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Test Detail</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __("Patient's Name") }}</th>
                                <th scope="col">{{ __('Sub Price') }}</th>
                                <th scope="col">{{ __('Vat') }}</th>
                                <th scope="col">{{ __('Discount') }}</th>
                                <th scope="col">{{ __('Total Amount') }}</th>
                                <th scope="col">{{ __('Paid') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($patientstest as $pt)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $pt->patient?->name_en }}</td>
                                    <td>{{ $pt->sub_price }}</td>
                                    <td>{{ $pt->vat }}</td>
                                    <td>{{ $pt->discount }}</td>
                                    <td>{{ $pt->total_amount }}</td>
                                    <td>{{ $pt->paid }}</td>
                                    <td class="{{ $pt->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $pt->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('patients.edit', encryptor('encrypt', $pt->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $pt->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $pt->id }}"
                                            action="{{ route('patienttest.destroy', encryptor('encrypt', $pt->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Test Detail Found</th>
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
