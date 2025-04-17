@extends('layouts.blog')

@section('title', 'Netizens Foundation')

@section('content')
    <div class="bg-[#beccdc] min-h-screen flex items-center justify-center p-4">
        <!-- Main Container -->
        <div class="w-full max-w-md flex flex-col items-center space-y-8">
            <!-- Logo Container -->
            <div class="flex justify-center mb-8">
                <img src="{{ Vite::asset('resources/img/nflogo.png') }}"
                     alt="NF Logo"
                     class="h-50 w-auto transition-transform hover:scale-105">
            </div>

            <!-- Login Card -->
            <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 space-y-6">
                <!-- Header -->
                <div class="text-center space-y-2">
                    <h1 class="text-3xl font-bold text-gray-900">Welcome!</h1>
                    <p class="text-gray-600">Sign in to your account</p>
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('auth.loginAction') }}" class="space-y-4">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                               placeholder="Enter your email">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                               placeholder="••••••••">
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                   class="rounded border-gray-300 text-black focus:ring-black cursor-pointer">
                            <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-black hover:underline">Forgot password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                            class="w-full bg-black text-white py-3 px-4 rounded-lg font-medium hover:bg-gray-700 transition duration-200 cursor-pointer">
                        Sign In
                    </button>
                </form>

                <!-- Google Login -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <a href="{{ route('auth.google.redirect') }}"
                   class="w-full flex items-center justify-center gap-2 bg-black text-white py-3 px-4 rounded-lg font-medium hover:bg-gray-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972a6.033 6.033 0 1 1 0-12.064c1.835 0 3.456.705 4.691 1.942l3.099-3.101A10.113 10.113 0 0 0 12.545 2C7.021 2 2.545 6.477 2.545 12s4.476 10 10 10c5.523 0 10-4.477 10-10c0-.67-.069-1.325-.189-1.955H12.545z"/>
                    </svg>
                    Continue with Google
                </a>

                <!-- Register Link -->
                <p class="text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('auth.register') }}" class="text-black hover:underline font-medium">Sign up</a>
                </p>
            </div>
        </div>

        @if($errors->any())
            <div class="fixed bottom-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
@endsection
