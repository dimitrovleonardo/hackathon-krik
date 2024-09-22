<x-guest-layout>
    <div class="mx-auto w-4/5 mt-10">
        <!-- Projects Header -->
        <h1 class="text-4xl font-extrabold text-center mb-10">Проекти</h1>

        <!-- Current Projects Section -->
        <h2 class="text-3xl font-bold mb-6">Тековни</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach($currentProjects as $index => $project)
                @if($index == 0)
                    <div class="col-span-2 bg-yellow-400 rounded-lg relative">
                        <a href="{{ route('project.show', $project->id) }}">
                            <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}"
                                 class="rounded-lg w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 text-white font-extrabold text-2xl">{{ $project->title }}</div>
                        </a>
                    </div>
                @elseif($index == 1)
                    <div class="col-span-1 grid grid-rows-2 gap-4">
                        <a href="{{ route('project.show', $project->id) }}">
                            <div class="bg-purple-300 rounded-lg relative">
                                <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}"
                                     class="rounded-lg w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 text-white font-extrabold text-lg">{{ $project->title }}</div>
                            </div>
                        </a>
                        @if($currentProjects->count() > 2)
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('project.show', $currentProjects[2]->id) }}">
                                    <div class="bg-black rounded-lg relative">
                                        <img src="{{ $currentProjects[2]->getFirstMediaUrl('project_images') }}" alt="{{ $currentProjects[2]->title }}"
                                             class="rounded-lg w-full h-full object-cover">
                                        <div class="absolute bottom-4 left-4 text-white font-extrabold text-sm">{{ $currentProjects[2]->title }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('project.show', $currentProjects[3]->id) }}">
                                    <div class="bg-yellow-400 rounded-lg relative">
                                        <img src="{{ $currentProjects[3]->getFirstMediaUrl('project_images') }}" alt="{{ $currentProjects[3]->title }}"
                                             class="rounded-lg w-full h-full object-cover">
                                        <div class="absolute bottom-4 left-4 text-white font-extrabold text-sm">{{ $currentProjects[3]->title }}</div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $currentProjects->links() }}
        </div>

        <!-- Completed Projects Section -->
        <h2 class="text-3xl font-bold mt-12 mb-6">Завршени</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach($completedProjects as $index => $project)
                @if($index == 0)
                    <div class="col-span-2 bg-yellow-400 rounded-lg relative">
                        <a href="{{ route('project.show', $project->id) }}">
                            <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}"
                                 class="rounded-lg w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 text-white font-extrabold text-2xl">{{ $project->title }}</div>
                        </a>
                    </div>
                @elseif($index == 1)
                    <div class="col-span-1 grid grid-rows-2 gap-4">
                        <a href="{{ route('project.show', $project->id) }}">
                            <div class="bg-purple-300 rounded-lg relative">
                                <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}"
                                     class="rounded-lg w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 text-white font-extrabold text-lg">{{ $project->title }}</div>
                            </div>
                        </a>
                        @if($completedProjects->count() > 2)
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('project.show', $completedProjects[2]->id) }}">
                                    <div class="bg-black rounded-lg relative">
                                        <img src="{{ $completedProjects[2]->getFirstMediaUrl('project_images') }}" alt="{{ $completedProjects[2]->title }}"
                                             class="rounded-lg w-full h-full object-cover">
                                        <div class="absolute bottom-4 left-4 text-white font-extrabold text-sm">{{ $completedProjects[2]->title }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('project.show', $completedProjects[3]->id) }}">
                                    <div class="bg-yellow-400 rounded-lg relative">
                                        <img src="{{ $completedProjects[3]->getFirstMediaUrl('project_images') }}" alt="{{ $completedProjects[3]->title }}"
                                             class="rounded-lg w-full h-full object-cover">
                                        <div class="absolute bottom-4 left-4 text-white font-extrabold text-sm">{{ $completedProjects[3]->title }}</div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8 mb-28">
            {{ $completedProjects->links() }}
        </div>
    </div>
</x-guest-layout>
