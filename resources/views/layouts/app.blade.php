<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <title>{{ config('app.name', 'Aremare') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</head>

<body class="bg-indigo-600 font-sans text-indigo-50 space-y-20">
    <x-header />

    <main class="xl:max-w-7xl xl:mx-auto mx-6 space-y-20">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
