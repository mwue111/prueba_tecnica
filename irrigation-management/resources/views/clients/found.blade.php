<x-layout>
    @if($clients)

    <ul>
        @foreach($clients as $client)
            <li>{{ $client->name }} - {{ $client->city }}</li>
        @endforeach
    </ul>

    @else
        <p>No se han encontrado resultados.</p>
    @endif
</x-layout>
