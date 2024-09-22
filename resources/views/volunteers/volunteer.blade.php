<x-guest-layout>
    <section class="min-h-screen font-montserrat box-border bg-white">
        <div class="p-4 mx-auto max-w-screen-x1 py-3 w-4/5">
            <div class="flex justify-center items-center w-full min-h-screen">
                <!-- Single Card -->
                <div class="card ">
                    <div class="flex flex-col items-center border border-black rounded-xl shadow md:flex-row bg-white">
                        <img class="w-full rounded-lg h-[500px] md:h-[400px] md:w-96 object-cover" src=" {{ asset('storage/'. $volunteer->image) }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal px-9">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">{{ $volunteer->name }}</h5>
                            <p class="mb-3 font-normal ">{{ $volunteer->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Projects -->
            <div class="py-2 projects w-full">
                <h2 class="mx-2 text-3xl font-bold tracking-tight">Проекти во кои учествуваа</h2>
                <div class="grid grid-cols-3 py-10 gap-3">
                    <div class="w-1/3">
                        <div class="rounded-full bg-white border-2 border-black text-center font-bold text-sm p-1 px-3 mb-3">Тековен</div>

                        <div class="card">
                            <div class="relative w-[330px] h-[300px] ">
                                <a href="#">
                                    <div class="absolute inset-0 bg-black opacity-30 rounded-3xl"></div>
                                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('images/Homepage/homepage_card_2.jpg') }}" alt="image description">
                                </a>
                                <figcaption class="absolute px-5 text-xs text-white bottom-3 py-2">
                                    <div class="flex flex-row ">
                                        <div class="rounded-full bg-amber-500 text-black text-xs text-center">
                                            АКТИВНОСТ ECO-ACTION
                                        </div>
                                        <div class="text-sm">
                                            <i class="fa-solid fa-calendar text-gray-500"></i>
                                            <p class="px-6  text-gray-300 text-xs">25.08.2023</p>
                                        </div>
                                    </div>
                                    <p class="py-2 text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, non?</p>
                                    <a href="#" class="text-sm text-gray-200">Види Повеќе <i class="fa-solid fa-arrow-right text-gray-200"></i> </a>
                                </figcaption>
                            </div>
                        </div>


                    </div>
                    <div class="w-1/3">
                        <div class="rounded-full bg-white border-2 border-black text-center font-bold text-sm p-1 px-3 mb-3">Завршен</div>
                        <div class="card">
                            <div class="relative w-[330px] h-[300px] ">
                                <a href="#">
                                    <div class="absolute inset-0 bg-black opacity-30 rounded-3xl"></div>
                                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('images/Homepage/homepage_card_3.jpg') }}" alt="image description">
                                </a>
                                <figcaption class="absolute px-5 text-xs text-white bottom-3 py-2">
                                    <div class="flex flex-row ">
                                        <div class="rounded-full bg-amber-500 text-black text-xs text-center py-1 px-1 font-bolder">ESC Volunteers</div>
                                        <div class="text-sm">
                                            <i class="fa-solid fa-calendar text-gray-500"></i>
                                            <p class="px-6 text-gray-300 text-xs">15.08.2023-21.08.2023</p>
                                        </div>
                                    </div>
                                    <p class="py-2 text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, non?</p>
                                    <a href="#" class="text-sm text-gray-200">Види Повеќе -></a>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <div class="rounded-full bg-white border-2 border-black text-center font-bold text-sm p-1 px-3 mb-3">Завршен</div>
                        <div class="card">
                            <div class="relative w-[330px] h-[300px] ">
                                <a href="#">
                                    <div class="absolute inset-0 bg-black opacity-30 rounded-3xl"></div>
                                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('images/Homepage/homepage_card_4.jpg') }}" alt="image description">
                                </a>
                                <figcaption class="absolute px-5 text-white bottom-3 py-2 text-xs">
                                    <div class="flex flex-row ">
                                        <div class="rounded-full bg-amber-500 text-black text-xs text-center py-1 px-1 font-bolder">ЛЕТЕН КАМП</div>
                                        <div class="text-sm">
                                            <i class="fa-solid fa-calendar text-gray-500"></i>
                                            <p class="px-6 text-gray-300 ">20.09.2023</p>
                                        </div>
                                    </div>
                                    <p class="py-2 text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, non?</p>
                                    <a href="#" class="text-sm text-gray-200">Види Повеќе -></a>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>