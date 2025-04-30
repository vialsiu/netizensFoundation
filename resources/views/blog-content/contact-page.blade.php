@extends('layouts.blog')

@section('title', 'Contact Us - Netizens Foundation')

@section('content')
    <div class="bg-[#beccdc] min-h-screen flex items-center justify-center p-4">
        <!-- Main Container -->
        <div class="w-full max-w-md flex flex-col items-center space-y-5">
            <!-- Contact Card -->
            <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 space-y-6">
                <!-- Header -->
                <div class="text-center space-y-2">
                    <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
                    <p class="text-gray-600">We'd love to hear from you</p>
                </div>

                <!-- Contact Form -->
                <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                    @csrf

                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                               placeholder="Enter your name">
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                               placeholder="Enter your email">
                    </div>

                    <!-- Subject Input -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" id="subject" name="subject" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                               placeholder="Enter subject">
                    </div>

                    <!-- Message Input -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required
                                  class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black transition duration-200"
                                  placeholder="Type your message here..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full bg-black text-white py-3 px-4 rounded-lg font-medium hover:bg-gray-700 transition duration-200 cursor-pointer">
                        Send Message
                    </button>
                </form>

                <!-- Alternative Contact Methods -->
                <div class="text-center space-y-2">
                    <p class="text-sm text-gray-600">Prefer other methods?</p>
                    <div class="flex flex-col space-y-1">
                        <a href="mailto:contact@netizensfoundation.org"
                           class="text-black hover:underline text-sm">contact@netizensfoundation.org</a>
                    </div>
                </div>
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
