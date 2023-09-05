<x-guest-layout>
    <div class="email-login">
        {{ __('¿Has olvidado tu contraseña? No te preocupes. Introduce tu correo electrónico y te enviaremos un email con un link para que puedas resetearla.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="email-login" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="error-form" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-form.button class="login-button">
                {{ __('Enviar correo') }}
            </x-form.button>
        </div>
    </form>
</x-guest-layout>
