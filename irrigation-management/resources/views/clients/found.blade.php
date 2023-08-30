<x-layout>
    @if($clients)

    <table class="table table-hover">
        <thead>
            <th scope="col">Razón social</th>
            <th scope="col">CIF</th>
            <th scope="col" colspan="3">Dirección</th>
            <th scope="col">Fecha inicio del contrato</th>
            <th scope="col">Fecha fin del contrato</th>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>
                        <a href="{{ route('client.show', $client->id) }}">
                            {{ $client->name }}
                        </a>
                    </td>
                    <td>{{ $client->cif }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->town }}</td>
                    <td>{{ $client->start_contract }}</td>
                    <td>{{ $client->end_contract }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @else
        <p>No se han encontrado resultados.</p>
    @endif

    {{ $clients->links() }}

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
