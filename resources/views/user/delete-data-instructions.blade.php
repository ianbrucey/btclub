<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                If you would like to delete your data from our servers, just press the button below:
            </div>
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <form method="POST" action="/facebook-delete-data">
                    @csrf
                    <button class="rounded p-5 text-white bg-red-500" type="submit"> Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
