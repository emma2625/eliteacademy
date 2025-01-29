@extends('layouts.app')

@section('content')
    <div class="container rounded bg-white my-5">
        <form method="POST" action="{{ route('profile.update') }}" class="row" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('profile.jpg') }}">
                    <span class="font-weight-bold"> {{ Auth::user()->name }} </span>
                    <span class="text-black-50"> {{ Auth::user()->email }} </span>
                    <span> </span>

                    <input type="file" name="picture" class="form-control form-control-sm" accept="image/*">
                    @error('picture')
                        <small class="text-danger font-bold">{{ $message }}</small>
                    @enderror
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
                            <input type="text" class="form-control" name="full_name" value="{{ Auth::user()->name }}">
                            @error('full_name')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Phone Number</label>
                            <input type="tel" name="phone_number" class="form-control" value="">
                            @error('phone_number')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Address</label>
                            <textarea class="form-control" name="address"></textarea>
                            @error('address')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <h3 class="col-12 my-5">Emergency Contact</h3>
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="n_name" class="form-control" value="">
                            @error('n_name')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Phone Number</label>
                            <input type="tel" name="n_phone" class="form-control" value="">
                            @error('n_phone')
                                <small class="text-danger font-bold">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button">
                            Save Profile
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
@endsection
