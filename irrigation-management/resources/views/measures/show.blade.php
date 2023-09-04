<x-layout>
    <x-search
            route="irrigation.search"
            param="{{ $client->id }}"
            title="programadores de riego"
            suggestion="Modelo"
    />

    @if($measures)

    <div class="title-container">
        <h1 id="client-name">Cliente {{ $client->name }}</h1>
        <h2 id="sensor-name">Datos de la sonda modelo {{ $model }}</h2>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre de la sonda</th>
                <th scope="col">Valor de la medida</th>
                <th scope="col">Fecha de la medida</th>
                <th scope="col">Hora de la medida</th>
            </tr>
        </thead>
        <tbody>
            @foreach($measures as $measure)
            <tr>
                <td>{{ $measure->measures[0]->sensor_name }}</td>
                <td>{{ $measure->measures[0]->measurement_value }}</td>
                <td>{{ \Carbon\Carbon::parse($measure->measures[0]->measurement_date)->format('d-m-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($measure->measures[0]->measurement_date)->format('H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $measures->links() }}

    @else
        <p clas="clients-not-found">No hay datos.</p>
    @endif

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
