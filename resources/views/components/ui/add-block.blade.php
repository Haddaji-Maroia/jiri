@props(['title', 'button'])

<div>
    <h2 class="mb-4">{{ $title }}</h2>

    <button type="button" class="bg-blue-800 text-white rounded-lg px-20 py-3 hover:bg-blue-900 cursor-pointer">
        + {{ $button }}
    </button>

    {{ $slot }}
</div>
