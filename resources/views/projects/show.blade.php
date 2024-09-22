<x-guest-layout>

    <section class="w-full py-32">
        <div class="container mx-auto">
            <div class="relative w-full overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out" id="carousel-inner">
                    @foreach($images as $image)
                    <div class="min-w-full">
                        <img src="{{ $image->getFullUrl()}}" alt="Image 1" class="w-full h-[400px] object-cover rounded-lg">
                    </div>
                    @endforeach
                </div>

                <div class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full cursor-pointer z-10" onclick="prevSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>

                <div class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full cursor-pointer z-10" onclick="nextSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    {{-- млади за активно општество section --}}
    <div class="container mx-auto p-20 text-center">
        <h1 class="uppercase font-bold text-5xl">{{ $project->title }}</h1>
        <p class="py-20 w-1/2 mx-auto p-5 space-y-1">{!! $project->description !!}</p>
    </div>

    {{-- goal of the project section --}}
    <div class="container mx-auto">
        <div class="container h-80 border-2 rounded-xl flex justify-between border-black">
            <div class="flex w-1/4 rounded-xl bg-black">
                <p class="text-white font-bold text-5xl text-left p-5">Цел на проектот</p>
            </div>
            <div class="flex w-2/3 mx-auto mt-10">
                <p>{{ $project->project_goal }}</p>
            </div>
        </div>
    </div>

    {{-- Section with content and image --}}
    <div class="container gap-4 flex items-center mx-auto py-20">
        <div class="h-80 border-2 rounded-xl border-black p-20">
            <h3 class="font-bold text-5xl mb-5">За кого е наменет овој проект?</h3>
            <p class="mt-5">{{ $project->for_whom }}</p>
        </div>

        <div class="container:lg w-1/3 flex justify-center items-center">
            <img src="{{ $images[0]->getFullUrl()}}" alt="Image description" class="max-h-80">
        </div>
    </div>

    {{-- progress bar section --}}
    <div class="container w-full mx-auto gap-4 mt-8 p-10 px-10 flex justify-center items-center content-center">
        <div class="relative w-full h-12 border-3 border-black rounded-full">
            <div class="h-full bg-[#FBB13C] rounded-full" style="width: {{ $progress }}%"></div>
            <span class="absolute right-2 top-1/2 transform -translate-y-1/2 text-black font-bold">{{ $progress }}%</span>
        </div>
    </div>

    {{-- Support and donation buttons --}}
    <div class="container mx-auto mb-24">
        <div class="mt-4 flex justify-end space-x-4 items-center">
            <p class="text-lg font-bold">Заинтересиран/а си?</p>
            <button class="mt-2 px-4 py-2 bg-black text-white font-bold rounded-xl">
                <a href="#">Пријави се!</a>
            </button>
        </div>

        <div class="mt-4 flex justify-end items-center space-x-4">
            <p class="text-lg font-bold">Сакаш да не поддржиш?</p>
            <button class="mt-2 px-4 py-2 bg-red-500 text-white font-bold rounded-xl">
                <a href="#">Донирај</a>
            </button>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('#carousel-inner > div');
        const totalSlides = slides.length;

        function updateCarousel() {
            const carouselInner = document.getElementById('carousel-inner');
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }
    </script>
</x-guest-layout>

