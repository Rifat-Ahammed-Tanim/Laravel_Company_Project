<section>
    <div class="pt-5">
        <p class="text-center text-danger"><b>Knowledge, Skills, Success</b></p>
        <h1 class="text-center text-color "><b>Fuel Your QA Journey Here</b></h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
            <!-- single card -->

            @foreach ( $blog as $blog_card )
            <div class="col ">
                <div class="card h-100">
                    <img src="{{asset($blog_card->image)}}" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <small class="text-muted">{{ $blog_card->updated_at->diffForHumans() }}</small>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">{{ $blog_card->title}}</h5>
                        <p class="card-text">
                            {!! Str::of($blog_card->description)->limit(100) !!}
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('blog.details', $blog_card->id) }}" class="card-link text-decoration-none text-danger">Read More
                            »</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>