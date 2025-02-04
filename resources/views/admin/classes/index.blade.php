@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">

            <div class="card bg-transparent mx-auto" style="max-width: 800px;">
                <div class="card-header bg-transparent pt-2 d-flex justify-content-between align-items-center gap-3">
                    <h1 class=" h4">
                        All Class
                    </h1>

                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                        New Class
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Create New Class
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.class.store') }}" method="POST">
                                        @csrf


                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="">Class Name</label>
                                                <input type="text" name="class_name" class="form-control">

                                                @error('class_name')
                                                    <small class="text-danger fw-bold"> {{ $message }} </small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Class Abbreviation</label>
                                                <input type="text" name="class_abbreviation" class="form-control">
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
                    </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Abrv</th>
                                    <th scope="col">Total Students</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col"> ... </th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($grades as $grade)
                                    <tr class="">
                                        <td scope="row"> {{ $grade->name }} </td>
                                        <td>{{ $grade->abrv }}</td>
                                        <td> {{ $grade->students->count() }} </td>

                                        <td> {{ $grade->created_at->format('M jS. Y h:i a') }} </td>

                                        <td> {{ $grade->updated_at->diffForHumans() }} </td>
                                        <td class="d-flex align-items-center gap-2">
                                            <a href="{{ route('admin.class.edit', $grade->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.class.destroy', $grade->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this class: {{ $grade->name }}?')">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center"> No Class Added Yet </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>



        </div>
    </section>
@endsection
