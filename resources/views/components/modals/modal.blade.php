@props(['id', 'title', 'subtitle' => null])

<dialog id="{{ $id }}" class="rounded-2xl p-8 w-full max-w-md m-auto backdrop:bg-black/40">
    <div class="flex justify-between items-start mb-1">
        <h2 class="font-semibold text-lg">{{ $title }}</h2>
        <button type="button" onclick="this.closest('dialog').close()" aria-label="Fermer">✕</button>
    </div>

    @if ($subtitle)
        <p class="text-sm text-gray-600 mb-8">{{ $subtitle }}</p>
    @endif

    {{ $slot }}
</dialog>
