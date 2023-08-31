<x-layout>
    <x-form.panel>
        <h1 id="create-client-title" class="mb-4">Crear cliente</h1>

        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <x-form.input name="name" label="Razón social" required/>

            <x-form.input name="cif" label="CIF" required/>

            <x-form.input name="address" label="Dirección" required/>

            <x-form.input name="city" label="Municipio" required/>

            <x-form.input name="town" label="Provincia" required/>

            <x-form.date name="start_contract" label="Fecha inicio de contrato"/>

            <x-form.date name="end_contract" label="Fecha fin de contrato"/>

            <x-form.button class="bg-info text-white uppercase font-semibold text-xs py-3 px-10 rounded-2xl hover:bg-blue-600 mt-4">Guardar</x-form>

            <x-link url="{{ url()->previous() }}">Volver</x-link>

        </form>
    </x-form>
</x-layout>
