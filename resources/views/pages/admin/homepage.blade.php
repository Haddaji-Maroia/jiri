<x-layouts.admin>

    <div class="flex justify-between items-center mb-8">
        <input type="search" placeholder="Chercher une épreuve"
               class="bg-white rounded-lg px-4 py-3 w-72">

        <button x-data
            type="button"
            @click="$dispatch('open-add-epreuve')"
            class="bg-blue-800 text-white rounded-lg px-12 py-3 hover:bg-blue-900 cursor-pointer ">
            + Ajouter une épreuve
        </button>
    </div>

    <x-jiri-section title="En cours">
        <x-jiri-card title="Épreuve 16 Juin 2026" students="12" jury="8" status="En cours" />
        <x-jiri-card title="Épreuve 16 Juin 2026" students="12" jury="8" status="En cours" />
    </x-jiri-section>

    <x-jiri-section title="À venir">
        <x-jiri-card title="Épreuve 16 Juin 2026 - 09:00" students="12" jury="8" status="À venir" />
    </x-jiri-section>

    <x-jiri-section title="Terminés">
        <x-jiri-card title="Épreuve 16 Juin 2026 - 09:00" students="12" jury="8" status="Terminé" />
    </x-jiri-section>

    <x-jiri-section title="Archivés">
        <x-jiri-card title="Épreuve 16 Juin 2026 - 09:00" students="12" jury="8" status="Archivé" />
    </x-jiri-section>

    <x-modals.add-jiri/>

</x-layouts.admin>
