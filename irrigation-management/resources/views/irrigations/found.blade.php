<x-layout>
    <x-search
            route="irrigation.search"
            param="{{ $client->id }}"
            title="programadores de riego"
            suggestion="Modelo"
    />

    @if($irrigations)
    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Modelo</th>
                <th scope="col">Número de serie</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Última conexión</th>
                </tr>
            </thead>
            <tbody>
                @foreach($irrigations as $irrigation)
                <tr>
                    <td>
                        <a class="client-link" href="{{ route('measures.show', $irrigation->id) }}">
                            {{ $irrigation->model }}
                        </a>
                    </td>
                    <td>{{ $irrigation->serial_number }}</td>
                    <td>{{ $irrigation->registration_date }}</td>
                    <td>{{ $irrigation->last_connection }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        @if(!$model_exists)
            <p class="clients-not-found">No existen programadores de riego del modelo "{{ $model }}" en el sistema.</p>
        @else
            <p class="clients-not-found">No hay programadores de riego del modelo "{{ $model }}" asociados a {{ $client->name }}.</p>
        @endif
    @endif

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
