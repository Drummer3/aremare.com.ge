<x-guest-layout>
    <div class="card" @if ($errors->any())
        x-data="{ order: true }">
    @else
        x-data="{ order: false }">
        @endif

        <div class="mb-6 flex flex-col justify-center items-center relative" x-data="{info: false}">
            <span class="text-4xl">Plan {{ $plan['name'] }}</span>
            <span class="text-sm flex items-center justify-center space-x-2">
                <span>{{ $plan['price'] }}</span>
                <button class="mt-2" @click="info = true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-bounce" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
            <div class="p-2 absolute max-w-xs top-full card text-center" x-show="info" @click.outside="info = false"><p>{{$plan['detailed_description']}}</p><p class="font-bold">{{$plan['startup']}}</p></div>
        </div>

        <p class="text-lg text-center mb-6">{{ $plan['description'] }}</p>
        <ul class="list-disc list-inside mx-auto max-w-xl mb-6">
            @foreach ($plan['list'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>




        {{-- ordering --}}
        <button @click="order = true" class="button w-full">{{ __('content.order') }}</button>
        <div x-show="order" class="absolute inset-0 flex justify-center items-center backdrop-blur-sm">
            <div style="margin-left: 4rem; margin-right: 4rem;" class="ml-40 card max-w-md" @click.outside="order = false">
                <p class="text-2xl font-bold text-center">{{ __('content.please_tell_us_your_number') }}</p>
                <p class="text-center">{{ __('content.our_representative_will_contact_you_as_soon_as_possible') }}</p>
                <form action="" method="POST" class="mt-4 space-y-4">
                    @csrf


                    <label class="block">
                        @foreach ($errors->get('orderer_name') as $error)
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        @endforeach
                        <input class="w-full my-input" type="text" name="orderer_name" placeholder="{{ __('content.your_name') }}">
                    </label>

                    <label class="block">
                        @foreach ($errors->get('phone_number') as $error)
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        @endforeach
                        <input class="w-full my-input" type="number" name="phone_number" placeholder="{{ __('content.your_phone_number') }}" value="{{ old('phone_number') }}">
                    </label>
                    <button type="submit" class="button w-full mt-4">{{ __('content.ready') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
