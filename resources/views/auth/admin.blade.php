<x-app-layout>
    <div class="relative card space-y-4">
        
        {{-- Logout --}}
        <form action="/logout" method="post" class="absolute top-1 right-1">
            @csrf
            <button class="button" type="submit">{{ __('content.logout') }}</button>
        </form>

        {{-- Orders --}}
        <p class="text-center font-bold text-3xl">{{ __('content.orders') }}</p>
        @foreach ($orders as $order)
            <div class="flex items-center">
                <div class="text-center px-2 py-2 rounded-tl-xl rounded-bl-xl bg-indigo-300 border border-indigo-900">{{ $order->id }}</div>
                <div class="flex-1 text-center py-2 bg-indigo-300 border border-indigo-900">{{ $order->name }}</div>
                <div class="flex-1 text-center py-2 bg-indigo-300 border border-indigo-900">{{ $order->number }}</div>
                <div class="flex-1 text-center py-2 rounded-tr-xl rounded-br-xl bg-indigo-300 border border-indigo-900">{{ $order->created_at }}</div>
            </div>
        @endforeach
    </div>
</x-app-layout>
