@extends('frontend.frontend_master')

@section('main')
    <!-- 2.Banner Section -->
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="p-4 col-md-6">
                    <h1 class="text-light fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea illo unde quae
                        magnam quod quos!</h1>
                </div>
                <div class="pt-5 text-center col-md-6">
                    <img class="w-50" src="{{ asset('frontend/images/news.jpg') }}" alt="Fallback Image"
                        style="border-radius: 50px 50px 0 0 ">
                </div>
            </div>
        </div>
    </section>


    {{-- main contain --}}
    <div class="container">
        <div class="p-5">
            <h5 class="card-title">{{ $blog->title}}</h5>
        </div>
        <div  class="p-5">
            {!! $blog->description !!}
        </div>
    </div>








    
@endsection
