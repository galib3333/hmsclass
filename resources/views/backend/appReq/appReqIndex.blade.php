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
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Contact Number') }}</th>
                                <th scope="col">{{ __('Appointment Date') }}</th>
                                <th scope="col">{{ __('Department Name') }}</th>
                                <th scope="col">{{ __("Doctor's Name") }}</th>
                                <th scope="col">{{ __('Details') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($app as $ar)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $ar->name }}</td>
                                    <td>{{ $ar->email }}</td>
                                    <td>{{ $ar->phone }}</td>
                                    <td>{{ $ar->appdate }}</td>
                                    <td>{{ $ar->department?->dep_name }}</td>
                                    <td>{{ $ar->doctor?->employ?->name_en }}</td>
                                    <td>{{ $ar->details }}</td>
                                    <td>{{ $ar->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="white-space-nowrap">
                                        <a class="mx-2" href="{{ route('acceptRequest', encryptor('encrypt', $ar->id)) }}">
                                            <i class="fa-solid fa-check"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $ar->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $ar->id }}"
                                            action="{{ route('appdestroy', encryptor('encrypt', $ar->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
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
