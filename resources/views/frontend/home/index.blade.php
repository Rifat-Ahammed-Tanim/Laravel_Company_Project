@extends('frontend.frontend_master')


@section('main')
    <!-- 2. Banner Section -->
    @include('frontend.home.home_banner')

    <!-- 3. Our services Section -->
    @include('frontend.home.service')


    <!-- 4. Our Globally-->
    @include('frontend.home.global')

    <!-- 5. Shared successful experiences-->
    @include('frontend.home.experience')

    <!-- 6. 6 card section -->
    @include('frontend.home.service_card')

    <!-- 7. Achievement Section -->
    @include('frontend.home.achievement')

    <!-- 8.Free Consultation -->

    @include('frontend.home.consultation')

    <!-- 10. Hire Expert -->
    @include('frontend.home.hire_expart')

    <!-- 11. Blogs, Knowledge, Skills, Success -->
    @include('frontend.home.blog' )

    <!-- 12. Contact -->
    @include('frontend.home.contact')
@endsection
