@php 
    use Illuminate\Support\Str; 
@endphp

@extends('layouts.blog')

@section('title', 'Netizens Foundation - All Categories')

@section('content')
<div style="background-color: #373737;" class="w-full min-h-screen">
    <!-- Top gradient shadow bar -->
    {{-- <div style="height:5px; background: linear-gradient(to bottom, #b9bdc1 0%, #262626 100%); transition: background 0.3s ease-in-out;" class="w-full"></div> --}}

    <!-- Main section -->
    <section class="py-16 px-6 pt-8 pb-12">
        <div class="max-w-screen-xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-left" style="color: #ffffff; margin-bottom: 1.5rem; padding-left: 0.5rem;">CATEGORIES</h2>

            <!-- Grid of Category Cards -->
            <div class="grid gap-6 md:gap-8" style="display: grid; grid-template-columns: repeat(4, 1fr);">
                @foreach($categories as $category)
                    @php
                        $sluggedName = Str::slug(preg_replace('/[\/]/', '-', $category->category_name));
                        $imagePath = 'storage/category-icons/' . $sluggedName . '.jpg';
                    @endphp

                    <article style="background-color: #303030;" class="group rounded-md shadow-lg hover:shadow-2xl transition-all duration-300 ease-out overflow-hidden">
                        <!-- Category Image -->
                        <div class="relative aspect-video overflow-hidden">
                            <img src="{{ asset('storage/category-icons/' . Str::slug(str_replace('/', '', $category->category_name)) . '.jpg') }}"
                                 alt="{{ $category->category_name }}"
                                 class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold mb-3 line-clamp-2 flex items-center gap-2" style="color: #ffffff;">
                                {{ $category->category_name }}
                            </h3>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('categories.show', $category->id) }}"
                                   class="inline-flex items-center font-medium transition-colors group-hover:translate-x-1"
                                   style="color: #ababab;">
                                    View Posts
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                                <span class="text-sm text-gray-400" style="color: #a5a5a5;">{{ $category->posts()->count() }} posts</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
