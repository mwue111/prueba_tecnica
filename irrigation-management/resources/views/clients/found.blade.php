<x-layout>
    @if(session('message'))
        <div class="message">
            <p>
                {{ session('message') }}
            </p>
        </div>
    @endif

    <x-search
            route="client.search"
            title="clientes"
            suggestion="Razón social/municipio"
    />

    @if($clients)

    <table class="table table-hover">
        <thead>
            <th scope="col">Razón social</th>
            <th scope="col">CIF</th>
            <th scope="col">Dirección</th>
            <th scope="col">Municipio</th>
            <th scope="col">Provincia</th>
            <th scope="col">Fecha inicio del contrato</th>
            <th scope="col">Fecha fin del contrato</th>
            <th scope="col">Editar cliente</th>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>
                        <a class="client-link" href="{{ route('client.show', $client->id) }}">
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
                            <x-form.button>
                                <div class="edit-button-container">
                                    <img
                                        class="edit-button"
                                        src="{{ asset('assets/images/edit.png') }}"
                                        alt="Editar"
                                    >
                                </div>
                            </x-form.button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $clients->links() }}

    @else
        <p class="clients-not-found">No se han encontrado resultados.</p>
    @endif


    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
