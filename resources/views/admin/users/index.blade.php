@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <h1 class="mb-5">Students</h1>

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
                        @forelse ($users as $user)
                            <tr class="">
                                <td scope="row"> {{ $user->name }} </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    
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
                    {!! $users->links('pagination::bootstrap-5') !!}
                </div>
            </div>

        </div>
    </section>
@endsection
