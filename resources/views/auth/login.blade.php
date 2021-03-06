<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        {{-- Login with Facebook --}}
        <div class="flex items-center justify-end mt-4">
            <a class="btn rounded" href="{{ url('auth/facebook') }}"
               style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                Login with Facebook
            </a>
        </div>
        <p class="text-center p-3"> or </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                    <a class="inline-flex items-center px-4 py-2 bg-white border border-blue-400 rounded-md font-semibold text-xs text-blue-400 uppercase tracking-widest hover:bg-gray-700  focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
