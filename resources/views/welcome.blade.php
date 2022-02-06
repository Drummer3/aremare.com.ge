<x-guest-layout>
    @php $plans = $plans[app()->getLocale()]; @endphp
    @if (session('status'))
        <div x-data @delete="$el.remove()" class="absolute top-4 left-4 bg-green-500 p-4 rounded-xl border border-green-900 flex items-center">
            {{ __(session('status')) }}
            <button @click="$dispatch('delete')" class="ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif


    <p class="text-3xl sm:text-4xl text-center">
        {{ __('content.manage_your') }}
        <span id="word_switcher"></span>
        <br>
        {{ __('content.with_modern_tech') }}
    </p>

    <div class="card">
        <p class="text-xl text-center">
            {{ __('content.what_we_offer') }}
            <span class="font-bold">{{ __('content.human_resources') }}, {{ __('content.assets') }} {{ __('content.and_many_other') }}.</span>
            <br>
            {{ __('content.buzz_words') }}
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
        @foreach ($plans as $name => $plan)
            <x-plan-card :name="$name" :price="$plan['price']" :description="$plan['description']" />
        @endforeach
    </div>
    {{-- TYPED --}}
    <script>
        var options = {
            strings: ['{{ __('content.business') }}', '{{ __('content.enterprise') }}'],
            startDelay: 0,
            backDelay: 3000,
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
            showCursor: false,
            // fadeOut: true
        };
        var typed = new Typed('#word_switcher', options);
    </script>
</x-guest-layout>
