    <!-- Navbar Starts -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home.page') }}">
                    <img src="{{ asset('images/logo.png') }}" width="40" alt="Elite Academy">
                    Elite Academy
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home.page') }}" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.page') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Admission</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">2024/2025 Session Boarding</a>
                                <a class="dropdown-item" href="#">2024/2025 Session Day</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Academics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Principal Officers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" type="button" id="triggerId"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{ route('profile.page') }}">Profile</a>
                                        @if (Auth::user()->role == 'admin')
                                            <a class="dropdown-item" href="{{ route('admin.class.create') }}">Classes</a>
                                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">Students</a>
                                        @endif
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </div>

                            </li>
                        @endguest
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    </section>
    <!-- Navbar Ends -->
