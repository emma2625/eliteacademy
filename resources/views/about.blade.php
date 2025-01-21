@extends('layouts.app')

@section('content')
    <section>
        <div class="hero position-relative d-flex justify-content-center align-items-center"
            style="background-image: url({{ asset('images/img-2.jpg') }}); background-size: cover; height: 30rem;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: #00000068;"></div>
            <h1 class="text-white position-relative">About Elite Academy</h1>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('images/img-1.jpg') }}" class="w-100" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="py-3">
                        <h2>We are here for your child</h2>

                        <p class="py-2">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis repellendus quo
                            aperiam dolore aspernatur, id doloremque impedit repudiandae nobis. Tempore, nemo. Reprehenderit
                            at neque enim nobis nesciunt illo aperiam.
                        </p>

                        <!-- Some borders are removed -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cheap School Fees</li>
                            <li class="list-group-item">Item</li>
                            <li class="list-group-item">Item</li>
                            <li class="list-group-item">Item</li>
                            <li class="list-group-item">Item</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <h2 class="text-center mb-3">Our Team</h2>

            <div class="row team">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="box">
                            <img src="{{ asset('images/young-woman-holding-tablet-work.jpg') }}" class="d-block mx-auto"
                                alt="">
                        </div>

                        <div class="caption text-center">

                            <p class="fs-3 fw-semibold ">
                                Jennifer Lopez
                            </p>
                            <p class="fw-bold text-uppercase">
                                Teacher
                            </p>
                        </div>
                    </div>
                @endfor


            </div>
        </div>
    </section>
@endsection
