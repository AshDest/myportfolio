<div class="p-6 bg-white rounded-lg shadow">
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Photo Upload -->
            <div class="space-y-4">
                <label class="block text-sm font-medium text-gray-700">Profile Photo</label>
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" class="w-48 h-48 rounded-full object-cover">
                @else
                    <img src="{{ asset('storage/' . str_replace('public/', '', $about->photo)) }}"
                        class="w-48 h-48 rounded-full object-cover border-4 border-gray-200">
                @endif
                <input type="file" wire:model="photo" class="mt-2">
                @error('photo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Text Fields -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" wire:model="name" class="mt-1 block w-full rounded border-gray-300">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Professional Title</label>
                    <input type="text" wire:model="title" class="mt-1 block w-full rounded border-gray-300">
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Short Bio</label>
                    <textarea wire:model="bio" rows="3" class="mt-1 block w-full rounded border-gray-300"></textarea>
                    @error('bio')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Details Editor -->
        <div class="mt-6">
            <label class="block text-sm font-medium text-gray-700">Detailed Description</label>
            <textarea wire:model="details" rows="6" class="mt-1 block w-full rounded border-gray-300"></textarea>
            @error('details')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Social Links -->
        <div class="mt-6 space-y-4">
            <h3 class="text-lg font-medium">Social Links</h3>
            @foreach ($social_links as $index => $link)
                <div class="flex gap-2">
                    <input type="text" wire:model="social_links.{{ $index }}.name" placeholder="Platform"
                        class="w-1/3 rounded border-gray-300">
                    <input type="url" wire:model="social_links.{{ $index }}.url" placeholder="URL"
                        class="flex-1 rounded border-gray-300">
                    <button type="button" wire:click="removeSocialLink({{ $index }})"
                        class="text-red-500 hover:text-red-700">
                        Remove
                    </button>
                </div>
            @endforeach
            <button type="button" wire:click="addSocialLink" class="text-blue-600 hover:text-blue-800">
                + Add Social Link
            </button>
        </div>

        <button type="submit" class="mt-6 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Save Changes
        </button>
    </form>
</div>
