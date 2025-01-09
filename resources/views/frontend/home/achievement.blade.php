<section class="p-5 service-rate">
    <div class="container m-5 mx-auto ">
        <div class="row">
            <!-- Left Side (Statistics) -->
            <div class="text-center col-md-6">
                <div class="mb-4 row">
                    @foreach ($achievements as $achievement)
                        <div class="col-md-6">
                            <h2 class="text-light">{{ $achievement->title }}</h2>
                            <p class="text-danger">{{ $achievement->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Side (Carousel for Logos) -->
            <div class="m-auto col-md-6">
                <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active bg-light rounded-5">
                            <img src="./frontend/images/company logo (2).png" class="d-block w-100 " alt="Logo 1">
                        </div>
                        <div class="carousel-item bg-light rounded-5">
                            <img src="./frontend/images/company logo (1).png" class="d-block w-100" alt="Logo 2">
                        </div>
                        <div class="carousel-item bg-light rounded-5">
                            <img src="./frontend/images/company logo (3).png" class="d-block w-100" alt="Logo 3">
                        </div>
                        <div class="carousel-item bg-light rounded-5">
                            <img src="./frontend/images/company logo (4).png" class="d-block w-100" alt="Logo 3">
                        </div>
                        <div class="carousel-item bg-light rounded-5">
                            <img src="./frontend/images/company logo (5).png" class="d-block w-100" alt="Logo 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#logoCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>