@props(['title', 'students', 'jury', 'status'])

@php
    $active = $status === 'En cours';
@endphp

<a href="{{ route('jiri') }}">
    <div @class([
    'bg-white rounded-xl px-7 py-5 flex justify-between items-start cursor-pointer ',
    'border border-blue-800' => $active,
])>
        <div>
            <h3 class="font-semibold mb-3">{{ $title }}</h3>

            <div class="flex gap-10 text-gray-500 ">
                <span>{{ $students }} {{ __('entities.evaluated.students') }}</span>
                <span>{{ $jury }} {{ __('entities.evaluators.jury-members') }}</span>
            </div>
        </div>

        <span @class([
        'px-4 py-1 rounded-lg border border-blue-800',
        'bg-blue-800 text-white' => $active,
        'text-blue-800' => ! $active,
    ])>
        {{ $status }}
    </span>
    </div>
</a>



