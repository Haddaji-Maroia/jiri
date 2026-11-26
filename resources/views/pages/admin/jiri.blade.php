<x-layouts.admin>

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-semibold">Épreuves</h1>

        <button type="button" x-data @click="$dispatch('open-add-epreuve')"
                class="bg-blue-800 text-white rounded-lg px-12 py-3 hover:bg-blue-900 cursor-pointer">
            + Ajouter une épreuve
        </button>
    </div>

    <livewire:jiri-list />

    <x-modals.add-jiri />

</x-layouts.admin>



