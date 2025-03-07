<div>
    <div class="mb-4">
        <input type="file" wire:model="uploads" multiple class="mb-2">
        <div wire:loading wire:target="uploads">Uploading...</div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($media as $item)
            <div class="border rounded p-2 cursor-pointer hover:bg-gray-50"
                wire:click="$emit('mediaSelected', '{{ $item->path }}')">
                <img src="{{ asset('storage/' . str_replace('public/', '', $item->path)) }}"
                    class="w-full h-32 object-cover mb-2">
                <p class="text-sm truncate">{{ $item->name }}</p>
            </div>
        @endforeach
    </div>

    {{ $media->links() }}
</div>
