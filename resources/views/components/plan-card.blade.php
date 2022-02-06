<div class="flex flex-col space-y-6 card">
    <div>
        <h1 class="text-center text-xl font-bold">{{ __('content.plan') }} {{ $name ?? 'x' }}</h1>
        <h2 class="text-center text-sm font-light">{{ $price }}</h2>
    </div>

    <p class="text-indigo-700">
        {{ $description ?? 'hm' }}
    </p>

    <a href="/plan/{{ $name }}" class="button">{{ __('content.more') }}</a>
</div>
