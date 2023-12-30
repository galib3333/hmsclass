@extends('backend.app')

@section('title', trans("Appointment Accept List"))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Appointment Accept Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __("Patient's Name") }}</th>
                                <th scope="col">{{ __("Doctor's Name") }}</th>
                                <th scope="col">{{ __('Contact Number') }}</th>
                                <th scope="col">{{ __('Appointment Date') }}</th>
                                <th scope="col">{{ __('Serial') }}</th>
                                <th scope="col">{{ __("Problem") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointment as $ar)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $ar->patient?->name_en }}</td>
                                    <td>{{ $ar->employee?->name_en }}</td>
                                    <td>{{ $ar->patient?->contact_no_en }}</td>
                                    <td>{{ $ar->app_date }}</td>
                                    <td>{{ $ar->serial }}</td>
                                    <td>{{ $ar->problem }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Appointment Found</th>
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
