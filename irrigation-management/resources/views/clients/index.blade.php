<x-layout>
    @if(session('message'))
        <h1>
            {{ session('message') }}
        </h1>
    @endif

    @if($clients)

    <form action="{{ route('client.create') }}" method="GET">
    @csrf
        <x-form.button>Añadir cliente</x-form>

    </form>

    <table>
        <thead>
            <th>Razón social</th>
            <th>CIF</th>
            <th colspan="3">Dirección</th>
            <th>Fecha inicio del contrato</th>
            <th>Fecha fin del contrato</th>
            <th colspan="2">Acciones</th>
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
                    <td>
                        <form action="{{ route('client.edit', $client->id) }}" method="GET">
                        @csrf
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="#" METHOD="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

    {{ $clients->links() }}
    @else
        <p>No hay clientes en la base de datos.</p>
    @endif
</x-layout>
