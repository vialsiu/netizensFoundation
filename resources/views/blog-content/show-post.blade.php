@extends('layouts.blog')

@section('title', 'Netizens Foundation - ' . $post->title)

@section('content')
    <section class="py-12">
        {{-- Imagem de capa grande --}}
        @if($post->image)
            <div class="w-full h-[340px] md:h-[480px] bg-gray-100 rounded-xl overflow-hidden shadow mb-8 flex items-center justify-center">
                <img
                    src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="object-cover w-full h-full"
                >
            </div>
        @endif

        {{-- Título centralizado --}}
        <h1 class="text-3xl md:text-5xl font-extrabold text-center mb-6 text-gray-900 leading-tight">
            {{ $post->title }}
        </h1>

        {{-- Conteúdo do post --}}
        <div class="mx-auto max-w-3xl prose prose-lg prose-slate">
            {!! $post->content !!}
        </div>
    </section>
@endsection
