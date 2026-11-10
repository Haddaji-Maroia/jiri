@props(['label', 'name', 'type' => 'text'])

<div class="mb-5">
    <label for="{{ $name }}" class="block text-sm mb-2">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        class="w-full border border-gray-800 rounded-lg px-4 py-2 text-sm"
    >

</div>

