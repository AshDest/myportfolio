<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <div class="min-h-screen">
        {{ $slot }}
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
