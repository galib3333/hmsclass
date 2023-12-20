@extends('backend.app')

@section('title', trans('Test Detail'))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Test Detail</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __("Patient's Name") }}</th>
                                <th scope="col">{{ __("Sub Price") }}</th>
                                <th scope="col">{{ __('Vat') }}</th>
                                <th scope="col">{{ __('Discount') }}</th>
                                <th scope="col">{{ __('Total Amount') }}</th>
                                <th scope="col">{{ __('Paid') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
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
                                    <td>{{ $pt->status == 1 ? 'Active' : 'Inactive' }}</td>
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
