<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="login-card-content">
            <x-input-label for="email" :value="__('Email')" class="email-login"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 error-form" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" class="pass-login"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 error-form" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="checkbox-login rounded" name="remember">
                <span class="ml-2 text-sm text-white">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="mt-4">
            <a href="{{route('register')}}" class="registration-login">¿Aún no tienes cuenta? ¡Regístrate!</a>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-form.button class="login-button">
                {{ __('Acceder') }}
            </x-form.button>
        </div>
    </form>
</x-guest-layout>
