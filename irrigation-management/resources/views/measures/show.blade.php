<x-layout>

    @if($measures)

    <h1>Cliente {{ $client->name }}</h1>
    <h2>Datos de la sonda modelo {{ $model }}</h2>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre de la sonda</th>
                <th scope="col">Valor de la medida</th>
                <th scope="col">Fecha de la medida</th>
            </tr>
        </thead>
        <tbody>
            @foreach($measures as $measure)
            <tr>
                <td>{{ $measure->measures[0]->sensor_name }}</td>
                <td>{{ $measure->measures[0]->measurement_value }}</td>
                <td>{{ $measure->measures[0]->measurement_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $measures->links() }}
    @else
        <p clas="clients-not-found">No hay datos</p>
    @endif

    <x-link url="{{ url()->previous() }}">Volver</x-link>
</x-layout>
