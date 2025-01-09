<section class="container">
    <div>
        <p class="pt-5 text-center text-danger"><b>Testimonials</b></p>
        <h1 class="text-center text-color"><b>Shared successful experiences</b></h1>
    </div>

    <div class="p-5 row">
        <!-- single item -->
        <div class="p-5 row">
            @foreach ($testimonials as $testimonial)
                <div class="p-3 col-12 col-md-6 col-lg-4">
                    <div class="card h-100 testimonials" style="background-color: #f6f5f4;">
                        <div class="card-body">
                            <p class="card-text">{{ $testimonial->message }}</p>
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="border rounded-circle border-primary" style="width: 80px; height: 80px;">                                
                                </div>
                                <div class="ms-3">
                                    <h5 class="card-title">{{ $testimonial->name }}<br><span class="text-danger">{{ $testimonial->position }}</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
