<x-layouts.app>
    <div class="min-h-screen flex items-center justify-center">

        <div class="bg-white rounded-2xl p-8 w-full max-w-md">

            <p class="text-2xl font-bold text-blue-800 mb-6">JIRI</p>

            <h1 class="font-semibold text-lg mb-1">Réinitialiser mon mot de passe</h1>
            <p class="text-sm text-gray-600 mb-8">Entrez votre email, nous vous enverrons un lien de réinitialisation.</p>

            @session('status')
            <p class="bg-green-50 text-green-700 text-sm rounded-lg px-4 py-3 mb-6">{{ session('status') }}</p>
            @endsession

            <x-auth.form-container action="{{ route('password.email') }}" method="POST">
                @csrf

                <div>
                    <label class="block text-sm mb-2" for="email">Email</label>
                    <input class="w-full border border-gray-800 rounded-lg px-4 py-2"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                    >
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-800 text-white rounded-lg py-3 mt-2 hover:bg-blue-900 cursor-pointer">
                    Envoyer le lien
                </button>

                <p class="text-sm text-center">
                    <a href="{{ route('login') }}" class="text-blue-800 underline">Retour à la connexion</a>
                </p>
            </x-auth.form-container>

        </div>
    </div>
</x-layouts.app>
