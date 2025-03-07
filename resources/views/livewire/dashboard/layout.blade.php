<!-- resources/views/livewire/dashboard/layout.blade.php -->
<div class="container mx-auto p-4">
    <nav class="flex space-x-4 mb-8">
        <a href="{{ route('dashboard.about') }}" class="px-4 py-2 bg-gray-200">About</a>
        <a href="{{ route('dashboard.skills') }}" class="px-4 py-2 bg-gray-200">Skills</a>
        <a href="{{ route('dashboard.projects') }}" class="px-4 py-2 bg-gray-200">Projects</a>
    </nav>

    {{ $slot }}
</div>
