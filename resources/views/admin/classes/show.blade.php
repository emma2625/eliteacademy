@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <h1 class="mb-5">Viewing: {{ $grade->name }}</h1>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr class="">
                                <td scope="row"> {{ $student->user->name }} </td>
                                <td>{{ $student->user->email }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.users.show', $student->user->id) }}" class="btn btn-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td> No Record Found </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


                <div class="my-5">
                    {!! $students->links('pagination::bootstrap-5') !!}
                </div>
            </div>

        </div>
    </section>
@endsection
