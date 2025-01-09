@extends('frontend.frontend_master')

@section('main')
    <!-- 2.Banner Section -->
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="p-4 col-md-6">
                    <p class="text-danger fw-bold">{{ optional($about_banner)->title ?? 'No title available' }}</p>
                    <h1 class="text-light fw-bold">{{ optional($about_banner)->description ?? 'No description available' }}
                    </h1>
                </div>

                <div class="p-4 text-center col-md-6">
                    <img class="emoji img-fluid"
                        src="{{ asset(optional($about_banner)->image ?? 'path/to/fallback-image.jpg') }}"
                        alt="Fallback Image">
                </div>
            </div>
        </div>
    </section>




    <!-- 3. Who we are -->
    <section>
        <div class="container p-5">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-6 col-md-12">
                    <p class="text-danger fw-bold">{{ $whoWeAre->title }}</p>
                    <h1 class="fw-bold">{{ $whoWeAre->sub_title }}</h1>
                    <p class="pt-3">{{ $whoWeAre->description }}</p>
                    <button class="m-3 btn btn-primary fw-bold">Let's Talk</button>
                </div>

                <!-- Image Section -->
                <div class="text-center col-lg-6 col-md-12">
                    <div class="box">
                        <img class="rounded woman img-fluid " src="{{ asset($whoWeAre->image) }}"
                            alt="woman standing on top of rock">
                        <div class="p-2 mt-3 text-center woman-text bg-warning">
                            <p>Our Motto is "Quality As A <br> Service (QAAS)"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 4. Our Mission -->
    <section class="our-mission">
        <div class="container">
            <div class="row align-items-center gx-5">
                <!-- Image Section -->
                <div class="mb-4 col-lg-6 col-md-12 mb-lg-0">
                    <img class="mission img-fluid m-lg-5 rounded-3" src="{{ asset($our_mission->image) }}"
                        alt="Our mission">
                </div>

                <!-- Text Section -->
                <div class="p-5 col-lg-6 col-md-12">
                    <p class="text-danger fw-bold">{{ $our_mission->title }}</p>
                    <h1 class="fw-bold">{{ $our_mission->sub_title }}</h1>
                    <p>{{ $our_mission->description }}</p>
                    <h5>✔ Provide a superior quality product and service.</h5>
                    <h5>✔ Aim for customer recommendation.</h5>
                    <h5>✔ Deliver market-defining high-quality, error-free solutions.</h5>
                    <h5>✔ Serve clients around the world.</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. our vision -->
    <section class="p-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="p-4 col-lg-6 col-md-12 p-lg-5">
                    <p class="text-danger fw-bold">{{ $our_vision->title }}</p>
                    <h1 class="fw-bold">{{ $our_vision->sub_title }}</h1>
                    <p>{{ $our_vision->description }}</p>
                    <ul class="list-unstyled">
                        <li>
                            <h5>✔ Lorem ipsum dolor sit amet</h5>
                        </li>
                        <li>
                            <h5>✔ Consectetur adipiscing elit</h5>
                        </li>
                        <li>
                            <h5>✔ Sed do eiusmod tempor incididunt</h5>
                        </li>
                        <li>
                            <h5>✔ Ut labore et dolore magna aliqua</h5>
                        </li>
                        <li>
                            <h5>✔ Quis nostrud exercitation ullamco laboris</h5>
                        </li>
                    </ul>
                </div>

                <!-- Image Section -->
                <div class="mb-4 text-center col-lg-6 col-md-12 mb-lg-0">
                    <img class="mission img-fluid rounded-3" src="{{ asset($our_vision->image) }}" alt="Smiley face">
                </div>
            </div>
        </div>
    </section>



    <!-- 6. our Strategy -->
    <section class="p-5 strategy">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="mb-4 text-center col-lg-6 col-md-12 mb-lg-0">
                    <img class="mission img-fluid rounded-3" src="{{ asset($our_strategy->image) }}" alt="Hand Menu">
                </div>

                <!-- Text Section -->
                <div class="p-4 col-lg-6 col-md-12 p-lg-5">
                    <p class="text-danger fw-bold">{{ $our_strategy->title }}</p>
                    <h1 class="fw-bold">{{ $our_strategy->sub_title }}</h1>
                    <p>{{ $our_strategy->description }}</p>
                    <ul class="list-unstyled">
                        <li>
                            <h5>✔ Exceed customer expectations</h5>
                        </li>
                        <li>
                            <h5>✔ Provide quality service</h5>
                        </li>
                        <li>
                            <h5>✔ Maintain sustainable customer relationships</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- 7. testimonials  -->
    <section class="pb-5">
        <div class="container">
            <div class="mb-4 text-center">
                <p class="text-danger fw-bold">Testimonials</p>
            </div>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/images/testtimonials.png') }}" class="d-block w-100"
                            alt="Testimonial 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/images/testtimonials.png') }}" class="d-block w-100"
                            alt="Testimonial 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/images/testtimonials.png') }}" class="d-block w-100"
                            alt="Testimonial 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- 8. Consulting -->
    <section>
        <div class="container">
            <div class="row align-items-stretch"> <!-- Changed align-items-center to align-items-stretch -->
                <!-- Left Column -->
                <div class="text-center col-lg-6 col-md-12 bg-warning d-flex flex-column justify-content-center">
                    <h1 class="p-5 fw-bold">Discover our expertise, driven by innovation, in ensuring Software Quality
                        Assurance</h1>
                    {{-- <button class="m-5 btn btn-primary">Book Consultancy</button> --}}
                    <a href="{{ route('consultation') }}" class="m-5 btn btn-primary">Book Consultancy</a>
                </div>

                <!-- Right Column -->
                <div class="text-center col-lg-6 col-md-12 bg-dark d-flex flex-column justify-content-center">
                    <h1 class="p-5 fw-bold text-light">"EVOLVING TO EXCELLENCE"</h1>
                    <p class="pt-5 text-center text-light fw-bold">Delighting customers through superior software quality.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
