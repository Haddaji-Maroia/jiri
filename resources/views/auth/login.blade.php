<x-layouts.app>
    <div class="min-h-screen flex items-center justify-center">

        <div class="bg-white rounded-2xl p-8 w-full max-w-md">

            <p class="text-2xl font-bold text-blue-800 mb-6">JIRI</p>

            <h1 class="font-semibold text-lg mb-1">Se connecter</h1>
            <p class="text-sm text-gray-600 mb-8">Connectez-vous pour accéder à vos épreuves.</p>

            <x-auth.form-container action="{{ route('login.store') }}" method="POST">
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

                <div>
                    <label class="block text-sm mb-2" for="password">Mot de passe</label>
                    <input class="w-full border border-gray-800 rounded-lg px-4 py-2"
                           type="password"
                           name="password"
                           id="password">
                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="remember" id="remember">
                        <label class="text-sm" for="remember">Se souvenir de moi</label>
                    </div>
                    <div>
                        <p><a class="text-sm underline"  href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a></p>
                    </div>
                </div>


                <button type="submit"
                        class="w-full bg-blue-800 text-white rounded-lg py-3 mt-2 hover:bg-blue-900 cursor-pointer">
                    Se connecter
                </button>

                <p class="text-sm text-center">
                    Pas encore de compte ?
                    <a href="{{ route('register') }}" class="text-blue-800 underline">Créer un compte</a>
                </p>
            </x-auth.form-container>


        </div>
    </div>
</x-layouts.app>
