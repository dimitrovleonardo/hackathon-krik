<x-guest-layout>
    <div class="mx-auto w-4/5 py-16 font-montserrat">
        <h1 class="text-4xl font-extrabold uppercase mb-12">Топ Новости</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            @if ($topProjects->isNotEmpty())
                @foreach ($topProjects as $project)
                    <div class="lg:col-span-2 rounded-xl">
                        <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}" class="w-full h-[300px] object-cover rounded-3xl mb-4">
                        <span class="inline-block border-2 border-black rounded-full px-4 py-1 text-sm font-semibold mb-4">
                            {{ $project->starting_at->format('d.m.Y') }}
                        </span>
                        <h2 class="text-4xl font-bold mb-4">{{ $project->title }}</h2>
                        <div class="text-gray-600 mb-6">
                            {!! Str::limit($project->description, 100) !!}
                        </div>
                        <a href="{{ route('project.show', $project->id) }}" class="bg-black text-white px-6 py-3 rounded-full">Види Повеќе</a>
                    </div>
                @endforeach
            @else
                <p>No top projects available for this month.</p>
            @endif
        </div>
    </div>

    <hr class="my-6 border-t-2 border-gray-900 w-full"/>

    <div class="mx-auto w-4/5 py-16 font-montserrat">
        <h1 class="text-4xl font-extrabold uppercase mb-12">Останати Новости</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @if ($otherProjects->isNotEmpty())
                @foreach ($otherProjects as $project)
                    <div class="p-6 rounded-xl">
                        <span class="inline-block border-2 border-black rounded-full px-4 py-1 text-sm font-semibold mb-4">
                            {{ $project->starting_at->format('d.m.Y') }}
                        </span>
                        <h2 class="text-xl font-bold mb-4">{{ $project->title }}</h2>
                        <p class="text-gray-600 mb-6">
                            {!! Str::limit($project->description, 100) !!}
                        </p>
                        <a href="{{ route('project.show', $project->id) }}" class="bg-black text-white px-6 py-3 rounded-full">Види Повеќе</a>
                    </div>
                @endforeach
            @else
                <p>No other projects available for this month.</p>
            @endif
        </div>
    </div>

    <hr class="my-6 border-t-2 border-gray-900 w-full"/>

    <div class="mx-auto w-4/5 pb-24 font-montserrat">
        {{ $projects->links() }}
    </div>

</x-guest-layout>
