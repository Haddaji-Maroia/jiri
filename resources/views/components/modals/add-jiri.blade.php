<div x-data="{ open: false }"
     @open-add-epreuve.window="open = true"
     x-show="open"
     class="fixed inset-0 bg-black/40 flex items-center justify-center">

    <div class="bg-white rounded-2xl p-8 w-full max-w-md">

        <div class="flex justify-between mb-1 ">
            <h2 class="font-semibold text-lg">Nouvelle épreuve</h2>
            <button class="cursor-pointer" @click="open = false">✕</button>
        </div>
        <p class="text-gray-600 mb-8">Créez une nouvelle épreuve pour organiser votre jury.</p>

        <form action="{{ route('jiri.create') }}">
            <label class="block mb-2">Nom de l'épreuve</label>
            <input type="text" placeholder="Ex. Projets Web S3" class="w-full border rounded-lg px-4 py-2 mb-5">

            <label class="block mb-2">Date</label>
            <input type="date" class="w-full border rounded-lg px-4 py-2 mb-5">

            <label class="block mb-2">Heure de début</label>
            <input type="time" class="w-full border rounded-lg px-4 py-2 mb-5">

            <label class="block mb-2">Heure de fin</label>
            <input type="time" class="w-full border rounded-lg px-4 py-2 mb-5">

            <!-- cambia bottone perche questo è di tipo submit !!!!! -->
            <button type="submit" class="w-full bg-blue-800 text-white rounded-lg py-3 cursor-pointer">
                Créer l'épreuve
            </button>
        </form>

    </div>
</div>
