<x-guest-layout>
    <div class="relative text-center">
        <section
            class="bg-[url('http://127.0.0.1:8000/images/Homepage/herosection_1920x1120px.jpg')] bg-cover max-h-screen pt-[200px] h-screen">
            <div class="absolute top-[110px] transform -translate-x-1/2 left-1/2">
                <h1 class="text-3xl font-extrabold">ПРОМЕНАТА ДОАЃА</h1>
                <h1 class="text-3xl font-extrabold">ОД МЛАДИТЕ</h1>
                <div class="mt-[120px]">
                    <h1 class="text-2xl font-bold">Кои сме ние?</h1>
                </div>
                <div class="w-[480px] text-center">
                    <p>
                        Центарот за младински активизам Крик е невладина, непрофитна организација основана од млади
                        луѓе,
                        предводена од млади луѓе и работи за и со млади луѓе.
                    </p>
                </div>
                <div class="mt-[40px]">
                    <a href="{{ url('/about-us') }}">
                        <button
                            type="button"
                            class="w-80 bg-[#B8AFDA] font-extrabold rounded-3xl text-xl px-[30px] py-[16px] text-center dark:border-gray-900 dark:text-black">
                            Повеќе за Нас
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <div class="flex mx-auto w-4/5 bg-black rounded-2xl relative top-[-160px]">
        <div class="w-1/2 px-5">
            <div class="mt-[68px]">
                <h1 class="text-2xl font-extrabold text-[#f8ac2e] pb-[40px]">НАСКОРО</h1>
                <h1 class="text-white text-l pb-[40px]">Нижеме заедно</h1>
                <p class="text-white mt-[24px] pb-[80px]">
                    Проектот „Еднакви можности за девојчињата и младите жени во Северна Македонија” го спроведуваат
                    Националниот младински совет на Македонија и Stella Network, со финансиска поддршка од страна на
                    Британската амбасада во Скопје
                </p>
                <div class="flex flex-row gap-[15px] mt-[20px]">
                    <button
                        type="button"
                        class="mr-[24px] bg-[#F8AC2E] font-bold rounded-2xl text-sm px-[60px] py-[10px] text-center dark:border-gray-900 dark:text-dark">
                        Види Повеќе
                    </button>
                    <button
                        type="button"
                        class="mr-[24px] bg-[#B8AFDA] font-bold rounded-2xl text-sm px-[60px] py-[10px] text-center dark:border-gray-900 dark:text-dark">
                        Пријави се!
                    </button>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('images/Homepage/homepage_nastan_750x655px.jpg') }}" alt="">
        </div>
    </div>


    <!-- Statistics Section -->
    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">

    <!-- Statistics Section -->
    <div class="flex mx-auto my-8 w-3/4">
        <div class="w-4/12 text-center">
            <h2 class="text-5xl font-extrabold text-red-500">320+</h2>
            <h2 class="text-xl text-red-500">Проекти</h2>
        </div>
        <div class="w-4/12 text-center">
            <h2 class="text-5xl font-extrabold text-red-500">580+</h2>
            <h2 class="text-xl text-red-500">Волонтери</h2>
        </div>
        <div class="w-4/12 text-center">
            <h2 class="text-5xl font-extrabold text-red-500">25+</h2>
            <h2 class="text-xl text-red-500">Партнери</h2>
        </div>
    </div>

    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">

    <div class="mx-auto w-4/5 flex my-5">
        <div class="w-4/6 mr-[10px]">
            <img class="rounded-2xl" src="{{ asset('images/image_22.png') }}" alt="">
        </div>
        <div class="w-2/6 bg-black rounded-2xl px-5">
            <h1 class="text-2xl text-white font-bold mt-[48px]">Стани</h1>
            <h2 class="text-white text-xl font-bold">Волонтер</h2>
            <p class="text-white mt-[72px]">
                Сакаш да работиш со млади лица? Оваа можност е токму за тебе.
            </p>
            <div class="mt-[84px]">
                <a href="{{ url('/volunteers-app') }}">
                    <button
                        type="button"
                        class="hover:text-white border border-gray-800 font-medium rounded-2xl text-sm px-[40px] py-[10px] text-center me-2 mb-2 dark:border-white dark:text-white">
                        Придружи ни Се
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="mx-auto w-4/5 mt-[140px]">
        <h1 class="text-3xl font-extrabold px-5">Најнови вести</h1>
        <div class="container mx-auto mt-8">
            <!-- Flex container with scroll -->
            <div class="flex overflow-x-auto space-x-4 p-4 scrollbar snap-x snap-mandatory">
                <!-- Image 1 with text overlay at the bottom -->
                <div class="relative w-82 h-64 shrink-0 snap-center">
                    <img src="{{asset('images/Homepage/homepage_card_2.jpg')}}" alt="Image 1" class="w-full h-full object-cover rounded-3xl"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                        <div class="flex justify-between items-center">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-xs font-semibold">BUILD YOUR STRENGTH</span>
                            <span class="text-white text-xs">27.08.2023</span>
                        </div>
                        <p class="text-white text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, deserunt?</p>
                        <div class="mt-3">
                            <a href="#" class="text-white text-xs rounded-full">Види Повеќе -></a>
                        </div>
                    </div>
                </div>

                <!-- Image 2 with text overlay at the bottom -->
                <div class="relative w-82 h-64 shrink-0 snap-center">
                    <img src="{{asset('images/Homepage/homepage_card_2.jpg')}}" alt="Image 2" class="w-full h-full object-cover rounded-3xl"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                        <div class="flex justify-between items-center">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-xs font-semibold">BUILD YOUR STRENGTH</span>
                            <span class="text-white text-xs">27.08.2023</span>
                        </div>
                        <p class="text-white text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, deserunt?</p>
                        <div class="mt-3">
                            <a href="#" class="text-white text-xs rounded-full">Види Повеќе -></a>
                        </div>
                    </div>
                </div>

                <!-- Image 3 with text overlay at the bottom -->
                <div class="relative w-82 h-64 shrink-0 snap-center">
                    <img src="{{asset('images/Homepage/homepage_card_2.jpg')}}" alt="Image 3" class="w-full h-full object-cover rounded-3xl"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                        <div class="flex justify-between items-center">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-xs font-semibold">BUILD YOUR STRENGTH</span>
                            <span class="text-white text-xs">27.08.2023</span>
                        </div>
                        <p class="text-white text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, deserunt?</p>
                        <div class="mt-3">
                            <a href="#" class="text-white text-xs rounded-full">Види Повеќе -></a>
                        </div>
                    </div>
                </div>

                <!-- Image 4 with text overlay at the bottom -->
                <div class="relative w-82 h-64 shrink-0 snap-center">
                    <img src="{{asset('images/Homepage/homepage_card_2.jpg')}}" alt="Image 4" class="w-full h-full object-cover rounded-3xl"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                        <div class="flex justify-between items-center">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-xs font-semibold">BUILD YOUR STRENGTH</span>
                            <span class="text-white text-xs">27.08.2023</span>
                        </div>
                        <p class="text-white text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, deserunt?</p>
                        <div class="mt-3">
                            <a href="#" class="text-white text-xs rounded-full">Види Повеќе -></a>
                        </div>
                    </div>
                </div>

                <!-- Additional images if needed -->
                <div class="relative w-82 h-64 shrink-0 snap-center">
                    <img src="{{asset('images/Homepage/homepage_card_2.jpg')}}" alt="Image 5" class="w-full h-full object-cover rounded-3xl"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-3xl">
                        <div class="flex justify-between items-center">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-xs font-semibold">BUILD YOUR STRENGTH</span>
                            <span class="text-white text-xs">27.08.2023</span>
                        </div>
                        <p class="text-white text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, deserunt?</p>
                        <div class="mt-3">
                            <a href="#" class="text-white text-xs rounded-full">Види Повеќе -></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="mx-auto w-4/5 mt-[70px]">
        <div class="flex flex-row justify-end">
            <button
                type="button"
                class="bg-[#b8afda] font-extrabold rounded-3xl text-xl px-[15px] py-[10px] text-center dark:border-gray-900 dark:text-black">
                Види За Цел Месец
            </button>
        </div>
    </div>


    <div class="mx-auto w-4/5 mt-[70px]">
        <h1 class="text-2xl font-extrabold px-5">Нашите услуги</h1>
    </div>

    <div class="flex mx-auto my-8 w-10/12">
        <!-- Image Section -->
        <div class="w-1/2 px-2">
            <img class="filter grayscale w-full h-[608px] rounded-2xl object-cover"
                 src="{{ asset('images/Homepage/homepage_uslugi_cardimg.jpg') }}" alt="">
        </div>

        <!-- Text Section -->
        <div class="w-1/2 flex flex-col justify-between">
            <!-- First Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-3xl pb-2 text-left">01 Мултифункционален центар Крикни</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim. Est dapibus turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>

            <!-- Second Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-3xl pb-2 text-left">02 Независни станбени единици</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim. Est dapibus turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>

            <!-- Third Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-3xl pb-2 text-left">03 Мултифункционален центар Крикни</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim. Est dapibus turpis metus ac rhoncus tellus volutpat.
            Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim. Est dapibus turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>
        </div>
    </div>



    <div class="mx-auto w-4/5 mt-[70px] mb-[54px]">
        <h1 class="text-4xl font-extrabold px-5">Партнери</h1>
    </div>
    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">
    <div class="mx-auto w-4/5 flex items-center space-x-28">
        <div class="w-1/4">
            <img src="{{ asset('images/icons/VCS 1.png') }}" alt="">
        </div>
        <div class="w-1/4">
            <img src="{{ asset('images/icons/mladi_hub.png') }}" alt="">
        </div>
        <div class="w-1/4">
            <img src="{{ asset('images/icons/nmsmakedonija.png') }}" alt="">
        </div>
        <div class="w-1/4">
            <img src="{{ asset('images/icons/stella.png') }}" alt="">
        </div>
    </div>

    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">

</x-guest-layout>
