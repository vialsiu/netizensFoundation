@extends('layouts.blog')

@section('content')
<div class="bg-[#f9f9f9] min-h-screen py-12 px-4 md:px-10">

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
    <div class="max-w-5xl mx-auto mb-10">
        @if($post->video_path ?? false)
            <div class="bg-[#303030] w-full py-4 px-4 rounded-md">
                <video 
                    class="w-full max-h-[700px] object-contain mx-auto rounded-md"
                    controls
                    preload="metadata">
                    <source src="{{ asset('storage/videos/' . $post->video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @else
            <div class="bg-[#eee] rounded-md overflow-hidden shadow">
                <img 
                    src="{{ asset('storage/' . $post->image) }}" 
                    alt="{{ $post->title }}"
                    class="w-full object-contain max-h-[600px] mx-auto">
            </div>
        @endif
    </div>

    {{-- Full Content --}}
    <div class="prose prose-lg prose-slate max-w-4xl mx-auto pb-24">
        {!! $post->content !!}
    </div>

</div>
@endsection
