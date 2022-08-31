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

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
