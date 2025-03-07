<x-layout>
    <section id="skills" class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Technical Skills</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($skills as $skill)
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-lg font-semibold dark:text-white">{{ $skill->name }}</span>
                            <span class="text-{{ $skill->color }}-600 dark:text-{{ $skill->color }}-400">
                                {{ $skill->proficiency }}%
                            </span>
                        </div>
                        <div class="h-2 bg-gray-200 rounded-full">
                            <div class="h-full bg-{{ $skill->color }}-500 rounded-full transition-all duration-500"
                                style="width: {{ $skill->proficiency }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
