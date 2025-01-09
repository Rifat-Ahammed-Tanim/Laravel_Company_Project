@extends('frontend.frontend_master')

@section('main')

     <!-- 2. Banner Section -->
     <section class="pt-5 bg-colors">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Text Section -->
                @if ( $blog_banner )
                    <div class="text-center col-lg-6 col-md-12 text-lg-start">
                        <h4 class="text-danger fw-bold">{{$blog_banner->title}}</h4>

                        <div class="text-light fw-bold">
                            <h1>{!! html_entity_decode($blog_banner->description) !!}</h1>
                        </div>                                        
                    </div>
                    
                @endif
                
    
                <!-- Image Section -->
                @if ( $blog_banner )
                    <div class="mt-4 text-center col-lg-6 col-md-12 mt-lg-0">
                        <img class="blog-img img-fluid" src="{{asset($blog_banner->image)}}" alt="Blog News Image">
                    </div>
                    
                @endif
                
            </div>
        </div>
    </section>
    

    <!-- 3. card section -->
    <section>
        <div class="container">
            <div>
                @if ( $blog_card )
                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    @foreach ( $blog_card as $blog )
                        <div class="col ">
                            <div class="card h-100">
                                <img src="{{asset($blog->image)}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <small class="text-muted">
                                        {{ $blog->updated_at->diffForHumans() }}
                                    </small>
                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">{{ $blog->title}}</h5>
                                    <p class="card-text">
                                        {!! Str::of($blog->description)->limit(100) !!}
                                    </p>
                                </div>
                                <div class="card-body">
                                    {{-- {{ $blog->id }} --}}
                                    <a href="{{ route('blog.details', $blog->id) }}" class="card-link text-decoration-none text-danger">
                                        Read More»
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    {{-- {{ $blog_card->links() }} --}}
                    
                </div>

                @else

                <h2>No data found</h2>
                    
                @endif

                
                    <!-- single card -->
                    
                    <!-- single card -->
                    {{-- <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                {{-- <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-2.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-3.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-4.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- pagination -->
                {{-- <div class="m-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <div class="m-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            <li class="page-item {{ $blog_card->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $blog_card->previousPageUrl() }}" aria-label="Previous">
                                    Previous
                                </a>
                            </li>
                
                            {{-- Pagination Elements --}}
                            @for ($i = 1; $i <= $blog_card->lastPage(); $i++)
                                @if ($i == $blog_card->currentPage())
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link">{{ $i }}</a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blog_card->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor
                
                            {{-- Next Page Link --}}
                            <li class="page-item {{ !$blog_card->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $blog_card->nextPageUrl() }}" aria-label="Next">
                                    Next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                
            </div>
        </div>
    </section>

@endsection