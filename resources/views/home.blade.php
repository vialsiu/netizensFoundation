@extends('layouts.blog')

@section('title', 'Netizens Foundation')

@section('content')
    <div class="min-h-screen w-full flex flex-col">
        <!-- Top Banner -->

        @include('partials.scrolling-banner')


        <!-- Header -->
        @include('partials.header')

        <!-- Hero Section -->
        <section class="py-16" style="background-color: #beccdc;">
            <div style="padding-left: 3vw;">
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight text-black">
                    NETIZENS<br>FOUNDATION
                </h1>
                <p class="text-xl md:text-2xl mt-4 font-semibold text-gray-700">
                    Trending This Week
                </p>
            </div>
        </section>
        
        
        
        
        

        <!-- Trending Cards -->
        @include('partials.trending-cards')

    </div>
@endsection
