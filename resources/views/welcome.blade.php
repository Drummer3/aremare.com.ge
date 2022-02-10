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


    <p class="text-2xl sm:text-4xl text-center">
        {{ __('მართე შენი ბიზნესი ეფექტურად და მარტივად თანამედროვე ტექნოლოგიების გამოყენებით') }}
    </p>

    <div class="card">
        <p class="text-xl text-center font-bold">
            {{ __('ჩვენ გთავაზობთ ბიზნესის კომფორტულად და მარტივად სამართავად საჭირო ხელსაწყოებს') }}:
        </p>
        <ul class="list-disc list-inside mt-6 space-y-3 max-w-xl mx-auto">
            <li>{{ __('ადამიანური რესურსების ელექტრონული მართვა') }}</li>
            <li>{{ __('ელექტრონული დოკუმენტბრუნვა') }}</li>
            <li>{{ __('შესყიდვების პროცესების მართვა') }}</li>
            <li>{{ __('მარაგების კონტროლი და მართვა') }}</li>
        </ul>
    </div>

    <div class="card">
        <p class="text-xl text-center font-bold">
            {{ __('ჩვენი უპირატესობებია') }}:
        </p>
        <ul class="list-disc list-inside mt-6 space-y-3 max-w-xl mx-auto">
            <li>{{ __('მარტივი ინტერფეისი') }}</li>
            <li>{{ __('უმოკლეს ვადებში დანერგვა') }}</li>
            <li>{{ __('მომხმარებელზე მორგებული პირობები და  ფასები') }}</li>
        </ul>
    </div>


    <div class="card">
        <p class="text-xl text-center font-bold">
            {{ __('პროგრამა "არემარე" გათვლილია ნებისმიერი ტიპის და სიდიდის ბიზნესის მართვაზე როგორც 10 კაცამდე, ასევე 100, 150 და მეტი ადამიანური რესურსის შემთხვევაში') }}
        </p>
    </div>

    <div class="card">
        <p class="text-xl text-center font-bold">
            {{ __('სამომავლო გეგმები') }}:
        </p>
        <ul class="list-disc list-inside mt-6 space-y-3 max-w-xl mx-auto">
            <li>{{ __('ბუღალტრული და ფინანსური აღრიცხვის მოდულების შექმნა') }}</li>
            <li>{{ __('ბიზნესის მართვის სრული ERP პროგრამის შექმნა') }}</li>
        </ul>
    </div>

    {{-- <!-- Plans -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
        @foreach ($plans as $name => $plan)
            <x-plan-card :name="$name" :price="$plan['price']" :description="$plan['description']" />
        @endforeach
    </div> --}}

    {{-- TYPED --}}
    <script>
        var options = {
            strings: ['{{ __('content.business') }}', '{{ __('content.enterprise') }}'],
            startDelay: 0,
            backDelay: 5000,
            typeSpeed: 75,
            backSpeed: 75,
            loop: true,
            showCursor: false,
            // fadeOut: true
        };
        var typed = new Typed('#word_switcher', options);
    </script>
</x-guest-layout>
