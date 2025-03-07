<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: @json(session('darkMode', false)) }" :class="{ 'dark': darkMode }">

<head>
    <!-- Add these scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>

    <!-- Add dark mode classes -->
    <style>
        .dark body {
            @apply bg-gray-900 text-gray-100;
        }
    </style>
</head>

<body>
    @livewire('shared.dark-mode-toggle')

    <!-- Add this script -->
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('darkModeToggled', (darkMode) => {
                Alpine.data('darkMode', darkMode);
            });
        });
    </script>
</body>

</html>
