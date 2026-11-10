<x-layouts.admin>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="bg-blue-800 text-white rounded-lg w-full max-w-sm py-3 mt-3 hover:bg-blue-900 cursor-pointer" type="submit">Me déconnecter</button>
    </form>
</x-layouts.admin>
