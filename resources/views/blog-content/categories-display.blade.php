@extends('layouts.blog')

@section('title', 'Netizens Foundation - All Categories')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-8">All Categories</h2>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 p-6">
                    <div class="flex items-start mb-4">
                        <div class="bg-blue-500 p-3 rounded-lg mr-4">
                            {!! $category->icon !!}
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $category->category_name }}</h3>
                        </div>
                    </div>
                    <a href="#"
                       class="text-gray-800 hover:text-gray-700 text-sm font-medium hover:underline">
                        View Posts →
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
