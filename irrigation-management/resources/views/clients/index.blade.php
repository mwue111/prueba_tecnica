<x-layout>
    <x-panel>
        @if(session('message'))
        <div class="message">
            <p>
                {{ session('message') }}
            </p>
        </div>
        @endif

        @if($clients)

        <form id="add-client-form" class="mb-4" action="{{ route('client.create') }}" method="GET">
        @csrf
            <x-form.button class="bg-info text-white uppercase font-semibold text-xs py-3 px-10 rounded-2xl hover:bg-blue-600">Añadir cliente</x-form>
        </form>

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
                <!-- <th scope="col" colspan="2">Acciones</th> -->
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
                        <!-- <td>
                            <form action="#" METHOD="POST">
                            @csrf
                            @method('DELETE')
                                <x-form.button>
                                    <div class="delete-button-container">
                                        <img
                                            class="delete-button"
                                            src="{{ asset('assets/images/delete.png') }}"
                                            alt="Borrar">
                                    </div>
                                </x-form.button>
                            </form>
                        </td> -->
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $clients->links() }}

        @else
            <p>No hay clientes en la base de datos.</p>
        @endif
    </x-panel>
</x-layout>
