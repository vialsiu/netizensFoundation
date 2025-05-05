@extends('layouts.blog')

@section('title', 'Category: ' . $category->category_name)

@section('content')
<div style="background-color: #f1f1f1;" class="w-full flex flex-col">
    <section class="py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 text-left pl-2">
            <h2 class="text-3xl md:text-4xl font-bold text-left" style="color: #444444; margin-bottom: 1.5rem; padding-left: 0.5rem;">
                {{ $category->category_name }}
            </h2>

            @if($posts->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($posts as $post)
                        @php
                            $hoverVideos = [
                                '2ne1s-cl-faces-backlash-for-racist-slur' => 'cl_hover_video.mp4',
                                'cynthia-erivo-and-ariana-grande-shed-tears-during-every-interview' => 'ariana_cynthia_hover.mp4',
                                'sean-diddy-combs-faces-federal-charges-in-high-profile-trafficking-trial' => 'diddy_trial_hover.mp4',
                                'kim-soo-hyun-denies-underage-dating-accusation' => 'kimsoohyun_hover.mp4',
                            ];
                        @endphp

                        <article style="background-color: #dcdcdc;" class="group rounded-sm shadow-lg hover:shadow-2xl transition-all duration-300 ease-out overflow-hidden">
                            @if(array_key_exists($post->slug, $hoverVideos))
                                <div class="relative aspect-video overflow-hidden group">
                                    <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-300"
                                           muted autoplay loop playsinline>
                                        <source src="{{ asset('storage/videos/' . $hoverVideos[$post->slug]) }}" type="video/mp4">
                                    </video>
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                         class="w-full h-full object-cover group-hover:opacity-0 transition duration-300"
                                         alt="{{ $post->title }}">
                                    <span class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
                                        {{ $post->category->category_name }}
                                    </span>
                                </div>
                            @else
                                <div class="relative aspect-video overflow-hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                         class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30 to-transparent"></div>
                                    <span class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
                                        {{ $post->category->category_name }}
                                    </span>
                                </div>
                            @endif

                            <div class="p-6 md:p-8">
                                <h3 class="text-xl md:text-2xl font-bold text-left" style="color: #303030; margin-bottom: 1rem;">
                                    {{ $post->title }}
                                </h3>
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('blog.post', ['slug' => $post->slug]) }}"
                                       class="inline-flex items-center font-medium transition-colors group-hover:translate-x-1"
                                       style="color: #636363;">
                                        Read More
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                    <span class="text-sm" style="color: #636363;">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600 text-lg">No posts in this category yet.</p>
            @endif
        </div>
    </section>
</div>
@endsection
