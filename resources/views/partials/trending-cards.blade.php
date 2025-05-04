<section class="bg-gray-900 py-10 text-white">
    <div class="flex justify-center space-x-6 overflow-x-auto px-4">
        @foreach ($featuredPosts as $featPost)
            <a href="{{ route('blog.post', ['slug' => $featPost->slug]) }}">
                <div class="w-65 h-70 bg-gray-800 rounded-lg overflow-hidden shadow-lg shrink-0 group">
                    
                    @if($featPost->slug === '2ne1s-cl-faces-backlash-for-racist-slur')
                        <div class="relative aspect-video overflow-hidden group">
                            <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-300"
                                   muted autoplay loop playsinline>
                                <source src="{{ asset('storage/videos/cl_hover_video.mp4') }}" type="video/mp4">
                            </video>
                            <img src="{{ asset('storage/' . $featPost->image) }}"
                                 alt="{{ $featPost->title }}"
                                 class="w-full h-full object-cover group-hover:opacity-0 transition duration-300">
                        </div>

                    @elseif($featPost->slug === 'cynthia-erivo-and-ariana-grande-shed-tears-during-every-interview')
                        <div class="relative aspect-video overflow-hidden group">
                            <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-300"
                                   muted autoplay loop playsinline>
                                <source src="{{ asset('storage/videos/ariana_cynthia_hover.mp4') }}" type="video/mp4">
                            </video>
                            <img src="{{ asset('storage/' . $featPost->image) }}"
                                 alt="{{ $featPost->title }}"
                                 class="w-full h-full object-cover group-hover:opacity-0 transition duration-300">
                        </div>

                    @else
                        <img src="{{ asset('storage/' . $featPost->image) }}"
                             alt="{{ $featPost->title }}"
                             class="w-full h-40 object-cover transition-transform duration-300 group-hover:scale-105">
                    @endif

                    <div class="p-4">
                        <h3 class="font-semibold line-clamp-2">{{ $featPost->title }}</h3>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
