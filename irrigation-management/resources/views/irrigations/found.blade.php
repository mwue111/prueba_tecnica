@if($irrigations)
    {{ $irrigations }}
@else
    <p>No hay programadores de riego de ese modelo asociados a {{ $client->name }}</p>
@endif
