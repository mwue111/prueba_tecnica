@props(['name', 'label', 'data' => null])

    <x-form.label class="my-2" name="{{ $name }}">{{ $label }}</x-form.label>

    <input  {{ $attributes(['class' => 'border border-gray-200 p-2 w-full rounded mb-2']) }}
            name="{{ $name }}"
            id="{{ $name }}"
            {{ $attributes(['value' => $data ? $data : old($name)])}}
    >

<x-form.error name="{{ $name }}" />
