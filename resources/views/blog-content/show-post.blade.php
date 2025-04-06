@extends('layouts.blog')

@section('title', 'Netizens Foundation - ' . $post->title)

@section('content')
    <section class="py-8">
        <h2 class="text-2xl font-bold mb-4">{{ $post->title }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {!! $post->content !!}
        </div>
    </section>
@endsection
