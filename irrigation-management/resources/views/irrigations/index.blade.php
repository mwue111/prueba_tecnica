<x-layout>

    <x-search
            route="irrigation.search"
            param="{{ $client->id }}"
            title="programadores de riego"
            suggestion="Modelo"
    />

    @if($irrigations)
    <div class="title-container">
        <h1 id="active-irrigation">Cliente {{ $client->name }}</h1>
        <h2 id="active-irrigation-subtitle" class="mb-4">Programadores activos</h2>
    </div>

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
                <td>{{ \Carbon\Carbon::parse($irrigation->registration_date)->format('d-m-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($irrigation->last_connection)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $irrigations->links() }}
    @else
    <p>No hay ningún programador de riego activo actualmente.</p>
    @endif

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
