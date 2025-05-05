@extends('layouts.blog')

@section('title', 'Contact Us - Netizens Foundation')

@section('content')
<div class="bg-[#f1f1f1] min-h-screen flex items-start justify-center pt-10 px-4">
    <!-- Main Container -->
    <div class="w-full max-w-md flex flex-col items-center space-y-5">
        <!-- Contact Card -->
        <div class="w-full max-w-md bg-[#beccdc] rounded-2xl shadow-xl p-7 space-y-6">
            <!-- Header -->
            <div class="text-center space-y-2">
                <h1 class="text-2xl font-bold text-black">Contact Us</h1>
                <p class="text-base text-gray-600" style="color: #303030;">We'd love to hear from you</p>
            </div>

            <!-- Contact Form -->
            <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                @csrf

                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-sm font-medium" style="color: #636363;">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="bg-[#f1f1f1] mt-1 block w-full rounded border-gray-300 text-sm py-2 px-3 focus:border-black focus:ring-black transition duration-200"
                        placeholder="Enter your name">
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium" style="color: #636363;">Email</label>
                    <input type="email" id="email" name="email" required
                        class="bg-[#f1f1f1] mt-1 block w-full rounded border-gray-300 text-sm py-2 px-3 focus:border-black focus:ring-black transition duration-200"
                        placeholder="Enter your email">
                </div>

                <!-- Subject Input -->
                <div>
                    <label for="subject" class="block text-sm font-medium" style="color: #636363;">Subject</label>
                    <input type="text" id="subject" name="subject" required
                        class="bg-[#f1f1f1] mt-1 block w-full rounded border-gray-300 text-sm py-2 px-3 focus:border-black focus:ring-black transition duration-200"
                        placeholder="Enter subject">
                </div>

                <!-- Message Input -->
                <div>
                    <label for="message" class="block text-sm font-medium" style="color: #636363;">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="bg-[#f1f1f1] mt-1 block w-full rounded border-gray-300 text-sm py-2 px-3 focus:border-black focus:ring-black transition duration-200"
                        placeholder="Type your message here..."></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-black text-white py-3 px-6 rounded text-sm font-medium hover:bg-gray-700 transition duration-200 cursor-pointer mb-2"
                    style="color:rgb(191, 191, 191);">
                    Send Message
                </button>

                <!-- Email Contact -->
                <div class="text-center">
                    <a href="mailto:contact@netizensfoundation.org"
                        class="hover:underline text-sm" style="color:#636363;">
                        contact@netizensfoundation.org
                    </a>
                </div>
            </form>
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
