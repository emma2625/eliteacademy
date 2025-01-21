@extends('layouts.app')
@section('content')
    <!-- Hero Starts -->
    <section class="index-hero">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators list-unstyled">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('images/img-4.jpg') }}" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Elite Academy</h3>
                        <p>Where educational excelence is what we strive for.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/img-5.jpg') }}" class="w-100 d-block" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Education at its peak</h3>
                        <p>
                            Uplifting the your child or work to higher educational heights
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/img-1.jpg') }}" class="w-100 d-block" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Join us Today</h3>
                        <p>Give your child or ward the best in mordern education</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- Hero Ends -->


    <!-- CTA Starts -->
    <section>
        <div class="container my-5">

            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('images/img-2.jpg') }}" class="w-100" alt="">
                </div>
                <div class="col-md-6 mb-4 pt-md-5">
                    <p class="h2">Enroll your child/ward today</p>

                    <p class="lh-lg text-muted">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptates autem excepturi
                        consectetur ipsa! Nostrum, hic. Tempora adipisci voluptas repudiandae repellendus. Nobis iste
                        doloribus fugiat dicta obcaecati accusantium quidem quisquam cumque aliquam, nesciunt dolor
                        ratione, veritatis sed dolores non voluptas.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg"> Get Started </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Ends -->

    <!-- Features Starts -->
    <section class="bg-light py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mb-4 ">
                    <p class="h2">Our Facilities</p>

                    <p class="lh-lg text-muted">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptates autem excepturi
                        consectetur ipsa! Nostrum, hic. Tempora adipisci voluptas repudiandae repellendus. Nobis iste
                        doloribus fugiat dicta obcaecati accusantium quidem quisquam cumque aliquam, nesciunt dolor
                        ratione, veritatis sed dolores non voluptas.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg"> Read more </a>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-user-graduate fs-1"></i>

                                    <p class="h5 mt-4">Qualified Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-blackboard fs-1"></i>

                                    <p class="h5 mt-4">Condusive Classroom</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-bus fs-1"></i>

                                    <p class="h5 mt-4">School Bus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-book fs-1"></i>

                                    <p class="h5 mt-4">E-Library</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-soccer-ball fs-1"></i>

                                    <p class="h5 mt-4">Sport</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-bowl-food fs-1"></i>

                                    <p class="h5 mt-4">Cafeteria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Ends -->
@endsection
