{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('frontend.frontend_master')

@section('main')
    <!-- Registration section -->
    <section>
        <div class="container">
            <div class="d-flex">
                <div><a class="px-md-3 text-decoration-none" href="{{route('home')}}" style="color: #64748b;">Home</a>
                </div>
                <div>
                    <a class="text-decoration-none" href="{{ route('login') }}" style="color: #64748b;"> /
                        Login</a>
                </div>
            </div>
            <div class="row">
                <!-- Left Column -->
                <div class="col-12 col-md-6 mb-4">
                    <h1 class="fw-bold">Join us for lots of opportunities!</h1>
                    <img class="w-100" src="{{asset('frontend/images/candidate-login.png')}}" alt="">
                </div>

                <!-- Right Column (Form) -->
                <div class="col-12 col-md-6">
                    <div class="bg-light rounded-4 p-5 m-3 shadow-lg">
                        <form action="">
                            <h2 class="fw-bold p-2 text-center">Registration</h2>

                            <!-- Name -->
                            <div class="pb-4">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>

                            <!-- Email -->
                            <div class="pb-4">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>

                            <!-- Password -->
                            <div class="pb-4">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>

                            <!-- Confirm Password -->
                            <div class="pb-5">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>

                            <!-- Register Now Button -->
                            <div class="d-flex justify-content-center pb-5">
                                <button class="btn btn-primary btn-lg fw-bold">Register Now</button>
                            </div>

                            <!-- Sign In -->
                            <div class="d-flex justify-content-center pb-4">
                                <label>Already registered?</label>
                                <a class="text-primary px-4 text-decoration-none" href="{{route('login')}}">Sign In</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
