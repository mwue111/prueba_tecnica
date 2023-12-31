<x-layout>

    <x-search
            route="irrigation.search"
            param="{{ $client->id }}"
            title="programadores de riego"
            suggestion="Modelo"
    />

    @if($irrigations)
    <div class="show-header mb-4">
        <div class="title-container">
            <h1 id="client-title">Cliente {{ $client->name }}</h1>
            <h2 id="client-subtitle">Programadores de riego asociados</h2>
        </div>

        <form action="{{ route('irrigations.active', $client->id) }}" method="GET">
        @csrf
            <x-form.button class="bg-info text-white uppercase font-semibold text-xs py-3 px-10 rounded-2xl hover:bg-blue-600">Filtrar programadores activos</x-form>
        </form>
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
        <p class="clients-not-found">No hay programadores de riego asociados a {{ $client->name }}.</p>
    @endif

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
