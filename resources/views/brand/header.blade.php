@push('head')
    <link
        href={{ Vite::asset('resources/img/gossip.png') }}
        id="favicon"
        rel="icon"
    >
@endpush
<div class="h2 d-flex align-items-center">
    @auth
        <x-orchid-icon path="bs.house" class="d-inline d-xl-none"/>
    @endauth

    <p class="my-0 {{ auth()->check() ? 'd-none d-xl-block' : '' }}">
        <img src="{{ Vite::asset('resources/img/gossip.png') }}" alt="{{ config('app.name') }}" width="62" height="62">
        <span>Netizens Foundation</span>
    </p>
</div>
