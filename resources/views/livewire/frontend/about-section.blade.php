<x-layout>
    <section id="about" class="py-20 px-4 bg-white dark:bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">About Me</h2>

            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Photo -->
                <div class="w-full md:w-1/3 flex justify-center">
                    <div class="relative group">
                        <img src="{{ asset('storage/' . str_replace('public/', '', $about->photo)) }}"
                            class="w-64 h-64 rounded-full object-cover shadow-xl border-4 border-white dark:border-gray-800
                                transform transition duration-300 group-hover:rotate-3 group-hover:scale-105">
                    </div>
                </div>

                <!-- Details -->
                <div class="w-full md:w-2/3 space-y-6">
                    <h1 class="text-4xl font-bold text-gray-800 dark:text-white">{{ $about->name }}</h1>
                    <h2 class="text-2xl text-blue-600 dark:text-blue-400 font-medium">{{ $about->title }}</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-300 italic">{{ $about->bio }}</p>
                    <div class="prose max-w-none dark:prose-invert">
                        {!! $about->details !!}
                    </div>

                    <!-- Social Links -->
                    <div class="flex gap-4 mt-6">
                        @if (is_array($socialLinks))
                            @foreach ($socialLinks as $link)
                                <a href="{{ $link['url'] ?? '#' }}" target="_blank"
                                    class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <i
                                        class="fab fa-{{ strtolower($link['name'] ?? 'link') }} text-xl text-gray-600 dark:text-gray-300"></i>
                                </a>
                            @endforeach
                        @else
                            <!-- Handle the case where socialLinks is not a valid array -->
                            <p>No social links available.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
