<x-layout>
    <section id="projects" class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Featured Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="{{ asset('storage/' . str_replace('public/', '', $project->image)) }}"
                            class="w-full h-48 object-cover" alt="{{ $project->title }}">

                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 dark:text-white">{{ $project->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 italic mb-4">{{ $project->caption }}</p>

                            <div class="prose max-w-none mb-4 dark:prose-invert">
                                {!! $project->details !!}
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project->technologies as $tech)
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-100 rounded-full text-sm">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank"
                                    class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:underline">
                                    View Project →
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
