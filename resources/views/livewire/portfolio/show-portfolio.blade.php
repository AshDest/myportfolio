<!-- resources/views/livewire/portfolio/show-portfolio.blade.php -->
<div class="container mx-auto p-4">
    <!-- About Section -->
    <section class="mb-12">
        <h1 class="text-4xl font-bold mb-4">About Me</h1>
        <div class="prose max-w-none">
            {!! $about->content !!}
        </div>
        <img src="{{ asset('storage/' . $about->image) }}" class="w-64 h-64 rounded-full">
    </section>

    <!-- Skills Section -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4">Skills</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($skills as $skill)
                <div class="bg-gray-100 p-4 rounded">
                    <h3 class="font-bold">{{ $skill->name }}</h3>
                    <div class="h-2 bg-gray-300 rounded">
                        <div class="h-full bg-blue-500 rounded" style="width: {{ $skill->proficiency }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4">Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="border rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                        <p class="text-gray-600">{{ $project->description }}</p>
                        <a href="{{ $project->link }}" class="text-blue-500 hover:underline">View Project</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
