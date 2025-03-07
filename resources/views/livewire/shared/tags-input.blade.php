<div class="space-y-2">
    <div class="flex gap-2">
        <input type="text" wire:model="newTag" wire:keydown.enter.prevent="addTag" placeholder="Add tag..."
            class="flex-1 p-2 border rounded">
        <button type="button" wire:click="addTag" class="px-4 py-2 bg-blue-500 text-white rounded">
            Add
        </button>
    </div>

    <div class="flex flex-wrap gap-2">
        @foreach ($tags as $index => $tag)
            <span class="px-3 py-1 bg-gray-200 rounded-full flex items-center">
                {{ $tag }}
                <button wire:click="removeTag({{ $index }})" class="ml-2 text-gray-600 hover:text-gray-800">
                    &times;
                </button>
            </span>
        @endforeach
    </div>
</div>
