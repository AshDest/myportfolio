<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body class="antialiased">
    <!-- Content -->
    @livewire('frontend.about-section')
    @livewire('frontend.skills-section')
    @livewire('frontend.projects-section')

    @livewireScripts
</body>

</html>
