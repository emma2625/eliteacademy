@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <div class="card mx-auto" style="max-width: 700px;">

                <div class="d-flex justify-content-between align-items-center gap-2 card-header ">
                    <h1 class="h4">
                        Edit {{ $grade->name }}
                    </h1>

                    <a href="{{ route('admin.class.create') }}" class="btn btn-sm btn-primary">All Classes</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.class.update', $grade->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Class Name</label>
                                <input type="text" name="class_name" value="{{ $grade->name }}" class="form-control">

                                @error('class_name')
                                    <small class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Class Abbreviation</label>
                                <input type="text" name="class_abbreviation" value="{{ $grade->abrv }}" class="form-control">
                                @error('class_abbreviation')
                                    <small class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary ">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
