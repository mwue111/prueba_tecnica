<x-panel>
    <form class="form-inline" method="GET" action="{{ route('client.search') }}">
        @csrf
            <input
                class="form-control mr-sm-2"
                aria-label="Search"
                type="text"
                name="search"
                id="search"
                placeholder="Razón social/municipio"
                value="{{ request('search') }}"
            >

            <x-form.button class="btn btn-outline-info text-info hover:bg-gray-200 my-sm-0 ">
                <img
                    id="search-icon"
                    src="{{asset('/assets/images/search.png')}}"
                    alt="Buscar"
                >
            </x-form>
    </form>
</x-panel>
