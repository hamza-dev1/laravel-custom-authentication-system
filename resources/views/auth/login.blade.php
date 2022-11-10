@extends('layouts.auth-base')
@section('title', 'Login')

@section('content')
            <!-- component -->
    <div class="h-full" style="background: url({{ asset('images/bg-image.jpg') }}) center / cover no-repeat">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity">
            <div class="grid min-h-screen place-items-center">
                <div class="p-12 bg-white rounded w-11/12 sm:w-8/12 md:w-1/2 lg:w-5/12">
                    <h1 class="text-xl font-semibold">Welcome back, <span class="font-normal">sign in to continue</span></h1>
                    <form class="mt-6" method="post" action="{{ route('login-user') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="john.doe@company.com"
                                autocomplete="email"
                                class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner" />
                            <span class="text-red-600">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="">
                            <label for="password"
                                class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                            <input id="password" type="password" name="password" placeholder="********"
                                autocomplete="current-password"
                                class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner" />
                            <span class="text-red-600">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-cyan-900 hover:shadow-none">
                            Sign in
                        </button>
                        <div class="flex justify-between">
                            <p class="inline-block mt-4 text-xs text-black cursor-pointer">Forgot password?</p>
                            <a href="{{ route('register') }}"
                                class="inline-block mt-4 text-xs text-black cursor-pointer">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
