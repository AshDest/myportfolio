<button wire:click="toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
    @if ($darkMode)
        🌞
    @else
        🌙
    @endif
</button>
