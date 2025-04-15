<section class="bg-gray-900 py-10 text-white">
    <div class="flex justify-start space-x-6 overflow-x-auto px-4">
        @foreach ([
            'Cynthia and whatever',
            'Loser Crying',
            'Racist scandal',
            '>'
        ] as $title)
            <div class="w-64 bg-gray-800 rounded-lg overflow-hidden shadow-lg shrink-0">
                <img src="{{ asset('././img/gossip2.png') }}" alt="{{ $title }}" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold">{{ $title }}</h3>
                </div>
            </div>
        @endforeach
    </div>
</section>
