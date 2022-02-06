<x-guest-layout>
    <div class="max-w-md mx-auto bg-white rounded-xl text-indigo-900 p-4">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">{{__('content.e-mail')}}</label>

                <input id="email" class="my-input w-full" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">{{__('content.password')}}</label>

                <input id="password" class="my-input w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200/5" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('content.remember_me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="button w-full">
                    {{ __('content.log_in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
