{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('frontend.frontend_master')


@section('main')

{{-- i have to work on this UI design --}}
{{-- <section>
    <div class="container">
        <div class="d-flex align-items-center mb-3">
            <div>
                <a class="px-md-3 text-decoration-none" href="{{ route('home') }}" style="color: #64748b;">Home</a>
            </div>
            <div>
                <a class="text-decoration-none" href="{{ route('login') }}" style="color: #64748b;"> / Login</a>
            </div>
        </div>

        <div class="row p-4">
            <!-- Left Column -->
            <div class="col-12 col-md-6">
                <h2 class="fw-bold">Join us for lots of opportunities!</h2>
                <img class="img-fluid" src="{{asset('frontend/images/login-img.png')}}" alt="">
            </div>

            <!-- Right Column (Form) -->
            <div class="col-12 col-md-6">
                <div class="bg-light rounded-4 p-5 shadow-lg">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <h2 class="fw-bold p-2 text-center">Sign In</h2>

                        <!-- Email -->
                        <div class="pb-4">
                            <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Enter Email" required autofocus autocomplete="email" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>

                        <!-- Password -->
                        <div class="pb-4">
                            <input type="password" name="passwoed" autocomplete="current-password" class="form-control" placeholder="Enter Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                        </div>

                        <!-- Remember Me & Forget Password -->
                        <div class="form-check pb-4 d-flex justify-content-between">
                            <div>
                                <input class="form-check-input me-2" name="remember" type="checkbox" value=""
                                    id="remember_me" />
                                <label class="form-check-label" for="remember_me">Remember Me</label>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{route('password.request')}}">{{__('Forgot your password')}}</a>
                                @endif
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="d-flex justify-content-center pb-5">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold w-75">Login</button>
                        </div>

                        <!-- Sign In -->
                        <div class="d-flex justify-content-center pb-4">
                            <label>Don't have an account?</label>
                            <a class="text-primary px-4 text-decoration-none" href="{{ route('register') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    <!-- login form -->
    <section>
        <div class="container h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 mb-4">
                    <div class="d-flex">
                        <div><a class="px-md-3 text-decoration-none" href="{{ route('home') }}"
                                style="color: #64748b;">Home</a>
                        </div>
                        <div>
                            <a class="text-decoration-none" href="{{ route('register') }}" style="color: #64748b;"> /
                                Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-0">
                    <img src="./frontend/images/login-img.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="p-4 p-md-5 bg-light rounded-3 shadow-sm">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" value="{{ old('email') }}" name="email" id="email"
                                    class="form-control form-control-lg" placeholder="Enter a valid email address" required
                                    autofocus autocomplete="email" required />
                                <label class="form-label" for="email">Email address</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>



                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" required autocomplete="current-password"
                                    class="form-control form-control-lg" placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>



                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input me-2" name="remember" type="checkbox" value=""
                                        id="remember_me" />
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="text-body" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="text-center text-lg-start">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                        href="{{ route('register') }}" class="link-danger">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
