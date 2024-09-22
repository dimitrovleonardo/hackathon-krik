<x-app-layout>
    <div class="container mx-auto md:py-20 md:px-40 overflow-hidden">
        <!-- Team Member Details Section -->
        <div class="flex flex-col md:flex-row items-center p-8">
            <!-- Team Member Image on the Left -->
            <div class="w-full md:w-1/3 flex justify-center mb-8 md:mb-0">
                <img src="{{ $teamMember->image }}" alt="Игор Димовски"
                     class="rounded-3xl shadow-lg w-2/3 md:w-full">
            </div>

            <!-- Team Member Info on the Right -->
            <div class="w-full md:w-2/3 px-5">
                <h1 class="text-black font-heading text-3xl mb-4 font-bold">{{ $teamMember->name }}</h1>
                <p class="text-black text-base leading-relaxed mb-6">
                    {{ $teamMember->about }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
