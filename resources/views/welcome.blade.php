<x-guest-layout>
    <div class="relative text-center">
        @session('success')
        <div class="absolute top-[10px] transform -translate-x-1/2 left-1/2 w-full">
            <span class="text-green-700 text-2xl">
                {{ session('success') }}
            </span>
        </div>
        @endsession
        <section class="bg-[url('http://localhost:8002/images/Homepage/herosection_1920x1120px.jpg')] bg-cover max-h-screen pt-[200px] h-screen">
            <div class="absolute top-[110px] transform -translate-x-1/2 left-1/2 text-center px-4 md:px-0">
                <h1 class="text-2xl md:text-3xl font-extrabold">ПРОМЕНАТА ДОАЃА</h1>
                <h1 class="text-2xl md:text-3xl font-extrabold">ОД МЛАДИТЕ</h1>
                <div class="mt-10 md:mt-[120px]">
                    <h1 class="text-xl md:text-2xl font-bold">Кои сме ние?</h1>
                </div>
                <div class="w-full md:w-[480px] mx-auto text-center">
                    <p>
                        Центарот за младински активизам Крик е невладина, непрофитна организација основана од млади
                        луѓе, предводена од млади луѓе и работи за и со млади луѓе.
                    </p>
                </div>
                <div class="mt-[40px]">
                    <a href="{{ url('/about-us') }}">
                        <button type="button" class="w-full md:w-80 bg-[#B8AFDA] font-extrabold rounded-3xl text-lg md:text-xl px-[30px] py-[16px] text-center dark:border-gray-900 dark:text-black">
                            Повеќе за Нас
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <div class="flex flex-col lg:flex-row mx-auto w-4/5 bg-black rounded-2xl relative top-[-160px] p-4 lg:p-0">
        @foreach($currentProject as $project)
            <div class="w-full lg:w-1/2 px-5 mb-6 lg:mb-0 h-[455px]">
                <div class="mt-[68px] text-white">
                    <h1 class="text-2xl md:text-3xl font-extrabold text-[#f8ac2e] pb-[40px]">{{ $project->title }}</h1>
                    {!! $project->description !!}
                    <div class="flex flex-col sm:flex-row gap-[20px] lg:gap-[150px] mt-6 lg:mt-[20%]">
                        <button type="button" class="w-full sm:w-auto mr-[24px] bg-[#F8AC2E] font-bold rounded-2xl text-sm px-[60px] py-[10px] text-center dark:border-gray-900 dark:text-dark">
                            Види Повеќе
                        </button>
                        <button type="button" class="w-full sm:w-auto mr-[24px] bg-[#B8AFDA] font-bold rounded-2xl text-sm px-[60px] py-[10px] text-center dark:border-gray-900 dark:text-dark">
                            Пријави се!
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                @foreach($images as $image)
                    <img src="{{ $image->getFullUrl() }}" alt="{{ $project->title }}" class="w-full h-[300px] md:h-[455px] object-cover rounded-2xl">
                @endforeach
            </div>
        @endforeach
    </div>

    <!-- Statistics Section -->
    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">
    <div class="flex flex-col md:flex-row mx-auto my-8 w-3/4 space-y-6 md:space-y-0 md:space-x-4">
        <div class="w-full md:w-4/12 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-red-500">320+</h2>
            <h2 class="text-xl text-red-500">Проекти</h2>
        </div>
        <div class="w-full md:w-4/12 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-red-500">580+</h2>
            <h2 class="text-xl text-red-500">Волонтери</h2>
        </div>
        <div class="w-full md:w-4/12 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-red-500">25+</h2>
            <h2 class="text-xl text-red-500">Партнери</h2>
        </div>
    </div>

    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">

    <!-- Volunteer Section -->
    <div class="mx-auto w-4/5 flex flex-col lg:flex-row my-5 space-y-6 lg:space-y-0 lg:space-x-4">
        <div class="w-full lg:w-4/6">
            <img class="rounded-2xl object-cover w-full" src="{{ asset('images/image_22.png') }}" alt="">
        </div>
        <div class="w-full lg:w-2/6 bg-black rounded-2xl p-6">
            <h1 class="text-2xl text-white font-bold">Стани</h1>
            <h2 class="text-xl text-white font-bold">Волонтер</h2>
            <p class="text-white mt-6">
                Сакаш да работиш со млади лица? Оваа можност е токму за тебе.
            </p>
            <div class="mt-10">
                <a href="{{ url('/volunteers-app') }}">
                    <button type="button" class="hover:text-white border border-gray-800 font-medium rounded-2xl text-sm px-[40px] py-[10px] text-center dark:border-white dark:text-white">
                        Придружи ни Се
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto w-4/5 mt-[140px]">
        <h1 class="text-2xl md:text-3xl font-extrabold px-5">Најнови вести</h1>
        <div class="container mx-auto mt-8">
            <!-- Flex container with scroll -->
            <div class="flex overflow-x-auto space-x-4 p-4 scrollbar snap-x snap-mandatory text-white">
                @foreach ($projects as $project)
                    <div class="relative w-82 h-64 shrink-0 snap-center">
                        @if ($project->hasMedia('project_images'))
                            <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="{{ $project->title }}" class="w-full h-full object-cover rounded-3xl"/>
                        @else
                            <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="w-full h-full object-cover rounded-3xl"/>
                        @endif
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                            <div class="flex justify-between items-center">
                                <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-[10px] font-semibold">{{ $project->category->name }}</span>
                                <span class="text-white text-xs">{{ $project->created_at->format('d.m.Y') }}</span>
                            </div>
                            {!! Str::limit($project->description, 24) !!}
                            <div class="mt-3">
                                <a href="{{ route('project.show', $project->id) }}" class="text-white text-xs rounded-full">Види Повеќе -></a>
                            </div>
                        </div>
                    </div>
                @endforeach
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

    <div class="flex flex-col lg:flex-row mx-auto my-8 w-full lg:w-10/12">
        <!-- Image Section -->
        <div class="w-full lg:w-1/2 px-2 mb-8 lg:mb-0">
            <img class="filter grayscale w-full h-[300px] lg:h-[608px] rounded-2xl object-cover"
                 src="{{ asset('images/Homepage/homepage_uslugi_cardimg.jpg') }}" alt="">
        </div>

        <!-- Text Section -->
        <div class="w-full lg:w-1/2 flex flex-col justify-between">
            <!-- First Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl lg:text-3xl pb-2 text-left">01 Мултифункционален центар Крикни</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-full lg:w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim.
                Est dapibus turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>

            <!-- Second Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl lg:text-3xl pb-2 text-left">02 Независни станбени единици</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-full lg:w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim.
                Est dapibus turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>

            <!-- Third Block -->
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl lg:text-3xl pb-2 text-left">03 Мултифункционален центар Крикни</h1>
                <svg class="ml-[35px]" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="25.5" fill="#191919"/>
                    <path d="M17.8813 34.1667L32.9473 19M32.9473 19V33.56M32.9473 19H18.484" stroke="white"
                          stroke-width="2" stroke-linecap="square"/>
                </svg>
            </div>
            <p class="w-full lg:w-[80%]">Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim.
                Est dapibus turpis metus ac rhoncus tellus volutpat.
                Lorem ipsum dolor sit amet consectetur. Non at at risus dolor accumsan vitae dignissim. Est dapibus
                turpis metus ac rhoncus tellus volutpat.</p>
            <hr class="my-6 border-t-2 border-gray-900 w-full"/>
        </div>
    </div>

    <div class="mx-auto w-4/5 mt-[70px] mb-[54px]">
        <h1 class="text-4xl font-extrabold px-5">Партнери</h1>
    </div>
    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">
    <div class="mx-auto w-full lg:w-4/5 grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/VCS 1.png') }}" alt="VCS 1" class="w-1/2 object-contain">
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/mladi_hub.png') }}" alt="Mladi Hub" class="w-1/2 object-contain">
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/nmsmakedonija.png') }}" alt="NMS Makedonija" class="w-1/2 object-contain">
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/stella.png') }}" alt="Stella" class="w-1/2 object-contain">
        </div>
    </div>


    <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8">
</x-guest-layout>
