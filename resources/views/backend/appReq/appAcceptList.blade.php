@extends('backend.app')

@section('title', trans("Appointment Request List"))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Appointment Request Table</h5>
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
                            @forelse($app as $ar)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $ar->patient?->name_en }}</td>
                                    <td>{{ $ar->doctor?->employ?->name_en }}</td>
                                    <td>{{ $ar->phone }}</td>
                                    <td>{{ $ar->appdate }}</td>
                                    <td>{{ $ar->department?->dep_name }}</td>
                                    <td>{{ $ar->details }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">No Appointment Request Found</th>
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
