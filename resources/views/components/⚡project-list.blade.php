<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {

    public string $search = '';

    #[Computed]
    public function projects()
    {
        return auth()->user()->projects()
            ->withCount('jiris')
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('name')
            ->get();
    }
};
?>

<div>
    <input type="search"
           wire:model.live="search"
           placeholder="Chercher un projet"
           class="bg-white rounded-lg px-4 py-3 w-72 text-sm mb-8">

    <div class="flex flex-col gap-4">
        @forelse ($this->projects as $project)
            <div wire:key="{{ $project->id }}" class="bg-white rounded-xl p-5">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-semibold">{{ $project->name }}</h3>

                    @if ($project->repo_url)
                        <a href="{{ $project->repo_url }}" target="_blank"
                           class="text-sm text-blue-800 underline">
                            GitHub
                        </a>
                    @endif
                </div>

                <p class="text-gray-600 text-sm mb-3">{{ $project->description }}</p>

                <p class="text-xs text-gray-400">
                    Utilisé dans {{ $project->jiris_count }} épreuve(s)
                </p>
            </div>
        @empty
            <p class="text-gray-500">Aucun projet trouvé.</p>
        @endforelse
    </div>
</div>
