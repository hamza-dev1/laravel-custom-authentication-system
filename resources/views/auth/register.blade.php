@extends('layouts.auth-base')
@section('title', 'Register')

@section('content')

    <div class="h-full" style="background: url({{ asset('images/bg-image.jpg') }}) center / cover no-repeat">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity">
            <!-- component -->
            <div class="grid min-h-screen place-items-center">
                <div class="p-12 bg-white rounded w-11/12 md:w-10/12 md:w-8/12 lg:w-6/12">
                    <h1 class="text-xl font-semibold">Welcome, <span class="font-normal">fill your information for your new
                            account</span></h1>
                    <form class="mt-6" method="post" action="{{ route('register-user') }}">
                        @csrf
                        <div class="flex flex-col md:flex-row md:justify-between gap-3 mb-2">
                            <div class="md:w-1/2">
                                <label for="firstname"
                                    class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
                                <input id="firstname" type="text" name="firstname" placeholder="John"
                                    autocomplete="given-name"
                                    class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner"
                                    />
                                <span class="text-red-600">
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="md:w-1/2">
                                <label for="lastname"
                                    class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
                                <input id="lastname" type="text" name="lastname" placeholder="Doe"
                                    autocomplete="family-name"
                                    class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner"
                                    />
                                <span class="text-red-600">
                                    @error('lastname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="john.doe@company.com"
                                autocomplete="email"
                                class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner"
                                />
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
                                class="block w-full p-3 mt-2 text-black bg-cyan-50 appearance-none focus:outline-none focus:bg-cyan-100 focus:shadow-inner"
                                />
                                <span class="text-red-600">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-cyan-900 hover:shadow-none">
                            Sign up
                        </button>
                        <a href="{{ route('login') }}" class="inline-block mt-4 text-xs text-black cursor-pointer">Already
                            member?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
