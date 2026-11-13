<div class="flex">
    <aside class="w-56 h-screen sticky top-0 bg-white flex flex-col p-6">
        <div class="text-2xl font-bold text-blue-800 mb-10 px-3 flex flex-col justify-center items-center ">
            <x-icons.hat-logo/>
            JIRI
        </div>

        <nav class="flex flex-col gap-2">
            <a href="{{ route('homepage') }}">
                <div class="flex gap-3 px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100 ">
                    <x-icons.jiri-svg/>
                    Épreuves
                </div>
            </a>

            <a href="{{ route('contacts') }}">
                <div class="flex gap-3 px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100 ">
                    <x-icons.contacts-svg/>
                    Contacts
                </div>
            </a>

            <a href="{{ route('projects') }}">
                <div class="flex gap-3 px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100 ">
                    <x-icons.projects-svg/>
                    Projets
                </div>
            </a>

        </nav>

        <nav class="mt-auto flex flex-col gap-2">
            <a href="#">
                <div class="flex gap-3 px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100">
                    <x-icons.settings-svg/>
                    Settings
                </div>
            </a>
            <a href="{{ route('account') }}">
                <div class="flex gap-3 px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100 ">
                    <x-icons.account-svg/>
                    Account
                </div>
            </a>
        </nav>
    </aside>

</div>
