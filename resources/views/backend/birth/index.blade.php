@extends('backend.app')

@section('title', trans("Birth List"))

@section('content')
    <!-- Hover table start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('birth.create') }}" class="btn btn-light px-2 mb-3">Add Birth Info<i
                        class="fa fa-plus px-2"></i></a>
                <h5 class="card-title">Birth Information Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Patient Name') }}</th>
                                <th scope="col">{{ __("Title") }}</th>
                                <th scope="col">{{ __("Birth Date") }}</th>
                                <th scope="col">{{ __("Gender") }}</th>
                                <th scope="col">{{ __('Description') }}</th>
                                <th scope="col">{{ __("Doctor's Ref") }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="white-space-nowrap">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($birth as $b)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    {{-- <td><img width="50px" src="{{ asset('public/uploads/patients/' . $pa->image) }}"
                                            alt="">
                                    </td> --}}
                                    <td>{{ $b->patient?->name_en }}</td>
                                    <td>{{ $b->title }}</td>
                                    <td>{{ $b->birth_date }}</td>
                                    <td>{{ $b->gender == 0 ? 'Boy' : 'Girl' }}</td>
                                    <td>{{ $b->description }}</td>
                                    <td>{{ $b->doc_ref }}</td>
                                    <td class="{{ $b->status == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $b->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="white-space-nowrap">
                                        <a href="{{ route('birth.edit', encryptor('encrypt', $b->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void()" onclick="$('#form{{ $b->id }}').submit()">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="form{{ $b->id }}"
                                            action="{{ route('birth.destroy', encryptor('encrypt', $b->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center">Nothing Found</th>
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
