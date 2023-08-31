<x-layout>
    <x-form.panel>
        @if($client)
        <h1 id="edit-client-title" class="mb-4">Editar {{$client->name}}</h1>
            <!-- formulario de edición -->
            <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <x-form.input name="name" label="Razón social" :data="$client->name" required />

                <x-form.input name="cif" label="CIF" :data="$client->cif" required />

                <x-form.input name="address" label="Dirección" :data="$client->address" required/>

                <x-form.input name="city" label="Provincia" :data="$client->city" required/>

                <x-form.input name="town" label="Municipio" :data="$client->town" required/>

                <x-form.date name="start_contract" label="Fecha inicio de contrato" :data="$client->start_contract"/>

                <x-form.date name="end_contract" label="Fecha fin de contrato" :data="$client->end_contract"/>

                <x-form.button class="bg-info text-white uppercase font-semibold text-xs py-3 px-10 rounded-2xl hover:bg-blue-600 mt-4">Guardar</x-form>

                <x-link url="{{ url()->previous() }}">Volver</x-link>
            </form>
        @else
            <p>No se ha encontrado al cliente.</p>
        @endif
    </x-panel>
</x-layout>
