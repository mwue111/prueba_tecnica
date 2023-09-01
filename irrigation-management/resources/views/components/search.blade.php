@props(['route', 'title', 'suggestion', 'param' => null])

<x-panel class="search-container">
    <h2>Buscar {{ $title }}</h2>
    <form class="form-inline mb-4" method="GET" action="{{ route($route), $param }}">

        @csrf
            <input
                class="form-control mr-sm-2"
                aria-label="Search"
                type="text"
                name="search"
                id="search"
                placeholder="{{ $suggestion }}"
                value="{{ request('search') }}"
            >

            <input type="hidden" name="client_id" value="{{ $param }}">

            <x-form.button class="btn btn-outline-info text-info hover:bg-gray-200 my-sm-0 ">
                <img
                    id="search-icon"
                    src="{{asset('/assets/images/search.png')}}"
                    alt="Buscar"
                >
            </x-form>
    </form>
</x-panel>
