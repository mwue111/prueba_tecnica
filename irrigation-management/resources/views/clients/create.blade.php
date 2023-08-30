<x-layout>
        <h1>Crear cliente</h1>
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


        <x-form.input name="name" label="Razón social" required/>

        <x-form.input name="cif" label="CIF" required/>

        <x-form.input name="address" label="Dirección" required/>

        <x-form.input name="city" label="Municipio" required/>

        <x-form.input name="town" label="Provincia" required/>

        <x-form.date name="start_contract" label="Fecha inicio de contrato"/>

        <x-form.date name="end_contract" label="Fecha fin de contrato"/>

        <x-form.button>Guardar</x-form>

        <x-link url="{{ url()->previous() }}">Volver</x-link>

    </form>
</x-layout>
