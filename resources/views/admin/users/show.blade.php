@extends('layouts.app')

@section('content')
    <div class="container rounded bg-white my-5">
        <div method="POST" class="row" enctype="multipart/form-data">

            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @if ($user->avatar)
                        <img class="rounded-circle mt-5 object-fit-cover border" width="150px" height="150px"
                            src="{{ asset($user->avatar) }}">
                    @else
                        <img class="rounded-circle mt-5 object-fit-cover border" width="150px" height="150px"
                            src="{{ asset('profile.jpg') }}">
                    @endif

                    <span class="font-weight-bold"> {{ $user->name }} </span>
                    <span class="text-black-50"> {{ $user->email }} </span>
                    <span> </span>

                    {{-- Assign Starts --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                        Assign Class
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <form method="POST" action="{{ route('admin.users.assign', $user->id) }}"
                                class="modal-content">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Assign to a class
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Grades</label>
                                    <select name="class" id="" class="form-select">
                                        @forelse ($grades as $grade)
                                            <option value="{{ $grade->id }}">
                                                {{ $grade->abrv }}
                                            </option>
                                        @empty
                                            <option disabled>No Grade Created Yet</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Assign Ends --}}
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input disabled type="text" class="form-control" name="full_name"
                                value="{{ $user->name }}">
                            @error('full_name')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Phone Number</label>
                            <input disabled type="tel" name="phone_number" value="{{ $user->info->phone_number }}"
                                class="form-control">
                            @error('phone_number')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Address</label>
                            <textarea disabled class="form-control" name="address">{{ $user->info->address }}</textarea>
                            @error('address')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <h3 class="col-12 my-5">Emergency Contact</h3>
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input disabled type="text" name="n_name" value="{{ $user->info->em_name }}"
                                class="form-control">
                            @error('n_name')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Phone Number</label>
                            <input disabled type="tel" name="n_phone" class="form-control"
                                value="{{ $user->info->em_phone }}">
                            @error('n_phone')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5 text-center">

                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <!-- Some borders are removed -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-bg-dark"> Grades </li>
                    @forelse ($user->grades as $class)
                        <li class="list-group-item">
                            <table class="table table-borderless">
                                <tr>
                                    <th>{{ $class->grade->name }}</th>
                                    <td>{{ $class->created_at->format('M, jS Y') }}</td>
                                </tr>
                            </table>
                        </li>
                    @empty
                        <li class="list-group-item">Not Assigned to a Grade</li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
