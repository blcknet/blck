<x-auth-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="shrink-0 mr-5">
                <!-- Logo -->
                <a class="block text-sm bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-teal-100"
                    href="{{ route('home.index') }}" aria-label="Cruip">
                    <img id="logo" class="h-24 w-24" src="{{ asset('images/logo-blanco.png') }}"
                        alt="Logo blcknet.com">
                </a>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
