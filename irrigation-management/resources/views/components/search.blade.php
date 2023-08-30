<form method="GET" action="{{ route('client.search') }}">
    @csrf
        <input
            type="text"
            name="search"
            id="search"
            placeholder="Razón social/municipio"
            value="{{ request('search') }}"
        >

        <x-form.button>Buscar</x-form>
</form>
