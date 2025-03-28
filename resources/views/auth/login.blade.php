<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <a href="{{ url('auth/google') }}" class="btn btn-light btn-block"
                style="display: flex; align-items: center; justify-content: center; border: 1px solid #ddd; padding: 10px;">
                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Icon"
                    style="width: 20px; margin-right: 10px;">
                <span>Sign in with Google</span>
            </a>
            <br>
            <a href="{{ url('auth/facebook') }}" class="btn btn-light btn-block"
                style="display: flex; align-items: center; justify-content: center; border: 1px solid #ddd; padding: 10px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                    alt="Facebook Icon" style="width: 20px; margin-right: 10px;">
                <span>Sign in with Facebook</span>
            </a>



        </form>
    </x-authentication-card>
</x-guest-layout>
