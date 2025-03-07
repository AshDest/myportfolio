<div class="p-6 bg-white rounded-lg shadow">
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="space-y-4">
                <div>
                    <label>Project Title</label>
                    <input type="text" wire:model="title" class="w-full rounded border-gray-300">
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label>Short Caption</label>
                    <input type="text" wire:model="caption" class="w-full rounded border-gray-300">
                    @error('caption')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label>Technologies</label>
                    @livewire('shared.tags-input', ['tags' => $technologies], key('project-technologies'))
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <div>
                    <label>Project Image</label>
                    <input type="file" wire:model="image" class="w-full">
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label>Project URL</label>
                    <input type="url" wire:model="link" class="w-full rounded border-gray-300">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label>Start Date</label>
                        <input type="date" wire:model="start_date" class="w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label>End Date</label>
                        <input type="date" wire:model="end_date" class="w-full rounded border-gray-300">
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" wire:model="featured" id="featured" class="rounded border-gray-300">
                    <label for="featured" class="ml-2">Featured Project</label>
                </div>
            </div>
        </div>

        <!-- Details Editor -->
        <div class="mt-6">
            <label>Project Details</label>
            <textarea wire:model="details" rows="6" class="w-full rounded border-gray-300"></textarea>
            @error('details')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="mt-6 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Save Project
        </button>
    </form>
</div>
