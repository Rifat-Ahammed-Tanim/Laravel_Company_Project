<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a href="{{ route('home') }}"><img class="logo-img" src="{{asset('frontend/images/ideacast_it.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('job') }}">
                        <h5>QA Jobs</h5>
                    </a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('sqa-service') }}">Testing & SQA Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('sqa-expert') }}">SQA Experts Augmentation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="{{ route('about') }}">
                        <h5>About Us</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="{{ route('blog') }}">
                        <h5>Blog</h5>
                    </a>
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link" href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"><h5>Logout</h5></a>
                        </form>
                    @else
                        <a class="nav-link active"  href="{{ route('login') }}">
                            <h5>Login</h5>
                        </a>
                    @endif
                </li>
            </ul>
            <a href="{{ route('consultation') }}" class="p-3 btn btn-danger btn-lg fw-bold">Free Consultation</a>
        </div>
    </div>
</nav>
