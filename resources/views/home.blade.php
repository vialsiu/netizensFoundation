@extends('layouts.blog')

@section('title', 'Home - Netizens Foundation')

@section('content')
    <div class="min-h-screen w-full flex flex-col bg-[#f8fafc]">
        <!-- Hero Section -->
        <section class="relative overflow-hidden py-12 md:py-16 lg:py-24 bg-gradient-to-br from-[#beccdc] to-[#a8b8cf]">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="max-w-4xl">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-gray-900 mb-4 animate-fade-in-up">
                        NETIZENS<br>FOUNDATION
                    </h1>
                    <p class="text-lg md:text-xl lg:text-2xl font-medium text-gray-800 opacity-90">
                        Trending This Week
                    </p>
                </div>
            </div>
        </section>

        <!-- Trending Cards -->
        @include('partials.trending-cards', $featuredPosts)

        <!-- Latest Posts Section -->
        <section class="py-12 md:py-16 lg:py-20">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 md:mb-12 text-center">
                    Latest Posts
                </h2>

                <!-- Enhanced Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($posts as $post)
                        <article
                            class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 ease-out overflow-hidden">
                            <!-- Image Container -->
<!-- Image Container -->
@if($post->slug === '2ne1s-cl-faces-backlash-for-racist-slur')
    <div class="relative aspect-video overflow-hidden group">
        <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-300"
               muted autoplay loop>
               <source src="{{ asset('storage/videos/cl_hover_video.mp4') }}" type="video/mp4">
               </video>
               <img src="{{ asset('storage/posts/cl_thumbnail.jpg') }}" ...>
               class="w-full h-full object-cover group-hover:opacity-0 transition duration-300"
             alt="{{ $post->title }}">
        <span
            class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
            {{ $post->category->category_name }}
        </span>
    </div>
@else
    <div class="relative aspect-video overflow-hidden">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30 to-transparent"></div>
        <span
            class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
            {{ $post->category->category_name }}
        </span>
    </div>
@endif


                            <!-- Content -->
                            <div class="p-6 md:p-8">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3 line-clamp-2">
                                    {{ $post->title }}
                                </h3>
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('blog.post', ['slug' => $post->slug]) }}"
                                       class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition-colors group-hover:translate-x-1">
                                        Read More
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                    <time class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
