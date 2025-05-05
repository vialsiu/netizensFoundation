@php use Illuminate\Support\Str; @endphp

@extends('layouts.blog')

@section('title', 'Netizens Foundation - All Categories')

@section('content')
<div style="background-color: #beccdc;" class="min-h-screen py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">All Categories</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $category)
                <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-xl transition duration-300 group">
                    
                    <!-- Category Image -->
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ asset('storage/category-icons/' . Str::slug($category->category_name) . '.jpg') }}"
                        alt="{{ $category->category_name }}"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                   
                    </div>

                    <!-- Card Content -->
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="text-indigo-500 text-xl">{!! $category->icon !!}</div>
                            <h3 class="text-lg font-semibold text-gray-900 leading-snug">
                                {{ $category->category_name }}
                            </h3>
                        </div>
                        <a href="{{ route('categories.show', $category->id) }}"
                           class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                            View Posts →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
