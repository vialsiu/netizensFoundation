@extends('layouts.blog')

@section('content')
<div class="bg-[#f0f0f0] min-h-screen py-12 px-4 md:px-10">

    @php
    $hoverVideos = [
        '2ne1s-cl-faces-backlash-for-racist-slur' => 'cl_hover_video.mp4',
        'cynthia-erivo-and-ariana-grande-shed-tears-during-every-interview' => 'ariana_cynthia_hover.mp4',
        'sean-diddy-combs-faces-federal-charges-in-high-profile-trafficking-trial' => 'diddy_trial_hover.mp4',
        'kim-soo-hyun-denies-underage-dating-accusation' => 'kimsoohyun_hover.mp4',
    ];
@endphp



    {{-- Title & Byline --}}
    <div class="max-w-4xl mx-auto text-center border-b pb-6 mb-8">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight tracking-wide">
            {{ $post->title }}
        </h1>
        <p class="mt-4 text-gray-600 text-sm italic">
            By <span class="text-gray-800 font-semibold">Author #{{ $post->author }}</span>
            • {{ date('F j, Y', strtotime($post->updated_at)) }}
        </p>
    </div>

    {{-- Featured Media --}}
    {{-- <div class="relative max-w-4xl mx-auto aspect-video overflow-hidden rounded-xl shadow-lg mb-12"> --}}
        @if (array_key_exists($post->slug, $hoverVideos))
        <div class="relative max-w-4xl mx-auto aspect-video overflow-hidden rounded-xl shadow-lg mb-12">
            <video
                class="w-full h-full object-cover rounded-xl"
                controls
                preload="metadata"
            >
                <source src="{{ asset('storage/videos/' . $hoverVideos[$post->slug]) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <span class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
                {{ $post->category->category_name }}
            </span>
        </div>
        
        @else
            <img
                src="{{ asset('storage/' . $post->image) }}"
                class="w-full h-full object-cover rounded-xl"
                alt="{{ $post->title }}"
            />
        @endif
    
        {{-- Move category badge BELOW the video to avoid blocking controls
        <div class="mt-4 text-right pr-2">
            <span class="inline-block px-3 py-1 bg-white/90 backdrop-blur-sm text-sm font-medium rounded-full text-gray-800">
                {{ $post->category->category_name }}
            </span>
        </div>
    </div> --}}
    
    
    
    {{-- Post Content --}}
<div class="max-w-4xl mx-auto prose prose-lg prose-p:leading-relaxed prose-headings:mt-8 prose-img:rounded-xl text-gray-800">
    {!! $post->content !!}
</div>


</div>
@endsection
