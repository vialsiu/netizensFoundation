<section class="bg-gray-900 py-10 text-white">
    <div class="flex justify-center space-x-6 overflow-x-auto px-4">
        @foreach ($featuredPosts as $featPost)
            <a href="{{ route('blog.post', ['slug' => $featPost->slug]) }}">
                <div class="w-65 h-70 bg-gray-800 rounded-lg overflow-hidden shadow-lg shrink-0">
                    <img src="{{ Vite::asset('resources/img/picture.png') }}" alt="{{ $featPost->title }}"
                         class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">{{ $featPost->title }}</h3>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
