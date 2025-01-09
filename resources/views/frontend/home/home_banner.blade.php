<section class="">
    <div class="container">
        <div class="banner-section">
            <div class="banner-left">
                <h1>{{ $home_banner->title ?? 'Default Title' }}</h1>
                <p>{{ $home_banner->sub_title ?? 'Default' }}</p>
                <a href="{{ route('sqa-service') }}" class="btn btn-primary btn-lg me-5 mb-3">Get Services</a>
                <a href="{{ route('sqa-expert') }}" class="btn btn-primary btn-lg mb-3">Hire Experts</a>
            </div>

            <div class="banner-right">
                @if ($home_banner)
                <img class="w-100" src="{{ asset($home_banner->photo) }}" alt="banner">
            @else
                <img class="w-100" src="{{ asset('default-banner.jpg') }}" alt="default banner"> <!-- Provide a default image -->
            @endif
            </div>
        </div>

    </div>
</section>
