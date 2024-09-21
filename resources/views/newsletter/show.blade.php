<x-guest-layout>
    <section>
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full" src="{{asset('images/newsletter_2.png')}}" alt="dashboard image">
            <div class="md:mt-0">
                <span
                    class="py-1 px-10 me-2 mb-2 text-lg font-medium text-gray-900 focus:outline-none rounded-full border-2 border-black hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">23.03.2024</span>
                <h2 class="mb-4 mt-4 text-5xl tracking-tight font-extrabold text-gray-900">Let's create more tools and
                    ideas that brings us together.</h2>
                <p class="mb-6 font-light text-black md:text-lg">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Accusamus amet assumenda, dolores ea esse eveniet ex excepturi harum
                    illo inventore ipsum, labore laboriosam magni modi molestias necessitatibus nemo numquam officia
                    pariatur perspiciatis praesentium quibusdam quis reiciendis rerum vel voluptates voluptatibus.
                    Accusamus culpa eaque eligendi ipsa, nobis quaerat soluta. A assumenda distinctio ea odio quam
                    repudiandae, rerum. Alias aspernatur, at consequatur dignissimos doloribus id ipsam minus molestias
                    natus numquam, possimus repellat sit, ullam unde voluptatum. Ab, adipisci aspernatur assumenda,
                </p>
            </div>
        </div>
    </section>
    <section>
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">

            <div class="md:mt-0">
                <p class="mb-6 font-light text-black md:text-lg">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Accusamus amet assumenda, dolores ea esse eveniet ex excepturi harum
                    illo inventore ipsum, labore laboriosam magni modi molestias necessitatibus nemo numquam officia
                    pariatur perspiciatis praesentium quibusdam quis reiciendis rerum vel voluptates voluptatibus.
                    Accusamus culpa eaque eligendi ipsa, nobis quaerat soluta. A assumenda distinctio ea odio quam
                    repudiandae, rerum. Alias aspernatur, at consequatur dignissimos doloribus id ipsam minus molestias
                    natus numquam, possimus repellat sit, ullam unde voluptatum. Ab, adipisci aspernatur assumenda,
                    pariatur perspiciatis praesentium quibusdam quis reiciendis rerum vel voluptates voluptatibus.
                    Accusamus culpa eaque eligendi ipsa, nobis quaerat soluta. A assumenda distinctio ea odio quam
                    repudiandae, rerum. Alias aspernatur, at consequatur dignissimos doloribus id ipsam minus molestias
                    natus numquam, possimus repellat sit, ullam unde voluptatum. Ab, adipisci aspernatur assumenda,
                </p>
            </div>
            <img class="w-full" src="{{asset('images/newsletter_2.png')}}" alt="dashboard image">
        </div>
    </section>

    <section class="w-full py-8 pb-40">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold pb-16">Галерија Со Активности:</h2>

            <div class="relative w-full overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out" id="carousel-inner">
                    <div class="min-w-full">
                        <img src="{{ asset('images/image 26.png') }}" alt="Image 1" class="w-full h-[400px] object-cover rounded-lg">
                    </div>
                    <div class="min-w-full">
                        <img src="{{ asset('images/image_22.png') }}" alt="Image 2" class="w-full h-[400px] object-cover rounded-lg">
                    </div>
                    <div class="min-w-full">
                        <img src="{{ asset('images/Homepage/herosection_1920x1120px.jpg') }}" alt="Image 3" class="w-full h-[400px] object-cover rounded-lg">
                    </div>
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
