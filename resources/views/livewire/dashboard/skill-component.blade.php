<div class="p-6 bg-white rounded-lg shadow">
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Add New Skill</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <input type="text" wire:model="name" placeholder="Skill Name" class="rounded border-gray-300">
            <input type="number" wire:model="proficiency" min="1" max="100" placeholder="Proficiency %"
                class="rounded border-gray-300">
            <select wire:model="color" class="rounded border-gray-300">
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
            </select>
        </div>
        <button wire:click="addSkill" class="mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Add Skill
        </button>
    </div>

    <div wire:sortable="reorder" class="space-y-4">
        @foreach ($skills as $skill)
            <div wire:sortable.item="{{ $skill->id }}" wire:key="skill-{{ $skill->id }}"
                class="flex items-center justify-between p-4 bg-gray-50 rounded">
                <div class="flex items-center gap-4">
                    <button wire:sortable.handle class="cursor-move">↕</button>
                    <span class="font-medium">{{ $skill->name }}</span>
                    <span class="text-sm text-gray-600">({{ $skill->proficiency }}%)</span>
                    <span class="w-4 h-4 rounded-full bg-{{ $skill->color }}-500"></span>
                </div>
                <button wire:click="deleteSkill({{ $skill->id }})" class="text-red-500 hover:text-red-700">
                    Delete
                </button>
            </div>
        @endforeach
    </div>
</div>
