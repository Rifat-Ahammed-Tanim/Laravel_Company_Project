<section class="pb-5 service-section">
    <div class="container">
        <div class="py-5 title">
            <p class="text-center text-danger fw-bold">Software Quality Assurance</p>
            <h1 class="text-center text-light fw-bold">Our services</h1>
        </div>
        <div class="text-center row">
            @foreach($services as $service)
            <div class="mb-4 col-md-3">
                <div class="p-5 service-box h-100">
                    <div class="mb-3 icon">
                        <!-- Use the icon from the database -->
                        <i class="{{ $service->icon }} fa-3x text-danger"></i>
                    </div>
                    <h5>{{ $service->title }}</h5>
                    <p class="text-muted">{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-5 text-center">
            <a href="{{ route('sqa-service') }}" class="my-auto btn btn-danger fw-bold">Go somewhere >></a>
        </div>
    </div>
</section>
