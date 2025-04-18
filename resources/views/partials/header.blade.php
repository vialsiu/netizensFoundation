@php use Illuminate\Support\Facades\Auth; @endphp
<div class="flex justify-between items-center py-6 px-2 md:px-4 shadow-md" style="background-color: #beccdc;">
    <div class="flex items-center space-x-6" style="padding-left: 2vw;">
        <a href="{{ route('blog.home') }}">
            <img src="{{ Vite::asset('resources/img/nflogo.png') }}" alt="NF Logo" style="height:52px; width:auto;">
        </a>
        <a href="{{ route('blog.home') }}" class="text-gray-700 hover:underline">Home</a>
        <a href="{{ route('blog.categories') }}" class="text-gray-700 hover:underline">Categories</a>
        <a href="{{ route('blog.contact') }}" class="text-gray-700 hover:underline">Contact</a>
    </div>
    @if(!Auth::user())
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Search by name" class="px-4 py-2 rounded"
                   style="background-color:#b4c2d1; border: none; height: 2.5rem;">
            <a href="{{ route('auth.login') }}" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-700">Log
                in</a>
            <a href="{{ route('auth.register') }}"
               class="border border-gray-500 px-4 py-2 rounded hover:bg-gray-700 hover:text-white">Sign up</a>
        </div>
    @else
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Search by name" class="px-4 py-2 rounded"
                   style="background-color:#b4c2d1; border: none; height: 2.5rem;">

            <!-- TODO: change this user avatar call later -->
            <img src="{{ Auth::user()->avatar }}" alt="">
            <span>Hello, {{ Auth::user()->name }} !</span>
            <a href="{{ route('auth.logout') }}"
               class="bg-black text-white px-4 py-2 rounded hover:bg-gray-700">Logout</a>
        </div>
    @endif
</div>
