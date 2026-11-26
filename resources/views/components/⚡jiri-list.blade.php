<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {

    public string $search = '';

    #[Computed]
    public function jiris()
    {
        return auth()->user()->jiris()
            ->withCount(['evaluated', 'evaluators'])
            ->orderBy('date')
            ->get();
    }
};
?>

<div>
    <input type="search"
           wire:model.live="search"
           placeholder="Chercher une épreuve"
           class="bg-white rounded-lg px-4 py-3 w-72 text-sm mb-8">

    <div class="flex flex-col gap-4">
        @forelse ($this->jiris as $jiri)
            <x-jiri.card
                :title="$jiri->name"
                :students="$jiri->evaluated_count"
                :jury="$jiri->evaluators_count"
                status="À venir"
                wire:key="{{ $jiri->id }}"
            />
        @empty
            <p class="text-gray-500">Aucune épreuve trouvée.</p>
        @endforelse
    </div>
</div>


