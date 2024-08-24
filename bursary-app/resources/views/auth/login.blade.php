<x-guest-layout>
    <!-- Centered Container -->
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
        <!-- Card Container -->
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden grid grid-cols-1 md:grid-cols-2 max-w-4xl w-full">
            
            <!-- Image Card -->
            <div class="hidden md:block bg-blue-900 text-white p-8">
                <div class="flex flex-col justify-center items-center h-full">
                    <img src="{{ asset('images/your-image-1.png') }}" alt="Image 1" class="h-48 mb-4">
                    <img src="{{ asset('images/your-image-2.png') }}" alt="Image 2" class="h-48">
                </div>
            </div>

            <!-- Login Card -->
            <div class="p-8 w-full">
                <!-- Logo -->
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/your-logo.png') }}" alt="Logo" class="h-16">
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Forgot Password and Login Button -->
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
