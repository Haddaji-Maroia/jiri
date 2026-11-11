@props(['title'])

<section class="mb-6">
    <h2 class="mb-3">&gt; {{ $title }}</h2>

    <div class="flex flex-col gap-4">
        {{ $slot }}
    </div>
</section>
