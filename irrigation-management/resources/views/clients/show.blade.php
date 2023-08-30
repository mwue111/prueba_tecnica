<x-layout>
    @if($client)
        {{ $client->name }}
    @else
        <p>No hay clientes</p>
    @endif

</x-layout>
