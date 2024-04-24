<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center justify-center min-h-screen ">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="relative bg-[#00B4FE] justify-center">
                <img src="/images/gambar.png" alt="img" class="w-[400px] mx-auto p-9 hidden md:block object-cover" />

                <!-- text on image  -->
                <div
                    class="absolute hidden bottom-10 right-5 p-9 backdrop-blur-sm rounded drop-shadow-lg md:block text-center">
                    <span class="text-white text-xl">get's things done with todo
                        <br />let's help you meet up your task
                    </span>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- right side -->
                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-4xl font-bold text-center">Login</span>
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="flex justify-between w-full py-4">
                        <div class="mr-24">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-md" role="button">Don't have an account?
                                Register</a>
                        @endif
                    </div>
                    <x-primary-button
                        class="w-full bg-[#00B4FE] text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
