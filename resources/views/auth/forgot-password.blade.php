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
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
