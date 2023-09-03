<x-layout>
    @if($measures)
    <ul>
        @foreach($measures as $measure)
        <li>
            - {{ $measure->measures[0]->measurement_value }}
        </li>
        @endforeach
    </ul>
    @else
    <p>No hay datos</p>
    @endif
</x-layout>
