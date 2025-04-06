@extends('layouts.blog')

@section('title', 'Netizens Foundation')

@section('content')
    <section class="py-8">
        <h2 class="text-2xl font-bold mb-4">Test display posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <a href="{{ route('blog.post', ['slug' => $post->slug]) }}">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}"
                             class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                            <p class="text-sm text-gray-600">By {{ $post->user->name }}
                                - {{ $post->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
