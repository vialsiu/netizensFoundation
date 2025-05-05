@php
    $hoverVideos = [
        '2ne1s-cl-faces-backlash-for-racist-slur' => 'cl_hover_video.mp4',
        'cynthia-erivo-and-ariana-grande-shed-tears-during-every-interview' => 'ariana_cynthia_hover.mp4',
        'sean-diddy-combs-faces-federal-charges-in-high-profile-trafficking-trial' => 'diddy_trial_hover.mp4',
        'kim-soo-hyun-denies-underage-dating-accusation' => 'kimsoohyun_hover.mp4',
    ];
@endphp

<section style="background-color: #303030;" class="text-white py-6 relative">
    <div class="relative w-full">
        <div class="flex items-center justify-between relative">
            <!-- Left Arrow -->
            <button id="scrollLeft"
                    class="z-10 bg-gray-700 text-white px-4 py-3 rounded-full hover:bg-gray-600"
                    style="margin-left: 2rem; height: 60px;">
                &lt;
            </button>

            <!-- Scrollable content -->
            <div id="carousel"
                 class="flex overflow-x-auto scroll-smooth transition-all duration-500 ease-in-out"
                 style="padding: 0 2rem 1rem 2rem; gap: 2rem; max-width: calc(100% - 10rem); scrollbar-width: none; -ms-overflow-style: none;">
                 
                @foreach ($featuredPosts as $featPost)
                    <a href="{{ route('blog.post', ['slug' => $featPost->slug]) }}">
                        <div style="width: 340px;" class="bg-[#1a1a1a] rounded-xl overflow-hidden shrink-0 group">
                            <!-- Video / Image -->
                            <div class="relative aspect-video overflow-hidden rounded-xl">
                                @if(array_key_exists($featPost->slug, $hoverVideos))
                                    <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-300 rounded-xl"
                                           muted autoplay loop playsinline>
                                        <source src="{{ asset('storage/videos/' . $hoverVideos[$featPost->slug]) }}" type="video/mp4">
                                    </video>
                                @endif
                                <img src="{{ asset('storage/' . $featPost->image) }}"
                                     alt="{{ $featPost->title }}"
                                     class="w-full h-full object-cover rounded-xl transition duration-300 {{ array_key_exists($featPost->slug, $hoverVideos) ? 'group-hover:opacity-0' : 'group-hover:scale-105' }}">
                            </div>

                            <!-- Content -->
                            <div class="p-5 flex flex-col justify-between h-[140px]">
                                <h3 class="text-xl font-bold leading-tight line-clamp-2">
                                    {{ $featPost->title }}
                                </h3>
                                <span class="text-sm text-gray-400 mt-2">
                                    Featured
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach

                <!-- Space at end for right arrow -->
                <div style="min-width: 2rem;"></div>
            </div>

            <!-- Right Arrow -->
            <button id="scrollRight"
                    class="z-10 bg-gray-700 text-white px-4 py-3 rounded-full hover:bg-gray-600"
                    style="margin-right: 2rem; height: 60px;">
                &gt;
            </button>
        </div>
    </div>

    <!-- Hide scrollbar -->
    <style>
        #carousel::-webkit-scrollbar {
            display: none;
        }
    </style>
</section>

<!-- Scroll Buttons Logic -->
<script>
    const carousel = document.getElementById('carousel');
    const scrollAmount = 360;

    document.getElementById('scrollLeft').addEventListener('click', () => {
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    document.getElementById('scrollRight').addEventListener('click', () => {
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
</script>
